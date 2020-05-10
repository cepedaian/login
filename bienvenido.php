<?php


session_start();

$nombreUsuario = $_SESSION["nombre"];
$nombreApellido = $_SESSION["apellido"];


echo "Bienvenido " .$_SESSION['usuario'];


?>

<!DOCTYPE html>
<html>
<title>TP 4 - PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/estiloFormulario.css">        
<style>
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
        font-family: "Lato", sans-serif;
    }

    .background {
        background-image: url('./images/background.jpg');
        min-height: 100%;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
    }

</style>
<body>
    <div>
        <form action="datos-del-usuario.php" method="POST">
            <label for="nombre">Nombre</label> <br>
            <input type="text" name="nombre" value="<?php echo $nombreUsuario; ?>"> <br>
            <label for="apellido">Apellido</label> <br>
            <input type="text" name="apellido" value="<?php echo $nombreApellido; ?>"> <br>
            <input type="submit" value="guardar" name="guardar">
        </form>
    </div>

<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <span>Programación web 2 - UNLaM</span>
</footer>


</body>
</html>