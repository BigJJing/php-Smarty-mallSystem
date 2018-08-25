<?php
session_start();
header("content-type:text/html;charset=utf-8");
require("system/system.inc.php");   //包含配置文件
if(isset($_GET["page_type"])){
  $page_type=$_GET["page_type"];
}
else{
  $page_type="";
}

//.....
include_once("login.php");
include_once("public.php");
include_once("links.php");
switch($page_type){	//将PHP脚本文件对应的模板文件名称赋给模板变量
  //会员中心
  case 'hyzx':
    include_once('member.php');
    $smarty->assign('admin_phtml','member.tpl');
    break;
  //查看购物车
  case 'shopcar':
    include_once('myshopcar.php');
    $smarty->assign('admin_phtml','myshopcar.tpl');
    break;
  case 'new':
    include_once('allnew.php');
    $smarty->assign('admin_phtml','allnew.tpl');
    break;
  case 'nom':
    include_once('allnom.php');
    $smarty->assign('admin_phtml','allnom.tpl');
    break;
  case 'hot':
    include_once('allhot.php');
    $smarty->assign('admin_phtml','allhot.tpl');
    break;
  case 'queryform':
    include_once('queryform.php');
    $smarty->assign('admin_phtml','queryform.tpl');
    break;
  default:
    include_once('newhot.php');
    $smarty->assign('admin_phtml','newhot.tpl');
    break;
}

$smarty->display("index.tpl");
?>
