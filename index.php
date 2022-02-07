<?php
// comprueba que el usuario haya iniciado sesión o redirige
require './functions/sesiones.php';
require_once './functions/bd.php';
comprobar_sesion();
?>