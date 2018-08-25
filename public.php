<?php
  include_once("system/system.inc.php");
  $sql="select id,title from tb_public order by id limit 4";
  $pub_arrs=$admindb->ExecSQL($sql,$conn);
  $smarty->assign('pub_arrs',$pub_arrs);
?>
