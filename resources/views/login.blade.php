<!DOCTYPE html>
<html lang="en">
<title>Login - Reeduca</title>
@ include ('head')

<body>

  @ include ('header')


  <section class="fundo-login">
    <div class="container">
      <div class="row">
        <form class="form_login formulario">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="senha">
          </div>

          <div class="botao_login">
            <button type="button" class="button">Fazer Longin</button>
          </div>
        </form>
      </div>
    </div>
    
  </section>
  @ include ('footer')
  @ include ('funcoes')

</body>

</html>