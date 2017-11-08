<?php  
	require 'conexao.php';

	$Id = $_POST["Id"];
	$Nome = $_POST["Nome"];
	$Endereco = $_POST["Endereco"];
	$Cpf = $_POST["Cpf"];
	$Telefone = $_POST["Telefone"];
	$Email = $_POST["Email"];
	$Login = $_POST["Login"];
	$Senha = $_POST["Senha"];

	$sql = "INSERT INTO Cadastro(Id, Nome, Endereco,Cpf,Telefone,Email,Login,Senha) 
		VALUES( :Id, :Nome, :Endereco, :Cpf, :Telefone,:Email, :Login, :Senha)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':Id', $Id );
	$stmt->bindParam( ':Nome', $Nome );
	$stmt->bindParam( ':Endereco', $Endereco );
	$stmt->bindParam( ':Cpf',$Cpf );
	$stmt->bindParam( ':Telefone', $Telefone);
	$stmt->bindParam( ':Email', $Email);
	$stmt->bindParam( ':Login', $Login);
	$stmt->bindParam( ':Senha', $Senha);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	header("location: ../login.php");
?>