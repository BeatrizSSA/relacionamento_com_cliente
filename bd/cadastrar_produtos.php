<?php  
	require 'conexao.php';

	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$quantidade = $_POST["quantidade"];
	$preco = $_POST["preco"];

	
	$stmt = $conn->prepare( "INSERT INTO cadastro(id, nome, quantidade, preco) VALUES( :id,:nome,:quantidade,:preco)");
	$stmt->bindParam( ':id', $id );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':quantidade', $quantidade);
	$stmt->bindParam( ':preco', $preco);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	header("location: ../pagina_do_cliente.php");
?>