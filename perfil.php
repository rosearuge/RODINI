<?php
include_once("controladores/funciones.php");
if(!isset($_SESSION["email"])) {
    header("location:formulario.php");
    exit;
}
?>
<html lang="es">
<head>
  <?php
    include 'cabecera.php';
  ?>  
  <title>Perfil de usuario</title>
</head>
<body>
  <div class="container">
  <header>
      <?php
        include 'header.php';
      ?>
  </header>
  <section class="caja2">

  </section>
    <section class="row  text-center ">
      <article class="col-12  " >
      <h1>Bienvenido: <?=$_SESSION["nombre"];?> </h1>
      <p>
      <img src="imagenes/<?=$_SESSION["avatar"];?>" alt="Avatar" >
      </p>
      <a class="text-danger" href="logout.php">Cerrar Sesión</a>
      </article> 
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