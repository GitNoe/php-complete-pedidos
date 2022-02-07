<?php
// comprueba que el usuario haya abierto sesión o redirige

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
    <title>Tabla de productos por categoría</title>
</head>

<body>

    <?php
    require './cabecera.php';
    $cat = cargar_categoria($_GET['categoria']);
    $productos = cargar_productos_categoria($_GET['categoria']);
    if ($cat === FALSE or $productos === FALSE) {
        echo "<p class='error'>Error al conectar con la base de datos</p>";
        exit;
    } 

    echo "<h1>" . $cat['nombre'] . "</h1>";
    echo "<p>" . $cat['descripcion'] . "</p>";
    echo "<div class='container'><table class='table table-striped' class='table-responsive'>"; //abrir la tabla
    echo "<tr>
            <th class='col'>Nombre</th>
            <th class='col'>Descripción</th>
            <th class='col'>Peso</th>
            <th class='col'>Stock</th>
            <th class='col'>Comprar</th>
        </tr>";

    foreach ($productos as $producto) {
        $cod = $producto['CodProd'];
        $nom = $producto['Nombre'];
        $des = $producto['Descripcion'];
        $peso = $producto['Peso'];
        $stock = $producto['Stock'];

        echo "<tr>
                <td>$nom</td>
                <td>$des</td>
                <td>$peso</td>
                <td>$stock</td>
                <td>
                    <form action = '../functions/anadir.php' method = 'POST'>
                        <input name = 'unidades' type='number' min ='1' value = '1'>
                        <input type = 'submit' value='Comprar'>
                    </form>
                </td>
        </tr>";
    }
    
    echo "</table></div>"
    ?> 
    <?php require './pie.php'; ?>
</body>

</html>