<?php
    include "verifica_usuario.php";
    
    require_once "src/dao/LivroDAO.php";

    $livrosDAO = new LivroDAO();
    $id = $_GET['id'];

    $livrosDAO->deletarLivro($id);


    include "components/rodape.php";
?>