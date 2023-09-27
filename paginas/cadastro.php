

<?php include_once '../includes/head.php' ;?>

<body class="container">
<div class="row">
<form class="col s12" action="../back-end/cadastro.php" method="POST">







<h6 class="center">Preencha suas informações</h6><br>

  


        <?php session_start();
        if(isset($_SESSION['cadastro_existe'])): ?>
        <div class="notification is-sucess">
        <h5 class="center red-text">Já existe um cadastro com este E-mail !</h5>
       
        </div>
        <?php endif;unset($_SESSION['cadastro_existe']); ?>


<div class="row">
<div class="input-field col s12">
  <i class="material-icons prefix">account_circle</i>
  <input name="nome" type="text" class="validate" placeholder="Digite seu nome completo"required>
  <label for="nome">Nome</label>
</div></br>


<div class="input-field col s12">
  <i class="material-icons prefix">account_circle</i>
  <input name="sobrenome" type="text" class="validate" placeholder="Digite seu nome completo"required>
  <label for="sobrenome">Sobrenome</label>
</div></br>

<div class="input-field col s12">
  <i class="material-icons prefix">password</i>
  <input name="senha" type="password" class="validate" placeholder="Digite sua senha" required>
  <label for="senha">Senha</label>
</div>



<div class="input-field col s12">
  <i class="material-icons prefix">date_range</i>
  <input name="datanasc" type="date" class="validate" placeholder="Apenas numeros" required>
  <label for="datanasc">Data de Nascimento</label>
</div>

<div class="input-field col s12">
  <i class="material-icons prefix">email</i>
  <input name="email" type="text" class="validate" placeholder="Digite seu e-mail" required>
  <label for="email">E-mail</label>
</div></br>

<div class="input-field col s12">
  <i class="material-icons prefix">smartphone</i>
  <input name="whatsapp" type="text" class="validate" placeholder="Exemplo (81)999988888" minLength="11 "maxLength="11" required onkeypress="return onlynumber();">
  <label for="whatsapp">WhatsApp</label>
</div>



<div class="input-field col s12">

<select class="browser-default"  name="id_academia" id="select" required>
<option value="" disabled selected>Selecione a equipe</option>
<?php include_once '../back-end/listEquipes.php' ;?>
</select>


</div>

<div class="input-field col s12">



<select class="browser-default" name="graduacao" id="select" required>
<option value="" disabled selected>Selecione a graduação</option>
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







</fieldset><br><br><br>
</center>
<center>
<button class="btn black" type="submit" name="action">Cadastrar</button>&nbsp;<button class="btn red" type="reset" name="action">Limpar</button><br><br> <a href="../index.php" class="btn blue" type="submit" name="action">Voltar</a><br><br><br><br>


</center>
</form>
</div><br><br>
</div>


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

