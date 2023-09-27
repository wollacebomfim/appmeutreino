<?php

include_once '../includes/head.php';
include_once '../includes/menuAdmin.php';
include_once '../includes/seg.php';
;?>
<br>
<div class="row container">
<table class="striped">
      <center>  <h5 class="light">Pagar Mensalistas<hr></center><br><br>

      <h6><b>Total de Alunos: </b><?php include_once 'contadorAlunos.php' ;?></h6>
      </div>
</table>
<tbody><?php include_once 'pagarAluno.php';?></tbody><br>


</form>   
</div>
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
</body>
</html>


