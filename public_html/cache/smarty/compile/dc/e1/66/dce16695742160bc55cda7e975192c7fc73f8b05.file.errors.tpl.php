<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 23:48:52
         compiled from "/home/u163028367/public_html/modules/prediggo/views/templates/admin/errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:196512554542d81f44d4286-61166272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dce16695742160bc55cda7e975192c7fc73f8b05' => 
    array (
      0 => '/home/u163028367/public_html/modules/prediggo/views/templates/admin/errors.tpl',
      1 => 1412268531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196512554542d81f44d4286-61166272',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'aPrediggoWarnings' => 0,
    'sPrediggoWarning' => 0,
    'aPrediggoConfirmations' => 0,
    'sPrediggoConfirmation' => 0,
    'aPrediggoErrors' => 0,
    'sPrediggoError' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d81f4532554_20656511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d81f4532554_20656511')) {function content_542d81f4532554_20656511($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home/u163028367/public_html/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (sizeof($_smarty_tpl->tpl_vars['aPrediggoWarnings']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars["sPrediggoWarning"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sPrediggoWarning"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPrediggoWarnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sPrediggoWarning"]->key => $_smarty_tpl->tpl_vars["sPrediggoWarning"]->value) {
$_smarty_tpl->tpl_vars["sPrediggoWarning"]->_loop = true;
?>
		<div class="warn"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sPrediggoWarning']->value, 'UTF-8');?>
</div>
	<?php } ?>
<?php }?>
<?php if (sizeof($_smarty_tpl->tpl_vars['aPrediggoConfirmations']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars["sPrediggoConfirmation"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sPrediggoConfirmation"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPrediggoConfirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sPrediggoConfirmation"]->key => $_smarty_tpl->tpl_vars["sPrediggoConfirmation"]->value) {
$_smarty_tpl->tpl_vars["sPrediggoConfirmation"]->_loop = true;
?>
		<div class="conf confirm"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sPrediggoConfirmation']->value, 'UTF-8');?>
</div>
	<?php } ?>
<?php }?>
<?php if (sizeof($_smarty_tpl->tpl_vars['aPrediggoErrors']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars["sPrediggoError"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["sPrediggoError"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aPrediggoErrors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["sPrediggoError"]->key => $_smarty_tpl->tpl_vars["sPrediggoError"]->value) {
$_smarty_tpl->tpl_vars["sPrediggoError"]->_loop = true;
?>
		<div class="error"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['sPrediggoError']->value, 'UTF-8');?>
</div>
	<?php } ?>
<?php }?><?php }} ?>
