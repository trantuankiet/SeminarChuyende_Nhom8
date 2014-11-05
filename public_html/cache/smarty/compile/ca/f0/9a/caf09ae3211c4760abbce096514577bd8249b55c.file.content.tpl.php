<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 20:24:21
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1263233893542d52059dd155-79282196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caf09ae3211c4760abbce096514577bd8249b55c' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/content.tpl',
      1 => 1411791990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1263233893542d52059dd155-79282196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d52059e58e6_95857529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d52059e58e6_95857529')) {function content_542d52059e58e6_95857529($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
