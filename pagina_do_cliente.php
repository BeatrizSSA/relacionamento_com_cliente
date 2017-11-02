<?php  

require 'conexao.php';
 
// Recebe o termo de pesquisa se existir
 $termo = (isset($_GET['termo'])) ? $_GET['termo'] : '';
 
// // Verifica se o termo de pesquisa está vazio, se estiver executa uma consulta completa
if (empty($termo)):
 
    $conexao = Conexao::getInstance();
    $sql = 'SELECT Nome, Endereco, CPF, Telefone, Email, login, Senha FROM usuario';
    $stm= $conexao->prepare($sql);
    $stm->execute();
    $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
 
else:
 
    // Executa uma consulta baseada no termo de pesquisa passado como parâmetro
    $conexao = conexao::getInstance();
    $sql = 'SELECT Nome, Endereco, CPF, Telefone, Email, login, Senha FROM usuario WHERE login LIKE :login OR Senha LIKE :Senha';
    $stm = $conexao->prepare($sql);
    $stm->bindValue(':login', $termo.'%');
    $stm->bindValue(':Senha', $termo.'%');
    $stm->execute();
    $clientes = $stm->fetchAll(PDO::FETCH_OBJ);
 
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WebMarket</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
      
      body {
        color: #7f8c97;
        background-color: #e9f0f5;
      }
  </style>
</head>
<body>
    <!-- Pra ficar no centro -->
    <div class="container">

    <h1>Usuários Cadastrados</h1>
    <!-- Deixa o formulário com os itens umabaixo do outro -->
    <form class="form-horizontal" action="testebd.php" method="POST">
    <!-- genrenciar os itens do formulário com espécies de subclasses -->
    <div class="form-group">
        <!-- subclasse para controlar o estilo do label e o tamanho que vai comer na página em matéria de margin e padding -->
        <label class="control-label col-sm-2" for="Nome">Nome: </label>
            <!-- gerencia o tamanho do input  -->
            <div class="col-sm-4">
                <!-- estilos do input, form-control é outra subclasse, id está diretamente ligado a "for" na linha anterior, logo necessitam ter o msm nome -->
                <input class="form-control" type="text" name="Nome" placeholder="Nome" required="">
            </div>

    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Endereco">Endereco:</label>
        <div class="col-sm-4">
         <input class="form-control" type="number" name="Endereco" placeholder="Endereço" required="">
        </div>

    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="CPF">CPF:</label>
        <div class="col-sm-4">
        <input class="form-control" type="text" name="CPF" placeholder="CPF" required="">
        </div>

    </div>

     <div class="form-group">
        <label class="control-label col-sm-2" for="Telefone">Telefone:</label>
        <div class="col-sm-4">
        <input class="form-control" type="number" name="Telefone" placeholder="Telefone" required="">
        </div>

    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Email">Email:</label>
        <div class="col-sm-4">
        <input class="form-control" type="number" name="Email" placeholder="Email" required="">
        </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="login">login:</label>
        <div class="col-sm-4">
        <input class="form-control" type="number" name="login" placeholder="login" required="">
        </div>

    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="Senha">Senha:</label>
        <div class="col-sm-4">
        <input class="form-control" type="number" name="Senha" placeholder="Senha" required="">
        </div>

    </div>

   <!--  </div>
        Dim. Comprimento: <input type="number" name="Comprimento" placeholder="Comprimento" required=""><br>
        Preço por cx: <input type="number" name="Preço" placeholder="Preço por cx" required=""><br>
        Demanda mensal: <input type="number" name="Demanda" placeholder="Demanda mensal" required=><br>
        <h2 class="border">Lotes</h2>
        Nº do lote: <input type="number" name="Lote" placeholder="Lote" required="">
        Quantidade: <input type="number" name="Quantidade" placeholder="Quantidade" required="">
        Entrada: <input type="date" name="Entrada" placeholder="Entrada" required="">
        Validade: <input type="date" name="Data" placeholder="validade" required="">
        Venda: <input type="number" name="Venda" placeholder="Venda" required=""><br>
        <input type="submit">
    </form> -->

            <form action="" method="get" id='form-contato' class="form-horizontal col-md-10">
                <label class="col-md-2 control-label" for="termo">Pesquisar</label>
                <div class='col-md-7'>
                    <input type="text" class="form-control" id="termo" name="termo" placeholder="Infome o Nome ou E-mail">
                </div>
                <button type="submit" class="btn btn-primary">Pesquisar</button>
                <a href='pagina_do_cliente.php' class="btn btn-primary">Ver Todos</a>
            </form>
 
            <a href='signup.php' class="btn btn-success pull-right">Cadastrar Cliente</a>
            <div class='clearfix'></div>

            <?php if(!empty($clientes)):?>
 
                <table class="table table-striped">
                    <tr class='active'>
                        <th>Nome</th>
                        <th>Endereco</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>login</th>
                        <th>Senha</th>
                    </tr>
                    <?php foreach($clientes as $cliente):?>
                        <tr>
                         <!--    <td><img src='fotos/<?=$cliente->foto?>' height='40' width='40'></td> -->
                         <br>
                            <td><?=$cliente->Nome?></td>
                            <td><?=$cliente->Endereco?></td>
                            <td><?=$cliente->CPF?></td>
                            <td><?=$cliente->Telefone?></td>
                            <td><?=$cliente->Email?></td>
                            <td><?=$cliente->login?></td>
                            <td><?=$cliente->Senha?></td>
                            <td>
                                <a href='editar.php?id=<?=$cliente->id?>' class="btn btn-primary">Editar</a>
                                <a href='javascript:void(0)' class="btn btn-danger link_exclusao" rel="<?=$cliente->id?>">Excluir</a>
                            </td>
                        </tr>   
                    <?php endforeach;?>
                </table>
 
            <?php else: ?>
 
                <h3 class="text-center text-primary">Não existem clientes cadastrados!</h3>
            <?php endif; ?>


    <!-- 
    <table>
        <?php foreach ($dados as $chave => $dado): ?>
            <tr>
                <th>Medicamento: </th>
                <td> <?=$dado[0]?> </td><br>
            </tr>
            <tr>
                <th>Qtde por cx: </th>
                <td> <?=$dado[1]?> </td><br>
            </tr>
            <tr>
                <th>Embalagem: </th>
                <td> <?=$dado[2]?> </td><br>
            </tr>
            <tr>
                <th>Largura: </th>
                <td> <?=$dado[3]?> </td><br>
            </tr>
            <tr>
                <th> Altura: </th>
                <td> <?=$dado[4]?> </td><br>
            </tr>
            <tr>
                <th> Comprimento: </th>
                <td> <?=$dado[5]?> </td><br>
            </tr>
            <tr>
                <th> Preço por cx: </th>
                <td> <?=$dado[6]?> </td><br>
            </tr>
            <tr>
                <th> Demanda mensal: </th>
                <td> <?=$dado[7]?> </td><br>
            </tr>
            <tr>
                <td><a href="delete.php?id=<?=$chave?>">remover </a></td>
                <td><a href="info.php?id=<?=$chave?>">mais informações</a></td>
            </tr>
        <?php endforeach ?>
    </table>
     --></div>
</body>
</html>