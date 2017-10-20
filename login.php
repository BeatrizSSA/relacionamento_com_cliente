<?php  
	include 'header.php';
?>

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

<?php  
	include 'footer.php';
?>