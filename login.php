<?php  
	include 'menu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastros</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
</head>
<body>
	<div id="bia">
		<h1>Entrar</h1>
		<form class="form" action="testar.php" method="POST">
	        Nome: <input type="text" name="nomes">
	        Senha: <input type="password" name="senha">
	        <input type="submit" value="conecta-se">
	    </form>

	    <form action="cadastro_do_cliente.php" method="POST">
	        <input type="submit" value="cadastre-se" >
	    </form>
	    
    </div>
</body>
</html>