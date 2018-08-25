<?php
/* Smarty version 3.1.32, created on 2018-05-28 12:05:12
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\showpub.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0bf0784010a2_56936762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6952905bf8892ec62b4b360e6fa88ebe41cd796' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\showpub.tpl',
      1 => 1527509105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0bf0784010a2_56936762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="stylesheet" href="css/table.css" />
<table width="400" align="center"  border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td  colspan="2" height="25" align="center" valign="middle" class="first">
      公告信息
    </td>
  </tr>
  <?php
$__section_pub_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_pub_id_0_total = $__section_pub_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_pub_id'] = new Smarty_Variable(array());
if ($__section_pub_id_0_total !== 0) {
for ($__section_pub_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] = 0; $__section_pub_id_0_iteration <= $__section_pub_id_0_total; $__section_pub_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']++){
?>
  <tr>
    <td width="70%" height="25" align="center" valign="middle" class="left">
      标题：<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['title'];?>

    </td>
    <td width="30%" height="25" align="center" valign="middle" class="right">
      &nbsp;<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['addtime'];?>

    </td>
  </tr>
  <tr>
    <td height="100" colspan="2" valign="left" valign="top" class="all" style="text-indent:10px;">
      &nbsp;<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pub_id']->value['index'] : null)]['content'];?>

    </td>
  </tr>
  <?php
}
}
?>
</table>
<?php }
}
