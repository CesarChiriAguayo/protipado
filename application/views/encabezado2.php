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
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">SAWERS SRL</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<?php if(!isset($_SESSION["user_id"])):?>
						<li><a href=" <?php echo base_url(); ?>index.php/inicio/register">Registro</a></li>
						<li><a href=" <?php echo base_url(); ?>index.php/inicio/login">Iniciar Sesión</a></li>
					<?php else:?>
						<li><a href=" <?php echo base_url(); ?>index.php/productos/">Productos</a></li>
						<li><a href=" <?php echo base_url(); ?>index.php/vender/">POS</a></li>
						<li><a href=" <?php echo base_url(); ?>index.php/ventas/">Ventas Realizadas</a></li>
						<li><a href=" <?php echo base_url(); ?>index.php/ventas/">Configurar</a></li>
						<li><a href=" <?php echo base_url(); ?>index.php/ventas/">Cerrar Sesión</a></li>
					<?php endif;?>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
