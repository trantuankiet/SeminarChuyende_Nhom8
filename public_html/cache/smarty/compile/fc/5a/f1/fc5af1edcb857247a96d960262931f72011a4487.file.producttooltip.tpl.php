<?php /* Smarty version Smarty-3.1.19, created on 2014-10-03 00:11:18
         compiled from "/home/u163028367/public_html/modules/producttooltip/views/templates/hook/producttooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205249355542d8736957713-11050908%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc5af1edcb857247a96d960262931f72011a4487' => 
    array (
      0 => '/home/u163028367/public_html/modules/producttooltip/views/templates/hook/producttooltip.tpl',
      1 => 1411798018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205249355542d8736957713-11050908',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nb_people' => 0,
    'date_last_order' => 0,
    'date_last_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d8736a1d4c8_17736728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d8736a1d4c8_17736728')) {function content_542d8736a1d4c8_17736728($_smarty_tpl) {?>
<script type="text/javascript">
    $(document).ready(function () {
        <?php if (isset($_smarty_tpl->tpl_vars['nb_people']->value)) {?>
        $.growl({title: '', message: '<?php if ($_smarty_tpl->tpl_vars['nb_people']->value==1) {?><?php echo smartyTranslate(array('s'=>'%d person is currently watching this product','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'%d people are currently watching this product','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php }?>'});
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['date_last_order']->value)) {?>
        $.growl({title: '', message: '<?php echo smartyTranslate(array('s'=>'This product was bought last','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_order']->value,'full'=>1),$_smarty_tpl);?>
'});
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['date_last_cart']->value)) {?>
        $.growl({title: '', message: '<?php echo smartyTranslate(array('s'=>'This product was added to cart last','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_cart']->value,'full'=>1),$_smarty_tpl);?>
'});
        <?php }?>

        });
</script><?php }} ?>
