<?php
/* Smarty version 3.1.32, created on 2018-08-20 07:40:47
  from 'D:\wamp\www\web\phpmodel\bussinse\system\templates\newhot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b7a707f5487b3_75602280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff3b9ae6b2970ef6f09cf3811f887b4a03ef97ea' => 
    array (
      0 => 'D:\\wamp\\www\\web\\phpmodel\\bussinse\\system\\templates\\newhot.tpl',
      1 => 1534750843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b7a707f5487b3_75602280 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/newhot.css" rel="stylesheet" type="text/css" />
</head>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/showcommo.js"><?php echo '</script'; ?>
>
<div class="recommend atype">
    <div class="shead"><img src="img/推荐商品.png" width="970" height="70"/></div>
    <!-- smarty  -->
    <div class="goods">
        <ul>
        	<?php
$__section_nomid_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['nomarrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_nomid_0_total = $__section_nomid_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_nomid'] = new Smarty_Variable(array());
if ($__section_nomid_0_total !== 0) {
for ($__section_nomid_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] = 0; $__section_nomid_0_iteration <= $__section_nomid_0_total; $__section_nomid_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']++){
?>
            <li>
                <a onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['nomarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] : null)]['id'];?>
)">
                    <div class="imgbox">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['nomarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] : null)]['pics'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nomarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] : null)]['name'];?>
" width="228" height="228"/>
                    </div>
                    <!--修改title  -->
                    <div class="infobox">
                        
                        <span title="<?php echo $_smarty_tpl->tpl_vars['nomarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['nomarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] : null)]['name'];?>
</span>
                        <h3>￥<?php echo $_smarty_tpl->tpl_vars['nomarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] : null)]['m_price'];?>
</h3>
                        <h6>￥<?php echo $_smarty_tpl->tpl_vars['nomarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_nomid']->value['index'] : null)]['v_price'];?>
</h6>
                    </div>
                </a>
            </li>
           <?php
}
}
?>
        </ul>
    </div>
</div>
<div class="hot atype">
    <div class="shead"><img src="img/热门商品.png" width="970" height="70"/></div>
    <!-- smarty  -->
    <div class="goods">
        <ul>
        	<?php
$__section_hotid_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['hotarrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_hotid_1_total = $__section_hotid_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_hotid'] = new Smarty_Variable(array());
if ($__section_hotid_1_total !== 0) {
for ($__section_hotid_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] = 0; $__section_hotid_1_iteration <= $__section_hotid_1_total; $__section_hotid_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']++){
?>
            <li>
                <a onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] : null)]['id'];?>
)" >
                    <div class="imgbox">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] : null)]['pics'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] : null)]['name'];?>
" width="228" height="228" onclick=""/>
                    </div>
                    <div class="infobox">
                        <!--修改title  -->
                        <span title="<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] : null)]['name'];?>
</span>
                        <h3>￥<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] : null)]['m_price'];?>
</h3>
                        <h6>￥<?php echo $_smarty_tpl->tpl_vars['hotarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_hotid']->value['index'] : null)]['v_price'];?>
</h6>
                    </div>
                </a>
            </li>
            <?php
}
}
?>
        </ul>
    </div>
</div>
<div class="new atype">
    <div class="shead"><img src="img/最新商品.png" width="970" height="70"/></div>
    <!-- smarty  -->
    <div class="goods">
        <ul>
        	<?php
$__section_newid_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newarrs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_newid_2_total = $__section_newid_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_newid'] = new Smarty_Variable(array());
if ($__section_newid_2_total !== 0) {
for ($__section_newid_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] = 0; $__section_newid_2_iteration <= $__section_newid_2_total; $__section_newid_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']++){
?>
            <li>
                <a  onclick="openshowcommo(<?php echo $_smarty_tpl->tpl_vars['newarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] : null)]['id'];?>
)">
                    <div class="imgbox">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['newarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] : null)]['pics'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['newarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] : null)]['name'];?>
" width="228" height="228" onclick=""/>
                    </div>
                    <div class="infobox">
                        <!--修改title  -->
                        <span title="<?php echo $_smarty_tpl->tpl_vars['newarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] : null)]['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['newarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] : null)]['name'];?>
</span>
                        <h3>￥<?php echo $_smarty_tpl->tpl_vars['newarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] : null)]['m_price'];?>
</h3>
                        <h6>￥<?php echo $_smarty_tpl->tpl_vars['newarrs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_newid']->value['index'] : null)]['v_price'];?>
</h6>
                    </div>
                </a>
            </li>
            <?php
}
}
?>
        </ul>
    </div>
</div>
<?php }
}
