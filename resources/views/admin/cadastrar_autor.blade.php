


@extends('admin.template')


@section('conteudo_admin')
<body>





<form name="cadastrar_autor" type="text" method="post" enctype="multipart/form-data" action="/admin/autor/cadastrar_autor">
@csrf
<div class="form-group">
    <label for="nome_autor"> Nome do Autor</label>
    <input type="text" class="form-control" id="nome_autor" name="nome_autor">
  </div>

 
<button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


</form>

@endsection

<body>


 
