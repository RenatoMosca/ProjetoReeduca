<?php

namespace App\Http\Controllers;
use App\Post;
use App\Categoria;
use App\Post_comentario;
use Illuminate\Http\Request;

class DetalhePostController extends Controller
{

    //método exibir todos os posts

    public function exibirPost($id){
        $post = Post::find($id);
        $categorias = Categoria::all();
        $comentario = Post_comentario::where('id_post', "=", $id)->where('status', '=', 'ativo')->get();
        return view('detalhe-post',['post'=>$post, 'posts_comentarios'=>$comentario], ['categorias'=>$categorias]);

    }

   
}