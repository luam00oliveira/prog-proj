<?php
include "verifica_usuario.php";

require_once "src/dao/UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();

$id = $_SESSION['usuarioId'];
$senha_antiga = $_POST['antiga'];
$senha_nova = $_POST['nova'];

if ($usuarioDAO->alterarUsuario($id, $senha_antiga, $senha_nova)) {
    $_SESSION['msg'] = 'Senha alterada com sucesso!';
    $utils->redirect('index.php');
} else {
    $_SESSION['msg'] = 'A senha antiga que digitou não corresponde à cadastrada!';
    $utils->redirect('index.php');
}
