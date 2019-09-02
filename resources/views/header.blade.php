<nav class="navbar navbar-expand-lg navbar-light ">
    <!-- <a class="navbar-brand" href="#"><img src="images/logo.png"></a>     -->
    <a class="p-2 flex-grow-1 bd-highlight" href="#"><img src="{{ asset('images/logo.png') }}"></a>

    <div class="itensMenu float-right">
      <!-- <button class="navbar-toggler" onclick="myFunction()" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="pesquisar assunto" aria-label="Busca">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busca</button>
        </form>

        <ul class="navbar-nav mr-auto">

          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/sobre">Sobre</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/loja">Loja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://reeduca.amtsol.com.br/moodle" target="_blank">EAD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contato">Contato</a>
          </li>
          @auth
          <li class="nav-item">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/register">Cadastrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
</nav>

<!-- <section id="menu_hamburger">
  <ul>
    <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
    <li><a href="sobre.php">Sobre</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="loja.php">Loja</a></li>
    <li><a href="login.php">EAD</a></li>
    <li><a href="contato2.php">Contato</a></li>
    <li><a href="login.php">Login</a></li>
  </ul>
</section> -->
