<div class="container rounded bg-white mt-5 mb-5">
    <!--carga de datos -->
    <?php 
            foreach($consulta->result() as $row)
                { ?>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQF2psCzfbB611rnUhxgMi-lc2oB78ykqDGYb4v83xQ1pAbhPiB&usqp=CAU">
                <span class="font-weight-bold">Amelly</span><span class="text-black-50">amelly12@bbb.com</span><span> </span>
            </div>
        </div>
        <?php echo validation_errors(); ?>
		<?php echo form_open_multipart('Login/registrarUsuario', "autocomplete='off' name='registro' class='col-md-5 border-right'"); ?>
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Configuración de perfil</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Usuario</label>
                        <input type="text" class="form-control" placeholder="Nombre de usuario" value="<?php echo $row->usuario; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Nombre Completo</label>
                        <input type="text" class="form-control" placeholder="Nombre completo" value="<?php echo $row->nombre; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Correo Electronico</label>
                        <input type="text" class="form-control" placeholder="Correo Electronico" value="<?php echo $row->correo; ?>">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="labels">Telefono</label>
                        <input type="text" class="form-control" placeholder="Telefono/Celular" value="<?php echo $row->telefono; ?>">
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
                        <select name="gender" id="gender" class="form-control" value="<?php echo $row->tipo; ?>">
  					        <option value="H">Administrador</option>
  					        <option value="M">Usuario</option>
				        </select>
                    </div>
                </div>
                <br>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">Guardar Cambios</button>
                </div>
            </div>
        </form>
        <div class="col-md-4">
            <?php echo validation_errors(); ?>
		    <?php echo form_open_multipart('Login/registrarUsuario', "autocomplete='off' name='registro' class='p-3 py-5'"); ?>
                <div class="d-flex justify-content-between align-items-center experience">
                    <h4 class="text-right">Cambiar Contraseña</h4>
                </div>
                <br>
                <div class="col-md-12">
                    <label class="labels">Contraseña Anterior</label>
                    <input type="text" class="form-control" placeholder="Contraseña Anterior" value="">
                </div>
                <br>
                <div class="col-md-12">
                    <label class="labels">Nueva Contraseña</label>
                    <input type="text" class="form-control" placeholder="Nueva Contraseña" value="">
                </div>
                <br>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="button">Cambiar Contraseña</button>
                </div>
            </form>
        </div>
    </div>
    <?php } ?>
</div>
</div>
</div>