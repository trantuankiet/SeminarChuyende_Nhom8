<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 22:02:08
         compiled from "/home/u163028367/public_html/modules/blockfacebook/views/admin/_configure/preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1655662685542eba70752e99-67814449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ec173d33b0ae3b099b0c094960118f3e38ac0e' => 
    array (
      0 => '/home/u163028367/public_html/modules/blockfacebook/views/admin/_configure/preview.tpl',
      1 => 1411993025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655662685542eba70752e99-67814449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebook_js_url' => 0,
    'facebook_css_url' => 0,
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542eba708bc4b2_77659370',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542eba708bc4b2_77659370')) {function content_542eba708bc4b2_77659370($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['facebook_js_url']->value;?>
"></script>
<link href="<?php echo $_smarty_tpl->tpl_vars['facebook_css_url']->value;?>
" rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div class="bootstrap panel">
	<div class="panel-heading">
		<i class="icon-picture-o"></i> <?php echo smartyTranslate(array('s'=>"Preview"),$_smarty_tpl);?>

	</div>
	<div id="fb-root"></div>
	<div id="facebook_block">
		<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
		<div class="facebook-fanbox">
			<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
