<?php
/*defined('server') ? null : define("server", "localhost");
defined('user') ? null : define ("user", "root") ;
defined('pass') ? null : define("pass","");
defined('database_name') ? null : define("database_name", "bondltd") ;*/

defined('server') ? null : define("server", "us-cdbr-east-05.cleardb.net");
defined('user') ? null : define ("user", "b013bb8891e77e") ;
defined('pass') ? null : define("pass","4e270dc8");
defined('database_name') ? null : define("database_name", "heroku_4c8f4a6a6ddf304") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>