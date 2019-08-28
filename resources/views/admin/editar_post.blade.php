@extends('admin.template')


@section('conteudo_admin')
<body>

@csrf

<div class="form-group">
    <label for="imagem">Imagem</label>
    <input type="file" class="form-control-file" value="{{$post->img_post}}"" id="imagem" name="img_post">
  </div>

 
<div class="form-group">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" value="{{$post->titulo}}"" id="titulo" name="titulo">
</div>

 
<div class="form-group">
    <label for="titulo">Nome do autor</label>
    <input type="text" class="form-control"  value="{{$post->nome_autor_post}}" id="titulo" name="nome_autor_post" >
</div>

<div class="form-group">
    <label for="desc_breve">Descrição breve</label>
    <textarea class="form-control" id="desc_breve" name="desc_breve" rows="5">{{$post->desc_breve}}</textarea>
</div>

  <div class="form-group">
    <label for="artigo">Artigo </label>
    <textarea class="form-control" id="artigo"  name="artigo" rows="5">{{$post->artigo}}</textarea>
  </div>



<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


</form>
</body>
@endsection