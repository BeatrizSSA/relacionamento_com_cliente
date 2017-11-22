<?php
    include 'header.php';
?>

<body style="text-align:center;">
<br>
<br>
	<link rel="stylesheet" type="text/css" href="signup.css">
 	<div class="form-style-10">
    <form action="bd/cadastrar_produtos.php" method="POST" class="formulario">
     
        Nome Do Produto 
        <input type="text" name="nome" placeholder="Digite o nome do item" required/><br>
        <br>
        Quantidade em estoque
        <input type="text" name="quantidade" placeholder="Digite a quantidade" required/><br>
        <br>
        Preço
        <input type="numero" name="preco" placeholder="Digite o Preço." maxlength="5" required/><br>
        <br>
            
        <input type="submit" value="Salvar"> <br>
        
    </form>
      
</body>
</html>