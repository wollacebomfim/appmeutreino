<?php
session_start();
include_once '../conexao/conexao.php';



$id = $_SESSION['id'];
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
        
$queryUpdate = $conexao->query("UPDATE usuarios SET senha = '$senha' WHERE id = '$id'");

	
if($queryUpdate > 0){
	$_SESSION['senha_alterada'] = true;
	header('Location: ../paginas/senha.php');
	$conexao->close();
	exit;
}
?>