<?php
 require 'conexao.php';

// Exclui o registro do banco de dados
$bd = "id2969958_projeto";
$id = $_GET['id'];
$strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
$sql = "DELETE FROM produtos WHERE PRO_ID = '$id'";
$resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');

?>