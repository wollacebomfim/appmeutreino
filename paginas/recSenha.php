<?php 
session_start();
include_once '../includes/head.php';

?>
<center><br><br><br><br><br>


        <?php if(isset($_SESSION['usuario_existe'])): ?>
        <div class="notification is-sucess">
        <h6>Senha enviada com sucesso ! foi enviado um email de confirmação !</h6>
        <font color="red"><h6>Verifique a sua caixa de entrada / spam (Lixo eletrônico).</h6></font>
        </div>
        <?php endif; unset($_SESSION['usuario_existe']); ?>
      

        <?php if(isset($_SESSION['usuario_naoexiste'])): ?>
        <div class="notification is-info">
        <h5 class="center red-text">Não foi encontrado, nenhum usuário com esse e-mail!</h5>
        </div>
        <?php endif; unset($_SESSION['usuario_naoexiste']); ?>


<br>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a href="../index.php"class="btn red">Voltar</a>
</center>