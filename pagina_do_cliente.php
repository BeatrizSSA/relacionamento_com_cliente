<?php
include "BD_ligar.php";
include 'header.php';
	session_start();
	if ($_SESSION["logado"] == false) {
		header("location: index.php");
	}
?>
<html>
	<head>
	</head>
	<body>
		<h1>Sejam bem vindos! </h1>
		<a href="deslogar.php">Sair</a>

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