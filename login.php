<?php
session_start();
if(isset($_SESSION['usuario'])) {
    header("Location: bienvenido.php");
    exit();
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
        <h1>Login</h1>
        <form action="validacion-login.php" method="POST">
            <label for="usuario">Usuario: </label>
            <input class="form-control m-1" type="text" name="usuario">
            <label for="password">Contraseña</label>
            <input class="form-control m-1" type="text" name="password">
            <button class="btn btn-primary m-1" type="submit">Ingresar</button>
        </form>
        <?php
            if(isset($_SESSION['error']) && $_SESSION['error']) {
                echo "<small class='text-danger'> Hubo un error en el login! </small>";
            }
        ?>
    </section>

    <footer class="text-center">
        <small>Programación Web 2 - UNLaM</small>
    </footer>
</body>
</html>