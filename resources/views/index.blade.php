<!DOCTYPE html>
<html lang="en">
<title>Home - Reeduca</title>

@include('head')
<body class="home">
@include('header')

<!-- CARROSSEL DA PÁGINA HOME -->
<section class="carousel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner imgcarrossel">
    <div class="carousel-item active" style="background-image: url({{ asset('images/preserve.jpg')}})">
    </div>
    <div class="carousel-item" style="background-image: url({{ asset('images/plastico_praia.jpg')}})"></div>
    <div class="carousel-item" style="background-image: url({{ asset('images/lacre_lata.jpg')}})"></div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="container-texto">
    <div class="texto-fixo">
      <h1>Reciclar, educar...</h1>

    </div>
    <div class="texto-fixo-2">
      <h1>Você pode!</h1>

    </div>
</div>
</section>

<!-- CONTEÚDO DA PÁGINA HOME -->

<div class="callout">
<div class="container">
    <div class="row">
            <div class="col callout-green-text">
                <h2>Conheça nosso catálogo de Cursos</h2>
            </div>
            <div class="col callout-green-button">
                <button type="button" class="btn btn-success comece" onclick="javascript: location.href='loja';">Clique aqui</button>
            </div>
        </div>

    </div>
</div>

<section>
    <div class="home-page">
        <div class="conteudo-texto col-lg-4">
            <h2>
            Educar para <i>renovar</i><br>
            nossos recursos naturais.</h2>
            <h5>Você tem o poder</h5>
            <p>
            Se você acredita em um mundo saudável, pacífico, digno e justo para todos, então estamos ao seu lado para alcançá-lo, seja agindo nas ruas, na internet, em pequenas comunidades, nas grandes salas do poder ou nos locais mais remotos do planeta. Se tem ideias para chegarmos lá mais rápido, queremos aprender com você. Vamo sonhar, planejar e agir juntos.</p>
        </div>
        <div class="conheca col-lg-4">
            <a href="/remoney"><img class="img-money" src="{{ asset('images/dinheirinho.png')}}" alt="conheca-nosso-programa"></a>
        </div>
    </div>
</section>
<hr>


<section class="parceiros text-center">
    <h4>Parceiros</h4>
    <div class="container">
    <div class="row">
        <div class="col">
          <img src="{{ asset('images/1.jpg')}}" alt="">
        </div>
      <div class="col">
          <img src="{{ asset('images/2.jpg')}}" alt="">
        </div>
      <div class="col">
          <img src="{{ asset('images/3.jpg')}}" alt="">
        </div>
      <div class="col">
          <img src="{{ asset('images/4.jpg')}}" alt="">
    </div>
        </div>
    </section>

    <hr>


<div class="container callout-newsletter">
        <div class="row justify-content-md-center">
          <div class="col col-lg-6">
                <p class="chamadaNewsletter">Assine nossa newsletter e ganhe um e-book!</p>
          </div>
          <div class="col col-lg-4">
                <input class="form-control" type="email" name="email-newsletter" placeholder="Digite seu e-mail">
          </div>
          <div class="col col-lg-2">
                <button type="button" class="btn btn-success">
                        Clique aqui
                    </button>
          </div>
        </div>
</div>







@include('footer')
@include('funcoes')

</body>
</html>
