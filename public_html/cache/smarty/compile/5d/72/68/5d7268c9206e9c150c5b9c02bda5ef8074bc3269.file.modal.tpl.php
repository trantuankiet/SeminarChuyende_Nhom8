<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 20:24:21
         compiled from "/home/u163028367/public_html/admin5999/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1013215093542d5205b5f0e5-53903547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d7268c9206e9c150c5b9c02bda5ef8074bc3269' => 
    array (
      0 => '/home/u163028367/public_html/admin5999/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1411792381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1013215093542d5205b5f0e5-53903547',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d5205b635f5_99040528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d5205b635f5_99040528')) {function content_542d5205b635f5_99040528($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
