<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>WebMarket - Sua loja online</title>
	 <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  .affix {
      top: 0;
      width: 100%;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }
  </style>
</head>
<body>

<div class="container-fluid" style="background-color: black; color:#fff;height:200px; text-align: center;">
  <h1>Web Market</h1>
  <h3>A sua loja Online</h3>
  <p>Scroll this page to see how the navbar behaves with data-spy="affix".</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati minus sapiente adipisci laborum, expedita, sit illo nemo quo animi aut. Perferendis voluptate libero iusto illum ab, mollitia reprehenderit laboriosam architecto.</p>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <ul class="nav navbar-nav">

<div class="container">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Produtos
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">lorem</a></li>
          <li><a href="#">ipsum</a></li>
          <li><a href="#">dolor</a></li>
          <li><a href="#">sit</a></li>
          <li><a href="#">amet</a></li>
        </ul>
      </li>
      <li><a href="sobre_projeto1.php"><span class="glyphicon glyphicon-eye-open"></span> Sobre</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-earphone"></span>Contato</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="cadastro_do_cliente.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="galaxia.jpg" alt="Moon way">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero accusantium, aspernatur recusandae est voluptatum beatae praesentium ullam, delectus facere dolores dignissimos quidem illum quasi! Neque nesciunt inventore maiores, ipsam labore.</p>
    </div>

    <div class="item">
      <img src="galaxia1.jpg" alt="Andromeda">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptatem ullam at a quae iusto ab atque blanditiis error sunt totam nobis impedit, perferendis quidem hic distinctio mollitia fuga adipisci!</p>
    </div>

    <div class="item">
      <img src="galaxia3.jpg" alt="Nebulosa do Caranguejo">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid rem odio dignissimos beatae libero. Quisquam reprehenderit perferendis earum minus nam sed vel, fugit optio, eligendi debitis, aperiam, beatae recusandae ducimus.</p>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

</body>
</html>