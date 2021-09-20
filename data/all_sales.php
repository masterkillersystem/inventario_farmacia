<?php 
require_once('../class/Sales.php');
/*require_once('../class/Item.php');*/

$date = $_GET['date'];
$dailySales = $sales->daily_sales($date);

 ?>
<br />
<div class="table-responsive">
        <table id="myTable-sales" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>id_Lote</th>
                    <th><center>NombreG</center></th>
                    <th>NombreC</th>
                    <th>Laboratorio Tutular</th>
                    <th><center>Tipo</center></th>
                    <th><center>Precio Cliente</center></th>
                    <th><center>Cantidad</center></th>
                    <th><center>Ventas Totales</center></th>
                    <th><center>Ganancias Totales</center></th>
                </tr>
            </thead>

            <tbody>
            <?php 
                $total = 0;
                $totalganancia =0;
                foreach($dailySales as $ds):
                $subTotal = number_format($ds['price'] * $ds['qty'], 2);
                $ganancias = number_format(($ds['price'] - $ds['compra']) * $ds['qty'], 2);  
                $total += $subTotal;
                $totalganancia += $ganancias; 
            ?>
                <tr>
                    <td><?= $ds['item_code']; ?></td>
                    <td><?= $ds['generic_name']; ?></td>
                    <td><?= $ds['gram']; ?></td>
                    <td><?= $ds['brand']; ?></td>
                    <td><?= $ds['type']; ?></td>
                    <td align="center">Bs <?= number_format($ds['price'],2);?></td>
                    <td align="center"><?= $ds['qty']; ?></td>
                    <td align="center">Bs <?= $subTotal; ?></td>
                    <td align="center">Bs <?= $ganancias; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td align="right"><strong>TOTAL:</strong></td>
                <td align="center">
                    <strong>Bs <?= number_format($total,2); ?></strong>
                </td>
                <td align="center">
                    <strong>Bs <?= number_format($totalganancia,2); ?></strong>
                </td>
            </tr>
        </table>
</div>


<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-sales').DataTable();
    });
</script>

<?php 
$sales->Disconnect();
 ?>