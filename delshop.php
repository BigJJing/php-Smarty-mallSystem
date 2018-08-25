<?php
  //删除被选中的商品
  session_start();
  header("content-type:text/html;charset=utf-8");
  require("system/system.inc.php");
  $reback=0;
  //rd=24,23,21,20
  $commid=explode(',',$_GET['rd']); //将传过来的数组变量分隔开
  //$commid={24,23,21,20}
  $sql="select id,shopping from tb_user where name='".$_SESSION['member']."'";
  $rst=$admindb->ExecSQL($sql,$conn);
  //$rst={2,(24,1@23,1@21,1@20,1)}
  if($rst==false){
    $reback=2;
  }
  else{
    if(!empty($rst[0]['shopping'])){
      $shopping=explode('@',$rst[0]['shopping']);
      foreach($shopping as $key=>$value1){
        //$tmp={24,1}
        $tmp=explode(',',$value1);
        $boo=false;
        foreach($commid as $value){
          //此条数据要删除时，$boo=true
          if($value==$tmp[0]){
            $boo=true;
          }
        }
        //当$boo=false时，此条数据不删除，则添加进$tmpshop中
        if(!$boo){
          $tmpshop[$key]=$value1;
        }
      }
      if(!empty($tmpshop)){
        $update="update tb_user set shopping='".implode('@',$tmpshop)."' where name='".$_SESSION['member']."'";
      }
      else{
        $update="update tb_user set shopping='' where name='".$_SESSION['member']."'";
      }
      $shop=$admindb->ExecSQL($update,$conn);
      if($shop){
        $reback=1;
      }
      else {
        $reback=3;
      }
    }
  }
  echo $reback;

?>
