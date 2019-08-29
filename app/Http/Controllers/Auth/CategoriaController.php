<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{


public function cadastrarCategoria(){
          
          return view('admin.cadastrar_categoria');
      }
     
      
     //método criar posts    
       protected function create(Request $data){     
        
         $categorias = Categoria::create([
             'id_categoria' => $data->id_categoria,             
             'nome_categoria' => $data->nome_categoria,
            
         ]);
         return redirect('admin/post')->with('notice', 'Autor incluído com sucesso!');
         }    
}