<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 09:45:59
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/controllers/stats/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1727030051542e0de7d04ca5-13321038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d9fd6094cf629051ba3e2779763a73e3180381c' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/controllers/stats/menu.tpl',
      1 => 1411792305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1727030051542e0de7d04ca5-13321038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'module' => 0,
    'module_instance' => 0,
    'current_module_name' => 0,
    'current' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542e0de7d52587_28985711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542e0de7d52587_28985711')) {function content_542e0de7d52587_28985711($_smarty_tpl) {?>
<div id="container" class="row">
	<div class="sidebar navigation col-md-3">
		<nav class="list-group categorieList">
		<?php if (count($_smarty_tpl->tpl_vars['modules']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value[$_smarty_tpl->tpl_vars['module']->value['name']]) {?>
					<a class="list-group-item<?php if (($_smarty_tpl->tpl_vars['current_module_name']->value&&$_smarty_tpl->tpl_vars['current_module_name']->value==$_smarty_tpl->tpl_vars['module']->value['name'])) {?> active<?php }?>" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;token=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;module=<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['module_instance']->value[$_smarty_tpl->tpl_vars['module']->value['name']]->displayName;?>
</a>
				<?php }?>
			<?php } ?>
		<?php } else { ?>
			<?php echo smartyTranslate(array('s'=>'No module has been installed.'),$_smarty_tpl);?>

		<?php }?>
		</nav>
	</div><?php }} ?>
