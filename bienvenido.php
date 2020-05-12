<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
} else {
    if( isset($_COOKIE["nombre"]) && isset($_COOKIE["apellido"])){
        $nombreUsuario = $_COOKIE["nombre"];
        $apellidoUsuario = $_COOKIE["apellido"];

            if(isset($_COOKIE["modo_oscuro"])){
                
                $modo_oscuro = $_COOKIE["modo_oscuro"]; 
            
            }else{
                $modo_oscuro = false;
            }
            if(isset($_COOKIE["fuente"])){
                
                $fuente = $_COOKIE["fuente"]; 
            
            }else{
                $fuente = null;
            }    
        
    }else{
        $nombreUsuario = null;
        $apellidoUsuario = null;
        $modo_oscuro = false;
        $fuente = null;
    }
    echo "<h1 class='text-center'>Bienvenido " .$_SESSION['usuario'] ."</h1>";
}
?>

<!DOCTYPE html>
<html>
<title>Actividad Login - PHP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body, html {
        height: 100%;
        color: #777;
        
            <?php

            if($fuente == "times"){
    
                echo "font-family: 'Times New Roman'";    
    
                }else if($fuente == "lato"){

                    echo "font-family: 'Lato'";

                }else if($fuente == "helvetica"){

                    echo "font-family: 'Helvetica'";

                }else{

                    echo "font-family: 'Lato', sans-serif";

                }


            ?>  
        


    }

    section {
        margin: 3em;
        padding: 3em;
    }


</style>
<body class="<?php 
    if($modo_oscuro){
        echo "bg-dark";
    }
?>">
    <section>
        <h2>Datos de usuario: </h2>
        <form action="datos-del-usuario.php" method="POST">
            <label for="nombre">Nombre</label> <br>
            <input class="form-control m-1" type="text" name="nombre" value="<?php echo $nombreUsuario; ?>">
            <label for="apellido">Apellido</label> <br>
            <input class="form-control m-1" type="text" name="apellido" value="<?php echo $apellidoUsuario; ?>">
            <label for="modo_oscuro">Modo Oscuro</label>
            <input type="checkbox" name="modo_oscuro" <?php if($modo_oscuro){ echo "checked"; }?>> <br>
            <label for="fuente">Seleccionar Fuente: </label>
            <select name="fuente">
                <option selected>Seleccione Fuente</option>
                <option value="times">Times New Roman</option>
                <option value="lato">Lato</option>
                <option value="helvetica">Helvetica</option>
            </select> <br>
            
            <a class="btn btn-secondary m-1" href="logout.php">Salir</a>
            <button class="btn btn-primary m-1" type="submit">Guardar</button>
        </form>
    </section>

<footer class="text-center">
    <small>Programación Web 2 - UNLaM</small>
</footer>

</body>
</html>