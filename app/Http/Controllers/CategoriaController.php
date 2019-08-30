<?php

namespace App\Http\Controllers;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{

    //método exibir todos

    public function exibirTodos(){
        $categorias = Categoria::all();
        return view('admin.categoria',['categorias'=>$categorias]);
    }

    public function cadastrar(){

        return view('admin.cadastrar_categoria');
    }

     //método criar uma categoria
    protected function create(request $data){
        $categorias = Categoria::create([
            'nome_categoria' => $data->nome_categoria,
        ]);
        return redirect('admin/categoria')->with('notice', 'Categoria incluída com sucesso!');
        }

    //método editar uma categoria
    public function edit($id) {
        $categoria = Categoria::find($id);
        return view('admin.editar_categoria',['categoria'=>$categoria]);
         }

    //método update uma categoria
    public function update(request $request, $id) {
        $categorias = Categoria::find($id);
        $categorias ->nome_categoria = $request->nome_categoria;
        $categorias ->save();
        return redirect('/admin/categoria')->with('notice', 'Categoria atualizada com sucesso!');
    }

    public function delete($id) {
        $categorias = Categoria::find($id);
        $categorias -> delete();
        return redirect('/admin/categoria');
    }


}
