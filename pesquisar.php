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

    if (isset($_POST['pesquisa']) == true) {
      echo $prat;
    }else{
      echo "<h1>Não tem no estoque ".$prat."... </h1>";
    }

    include 'footer.php';
    ?>
  </body>
</html>