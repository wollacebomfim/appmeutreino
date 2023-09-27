

<html lang="pt-br">
<?php include_once '../includes/head.php';?>


<body>
<center>
<form action="../back-end/procurar.php" method="POST">
<div class="row container ">
<h5 class="center">Recuperar senha</h5><br>








<div class="input-field col s12 center">
  <i class="material-icons prefix">offline_pin</i>
  <input name="email" type="text" class="validate" placeholder="Digite seu E-mail" required>
  <label for="email">E-mail</label>
</div>



<br>
</center>
<center>
<button class="btn blue small" type="submit" name="action">Recuperar</button>
<br><br>
<center><a href="../index.php" class="btn red small">Voltar</a></center>

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