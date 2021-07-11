<div class="col-md-6">
	<br>
	<div class="contenedorRegistro">
		<h3>Registro</h3>
		<?php echo form_open_multipart('Login/registrarUsuario', "autocomplete='off' name='registro'"); ?>
			  <div class="form-group">
			    <label for="username">Nombre de usuario</label>
			    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
			  </div>
			  <div class="form-group">
			    <label for="fullname">Nombre Completo</label>
			    <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
			  </div>
			  <div class="form-group">
			    <label for="email">Correo Electronico</label>
			    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
			  </div>
			  <div class="form-group">
			    <label for="phone">Telefono / Celular</label>
			    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telefono รณ Celular">
			  </div>
			  <div class="form-group">
			    <label for="birthday">Fecha de Nacimiento</label>
			    <input type="date" class="form-control" id="birthday" name="birthday">
			  </div>
			  <div class="form-group">
			    <label for="gender">Sexo</label>
			    <select name="gender" id="gender" class="form-control">
  					<option value="H">Hombre</option>
  					<option value="M">Mujer</option>
  					<option value="O">Otro</option>
				</select>
			  </div>
			  <div class="form-group">
			    <label for="password">Contrase&ntilde;a</label>
			    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
			  </div>
			  <div class="form-group">
			    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
			    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
			  </div>

			  <button type="submit" class="btn btn-warning">Registrar</button>	  
		</form>
	</div>
</div>
<script src=<?php echo base_url('js/valida_registro.js'); ?>></script>