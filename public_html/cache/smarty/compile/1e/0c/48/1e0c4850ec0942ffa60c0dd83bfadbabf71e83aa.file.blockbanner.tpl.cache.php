<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 20:27:23
         compiled from "/home/u163028367/public_html/modules/blockbanner/blockbanner.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484607838542d52bb7cc4a8-49804808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0c4850ec0942ffa60c0dd83bfadbabf71e83aa' => 
    array (
      0 => '/home/u163028367/public_html/modules/blockbanner/blockbanner.tpl',
      1 => 1411997387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484607838542d52bb7cc4a8-49804808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner_link' => 0,
    'banner_desc' => 0,
    'banner_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d52bb7ed0c5_14746148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d52bb7ed0c5_14746148')) {function content_542d52bb7ed0c5_14746148($_smarty_tpl) {?>
<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
<?php if (isset($_smarty_tpl->tpl_vars['banner_img']->value)) {?>
	<img class="img-responsive" src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" width="1170" height="65" />
<?php } else { ?>
	<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['banner_desc']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

<?php }?>
</a>
<?php }} ?>
