<?php

namespace App\Http\Controllers;
use App\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
{

    //método exibir todos os posts

    public function exibirTodos(){
        $produtos = Loja::all();
        return view('loja',['produtos'=> $produtos]);
    }

}
