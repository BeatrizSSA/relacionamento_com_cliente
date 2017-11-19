<?php
	$host = "localhost";
	$usuario = "id2969958_webmarket";
	$senha = "rogerinho";
	$bd = "id2969958_projeto";
	$id = $_GET['id'];
	try {
	  	$conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
?>
<?php
	$host = "localhost";
	$usuario = "id2969958_webmarket";
	$senha = "rogerinho";
	$bd = "id2969958_projeto";
	$id = $_GET['id'];
	$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
	$sql = "DELETE FROM cadastro WHERE id = '$id'";
	$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
	header ("location: ../pagina_do_cliente.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR" xml:lang="pt-BR">
<head>
<title>Voltar pagina anterior</title>
<script type="text/javascript">
function voltar() {
	window.setTimeout(function(){history.go(-1)},0);
}
</script>
</head>
<body onLoad="voltar();">
</body>
</html>