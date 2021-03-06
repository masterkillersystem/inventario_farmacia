<div class="modal fade" id="modal-to-cart">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Agregar a la cesta</h4>
			</div>
			<div class="modal-body">
			<!--  -->
				<form class="form-horizontal" role="form" id="form-toCart">
				<input type="hidden" id="item-id">
				<input type="hidden" id="stock-id">
				<input type="hidden" id="item-qty">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="">Cantidad:</label>
				    <div class="col-sm-10">
				      <input type="number" min="1" class="form-control" id="cart-qty" placeholder="Ingresa la cantidad" required="">
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success">Agregar
				      <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
				      </button>
				      <button type="reset" class="btn btn-danger">Cancelar
				      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				      </button>
				    </div>
				  </div>
				</form>
			<!--  -->
			</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>