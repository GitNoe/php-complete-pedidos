<?php
// comprueba que el usuario haya abierto sesión o redirige

require '../functions/correo.php';
require '../functions/sesiones.php';
require_once '../functions/bd.php';
comprobar_sesion();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="../css/pages.css">
    <title>Pedidos</title>
</head>

<body>
    <?php
    require './cabecera.php';
    $resul = insertar_pedido($_SESSION['carrito'], $_SESSION['usuario']['codRes']);
    if ($resul === FALSE) {
        echo "No se ha podido realizar el pedido<br>";
    } else {
        $correo = $_SESSION['usuario']['correo'];
        echo "Pedido realizado correctamente. Se enviará un correo de confirmación a: $correo";

        $conf = enviar_correos($_SESSION['carrito'], $resul, $correo);
        if($conf!==TRUE){
        echo "Error al enviar: $conf <br>";
        };
        //vaciar carrito
        $_SESSION['carrito'] = [];

        // vaciar carrito
        // $compra = $_SESSION['carrito'];
        // $_SESSION['carrito'] = [];
        // echo "Pedido realizado con éxito. Se enviará un correo de confirmación a : $correo";
        // enviar_correos($compra, $pedido, $correo);
    }
    ?>
    <?php require './pie.php'; ?>
</body>

</html>