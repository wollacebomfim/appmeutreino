<?php 
include_once '../includes/head.php';
include_once '../includes/cabecalho.php';
include_once '../includes/menu.php';
session_start();
?>
<center><br>


        <?php if(isset($_SESSION['inscricao_inexistente'])): ?>
        <div class="notification is-sucess">
        <h5>Inscrição não encontrada / inexistente</h5>
        </div>
        <?php endif; unset($_SESSION['inscricao_inexistente']); ?>
      
    






<br>
<a href="../index.php"class="btn red">Voltar</a>
</center>