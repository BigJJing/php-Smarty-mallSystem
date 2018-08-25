<?php
  //echo "<script>alert('打开了php文件');</script>";
  session_start();
  header("content-type:text/html;charset=utf-8");
  //包含配置文件
  require("system/system.inc.php");
  $reback=0;
  $sql="select * from tb_user where name='".$_GET['user']."'";
  if(isset($_GET['password'])){
    $sql.="and password='".$_GET['password']."'";   //加密方式........待加
  }
  $rst=$admindb->ExecSQL($sql,$conn);
  if($rst){
    if($rst[0]['isfreeze']!=0){
      $reback='3';
    }else{
      $_SESSION['member']=$rst[0]['name'];
      $_SESSION['id']=$rst[0]['id'];
      $reback='2';
    }
  }
  else{
    $reback='1';
  }
  echo $reback;


?>
