    <?php
    // session_start();
    include "header.php";
    if($_SESSION['logado']){
            header('location: pagina_do_cliente.php');
        }
    ?>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    
    <div class="container">
        <div class="card card-container">
    	
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
             <img id="profile-img" class="profile-img-card" src="img/user.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="login_autenticacao.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" name="login" placeholder="Login" required autofocus>
                <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>

                <button class="btn btn-lg btn-block btn-signin" style="background: black; color: white;" type="submit">Entrar</button>
            </form><!-- /form -->

            <form class="form-signin" action="signup.php" method="POST">
                Ainda não é cadastrado?<br>
                <button class="btn btn-lg btn-block btn-signin" style="background: black; color: white;" type="submit"> Cadastre-se! </button>
            </form>

        </div><!-- /card-container -->
    </div><!-- /container -->
    <br>
    <br>
    <br>
    <br>
    
<?php  
  include 'footer.php';
?>