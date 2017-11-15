<?php
include "header.php";
require "bd/conexao.php";
// Recebe o termo de pesquisa se existir
// $termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';
 
// // // Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
//     if (empty($termo)):
     
//         // $conexao = Conexao::getInstance();
//         $sql = 'SELECT id, codigo, nome, quantidade, preco FROM cadastro';
//         // $stm= $conexao->prepare($sql);
//              /*$stm->execute();*/
//              // $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
          
//     else:
          
//              // Executa uma consulta baseada no termo de pesquisa passado como parâmetro
//              // $conexao = conexao::getInstance();
//         $sql = 'SELECT id, codigo, nome, quantidade, preco FROM cadastro WHERE nome LIKE :nome OR codigo LIKE :codigo :quantidade :preco';
//         $stm = $conexao->prepare($sql);
//         $stm->bindValue(':nome', $termo.'%');
//         $stm->bindValue(':codigo', $termo.'%');
//         $stm->bindValue(':quantidade', $termo.'%');
//         $stm->bindValue(':preco', $termo.'%');
//         $stm->execute();
//         $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
         
//     endif;

?>

 <br>
 <br>
 <br>

    <form action="" method="get" id='form-contato' class="form-horizontal col-md-10">
        <label class="col-md-2 control-label" for="termo">Pesquisar</label>
            <div class='col-md-7'>
                <input type="text" class="form-control" id="termo" name="termo" placeholder="Infome o Nome do produto">
            </div>
        <button type="submit" class="btn btn-primary">Pesquisar</button>
        <a href='pagina_do_cliente.php' class="btn btn-primary">Ver Todos</a>
    </form>    
                
    <a href='lista1.php' class="btn btn-success pull-right">Cadastrar Novo Produtos</a>
    <div class='clearfix'></div> 


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="itens.css">
        <link rel="stylesheet"  href="./font-awesome-4.7.0/css/font-awesome.min.css">

        <title>Meus Produtos</title>
    </head>
    
    <body>
        <br>
        <br>
        <table class="quadrado">
            <tr>
                <th>nome </th>
                <th>quantidade</th>
                <th>preco</th>
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
                <td>".$preco."</td>
                <td><a href='bd/excluir.php?id=".$id."'><i class='fa fa-2x fa-trash sr-icons' title='Deletar Produto'></i></a></td>
                <td><a href='bd/editar.php?id=".$row['id']."'><i class='glyphicon glyphicon-cog' title='editar Produto'></i></a></td>
            </tr>";
    ?>
      
        <?php

            endwhile;
            mysqli_close($strcon);

        ?>
    </table>
    <br>

</body>
</html>