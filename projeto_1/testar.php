<?php
//TA DANDO ERRO 
	session_start();
	$nome = $_POST['nomes'];
	$senha = $_POST['senha'];
	
	$_SESSION['logado'] = false;
	if(isset($_SESSION['nomes']) == $nome && $_SESSION['senha'] == $senha ){
			$_SESSION['logado'] = true;
			header('location:pagina.php');
			exit();
		}
		echo "Usuário ou senha estão errados.";
	
?>