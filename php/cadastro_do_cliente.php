<?php 
// TALVEZ DE ERRO, SERIO, SOCORRO...
session_start();
if (!isset($_SESSION['nomes'],$_SESSION['endereço'],$_SESSION['cpf'],$_SESSION['telefone'],$_SESSION['email'])) {
	$_SESSION['nomes'] = array();
	$_SESSION['senha'] = array();
	$_SESSION['endereço'] = array();
	$_SESSION['cpf'] = array();
	$_SESSION['telefone']= array();
	$_SESSION['email']= array();
}
$nomes = $_SESSION['nomes'];
$endereço = $_SESSION['endereço'];
$cpf = $_SESSION['cpf'];
$telefone= $_SESSION['telefone'];
$email= $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastros</title>
</head>
<body>
	<h1>Cadastro de Usuários</h1>
	<form action="informacoes_do_cliente.php" method="POST">
		Nome: <input type="text" name="nome" placeholder="Digite seu Nome"><br><br>
		Senha: <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
		Endereço: <input type="text" name="endereço" placeholder="Digite seu Endereço"><br><br>
		CPF: <input type="number" name="cpf" placeholder="Digite seu CPF"><br><br>
		Telefone: <input type="number" name="telefone" placeholder="Digite seu número"><br><br>
		Email: <input type="text" name="email" placeholder="Digite seu Email"><br><br>
		<input type="submit">
	</form><br>
	<table border="1">
		<?php foreach ($nomes as $key => $nome): ?>
			<tr>
				<td><?=$nome?></td>
				<td><?=$endereço[$key]?></td>
				<td><?=$cpf[$key]?></td>
				<td><?=$telefone[$key]?></td>
				<td><?=$email[$key]?></td>
				<td><a href="remover.php?id=<?=$key?>">Remover</a></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>