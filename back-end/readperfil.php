<?php
include_once '../conexao/conexao.php';

$_SESSION['id'];
$querySelect = $conexao->query("SELECT * FROM usuarios WHERE id = {$_SESSION['id']}");
$dados = mysqli_fetch_array($querySelect);
$conexao->close();
?>