<?php

include_once '../includes/head.php';
include_once '../includes/menu.php';
include_once '../includes/seg.php';
?>


<body>
<form>
<div class="container">
<div class="row">




<h6 class="center">Pagamentos até o dia 10 - R$ 100,00</h6>
<h6 class="center">Pagamentos após o dia 10 - R$ 120,00</h6>

<div style="margin-top:30px;" class="col-md-12 text-center">
<center><button type="button" name="button" class="btn btn-info center" onclick="modalPix();" >Gerar PIX</button></center>
</div>
<!-- Modal -->
<div class="modal fade" id="modalPix" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">QRCode + CHAVE PIX</h5>
<span aria-hidden="true">&times;</span>
</div>

<div class="modal-body text-center">
<img id="load" src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif?20151024034921" alt="">
<div class="row" id="dix-pix" style="display:none;" >
<div class="col-md-12"><img src="" id="img-pix" width="100%" alt="">
</div>
<div class="col-md-12">
<textarea name="code-pix" class="form-control" id="code-pix" rows="8" cols="80" readOnly></textarea>
</div>
</div>




<div class="modal-footer">
<center>
<button  type="button" class="btn green"onclick="copiarHTML()"  data-toggle="modal" data-target="#ExemploModalCentralizado">Copiar PIX</button>
</center>
</div>



<!-- Botão para acionar modal -->


<!-- Modal -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>






  </div>
  </div>


</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
<script type="text/javascript">
function modalPix(){
  $("#modalPix").modal('show');

  $.post('payment.php',{pix:true},function(response){

        var obj = JSON.parse(response);

          var base64 = obj.transaction_data.qr_code_base64;
          var codePix = obj.transaction_data.qr_code;

          $("#load").hide();
          $("#img-pix").attr('src', 'data:image/jpeg;base64,'+base64);
          $("#code-pix").val(codePix);
          $("#dix-pix").show();
  });
}
</script>
<script language="javascript">
$(document).ready(function() {
    $("button").click(function(){
        $("textarea").select();
        document.execCommand('copy');
    });
});
</script>
<script>
function copiarHTML()
{
alert("Pix Copiado, efetue o pagamento em seu banco de preferencia.");
}
</script>

</form>
</body>
</html>