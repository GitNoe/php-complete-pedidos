<?php
// comprueba que el usuario haya iniciado sesión o redirige
require './sesiones.php';
comprobar_sesion();

$cod = $_POST['cod'];
$unidades = (int)$_POST['unidades'];

// si exise el código se suman las unidades
if (isset($_SESSION['carrito'][$cod])) {
    $_SESSION['carrito'][$cod] += $unidades;
} else {
    $_SESSION['carrito'][$cod] = $unidades;
}
header("Location: ../front-end/carrito.php");
