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
			window.location='pagina_do_cliente.php';
		}
		function loginfailed(){
			window.location='login.php';
		}
	</script>
</head>
<body>

<?php  
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'") or die(mysql_error('Login ou senha errado'));
$row = mysqli_num_rows($sql);
if($row > 0){
	$_SESSION['login'] = $login;
	$_SESSION['senha'] = $senha;
	$_SESSION['logado'] = True;
	echo "<script>loginsucess()</script>";

}
else{
	echo "<script>loginfailed()</script>";
}
?>

</body>
</html>