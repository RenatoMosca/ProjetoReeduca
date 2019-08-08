@extends('admin.template')


@section('conteudo_admin')
@if(isset($posts))
    @foreach($posts as $post)
    {{$post}}
    @endforeach
@endif
@endsection
