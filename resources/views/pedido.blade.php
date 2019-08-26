<!DOCTYPE html>
<html lang="en">
<title>Cursos - Reeduca</title>

@include ('head')
<body>
@include ('header')
			<!-- -->
			<section class="msg-conclusao">
				<div class="container">
					<div class="row nomargin">
						<div class="col-md-8 col-sm-8">
							<div>
                                <h5>Compra efetuada com sucesso!</h5>
                                <hr>
                                <h6><mark>Pedido: {{$pedido->id_pedido}} </mark></h6>
                            </div>
                            <hr><br><br>
                            <div>
                                <h6>Enviamos em seu e-mail todos os dados para o acesso ao curso. Comece já sua jornada de aprendizado!</h6>
                            </div>
                            <div>
                            <img src="{{ asset('images/fundo-home-min.png')}}" alt="">
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
