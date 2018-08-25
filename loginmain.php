<?php
	 session_start();
 	 header("content-type:text/html;charset=utf-8");
   require('system/system.inc.php');
	 $smarty->display('login.tpl');
?>
