<?php
  include_once('system/system.inc.php');
  //订单号，名称，价格，每种商品数量,state
  $sql="select id,formid,commo_id,commo_name,commo_pics,commo_num,agoprice,total,formtime,state from tb_form where vendee='".$_SESSION['member']."' order by formtime desc";
  $rst=$admindb->ExecSQL($sql,$conn);
  $form_len=count($rst);
  $form=array();
  for($i=0;$i<$form_len;$i++){
    $form[$i]['id']=$rst[$i]['id'];
    $form[$i]['formid']=$rst[$i]['formid'];
    $form[$i]['commo_name']=$rst[$i]['commo_name'];
    $form[$i]['commo_num']=$rst[$i]['commo_num'];
    $form[$i]['agoprice']=$rst[$i]['agoprice'];
    $form[$i]['total']=$rst[$i]['total'];
    $form[$i]['formtime']=$rst[$i]['formtime'];
    if($rst[$i]['state']==1){
      $form[$i]['state']='交易成功';
    }
    else{
      $form[$i]['state']='交易中';
    }

  }
  $smarty->assign('formrst',$form);
?>
