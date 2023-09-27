<?php
session_start();
include_once '../conexao/conexao.php';
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
include '../vendor/autoload.php';


require_once __DIR__.'/../vendor/autoload.php';


use PHPMailer\PHPmailer\PHPMailer;
use PHPMailer\PHPmailer\SMTP;
use PHPMailer\PHPmailer\Exception;
$EmailEnviar = new PHPMailer(true);
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$sobrenome = mysqli_real_escape_string($conexao, trim($_POST['sobrenome']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$id_academia = mysqli_real_escape_string($conexao, trim($_POST['id_academia']));
$graduacao = mysqli_real_escape_string($conexao, trim($_POST['graduacao']));
$datanasc = mysqli_real_escape_string($conexao, trim($_POST['datanasc']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$whatsapp = mysqli_real_escape_string($conexao, trim($_POST['whatsapp']));



$querySelect = $conexao->query("SELECT * FROM usuarios WHERE email = '$email'");
$queryVerifica = mysqli_fetch_assoc($querySelect);


if($queryVerifica >= 1) {
	$_SESSION['inscricao_existe'] = true;
	header('Location: ../paginas/confirmacao.php');
	$conexao->close();
	exit;
	
}


$sql = $conexao->query("INSERT INTO usuarios VALUES (default, '$id_academia', '$nome', '$sobrenome', '$email', '$senha', '$graduacao', '$datanasc', '$whatsapp', NOW(), NULL, NULL, 0, 'sem-foto.jpg', 0)");
//header('Location: ../paginas/confirmacao.php');


if($sql > 0){

	$_SESSION['inscricao_concluida'] = true;

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
		Olá <b>$nome</b>, obrigado por se cadastrar no appMyTreino,<br></br>
	    <td>Atenciosamente equipe appMyTreino.</td>";
		
		
		$EmailEnviar->CharSet = 'UTF-8';

		
	
		if($EmailEnviar->send()){
			$_SESSION['inscricao_concluida'] = true;
			$conexao->close();
			header('Location: ../paginas/confirmacao.php');
			exit;

		}else{
		$_SESSION['error_inscricao'] = true;
		header('Location: ../paginas/cadastro.php');
		$conexao->close();
		exit;
		}
		
	}catch (Exception $e){
	$_SESSION['error_email'] = true;
	header('Location: ../paginas/confirmacao.php');
	$conexao->close();
	exit;
	}
}else{
	$_SESSION['error_inscricao'] = true;
	header('Location: ../paginas/confirmacao.php');
	$conexao->close();
	exit;	
}

?>