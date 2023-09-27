<?php
include_once '../conexao/conexao.php';





$_GET['id'];
$aluno = $_GET['id'];


$querySelect = $conexao->query("SELECT * FROM usuarios WHERE id_academia = '$aluno'");
 

$status = "Pago";  
while($registros = $querySelect->fetch_assoc()):
    $id_atleta = $registros['id'];
    $id_academia = $registros['id_academia'];
    $nome = $registros['nome'];
    $graduacao = $registros['graduacao'];
endwhile;



$queryInsert = $conexao->query("INSERT INTO mensalidades VALUES (default, '$id_atleta', '$id_academia', '$nome', '$graduacao','$status', NOW())");
if ($queryInsert >0 ){
    header('Location: mensalidades.php');
    $conexao->close();
    exit;
}else{
    echo "error";
}


?>