<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilomenu.css">
  <title>Menu</title>
</head>
<body onscroll="myFunction()">

<div class="header">
  <h2>Relacionamento com Cliente</h2>
  <p>Buscando sempre a sua Satisfação.</p>
</div>

<div id="navbar">
  <a class="active" href="index.php">Inicio</a>
  <a href="cadastro_user.php">Login</a>
  <a href="sobre.php">Sobre</a>
  <a href="Ajuda.php">Ajuda</a>
</div>

<div class="content">
  <h3>Relacionamento com Cliente</h3>
  <p>Buscando sempre a sua Satisfação.</p>
  
</div>

<script>
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.scrollY >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>