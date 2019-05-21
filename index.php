<!DOCTYPE html>
<html lang="es">
<head>
  <?php
  include ('cabecera.php');
  ?>
  <title>Home</title>
</head>

<body>
  <header>
    <?php
      include 'header.php';
    ?>
  </header>
  <div class ="container-fluid">
  <section class= "caja1" style="margin-top: 120px;">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active slider1">
          <div class="carousel-caption d-none d-md-block">
            <h5>programar</h5>
            <p>Full Stack</p>
          </div>
        </div>
        <div class="carousel-item slider2">
          <div class="carousel-caption d-none d-md-block">
            <h5>tecnología</h5>
            <p>El futuro es hoy</p>
          </div>
        </div>
        <div class="carousel-item slider3">

          <div class="carousel-caption d-none d-md-block">
            <h5>clases</h5>
            <p>A distancia</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  </section>
  <section class="row _cursos">
  <meta name="viewport" content="width=device-width">
                <article class="articulo1 col-xs-12 col-md-6 col-lg-6">
                    <h2>Full Stack</h2>
                        <img class="imagen" src="img/contactanos.jpg">
                    <p class="descrip">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sed suscipit dolorem. Ullam, deleniti veritatis. Veniam eius a facilis quod numquam, unde aperiam similique aliquam reprehenderit incidunt impedit quas molestias.</p>
                </article>
                <article class="articulo2 col-xs-12 col-md-6 col-lg-6">
                    <h2>Mobile IOS</h2>
                        <img class="imagen" src="img/noticias.jpg">
                    <p class="descrip">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat aut iste recusandae commodi architecto nobis ad, officiis reiciendis saepe minima, optio in neque quod. Veniam earum repellendus cupiditate libero illum?</p>
                </article>
            </section>
  <section class="caja2">

  </section>
 
</div> 
<footer>
    <?php
      include 'footer.php';
    ?>
</footer>
<?php
include ('finalpagina.php');
?>
