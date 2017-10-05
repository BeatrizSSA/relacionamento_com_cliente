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
</div>

<div id="navbar">
  <a class="active" href="index.php">Inicio</a>
  <a href="login.php">Login</a>
  <a href="../php/projeto_1/prototipodo_do_banco/sobre/sobre.html">Sobre</a>
  <a href="Ajuda.php">Ajuda</a>
</div>

<div class="content">
  
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