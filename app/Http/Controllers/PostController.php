<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function exibirTodos(){
        $posts = Post::all();
        return view('admin.post',['posts'=>$posts]);
    }

    
}
