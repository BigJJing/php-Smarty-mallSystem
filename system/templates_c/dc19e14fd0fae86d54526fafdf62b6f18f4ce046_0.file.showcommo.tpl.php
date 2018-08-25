<?php
/* Smarty version 3.1.32, created on 2018-08-25 01:09:31
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\showcommo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b80ac4be7ebb5_12867416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc19e14fd0fae86d54526fafdf62b6f18f4ce046' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\showcommo.tpl',
      1 => 1535159353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b80ac4be7ebb5_12867416 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/detail.css" />
<title>商品详情</title>
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<table width="972" height="428" cellpadding="0" cellspacing="0" border="0" class="dtable">
  <?php
$__section_ids_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['shoarr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ids_0_total = $__section_ids_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ids'] = new Smarty_Variable(array());
if ($__section_ids_0_total !== 0) {
for ($__section_ids_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] = 0; $__section_ids_0_iteration <= $__section_ids_0_total; $__section_ids_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']++){
?>
  <tr>
    <td rowspan="9" width="428" height="428">
      <img src="<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['pics'];?>
" width="428" height="428" />
    </td>
    <td colspan="2" width="544" height="70" class="dtitle">
      <?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['name'];?>

    </td>
  </tr>
  <tr>
    <td colspan="2" width="544" height="85" class="dprice">
      <p class="nprice">价格：<font>￥<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['m_price'];?>
</font></p>
      <p class="vprice">会员价：<font>￥<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['v_price'];?>
</font></p>
    </td>
  </tr>
  <tr>
    <td height="20" colspan="2"></td>
  </tr>
  <tr class="dintro">
    <td colspan="2" width="544" height="30">
      商品详情
    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="20">
      库存：<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['stocks'];?>

    </td>
    <td width="272" height="20">
      销量：<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['sell'];?>

    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="20">
      商品产地：<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['area'];?>

    </td>
    <td width="272" height="20">
      商品型号：<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['model'];?>

    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="20">
      商品品牌： <?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['brand'];?>

    </td>
    <td width="272" height="20">
      商品类别： <?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['class'];?>

    </td>
  </tr>
  <tr class="dintro">
    <td width="272" height="50" colspan="2">
      商品介绍：<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['info'];?>

    </td>
  </tr>
  <tr class="dbtn">
    <td width="272" height="113" colspan="2" align="right" valign="middle">
      <input id="buy" name="buy" type="button" value="加入购物车"  onclick="return subbuycommo(<?php echo $_smarty_tpl->tpl_vars['shoarr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['id'];?>
)" />
    </td>
  </tr>
  <?php
}
}
?>
</table>
<?php }
}
