<?php

namespace App\Http\Controllers;
use App\Post;
use App\Categoria;
use Illuminate\Http\Request;

class DetalhePostController extends Controller
{

    //método exibir todos os posts

    public function exibirPost($id){
        $post = Post::find($id);
        $categorias = Categoria::all();
        return view('detalhe-post',['post'=>$post], ['categorias'=>$categorias]);

    }

   
}