<?php
/* Smarty version 3.1.32, created on 2018-08-23 08:56:11
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7e76ab9ac3f1_61055375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '328efa09106add3d51959fb955326f2a4485cb15' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\register.tpl',
      1 => 1535014568,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7e76ab9ac3f1_61055375 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/register.css" type="text/css" rel="stylesheet" />
<title>注册</title>
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/check.js"><?php echo '</script'; ?>
>
<body onload="javascript:register.name.focus()">
  <table width="500" bordre="0" align="center" cellspacing="5" cellpadding="0" class="registertable">
    <form id="register" class="register" name="register" action="reg_chk.php" method="post" onsubmit="return chkinput(this)">
      <tr>
        <td colspan="5" align="center" valign="middle">
          <h2>新用户注册</h2>
        </td>
      </tr>
      <tr>
        <td width="95" height="25">
          <div align="right">用户名:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="name" name="name" type="text" onblur="javascript:chkname(register)"/>&nbsp;
          <input id="c_name" name="c_name" type="hidden" value="no"/>
          <font color="red">*</font>
        </td>
        <td height="25">
          <div id="name1">
            <font color="#999999">请输入用户名</font>
          </div>
        </td>
      </tr>
      <tr>
        <td width="95" height="25">
          <div align="right">注册密码:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="pwd1" name="pwd1" type="password" onblur="javascript:chkpwd1(register)"/>&nbsp;
          <input id="c_pwd1" name="c_pwd1" type="hidden" value="no"/>
          <font color="red">*</font>
        </td>
        <td height="25">
          <div id="pwd11">
            <font color="#999999">请输入密码</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25">
          <div align="right">确认密码:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="pwd2" name="pwd2" type="password" onblur="javascript:chkpwd2(form)"/>&nbsp;
          <input id="c_pwd2" name="c_pwd2" type="hidden" value="no"/>
          <font color="red">*</font>
        </td>
        <td height="25">
          <div id="pwd21">
            <font color="#999999">确认密码</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25">
          <div align="right">保密问题:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="question" name="question" type="text" onblur="javascript:chkquestion(form)"/>&nbsp;
          <input id="c_question" name="c_question" type="hidden" value="no"/>
        </td>
        <td height="25">
          <div id="question1">
            <font color="#999999">请填写密码保护问题</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25">
          <div align="right">真实姓名:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="realname" name="realname" type="text" onblur="javascript:chkrealname(form)"/>&nbsp;
          <input id="c_realname" name="c_realname" type="hidden" value="no"/>
        </td>
        <td height="25">
          <div id="realname1">
            <font color="#999999">请填写真实姓名</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25">
          <div align="right">移动电话:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="tel" type="text" name="tel" onblur="javascript:chktel(form)" />&nbsp;
          <input id="c_tel" name="c_tel" type="hidden" value="no"/>
          <font color="red">*</font>
        </td>
        <td height="25">
          <div id="tel1">
            <font color="#999999">请输入移动电话</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25">
          <div align="right">QQ号码:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="qq" type="text" name="qq" onblur="javascript:chkqq(form)" />&nbsp;
          <input id="c_qq" name="c_qq" type="hidden" value="no"/>
        </td>
        <td height="25">
          <div id="qq1">
            <font color="#999999">请输入QQ号</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25">
          <div align="right">E-mail:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="email" type="text" name="email" onblur="javascript:chkemail(form)"/>&nbsp;
          <input id="c_email" name="c_email" type="hidden" value="no"/>
        </td>
        <td height="25">
          <div id="email1">
            <font color="#999999">请输入邮箱</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="25">
          <div align="right">联系地址:</div>
        </td>
        <td height="25" colspan="3">&nbsp;
          <input id="address" type="text" name="address" onblur="javascript:chkaddress(form)" />&nbsp;
          <input id="c_address" name="c_address" type="hidden" value="no"/>
        </td>
        <td height="25">
          <div id="address1">
            <font color="#999999">请输入联系地址</font>
          </div>
        </td>
      </tr>
      <tr>
        <td height="40">
          <div align="right">验证码:</div>
        </td>
        <td align="center" valign="middle">
            <!-- yzm2要写在yzm(register);之前 -->
            <input name="yzm2" type="hidden" value="" />
            <?php echo '<script'; ?>
>yzm(register)<?php echo '</script'; ?>
>
        </td>
        <td height="25">&nbsp;
          <input id="yzm" name="yzm" type="text" size="6" onblur="javascript:chkyzm(register)"/>
          <a href="javascript:code(register)" style="width:180px;">看不清</a>
        </td>
      </tr>
      <tr>
        <td></td>
        <td height="49" colspan="3">
          <input type="submit" value="提交" class="register_submit"/>&nbsp;&nbsp;
          <input type="reset" value="重写"  class="register_rewrite"/>
        </td>
        <td height="49" colspan="3">
          <div style="color:#ff0000">带“ * ”号的为必填项</div>
        </td>
      </tr>
    </form>
  </table>
</body>
<?php }
}
