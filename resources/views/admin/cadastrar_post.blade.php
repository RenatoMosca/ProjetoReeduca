@extends('admin.template')


@section('conteudo_admin')
<body>


<form name="cadastrar_post" type="text" method="post" enctype="multipart/form-data" action="/admin/post/cadastrar_post">

@csrf


  <div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control-file" id="imagem" name="img_post">
  </div>

 
<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" name="titulo">
</div>

 
<div class="form-group">
    <label for="titulo">Nome do autor</label>
    <input type="text" class="form-control" id="titulo" name="nome_autor_post" >
</div>

<div class="form-group">
    <label for="desc_breve">Descrição breve</label>
    <textarea class="form-control" id="desc_breve" name="desc_breve" rows=""></textarea>
</div>

  <div class="form-group">
    <label for="artigo">Artigo </label>
    <textarea class="form-control" id="artigo" name="artigo" rows=""></textarea>
  </div>
  <div class="form-group">
    <label for="selectCategoria" name="categoria">Categoria</label>
    <select class="form-control" id="selectCategoria">
    @foreach($categorias as $categoria)
    <option value= "{{$categoria->id_categoria}}">{{$categoria->nome_categoria}}</option>     
    @endforeach
    </select>
  </div>
 
 

 
<button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


</form>
</body>
         

@endsection

