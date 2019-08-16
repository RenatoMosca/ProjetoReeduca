
<body>


  <form name="editar_autor" type="text" method="post" enctype="multipart/form-data" action="/admin/autor/editar_autor/{{$autor->id_autor}}">

    @csrf
  Nome do autor: <input type="text" value="{{$autor->nome_autor}}" name="nome_autor"></br>

   <!-- com o javascript ajusta o botão -->
    <button type="" id="botao_editar" class="btn btn-primary" name="bt2">Editar </button>


  </form>
</body>
