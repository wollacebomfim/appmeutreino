<?php

include_once '../includes/head.php';
include_once '../includes/menu.php';
include '../includes/seg.php';
;?>
<br>
<div class="row container">
<table class="striped">
<center><h5 class="light">Check-in - 2023</h5><hr></center><br>








<?php include_once '../includes/menuMeses.php'; ?>
    

</br>
</div></br>
<b> Total de aulas anual: </b> 
<?php include_once '../back-end/countTreinos.php'; ?> 
</div>
</table>
<tbody><?php include_once '../back-end/visuaAluno.php';?></tbody><br>


</form>   
</div>
</body>
</html>


