<?php 
require_once('../class/Item.php');
if(isset($_POST['iName']) && isset($_POST['iPrice']) && isset($_POST['iCompra'])){
	$iName = $_POST['iName'];
	$iCompra = $_POST['iCompra'];
	$iPrice = $_POST['iPrice'];
	$iType = $_POST['iType'];
	$code = $_POST['code'];
	$brand = $_POST['brand'];
	$grams = $_POST['grams'];
	$iName = strtolower($iName);
	$iCompra = strtolower($iCompra);
	$iPrice = strtolower($iPrice);
	$iName = ucwords(strtolower($iName));
	$code = ucwords(strtolower($code));
	$brand = ucwords(strtolower($brand));
	$grams = ucwords(strtolower($grams));

	$saveItem = $item->add_item($iName, $iCompra, $iPrice, $iType, $code, $brand, $grams);
	if($saveItem){
		$return['valid'] = true;
		$return['msg'] = "Nuevo registro agregado con éxito!";
	}else{
		$return['valid'] = false;
	}
	echo json_encode($return);
}//end isset

$item->Disconnect();