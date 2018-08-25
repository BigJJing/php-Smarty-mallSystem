<?php
  session_start();
  header("content-type:text/html;charset=utf-8");
  require("system/system.inc.php");
  //重新得到所有商品的数量，总价。已知商品的id和填入的数量
  $reback='0';
  $ids=explode(',',$_GET['ids']);   //ids={20,24,23}
  $nums=explode(',',$_GET['nums']); //nums={2,1,1}
  $sql1="select * from tb_user where name='".$_SESSION['member']."'";
  $rst1=$admindb->ExecSQL($sql1,$conn);
  if($rst1==false){
    $reback='2';
  }
  else{

    //$rst1[0]['shopping']=20,1@24,1@23,1
    $shopping=explode('@',$rst1[0]['shopping']);  //$shopping={(20,1),(24,1),(23,1)}

    foreach($shopping as $s_key=>$s_value){       //$s_value=(20,1),(24,1),(23,1)

      $eachshopping=explode(',',$s_value);        //$eachshopping={20,1}
      foreach($ids as $i_key=>$i_value){          //$i_value=20,24,23

        //找到对应的id，将数量填入
        if($i_value==$eachshopping[0]){
          //拼接成(20,1)
          $eachs[0]=$i_value;
          $eachs[1]=$nums[$s_key];
          $tmp=implode(",",$eachs);
          $tmpshop[$s_key]=$tmp;
        }
      }
    }
    $sql2="update tb_user set shopping='".implode('@',$tmpshop)."' where name='".$_SESSION['member']."'";
    //echo $sql2;
    $shop=$admindb->ExecSQL($sql2,$conn);
    if($shop){
      $reback='1';
    }
    else{
      $reback='3';
    }
  }
  echo $reback;


?>
