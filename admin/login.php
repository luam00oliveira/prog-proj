<?php
require_once "utils.php";
require_once "src/dao/UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();
$utils = new Utils();

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['usuarioId'] = $usuarioDAO->logarUsuario($email, $password);

if ($_SESSION['usuarioId'] == null) {
    $_SESSION['msg'] = 'Email e/ou senha incorreto(s)!';
    $utils->redirect('form_login.php');
} else {
    $utils->redirect('index.php');
}
