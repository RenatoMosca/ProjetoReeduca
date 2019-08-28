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
    <div class="carousel-item active">
      <img src="{{ asset('images/preserve.jpg')}}" class="d-block w-100 img-responsive" alt="...">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('images/plastico_praia.jpg')}}" class="d-block w-100" alt="...">
      </div>
    <div class="carousel-item">
      <img src="{{ asset('images/lacre_lata.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container-texto" style="position: absolute;top: 100px">
      <div class="texto-fixo">
        <h1>Reciclar, educar...</h1>        
        
      </div>
      <div class="texto-fixo-2">
        <h1>Você pode!</h1>        
        
      </div>
</section>

<!-- CONTEÚDO DA PÁGINA HOME -->
<div class="callout">
 
    <div class="container">
  <div>
        <h2 class="display-6">Conheça nosso catálogo de Cursos</h2>   
  </div> 
  <div>      
    <button type="button" class="btn btn-success comece" onclick="javascript: location.href='loja';">Clique aqui</button>
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
<section class="parceiros">
<h4>Parceiros</h4>
<table class="table table-borderless">
  <tbody>
    <tr>
      <td><img src="{{ asset('images/1.jpg')}}" alt=""></td>
      <td><img src="{{ asset('images/2.jpg')}}" alt=""></td>
      <td><img src="{{ asset('images/3.jpg')}}" alt=""></td>
      <td><img src="{{ asset('images/4.jpg')}}" alt=""></td>
    </tr>
  </tbody>
</table>
</section>
<hr>
<!-- Button trigger modal -->
<div class="callout-newsletter">
        <div class="container">
            <p class="chamadaNewsletter">Assine nossa newsletter e ganhe um e-book!</p>
            <input type="email" name="email-newsletter" placeholder="Digite seu e-mail">
            <button type="button" class="btn btn-success">
                Clique aqui
            </button>
        </div>
</div>



@include('footer')
@include('funcoes')

</body>
</html>
