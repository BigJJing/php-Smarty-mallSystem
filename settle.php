<?php
  //通过商品id,来显示商品订单
  session_start();
  header("content-type:text/html;charset=utf-8");
  require('system/system.inc.php');
  $uid=explode(',',$_GET['ids']);   //商品id
  $unum=explode(',',$_GET['nums']); //商品数量
  $usum=0;    //所选商品总价
  $len=count($uid);
  for($i=0;$i<$len;$i++){
    $sql="select id,name,pics,info,v_price from tb_commo where id=".$uid[$i];
    $rst=$admindb->ExecSQL($sql,$conn);
    //将所有的订单商品信息整合到一起
    $order[$i]['id']=$rst[0]['id'];
    $order[$i]['name']=$rst[0]['name'];
    $order[$i]['pics']=$rst[0]['pics'];   //添加
    $order[$i]['info']=$rst[0]['info'];
    $order[$i]['v_price']=$rst[0]['v_price'];
    if($unum[$i]!=""){
    $order[$i]['num']=$unum[$i];
    }
    $rstsum[$i]=$order[$i]['v_price']*$order[$i]['num'];
    $usum+=$rstsum[$i];       //获取商品总价
  }
  $smarty->assign('order',$order);    //商品订单
  $smarty->assign('sum',$usum);       //总价
  $smarty->assign('uid',$_GET['ids']);        //商品id
  $smarty->assign('unum',$_GET['nums']);      //商品数量
  $smarty->display('settle.tpl');


?>
