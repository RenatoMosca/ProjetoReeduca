
<body>



  <form name="cadastrar_post" type="text" method="post" enctype="multipart/form-data" action="/admin/post/cadastrar_post">
  @csrf
  Imagem: <input type="file" name="url_img_post" /></br> 
  Título: <input type="text" name="titulo"></br>
  Nome do autor: <input type="text" name="nome_autor_post"></br>
  Desc Breve: <input type="text" name="desc_breve"></br>
  Artigo completo: <input type="text" name="artigo"></br>
  <!-- Categorias: <br> -->

<button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
                        
