<!DOCTYPE html>
<html lang="es">
<head>
  <?php include_once ("cabecera.php");
  ?>
  <title>Home</title>
</head>

<body>
  <header>
    <?php include_once ("header.php");
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
              <p class="descrip">Este programa está diseñado para entrenar en 720 horas repartidas en 4 u 8 meses, a personas sin ninguna experiencia previa en programación y convertirlos en un Full Stack Developer empleable en cualquier proyecto de desarrollo. Si no sabés nada de programación y estás motivado para encarar un desafío intensivo e iniciarte en una nueva profesión, éste es tu programa.</p>
            </article>
            <article class="articulo2 col-xs-12 col-md-6 col-lg-6">
              <h2>Mobile IOS</h2>
                <img class="imagen" src="img/noticias.jpg">
              <p class="descrip">Convertite en un programador Mobile iOS certificado, estudiá con los expertos y adquirí las herramientas y bases para transformar tu carrera. Aprendé a crear aplicaciones mobile sólidas, funcionales y atractivas para iOS.</p>
            </article>
            <article class="articulo1 col-xs-12 col-md-6 col-lg-6">
              <h2>Diseño gráfico</h2>
                <img class="imagen" src="img/dis_grafico.jpg">
              <p class="descrip">El curso de Diseño Gráfico pretende introducir el manejo de las diferentes herramientas tecnológicas que usan los profesionales de la comunicación visual: identidad corporativa, publicidad, packaging, diseño editorial tradicional y digital, diseño en movimiento, diseño para web y redes sociales, caligrafía, tipografía, lettering además de técnicas estéticas y expresivas.</p>
            </article>
            <article class="articulo1 col-xs-12 col-md-6 col-lg-6">
              <h2>Marketing digital</h2>
                <img class="imagen" src="img/marketing_digital.jpg">
              <p class="descrip">Aprende a dominar los principales aspectos y conceptos del Marketing Digital para llevar a cabo estrategias de comunicación eficientes donde aplicarás los diferentes canales que te desarrollarán como un estratega digital profesional.</p>
            </article>
  </section>
    <section class="caja2">
    </section>
</div>

<footer>
    <?php include_once ("footer.php"); ?>
</footer>
    <?php include_once ("finalpagina.php"); ?>
