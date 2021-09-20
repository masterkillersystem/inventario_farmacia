<?php 
require_once('database/Database.php');
$db = new Database();
$sql = "SELECT *
		FROM item_type
		ORDER BY item_type_desc ASC";
$types = $db->getRows($sql);
// echo '<pre>';
// 	print_r($types);
// echo '</pre>';
 ?>
<div class="modal fade" id="modal-item">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Registro de Producto</h4>
			</div>
			<div class="modal-body">
			
		<form class="form-horizontal" role="form" id="form-item">
				<input type="hidden" id="item-id">
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nombre Generico:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="item-name" placeholder="Ingresa el nombre generico" required="" autofocus="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nombre Comercial:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="grams" placeholder="Ingresa el nombre comercial" required="" autofocus="">
				    </div>
				  </div>
				 
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Precio Unitario:</label>
				    <div class="col-sm-9"> 
				      <input type="number" min="0.1" step="any" class="form-control" id="item-compra" placeholder="Ingresa el precio" required="">
				    </div>
				  </div>
				
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Precio Cliente:</label>
				    <div class="col-sm-9"> 
				      <input type="number" min="0.1" step="any" class="form-control" id="item-price" placeholder="Ingresa el precio" required="">
				    </div>
				  </div>

				  

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Numero de Lote:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="code" placeholder="Ingresa el Lote" required="" autofocus="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Nom. Laboratorio:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" class="form-control" id="brand" placeholder="Ingresa el Laboratorio" required="" autofocus="">
				    </div>
				  </div>

				  

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Tipo:</label>
				    <div class="col-sm-9"> 
				      <select id="item-type" class="btn btn-primary">
				      	<?php foreach($types as $t): ?>
				      		<option value="<?= $t['item_type_id']; ?>"><?= ucwords($t['item_type_desc']); ?></option>
				      	<?php endforeach; ?>
				      </select>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" id="submit-item" value="add" class="btn btn-success">Guardar datos
				      <span class="glyphicon glyphicon-save" aria-hidden="true"></span>
				      </button>
				      <button type="reset" value="cancel" class="btn btn-danger">Cancelar
				      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
				      </button>
				    </div>
				  </div>
				</form>
				
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
<?php 
$db->Disconnect();
 ?>