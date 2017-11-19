<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="itens.css">
	<title>pesquisar</title>
	<style>
		table,td,tr,th{
			border: 1px solid black;
			border-collapse: collapse; 
		}
	</style>
</head>
<body>

</body>
</html>
<?php
include "header.php";
?>
<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
  $host = "localhost";
  $usuario = "id2969958_webmarket";
  $senha = "rogerinho";
  $bd = "id2969958_projeto";
        
try {
      $conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }

   ?>
    <?php
// Monta outra consulta MySQL para a busca
    $buscar = $_POST['pesquisa'];
    // Executa a consulta

$data = $conn->query('SELECT * FROM cadastro WHERE Nome = ' . $conn->quote($buscar));
 
      echo "<table>";

          echo"  <tr>
                <th>Nome </th>
                <th>Quantidade</th>
                <th>Preco</th>
                </tr>";
  foreach($data as $row) {  
      echo "
      <tr>
      <td>".$row['nome']."</td>
      
      
      <td>".$row['quantidade']."</td>
      
    
      <td>".$row['preco']." </td>
      </tr>
      ";
    }
    echo "</table>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
<?php 
include "rodape.php";
 ?> 