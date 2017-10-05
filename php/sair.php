<?php
	session_start();
	$_SESSION['logado'] = false;
	header('location: php/login.php');
    

?>