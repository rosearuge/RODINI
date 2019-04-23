<?php
include_once("controladores/funciones.php");
if($_POST){
  
  $errores= validar($_POST,"login");
  if(count($errores)==0){
    $usuario = buscarEmail($_POST["email"]);
    if($usuario == null){
      $errores["email"]="Usuario no existe";
    }else{
      if(password_verify($_POST["password"],$usuario["password"])===false){
        $errores["password"]="Error en los datos verifique";
      }else{
        seteoUsuario($usuario,$_POST);
        if(validarUsuario()){
          header("location: perfil.php");
          exit;
        }else{
          header("location: registro.php");
          exit;
        }
      }
    } 
  }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/rodini-escudo.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/master.css">

    <title>Login</title>
</head>
<body>
<div class ="container-fluid">
   <header>
       <?php
       include 'header.php';
       ?>
   </header>
  <div class='login'>
    <form action="" method="POST">
      <h2>Inicio de Sesion</h2> 
      <input name='email' placeholder='email' type='text' value=""/><hr>
      <input id='pw' name='password' placeholder='Contraseña' type='password' value=""/><hr>
      <div class='remember'>
          <input  id='remember' name='remember' type='checkbox'/>
          <label for='remember'></label>Recuerdame
      </div>
      <input type='submit' value='Iniciar Sesion'/>
      <a class='forgot' href='#'>Olvidaste tu contraseña?</a>
    </form>
  </div>
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