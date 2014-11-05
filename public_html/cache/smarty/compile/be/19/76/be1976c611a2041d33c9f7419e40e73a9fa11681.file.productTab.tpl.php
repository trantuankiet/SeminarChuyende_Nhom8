<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 23:57:20
         compiled from "/home/u163028367/public_html/modules/yotpo/views/templates/front/productTab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1399370845542d83f0eda666-04771714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be1976c611a2041d33c9f7419e40e73a9fa11681' => 
    array (
      0 => '/home/u163028367/public_html/modules/yotpo/views/templates/front/productTab.tpl',
      1 => 1412268819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1399370845542d83f0eda666-04771714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yotpoVersionPost16' => 0,
    'yotpoWidgetTabName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d83f0f0b656_52393468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d83f0f0b656_52393468')) {function content_542d83f0f0b656_52393468($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['yotpoVersionPost16']->value) {?>
    <h3 class="page-product-heading"><a href="#idTab-yotpo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yotpoWidgetTabName']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></h3>
<?php } else { ?>
    <li><a href="#idTab-yotpo"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['yotpoWidgetTabName']->value, ENT_QUOTES, 'UTF-8', true);?>
</a></li>
<?php }?><?php }} ?>
