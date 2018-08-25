<?php
require("system.smarty.inc.php");
require("system.class.inc.php");
$connobj=new connDB("mysql","localhost","root","1234","db_business"); //数据库连接类实例化
$conn=$connobj->GetConnId();  //执行连接操作
$admindb=new AdminDB();   //数据库操作类实例化
$seppage=new SepPage();   //分页类实例化
$usefun=new UseFun();     //使用常用函数实例化
$smarty=new SmartyProject();  //调用smarty模板

//smarty自定义函数
function Unhtml($params){
  extract($params);
  $text=$content;
  global $usefun;   //global:全局变量
  return $usefun->UnHtml($text);
}
//注册模板函数
$smarty->registerPlugin('function','Unhtml','Unhtml');
?>
