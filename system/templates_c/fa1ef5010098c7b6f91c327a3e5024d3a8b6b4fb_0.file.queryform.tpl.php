<?php
/* Smarty version 3.1.32, created on 2018-08-24 07:06:35
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\queryform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7fae7b34da50_79310340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa1ef5010098c7b6f91c327a3e5024d3a8b6b4fb' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\queryform.tpl',
      1 => 1535094358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7fae7b34da50_79310340 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/queryform.css" />
</head>
<table width="972" cellspacing="0" cellpadding="0" border="0" class="order">
  <tr class="ordertitle">
    <td width="356" height="44" align="center" valign="middle">宝贝</td>
    <td width="96" align="center" valign="middle">数量</td>
    <td width="96" align="center" valign="middle">单价</td>
    <td width="136" align="center" valign="middle">交易状态</td>
    <td width="288" align="center" valign="middle">交易操作</td>
  </tr>
  <!--smarty -->
  <?php
$__section_ids_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['formrst']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ids_0_total = $__section_ids_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ids'] = new Smarty_Variable(array());
if ($__section_ids_0_total !== 0) {
for ($__section_ids_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] = 0; $__section_ids_0_iteration <= $__section_ids_0_total; $__section_ids_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']++){
?>
  <tr>
    <td colspan="5">
      <table width="972" height="170" cellspacing="0" cellpadding="0" border="0">
        <tr class="stitle">
          <td colspan="5" height="44">
            <font><!--日期--><?php echo $_smarty_tpl->tpl_vars['formrst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['formtime'];?>
</font>
            <span>订单号：<?php echo $_smarty_tpl->tpl_vars['formrst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['formid'];?>
</span>
          </td>
        </tr>
        <tr>
          <td width="356" height="120" class="sintro" align="center" valign="middle">
            <?php echo $_smarty_tpl->tpl_vars['formrst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['commo_name'];?>

          </td>
          <td width="96" align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['formrst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['commo_num'];?>
</td>
          <td width="96" align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['formrst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['total'];?>
</td>
          <td width="136" align="center" valign="middle"><?php echo $_smarty_tpl->tpl_vars['formrst']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['state'];?>
</td>
          <td width="288" align="center" valign="middle" class="soperate">
            <a href="#">订单详情</a>
            <a href="#">追加评价</a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <?php
}
}
?>
</table>
<?php }
}
