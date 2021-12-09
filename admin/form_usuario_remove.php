<?php
include "verifica_usuario.php";

if (isset($_SESSION['msg'])) {
?>
    <p class="text-danger"><?=$_SESSION['msg']?></p>
<?php
    unset($_SESSION['msg']);
}
?>
<form class="row" action="remove_usuario.php" method="post">
    <h1>Remover usuário</h1>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="col-12">
        <label for="passwordInput" class="control-label">Senha</label>
        <input type="password" class="form-control" name="password" id="passwordInput">
    </div>

    <div class="col-12 text-center">
        <button type="button" class="w-25 btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmation">
            Concluir
        </button>
    </div>

    <div class="modal fade" id="confirmation" tabindex="-1" aria-labelledby="confirmation" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmation">ATENÇÃO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tens certeza que deseja excluir o usuario?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Sim, remover!</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Não, cancelar!</button>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include "components/rodape.php";
