<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if($usuario == "ian" && $password=="1234"){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['error'] = false;
    header("Location: bienvenido.php");
}else{
    $_SESSION['error'] = true;
    header("Location: login.php");
}

exit();