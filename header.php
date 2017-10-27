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
  </div>
  <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="z-index: 1000;">
    <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.php">WebMarket</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="lista1.php">Produto 1</a></li>
            <li><a href="lista2.php">Produto 2</a></li>
            <li><a href="lista3.php">Produto 3</a></li>
          </ul>
        </li>
        <li><a href="sobre.php"><span class="glyphicon glyphicon-eye-open"></span> Sobre</a></li>
        <li><a href="creators.php"><span class="glyphicon glyphicon-earphone"></span> Contato</a></li>
      </ul>
     <ul class="nav navbar-nav navbar-right">
          <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
 <div class="wrapper">
