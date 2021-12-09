<!DOCTYPE html>
<html>
<?php
require_once __DIR__ . "/../utils.php";

session_start();


$utils = new Utils();
?>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sebo Admin</title>

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo_menu.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="index.php">
                    <h3>Sebo Retrô - Admin</h3>
                    <strong>Admin</strong>
                </a>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#discoSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-compact-disc"></i>
                        Livros
                    </a>
                    <ul class="collapse list-unstyled" id="discoSubmenu">
                        <li>
                            <a href="form_cadastro_livro.php?a=0">
                                <i class="fas fa-plus-circle"></i>
                                Cadastrar Livros
                            </a>
                        </li>
                        <li>
                            <a href="form_lista_livros.php">
                                <i class="fas fa-list"></i>
                                Listar Livros
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fas fa-paper-plane"></i>
                        Contato
                    </a>
                </li>
                <li class="active">
                    <a href="#usuarioSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-user-friends"></i>
                        Usuário
                    </a>
                    <ul class="collapse list-unstyled" id="usuarioSubmenu">
                        <li>
                            <a href="form_usuario_cadastro.php">
                                <i class="fas fa-user-plus"></i>
                                Cadastrar usuário
                            </a>
                        </li>
                        <li>
                            <a href="form_lista_usuarios.php">
                                <i class="fas fa-user-times"></i>
                                Excluir usuário
                            </a>
                        </li>
                        <li>
                            <a href="form_usuario_alterar.php">
                                <i class="fas fa-user-edit"></i>
                                Alterar senha
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="active">
                    <li>
                        <a href="logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">