<?php
require_once('../database/Database.php');
require_once('../interface/iItem.php');
class Item extends Database implements iItem {
	public function all_items()
	{
		$sql = "SELECT i.item_id, i.item_code, i.item_name, i.item_grams, i.item_brand, it.item_type_id, it.item_type_desc, i.item_compra, i.item_price  FROM item i INNER JOIN item_type it  ON i.item_type_id = it.item_type_id GROUP BY i.item_id ORDER BY i.item_name ASC";
		return $this->getRows($sql);
	}//end all_items
	
	public function get_item($item_id)
	{
		$sql = "SELECT *
				FROM item
				WHERE item_id = ?";
		return $this->getRow($sql, [$item_id]);
	}//end edit_item
	

/*	public function all_itemsGroup()
	{
		$sql = "SELECT s.stock_id, i.item_id, i.item_name, i.item_price FROM stock s INNER JOIN item i ON s.item_id = i.item_id GROUP BY s.stock_id ORDER BY i.item_name ASC";
		return $this->getRows($sql);
	}//end all_stockGroup*/

	public function add_item($iName, $iCompra, $iPrice, $type_id, $code, $brand, $grams)
	{
		$sql = "INSERT INTO item(item_name, item_compra, item_price, item_type_id, item_code, item_brand, item_grams)
				VALUES(?, ?, ?, ?, ?, ?, ?)";
		return $this->insertRow($sql, [$iName, $iCompra, $iPrice, $type_id, $code, $brand, $grams]);
	}//end add_item

	public function edit_item($item_id, $iName,  $iCompra, $iPrice, $type_id, $code, $brand, $grams)
	{
		$sql = "UPDATE item 
				SET item_name = ?, item_compra = ?, item_price = ?, item_type_id = ?, item_code = ?, item_brand = ?, item_grams = ?
				WHERE item_id = ?";
		return $this->updateRow($sql, [$iName, $iCompra, $iPrice, $type_id, $code, $brand, $grams, $item_id]);
	}//end edit_item

		public function del_item($item_id)
	{
		$sql = "DELETE  FROM item, item_type USING item, item_type
				WHERE item.item_id = ?";
		return $this->deleteRow($sql, [$item_id]);
	}//end delItem

}//end class Item

$item = new Item();

/* End of file Item.php */
/* Location: .//D/xampp/htdocs/regis/class/Item.php */