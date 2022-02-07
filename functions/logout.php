<?php
session_start();
unset($_SESSION['usuario']);
unset($_SESSION['carrito']);
session_destroy();
header("Location: ../front-end/login.php");
?>