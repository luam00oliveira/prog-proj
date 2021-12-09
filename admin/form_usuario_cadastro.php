<?php
include "verifica_usuario.php";
?>

<form class="row" action="usuario_cadastro.php" method="post">
    <h1>Cadastro de usuário</h1>
    <?php
        if(isset($_SESSION['msg'])){
    ?>
    <p class="text-danger"><?=$_SESSION['msg']?></p>
    <?php
        unset($_SESSION['msg']);
        }
    ?>
    <div class="col-12">
        <label for="loginInput" class="control-label">Login</label>
        <input type="text" class="form-control" name="login" id="loginInput">
    </div>
    <div class="col-12 mb-3">
        <label for="passwordInput" class="control-label">Senha</label>
        <input type="password" class="form-control" name="password" id="passwordInput">
    </div>
    <div class="col-12 text-center">
        <button class="btn btn-success w-25" type="submit">Cadastrar</button>
    </div>
</form>


<?php

include "components/rodape.php";
