<?php	
session_start();


require APPLICATION_PATH . DS . 'model' . DS  . 'menu' . DS . 'menuClass.php';


require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';


	$menu = new Menu();



$menus = $menu->getmenu();

$submenu = $menu->getsubmenu();



?>