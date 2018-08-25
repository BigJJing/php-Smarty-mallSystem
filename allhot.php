<?php
  include_once("system/system.inc.php");
  if(isset($_GET['page'])){
    $page=$_GET['page'];
  }
  else{
    $page=1;
  }
  $sql="select * from tb_commo order by sell desc";
  $arrs=$seppage->ShowData($sql,$conn,12,$page);
  $smarty->assign("hotarrs",$arrs);
  $rst=$seppage->ShowPage("产品","个",$_GET['page_type'],'',"a");
  $smarty->assign("rst_page",$rst);
  $smarty->assign("title",'热门商品')
?>
