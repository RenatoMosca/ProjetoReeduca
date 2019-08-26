<?php

namespace App\Http\Controllers;
use App\Pedido;
// use App\Itens_Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    protected function create(request $data){
        $pedido = Pedido::create([
            'status' => 'aguardando pagamento',
            'id' => $data->id,
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
