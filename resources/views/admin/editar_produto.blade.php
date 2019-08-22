
<body>


  <form name="editar_produto" type="text" method="post" enctype="multipart/form-data" action="/admin/produto/editar_produto/{{$produto->id_produto}}">

    @csrf
  Nome do produto: <input type="text" value="{{$produto->nome_produto}}" name="nome_produto"></br>
  Descrição: <input type="text" value="{{$produto->desc_produto}}" name="desc_produto"></br>
  Pré-requisitos: <input type="text" value="{{$produto->pre_requisitos}}" name="pre_requisitos"></br>
  Url imagem: <input type="text" value="{{$produto->url_img_prod}}" name="url_img_prod"></br>
  Carga horária: <input type="text" value="{{$produto->carga_horaria}}" name="carga_horaria"></br>
  Valor: <input type="number" value="{{$produto->valor}}" name="valor"></br>
  Público-alvo: <input type="text" value="{{$produto->publico_alvo}}" name="publico_alvo"></br>
  Ementa: <input type="text" value="{{$produto->ementa}}" name="ementa"></br>
   <!-- com o javascript ajusta o botão -->
    <button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
