<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 23:53:40
         compiled from "/home/u163028367/public_html/modules/yotpo/views/templates/admin/registrationForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181261562542d8314445d42-52974165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3947cdc464d9c1f0622d206d75ecaa657bd2d56c' => 
    array (
      0 => '/home/u163028367/public_html/modules/yotpo/views/templates/admin/registrationForm.tpl',
      1 => 1412268819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181261562542d8314445d42-52974165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yotpo_action' => 0,
    'yotpo_email' => 0,
    'yotpo_userName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d83144c9d80_51966851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d83144c9d80_51966851')) {function content_542d83144c9d80_51966851($_smarty_tpl) {?><div class="y-wrapper">
	<div class="y-side-box">
		<div class="y-side-header"><?php echo smartyTranslate(array('s'=>'Yotpo makes it easy to generate beautiful reviews for your products. These in turn lead to higher sales and happier customers.','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
		<hr />
		<div class="row-fluid y-features-list text-shadow">
			<ul>
				<li><i class="y-side-icon conversation-rate"></i><?php echo smartyTranslate(array('s'=>'Increase conversion rate','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon multi-languages"></i><?php echo smartyTranslate(array('s'=>'Multi languages','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon forever-free"></i><?php echo smartyTranslate(array('s'=>'Forever free','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon social-engagement"></i><?php echo smartyTranslate(array('s'=>'Increase social engagement','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon plug-play"></i><?php echo smartyTranslate(array('s'=>'Plug &amp; play installation','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon full-customization"></i><?php echo smartyTranslate(array('s'=>'Full customization','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon analytics"></i><?php echo smartyTranslate(array('s'=>'Advanced analytics','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
				<li><i class="y-side-icon seo"></i><?php echo smartyTranslate(array('s'=>'SEO capabilities','mod'=>'yotpo'),$_smarty_tpl);?>
</li>
			</ul>
		</div>
	</div>
	<div class="y-white-box">
		<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpo_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post">
			<div class="y-page-header"><i class="y-logo"></i><?php echo smartyTranslate(array('s'=>'Create your Yotpo account','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
			<fieldset id="y-fieldset">
				<div class="y-header"><?php echo smartyTranslate(array('s'=>'Generate more reviews, more engagement, and more sales.','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Email address:','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="text" name="yotpo_user_email" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpo_email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /></div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="text" name="yotpo_user_name" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpo_userName']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /></div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Password','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="password" name="yotpo_user_password" /></div>
				<div class="y-label"><?php echo smartyTranslate(array('s'=>'Confirm password','mod'=>'yotpo'),$_smarty_tpl);?>
</div>
				<div class="y-input"><input type="password" name="yotpo_user_confirm_password" /></div>
			</fieldset>
			<div class="y-footer"><input type="submit" name="yotpo_register" value="<?php echo smartyTranslate(array('s'=>'Register','mod'=>'yotpo'),$_smarty_tpl);?>
" class="y-submit-btn" /></div>
		</form>
		<form action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpo_action']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post">
			<div class="y-footer"><?php echo smartyTranslate(array('s'=>'Already using Yotpo?','mod'=>'yotpo'),$_smarty_tpl);?>
 <input type="submit" name="log_in_button" value="click here" class="y-already-logged-in" /></div>
		</form>
	</div>
</div><?php }} ?>
