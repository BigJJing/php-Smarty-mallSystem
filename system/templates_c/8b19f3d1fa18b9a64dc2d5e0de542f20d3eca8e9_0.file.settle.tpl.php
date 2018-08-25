<?php
/* Smarty version 3.1.32, created on 2018-08-24 12:27:46
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\settle.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7ff9c2467ea6_84592602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b19f3d1fa18b9a64dc2d5e0de542f20d3eca8e9' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\settle.tpl',
      1 => 1535113659,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7ff9c2467ea6_84592602 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单详情</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<?php echo '<script'; ?>
 src="js/settle.js" type="text/javascript"><?php echo '</script'; ?>
>
<table width="450" border="0" cellpadding="0" cellspacing="0" >
  <tr>
    <td height="30" width="450" align="center" valign="middle" style="background:#ccc;">
      订单信息
    </td>
  </tr>
  <tr>
    <td>
      <?php
$__section_ids_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['order']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ids_0_total = $__section_ids_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ids'] = new Smarty_Variable(array());
if ($__section_ids_0_total !== 0) {
for ($__section_ids_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] = 0; $__section_ids_0_iteration <= $__section_ids_0_total; $__section_ids_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']++){
?>
      <table width="450" height="100" border="0" cellpadding="10" cellspacing="0" valign="top">
        <tr>
          <td rowspan="2" width="100" height="80" border="1">
            <img src="<?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['pics'];?>
" width="100" height="80" />
          </td>
          <td width="100" height="40" align="left" valign="top" colspan="2">
            <!--smarty name --><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['name'];?>

          </td>
        </tr>
        <tr>
          <td width="100" height="40"  align="center" valign="middle">
            <!--smarty v_price --><font color="red"><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['v_price'];?>
</font>
          </td>
          <td width="100" height="40"  align="right" valign="middle">
            ×<!--smarty v_price --><?php echo $_smarty_tpl->tpl_vars['order']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['num'];?>

          </td>
        </tr>
      </table>
      <?php
}
}
?>
    </td>
  </tr>
  <tr>
    <td height="30" width="450" align="right" valign="middle">
      合计金额：<font style="font-size:16px;color:#f00;font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
</font>
    </td>
  </tr>
  <tr>
    <td>
      <form name="buyform" id="buyform" method="post" action="settle_chk.php" onsubmit="return chkform(buyform)" >
        <table border="0" width="450" cellpadding="0" cellspacing="0">
          <tr>
            <td  height="10" width="450" align="center" valign="middle" colspan="4" style="background:#ccc;"></td>
          </tr>
          <tr>
            <td width="150" height="30" align="right" valign="middle">收货人：</td>
            <td width="150" align="left" valign="middle">
              <input name="taker" id="taker" class="txt" style="width:120px;height:20px;"/>
            </td>
            <td width="100" height="30" align="right" valign="middle">邮编：</td>
            <td width="150" align="left" valign="middle">
              <input name="code" id="code" class="txt" style="width:120px;height:20px;" />
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">联系电话：</td>
            <td width="200" align="left" valign="middle">
              <input name="tel" id="tel" class="txt" style="width:120px;height:20px;" />
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">地址：</td>
            <td width="200" align="left" valign="middle">
              <input name="address" id="address" class="txt" style="width:120px;height:20px;" />
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">送货方式：</td>
            <td width="200" align="left" valign="middle">
              <select id="del" name="del">
                <option value="平邮">平邮</option>
                <option value="快递">快递</option>
                <option value="送货上门">送货上门</option>
              </select>
            </td>
          </tr>
          <tr>
            <td width="100" height="30" align="right" valign="middle">付款方式：</td>
            <td width="200" align="left" valign="middle">
              <select name="pay" id="pay">
                <option value="银行转账">货到付款</option>
                <option value="银行转账">银行转账</option>
                <option value="银行转账">支付宝</option>
              </select>
            </td>
          </tr>
          <tr>
            <td height="10" colspan="4" style="background-color:#ccc"></td>
          </tr>
          <tr>
            <td height="50" align="center" valign="middle" colspan="4">
              <input name="enter" id="enter" class="sbtn" value="提交订单" type="submit"/>
              <input name="uid" id="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" type="hidden"/>
              <input name="unum" id="unum" value="<?php echo $_smarty_tpl->tpl_vars['unum']->value;?>
" type="hidden"/>
              <input name="sum" id="sum" value="<?php echo $_smarty_tpl->tpl_vars['sum']->value;?>
" type="hidden" />
            </td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
</table>
<?php }
}
