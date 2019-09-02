<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;
class DetalheCompraController extends Controller
{

    public function exibirProduto(Request $request,$id){

        if (isset(auth()->user()->id)){
            $produto = Produto::find($id);

            return view('detalhe-compra',['produto'=>$produto]);
        } else {
            $request->session()->put('intencao-compra', $id);
            return redirect('login');
        }

    }

}
