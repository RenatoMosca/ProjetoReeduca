<!DOCTYPE html>
<html lang="en">
<title>Cursos - Reeduca</title>

@include ('head')
<body>
@include ('header')

<div class="tab-compra">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-cartao" role="tab" aria-controls="nav-home" aria-selected="true">Cartão</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-boleto" role="tab" aria-controls="nav-profile" aria-selected="false">Boleto</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-cartao" role="tabpanel" aria-labelledby="nav-home-tab">
                <section class="form-detalhe">
                        <div class="container">
                            <div class="row nomargin">

                                <div class="col-md-8 inline-block">
                                <form>
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
                                {{-- <input type="hidden" name="comprador" value="{{Auth::user()->id}}"> --}}
                                    <div class="row">
                                        <div class="col">
                                           <a href="/pedido/{{$produto->id_produto}}"><button type="submit" class="btn btn-primary">Finalizar a compra</button></a>
                                        </div>
                                    </div>
                                    <br>
                                </form>
                                </div>



                                <div class="img-pagseg col-md-4">
                                    <h5>Detalhes da compra</h5>
                                    <h6>{{$produto->nome_produto}}</h6>
                                    <h6>{{$produto->valor}},00</h6>
                                    <img title="Pagamento processado pelo PagSeguro!" alt="Pagamento processado pelo PagSeguro!" src="/images/pagseguro.png">
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            <div class="tab-pane fade" id="nav-boleto" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row nomargin">
                    <div class="col-md-8">
                        <div class="col">
                            <h6>Fique atento(a) ao vencimento do boleto. Você pode pagar o boleto em qualquer banco ou casa lotérica até o dia do vencimento!</h6>
                            <h6>As compras efetuadas com boleto levam até 3 dias úteis para serem compensadas.</h6>
                        </div>
                        <div class="col">
                        <a href="/pedido/{{$produto->id_produto}}/1"><button type="submit" class="btn btn-primary">Finalizar a compra</button></a>
                        </div>
                        <div class="col tab-margem">
                        </div>
                    </div>
                    <div class="img-pagseg col-md-4">
                        <div class="col">
                            <h5>Detalhes da compra</h5>
                            <h6>{{$produto->nome_produto}}</h6>
                            <h6>{{$produto->valor}},00</h6>
                            <img title="Pagamento processado pelo PagSeguro!" alt="Pagamento processado pelo PagSeguro!" src="/images/pagseguro.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('funcoes')
@include ('footer')
  </body>
</html>
