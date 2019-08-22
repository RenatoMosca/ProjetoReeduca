@extends('admin.template')


@section('conteudo_admin')
@if(isset($produtos))

    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-9">
            <h3>Cadastro de produtos</h3>
        </div>
        <div class="col-md-2">
            <a href="/admin/produto/cadastro"><button type="button" class="btn btn-primary">Adicionar</button></a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Carga horária</th>
            <th scope="col">Valor</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
        @foreach($produtos as $produto)
          <tr>
            <th scope="row">{{$produto->id_produto}}</th>
            <td>{{$produto->nome_produto}}</td>
            <td>{{$produto->carga_horaria}}</td>
            <td>{{$produto->valor}}</td>
            <td><a href="/admin/produto/editar_produto/{{$produto->id_produto}}">Editar</a></td>
            <td><a href="/admin/produto/remover_produto/{{$produto->id_produto}}">Remover</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endif
@endsection
