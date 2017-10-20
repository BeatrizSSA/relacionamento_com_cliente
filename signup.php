<?php  
	include 'header.php';
?>

<div class="container" backgorund-color="black">
  <div class="jumbotron">
    <h2>Saiba quando seu produto estará disponível.</h2>      
    <p style="text-align: center;">WebMarket, a sua conveniência virtual na palma da mão.</p>
  </div>
</div>
	<form>
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="nome" placeholder="Nome">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="email" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input id="password" type="number" class="form-control" name="telefone" placeholder="Telefone">
  </div>
<button type="button" class="btn"><a href="index.php">Signup</a></button>

<?php

include "footer.php";

?>