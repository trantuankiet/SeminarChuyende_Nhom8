<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 20:34:15
         compiled from "/home/u163028367/public_html/mails/en/order_conf_cart_rules.txt" */ ?>
<?php /*%%SmartyHeaderCode:1864817995542d5457a2a3c1-18798246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '121cfe14626bf6a3b136a36470a480a95d24b4e9' => 
    array (
      0 => '/home/u163028367/public_html/mails/en/order_conf_cart_rules.txt',
      1 => 1411796317,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864817995542d5457a2a3c1-18798246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'cart_rule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d5457a7f024_14698319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d5457a7f024_14698319')) {function content_542d5457a7f024_14698319($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['cart_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->key => $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->_loop = true;
?>
	<?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_name'];?>
  <?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['voucher_reduction'];?>

<?php } ?><?php }} ?>
