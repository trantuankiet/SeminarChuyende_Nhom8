<?php /* Smarty version Smarty-3.1.19, created on 2014-10-07 09:47:40
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11713205915433544c716f04-32612808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8aa24164775d95224241b2778a842bad6fe52cb' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/controllers/localization/content.tpl',
      1 => 1411792185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11713205915433544c716f04-32612808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5433544c8bd9b0_13078615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433544c8bd9b0_13078615')) {function content_5433544c8bd9b0_13078615($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
