<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    //método exibir todos os posts

    public function exibirTodos(){
        $posts = Post::all();
        return view('admin.post',['posts'=>$posts]);
    }
     
     //passo 1
    public function cadastrar(){
          
         return view('admin.cadastrar_post');
     }
    
      //passo 2     
    
    public function create(Request $request){
   
        $post = new Post();

        $post->titulo = $request->titulo;
        $post->url_img_post = $request->url_img_post;
        $post->nome_autor_post = $request->nome_autor_post;
        $post->desc_breve = $request->desc_breve;
        $post->artigo = $request->artigo;
        // $post->dt_inclusão = $request->dt_inclusão;
        $post->id_categoria = 1;
        $post->save();          
           
        return redirect('/admin/post');
        }



    //método editar um post

    public function edit($id) {
        $posts = Post::find($id);
        return view('admin.post',['posts'=>$posts]);
         }

    //método update um post

    public function update($id) {
    $posts = Post::find($id);
    $posts ->titulo = Input::post('titulo');
    $posts ->nome_autor_post = Input::post('nome_autor_post');
    $posts ->desc_breve = Input::post('desc_breve');
    $posts ->id_categoria = Input::post('id_categoria');
    $posts ->save();    
    return Redirect::to('admin.post')->with('notice', 'El usuario ha sido modificado correctamente.');
 }

}
