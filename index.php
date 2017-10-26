<?php
  include 'header.php';
  include 'bd/BD_ligar.php';
?>
<section>
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
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
    </div>

    <div class="item">
      <img src="img/galaxia1.jpg" alt="Verduras">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
    </div>

    <div class="item">
      <img src="img/galaxia3.jpg" alt="Carnes">
      <p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
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
         <img src="img/user.jpg">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorum soluta maiores vero iure voluptatibus, facere animi, dicta reprehenderit earum tenetur asperiores deleniti perspiciatis inventore quaerat ratione modi natus. Fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ab beatae consectetur, quo amet, at rerum tempora, itaque aliquam repellat quas! Similique esse provident, sunt maxime eum, quasi magnam. Neque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero hic architecto molestias nobis quae nemo in officia et perferendis, dolore molestiae, natus eveniet ad. Laboriosam voluptatibus nobis odit. Itaque.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/nature.jpg" target="_blank">
        <img src="img/user.jpg">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorum soluta maiores vero iure voluptatibus, facere animi, dicta reprehenderit earum tenetur asperiores deleniti perspiciatis inventore quaerat ratione modi natus. Fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ab beatae consectetur, quo amet, at rerum tempora, itaque aliquam repellat quas! Similique esse provident, sunt maxime eum, quasi magnam. Neque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero hic architecto molestias nobis quae nemo in officia et perferendis, dolore molestiae, natus eveniet ad. Laboriosam voluptatibus nobis odit. Itaque.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="/w3images/fjords.jpg" target="_blank">
          <img src="img/user.jpg">
          <div class="caption">
            <p>Lorem ipsum donec id elit non mi porta gravida at eget metus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio dolorum soluta maiores vero iure voluptatibus, facere animi, dicta reprehenderit earum tenetur asperiores deleniti perspiciatis inventore quaerat ratione modi natus. Fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ab beatae consectetur, quo amet, at rerum tempora, itaque aliquam repellat quas! Similique esse provident, sunt maxime eum, quasi magnam. Neque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vero hic architecto molestias nobis quae nemo in officia et perferendis, dolore molestiae, natus eveniet ad. Laboriosam voluptatibus nobis odit. Itaque.</p>
          </div>
        </a>
      </div>
    </div>
 <button type="button" class="btn btn-info btn-lg"><a href="moreinfo.php">Mais opiniões</a></butto>
  </div>
</div>
<?php

include "footer.php";

?>
</section>

