<?php  
include '../index.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<title>Cadastros</title>
</head>
<body>
	<h1>Entrar</h1>
	<form action="php/testar.php" method="POST">
        Nome: <input type="text" name="nomes">
        Senha: <input type="password" name="senha">
        <input type="submit">
    </form>
    <p>Se não é cadastrado...<a href="../php/cadastro_do_cliente.php">aperte aqui</a></p>
</body>


