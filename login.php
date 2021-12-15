<?php
require_once "src/dao/ClienteDAO.php";

include 'components/header.php';

session_start();

$clienteDAO = new ClienteDAO();
$utils = new Utils();

$email = $_POST['email'];
$password = $_POST['password'];

$cliente = $clienteDAO->logarCliente($email, $password);




if ($cliente['id']) {
  $_SESSION['email'] = $email;
  $_SESSION['clienteId'] = $cliente['id'];
  $_SESSION['nome'] = $cliente['nome'];
  $_SESSION['msg'] = 'Login efetuado com sucesso!';
  $utils->redirect('cesta.php');
} else {
  $_SESSION['msg'] = 'Email ou senha incorreto!';
  $utils->redirect('form_login.php');
}
