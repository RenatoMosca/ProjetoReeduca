<?php

namespace App\Http\Controllers;
use App\Produto;

class DetalheProdutoController extends Controller
{


    public function exibirProduto($id){
        $produto = Produto::find($id);
        return view('detalhe-produto',['produto'=>$produto]);
    }

}
