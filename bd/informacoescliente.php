<?php

include 'BD_ligar.php';

	$Nome = $_POST['nome'];
	$Endereço = $_POST['endereco'];
	$CPF = $_POST['cpf'];	
	$Telefone = $_POST['telefone'];
	$Email = $_POST['email'];
	$login = $_POST['login'];
	$Senha = $_POST['senha'];
	
	$sql = "INSERT INTO usuario(Nome, Endereco, CPF, Telefone, Email, login, Senha) 
		VALUES(:Nome, :Endereço, :CPF, :Telefone, :Email, :login, :Senha)";	
	
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':Nome', $Nome );
	$stmt->bindParam( ':Endereco', $Endereço );
	$stmt->bindParam( ':CPF', $CPF );
	$stmt->bindParam( ':Telefone', $Telefone );
	$stmt->bindParam( ':Email', $Email );	
	$stmt->bindParam( ':login', $login );
	$stmt->bindParam( ':Senha', $Senha );
	

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}

	header("location: ../pagina_do_cliente.php");
?>