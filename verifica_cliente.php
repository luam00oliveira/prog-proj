<?php

include 'components/header.php';

if (!isset($_SESSION['email'])) {
  $msg = "Efetue login, por favor!";
  $_SESSION['msg'] = $msg;
  print_r($_SESSION);
  $utils->redirect('form_login.php');
}
