<!DOCTYPE html>
<html lang="en">
<title>Cursos - Reeduca</title>

@include ('head')
<body>
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
<<<<<<< HEAD:resources/views/detalhe-curso.blade.php
				  <img src="{{ asset($produtos->url_img_prod)}}" alt="curso-residuos"><br>
                  <?php else: ?>
				  <img src="{{ asset($produtos->url_img_prod)}}" alt="curso-residuos"><br>
=======
                    <img src="{{ asset ('images/curso-1-min.jpg')}}" alt="curso-residuos"><br>
                  <?php else: ?>
                    <img src="{{ asset ('images/curso-2-min.jpg')}}" alt="curso-residuos"><br>
>>>>>>> a45afb2546fca7e0e22300a43f307dbce9a1e085:resources/views/detalhe-produto.blade.php
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
