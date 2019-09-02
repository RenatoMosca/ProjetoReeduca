<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
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
                'last_name' => '.',
                'email' => auth()->user()->email,
                // 'password' => $user->moodle_password,
                'password' => 'Reeduca@2019',
                'city' => auth()->user()->cidade,
            ]
        ]);

        //matricular no curso
        $client = new Client();
        $response = $client->request('POST', "reeduca.amtsol.com.br/moodle/_services/response.php", [
            'form_params' => [
                'action' => 'create_enrollment',
                'moodle_course_id' => 1,
                'moodle_user_id' => $data->id_usuario,
            ]
        ]);


        return view('pedido',['pedido'=>$pedido]);

        }

}
