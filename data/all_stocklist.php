<?php 
require_once('../class/Stock.php');
$stockList = $stock->all_stockList();

// echo '<pre>';
//     print_r($stockList);
// echo '</pre>';
 ?>
<br />
<div class="table-responsive">
        <table id="myTable-stocklist" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th><center></center></th>
                    <th>id_Lote</th>
                    <th>Nombre Generico</th>
                    <th>Tipo</th>
                    <th>Fabricado</th>
                    <th>Comprado</th>
                    <th><center>Precio Cliente</center></th>
                    <th><center>Cantidad</center></th>
                    <th>Vence</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                /*************fecha de vencimiento**************/
                    $dateNow = date('Y-m-d');
                    $meses3 = date('Y-m-d' ,strtotime('+ 90 day', strtotime($dateNow)));
                    foreach($stockList as $sl): 

                    $xDate = strtotime($sl['stock_expiry']);
                    $xDate = date('Y-m-d', $xDate);
                    $class = "text-success";
                    if($xDate <= $dateNow){ 
                        $class = "text-danger";
                    }
                    else if ($xDate < $meses3) {
                        # code...
                        $class = "text-warning";
                    }
                    
                    /************fin de la consulta de fecha de expiracion**************/
                ?>
                    <tr  align="center" class="<?= $class; ?>">
                        <td><input type="checkbox" name="stock" value="<?= $sl['stock_id']; ?>"></td>
                        <td align="left"><?= $sl['item_code']; ?></td>
                        <td align="left"><?= ucwords($sl['item_name']); ?></td>
                        <td align="left"><?= $sl['item_type_desc']; ?></td>
                        <td><?= $sl['stock_manufactured']; ?></td>
                        <td><?= $sl['stock_purchased']; ?></td>
                        <td><?= "Bs ".number_format($sl['item_price'],2); ?></td>
                        <td><?= $sl['stock_qty']; ?></td>

                        <!--    FECHA DE EXPIRACION DE MEDICAMENTO       -->
                        <td align="left" width="110px;"><?= $sl['stock_expiry']; ?>

                            <?php if($xDate < $meses3): ?>

                                <span class="label label-warning">!POR VENCER</span>

                            <?php elseif ($xDate <= $dateNow): ?>

                                <span class="label label-danger">!VENCIDO</span>

                            <?php else: ?>

                                <span class="label label-success">!VIGENTE</span>

                            <?php endif; ?>

                        </td>
                        <!--fin de codigo de fecha de expiracion-->

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
        $('#myTable-stocklist').DataTable();
    });
</script>

<?php 
$stock->Disconnect();
 ?>