<?php
  session_start();
  header("content-type:text/html;charset=utf-8");
  require("system/system.inc.php");
  $name=$_POST['name'];
  $password=$_POST['pwd1'];
  $question=$_POST['question'];
  $answer=$_POST['answer'];
  $realname=$_POST['realname'];
  $tel=$_POST['tel'];
  $qq=$_POST['qq'];
  $email=$_POST['email'];
  $address=$_POST['address'];
  $addtime=date("Y-m-d H:i:s");
  $sql='insert into tb_user(name,password,question,answer,realname,card,tel,phone,Email,QQ,code,address,addtime,isfreeze,shopping,consume) ';
  $sql.="values('$name','$password','$question','$answer','$realname','','$tel','','$email','$qq','','$address','$addtime',0,'',0)";
  $rst=$admindb->ExecSQL($sql,$conn);
  if($rst!=""){
    $_SESSION['member']=$name;
    //echo "<script>top.opener.location.reload();alert('注册成功！');window.close();</script>";
    echo "<script>alert('注册成功！');window.location.href='index.php';</script>";
  }
  else{
    echo "<script>alert('注册失败！');histroy.back;</script>";
  }
?>
