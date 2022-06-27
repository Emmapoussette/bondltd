<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
/*defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'bondltd');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');*/

//load the database configuration first.
require_once(LIB_PATH.DS."config.php");
require_once(LIB_PATH.DS."function.php");
require_once(LIB_PATH.DS."session.php");
require_once(LIB_PATH.DS."accounts.php");
require_once(LIB_PATH.DS."autonumbers.php");
require_once(LIB_PATH.DS."products.php");
require_once(LIB_PATH.DS."stockin.php");
require_once(LIB_PATH.DS."categories.php");
require_once(LIB_PATH.DS."sidebarFunction.php"); 
require_once(LIB_PATH.DS."promos.php");
require_once(LIB_PATH.DS."customers.php");
require_once(LIB_PATH.DS."orders.php");
require_once(LIB_PATH.DS."summary.php");
require_once(LIB_PATH.DS."settings.php");
require_once(LIB_PATH.DS."database.php");

$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');
if(!defined('base_url')) define('base_url','https://bondltd.herokuapp.com/');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
if(!defined('dev_data')) define('dev_data',$dev_data);
if(!defined('DB_SERVER')) define('DB_SERVER',"us-cdbr-east-05.cleardb.net");
if(!defined('DB_USERNAME')) define('DB_USERNAME',"bbcf3d8bac2c25");
if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"1defd52e");
if(!defined('DB_NAME')) define('DB_NAME',"heroku_f35c358bfdbc228");
?>
