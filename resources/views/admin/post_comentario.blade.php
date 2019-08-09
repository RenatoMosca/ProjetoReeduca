@extends('admin.template')


@section('conteudo_admin')
@if(isset($posts_comentarios))
    @foreach($posts_comentarios as $posts_comentario)
    {{$posts_comentario}}
    @endforeach
@endif
@endsection