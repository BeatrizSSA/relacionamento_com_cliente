
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastros</title>
</head>
<body>
	<h1>Cadastro de Usuários</h1>
	<form action="../php/informacoes_do_cliente.php" method="POST">
		Nome: <input type="text" name="nomes" placeholder="Digite seu Nome"><br><br>
		Senha: <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
		Endereço: <input type="text" name="endereço" placeholder="Digite seu Endereço"><br><br>
		CPF: <input type="number" name="cpf" placeholder="Digite seu CPF"><br><br>
		Telefone: <input type="number" name="telefone" placeholder="Digite seu número"><br><br>
		Email: <input type="text" name="email" placeholder="Digite seu Email"><br><br>
		<input type="submit">
	</form><br>	
</body>
</html>

