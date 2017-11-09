<?php  
  include 'header.php';
 
?>
 
<?php
  // session_start();
   if($_SESSION['logado']){
     header('location: pagina_do_cliente.php');
   }
?>

<form action="login_autenticacao.php">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="login" type="text" class="form-control" name="login" placeholder="login">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="senha" placeholder="senha">
  </div>
  <input type="submit" class="btn btn-default"></input>
</form>

<?php  
  include 'footer.php';
?>