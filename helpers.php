<?php
function inputUsuario($campo){
    if(isset($_POST[$campo])){
        return $_POST[$campo];
    }
}
function redirect($destino){
    header("location:".$destino);
    exit;
}

?>