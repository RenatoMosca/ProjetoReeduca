@extends('admin.template')


@section('conteudo_admin')
@if(isset($posts_comentarios))


     <div class="row">
        <div class="col-md-8">
            <h3>Comentário Post</h3>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Comentário</th>
            <th scope="col">Status</th>
            <th scope="col">Remover</th>
          </tr>
        </thead>
        <tbody>
        @foreach($posts_comentarios as $posts_comentario)
          <tr>
            <th scope="row">{{$posts_comentario->id_post_comentario}}</th>
            <td>{{$posts_comentario->nome_autor_comentario}}</td>
            <td>{{$posts_comentario->comentario}}</td>

            <td><a href="/admin/update_post_comentario/{{$posts_comentario->id_post_comentario}}">Status</a></td>
            <td><a href="/admin/remove_post_comentario/{{$posts_comentario->id_post_comentario}}">Remover</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>

@endif
@endsection