<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 22:14:41
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290851127542d6be143ae56-10737568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e2650b03ab41b3a54e9063dc74f8973c04b225' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl',
      1 => 1411793013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290851127542d6be143ae56-10737568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d6be1508491_34564310',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d6be1508491_34564310')) {function content_542d6be1508491_34564310($_smarty_tpl) {?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo $_smarty_tpl->tpl_vars['children']->value;?>

	</ul>
</li><?php }} ?>
