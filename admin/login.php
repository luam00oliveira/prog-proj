<?php
require_once "utils.php";
require_once "src/dao/UsuarioDAO.php";

$usuarioDAO = new UsuarioDAO();
$utils = new Utils();

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$_SESSION['usuarioId'] = $usuarioDAO->logarUsuario($email,$password);




$utils->redirect('index.php');

