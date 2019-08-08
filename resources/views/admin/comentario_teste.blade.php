<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Comentário Post</title>
</head>
<body>
    <div>
    <form action="{{route('comentarioadm')}}" method="POST" enctype="multipart/form-data">
    @csrf 
  <div class="form-group">
    <label for="nome_autor_comentario">Seu nome</label>
    <input type="text" class="form-control" id="nome_autor_comentario" aria-describedby="text" placeholder="Nome">
  </div>
  <div class="form-group">
    <label for="url_immg_comentario">Imagem</label>
    <input type="file" class="form-control-file" id="url_immg_comentario">
  </div>
  <div class="form-group">
    <label for="comentario">Digite o seu comentário</label>
    <input type="text" class="form-control" id="comentario" aria-describedby="text" placeholder="Seu Comentário">
  </div>
  
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    </div>
</body>
</html>