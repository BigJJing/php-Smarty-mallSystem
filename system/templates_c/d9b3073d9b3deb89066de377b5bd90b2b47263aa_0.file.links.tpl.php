<?php
/* Smarty version 3.1.32, created on 2018-05-29 07:50:19
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0d063b7c25c2_33364656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9b3073d9b3deb89066de377b5bd90b2b47263aa' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\links.tpl',
      1 => 1527579903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0d063b7c25c2_33364656 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="links_table" width="207" height="73" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="73" colspan="7" background="images/shop_11.gif">&nbsp;</td>
  </tr>
</table>
<table id="links_table" width="207" height="211" border="0" cellpadding="0" cellspacing="0" background="images/shop_13.gif">
  <tr>
    <td height="34" width="100%">
    </td>
  </tr>
  <?php
$__section_ids_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['link_arrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ids_0_total = $__section_ids_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ids'] = new Smarty_Variable(array());
if ($__section_ids_0_total !== 0) {
for ($__section_ids_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] = 0; $__section_ids_0_iteration <= $__section_ids_0_total; $__section_ids_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']++){
?>
  <tr>

    <td height="24" width="100%" line-height="26" align="left" >
      <a href="<?php echo $_smarty_tpl->tpl_vars['link_arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['url'];?>
">
      &nbsp;<img src="images/man.JPG" width="14" height="11" border="0" />&nbsp;
      <?php echo $_smarty_tpl->tpl_vars['link_arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['name'];?>

      </a>
    </td>
  </tr>
  <?php
}
}
?>
  <tr>
    <td height="100" width="100%">
    </td>
  </tr>
</table>
<?php }
}
