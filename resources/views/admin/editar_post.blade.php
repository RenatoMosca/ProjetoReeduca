
<body>



  <form name="cadastrar_post" type="text" method="post" enctype="multipart/form-data"  action="/admin/post/editar_post/{{$post->id_post}}">
  @csrf
  Imagem: <input type="text" value="{{$post->url_img_post}}" name="url_img_post" />
  Título: <input type="text" value="{{$post->titulo}}"  name="titulo"></br>
  Nome do autor: <input type="text" value="{{$post->nome_autor_post}}" name="nome_autor_post"></br>
  Desc breve: <input type="text" value="{{$post->desc_breve}}" name="desc_breve"></br>
 
  Artigo completo: <input type="text" value="{{$post->artigo}}" name="artigo"></br>
  <!-- Categorias: <br> -->

 <button type="" id="botao_editar" class="btn btn-primary" name="bt2">Salvar </button>



  </form>
</body>