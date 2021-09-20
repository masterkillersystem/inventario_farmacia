<?php 
interface iSales{
	public function new_sales($code,$generic,$brand,$gram,$type,$qty,$compra,$price);
	public function daily_sales($date);
}