<?php
    include 'header.php';
    session_start();

    if (!isset($_SESSION['dados'])) {
        $_SESSION['dados'] = array();
    }

    $dados = $_SESSION['dados'];
?>

    <form action="add.php" method="POST">
        Marca: <input type="text" name="marca" placeholder="Marca"><br>
        Preço: <input type="number" name="preco" step="0.50" placeholder="R$Preço"><br>

        <input type="submit">
    </form>
    <table>
    <?php var_dump($dados); ?>
        <?php foreach ($dados as $chave => $dado): ?>
            <ul>
                <li><?=$dado;?></li>
                <li><a href="delete.php?id=<?=$chave?>"> remover </a></li>
                <!--<td><a href="info.php?id=<?=$chave?>">mais informações</a></td>-->
            </ul>
        <?php endforeach ?>
    </table>
