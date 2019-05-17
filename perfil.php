<?php
include_once("controladores/funciones.php");
if(!isset($_SESSION["email"])) {
    header("location:formulario.php");
    exit;
}
?>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/rodini-escudo.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/master.css">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>