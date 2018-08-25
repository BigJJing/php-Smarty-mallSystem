<?php
//不需要包含require("system/system.inc.php")，因为index.php已经包含了
$select="select id,shopping from tb_user where name='".$_SESSION['member']."'";
$rst=$admindb->ExecSQL($select,$conn);
//24,1@23,1@21,1@20,1
if($rst[0]['shopping']==""){
  echo "<script>alert('购物车中暂时没有商品');window.location.href='index.php';</script>";
}
$commarr=array();
foreach($rst[0] as $value){
  $tmpnum=explode('@',$value);
  //$tmpnum=array((24,1),(23,1),(21,1),(20,1))
  $shopnum=count($tmpnum);   //商品类数
  $sum=0;
  foreach($tmpnum as $key => $v1){
    $s_commo=explode(',',$v1);
    $sql2="select id,name,pics,m_price,fold,v_price from tb_commo";
    $commsql=$sql2." where id=".$s_commo[0];
    /*
    select id,name,m_price,fold,v_price from tb_commo where id=2
    select id,name,m_price,fold,v_price from tb_commo where id=24
    select id,name,m_price,fold,v_price from tb_commo where id=23
    select id,name,m_price,fold,v_price from tb_commo where id=21
    select id,name,m_price,fold,v_price from tb_commo where id=20
    */
    $arr=$admindb->ExecSQL($commsql,$conn);
    //????
    $arr[0]['num']=$s_commo[1];
    $arr[0]['total']=$s_commo[1]*$arr[0]['v_price'];
    $sum+=$arr[0]['total'];
    $commarr[$key]=$arr[0];
  }
}
$smarty->assign('shoparr',$shopnum);
$smarty->assign('commarr',$commarr);
$smarty->assign('sum',$sum);
?>
