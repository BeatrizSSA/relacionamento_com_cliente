<?php
//TA DANDO ERRO 
	session_start();
	$nome = $_POST['nomes'];
	$senha = $_POST['senha'];
	
<<<<<<< HEAD:projeto_1/testar.php
	$a= $_SESSION['logado'];
	foreach ($a as $value) {
		if ($nome == $_POST['nomes'] && $senha == $_POST['senha']) {
			header('location:pagina.php');
		}else{
			echo "Usuário ou senha estão errados.";
			echo "<a href='entrada.php'>Voltar</a>";
=======
	$_SESSION['logado'] = false;
	if(isset($_SESSION['nomes']) == $nome && $_SESSION['senha'] == $senha ){
			$_SESSION['logado'] = true;
			header('location:pagina_do_cliente.php');
			exit();
>>>>>>> e162856750f39ae12f9674c368c53b048d745292:php/testar.php
		}
	}

	/*$_SESSION['logado'] = false;
	if(isset($_SESSION['nomes']) == $nome && $_SESSION['senha'] == $indice ){
		$_SESSION['logado'] = true;
		header('location:pagina.php');
		exit();
		
	}else{
		echo "Usuário ou senha estão errados.";
	}*/
?>