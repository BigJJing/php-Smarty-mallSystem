<?php
  session_start();
  header("content-type:text/html;charset=utf-8");
  require("system/system.inc.php");
  $formid=time();     //订单号
  $commo_id=array();  //商品id
  $commo_name=array();//商品名称
  $commo_pics=array();//商品图片  添加
  $commo_num=array(); //商品数量
  $agoprice=array();  //商品单价
  $fold=array();      //商品折扣率
  $total=$_POST['sum']; //消费总额
  $vendee=$_SESSION['member'];  //消费者
  $taker=$_POST['taker'];
  $address=$_POST['address'];
  $tel=$_POST['tel'];
  $code=$_POST['code'];
  $pay_method=$_POST['pay'];
  $del_medthod=$_POST['del'];
  $formtime=date("Y-m-d H:i:s");
  $uid=explode(',',$_POST['uid']);   //通过商品id获取商品其他参数
  $unum=explode(',',$_POST['unum']);
  $len=count($uid);
  for($i=0;$i<$len;$i++){
    //echo $uid[$i];
    $sql="select id,name,pics,v_price,fold from tb_commo where id='".$uid[$i]."'";
    $rst=$admindb->ExecSQL($sql,$conn);
    $commo_id[$i]=$rst[0]['id'];
    $commo_name[$i]=$rst[0]['name'];
    $commo_pics[$i]=$rst[0]['pics'];
    $agoprice[$i]=$rst[0]['v_price'];
    $fold[$i]=$rst[0]['fold'];
    $commo_num[$i]=$unum[$i];
  }
  $form_sql="insert into tb_form(formid,commo_id,commo_name,commo_pics,commo_num,agoprice,fold,total,vendee,taker,address,tel,code,pay_method,del_method,formtime,state) values(";
  $form_sql.="'".$formid."','".implode(',',$commo_id)."','".implode(',',$commo_name)."','".implode(',',$commo_pics)."','".implode(',',$commo_num)."','".implode(',',$agoprice)."','".implode(',',$fold)."',";
  $form_sql.="'".$total."','".$vendee."','".$taker."','".$address."','".$tel."','".$code."','".$pay_method."','".$del_medthod."','".$formtime."',0)";
  $form_insert=$admindb->ExecSQL($form_sql,$conn);
  if($form_insert==false){
    echo "<scripr>alert('购买失败！');</scripr>";
  }
  else{
    //更新用户消费consume
    $csql="select consume from tb_user where name='".$_SESSION['member']."'";
    $crst=$admindb->ExecSQL($csql,$conn);
    $newconsume=$total+$crst[0]['consume'];
    $updsql="update tb_user set consume='".$newconsume."' where name='".$_SESSION['member']."'";
    $user_update=$admindb->ExecSQL($updsql,$conn);
    //echo "<script>top.opener.location.href='index.php';</script>";
    //echo "<script>window.close();</script>";
    echo "<script>window.location.href='index.php?page_type=queryform';</script>";
  }
?>
