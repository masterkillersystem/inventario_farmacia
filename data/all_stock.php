<?php 
    require_once('../class/Stock.php');
    $stocks = $stock->all_stockGroup();

    // echo '<pre>';
    //     print_r($stocks);
    // echo '</pre>';
 ?>
<br />
<div class="table-responsive">
        <table id="myTable-stock" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nro Lote</th>
                    <th>Nombre Generico</th>
                    <th>Nombre Comercial</th>
                    <th>Precio Unitario</th>
                    <th>Precio Cliente</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($stocks as $s): ?>
                <tr align="center">
                    <td align="left"><?= $s['item_code']; ?></td>
                    <td align="left"><?= ucwords($s['item_name']); ?></td>
                    <td align="left"><?= $s['item_grams']; ?></td>
                    <td align="left"><?= "Bs ".number_format($s['item_compra'], 2); ?></td>
                    <td align="left"><?= "Bs ".number_format($s['item_price'], 2); ?></td>
                    <td align="left"><?= $s['qty']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-stock').DataTable();
    });
</script>

<?php 
$stock->Disconnect();
 ?>