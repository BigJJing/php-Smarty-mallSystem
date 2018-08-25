<?php
/* Smarty version 3.1.32, created on 2018-05-29 06:57:29
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\public.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0cf9d9416111_69359765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8019aa2e184190fb46d05487407081988b2d621' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\public.tpl',
      1 => 1527577045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b0cf9d9416111_69359765 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="js/pub.js" type="text/javascript"><?php echo '</script'; ?>
>

<table width="210" height="193" border="0" cellpadding="0" cellspacing="0" background="images/shop_06.gif">
  <tr>
    <td height="35" width="17"></td>
    <td width="193" align="left" valign="top" class="exam"></td>
  </tr>
  <tr>
    <td height="32" width="17"></td>
    <td width="193" align="left" valign="top" class="exam">
       <?php
$__section_ids_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['pub_arrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_ids_0_total = $__section_ids_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_ids'] = new Smarty_Variable(array());
if ($__section_ids_0_total !== 0) {
for ($__section_ids_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] = 0; $__section_ids_0_iteration <= $__section_ids_0_total; $__section_ids_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']++){
?>
       <a href="#" class="lk" onclick="return showme(<?php echo $_smarty_tpl->tpl_vars['pub_arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['id'];?>
,'showpub.php');" >
         <img src="images/man.jpg" width="14" height="11" border="0" />
         <?php echo $_smarty_tpl->tpl_vars['pub_arrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_ids']->value['index'] : null)]['title'];?>

       </a>
       <br />
       <?php
}
}
?>
    </td>
  </tr>
</table>
<?php }
}
