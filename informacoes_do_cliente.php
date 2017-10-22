<?php  
	$dbname = "id2969958_cadastro";
	$usuario="id2969958_beatriz";
	$senha = "projeto1";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	$nome = $_POST["nome"];
	$senha = $_POST["senha"];
	$endereço = $_POST["endereço"];
	$cpf = $_POST["cpf"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];
	

	$sql = "INSERT INTO usuarios(Nome,Senha,Endereço,CPF,Telefone,Email) 
		VALUES(:nome, :senha, :endereço, :cpf, :telefone, :email)";
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':nome', $nome );
	$stmt->bindParam( ':senha', $senha );
	$stmt->bindParam( ':endereço',$endereço );
	$stmt->bindParam( ':cpf', $cpf);
	$stmt->bindParam( ':telefone', $telefone);
	$stmt->bindParam( ':email', $email);

	$result = $stmt->execute();

	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}	  
	// echo $stmt->rowCount() . "linhas inseridas";
	header("location: login.php");
?>