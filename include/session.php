<?php 
if (session_status() !== PHP_SESSION_ACTIVE) {

	session_start();
}

if(!isset($_SESSION['logged_id'])){

	session_destroy();
	header("Location: index.php");

}//end isset
