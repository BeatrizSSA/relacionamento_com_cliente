<?php 
	$dbname = "id2969958_projeto";
	$usuario="id2969958_webmarket";
	$senha = "rogerininho";
	
try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}



 ?>