<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('bootstrap/css/bootstrap.css'); ?>>
    <!-- mis estilos -->
    <link rel="stylesheet" type="text/css" href=<?php echo base_url('css/style.css'); ?>>
    <title>Sawers SRL</title>
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./"><span class="letraS">S</span>awers</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php if(!isset($_SESSION["user_id"])):?>
            <li class="nav-item active">
                <a class="nav-link" href="./registro.php">Registro <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./login.php">Iniciar Sesión</a>
            </li>
            <?php else:?>
            <li class="nav-item">
                <a class="nav-link" href="./home.php">Inicio</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="./php/logout.php">Salir</a>
            </li>
            <?php endif;?>
        </ul>
    </div>
</nav>

    <script type="text/javascript" src=<?php echo base_url('js/jquery-3.5.js'); ?>></script>

    <script type="text/javascript" src=<?php echo base_url('js/bootstrap.bundle.min.js'); ?>></script>

</body>
</html>