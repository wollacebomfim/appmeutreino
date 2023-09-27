<?php include_once '../includes/head.php';?>

<html>
</div> 
<body>
</div> 




</nav>
</ul>

<form action="logando.php" method="POST">
<br><br>
<div class="row">
<div class="col s12 m4 offset-m4">
<div class="card">
<div class="card-action white lighten-1 black-text">
<center><h5> Sys.Admin</br></h5></center>
</div>

<?php if(isset($_SESSION['nao_autenticado'])): ?>

<div class="notification is-danger">

<center><p class='center red-text'> Usuário ou senha inválidos</p></center>
</div>


<?php endif; unset($_SESSION['nao_autenticado']); ?>

<center>
<div class="card-content">
<div class="form-field">
<label for="usuario">Login</label>
<input name="usuario" type="text"   placeholder="INSIRA SEU LOGIN" autofocus required>
</div><br>


<div class="form-field">
<label for="senha">Senha</label>
<input name="senha" type="password"   placeholder="INSIRA SUA SENHA" required >
</div><br>
<center>


<button type="submit" class="btn-small red">Entrar</button>

<br>

</body>
</html>


