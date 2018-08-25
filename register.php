<?php
  header("content-type:text/html;charset=utf-8");
  require("system/system.inc.php");
  $smarty->assign('title','新用户注册');
  $smarty->display('register.tpl');
?>
