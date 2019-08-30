


@extends('admin.template')


@section('conteudo_admin')
<body>





<form name="cadastrar_categoria" type="text" method="post" enctype="multipart/form-data" action="/admin/categoria/cadastrar_categoria">
@csrf
<div class="form-group">
    <label for="nome_categoria"> Nome da Categoria</label>
    <input type="text" class="form-control" id="nome_categoria" name="nome_categoria">
  </div>


<button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


</form>

@endsection

<body>



