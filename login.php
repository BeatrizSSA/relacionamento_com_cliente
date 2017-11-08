<?php  
  include 'header.php';
 
?>

  <form>
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