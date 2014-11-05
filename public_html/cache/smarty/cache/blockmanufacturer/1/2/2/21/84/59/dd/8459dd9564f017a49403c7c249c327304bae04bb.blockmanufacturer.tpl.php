<?php /*%%SmartyHeaderCode:2129506464542d5a0838a6e1-15775370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8459dd9564f017a49403c7c249c327304bae04bb' => 
    array (
      0 => '/home/u163028367/public_html/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1411798382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2129506464542d5a0838a6e1-15775370',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_543a836321fdf6_67527666',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543a836321fdf6_67527666')) {function content_543a836321fdf6_67527666($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://yourbookyourmind.esy.es/vn/manufacturers" title="Nhà sản xuất">
						Nhà sản xuất
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://yourbookyourmind.esy.es/vn/1_usa" title="More about USA">
							USA
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Tất cả</option>
													<option value="http://yourbookyourmind.esy.es/vn/1_usa">USA</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
