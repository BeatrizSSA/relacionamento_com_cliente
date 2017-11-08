<?php  
  include 'header.php';
 
?>
 
<?php
  // session_start();
   if($_SESSION['logado']){
     header('location: pagina_do_usuario.php');
   }
?>

<form action="login_autenticacao.php">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="button" class="btn btn-default"><a href="clientpage.php">Login</a></button>
</form>

<?php  
  include 'footer.php';
?>