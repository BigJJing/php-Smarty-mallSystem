<?php
  header("content-type:text/html;charset=utf-8");
  require("system/system.inc.php");
  $sql="select * from tb_commo where id='".$_GET['id']."' order by id desc";
  $arr=$admindb->ExecSQL($sql,$conn);
  $smarty->assign('title','商品信息');
  $smarty->assign('shoarr',$arr);
  $smarty->display('showcommo.tpl');
?>
