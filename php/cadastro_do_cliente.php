<?php  
	include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastros</title>
	<link rel="stylesheet" type="text/css" href="../estilo.css">
</head>
<body>
	<h1>Cadastro de Usuários</h1>
	<div id="bia">
	<form action="php/informacoes_do_cliente.php" method="POST">
		Nome: <input type="text" name="nomes" placeholder="Digite seu Nome">
		Senha: <input type="password" name="senha" placeholder="Digite sua senha">
		Endereço: <input type="text" name="endereço" placeholder="Digite seu Endereço">
		CPF: <input type="number" name="cpf" placeholder="Digite seu CPF">
		Telefone: <input type="number" name="telefone" placeholder="Digite seu número">
		Email: <input type="text" name="email" placeholder="Digite seu Email">
		<input type="submit" value="Enviar">
	</form>
	</div>
</body>
</html>

