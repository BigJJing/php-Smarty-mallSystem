<?php
/* Smarty version 3.1.32, created on 2018-08-21 06:53:37
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\allhot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7bb6f14061f2_61375612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ec5b99caa463f350e770e4d24d2e41ec1c08c9a' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\allhot.tpl',
      1 => 1534834412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7bb6f14061f2_61375612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),));
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/allcomm.css" rel="stylesheet" type="text/css" />
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<table width="972" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <!--smarty -->
    <?php echo smarty_function_counter(array('start'=>1,'skip'=>1,'direction'=>'up','print'=>false,'assign'=>'count'),$_smarty_tpl);?>

    <?php
$__section_hot_id_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['hotarrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_hot_id_0_total = $__section_hot_id_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_hot_id'] = new Smarty_Variable(array());
if ($__section_hot_id_0_total !== 0) {
for ($__section_hot_id_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] = 0; $__section_hot_id_0_iteration <= $__section_hot_id_0_total; $__section_hot_id_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']++){
?>
    <td>
        <table width="228" height="326" cellpadding="0" cellspacing="0" class="onecomm" onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['id'];?>
)">
            <tr>
                <td height="228">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['pics'];?>
" width="228" height="228"/>
                </td> 
            </tr>
            <tr>
                <td height="40" align="left" valign="middle">
                    <a title="<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['name'];?>
</a>
                </td>
            </tr>
            <tr>
                <td height="58" align="left" valign="middle">
                    <span>￥<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['v_price'];?>
</span>
                    <font>￥<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hot_id']->value['index'] : null)]['m_price'];?>
</font>
                </td>
            </tr>
        </table>
    </td>
    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['count']->value % 4 == 1) {?>
    </tr>
    <tr>
     <?php }?>
     <?php
}
}
?>   
    <!--smarty end -->
    </tr>
    <tr>
    <td height="100" align="center" valign="middle" colspan="4">
     <?php echo $_smarty_tpl->tpl_vars['rst_page']->value;?>

    </td>
  </tr>
</table>

<?php }
}
