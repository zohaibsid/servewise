<?php
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath( dirname(__FILE__) . '/../app'));
const DS = DIRECTORY_SEPARATOR; 
require APPLICATION_PATH . DS . 'config' . DS . 'config.php';
//require APPLICATION_PATH . DS . 'model' . DS  . 'classDatabaseManager.php';

//index.php?page=
$page = get ('page','home');
$model = $config['MODEL_PATH'] . $page . '.php';
$controller = $config['CONTROLLER_PATH'] . $page .  '.php';
$GLOBALS['user_model']   = $config['MODEL_PATH'] .  'user/userClass.php';
$view = $config['VIEW_PATH'] . $page . '.phtml';
$header = $config['VIEW_PATH'] .  'header.phtml';
$footer = $config['VIEW_PATH'] .  'footer.phtml';
$stylesheet = $config['STYLE_PATH'];
$substylesheet = $config['SUBSTYLE_PATH'];
$aosstyle = $config['AOSSTYLE_PATH'];
$fonts = $config['FONTS_PATH'];
$fontawesome = $config['FONTAWESOME_PATH'];
$fontawesomemin = $config['FONTAWESOMEMIN_PATH'];
$jscript = $config['JS_PATH'];
$jqurey = $config['JQUREY_PATH'];
$aosjs = $config['AOSJS_PATH'];
$image = $config['IMAGE_PATH'];
$_404 = $config['VIEW_PATH'] . '404.phtml';



if (file_exists($model)) {
	require $model;
}

if (file_exists($controller)) {
	require $controller;
}


$main_content = $_404;
if (file_exists($view)) {
 $main_content = $view;
}

include $config['VIEW_PATH'] . 'layout.phtml';
