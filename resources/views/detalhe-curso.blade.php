<!DOCTYPE html>
<html lang="en">
<title>Cursos - Reeduca</title>
<<<<<<< HEAD

@include ('head')
<body>

=======
	
@include ('head')
<body>
 
>>>>>>> 56bc96117a35f9fa149c9c1df234ed0efadff82c
@include ('header')

			<!-- -->
			<section class="detalhe-produto">
				<div class="container">

					<div class="row nomargin">

						<div class="col-md-8 col-sm-8">

							<!-- Subtitle -->
							<div class="heading-title heading-border">
                <?php if ($_GET['id'] == 1): ?>
                  <h2>Gestão de resíduos plásticos pós-consumo</h2>
                <?php else: ?>
                  <h2>Tratamento de resíduos sólidos no dia a dia</h2>
                <?php endif; ?>
								<ul class="list-inline categories nomargin">
									<li><a href="#">100% online</a></li>
								</ul>

							</div>
							<!-- /Subtitle -->

							<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum.</p>
							<br>


							<!-- Pre-requisitos -->
							<div class="heading-title heading-border">
								<h4 style="font-family: 'Cinzel', serif; font-size: 2.2em;">Pre-requisitos</h4>
								<p class="font-lato size-12">O que preciso saber?</p>
							</div>
							<!-- /Pre-requisitos -->
							<p>Este curso não tem pre-requisitos. Qualquer pessoa pode praticar os exercícios aqui apresentados.</p>

						</div>


						<div class="col-md-4 col-sm-4">


              <div class="card">
                <div class="card-body">

                  <?php if ($_GET['id'] == 1): ?>
                    <img src="images/curso-1.jpg" alt="curso-residuos"><br>
                  <?php else: ?>
                    <img src="images/curso-2.jpg" alt="curso-residuos"><br>
                  <?php endif; ?>

                  <a href="#" class="btn btn-primary">Comprar</a>
                </div>
              </div>
              <ul class="nomargin">
                  <li><span><i class="fa fa-user"></i> Instrutor: </span> Pedro Almodovar</li>
                  <hr />
                  <li><span><i class="far fa-clock"></i> Carga Horária: </span>4hs</li>
                  <hr />
                  <li><span><i class="fa fa-credit-card"></i> Valor: </span><sup> R$ </sup>173,00<em> - no Cartão</em></li>
              </ul>

						</div>

					</div>

				</div>
			</section>
			<!-- -->

			@include ('funcoes')
			@include ('footer')
  </body>
</html>
