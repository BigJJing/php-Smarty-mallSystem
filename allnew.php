<?php
include_once("system/system.inc.php");
if(isset($_GET['page'])){
	$page=$_GET['page'];
}
else{
	$page=1;
}
$sql="select * from tb_commo where isnew=1 order by isnew,id desc";
$rst1=$seppage->ShowData($sql,$conn,12,$page);
$smarty->assign("newarrs",$rst1);
$rst2=$seppage->ShowPage("产品","个",$_GET['page_type'],"","a");
$smarty->assign("rst1_page",$rst2);
$smarty->assign("title","最新商品");
?>
