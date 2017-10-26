<?php
    session_start();

    $marca = $_POST['marca'];
    $preco = $_POST['preco'];

    // $_SESSION['dados'][] = [$anime, $temp];
    $_SESSION['dados'][]= $marca;
    $_SESSION['dados'][]= $preco;

    header('location: lista1.php');
?>