<?php 
session_start();
include_once '../conexao/conexao.php';
date_default_timezone_set('America/Recife'); 
$date= date('Y-m-d H:i:s');




$tag = $_GET['tag'];
//$sql = $conexao->query("INSERT INTO tag VALUES (default, '$tag')");
$querySelect = $conexao->query("SELECT * FROM usuarios WHERE email = '$tag'");
$queryVerifica = mysqli_fetch_assoc($querySelect);

//$rows = mysqli_affected_rows($querySelect);



if($queryVerifica >=1){

    $querySelect2 = $conexao->query("SELECT * FROM usuarios WHERE email = '$tag'");
    $dados = mysqli_fetch_array($querySelect2);


    $id_atleta = $dados['id'];
    $id_academia = $dados['id_academia'];
    $nome = $dados['nome'];
    $graduacao = $dados['graduacao'];
    $status = "Presente";
    $tag = $dados['tag'];
    $foto =$dados['foto'];
    
    
        $queryInsert = $conexao->query("INSERT INTO treinos VALUES (default, '$id_atleta', '$id_academia', '$nome', '$graduacao', '$status', '$tag', '$foto','$date')");
        $queryAtualiza = $conexao->query("UPDATE usuarios SET ultimo_treino = '$date' WHERE id = '$id_atleta'");
    if($queryInsert > 0){
        //echo "funfou";
        //echo $date;
        $conexao->close();
        exit;
    }else{
        //echo "deu merda";
        //echo $date;
        $conexao->close();
        exit;
    }
}else{
    $conexao->close();
    exit;
}


?>