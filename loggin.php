<?php
if(isset($_POST["ingresar"])){
    

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
}

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
        <form action="loggin.php" method="POST">
           <input type="text" name="usuario">
            <input type="text" name="contraseña">
            <input type="submit" value="Ingresar" name="ingresar">
        </form>
    </div>

<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <span>Programación web 2 - UNLaM</span>
</footer>


</body>
</html>