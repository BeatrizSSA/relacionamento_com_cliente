<?php
include "header.php";
require "bd/conexao.php"; 
?>
 <br>
 <br>
 <br>

    <form action="pesquisar.php" method="POST" id='form-contato' class="form-horizontal col-md-10">
        <label class="col-md-2 control-label" for="termo">Pesquisar</label>
            <div class='col-md-7'>
                <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Infome o Nome do produto" required>
            </div>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form>    
                <a href='pagina_do_cliente.php' class="btn btn-primary">Ver Todos</a>
                
    <a href='produtos.php' class="btn btn-success pull-right">Cadastrar Novo Produtos</a>
                <div class='clearfix'></div> 

<br>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" ty   pe="text/css" href="itens.css">
        <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">

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
        $host = "localhost";
        $usuario = "id2969958_webmarket";
        $senha = "rogerinho";
        $bd = "id2969958_projeto";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM cadastro";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT id, nome, quantidade, preco  FROM cadastro") or die(mysqli_error($strcon));
        $re = mysqli_fetch_array($name);
        while($dados = mysqli_fetch_array($resultado)): 
?>
        
<?php
    $id = $dados['id'];
    $nome=$dados['nome'];
    $quantidade = $dados['quantidade'];
    $preco = $dados['preco'];
        echo "<tr>
              <td> ".$nome."</td>
              <td>".$quantidade."</td>
              <td>R$"."$preco"."</td>
              <td><a href='../bd/excluir.php?id=".$id."'><i class='glyphicon glyphicon-trash' title='Deletar Produto'></i></a></td>
              <td><a href='bd/editar.php?id=".$row['id']."'><i class='glyphicon glyphicon-cog' title='editar Produto'></i></a></td>
            </tr>";
?>
      
<?php
    endwhile;
    mysqli_close($strcon);
?>
        </table>        
</body>
</html>