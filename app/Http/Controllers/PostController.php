<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //método exibir todos os posts

    public function exibirTodos(){
        $posts = Post::all();
        return view('admin.post',['post'=>$posts]);
    }

     //método criar um post
    protected function create(array $data){
   

        return Post::create([
            'id_post' => $data['id_post'],
            'titulo' => $data['titulo'],
            'url_img_post' => $data['url_img_post'],
            'nome_autor_post' => $data['nome_autor_post'],
            'desc_breve' => $data['desc_breve'],
            'artigo' => $data['artigo'],
            'id_categoria' => $data['id_categoria'],
            
            // 'id_usuario_ava'=> $data['id_usuario_ava'],
        ]);
        }

    //método editar um post

    public function edit($id) {
        $posts = Post::find($id);
        return view('admin.post',['posts'=>$posts]);
         }

//método update um post

public function update($id) {
    $posts = Post::find($id);
    $posts ->titulo = Input::get('titulo');
    $posts ->nome_autor_post = Input::get('nome_autor_post');
    $posts ->desc_breve = Input::get('desc_breve');
    $posts ->id_categoria = Input::get('id_categoria');
    $posts ->save();    
    return Redirect::to('post')->with('notice', 'El usuario ha sido modificado correctamente.');
 }

}
