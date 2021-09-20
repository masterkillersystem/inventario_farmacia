<?php 
	require_once('database/Database.php');
	$db = new Database();
	//get all items
	$sql = "SELECT *
			FROM item 
			ORDER BY item_code ASC";
	$items = $db->getRows($sql);
 ?>
<div class="modal fade" id="modal-stock">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Inventario</h4>
			</div>
			<div class="modal-body">
				<!-- FORM -->
				<form class="form-horizontal" role="form" id="form-stock">

					<div class="form-group">
				    <label class="control-label col-sm-3" for="">Numero de Lote:</label>
				    <div class="col-sm-9">
				      <input type="text" maxlength="50" readonly="readonly" class="form-control" id="codigo" placeholder="Ingresa el Lote" required="" autofocus="">
				    </div>
				  </div>
<!--
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Buscar Lote:</label>
				    <div class="col-sm-9">
					    <select class="btn btn-primary" id="item-id">
					    	<?php foreach($items as $i): ?>
					    		<option value="<?= $i['item_id']; ?>"><?= ucwords($i['item_code']); ?></option>
					    	<?php endforeach; ?>
					    </select>
				    </div>
				  </div>-->
				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Cantidad:</label>
				    <div class="col-sm-9"> 
				      <input type="number" min="1" class="form-control" id="qty" placeholder="Ingresa la cantidad" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Vence:</label>
				    <div class="col-sm-9"> 
				      <input type="date" class="form-control" id="xDate" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Fabricado:</label>
				    <div class="col-sm-9"> 
				      <input type="date" class="form-control" id="manu" required="">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-3" for="">Comprado:</label>
				    <div class="col-sm-9"> 
				      <input type="date" class="form-control" id="purc" required="">
				    </div>
				  </div>


				  <div class="form-group"> 
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-success">Guardar datos
				      <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				      </button>
				      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar
				      <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
				      </button>
				    </div>
				  </div>
				</form>
				<!-- END FORM -->
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>