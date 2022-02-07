<head>
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap-utilities.min.css">
    <link rel="stylesheet" href="../css/pages.css">
</head>

<header>

    <nav class="container-menu" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-menu" class="collapse navbar-collapse">
            <ul class="menu" class="navbar-nav">
                <div class="left">
                    <li class="nav-item active">Usuario: <?php echo $_SESSION['usuario']['correo'] ?></li>
                </div>
                <div class="center"></div>
                <div class="right">
                    <li class="nav-item active"><a href="./categorias.php" class="nav-link">Home</a></li>
                    <li class="nav-item active"><a href="./carrito.php" class="nav-link">Ver carrito</a></li>
                    <li class="nav-item active"><a href="../functions/logout.php" class="nav-link">Cerrar sesión</a></li>
                </div>
            </ul>
        </div>
    </nav>

</header>

<!-- <header>
    <div class="topbar" class="container-menu">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="menu">
                    <div class="left">
                        <p>Usuario: <?php echo $_SESSION['usuario']['correo'] ?></p>
                    </div>
                    <div class="center"></div>
                    <div class="right" class="collapse navbar-collapse" id="navbartoggle">
                        <ul class="menu" class="navbar-nav float-right">
                            <li class="nav-item active"><a href="./categorias.php" class="nav-link">Home</a></li>
                            <li class="nav-item active"><a href="./carrito.php" class="nav-link">Ver carrito</a></li>
                            <li class="nav-item active"><a href="../functions/logout.php" class="nav-link">Cerrar sesión</a></li>
                        </ul>
                    </div>
                    </ul>
                </nav>
            </div>
        </div>
</div>
</header> -->