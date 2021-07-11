<?php
switch ($msg) {
	case '1':
		$mensaje="Error al ingresar";
		break;
	case '2':
		$mensaje="Acceso no valido";
		break;
	case '3':
		$mensaje="Sesión Terminada";
		break;
	case '4':
		$mensaje="Debe ingresar todos los datos";
		break;
	default:
		$mensaje="Ingrese sus datos";
		break;
}
?>
<div class="col-md-6">
<div class="contenedorLogin">
		<h3>INICIAR SESIÓN</h3>
		<!--<form role="form" name="login" action=<?php echo base_url('Login/ValidarUser'); ?> method="post">-->
		<?php echo form_open_multipart('Login/ValidarUser', "autocomplete='off' name='login'"); ?>
		  <div class="form-group">
		    <label for="username">Ingrese su nombre de cuenta</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" autocomplete="off">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" autocomplete="off">
			<p><?php echo form_error('password'); ?></p>
		  </div>

		  <button type="submit" class="btn btn-warning">Acceder</button>
		</form>
		<h4><?php echo $mensaje;?></h4>
</div>
</div>