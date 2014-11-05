<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 23:54:28
         compiled from "/home/u163028367/public_html/modules/yotpo/views/templates/front/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1342876638542d8344667ad8-38817788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b67ea630c96f3cc65ba1be86b344a63cd0954e' => 
    array (
      0 => '/home/u163028367/public_html/modules/yotpo/views/templates/front/header.tpl',
      1 => 1412268819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1342876638542d8344667ad8-38817788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'yotpoAppkey' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542d8344687a91_12761997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542d8344687a91_12761997')) {function content_542d8344687a91_12761997($_smarty_tpl) {?><script type="text/javascript">
	   var yotpoAppkey = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['yotpoAppkey']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" ;
	
	function inIframe () {
	    try {
	    	return window.self !== window.top;
	    } catch (e) {
	    	return true;
	    }
	}
	var inIframe = inIframe();
	if (inIframe) {
		window['yotpo_testimonials_active'] = true;
	}
	if (document.addEventListener){
	    document.addEventListener('DOMContentLoaded', function () {
	        var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/" + yotpoAppkey  + "/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)
	    });
	}
	else if (document.attachEvent) {
	    document.attachEvent('DOMContentLoaded',function(){
	        var e=document.createElement("script");e.type="text/javascript",e.async=true,e.src="//staticw2.yotpo.com/" + yotpoAppkey  + "/widget.js";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)
	    });
	}
	
</script><?php }} ?>
