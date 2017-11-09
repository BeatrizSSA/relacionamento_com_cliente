<?php  
	require 'conexao.php';

	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$cpf = $_POST["cpf"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$sql = "INSERT INTO Cadastro(id, nome, endereco,cpf,telefone,email,login,senha) 
		VALUES( :id, :nome, :endereco, :cpf, :telefone,:email, :login, :senha)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':id', $id );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':endereco', $endereco );
	$stmt->bindParam( ':cpf',$cpf );
	$stmt->bindParam( ':telefone', $telefone);
	$stmt->bindParam( ':email', $email);
	$stmt->bindParam( ':login', $login);
	$stmt->bindParam( ':senha', $senha);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	header("location: ../login.php");
?>