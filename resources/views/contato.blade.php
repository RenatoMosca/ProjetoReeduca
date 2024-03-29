<!DOCTYPE html>
<html lang="en">
<title>Contato - Reeduca</title>
@include ('head')

<body>

@include ('header')


    <section class="contato-fundo">
        <div class= "imagem_fundo_contato">
        <div class="container">
            <div class="row">
                <div class = "ladoEsquerdo col-lg-8"> <h1 id="h1-contato"> FALE CONOSCO</h1></div>
                <div class = "ladoDireito col-lg-4">
                <form class="form_contato1">
                    <div class="form-group">
                        <label class="text-contato" for="nome">Nome Completo</label>
                        <input class="input-contato" type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
                    </div>

                    <div class="form-group">
                        <label class="text-contato" for="idade">Idade</label>
                        <input class="input-contato" style="color:black" type="number" class="form-control" id="idade" placeholder="Digite sua idade">
                    </div>

                    <div class="form-group">
                        <label class="text-contato" for="telefone">Telefone</label>
                        <input class="input-contato" type="number" class="form-control" id="telefone" placeholder="Digite seu telefone">
                    </div>

                    <div class="form-group">
                        <label class="text-contato" for="email">Email</label>
                        <input class="input-contato" type="email" class="form-control" id="email" placeholder="name@example.com">


                    <div class="botao_contato">
                        <button type="button" class="btn-success">Enviar</button>
                    </div>
                </form>
</div>
            </div>
        </div>
</div>
    </section>
    @include ('footer')
    @include ('funcoes')

</body>

</html>
