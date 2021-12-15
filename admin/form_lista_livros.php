<?php
include "verifica_usuario.php";

require_once "src/dao/LivroDAO.php";

$livroDAO = new LivroDAO();
if ($_GET != null) {
    $livros = $livroDAO->pesquisarLivro($_GET['pesquisa']);
} else {
    $livros = $livroDAO->listarLivros();
}
?>

<h2>Pesquisar Livros</h2>
<form class="border-bottom mb-2" action="form_lista_livros.php">
    <label for="pesquisaInput">Digite nome do autor ou título do livro: </label>
    <input type="text" name="pesquisa" id="pesquisaInput" class="input-padrao" size=50>

    <button type="submit" id="botaoId">Pesquisar</button>
</form>

<table>
    <tr>
        <th>#</th>
        <th>titulo</th>
        <th>preco</th>
        <th>quantidade</th>
        <th>promocao</th>
        <th>---</th>
    </tr>

    <?php
    foreach ($livros as $livro) {
    ?>

        <tr>
            <td><?= $livro['id'] ?></td>
            <td><?= $livro['titulo'] ?></td>
            <td>R$<?= number_format($livro['preco'], 2, ",", ".") ?></td>
            <td><?= $livro['quantidade'] ?></td>
            <td><?php echo ($livro['promocao']) ? "Ativo" : "Inativo" ?></td>
            <td>
                <a href="remove_livro.php?id=<?= $livro['id'] ?>&a=0" class="btn btn-danger btn-sm">Remover</a>
                <a href="form_alterar_livro.php?id=<?= $livro['id'] ?>&a=0" class="btn btn-warning btn-sm">Alterar</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>


<?php

include "components/rodape.php";
?>