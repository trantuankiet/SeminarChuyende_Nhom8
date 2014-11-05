<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 03:36:55
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/helpers/list/list_action_default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:486101526542db767e31271-28604230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ef23f64b96ce320d32cdb88d0df285b7844eec' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/helpers/list/list_action_default.tpl',
      1 => 1411792368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '486101526542db767e31271-28604230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542db767e9bec5_51874185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542db767e9bec5_51874185')) {function content_542db767e9bec5_51874185($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="default">
	<i class="icon-asterisk"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
