<?php
/* Smarty version 3.1.32, created on 2018-08-25 01:47:51
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\myshopcar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b80b547b181f7_13122418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd4f2e63087f07e36e2285e3782f14e113df578' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\myshopcar.tpl',
      1 => 1535161670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b80b547b181f7_13122418 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/queryform.css" />
<link rel="stylesheet" href="css/myshopcar.css" />
</head>
<?php echo '<script'; ?>
 type="text/javascript" src="js/myshopcar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<table width="972" cellspacing="0" cellpadding="0" border="0" class="shopcar">
  <form id="myshopcar" name="myshopcar" medthod="post" action="#">
  <tr class="stitle">
    <td height="44" width="50" align="center" valign="middle">
    </td>
    <td width="344" align="center" valign="middle">宝贝</td>
    <td width="112" align="center" valign="middle">数量</td>
    <td width="112" align="center" valign="middle">折扣率</td>
    <td width="156" align="center" valign="middle">单价</td>
    <td width="255" align="center" valign="middle">金额</td>
  </tr>
  <!--smarty  -->
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['commarr']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
  <tr class="eachshop">
    <td height="120" align="center" valign="middle">
        <input id="chk" name="chk" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" onclick="javascript:changetotal(myshopcar)"/>
    </td>
    <td valign="middle" class="ename">
      <a  onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
)">
        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['pics'];?>
" width="100" height="100"/>
        <div id="c_name<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div>
      </a>
    </td>
    <td align="center" valign="middle" class="enum">
      <input id="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="cnum<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['num'];?>
" onkeyup="return getTotalSum(myshopcar)" />
    </td>
    <td align="center" valign="middle">
      <div id="fold<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['fold'];?>
折</div>
    </td>
    <td align="center" valign="middle" class="eprice">
      <p id="m_price<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['m_price'];?>
</p>
      <span id="v_price<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">￥<?php echo $_smarty_tpl->tpl_vars['item']->value['v_price'];?>
</span>
    </td>
    <td align="center" valign="middle" class="etogether">
      <div id="total<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
          <input type="text" name="etotal<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="etotal<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
" disabled="disabled"/>
      </div>
    </td>
  </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <tr class="settle">
    <td align="left" valign="middle" height="56" colspan="3" class="sselect">
      <a href="#" onclick="return alldel(myshopcar)">全选</a>
      <a href="#" onclick="return overdel(myshopcar)">反选</a>
      <input type="button" value="删除已选" class="" onclick="return del(myshopcar)" />
    </td>
    <td align="right" valign="middle" colspan="2" class="stotal">
      合计：<font id="totalmoney">￥00.00</font>
      <!--
      <input type="text" name="totalmoney" value="￥00.00" disabled="disabled"/>
      -->
    </td>
    <td align="center" valign="middle" class="sebtn">
      <input id="uid" name="uid" type="hidden" value="" />
      <input id="settle" name="settle" type="button" value="去结算" onclick="return formset(myshopcar)" />
    </td>
  </tr>
  </form>
</table>
<?php }
}
