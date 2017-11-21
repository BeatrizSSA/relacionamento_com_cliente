<?php 
	session_start();
	$dbname = "id2969958_projeto";
	$usuario = "id2969958_webmarket";
    $senha = "rogerinho";
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
	$dat = date("Y-m-d H:i:s");
	$data = date('Y-m-d H:i:s', strtotime($dat.' - 3 hours'));
	$remetente = $_SESSION["remetente"];
	$mensagem = $_POST["mensagem"];
	$destinatario = $_SESSION['destinatario'];
	$sql = "INSERT INTO mensagens(remetente, destinatario, mensagem, data) 
		VALUES(:remetente, :destinatario, :mensagem, :data)";	
	$stmt = $conn->prepare( $sql );
	$stmt->bindParam( ':remetente', $remetente );
	$stmt->bindParam( ':destinatario',$destinatario  );
	$stmt->bindParam( ':mensagem',$mensagem  );
	$stmt->bindParam( ':data',$data  );
	$result = $stmt->execute();
	if ( ! $result ){
	    var_dump( $stmt->errorInfo() );
	    exit;
	}
	header("location: ../mensagens.php?id=$destinatario");
?>



?>