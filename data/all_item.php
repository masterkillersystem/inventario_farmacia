<?php 

    require_once('../class/Item.php');

    $items = $item->all_items($_SESSION['logged_id']);

  
    // echo '<pre>';
    //     print_r($items);
    // echo '</pre>';
 ?>
<br />
<div class="table-responsive">
        <table id="myTable-item" class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    
                    <th><center>Nom Generico</center></th>
                    <th><center>Nom Comercial</center></th>
                    <th>Nro_Lote</th>
                    <th>Laboratorio Titular</th>
                    <th>Tipo</th>
                    <th><center>Precio Unitario</center></th>
                    <th><center>Precio Cliente</center></th>
                    
                    <th>
                        <center>Acciones</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($items as $it): ?>
                    <tr align="center">
                        
                        <td align="left"><?= ucwords($it['item_name']); ?></td>
                        <td align="left"><?= $it['item_grams']; ?></td>
                        <td align="left"><?= $it['item_code']; ?></td>
                        <td align="left"><?= $it['item_brand']; ?></td>
                        <td align="left"><?= $it['item_type_desc']; ?></td>


                        <td><?= "Bs ".number_format($it['item_compra'], 2); ?></td>
                        
                        <td><?= "Bs ".number_format($it['item_price'], 2); ?></td>

                        <td>
                           <center>
                        <button onclick="editModal('<?= $it['item_id']; ?>');" type="button" class="btn btn-warning btn-xs">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </button>
                        
                        <a href="#" onclick="inviModal('<?= $it['item_id']; ?>');"  type="button" class="btn btn-success btn-xs">
                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true">Stock</span>
                        </a>
                    
                      <!--  <button onclick="del_item('<?= $it['item_id']; ?>');" type="button" class="btn btn-danger btn-xs">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>-->

                           </center>
                        </td>
                       
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 
</div>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<!-- for the datatable of employee -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable-item').DataTable();
    });
</script>

<?php 
$item->Disconnect();
 ?>