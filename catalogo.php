<?php
require_once 'admin/src/dao/LivroDAO.php';
require_once 'admin/src/dao/EditoraDAO.php';
require_once 'admin/src/dao/GeneroDAO.php';
require_once 'admin/src/dao/AutorDAO.php';

include 'components/header.php';

$livroDAO = new LivroDAO();
$livros = $livroDAO->pesquisarLivro($_GET['s']);

$editoraDAO = new EditoraDAO();
$editoras = $editoraDAO->listarEditoras();

$generoDAO = new GeneroDAO();
$generos = $generoDAO->listarGeneros();

$autorDAO = new AutorDAO();
$autores = $autorDAO->listarAutores();
?>

<main>
    <div class="container">
        <div class="row">
            <div id="maior-catalogo" class=" col-12">
                <div id="catalogo">
                    <?php
                    foreach ($livros as $livro) :
                    ?>
                        <a class="text-decoration-none text-dark" href="produto.php?id=<?= $livro['id'] ?>">
                            <div class="card w-100 mb-3">
                                <div class="row g-0">
                                    <div class="col-md-2">
                                        <img src="data:image/png;base64, <?= base64_encode($livro['imagem']) ?>" class="img-fluid rounded-start" alt="Capa de 1984 de George Orwell">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold"><?= $livro['titulo'] ?> | <?= $livro['autor'] ?> | <?= $livro['editora'] ?></h5>
                                            <p class="card-text fw-bolder fs-5 mb-0">R$49,90</p>
                                            <p class="card-text">em 5x 9,98</p>
                                            <p class="card-text"><small class="text-success fw-bold">Frete
                                                    grátis</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>

    </div>
</main>





<?php
include 'components/footer.php';
