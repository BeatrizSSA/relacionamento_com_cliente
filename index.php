<?php
  include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Webmarket</title>
</head>
<body>
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" align="center">
    <div class="item active">
      <img src="img/galaxia.jpg" alt="Frutas">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero accusantium, aspernatur recusandae est voluptatum beatae praesentium ullam, delectus facere dolores dignissimos quidem illum quasi! Neque nesciunt inventore maiores, ipsam labore.</p>
    </div>

    <div class="item">
      <img src="img/galaxia1.jpg" alt="Verduras">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptatem ullam at a quae iusto ab atque blanditiis error sunt totam nobis impedit, perferendis quidem hic distinctio mollitia fuga adipisci!</p>
    </div>

    <div class="item">
      <img src="img/galaxia3.jpg" alt="Carnes">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid rem odio dignissimos beatae libero. Quisquam reprehenderit perferendis earum minus nam sed vel, fugit optio, eligendi debitis, aperiam, beatae recusandae ducimus.</p>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class="container">
  <h2>Opiniões de nossos usuários</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="" target="_blank">
         <span style="font-size: 40%"><i class="fa fa-user-circle-o fa-2x"></i></span>
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
        <span style=" font-size: 70%;"><i class="glyphicon glyphicon-user"></i></span>

          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <i class="fa fa-user-circle-o" aria-hidden="true"></i>

          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>

</body>
</html>

<?php

include "footer.php";

?>