<?php

session_start();

$_SESSION["nombre"] = $_POST["nombre"];
$_SESSION["apellido"] = $_POST["apellido"];

echo "Sus datos son: " .$_SESSION['nombre'] .$_SESSION['apellido'];

exit();
?>