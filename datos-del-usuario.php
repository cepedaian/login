<?php

session_start();

setcookie("nombre", $_POST["nombre"]);
setcookie("apellido", $_POST["apellido"]);
setcookie("modo_oscuro", $_POST["modo_oscuro"]);
setcookie("fuente", $_POST["fuente"]);

header("Location: bienvenido.php");
exit();