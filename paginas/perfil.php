<?php

include_once '../includes/head.php';
include_once '../includes/menu.php';
include_once '../includes/seg.php';
include_once '../back-end/readperfil.php'; 
?>


<body>
<center>
    <?php ?>
<form action="../back-end/update.php" method="POST" enctype="multipart/form-data">
<div class="row container ">
 <center>  <h5 class="light">Meu.Perfil<hr></center><br>

        <?php if(isset($_SESSION['perfil_atualizado'])): ?>
        <div class="notification is-sucess">
        <h5 class="center green-text">Perfil atualizado com sucesso!</h5>
       
        </div>
        <?php endif; unset($_SESSION['perfil_atualizado']); ?>

        <?php if(isset($_SESSION['error_perfil'])): ?>
        <div class="notification is-sucess">
        <h5 class="center red-text">Ocorreu um error ao atualizar o seu perfil!</h5>
       
        </div>
        <?php endif; unset($_SESSION['error_perfil']); ?>

 <center><img class="circle responsive-img" src="../uploads/<?php echo $dados['foto_usuario']; ?>" width="150" height="150"><center><br>

 <center><img class="square responsive-img" src="../img/<?php echo $dados['graduacao']; ?>.png" width="150" height="150"><center><br>

<div class="input-field col s12">
  <i class="material-icons prefix">account_circle</i>
  <input name="nome" type="text" class="validate" value="<?php echo $dados['nome']; ?>">
  <label for="nome">Nome</label>
</div>

<div class="input-field col s12">
  <i class="material-icons prefix">account_circle</i>
  <input name="sobrenome" type="text" class="validate" value="<?php echo $dados['sobrenome']; ?>">
  <label for="sobrenome">Sobrenome</label>
</div>

<div class="input-field col s12">
  <i class="material-icons prefix">email</i>
  <input name="email" type="text" class="validate" value="<?php echo $dados['email']; ?>" readOnly>
  <label for="email">Email</label>
</div>

<div class="input-field col s12">
  <i class="material-icons prefix">phone</i>
  <input name="whatsapp" type="text" class="validate" value="<?php echo $dados['whatsapp']; ?>" required onkeypress="return onlynumber();" >
  <label for="whatsapp">WhatsApp</label>
</div>

<div class="input-field col s12">
  <i class="material-icons prefix">date_range</i>
  <input name="nascimento" type="date" value="<?php echo $dados['datanasc']; ?>" readOnly>
  <label for="nascmimento">Data de nascimento</label>
</div>

<!-- <div class="input-field col s12">
  <i class="material-icons prefix">tag</i>
  <input name="tag" type="text" class="validate" placeholder="Informe sua TAG Exemplo 0009874132"  value="<?php echo $dados['tag']; ?>" onkeypress="return onlynumber();" maxLength="10" minLength="10">
  <label for="tag">Tag ID</label>
</div>

-->
       
<label>Selecione e/ou atualize a sua graduação</label>
</br>
<center>
<select class="browser-default center" name="graduacao" id="select" required>
      <option value="<?php echo $dados['graduacao']; ?>" > Atual -><?php echo $dados['graduacao']; ?></option>     
      <option value="Branca">Branca</option>
      <option value="Cinza">Cinza</option>
      <option value="Amarela">Amarela</option>
      <option value="Laranja">Laranja</option>
      <option value="Verde">Verde</option>
      <option value="Azul">Azul</option>
      <option value="Roxa">Roxa</option>
      <option value="Marrom">Marrom</option>
      <option value="Preta">Preta</option>

</select>

</div>
</center>

</br></br>



</center>
<center>
<button class="btn black" type="submit" name="action">Atualizar</button><br><br>
<center><a href="../paginas/meustreinos.php" class="btn red">Voltar</a></center>
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