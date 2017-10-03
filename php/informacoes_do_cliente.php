<?php 
	session_start();
 	
 	if(!isset($_SESSION['nomes'], $_SESSION['senha'], $_SESSION['endereço'], $_SESSION['cpf'],
	$_SESSION['telefone'], $_SESSION['email'] )){
		$_SESSION['nomes'] = array();
		$_SESSION['senha'] = array();
		$_SESSION['endereço'] = array();
		$_SESSION['cpf'] = array();
		$_SESSION['telefone'] = array();
		$_SESSION['email'] = array();

		$_SESSION['nomes'][] = $_POST['nomes'];
		$_SESSION['senha'][] = $_POST['senha'];
		$_SESSION['endereço'][] = $_POST['endereço'];
		$_SESSION['cpf'][] = $_POST['cpf'];
		$_SESSION['telefone'][] = $_POST['telefone'];
		$_SESSION['email'][] = $_POST['email'];

	}else{
		$_SESSION['nomes'][] = $_POST['nomes'];
		$_SESSION['senha'][] = $_POST['senha'];
		$_SESSION['endereço'][] = $_POST['endereço'];
		$_SESSION['cpf'][] = $_POST['cpf'];
		$_SESSION['telefone'][] = $_POST['telefone'];
		$_SESSION['email'][] = $_POST['email'];
	}
	header('location:php/index.php');

?>