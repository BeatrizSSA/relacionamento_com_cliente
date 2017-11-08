<?php 
  $dbname = "id2969958_cadastro";
  $usuario="id2969958_beatriz";
  $senha = "123456";
  
try {
      $conn = new PDO("mysql:host=localhost;dbname=$dbname", $usuario, $senha);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }



 ?>