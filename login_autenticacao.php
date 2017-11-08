<?php
session_start();
$host = "localhost";
$banco = "id2969958_projeto";
$user = "id2969958_webmarket";
$pass = "rogerinho";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao, $banco) or die(mysqli_error());
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
	<script type="text/javascript">
		function loginsucess(){
			window.location='pagina_do_usuario.php';
		}
		function loginfailed(){
			window.location='login.php';
		}
	</script>
</head>o
<body>

<?php  
$Login = $_POST['Login'];
$Senha = $_POST['Senha'];
$sql = mysqli_query($conexao,"SELECT * FROM Cadastro WHERE Login = '$Login' and Senha = '$Senha'") or die(mysql_error('Login ou Senha errado'));
$row = mysqli_num_rows($sql);
if($row > 0){
	$_SESSION['Login'] = $Login;
	$_SESSION['Senha'] = $Senha;
	$_SESSION['logado'] = True;
	echo "<script>loginsucess()</script>";

}
else{
	echo "<script>loginfailed()</script>";
}
?>

</body>
</html>