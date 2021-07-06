<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<?php if(!empty($this->session->flashdata())): ?>
		<div class="alert alert-<?php echo $this->session->flashdata('clase')?>">
			<?php echo $this->session->flashdata('mensaje') ?>
		</div>
	<?php endif; ?>
	<form method="post" action="<?php echo base_url() ?>index.php/productos/guardar">
		<label for="codigo">Código de barras:</label>
		<input class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="producto">Producto:</label>
		<input required id="producto" name="producto" required type="text" class="form-control" placeholder="Nombre producto">

		<label for="descripcion">Descripción:</label>
		<textarea id="descripcion" name="descripcion" cols="30" rows="3" class="form-control"></textarea>

		<label for="precio_venta">Precio de venta:</label>
		<input class="form-control" name="precio_venta" required type="number" id="precio_venta" placeholder="Precio de venta" step=".01">

		<label for="precio_compra">Precio de compra:</label>
		<input class="form-control" name="precio_compra" required type="number" id="precio_compra" placeholder="Precio de compra" step=".01">

		<label for="stock">Stock:</label>
		<input class="form-control" name="stock" required type="number" id="stock" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>