@extends('admin.template')


@section('conteudo_admin')
@if(isset($autores))
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <h3>Cadastro de Autores</h3>
        </div>
        <div class="col-md-2">
            <a href="/admin/autor/cadastro"><button type="button" class="btn btn-primary">Adicionar</button></a>
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
        @foreach($autores as $autor)
          <tr>
            <th scope="row">{{$autor->id_autor}}</th>
            <td>{{$autor->nome_autor}}</td>
            <td><a href="/admin/autor/editar_autor/{{$autor->id_autor}}">Editar</a></td>
            <td><a href="/admin/autor/remover_autor/{{$autor->id_autor}}">Remover</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endif
@endsection
