<?php
include 'verifica_cliente.php';
?>

<main>
    <div class="container">
        <form class="row" action="finaliza_compra.php" method="post">
            <h1>Finalizar compra</h1>
            <hr>
            <h2>Cadastre seu endereço</h2>
            <div class="form-group col-10">
                <label for="ruaInput" class="control-label">Rua</label>
                <input class="form-control" type="text" name="rua" id="ruaInput">
            </div>
            <div class="form-group col-2">
                <label for="numeroInput" class="control-label">Numero</label>
                <input class="form-control" type="text" name="numero" id="numeroInput">
            </div>
            <div class="form-group col-6">
                <label for="bairroInput" class="control-label">Bairro</label>
                <input class="form-control" type="text" name="bairro" id="bairroInput">
            </div>
            <div class="form-group col-6 mb-4">
                <label for="cepInput" class="control-label">CEP</label>
                <input class="form-control" type="text" name="cep" id="cepInput">
            </div>
            <hr>
            <h2>Forma de pagamento</h2>
            <div class="form-group col-10">
                <label for="numCartaoInput" class="control-label">Numero de cartão</label>
                <input class="form-control" type="text" name="numCartao" id="numCartaoInput">
            </div>
            <div class="form-group col-2">
                <label for="cvvInput" class="control-label">CVV</label>
                <input class="form-control" type="text" name="cvv" id="cvvInput">
            </div>
            <div class="form-group col mt-3">
                <label for="dataVencInput" class="control-label">Data de vencimento</label>
                <input type="date" name="dataVenc" id="dataVencInput">
            </div>
            <div class="text-center">
                <button class="btn btn-success fs-5" type="submit"><strong>Finalizar compra</strong></button>
            </div>
        </form>
    </div>

</main>