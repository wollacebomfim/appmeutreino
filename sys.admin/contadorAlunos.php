<?php
include_once '../conexao/conexao.php';


$id_academia = '1';

$sql = "SELECT * FROM usuarios WHERE id_academia = '{$id_academia}' " ;
if ($resultado = mysqli_query($conexao, $sql)) {
    $rows = mysqli_num_rows($resultado);
    echo $rows;
}
?>