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
							<div class="heading-title heading-border">
                                <h2>{{$produto->nome_produto}}</h2>
								<ul class="list-inline categories nomargin">
									<li>100% online</li>
								</ul>
							</div>

							<p class="font-lato size-12">{{$produto->desc_produto}}</p>
							<br>

							<div class="heading-title heading-border">
								<h3>Pre-requisitos</h3>
								<p class="font-lato size-12">{{$produto->pre_requisitos}}</p>
                            </div>
                            <br>

                            <div class="heading-title heading-border">
                                <h3>Ementa</h3>
                                <p class="font-lato size-12">{{$produto->ementa}}</p>
                            </div>
                            <br>
                            <br>
						</div>

						<div class="col-md-4 col-sm-4">
                            <div class="card align-items-center">
                                <div class="card-body">
                                    <img src="{{ asset($produto->url_img_prod)}}" alt="">
                                </div>
                                <div>
                                    <a href="/detalhe-compra/{{$produto->id_produto}}" class="btn btn-primary">Comprar</a><br><br>
                                </div>
                            </div>
                            <div class="detalhe-compra">
                                <ul class="nomargin">
                                    <li><span><i class="fa fa-user"></i> Instrutor: </span> Pedro Almodovar</li>
                                    <hr />
                                    <li><span><i class="far fa-clock"></i> Carga Horária: </span>{{$produto->carga_horaria}} hs</li>
                                    <hr />
                                    <li><span><i class="fa fa-credit-card"></i> Valor: </span><sup> R$ </sup>{{$produto->valor}},00<em> - no Cartão</em></li>
                                </ul>
                            </div>
                        </div>

					</div>
				</div>
			</section>
			<!-- -->
@include ('funcoes')
@include ('footer')
  </body>
</html>
