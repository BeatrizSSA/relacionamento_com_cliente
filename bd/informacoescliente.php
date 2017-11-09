<?php  	
	include 'BD_ligar.php';

	$nome = $_POST["Nome"];
	$endereço = $_POST["Endereço"];
	$cpf = $_POST["CPF"];
	$telefone = $_POST["Telefone"];
	$email = $_POST["Email"];
	$login = $_POST["login"];
	$senha = $_POST["Senha"];
	

	$sql = "INSERT INTO usuario(Nome, Endereço, CPF, Telefone, Email, login, Senha ) 
		VALUES(:Nome, :Endereço, :CPF, :Telefone, :Email, :login, :Senha)";
		
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':Nome', $nome );
	$stmt->bindParam( ':Endereço',$endereço );
	$stmt->bindParam( ':CPF', $cpf);
	$stmt->bindParam( ':Telefone', $telefone);
	$stmt->bindParam( ':Email', $email);
	$stmt->bindParam( ':login', $login );
	$stmt->bindParam( ':Senha', $senha );

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	// echo $stmt->rowCount() . "linhas inseridas";
	header("location: ../index.php");
?>