<?php
/* Smarty version 3.1.32, created on 2018-08-24 06:21:01
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7fa3cde01554_49110432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8fe0ceed1d62cca8763f5a58af6eddc8e510070' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\index.tpl',
      1 => 1535091622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:top.tpl' => 1,
    'file:head_logo.tpl' => 1,
    'file:top_nav.tpl' => 1,
    'file:banner.tpl' => 1,
  ),
),false)) {
function content_5b7fa3cde01554_49110432 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/css.css" />
<link href="css/newhot.css" rel="stylesheet" type="text/css" />
<title>购物商城 </title>

</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/info.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/top.js"><?php echo '</script'; ?>
>
<body>
  	<div class="top">
    	<?php $_smarty_tpl->_subTemplateRender('file:top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div class="head_logo">
    	<?php $_smarty_tpl->_subTemplateRender('file:head_logo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="top_nav">
    	<?php $_smarty_tpl->_subTemplateRender('file:top_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="banner">
    	<?php $_smarty_tpl->_subTemplateRender('file:banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="content">
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['admin_phtml']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</body>
</html>
<?php }
}
