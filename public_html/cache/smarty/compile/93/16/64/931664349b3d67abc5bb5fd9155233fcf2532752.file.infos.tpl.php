<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 22:02:17
         compiled from "/home/u163028367/public_html/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:888502204542d68f9b38c58-74874984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '931664349b3d67abc5bb5fd9155233fcf2532752' => 
    array (
      0 => '/home/u163028367/public_html/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1411798658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '888502204542d68f9b38c58-74874984',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d68f9bc5fe3_82540690',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d68f9bc5fe3_82540690')) {function content_542d68f9bc5fe3_82540690($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
