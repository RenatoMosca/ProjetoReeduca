<!DOCTYPE html>
<html lang="en">
<title>Blog - Reeduca</title>
@include ('head')
    <!-- ------------------------------------------------- -->
    <!-- Bloco importado do template -->
    <!-- ------------------------------------------------- -->
    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
    <!-- THEME CSS -->
    <link href="/assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <!-- ------------------------------------------------- -->
    <!-- Bloco importado do template -->
    <!-- ------------------------------------------------- -->

<body>

@include ('header')



    <main class="container">

        <section class="blog row">

<!--Coluna lado esquerdo-->

            <div class="textoBlog col-lg-3">
							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix margin-bottom-30">
								<form action="" method="get" class="widget_search">
									<input type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<hr />

							<!-- side navigation -->
							<div class="side-nav margin-bottom-60 margin-top-30">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>CATEGORIAS</h4>
								</div>

								<ul class="list-group list-group-bordered list-group-noicon uppercase">
								@foreach($categorias as $categoria)
									<li class="list-group-item"><a href="#">{{$categoria->nome_categoria}}</a></li>
								@endforeach
								</ul>
								<!-- /side navigation -->

							</div>



							<!-- TAGS -->
							<h3 class="hidden-xs size-16 margin-bottom-20">TAGS</h3>
							<div class="hidden-xs margin-bottom-60">

								<a class="tag" href="#">
									<span class="txt">lixo</span>
									<span class="num">12</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">meio ambiente</span>
									<span class="num">3</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">vidro</span>
									<span class="num">1</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">natureza</span>
									<span class="num">28</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">preservação</span>
									<span class="num">6</span>
								</a>
								<a class="tag" href="#">
									<span class="txt">sustentabilidade</span>
									<span class="num">3</span>
								</a>
							</div>


							<!-- SOCIAL ICONS -->
							<div class="hidden-xs margin-top-30 margin-bottom-60">
								<a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
							</div>

						</div>

            </div>




            <div class="posts col-lg-9 ">

                <div class="row">
                    <!--Primeiro Card do Blog-->
                    <div class="card_blog col-md-12 col-sm-12">
                        <img src="{{ asset($post->url_img_post)}}"  class="card-img-top" alt="Reciclagem">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->titulo}}</h5>
                            <p class="card-text">{{$post->artigo}}</p>
                        </div>
                    </div>

                    <!-- Segundo Card do Blog -->
                    <!-- <div class="card_blog col-md-6 col-sm-6">
                        <img src="images/card_blog_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Canudos biodegradáveis</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional
                                content.</p>
                        </div>

                    </div> -->
                </div>
				<div class="comentario col-lg-8">
				<h1 style="font-family: 'Cinzel', size:1m; serif;"> Deixe seu comentário</h1>
				<form name="post_comentario" type="text" method="post" enctype="multipart/form-data" action="/admin/post_comentario">
						@csrf
					<input type="hidden" name="idpost" value="{{$post->id_post}}">
					<div class="form-group">
						<label for="nome_autor_comentario">Nome:</label>
						<input type="text" class="form-control" id="nome_autor_comentario" name="nome_autor_comentario" placeholder="Digite seu nome">
					</div>

					<div class="form-group">
						<label for="comentario">Comentário</label>
						<textarea class="form-control" id="comentario" name="comentario" rows="3"></textarea>
					</div>
					<button type="submit" id="botao_cadastrar_comentario" class="btn btn-primary" name="bt1"> Enviar </button>
				</form>
				<h2 style="font-family: 'Cinzel', size:1m; serif;"> Comentários</h2>
				@foreach($posts_comentarios as $post_comentario)
				<div class="card mb-3" style="max-width: 540px;">
					<div class="row no-gutters">
						<div class="col-md-4">
						<img src="../images/avatar.jpg" class="card-img" alt="foto de perfil">
						</div>
						<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title">{{$post_comentario->nome_autor_comentario}}</h5>
							<p class="card-text">{{$post_comentario->comentario}}</p>
							<p class="card-text"><small class="text-muted">{{$post_comentario->dt_inclusao}}</small></p>
						</div>
						</div>
					</div>
				</div>
				@endforeach


			</div>


            </div>



        </section>


    </main>

    @include ('footer')
    @include ('funcoes')
    </body>
    </html>
