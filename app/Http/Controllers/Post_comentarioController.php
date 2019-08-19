<?php

namespace App\Http\Controllers;
use App\Post_comentario;
use Illuminate\Http\Request;


class Post_comentarioController extends Controller
{

    public function cadastroComentario($id){
        return view('admin.comentario_teste', ['idpost' => $id]);
    }
    public function exibirTodosComentarios(){
        $posts_comentarios = Post_comentario::all();
        return view('admin.post_comentario',['posts_comentarios'=>$posts_comentarios]);
    }

    public function statusComentario(){
        $post_comentario = Post_comentario::where('status', '==', 'ativo');
        return view();
    }
    
    public function create(Request $request){
        $date = $request ->all();

        $post_comentario = new Post_comentario();

        $post_comentario->status = $request->status;
        $post_comentario->nome_autor_comentario = $request->nome_autor_comentario;
        $post_comentario->url_img_comentario = "";
        $post_comentario->comentario = $request->comentario;
        $post_comentario->id_post = $request->idpost;
        $post_comentario->status = "";

        $post_comentario->save();

        if($request->file('url_img_comentario')){
            $name = kebab_case($request->name).uniqid($post_comentario->id);
            $extension = $request->url_img_comentario->extension();
            $nameImagem = "{$name}.$extension";
            $date['url_img_comentario'] = $nameImagem;


            $upload = $request->url_img_comentario->storeAs('fotosComentarios', $nameImagem);

        }

       // $post_comentario->update($date);
            return redirect('/admin/post_comentario');
    }

    public function delete($id) {
        $posts_comentarios = Post_comentario::find($id);
        $posts_comentarios -> delete();
        return redirect('/admin/post_comentario');
    }
    // public function aprovacao(Request $request){

    //     $post_comentario =
    // }

}
