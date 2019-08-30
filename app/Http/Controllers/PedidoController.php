<?php

namespace App\Http\Controllers;
// namespace App\Http\Controllers\Auth;
use App\Pedido;
// use App\Itens_Pedido;
// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;


class PedidoController extends Controller
{

    protected function create(request $data){
        $pedido = Pedido::create([
            'status' => 'aguardando pagamento',
            // 'id' => Auth::user()->id,
            'id' => 1,
            'forma_pagto' => 'cartao',
            'nr_parcelas' => 0,
        ]);

        // $itens = Itens_Pedido::create([
        //     'id_pedido' => $pedidos->id,
        //     'id_produto' => $data->id_produto,
        //     'valor' => $data->valor,
        // ]);
        return view('pedido',['pedido'=>$pedido]);

        }

}
