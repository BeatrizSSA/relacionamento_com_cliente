<?php  
session_start();
// echo"<pre>";var_dump($_SESSION);echo"</pre>";
?>
<html>
	<head>

	</head>
	<body>
		<h1>Entrar</h1>
		<form action="testar.php" method="POST">
        	Nome: <input type="text" name="nome">
        	Senha: <input type="password" name="senha">
        	<input type="submit">
    	</form>
    	<p>Se não é cadastrado...<a href="../projeto_1/cadastro.php">aperte aqui</a></p>
    	
	</body>
</html>
