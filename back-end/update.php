<?php
session_start();
include_once '../conexao/conexao.php';

$id = $_SESSION['id'];

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$whatsapp = mysqli_real_escape_string($conexao, trim($_POST['whatsapp']));
$graduacao = mysqli_real_escape_string($conexao, trim($_POST['graduacao']));
$tag = mysqli_real_escape_string($conexao, trim($_POST['tag']));



$sql = $conexao->query("UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', graduacao='$graduacao', whatsapp='$whatsapp', tag='$tag' WHERE id = '$id'");
$linhas_afetadas = mysqli_affected_rows($conexao);


if($linhas_afetadas > 0){
	$_SESSION['perfil_atualizado'] = true;
	$conexao->close();
	header('Location: ../paginas/perfil.php');
	exit;

}else{
    $_SESSION['error_perfil'] = true;
    $conexao->close();
	header('Location: ../paginas/perfil.php');
}

?>