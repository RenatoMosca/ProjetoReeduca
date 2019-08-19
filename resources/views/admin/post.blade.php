@extends('admin.template')


@section('conteudo_admin')
@if(isset($posts))
    <div class="row">
        <div class="col-md-8">
            <h3>Cadastro de Posts</h3>
        </div>
        <div class="col-md-4">
            <a href="/admin/post/cadastro"><button type="button" class="btn btn-primary">Adicionar</button></a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo do Post</th>
            <th scope="col">Nome Autor</th>
            <th scope="col">Editar</th>
            <th scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
          <tr>
            <th scope="row">{{$post->id_post}}</th>
            <td>{{$post->titulo}}</td>
            <td>{{$post->nome_autor_post}}</td>
            <td><a href="/admin/post/editar_post/{{$post->id_post}}">Editar</a></td>
            <td><a href="/admin/post/remover_post/{{$post->id_post}}">Remover</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
@endif
@endsection

