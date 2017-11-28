    <?php
    
      if($_SESSION['logado'] == True){
        
        $login = $_SESSION['login'];
        $senha = $_SESSION['senha'];
        $host = "localhost";
        $usuarios = "id2969958_webmarket";
        $senha = "rogerinho";
        $bd = "id2969958_projeto";
        $strcon = mysqli_connect("$host","$usuarios","$senha","$bd") or die('Erro ao conectar ao banco!');
        $sql = "SELECT * FROM usuarios WHERE USER_LOGIN = '$login' and USER_SENHA = '$senha'";
        $resultado = mysqli_query($strcon, $sql) or die('Erro ao tentar cadastrar registro');
        $name = mysqli_query($strcon, "SELECT USER_NOME FROM usuarios WHERE USER_LOGIN = '$login' and USER_SENHA = '$senha'") or die(mysqli_error($strcon));
        $re = mysqli_fetch_array($name);
        echo "<li><div class='dropdown'>
              <div class='dropdown-content'>
              <li><a href='logout.php'>Bem Vindo $llogin 
                Sair <i class='fa fa-power-off' aria-hidden='true'></i></a></li>
              </div>
              </div></li>";
                       
      }
    
      if($_SESSION['logado'] == True){
        echo "<li><a href='logout.php'>Sair <i class='fa fa-power-off' aria-hidden='true'></i></a></li>";     
      }
    
    ?>