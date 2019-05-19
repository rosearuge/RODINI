<?php
include_once("autoload.php");
if($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"]);
  $errores= $validar->validacionLogin($usuario);
  if(count($errores)==0){
    $usuarioEncontrado = $json->buscarEmail($usuario->getEmail());
    if($usuarioEncontrado == null){
      $errores["email"]="Usuario no existe";
    }else{
      if(Autenticador::verificarPassword($usuario->getPassword(),$usuarioEncontrado["password"] )!=true){
        $errores["password"]="Error en los datos verifique";
      }else{
        Autenticador::seteoSesion($usuarioEncontrado);
        if(isset($_POST["recordar"])){
          Autenticador::seteoCookie($usuarioEncontrado);
        }
        if(Autenticador::validarUsuario()){
          header("location: perfil.php");
          exit;
        }else{
          header("location: formulario.php");
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
  <?php
    include ('cabecera.php');
  ?>  
  <title>Login</title>
</head>
<body>
<div class ="container-fluid">
   <header>
       <?php
       include ('header.php');
       ?>
   </header>
  <div class='login'>
    <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
    <?php endif;?>
    <form action="" method="POST">
      <h2>Inicio de Sesión</h2> 
      <input name='email' placeholder='Email' type='text' value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>"/><hr>
      <input id='password' name='password' placeholder='Contraseña' type='password' value=""/><hr>
      <div class='recordarte'>
          <input  name="recordar" type="checkbox" id="recordarme" value="recordar"/>
          <label for='remember'></label>Recuerdame
      </div>
      <input type='submit' value='Iniciar Sesion'/>
      <a class='forgot' href='olvidePassword.php'>¿Olvidaste tu contraseña?</a>
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
<?php
include ('finalpagina.php');
?>
