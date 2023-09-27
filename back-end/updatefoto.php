<?php
session_start();
include_once '../conexao/conexao.php';

$id = $_SESSION['id'];


//diretório para salvar as imagens
$diretorio = "../uploads/";
//Verificar a existência do diretório para salvar as imagens e informa se o caminho é um diretório
if(!is_dir($diretorio)){ 
    echo "Pasta $diretorio nao existe";
}else{    
    $arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;
    //loop para ler as imagens
    for ($controle = 0; $controle < count($arquivo['name']); $controle++){        
        $destino = $diretorio."/".$arquivo['name'][$controle];
        //realizar o upload da imagem em php
        //move_uploaded_file — Move um arquivo enviado para uma nova localização
        if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
            //echo "Upload realizado com sucesso<br>"; 
			$Foto = implode($arquivo['name']);
			
        }else{
            //echo "Erro ao realizar upload";
        }        
    }
}



$sql = $conexao->query("UPDATE usuarios SET foto='$Foto' WHERE id = '$id'");
$linhas_afetadas = mysqli_affected_rows($conexao);


if($linhas_afetadas > 0){
	$_SESSION['cadastro_atualizado'] = true;
	$conexao->close();
	header('Location: ../paginas/perfil.php');
	exit;

}else{
    echo "Ocorreu um error";
    $conexao->close();
	header('Location: ../paginas/perfil.php');
}

?>