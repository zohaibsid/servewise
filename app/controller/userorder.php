<?php	
session_start();


require APPLICATION_PATH . DS . 'model' . DS  . 'order' . DS . 'orderClass.php';


require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';


	$order = new Order();

$userid = 6;

$orderhistory = $order->getorderhistorybyuser($userid);



?>