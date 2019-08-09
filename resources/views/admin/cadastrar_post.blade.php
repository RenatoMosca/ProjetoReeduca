
<body>


@crsf
  <form name="cadastrar_post" type="text" method="post" enctype="multipart/form-data" action="/admin/post/cadastrar">

  Imagem: <input type="file" name="image" /></br> <input type="submit" value="Enviar" name="envia" />
  Título: <input type="text" name="titulo"></br>
  Nome do autor: <input type="text" name="nome_autor_post"></br>
   <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>c
  Artigo completo: <input type="text" name="artigo"></br>
  Categorias: <br>

<button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
                        
