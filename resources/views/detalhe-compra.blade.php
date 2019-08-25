<!DOCTYPE html>
<html lang="en">
<title>Cursos - Reeduca</title>

@include ('head')
<body>
@include ('header')


<section class="form-detalhe">
    <div class="container">
        <div class="row nomargin">
            <div class="col-md-8 inline-block">
                <div class="tipo-pagamento">
                    <input type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-compra-check-label" for="exampleRadios1">
                        Cartão de crédito&nbsp;&nbsp;&nbsp;
                    </label>
                    <input type="radio" name="exampleRadios2" id="exampleRadios2" value="option1">
                    <label class="form-compra-check-label" for="exampleRadios2">
                        Boleto
                    </label>
                </div>
                <br><br>
                <div class="row">
                    <div class="col">
                        <label for="cartao">Nr do Cartão</label>
                        <input type="text" class="form-control" placeholder="nr do cartão">
                    </div>

                    <div class="col">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" placeholder="CVV">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="cartao">Titular</label>
                        <input type="text" class="form-control" placeholder="Nome do titular do cartão">
                    </div>

                    <div class="col">
                        <label for="cvv">Expiração</label>
                        <input type="text" class="form-control" placeholder="MM/AAAA">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <label for="cartao">CPF</label>
                        <input type="text" class="form-control" placeholder="CPF">
                    </div>

                    <div class="col">
                        <label for="cvv">Data de nascimento</label>
                        <input type="text" class="form-control" placeholder="DD/MM/AAAA">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                       <button type="submit" class="btn btn-primary">Finalizar a compra</button>
                    </div>
                </div>
                <br>
            </div>


            <div class="col-md-4">
                <h5>Detalhes da compra</h5>
                <h6>{{$produto->nome_produto}}</h6>
                <h6>{{$produto->valor}},00</h6>
                <img title="Pagamento processado pelo PagSeguro!" alt="Pagamento processado pelo PagSeguro!" src="/images/pagseguro.png">
            </div>
        </div>
    </div>
</section>

@include ('funcoes')
@include ('footer')
  </body>
</html>
