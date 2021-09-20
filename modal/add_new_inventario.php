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
<div class="modal fade" id="modal-invi">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Inventario</h4>
			</div>
			<div class="modal-body">
			
				<form class="form-horizontal" role="form" id="form-invi">
				<input type="hidden" id="item-id">

			
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Numero de Lote:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" readonly="readonly" class="form-control" id="codigo" placeholder="Ingresa el Lote" required="" autofocus="">
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