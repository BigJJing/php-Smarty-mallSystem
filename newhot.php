<?php
  include_once("system/system.inc.php");
  $nomsql="select id,name,pics,m_price,v_price from tb_commo where isnom=1 order by id desc limit 4";
  $hotsql="select id,name,pics,m_price,v_price from tb_commo order by sell desc limit 4";
  $newsql="select id,name,pics,m_price,v_price from tb_commo where isnew=1 order by id desc limit 4";
  $nomarrs=$admindb->ExecSQL($nomsql,$conn);
  $hotarrs=$admindb->ExecSQL($hotsql,$conn);
  $newarrs=$admindb->ExecSQL($newsql,$conn);
  $smarty->assign('nomarrs',$nomarrs);
  $smarty->assign('hotarrs',$hotarrs);
  $smarty->assign('newarrs',$newarrs);
?>
