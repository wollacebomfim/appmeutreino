<?php
include_once '../conexao/conexao.php';

//$num_rows = null;
$id_atleta = $_SESSION['id'];

$sql = "SELECT * FROM treinos WHERE ultimo_treino BETWEEN '2023-11-01' AND '2023-11-30' AND id_atleta = '{$id_atleta}'" ;
if ($resultado = mysqli_query($conexao, $sql)) {
    $rows = mysqli_num_rows($resultado);
    echo $rows;
}
?>