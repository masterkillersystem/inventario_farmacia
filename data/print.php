<?php 
require_once('../class/Stock.php');
$stocks = $stock->all_stockGroup();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventario de productos farmacéuticos</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
    <link href="../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <script type="text/javascript">
        print();
    </script>
</head>
<body>


<center>
    <h2 >Inventario de Farmacia</h2>
    <h3>a partir de</h3>
    <h3><?php echo date('m-d-Y'); ?></h3>
</center>

<br />
<div class="table-responsive">
        <table id="myTable-stock" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nro de Lote</th>
                    <th>N. Generico</th>
                    <th>N. Comercial</th>
                    <th>P. Unitario</th>
                    <th>P. Cliente</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($stocks as $s): ?>
                <tr align="left">
                    <td><?= $s['item_code']; ?></td>
                    <td><?= ucwords($s['item_name']); ?></td>
                    <td><?= $s['item_grams']; ?></td>
                    <td><?= "Bs ".number_format($s['item_compra'], 2); ?></td>
                    <td><?= "Bs ".number_format($s['item_price'], 2); ?></td>
                    <td><?= $s['qty']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>


<?php 
$stock->Disconnect();
 ?>



    <script type="text/javascript">
        print();
    </script>
</body>
</html>
