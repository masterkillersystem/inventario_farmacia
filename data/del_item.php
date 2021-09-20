<?php 

require_once('../class/Item.php');

if(isset($_POST['item_id'])){
	
	$item_type_id = $_POST['item_type_id'];
	$item_id = $_POST['item_id'];
	
	//delete sa cart
	$delete = $item->del_item($item_id);

}//end isset

$item->Disconnect();