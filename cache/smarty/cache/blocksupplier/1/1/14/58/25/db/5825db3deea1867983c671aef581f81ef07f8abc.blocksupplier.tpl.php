<?php /*%%SmartyHeaderCode:345149265ada6eeee600c7-76504675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5825db3deea1867983c671aef581f81ef07f8abc' => 
    array (
      0 => '/home/p514664/public_html/themes/AngarTheme/modules/blocksupplier/blocksupplier.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '345149265ada6eeee600c7-76504675',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada8df3641227_92307175',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada8df3641227_92307175')) {function content_5ada8df3641227_92307175($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://test-stz.xaa.pl/index.php?controller=supplier" title="Dostawcy">
				Dostawcy
			</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://test-stz.xaa.pl/index.php?id_supplier=1&amp;controller=supplier" 
					title="Więcej o Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">Wszyscy dostawcy</option>
													<option value="http://test-stz.xaa.pl/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
