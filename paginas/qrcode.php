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
 <center>  <h5 class="light">Meu.QRCode<hr></center><br>





<div id="qrcode"></div>
<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "<?php echo $dados['email']; ?>");
</script>
 <br><br>

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