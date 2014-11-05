<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 20:56:53
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1987101373542d59a5767331-16167453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924ee2919d88ca57146b9e787c81e68a20cb77c4' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/controllers/groups/helpers/tree/tree_node_item_radio.tpl',
      1 => 1411792870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987101373542d59a5767331-16167453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d59a57a7d90_10012876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d59a57a7d90_10012876')) {function content_542d59a57a7d90_10012876($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<label class="tree-item-name">
		<input type="radio" name="id_category" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>

	</label>
</li><?php }} ?>
