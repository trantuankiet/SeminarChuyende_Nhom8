<?php /*%%SmartyHeaderCode:1091095989542d5a086d75f4-63840911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dcb972215fe754ca3513177ca464f0c3b606293' => 
    array (
      0 => '/home/u163028367/public_html/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1411798408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1091095989542d5a086d75f4-63840911',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5438a8690995b5_00085331',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5438a8690995b5_00085331')) {function content_5438a8690995b5_00085331($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://yourbookyourmind.esy.es/en/supplier" title="Suppliers">
					Suppliers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="first_item">
                					<a 
					href="http://yourbookyourmind.esy.es/en/1__ak-press" 
					title="More about AK Press">
				                AK Press
                					</a>
                				</li>
															<li class="item">
                					<a 
					href="http://yourbookyourmind.esy.es/en/3__amazoncom" 
					title="More about Amazon.com">
				                Amazon.com
                					</a>
                				</li>
															<li class="item">
                					<a 
					href="http://yourbookyourmind.esy.es/en/4__baker-taylor" 
					title="More about Baker & Taylor">
				                Baker &amp; Taylor
                					</a>
                				</li>
															<li class="item">
                					<a 
					href="http://yourbookyourmind.esy.es/en/2__bertrams" 
					title="More about Bertrams">
				                Bertrams
                					</a>
                				</li>
															<li class="item">
                					<a 
					href="http://yourbookyourmind.esy.es/en/6__gardners-books" 
					title="More about Gardners Books">
				                Gardners Books
                					</a>
                				</li>
																	</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">All suppliers</option>
													<option value="http://yourbookyourmind.esy.es/en/1__ak-press">AK Press</option>
													<option value="http://yourbookyourmind.esy.es/en/3__amazoncom">Amazon.com</option>
													<option value="http://yourbookyourmind.esy.es/en/4__baker-taylor">Baker &amp; Taylor</option>
													<option value="http://yourbookyourmind.esy.es/en/2__bertrams">Bertrams</option>
													<option value="http://yourbookyourmind.esy.es/en/6__gardners-books">Gardners Books</option>
													<option value="http://yourbookyourmind.esy.es/en/5__reformers-bookshop">Reformers Bookshop</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
