

@extends('admin.template')


@section('conteudo_admin')
<body>



<form name="cadastrar_produto" type="text" method="post" enctype="multipart/form-data" action="/admin/produto/cadastrar_produto">
@csrf
<div class="form-group">
    <label for="nome_produto"> Nome do produto</label>
    <input type="text" class="form-control" id="nome_produto" name="nome_produto">
  </div>

 
<div class="form-group">
    <label for="desc_produto">Descrição</label>
    <textarea class="form-control" id="descricao" name="desc_produto" rows=""></textarea>
</div>

<div class="form-group">
    <label for="pre_requisitos">Pré-requisitos</label>
    <input type="text" class="form-control" id="pre_requisitos"  name="pre_requisitos"></br>
</div>

<div class="form-group">
    <label for="carga_horaria">Carga horária</label>
    <input type="text" class="form-control" id="carga_horaria"  name="carga_horaria"></br>
</div>

<div class="form-group">
    <label for="valor">Valor</label>
    <input type="number" class="form-control" id="valor" name="valor" rows=""></input>
</div>

<div class="form-group">
    <label for="publico_alvo"> Público-alvo</label>
    <input type="text" class="form-control" id="publico_alvo"  name="publico_alvo"></br>
</div>
 
<div class="form-group">
    <label for="ementa"> Ementa</label> 
    <textarea class="form-control" id="ementa"  name="ementa" rows="5"></textarea>
</div>


  <div class="form-group">
    <label for="url_img_prod">Imagem</label>
    <input type="file" class="form-control-file" id="url_img_prod" name="img_produto">
  </div>


 
<button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


</form>

@endsection







  

 
  

  
    