<?php 
	session_start();
// GABRIEL, TA DANDO ERRO AQUI.
 echo"<pre>";var_dump($_SESSION);echo"</pre>";
	$nome = $_POST['nomes'];
	$senha= $_POST['senha'];
	$endereço = $_POST['endereço'];
	$cpf = $_POST['cpf'];
	$telefone= $_POST['telefone'];
	$email= $_POST['email'];

	 if(!isset($_SESSION['nomes'])){
	 	$_SESSION['nomes'] = array();
	 }
	array_push($_SESSION['nomes'], $nome);
	array_push($_SESSION['senha'], $senha);
	array_push($_SESSION['endereço'], $endereço);
	array_push($_SESSION['cpf'], $cpf);
	array_push($_SESSION['telefone'], $telefone);
	array_push($_SESSION['email'], $email);

	/*$_SESSION["Cadastros"]= [
		
		[$_SESSION["nomes"],$nomes],
		[$_SESSION["endereço"],$endereço],
		[$_SESSION["cpf"],$cpf],
		[$_SESSION["telefone"],$telefone],
		[$_SESSION["email'"],$email]
		
	];/*

	 header('location:entrada.php');
?>