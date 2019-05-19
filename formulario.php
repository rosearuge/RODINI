<?php
require_once("autoload.php");
if ($_POST){
  $usuario = new Usuario($_POST["email"],$_POST["password"],$_POST["repassword"],$_POST["nombre"],$_FILES );
  
  $errores = $validar->validacionUsuario($usuario, $_POST["repassword"]);
  if(count($errores)==0){
    $usuarioEncontrado = $json->buscarEmail($usuario->getEmail());
    if($usuarioEncontrado != null){
      $errores["email"]="Usuario ya registrado";
    }else{
      $avatar = $registro->armarAvatar($usuario->getAvatar());
      $registroUsuario = $registro->armarUsuario($usuario,$avatar);
      $json->guardar($registroUsuario);
      redirect ("login.php");
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
    <title>Formulario</title>
</head>
<body>
<title>Login</title>
</head>
<body>
  <div class ="container-fluid">
      <header>
       <?php
       include 'header.php';
       ?>
      </header>
    <div class='formulario'>
      <?php
      if(isset($errores)):?>
        <ul class="alert alert-danger">
          <?php
          foreach ($errores as $key => $value) :?>
            <li> <?=$value;?> </li>
            <?php endforeach;?>
        </ul>
      <?php endif;?>
      <h2>Registrarse</h2>
      <form action="" method="POST" enctype= "multipart/form-data">
        <input name='nombre' id="nombre" placeholder='Usuario' type='text' value="<?=(isset($errores["nombre"]) )? "" : inputUsuario("nombre");?>"/><hr>
        <input name="email" id="email" type="text"  placeholder="Email" title="user@email.com" value="<?=isset($errores["email"])? "":inputUsuario("email") ;?>"><hr>
        <input name='password'  id="password" placeholder='Contraseña' type='password' value=""/><hr>
        <input name="repassword" id="repassword" type="password" placeholder="Confirmar Contraseña" value=""><hr>
        <input  type="file" name="avatar" value=""/>
        <br>
        <input type='submit' value='Registrarte'/>
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