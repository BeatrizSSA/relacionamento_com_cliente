<?php  
  include 'header.php';
?>

<div class="container" backgorund-color="black">
  <div class="jumbotron">
    <h2>Saiba quando seu produto estará disponível.</h2>      
    <p style="text-align: center;">WebMarket, a sua conveniência virtual na palma da mão.</p>
  </div>
</div>
</div>
<form action="../bd/informacoescliente.php" method="POST">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="nome" type="text" class="form-control" name="Nome" placeholder="Nome" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="Endereço" placeholder="Endereço" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="cpf" type="number" maxlength="14" class="form-control" name="CPF" placeholder="CPF" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input id="password" type="number" class="form-control" name="Telefone" placeholder="Telefone" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="Email" placeholder="Email" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="nome" type="text" class="form-control" name="login" placeholder="login" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="Senha" placeholder="Senha" required>
  </div>
<input type="submit" class="btn" value="Signup"></input>
</form>

<br>
<br>
<?php  
  include 'footer.php';
?>

