<?php
header("content-type:text/html;charset=utf-8");
include_once("system/system.inc.php");
$id=$_GET['id'];
$sql="select * from tb_public where id=$id";
$arr=$admindb->ExecSQL($sql,$conn);
$smarty->assign('title','查看公告');
$smarty->assign('arr',$arr);
$smarty->display('showpub.tpl');
?>
