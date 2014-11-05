<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 22:14:41
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:300622676542d6be1670a50-29857152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14b0f3f0f707add2a3584489bccda8cb923bec28' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/controllers/shop/content.tpl',
      1 => 1411792281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300622676542d6be1670a50-29857152',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d6be169de25_00691748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d6be169de25_00691748')) {function content_542d6be169de25_00691748($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
