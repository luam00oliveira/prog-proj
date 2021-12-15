<?php
require "src/dao/CompraDAO.php";
include 'verifica_cliente.php';
$compraDAO = new CompraDAO();

$compraDAO->cadastrarCompra($_SESSION);

unset($_SESSION['cesta']);

$utils->redirect('agradecimento.php');
