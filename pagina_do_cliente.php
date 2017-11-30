<?php
include "header.php";
require "bd/conexao.php"; 
?>
 <br>
 <br>
 <br>
    <link rel="stylesheet" ty   pe="text/css" href="itens.css">
    <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/pagina_do_cliente.css">
    <div class="form-style-10">
    <form action="pesquisar.php" method="POST" id='form-contato' class="form-horizontal col-md-10">
        <label class="col-md-2 control-label" for="termo">Pesquisar</label>
            <div class='col-md-7'>
                <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Infome o Nome do produto" required>
            </div>
                <button type="submit" class="btn" style="background: black; color: white;">Pesquisar</button>
                <a href='pagina_do_cliente.php' class="btn" style="background: black; color: white;">Ver Todos</a>
    </form>    
                
    <a href='produtos.php' class="btn" style="background: blue; color: white;">Cadastrar Novo Produtos</a>
        <div class='clearfix'></div> 

<br>

        <title>Meus Produtos</title>
    </head>
    <body>
        <br>
        <br>
        <table class="quadrado">
            <tr>
                <th>Nome </th>
                <th>Quantidade</th>
                <th>Preco</th>
                <th>Deletar</th>
                <th>editar</th>
            </tr>
<?php
    include "bd/conexao.php";
    $stmt = "SELECT * FROM cadastro";
    foreach ($conn->query($stmt) as $row) {
        $id = $row['id'];
        $nome= $row['nome'];
        $quantidade = $row['quantidade'];
        $preco = $row['preco'];
        echo "<tr>
              <td> "."$nome"."</td>
              <td>"."$quantidade"."</td>
              <td>R$"."$preco"."</td>
              <td><a href='../bd/excluir.php?id=".$id."'><i class='glyphicon glyphicon-trash' title='Deletar Produto'></i></a></td>
              <td><a href='bd/editar.php?id=".$row['id']."'><i class='glyphicon glyphicon-cog' title='editar Produto'></i></a></td>
            </tr>";
    }
?>
   
      </table>   