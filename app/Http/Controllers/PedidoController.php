<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;

use App\Mail\BoasVindasEmail;
use App\Pedido;
// use App\Itens_Pedido;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;


class PedidoController extends Controller
{

    protected function create(request $data){
        $pedido = Pedido::create([
            'status' => 'aguardando pagamento',
            'id' => $data->id_usuario,
            'forma_pagto' => 'cartao',
            'nr_parcelas' => 0,
        ]);

        //criar usuario no Moodle
        $client = new Client();
        $response = $client->request('POST', "reeduca.amtsol.com.br/moodle/_services/response.php", [
            'form_params' => [
                'action' => 'create_user',
                'username' => auth()->user()->email,
                'first_name' => auth()->user()->name,
                'last_name' => ' - EAD',
                'email' => auth()->user()->email,
                'password' => 'Reeduca@2019',
                'city' => auth()->user()->cidade,
            ]
        ]);

        //recupera id do usuário criado no AVA Moodle
        $user = \Auth::user();
        $user->moodle_user_id = $response->getBody()->getContents();

        //matricular no curso
        $client1 = new Client();
        $response1 = $client1->request('POST', "reeduca.amtsol.com.br/moodle/_services/response.php", [
            'form_params' => [
                'action' => 'create_enrollment',
                'moodle_course_id' => 2,
                'moodle_user_id' => $user->moodle_user_id
            ]
        ]);

        //envio de e-mail de Boas Vindas
        \Mail::to('renato@amtsol.com.br')->send(new BoasVindasEmail(auth()->user()->email, 'Reeduca@2019', auth()->user()->name));

        return view('pedido',['pedido'=>$pedido]);

        }

}
