<?php
  
  include 'header.php';
  // include 'bd/conexao.php';
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
        <p>	Produtos com a melhor qualidade para você! </p>
      </div>

      <div class="item">
        <img src="img/galaxia1.jpg" alt="Verduras">
        <p>	Produtos com a melhor qualidade para você! </p>
      </div>

      <div class="item">
        <img src="img/galaxia3.jpg" alt="Carnes">
        <p>	Produtos com a melhor qualidade para você! </p>
      </div>

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

  <div class="container">
    <h2>Opiniões de nossos usuários</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="" target="_blank">
           <img src="img/user.jpg">
            <div class="caption">
              <p>Compartilhe sua opinião conosco.</p>
            </div>
          </a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/nature.jpg" target="_blank">
          <img src="img/user.jpg">
            <div class="caption">
              <p>Sua opinião é muito importante para nós!</p>
            </div>
          </a>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/fjords.jpg" target="_blank">
            <img src="img/user.jpg">
            <div class="caption">
              <p>Compartilhe sua opinião conosco.</p>
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

