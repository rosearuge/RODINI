<?php
require_once("autoload.php");
if($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"] );
  $errores= $validar->validacionOlvide($usuario);
  if(count($errores)==0){
    $usuarioEncontrado = $json->buscarEmail($usuario->getEmail());
    if($usuarioEncontrado == null){
      $errores["email"]="El usuario no existe en nuestra base de datos";
    }else{
        $registro = $json->jsonRegistroOlvide($usuario->getEmail(),$usuario->getPassword());
          redirect("cambioContraseña.php");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    include 'cabecera.php';
  ?>  
  <title>Recuperar Contraseña</title>
</head>

<body>
  <header>
    <?php
      include 'header.php';
    ?>
  </header>
  <div class="container">
    <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>

  
    <section class="olvidepass">
      <article class="col-12 login " >
          <h2>Recuperando Contraseña</h2>
          <form action="" method="POST" enctype= "multipart/form-data"  >
            <input name="email" type="text" id="email" placeholder="Email" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>" />
            <hr>
            <input name="password" type="password" id="password" placeholder="Nueva Contraseña" value=""  />
            <hr>
            <input name="repassword" type="password" id="repassword" placeholder="Confirmar nueva contraseña" value=""  />
            <hr>
            <input type="submit">
          </form>
        
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
