<?php

include_once '../includes/head.php';
include_once '../includes/menu.php';
include '../includes/seg.php';
;?>
<br>
<div class="row container">
<table class="striped">
      <center>  <h5 class="light">Setembro - 2023</h5><hr></center><br>

<?php include_once '../includes/menuMeses.php'; ?>
    

</br>
</div></br>
<b> Total de check-in mensal: </b> 
<?php include_once '../count/set-23.php'; ?> 
</div>
</table>
<tbody><?php include_once '../read/set-23.php';?></tbody><br>




</form>   
</div>
</body>
</html>


