<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 23:32:59
         compiled from "/home/u163028367/public_html/modules/followup/views/templates/hook/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1392740791542d7e3be5ef62-83692271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '549c1c7d7f567b4f00d4639e8d7adb4337559d9a' => 
    array (
      0 => '/home/u163028367/public_html/modules/followup/views/templates/hook/stats.tpl',
      1 => 1412267578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1392740791542d7e3be5ef62-83692271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stats_array' => 0,
    'date' => 0,
    'stats' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d7e3bed6225_02049395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d7e3bed6225_02049395')) {function content_542d7e3bed6225_02049395($_smarty_tpl) {?>

<div class="panel" id="fieldset_4">
    <h3><i class="icon-bar-chart"></i> <?php echo smartyTranslate(array('s'=>'Statistics','mod'=>'followup'),$_smarty_tpl);?>
</h3>
	<p><?php echo smartyTranslate(array('s'=>'Detailed statistics for the last 30 days:','mod'=>'followup'),$_smarty_tpl);?>
</p>
	<ul style="font-size: 10px; font-weight: bold;">
		<li><?php echo smartyTranslate(array('s'=>'Sent = Number of sent e-mails','mod'=>'followup'),$_smarty_tpl);?>
</li>
		<li><?php echo smartyTranslate(array('s'=>'Used = Number of discounts used (valid orders only)','mod'=>'followup'),$_smarty_tpl);?>
</li>
		<li><?php echo smartyTranslate(array('s'=>'Conversion % = Conversion rate','mod'=>'followup'),$_smarty_tpl);?>
</li>
	</ul>
	<table class="table">
		<tr>
			<th rowspan="2" style="width: 75px;"><?php echo smartyTranslate(array('s'=>'Date','mod'=>'followup'),$_smarty_tpl);?>
</th>
			<th colspan="3"><?php echo smartyTranslate(array('s'=>'Canceled carts','mod'=>'followup'),$_smarty_tpl);?>
</th>
			<th colspan="3"><?php echo smartyTranslate(array('s'=>'Re-orders','mod'=>'followup'),$_smarty_tpl);?>
</th>
			<th colspan="3"><?php echo smartyTranslate(array('s'=>'Best customers','mod'=>'followup'),$_smarty_tpl);?>
</th>
			<th colspan="3"><?php echo smartyTranslate(array('s'=>'Bad customers','mod'=>'followup'),$_smarty_tpl);?>
</th>
		</tr>
		<tr>
			<td class="center"><?php echo smartyTranslate(array('s'=>'Sent','mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>'Used','mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>'Conversion (%)','mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>"Sent",'mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>"Used",'mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>'Conversion (%)','mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>"Sent",'mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>"Used",'mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>'Conversion (%)','mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>"Sent",'mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>"Used",'mod'=>'followup'),$_smarty_tpl);?>
</td>
			<td class="center"><?php echo smartyTranslate(array('s'=>'Conversion (%)','mod'=>'followup'),$_smarty_tpl);?>
</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['stats'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stats']->_loop = false;
 $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stats_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stats']->key => $_smarty_tpl->tpl_vars['stats']->value) {
$_smarty_tpl->tpl_vars['stats']->_loop = true;
 $_smarty_tpl->tpl_vars['date']->value = $_smarty_tpl->tpl_vars['stats']->key;
?>
		<tr>
			<td class="center"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['date']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stats']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
				<td class="center"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['val']->value['nb'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
				<td class="center"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['val']->value['nb_used'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
				<td class="center"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['val']->value['rate'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
			<?php } ?>	
		</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['stats']->_loop) {
?>
			<tr>
				<td colspan="13" style="font-weight: bold; text-align: center;"><?php echo smartyTranslate(array('s'=>'No statistics at this time.','mod'=>'followup'),$_smarty_tpl);?>
</td>
			</tr>
		<?php } ?>
	</table>
</div>
<?php }} ?>
