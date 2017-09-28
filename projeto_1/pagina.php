<?php
// TA DANDO EERRO
	session_start();
	if ($_SESSION["logado"] == false) {
		header("location: entrada.php");
	}
	$nome = $_SESSION['nomes'];
	$endereço = $_SESSION['endereço'];
	$cpf = $_SESSION['cpf'];
	$telefone = $_SESSION['telefone'];
	$email = $_SESSION['email'];
	// $nomeDoUsuario = $_SESSION['logado'];
	// $filmesDoUsuario = $_SESSION['filmes'][$nomeDoUsuario];
?>
<html>
	<head>
	</head>
	<body>
		<h1>Sejam bem vindos! <?= $_SESSION['logado'] ?></h1>
		<a href="sair.php">Sair</a>

		<table border="1"> 
		<?php foreach ($nomes as $key => $nome): ?>
			<tr>
				<td><?=$nomes?></td>
				<td><?=$endereço[$key]?></td>
				<td><?=$cpf[$key]?></td>
				<td><?=$telefone[$key]?></td>
				<td><?=$email[$key]?></td>
				<td><a href="deletar.php?id=<?=$key?>">Remover</a></td>
			</tr>
 		 <?php endforeach ?>
	</table>
	</body>
</html>