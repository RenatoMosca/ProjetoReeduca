<?php

namespace App\Http\Controllers;
use App\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{

    //método exibir todos

    public function exibirTodos(){
        $autores = Autor::all();
        return view('admin.autor',['autores'=>$autores]);
    }

    public function cadastrar(){

        return view('admin.cadastrar_autor');
    }

     //método criar um autor
    protected function create(request $data){
        $autores = Autor::create([
            'nome_autor' => $data->nome_autor,
        ]);
        return redirect('admin/autor')->with('notice', 'Autor incluído com sucesso!');
        }

    //método editar um autor
    public function edit($id) {
        $autor = Autor::find($id);
        return view('admin.editar_autor',['autor'=>$autor]);
         }

    //método update um autor
    public function update(request $request, $id) {
        $autores = Autor::find($id);
        $autores ->nome_autor = $request->nome_autor;
        $autores ->save();
        return redirect('/admin/autor')->with('notice', 'Autor atualizado com sucesso!');
    }

    public function delete($id) {
        $autores = Autor::find($id);
        $autores -> delete();
        return redirect('/admin/autor');
    }


}
