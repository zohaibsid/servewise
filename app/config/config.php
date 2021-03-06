<?php
$config = [
'MODEL_PATH' => APPLICATION_PATH . DS . 'model' . DS,   
'VIEW_PATH' => APPLICATION_PATH . DS . 'view' . DS,
'CONTROLLER_PATH' =>   '..\app\controller' . DS,
'LERN_VIEW_PATH' => APPLICATION_PATH . DS . 'view' . DS . 'lern_navigation' . DS,
'LIB_PATH' => APPLICATION_PATH . DS . 'lib' . DS,
'STYLE_PATH' => '../app/view/css/style.css',
'SUBSTYLE_PATH' => '../app/view/css/navigationpage.css',
'AOSSTYLE_PATH' => '../app/view/css/aos.css',
'FONTS_PATH' => '../app/view/css/fonts.css',
'JQUREY_PATH' => '../app/view/js/jqurey.js',
'JS_PATH' => '../app/view/js/core.js',
'AOSJS_PATH' => '../app/view/js/aos.js',
'IMAGE_PATH'=> '../app/view/img/',
'FONTAWESOME_PATH' => '../app/view/css/font-awesome/css/font-awesome.css',
'FONTAWESOMEMIN_PATH' => '../app/view/css/font-awesome/css/font-awesome.min.css',


];
require $config['LIB_PATH'] . 'functions.php';
