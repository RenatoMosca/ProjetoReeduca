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
									<h4>CATEGORIES</h4>
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
                <hr>
                <section>
                    <h3>Comentários</h3>
                    <div class="post-comentarios">
                            <div class="col-md-2">
                            <img src="/images/avatar-comentario.png" alt="avatar">
                            </div>
                            <div class="col-md-6">
                                <input type="text" value="kçdsfjçlakjfçlksjklj">
                            </div>
                            <div class="col-md-4"></div>
                    </div>
                </section>


            </div>

        </section>


    </main>

    @include ('footer')
    @include ('funcoes')
    </body>
    </html>
