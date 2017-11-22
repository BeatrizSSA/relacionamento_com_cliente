<?php
    include 'header.php';
?>

<body style="text-align:center;">
<br>
<br>
	<link rel="stylesheet" ty   pe="text/css" href="produtos.css">
    <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="produtos.css">
 	<div class="form-style-10">
    <form action="bd/cadastrar_produtos.php" method="POST" class="formulario">
     
        Nome Do Produto:
        <input type="text" name="nome" placeholder="Digite o nome do item" required/><br>
        <br>
        Quantidade em estoque:
        <input type="text" name="quantidade" placeholder="Digite a quantidade" required/><br>
        <br>
        Preço:
        <input type="numero" name="preco" placeholder="Digite o Preço." maxlength="5" required/><br>
        <br>
            
        <input type="submit" value="Salvar" class="btn" style="background: black; color: white;"> <br>
        
    </form>
      
</body>
</html>