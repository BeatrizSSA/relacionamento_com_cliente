<?php 
	session_start();
	$id = $_GET['id'];
	
	unset($_SESSION['nomes'][$id]);
	unset($_SESSION['senha'][$id]);	
	unset($_SESSION['endereço'][$id]);
	unset($_SESSION['cpf'][$id]);
	unset($_SESSION['telefone'][$id]);
	unset($_SESSION['email'][$id]);

	header('location: cadastro.php');
?>
