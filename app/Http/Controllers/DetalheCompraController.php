<?php

namespace App\Http\Controllers;
use App\Produto;

class DetalheCompraController extends Controller
{


    public function exibirProduto($id){
        $produto = Produto::find($id);
        return view('detalhe-compra',['produto'=>$produto]);
    }

}
