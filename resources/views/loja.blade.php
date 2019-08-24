<!DOCTYPE html>
<html lang="en">
<title>Lojas - Reeduca</title>
@include ('head')
<body>
@include ('header')

<section class = "texto-loja" col-lg-12>

<div class="jumbotron jumbotron-fluid">
  <div class="container texto-titulo ">
    <h1>Reeduca Cursos</h1>
    <p>Porque a mudança <br>começa primeiro </br>em você</p>
  </div>
</div>

@foreach($produtos as $produto)
<div class="row">
    {{-- <div class="card"> --}}
        <div class="col-sm-2">
        </div>
<<<<<<< HEAD
        <h5 style="font-family: 'Domine', serif;" class="card-title"><i class="fas fa-recycle"></i>   Gestão de resíduos plásticos pós-consumo</h5>
        <p class="card-text">Um olhar para o fututo do processo no Brasil. Melhores soluções e aplicações.</p>
        <a href="/detalhe-curso" class="btn btn-primary">Veja os detalhes</a>
        <img src="{{ asset($post->url_img_prod)}}" alt="curso">
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 style="font-family: 'Domine', serif;" class="card-title"><i class="fas fa-recycle"></i>  Tratamento de resíduos sólidos no dia a dia</h5>
        <p class="card-text">Adquira conhecimentos sobre tipos de reciclagem e a importância de reciclar.</p>
        <a href="/detalhe-curso" class="btn btn-primary">Veja os detalhes</a>
        <img src="{{ asset($post->url_img_prod)}}" alt="curso">
      </div>
    </div>
  </div>
  <div class="col-sm-2"></div>
=======
        <div class="col-sm-4">
            <div class="card-body">
                <h5 style="font-family: 'Domine', serif;" class="card-title"><i class="fas fa-recycle"></i>   {{$produto->nome_produto}}</h5>
                <p class="card-text">{{$produto->desc_produto}}</p>
                <a href="/detalhe-produto/{id}" class="btn btn-primary">Veja os detalhes</a>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card-img img-responsive">
                {{-- <img src="{{ asset() }}" alt=""> --}}
                <img src="{{ asset(<?php echo $produto->produto ?>) }}" alt="">
            </div>
        </div>
        <div class="col-sm-2">
        </div>
    {{-- </div> --}}
>>>>>>> a45afb2546fca7e0e22300a43f307dbce9a1e085
</div>
<hr>
@endforeach

<br>

</section>
@include ('footer')
@include ('funcoes')
  </body>
</html>
