<div class="container rounded bg-white mt-5 mb-5">
    <!--carga de datos -->
    <?php 
            foreach($consulta->result() as $row)
                { ?>
    <div class="row">
        <div class="col-md-3 border-right">
            <?php echo form_open_multipart('Login/cambiarImagen', "name='imagen' class='d-flex flex-column align-items-center text-center p-3 py-5'"); ?>
                <input type="hidden" class="form-control" id="ids" name="ids" value="<?php echo $row->id; ?>">
                <label for="imgInp">
                    <img id="userImage" class="rounded-circle mt-5" src="<?php echo base_url(); ?>upload/usuarios/<?php echo $row->imagen; ?>" width="100%">
                    <p>Click en la Imagen para cambiar</p>
                    <input accept="image/*" type='file' id="imgInp" name="imgInp" style="display:none"/>
                </label>
                <button type="submit" id="btnImg" class="btn btn-primary profile-button">Cambiar Imagen</button>
            </form>
        </div>
        <?php echo validation_errors(); ?>
		<?php echo form_open_multipart('Login/GuardarEditarUsuario', "autocomplete='off' name='registro' class='col-md-5 border-right'"); ?>
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Configuración de perfil</h4>
                </div>
                <div class="row mt-3">
                    <input type="hidden" class="form-control" id="ids" name="ids" value="<?php echo $row->id; ?>">
                    <div class="col-md-12">
                        <label class="labels">Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" value="<?php echo $row->usuario; ?>" id="username" name="username">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Nombre Completo</label>
                        <input type="text" class="form-control" placeholder="Nombre completo" value="<?php echo $row->nombre; ?>" id="fullname" name="fullname">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Correo Electronico</label>
                        <input type="text" class="form-control" placeholder="Correo Electronico" value="<?php echo $row->correo; ?>" id="email" name="email">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="labels">Telefono</label>
                        <input type="text" class="form-control" placeholder="Telefono/Celular" value="<?php echo $row->telefono; ?>" id="phone" name="phone">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Genero</label>
                        <select name="gender" id="gender" class="form-control" value="<?php echo $row->genero; ?>">
  					        <option value="H">Hombre</option>
  					        <option value="M">Mujer</option>
  					        <option value="O">Otro</option>
				        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="labels">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" value="<?php echo $row->cumple; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Tipo de Cuenta</label>
                            <select name="tipo" id="tipo" class="form-control" value="<?php echo $row->tipo; ?>">
                            <?php if($row->tipo == 'Administrador') { ?>
  					            <option value="Administrador">Administrador</option>
  					            <option value="Usuario">Usuario</option>
                            <?php } else { ?>
                                <option value="<?php echo $row->tipo; ?>"><?php echo $row->tipo; ?></option>
                            <?php } ?>
                            </select>
                    </div>
                </div>
                <br>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit">Guardar Cambios</button>
                </div>
            </div>
        </form>
        <div class="col-md-4">
            <?php echo validation_errors(); ?>
		    <?php echo form_open_multipart('Login/cambioPassword', "autocomplete='off' name='registro' class='p-3 py-5'"); ?>
                <div class="d-flex justify-content-between align-items-center experience">
                    <h4 class="text-right">Cambiar Contraseña</h4>
                </div>
                <br>
                <input type="hidden" class="form-control" id="ids" name="ids" value="<?php echo $row->id; ?>">
                <div class="col-md-12">
                    <label class="labels">Contraseña Anterior</label>
                    <input type="text" name="password" id="password" class="form-control" placeholder="Contraseña Anterior" value="">
                </div>
                <br>
                <div class="col-md-12">
                    <label class="labels">Nueva Contraseña</label>
                    <input type="text" name="new_password" id="new_password" class="form-control" placeholder="Nueva Contraseña" value="">
                </div>
                <br>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit">Cambiar Contraseña</button>
                </div>
            </form>
        </div>
    </div>
    <?php } ?>
</div>
</div>
</div>
<script>
imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    userImage.src = URL.createObjectURL(file);
  }
}</script>