<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class DetalheProdutoController extends Controller
{

    //método exibir todos os posts

    public function exibirProduto($id){
        $produto = Post::find($id);
        return view('detalhe-curso',['produto'=>$produto]);
    }

}
