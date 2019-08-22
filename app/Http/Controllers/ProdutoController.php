<?php

namespace App\Http\Controllers;
use App\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    //método exibir todos

    public function exibirTodos(){
        $produtos = Produto::all();
        return view('admin.produto',['produtos'=>$produtos]);
    }

    public function cadastrar(){

        return view('admin.cadastrar_produto');
    }

     //método criar um produto
    protected function create(request $data){
        $produtos = Produto::create([
            'nome_produto' => $data->nome_produto,
            'desc_produto' => $data->desc_produto,
            'pre_requisitos'=> $data->pre_requisitos,
            'url_img_prod'=> $data->url_img_prod,
            'carga_horaria'=> $data->carga_horaria,
            'valor'=> $data->valor,
            'publico_alvo'=> $data->publico_alvo,
            'ementa'=> $data->ementa,
        ]);
        return redirect('admin/produto')->with('notice', 'Produto incluído com sucesso!');
        }

    //método editar um produto
    public function edit($id) {
        $produto = Produto::find($id);
        return view('admin.editar_produto',['produto'=>$produto]);
         }

    //método update um produto
    public function update(request $request, $id) {
        $produtos = Produto::find($id);
        $produtos ->nome_produto = $request ->nome_produto;
        $produtos ->desc_produto = $request ->desc_produto;
        $produtos ->pre_requisitos = $request ->pre_requisitos;
        $produtos ->url_img_prod = $request ->url_img_prod;
        $produtos ->carga_horaria = $request ->carga_horaria;
        $produtos ->valor = $request ->valor;
        $produtos ->publico_alvo = $request ->publico_alvo;
        $produtos ->ementa = $request ->ementa;
        $produtos ->save();
        return redirect('/admin/produto')->with('notice', 'Produto atualizado com sucesso!');
    }

    public function delete($id) {
        $produtos = Produto::find($id);
        $produtos -> delete();
        return redirect('/admin/produto');
    }


}
