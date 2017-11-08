<?php
    require 'conexao.php';

	$Nome = $_POST['Nome'];
	$Endereço = $_POST['Endereco'];
	$CPF = $_POST['CPF'];	
	$Telefone = $_POST['Telefone'];
	$Email = $_POST['Email'];
	$login = $_POST['login'];
	$Senha = $_POST['Senha'];
    $conexao = Conexao::getInstance();

	$sql = "INSERT INTO usuario(Nome, Endereco, CPF, Telefone, Email, login, Senha) VALUES (:Nome, :Endereco, :CPF, :Telefone, :Email,:login, :Senha)";
	$stmt = $conexao->prepare( $sql );
	$stmt->bindValue( ':Nome', $Nome );
	$stmt->bindValue( ':Endereco', $Endereco );
	$stmt->bindValue( ':CPF', $CPF );
	$stmt->bindValue( ':Telefone', $Telefone );
	$stmt->bindValue( ':Email', $Email );
	$stmt->bindValue( ':login', $login );
	$stmt->bindValue( ':Senha', $Senha );
	$result = $stmt->execute();

	
header("location:pagina_do_cliente.php");
 ?>