
<body>


  <form name="editar_categoria" type="text" method="post" enctype="multipart/form-data" action="/admin/categoria/editar_categoria/{{$categoria->id_categoria}}">

    @csrf
  Nome da categoria: <input type="text" value="{{$categoria->nome_categoria}}" name="nome_categoria"></br>

   <!-- com o javascript ajusta o botão -->
    <button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
