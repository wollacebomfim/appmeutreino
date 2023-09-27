<?php

include_once '../conexao/conexao.php';

$id = $_GET['id'];


$querySelect = $conexao->query("SELECT * FROM competicao_parcial WHERE id = {$id}");
$dados = mysqli_fetch_array($querySelect);
?>