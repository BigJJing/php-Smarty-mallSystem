<?php
include_once("system/system.inc.php");
$sql="select id,name,url from tb_links order by id";
$link_arrs=$admindb->ExecSQL($sql,$conn);
$smarty->assign('link_arrs',$link_arrs)
?>
