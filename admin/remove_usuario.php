<?php
include "verifica_usuario.php";

require_once "src/dao/UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();
$id = $_POST['id'];
$password = $_POST['password'];



if ($usuarioDAO->removerUsuario($id, $password)) {
    $_SESSION['msg'] = "Usuário removido com sucesso.";
    $utils->redirect('form_lista_usuarios.php');
} else {
    $_SESSION['msg'] = "Senha incorrreta. Tente novamente.";
    $utils->redirect('form_usuario_remove.php?id=' . $id);
}



include "components/rodape.php";
