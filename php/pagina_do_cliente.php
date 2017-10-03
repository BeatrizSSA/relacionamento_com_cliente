<?php
// TA DANDO EERRO
	session_start();
	if ($_SESSION["logado"] == false) {
		header("location: index.php");
	}
	$nomes = $_SESSION['nomes'];
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
		<h1>Sejam bem vindos! <?=  ?></h1>
		<a href="php/deslogar.php">Sair</a>

		<table border="1"> 
		<?php foreach ($nomes as $key => $nome): ?>
			<tr>
				<td><?=$nome?></td>
				<td><?=$endereço[$key]?></td>
				<td><?=$cpf[$key]?></td>
				<td><?=$telefone[$key]?></td>
				<td><?=$email[$key]?></td>
				<td><a href="php/remover.php?id=<?=$key?>">Remover</a></td>
			</tr>
 		 <?php endforeach ?>
	</table>
	</body>
</html>