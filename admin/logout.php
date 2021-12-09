<?php
include "verifica_usuario.php";

unset($_SESSION['usuarioId']);

$utils->redirect('form_login.php');
