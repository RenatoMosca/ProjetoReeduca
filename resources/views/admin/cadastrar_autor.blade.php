
<body>


  <form name="cadastrar_autor" type="text" method="post" enctype="multipart/form-data" action="/admin/autor/cadastrar_autor">

    @csrf
  Nome do autor: <input type="text" name="nome_autor"></br>

    <button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

    <!-- com o javascript ajusta o botão -->
    <button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
