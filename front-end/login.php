<?php

require_once '../functions/bd.php';

// formulario de login habitual
// si va bien abre sesión, guarda el usuario y redirige a principal.php
// si va mal da mensaje de error

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
    if ($usu == FALSE) {
        $err = TRUE;
        $usuario = $_POST['usuario'];
    } else {
        session_start();
        $_SESSION['usuario'] = $usu;
        $_SESSION['carrito'] = [];
        header("Location: ./categorias.php");
        return;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../twbs/bootstrap/js/*"></script>
    <title>Formulario de login</title>
</head>

<body>
    <?php if (isset($_GET["redirigido"])) {
        echo "<p>Haga login para continuar <p>";
    } ?>
    <?php if (isset($err) and $err == TRUE) {
        echo "<p>Revise usuario y contraseña <p>";
    } ?>
    <h1>Haz Login para acceder a Pedidos</h1>
    <div class="login">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <label for="usuario">Usuario:</label><br>
            <input value="<?php if (isset($usuario)) echo $usuario; ?>" id="usuario" name="usuario" type="text"><br><br>
            <label for="clave">Clave:</label><br>
            <input id="clave" name="clave" type="password"><br><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
</body>

</html>