<?php

session_start();
  if(!isset($_SESSION['logado'])){
    $_SESSION['logado'] = [];
  }
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
  <style>
   html, body {
      height: 100%;
      margin: 0;
    }
    .wrapper {
      min-height: 100%;
      margin-bottom: -50px;
    }
  .affix {
      top: 0;
      width: 100%;
  }
  .affix + .container-fluid {
      padding-top: 70px;
  }
  h1{
    margin-top: 5%;
    text-align: center;
  }
  h3{
    text-align: center;
  }
  </style>
</head>

<body  data-spy="scroll" data-target=".navbar" data-offset="50">
  
  <header>
    <div class="container-fluid" style="background-color:#000000;color:#fff;height:200px;">
      <h1>WebMarket</h1>
      <h3>Sua conveniência na palma da mão</h3>
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="z-index: 1000;">
     
      <!-- <div class="navbar-header"> -->
      
                  
    <?php
    
      if($_SESSION['logado'] == True){
        
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
        $host = "localhost";
        $usuario = "id2969958_webmarket";
        $senha = "rogerinho";
        $bd = "id2969958_projeto";
        $strcon = mysqli_connect("$host","$usuario","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM usuario WHERE USER_LOGIN = '$login' and USER_SENHA = '$senha'";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT USER_NOME FROM usuario WHERE USER_LOGIN = '$login' and USER_SENHA = '$senha'") or die(mysqli_error($strcon));
        $re = mysqli_fetch_array($name);
        echo "<li><div class='dropdown'>
              <div class='dropdown-content'>
              <li><a href='logout.php'>Bem Vindo $llogin 
                Sair <i class='fa fa-power-off' aria-hidden='true'></i></a></li>
              </div>
              </div></li>";
                       
      }
    
    ?>
           
    <?php
    
      if($_SESSION['logado'] == True){
        echo "<li><a href='logout.php'>Sair <i class='fa fa-power-off' aria-hidden='true'></i></a></li>";     
      }
    
    ?>
    
  <span style="font-size:30px;cursor:pointer;float:right;color:#fff;position:absolute;top:5%;right: 10px;" onclick="openNav()">☰</span>

      
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a class="navbar-brand" href="index.php">WebMarket</a></li>
        <li><a href="sobre.php"><span class="glyphicon glyphicon-eye-open"></span> Sobre</a></li>
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="creators.php"><span class="glyphicon glyphicon-earphone"></span> Contato</a></li>
      </ul>
        </div>
        </div>
        </nav>
      <!-- </div> -->
    <!-- </div> -->
  </header> 

</body>
</html>