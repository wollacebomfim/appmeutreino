

<html lang="pt-br">
<?php include_once '../includes/head.php';?>
<?php include_once '../includes/menuAdmin.php';?>
<?php include_once '../includes/seg.php';?>


<body>
<center>
<form action="../sys.admin/alterarSenha.php" method="POST">
<div class="row container ">
<h5 class="center">Alterar senha</h5><br>



<?php if(isset($_SESSION['senha_alterada'])): ?>
        <div class="notification is-sucess">
        <h5 class="center green-text">Senha alterada com sucesso!</h5>
       
        </div>
<?php endif; unset($_SESSION['senha_alterada']); ?>

<div class="input-field col s12 center">
  <i class="material-icons prefix">password</i>
  <input name="senha" type="password" class="validate" placeholder="Digite sua senha" required>
  <label for="senha">Senha</label>
</div>



<br>
</center>
<center>
<button class="btn blue small" type="submit" name="action">Alterar</button>
<br><br>
<center><a href="../sys.admin/meusalunos.php" class="btn red small">Voltar</a></center>

</center>
</form>
</div><br><br>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>

<script type="text/javascript">
function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}
</script>
</body>
</html>