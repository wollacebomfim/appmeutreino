<nav class="nav-extended">
    <div class="nav-wrapper black">
      <a href="#" class="brand-logo">appMyTreino</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="./sys.admin/login.php">SysAdmin</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
      </ul>
    </div>
   
  </nav>
  

  <ul class="sidenav" id="mobile-demo">

        <li class="tab"><a class="active" href="../sys.admin/meusalunos.php"><i class="material-icons left">account_circle</i>Meus Alunos</a></li>
        <li class="tab"><a class="active" href="../sys.admin/treinos.php"><i class="material-icons left">timeline</i>Feed Checkmat</a></li>
        <li class="tab"><a class="active" href="../sys.admin/senha.php"><i class="material-icons left">password</i>Alterar Senha</a></li>
        <!--<li class="tab"><a class="active" href="../sys.admin/mensalidades.php"><i class="material-icons left">attach_money</i>Ver Mensalidades</a></li>
        <li class="tab"><a class="active" href="../sys.admin/pagarMensa.php"><i class="material-icons left">attach_money</i>Pagar Mensalidade</a></li>-->
        <li class="tab"><a class="active" href="../back-end/logout.php"><i class="material-icons left">exit_to_app</i>Sair</a></li>
  </ul>
  <br>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>




