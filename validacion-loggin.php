<?php



$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

if($usuario == "ian" && $contraseña=="1234"){
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: bienvenido.php");
    exit();
}else{
    header("Location: loggin.php");
    exit();
}


?>