<?php
//echo dirname(__FILE__);
// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
//$yii=dirname(dirname(__FILE__)).'/framework/yii.php';
//echo dirname(dirname(__FILE__)).'/framework/yii.php';
//$yii='../framework/yii.php';
//$yii='../'.dirname(__FILE__).'/framework/yii.php';
//$yii=dirname(__FILE__).'/..'.'/framework/yii.php';

$config=dirname(__FILE__).'/../protected/config/main.php';
//$config=dirname(dirname(__FILE__)).'/protected/config/main.php';
//$config='../protected/config/main.php';
//$config='../'.(dirname(__FILE__)).'/protected/config/main.php';
//$config=(dirname(__FILE__)).'/..'.'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
//require_once("../framework/yii.php");
Yii::createWebApplication($config)->run();
