<?php  
  include 'header.php';
  //include 'conexao.php';
?>

<div class="container" backgorund-color="black">
  <div class="jumbotron">
    <h2>Saiba quando seu produto estará disponível.</h2>      
    <p style="text-align: center;">WebMarket, a sua conveniência virtual na palma da mão.</p>
  </div>
</div>
<form action="bd/cadastrarUsuario.php" method="POST" required>
  <input type="text" name="nome" placeholder="Nome" required>
  <input type="text" name="endereco" placeholder="Endereço" required>
  <input type="number" name="cpf" placeholder="CPF" required>
  <input type="number" name="telefone" placeholder="Telefone" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="text" name="login" placeholder="Login" required>
  <input type="password" name="senha" placeholder="Senha" required>
  





 <!--  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="endereco" placeholder="Endereço" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="cpf" type="number" maxlength="14" class="form-control" name="cpf" placeholder="CPF" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input id="password" type="number" class="form-control" name="telefone" placeholder="Telefone" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="nome" type="text" class="form-control" name="login" placeholder="login" required>
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="senha" placeholder="Senha" required>
  </div> -->
<input type="submit" class="btn" value="Signup"></input>
</form>

<br>
<br>
<?php  
  include 'footer.php';
?>


