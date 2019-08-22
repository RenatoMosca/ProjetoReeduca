
<body>


  <form name="cadastrar_produto" type="text" method="post" enctype="multipart/form-data" action="/admin/produto/cadastrar_produto">

    @csrf
  Nome do produto: <input type="text" name="nome_produto"></br>
  Descrição: <input type="text" name="desc_produto"></br>
  Pré-requisitos: <input type="text" name="pre_requisitos"></br>
  Url imagem: <input type="text" name="url_img_prod"></br>
  Carga horária: <input type="text" name="carga_horaria"></br>
  Valor: <input type="number" name="valor"></br>
  Público-alvo: <input type="text" name="publico_alvo"></br>
  Ementa: <input type="text" name="ementa"></br>
    <button type="submit" id="botao_cadastrar" class="btn btn-primary" name="bt1">Cadastrar </button>

    <!-- com o javascript ajusta o botão -->
    <button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
