
 <?php

 include_once '../conexao/conexao.php';


if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: ../sys.admin/login.php');
	exit();
}


$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$query = "SELECT * FROM usuarios WHERE email = '{$usuario}' and senha = ('{$senha}')";




$resultado = mysqli_query($conexao, $query);

		if(mysqli_num_rows($resultado) == 1){
		$dados = mysqli_fetch_array($resultado);
		mysqli_close($conexao);
		$_SESSION['logado'] = true;
		$_SESSION['id'] = $dados ['id'];
		//header('Location: ../sys.admin/listagemGeral.php');
		exit();


		

		} else {
			$_SESSION['nao_autenticado'] = true;
			//header('Location: ../sys.admin/login.php');
			exit();
		}
		

?>