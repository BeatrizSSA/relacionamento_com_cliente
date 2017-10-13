<?php 
  include 'php/menu.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>

  <h1>Empresa</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </p>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="teste1.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore laboriosam beatae ducimus iste minus a error necessitatibus adipisci voluptate, harum eligendi, qui nemo mollitia. Magnam cumque, similique vitae corporis sit!</p>
        </div>
      </div>

      <div class="item">
        <img src="teste2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque consequuntur reiciendis aliquid iure, fugit animi dicta ut dolore dolorem repellat? Cupiditate voluptas, itaque a veritatis, consequuntur sunt porro distinctio saepe.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="teste3.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque saepe ipsa blanditiis culpa commodi minima quia repudiandae placeat doloribus ducimus reiciendis, soluta magni, quis explicabo, laboriosam numquam ab assumenda reprehenderit. in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="teste4.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Lorem ipsum</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quis est dolores, perferendis tempore a error, qui non libero veritatis eaque laboriosam fugiat nam nisi, praesentium porro nihil consequatur et! in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
