<?php
    include 'header.php';
?>


<body style="text-align:center;">
<br>
<br>
	<link rel="stylesheet" type="text/css" href="../css/produtos.css">
    <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/itens.css">
 	<div class="form-style-10">

    <div class="container">
        <form action="bd/cadastrar_produtos.php" method="POST" class="formulario">
        <div class="form-group">
            <label for="fname">Nome Do Produto:</label><br>
            <input type="text" class="form-control col-sm-4" id="fname" name="nome" placeholder="Digite o nome do item" required/>
        </div>
        <div class="form-group">
            <label for="fname">Quantidade em estoque:</label><br>
            <input type="text" class="form-control" id="fname" name="quantidade" placeholder="Digite a quantidade" required/>
        </div>
        <div class="form-group">
            <label for="fname">Preço:</label><br>
            <input type="numero" class="form-control" id="fname" name="preco" placeholder="Digite o Preço." maxlength="5" required/><br>
        </div>
                
            <input type="submit" value="Salvar" class="btn" style="background: black; color: white;"> <br>

            
        </form>
    </div>
      
</body>
</html>