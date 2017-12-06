<?php
  include 'header.php';
  include 'bd/conexao.php'
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <script> 
      window.setTimeout("location.href='pagina_do_cliente.php'",1000*10);
    </script>
    <?php
    $prat = $_POST['pesquisa'];

    $data = $conn->query("SELECT * FROM cadastro WHERE nome LIKE '%".$prat."%'");
    echo "<h1>Pesquisando por ".$prat."... </h1>";

    echo "<table class='table table-bordered'>
            <tr>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preco</th>
            </tr>";
    foreach ($data as $row) {
    echo "<tr>
          <td>".$row['nome']. "</td>
          <td>".$row['quantidade']. "</td>
          <td>".$row['preco']. "</td>
          </tr>";
    }
      echo "</table>";  

    /*if (isset($_POST['pesquisa']) == true) {
      echo $prat;
      echo $prat['quantidade'];
      echo $prat['preco'];
    }else{
      echo "<h1>Não tem no estoque ".$prat."... </h1>";
    }*/

    include 'footer.php';
    ?>
  </body>
</html>
