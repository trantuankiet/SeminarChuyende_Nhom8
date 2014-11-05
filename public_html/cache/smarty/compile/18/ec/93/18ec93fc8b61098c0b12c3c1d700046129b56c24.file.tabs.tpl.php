<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 23:48:52
         compiled from "/home/u163028367/public_html/modules/prediggo/views/templates/admin/tabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1265044518542d81f45d8846-77445959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18ec93fc8b61098c0b12c3c1d700046129b56c24' => 
    array (
      0 => '/home/u163028367/public_html/modules/prediggo/views/templates/admin/tabs.tpl',
      1 => 1412268531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1265044518542d81f45d8846-77445959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'lang_iso' => 0,
    'lang_iso_forced' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d81f46c5711_14133112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d81f46c5711_14133112')) {function content_542d81f46c5711_14133112($_smarty_tpl) {?>

<div id="prediggo_configuration">
	<ul>
		<li>
			<a href="#prediggo_presentation">
				<?php echo smartyTranslate(array('s'=>'Sell Smarter','mod'=>'prediggo'),$_smarty_tpl);?>

			</a>
		</li>
		<li>
			<a href="#main_conf">
				<?php echo smartyTranslate(array('s'=>'Main Configuration','mod'=>'prediggo'),$_smarty_tpl);?>

			</a>
		</li>
		<li>
			<a href="#export_conf">
				<?php echo smartyTranslate(array('s'=>'Export Configuration','mod'=>'prediggo'),$_smarty_tpl);?>

			</a>
		</li>
		<li>
			<a href="#recommendation_conf">
				<?php echo smartyTranslate(array('s'=>'Recommendations Configuration','mod'=>'prediggo'),$_smarty_tpl);?>

			</a>
		</li>
		<li>
			<a href="#search_conf">
				<?php echo smartyTranslate(array('s'=>'Search Configuration','mod'=>'prediggo'),$_smarty_tpl);?>

			</a>
		</li>
	</ul>

	<div id="prediggo_presentation">
		<a href="http://www.prediggo.com" target="_blank" title="Prediggo">
			<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/logo.png" title="<?php echo smartyTranslate(array('s'=>'Prediggo','mod'=>'prediggo'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Prediggo','mod'=>'prediggo'),$_smarty_tpl);?>
" /> 
		</a>
		<p><?php echo smartyTranslate(array('s'=>'Through this module, Prediggo is offering you the possibility to increase your conversion rate by 30%. How?','mod'=>'prediggo'),$_smarty_tpl);?>
 <b><?php echo smartyTranslate(array('s'=>'Sell Smarter.','mod'=>'prediggo'),$_smarty_tpl);?>
</b></p>
		<p><span><?php echo smartyTranslate(array('s'=>'Sell Smarter','mod'=>'prediggo'),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>' - Promote your products, your way.','mod'=>'prediggo'),$_smarty_tpl);?>
</p>
		<ul>
			<li><?php echo smartyTranslate(array('s'=>'Present Up & Cross-Selling products, newest in stock, best sellers, etc...','mod'=>'prediggo'),$_smarty_tpl);?>
</li>
			<li><?php echo smartyTranslate(array('s'=>'Automatically promote the products matching the visitor’s shopping behavior.','mod'=>'prediggo'),$_smarty_tpl);?>
</li>
			<li><?php echo smartyTranslate(array('s'=>'Provide search and results navigation that understand shopping context.','mod'=>'prediggo'),$_smarty_tpl);?>
</li>
			<li><?php echo smartyTranslate(array('s'=>'Bottom line, turn buyers into shoppers!','mod'=>'prediggo'),$_smarty_tpl);?>
</li>
		</ul>
		<p><?php echo smartyTranslate(array('s'=>'As Prestashop did by using this module on their ','mod'=>'prediggo'),$_smarty_tpl);?>

		<a href="http://addons.prestashop.com" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Addons market place Addons','mod'=>'prediggo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Addons market place Addons','mod'=>'prediggo'),$_smarty_tpl);?>
</a>
		<?php echo smartyTranslate(array('s'=>', trust Prediggo to help you Sell Smarter with our ','mod'=>'prediggo'),$_smarty_tpl);?>
 <b><?php echo smartyTranslate(array('s'=>'two business critical solutions:','mod'=>'prediggo'),$_smarty_tpl);?>
</b></p>
		<?php $_smarty_tpl->tpl_vars['lang_iso_forced'] = new Smarty_variable('EN', null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['lang_iso']->value=='fr') {?>
			<?php $_smarty_tpl->tpl_vars['lang_iso_forced'] = new Smarty_variable('FR', null, 0);?>
		<?php }?>
		<ul>
			<li>
				<a href="http://www.prediggo.com/tmp/addons/IntelligentSearch<?php echo mb_strtoupper(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso_forced']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), 'UTF-8');?>
.pdf" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Very Easy & Powerful Onsite Search engine!','mod'=>'prediggo'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/LienIntelligentSearch<?php echo mb_strtoupper(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso_forced']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), 'UTF-8');?>
.png" title="<?php echo smartyTranslate(array('s'=>'Very Easy & Powerful Onsite Search engine!','mod'=>'prediggo'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'Very Easy & Powerful Onsite Search engine!','mod'=>'prediggo'),$_smarty_tpl);?>
" /> 
				</a>
			</li>
			<li>
				<a href="http://www.prediggo.com/tmp/addons/SemanticMerchandising<?php echo mb_strtoupper(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso_forced']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), 'UTF-8');?>
.pdf" target="_blank" title="<?php echo smartyTranslate(array('s'=>'A Personalized eMerchandising engine','mod'=>'prediggo'),$_smarty_tpl);?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/img/LienSemanticMerchandising<?php echo mb_strtoupper(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lang_iso_forced']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), 'UTF-8');?>
.png" title="<?php echo smartyTranslate(array('s'=>'A Personalized eMerchandising engine','mod'=>'prediggo'),$_smarty_tpl);?>
" alt="<?php echo smartyTranslate(array('s'=>'A Personalized eMerchandising engine','mod'=>'prediggo'),$_smarty_tpl);?>
" /> 
				</a>
			</li>
		</ul>
		<p><?php echo smartyTranslate(array('s'=>'To inquire about our solutions and set up the module, it could not be easier!','mod'=>'prediggo'),$_smarty_tpl);?>
</p>
		<ol>
			<li>
				<?php echo smartyTranslate(array('s'=>'Contact us through our website ','mod'=>'prediggo'),$_smarty_tpl);?>
 <a href="http://www.prediggo.com" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Contact us through our website ','mod'=>'prediggo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'>> HERE <<','mod'=>'prediggo'),$_smarty_tpl);?>
</a>
			</li>
			<li>
				<?php echo smartyTranslate(array('s'=>'Or give us a call +41 (0) 21 550 51 35','mod'=>'prediggo'),$_smarty_tpl);?>

			</li>
		</ol>
	</div>
	<div id="main_conf"></div>
	<div id="export_conf"></div>
	<div id="recommendation_conf"></div>
	<div id="search_conf"></div>
</div><?php }} ?>
