@extends('admin.template')


@section('conteudo_admin')
@foreach($posts as $post)
{{$post}}
@endforeach
@endsection