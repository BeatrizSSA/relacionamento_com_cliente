<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/estilomenu.css">
    <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Tabela</title>
</head>

<body style="text-align:center;">
<br>
<br>
    <form action="bd/cadastrar_produtos.php" method="POST" class="formulario">
     
        Nome Do Produto 
        <input type="text" name="nome" placeholder="Digite o nome do item" required/><br>
        <br>
        Quantidade em estoque
        <input type="text" name="quantidade" placeholder="Digite a quantidade" required/><br>
        <br>
        Preço
        <input type="numero" name="preco" placeholder="Digite o Preço de barras." maxlength="5" required/><br>
        <br>
            
        <input type="submit" value="Salvar"> <br>
        
    </form>
      
</body>
</html>