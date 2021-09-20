<?php 
require_once('../class/Sales.php');

$date = $_GET['date'];
$dailySales = $sales->daily_sales($date);


 ?>
 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
    <!-- Font Awesome -->
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript">
        print();
    </script>
  </head>
  <body>
    <h1>Farmacia Estefani</h1>
 <center>
    <h1>Reporte diario de ventas</h1>
    <h2>de</h2>
    <h3><?= $date; ?></h3>
 </center>
<br />
<div class="table-responsive">
        <table id="myTable-sales" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>id_Lote</th>
                    <th>NombreC</th>
                    <th>Fabricante</th>
                    <th><center>NombreG</center></th>
                    
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
                    <td><?= $ds['brand']; ?></td>
                   
                    <td><?= $ds['gram']; ?></td>
                    <td align="center"><?= number_format($ds['price'],2); ?></td>
                    <td align="center"><?= $ds['qty']; ?></td>
                    <td align="center"><?= $subTotal; ?></td>
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
                <td align="right"><strong>TOTAL:</strong></td>
                <td align="center">
                    <strong><?= number_format($total,2); ?></strong>
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