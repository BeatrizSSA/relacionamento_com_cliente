<?php
$host = "localhost";
$usuario = "id2969958_beatriz";
$senha = "projeto1";
$bd = "id2969958_cadastro";
$id = $_GET['id'];
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "DELETE FROM produtos WHERE PRO_ID = '$id'";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
header('location: ../php/.php');
?>