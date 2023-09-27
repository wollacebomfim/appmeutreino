<?php

include_once '../includes/head.php';
include_once '../includes/menuAdmin.php';
include '../includes/seg.php';
;?>
<br>
<div class="row container">
<table class="striped">
      <center>  <h5 class="light">Time Line - Check-in Diário</h5><hr></center><br><br>

     
      </div>
</table>
<tbody><?php include_once 'visuaGeral.php';?></tbody><br>

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
  <meta http-equiv="refresh" content=";">
</body>
</html>


