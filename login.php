<?php
  if(empty($_SESSION['member'])){
    $smarty->assign("member","游客");
  }
  else{
    $smarty->assign("member",$_SESSION['member']);
  }
?>
