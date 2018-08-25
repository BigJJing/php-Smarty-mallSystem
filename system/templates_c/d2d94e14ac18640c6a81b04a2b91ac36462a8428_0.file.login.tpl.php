<?php
/* Smarty version 3.1.32, created on 2018-08-23 02:42:44
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7e1f24c64fd0_39180297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d94e14ac18640c6a81b04a2b91ac36462a8428' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\login.tpl',
      1 => 1534992144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7e1f24c64fd0_39180297 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/login.css" type="text/css" rel="stylesheet" />
<title>登录</title>
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/login.js"><?php echo '</script'; ?>
>

<body>
    <div class="loginbox">
      <div class="loginmain">
        <form id="login" name="login" method="post" action="" onsubmit="return lg(this)">
          <div class="input_group">
            <span class="usericon"></span>
            <input type="text" placeholder="用户名" name="name" id="name"/>
          </div>
          <div class="input_group">
            <span class="pwdicon"></span>
            <input type="password" placeholder="密码" name="password" id="password" />
          </div>
          <div class="icode ">
            <input name="check2" id="check2" type="hidden" value="" />
            <div class="icodebox"><?php echo '<script'; ?>
>yzm(login);<?php echo '</script'; ?>
></div>

            <input type="text" placeholder="验证码" name="check" id="check"/>
          </div>
          <div class="change">
            <a onclick="javascript:code(login)" style="cursor:pointer">看不清?换一张</a>
          </div>
          <a>
            <input type="submit" value="登录" class="loginbtn"/>
          </a>
          <div class="goto">
            <a href="index.php" class="goto_first">返回首页</a>
            <a href="register.php" class="goto_register">注册</a>
          </div>
      </form>
      </div>
    </div>
</body>
<?php }
}
