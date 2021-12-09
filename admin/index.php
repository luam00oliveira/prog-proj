<?php
include "verifica_usuario.php";
if(isset($_SESSION['msg'])){
?>
    <p class="text-black"><strong><?=$_SESSION['msg']?></strong></p>
<?php
    unset($_SESSION['msg']);
}
?>
        <!-- CONTEÚDO -->

            

            <h2>Área administrativa</h2>
            <p>Essa é a área administrativa do Sebo Retrô. Nela você pode fazer a gestão de cadastro dos produtos.</p>

            <div class="line"></div>            
            
            

        <!-- FIM CONTEÚDO -->

<?php
    include "components/rodape.php";
?>