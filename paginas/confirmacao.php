<?php 
session_start();
include_once '../includes/head.php';
?>
<center><br>

        <?php if(isset($_SESSION['inscricao_concluida'])): ?>
        <div class="notification is-sucess">
        <h5 class="center green-text">Cadastro efetuado com sucesso, verifique sua caixa de E-mail ou (Spam) lixo eletronico. </h5>
       
        </div>
        <?php endif; unset($_SESSION['inscricao_concluida']); ?>

        <?php if(isset($_SESSION['inscricao_existe'])): ?>
        <div class="notification is-info">
        <h5 class="center red-text">Já existe um cadastro com este Email !</h5>
        </div>
        <?php endif; unset($_SESSION['inscricao_existe']); ?>
        

        <?php if(isset($_SESSION['error_email'])): ?>
        <div class="notification is-info">
        <h5 class="center red-text">Seu cadastro foi efetuado! Por algum motivo sua confirmação por e-mail não foi enviada! Tente efetuar o login.</h5>
        </div>
        <?php endif; unset($_SESSION['error_email']); ?>

        <?php if(isset($_SESSION['error_inscricao'])): ?>
        <div class="notification is-info">
        <h5 class="center red-text">Seu cadastro foi efetuado! Por algum motivo sua confirmação por e-mail não foi enviada! Tente efetuar o login.</h5>
        </div>
        <?php endif; unset($_SESSION['error_inscricao']); ?>

<br>
<a href="../paginas/cadastro.php"class="btn black">Voltar</a>
</center>