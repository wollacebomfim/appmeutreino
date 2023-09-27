<?php
session_start();
include_once '../conexao/conexao.php';
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPmailer\PHPMailer;
use PHPMailer\PHPmailer\SMTP;
use PHPMailer\PHPmailer\Exception;
$EmailEnviar = new PHPMailer(true);

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));

$querySelect = $conexao->query("SELECT * FROM usuarios WHERE email = '$email'");
$queryVerifica = mysqli_fetch_assoc($querySelect);


if($queryVerifica >= 1){

    $querySelect = $conexao->query("SELECT * FROM usuarios WHERE email = '$email'");
    while($registros = $querySelect->fetch_assoc()):
        
    $nome = $registros['nome'];
    $senha = $registros['senha'];
    endwhile;
    

	$novasenha = substr(md5(time()), 0, 6);
	$nscripto = md5($novasenha);
	$queryUpdate = $conexao->query("UPDATE usuarios SET senha = '$nscripto' WHERE email = '$email'");
	//$linhas_afetadas = mysqli_affected_rows($queryUpdate);
	//if($linhas_afetadas > 0	){
		//echo "alterou";
	//}
    	//Envio dos EMAILS
	$EmailEnviar = new PHPMailer(true);
	try {
		#EmailEnviar->SMTPDebug = SMTP::DEBUG_SERVER;
		$EmailEnviar->isSMTP();
		$EmailEnviar->Host = 'smtp.hostinger.com';
		$EmailEnviar->SMTPAuth = true;
		$EmailEnviar->Username = 'contato@checkmat-recife.neutralcode.com.br';
		$EmailEnviar->Password = 'Enolagay@1945';
		$EmailEnviar->Port = 587;
		$EmailEnviar->setFrom('contato@checkmat-recife.neutralcode.com.br');
		$EmailEnviar->addAddress($email);
		$EmailEnviar->isHTML(true);
		$EmailEnviar->Subject = 'Criação de Conta appMyTreino';
		$EmailEnviar->Body = 
		"
		Olá <b>$nome</b>,</br></br>
		Sua Senha de acesso é: <b>$novasenha</b>, altere no appMyTreino.</br></br>
		<td>Atenciosamente equipe appMyTreino.</td>
		<td>E-mail enviando automaticamente, favor não responder.</td>";
		
		
		$EmailEnviar->CharSet = 'UTF-8';
	
		if($EmailEnviar->send()){
            $_SESSION['usuario_existe'] = true;
			$conexao->close();
			header('Location: ../paginas/recSenha.php');
			exit;

		}else{
			    	echo "Algo deu errado, contato o administrador.";
		}
		
	}catch (Exception $e){
		$EmailEnviar->ErrorInfo=" erranmdop";
	}
}else{

            	$_SESSION['usuario_naoexiste'] = true;
			    $conexao->close();
	            header("Location: ../paginas/recSenha.php");
	            exit;
	
}

    


?>