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
//site
    public function exibirTodosBlog(){
        $posts = Post::all();
        return view('blog',['posts'=>$posts]);
    }
     
    //método cadastrar posts
    public function cadastrar(){
          
         return view('admin.cadastrar_post');
     }
    
     
    //método criar posts    
      protected function create(request $data){
    
        $nameImagem = $data->url_img_post->getClientOriginalName(); 
        $nameOficial= "storage/img/".$nameImagem;
        $upload = $data->url_img_post->storeAs('public/img', $nameImagem);

        $posts = Post::create([
            'titulo' => $data->titulo,
            'url_img_post' => $nameOficial,
            'nome_autor_post' => $data->nome_autor_post,
            'desc_breve' => $data->desc_breve,
            'artigo' => $data->artigo,
            'id_categoria' =>1,
        ]);
        return redirect('admin/post')->with('notice', 'Autor incluído com sucesso!');
        }    
   


    //método editar um post
    public function edit($id) {
        $post = Post::find($id);
        return view('admin.editar_post',['post'=>$post]);
         }

    //método atualizar um post
    public function update(request $request, $id) {
        // $nameImagem = $request->image->getClientOriginalName(); 
        // $upload = $request->image->storeAs('/public/storage', $nameImagem);

        $posts = Post::find($id);   
        $posts ->titulo = $request->titulo;
        $posts ->url_img_post = $request->url_img_post;
        $posts ->nome_autor_post = $request->nome_autor_post;
        $posts ->desc_breve = $request->desc_breve;
        $posts ->artigo = $request->artigo;
        $posts ->save();       

        return redirect('/admin/post')->with('notice', 'Autor atualizado com sucesso!');
    }

    public function delete($id) {
        $posts = Post::find($id);
        $posts -> delete();
        return redirect('/admin/post');
    }

   

}
