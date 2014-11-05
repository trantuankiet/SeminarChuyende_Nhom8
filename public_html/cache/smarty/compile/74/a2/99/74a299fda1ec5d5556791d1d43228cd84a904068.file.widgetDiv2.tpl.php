<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 23:54:40
         compiled from "/home/u163028367/public_html/modules/yotpo/views/templates/front/widgetDiv2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1206527205542d835018a394-35576140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74a299fda1ec5d5556791d1d43228cd84a904068' => 
    array (
      0 => '/home/u163028367/public_html/modules/yotpo/views/templates/front/widgetDiv2.tpl',
      1 => 1412268819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206527205542d835018a394-35576140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yotpoProductId' => 0,
    'yotpoProductName' => 0,
    'yotpoProductLink' => 0,
    'yotpoProductImageUrl' => 0,
    'yotpoProductDescription' => 0,
    'yotpoLanguage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d83501bb019_93616092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d83501bb019_93616092')) {function content_542d83501bb019_93616092($_smarty_tpl) {?><div class="yotpo yotpo-main-widget"
   data-product-id="<?php echo intval($_smarty_tpl->tpl_vars['yotpoProductId']->value);?>
"
   data-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpoProductName']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
   data-url="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpoProductLink']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
   data-image-url="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpoProductImageUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
   data-description="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpoProductDescription']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" 
   data-lang="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpoLanguage']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
</div>


 <?php }} ?>
