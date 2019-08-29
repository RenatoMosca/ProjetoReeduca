@extends('admin.template')


@section('conteudo_admin')
<body>


<form name="cadastrar_categoria" type="text" method="post" enctype="multipart/form-data" action="/admin/cadastrar_categoria">

@csrf

<div class="form-group">
    <label for="titulo">Categoria</label>
    <input type="text" class="form-control" id="categoria" name="categoria">
</div>