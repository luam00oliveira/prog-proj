<?php
include "components/menu.php";

if (!isset($_SESSION['usuarioId']) or $_SESSION['usuarioId']==null) {
    $msg = "Efetue login, por favor!";
    $_SESSION['msg'] = $msg;
    $utils->redirect('form_login.php');
}  