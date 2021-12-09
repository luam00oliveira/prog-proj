<?php
include "verifica_usuario.php";
?>
<form class="row" action="usuario_alterar.php" method="post">
    <h1>Alterar senha do usuário</h1>
    <div class="col-12">
        <label for="loginInput" class="control-label">Antiga senha</label>
        <input type="password" class="form-control" name="antiga" id="loginInput">
    </div>
    <div class="col-12">
        <label for="passwordInput" class="control-label">Senha</label>
        <input type="password" class="form-control" name="nova" id="passwordInput">
    </div>
    <div class="col-12 text-center">
        <button class="w-25 btn btn-success" type="submit">Alterar senha</button>
    </div>
</form>

<?php
include "components/rodape.php";
