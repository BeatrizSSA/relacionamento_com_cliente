<?php

  include 'header.php';
  //include 'conexao.php';
?>
<link rel="stylesheet" type="text/css" href="../css/signup.css">
  <div class="form-style-10">
    <h2>Cadastre-se!<span>Saiba quando seu produto estará disponível.</span></h2>
<form action="bd/cadastrarUsuario.php" method="POST" required>

<div class="card card-container">
    <label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="nome" type="text" class="form-control" name="nome" placeholder="Nome" required autofocus>
  </div>
  </label> <br>

  <label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="endereco" placeholder="Endereço" required>
  </div>
  </label> <br>

  <label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="cpf" type="number" maxlength="14" class="form-control" name="cpf" placeholder="CPF" required>
  </div>
  </label> <br>

  <label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
    <input id="password" type="number" class="form-control" name="telefone" placeholder="Telefone" required>
  </div>
  </label> <br>

  <label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email" required>
  </div>
  </label> <br>

  <label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="nome" type="text" class="form-control" name="login" placeholder="login" required>
  </div>
  </label> <br>

  <label>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="senha" placeholder="Senha" required>
  </div>
  </label> <br>

<input type="submit" class="btn" style="background: black; color: white;"></input>
</div>
</div>
</form>

<br>
<br>
<?php  
  include 'footer.php';
?>


