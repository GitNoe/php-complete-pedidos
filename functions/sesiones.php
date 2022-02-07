<?php
function comprobar_sesion()
{
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location:../front-end/login.php?redirigido=true");
    }
}
