@extends('admin.template')


@section('conteudo_admin')
@if(isset($categorias))
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <h3>Cadastro de Categoria</h3>
        </div>
        <div class="col-md-2">
            <a href="/admin/categoria/cadastro"><button type="button" class="btn btn-primary">Adicionar</button></a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categoria)
          <tr>
            <th scope="row">{{$categoria->id_categoria}}</th>
            <td>{{$categoria->nome_categoria}}</td>
            <td><a href="/admin/categoria/editar_categoria/{{$categoria->id_categoria}}">Editar</a></td>
            <td><a href="/admin/categoria/remover_categoria/{{$categoria->id_categoria}}">Remover</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endif
@endsection
