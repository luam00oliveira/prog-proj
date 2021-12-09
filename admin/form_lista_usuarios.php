<?php
include "verifica_usuario.php";

require_once "src/dao/UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();
if ($_GET != null) {
    $usuarios = $usuarioDAO->pesquisarUsuario($_GET['pesquisa']);
} else {
    $usuarios = $usuarioDAO->listarUsuarios();
}

if (isset($_SESSION['msg'])) {
?>
    <p class="text-success"><?= $_SESSION['msg'] ?></p>
<?php
    unset($_SESSION['msg']);
}
?>

<h2>Pesquisar usuarios</h2>
<form class="border-bottom mb-2" action="form_lista_usuarios.php">
    <label for="pesquisaInput">Digite o login do usuário:</label>
    <input type="text" name="pesquisa" id="pesquisaInput" class="input-padrao" size=50>

    <button type="submit" id="botaoId">Pesquisar</button>
</form>

<table>
    <tr>
        <th>#</th>
        <th>login</th>
        <th>---</th>
    </tr>

    <?php
    foreach ($usuarios as $usuario) {
    ?>

        <tr>
            <td><?= $usuario['id'] ?></td>
            <td><?= $usuario['login'] ?></td>
            <td>
                <a href="form_usuario_remove.php?id=<?= $usuario['id'] ?>" class="btn btn-danger btn-sm">Remover</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>


<?php
include "components/rodape.php";
?>