<?php
/* Smarty version 3.1.32, created on 2018-08-24 02:29:41
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7f6d951b32c2_17824651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '245e9160bde1a2abea23bc8776c89f0fe9995a05' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\top.tpl',
      1 => 1535077762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7f6d951b32c2_17824651 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/myshopcar.css" />
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/login.js"><?php echo '</script'; ?>
>
<div class="top_container">
    <ul>
    	<?php if ($_smarty_tpl->tpl_vars['member']->value == "游客") {?>
        <li><a href="loginmain.php">请登录</a></li>
        <?php } else { ?>
        <li><span>欢迎您：<?php echo $_smarty_tpl->tpl_vars['member']->value;?>
 </span>|<a onclick="javascript:logout()" style="cursor:pointer" id="info"> 安全离开</a></li>
        <?php }?>
        <li> / </li>
        <li><a href="register.php">注册</a></li>
        <li> / </li>
        <li class="li_buy"><a href="index.php?page_type=shopcar">我的购物车<span class="icon_buy"></span></a></li>
        <li> / </li>
        <li><a href="">商家</a></li>
        <li> / </li>
        <li><a href="">网站公告</a></li>
    </ul>
</div>
<?php }
}
