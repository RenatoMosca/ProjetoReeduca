
<body>


<!-- <form class="cadastro_post" name="cadastrar_post" type="text" method="post" enctype="multipart/form-data" action="/admin/post/create">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
                    </div>

                    <div class="form-group">
                        <label for="idade">Idade</label>
                        <input type="number" class="form-control" id="idade" placeholder="Digite sua idade">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="number" class="form-control" id="telefone" placeholder="Digite seu telefone">
                    </div>


                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">


                    <div class="botao_contato">
                        <button type="button" class="button">Enviar</button>
                    </div>
                </form>
 -->






  <form class="cadastro_post" name="cadastrar_post" type="text" method="post" enctype="multipart/form-data" action="/admin/post/create">
  @csrf
  Imagem: <input type="file" name="url_img_post" /></br> 
  Título: <input type="text" name="titulo"></br>
  Nome do autor: <input type="text" name="nome_autor_post"></br>
  Descrição breve: <input type="text" name="desc_breve"></br>
  Artigo completo: <input type="text" name="artigo"></br>
  Categorias: <br>
                   
<button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

<!-- com o javascript ajusta o botão -->
<button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
                        