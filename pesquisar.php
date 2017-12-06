<?php
  include 'header.php';
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
    echo "<h1>Pesquisando por ".$prat."... </h1>";

    // if (isset($_POST['pesquisa']) == true) {
    //   echo "<table>";

    //   echo" <tr>
    //           <th>Nome </th>
    //           <th>Quantidade</th>
    //           <th>Preco</th>
    //         </tr>";
    //   foreach($prat as $row) {
    //     echo "
    //           <tr>
    //             <td>".$row['nome']."</td>
    //             <td>".$row['quantidade']."</td>
    //             <td>".$row['preco']." </td>
    //           </tr>
    //           ";
    //   }
    //   echo "</table>";
    // }else{
    //   echo "<h1>Não tem no estoque ".$prat."... </h1>";
    // }

    include 'footer.php';
    ?>
  </body>
</html>