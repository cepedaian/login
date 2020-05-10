<?php
session_start();

if(!isset($_SESSION)) {
    header("Location: login.php");
    exit();
} else {
    $nombreUsuario = $_SESSION["nombre"];
    $nombreApellido = $_SESSION["apellido"];

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
        font-family: "Lato", sans-serif;
    }

    section {
        margin: 3em;
        padding: 3em;
    }

</style>
<body>
    <section>
        <h2>Datos de usuario: </h2>
        <form action="datos-del-usuario.php" method="POST">
            <label for="nombre">Nombre</label> <br>
            <input class="form-control m-1" type="text" name="nombre" value="<?php echo $nombreUsuario; ?>">
            <label for="apellido">Apellido</label> <br>
            <input class="form-control m-1" type="text" name="apellido" value="<?php echo $nombreApellido; ?>">
            <a class="btn btn-secondary m-1" href="logout.php">Salir</a>
            <button class="btn btn-primary m-1" type="submit">Guardar</button>
        </form>
    </section>

<footer class="text-center">
    <small>Programación Web 2 - UNLaM</small>
</footer>

</body>
</html>