<?php /*%%SmartyHeaderCode:898658660542d52bab47fb4-18957465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9af42a7f9c2184492e9f6c1e85812e1778ffb971' => 
    array (
      0 => '/home/u163028367/public_html/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1411798398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '898658660542d52bab47fb4-18957465',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542fa66bd6a7f8_46044188',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542fa66bd6a7f8_46044188')) {function content_542fa66bd6a7f8_46044188($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://yourbookyourmind.esy.es/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
