<div class="col-xs-12">
	<h1>Editar producto</h1>
	<form method="post" action="<?php echo base_url() ?>index.php/productos/guardarCambios">
        <input name="id" type="hidden" value="<?php echo $producto->id ?>">
		<label for="codigo">Código de barras:</label>
		<input value="<?php echo $producto->codigo ?>" class="form-control" name="codigo" required type="text" id="codigo" placeholder="Escribe el código">

		<label for="producto">Producto:</label>
		<textarea required id="producto" name="producto" cols="30" rows="5" class="form-control"><?php echo $producto->producto ?></textarea>

		<label for="descripcion">Descripción:</label>
		<textarea required id="descripcion" name="descripcion" cols="30" rows="5" class="form-control"><?php echo $producto->descripcion ?></textarea>

		<label for="precio_venta">Precio de venta:</label>
		<input value="<?php echo $producto->precio_venta ?>" class="form-control" name="precio_venta" required type="number" id="precio_venta" placeholder="Precio de venta">

		<label for="precio_compra">Precio de compra:</label>
		<input value="<?php echo $producto->precio_compra ?>" class="form-control" name="precio_compra" required type="number" id="precio_compra" placeholder="Precio de compra">

		<label for="stock">Stock:</label>
		<input value="<?php echo $producto->stock ?>" class="form-control" name="stock" required type="number" id="existencia" placeholder="Cantidad o existencia">
		<br><br><input class="btn btn-info" type="submit" value="Guardar">
	</form>
</div>