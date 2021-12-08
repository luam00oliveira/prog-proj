<?php
include "components/menu.php";

if (!isset($_SESSION['usuarioId'])) {
    $msg = "Efetue login, por favor!";
    $_SESSION['msg'] = $msg;
    header("Location:form_login.php");
}
  