<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 20:24:21
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484036921542d52055c4060-86001643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c1a90ea70c24f9bfdb8025cc53329a0a7256ef' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1411792370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484036921542d52055c4060-86001643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d52055d31d9_95162096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d52055d31d9_95162096')) {function content_542d52055d31d9_95162096($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
