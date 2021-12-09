<?php
include "verifica_usuario.php";

require_once "src/dao/UsuarioDAO.php";
require_once "src/model/Usuario.php";

$usuario = new Usuario();
$usuario->setLogin($_POST['login']);
$usuario->setPassword($_POST['password']);

$usuarioDAO = new UsuarioDAO();

if($usuarioDAO->cadastrarUsuario($usuario)){
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    $utils->redirect('index.php');
}else{
    $_SESSION['msg'] = "Login já cadastrado com sucesso";
    $utils->redirect('form_usuario_cadastro.php');
}