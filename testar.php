<?php

	session_start();
	$nome = $_POST['nomes'];
	$senha = $_POST['senha'];
	
	
	if(verificacao($nome, $senha) == 1){
		$_SESSION["logado"] = true;
		header('location: pagina_do_cliente.php');
	}else{
		echo "Usuário ou senha estão errados.";
		echo "<a href=' index.php'>Voltar</a>";
	}



	function verificacao($nome, $senha){
		$a = $_SESSION['nomes'];
		$cont = 0;
		foreach ($a as $key => $value) {
			if (($nome == $_SESSION['nomes'][$key]) && ($senha == $_SESSION['senha'][$key])) {
				$cont++;
			}
		}	
		return $cont;
	}
	
?>