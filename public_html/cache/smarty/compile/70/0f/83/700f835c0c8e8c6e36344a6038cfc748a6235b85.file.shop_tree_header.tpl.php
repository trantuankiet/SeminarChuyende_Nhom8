<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 22:14:41
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:901888096542d6be12fdb48-36139684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '700f835c0c8e8c6e36344a6038cfc748a6235b85' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1411793013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '901888096542d6be12fdb48-36139684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d6be13b18c0_22185167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d6be13b18c0_22185167')) {function content_542d6be13b18c0_22185167($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
