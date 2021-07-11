<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sawers SRL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href=<?php echo base_url('upload/icon.png'); ?>>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css">
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('css/style.css'); ?>>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url('css/home.css'); ?>>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar2">
				<a class="subnavbtn2" href="<?php echo base_url(); ?>">SAWERS SRL</a>
				<?php if(!isset($_SESSION["idusuario"])):?>
					<a href=" <?php echo base_url(); ?>index.php/Login/registrar">Registro</a>
					<a href=" <?php echo base_url(); ?>index.php/Login">Iniciar Sesión</a>
				<?php else:?>
  					<div class="subnav2">
    					<button class="subnavbtn2">VENTAS <i class="fa fa-caret-down"></i></button>
    					<div class="subnav-content2">
							<a href=" <?php echo base_url(); ?>index.php/vender/">POS</a>
							<a href=" <?php echo base_url(); ?>index.php/ventas/">Ventas Realizadas</a>
    					</div>
  					</div>
					<div class="subnav2">
    					<button class="subnavbtn2">PRODUCTOS <i class="fa fa-caret-down"></i></button>
    					<div class="subnav-content2">
							<a href=" <?php echo base_url(); ?>index.php/productos/">Productos</a>
    					</div>
  					</div>
					<div class="subnav2">
    					<button class="subnavbtn2">ADMINISTRAR <i class="fa fa-caret-down"></i></button>
    					<div class="subnav-content2">
							<a href=" <?php echo base_url(); ?>index.php/Login/editarUsuario">Mi Perfil</a>
							<a href=" <?php echo base_url(); ?>index.php/Login/editarUsuario">Lista de Usuarios</a>
    					</div>
  					</div>
					<a class="subnavbtn2 orange" href=" <?php echo base_url(); ?>index.php/Login/cerrarSesion">Cerrar Sesión</a>
  				<?php endif;?>
			</div>
	</nav>
	<div class="container">
		<div class="row">
