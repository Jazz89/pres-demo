<?php /*%%SmartyHeaderCode:6888643225ada6eeede3e47-30455268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3bff3083e089276164dc1d1aceb29ad4a22c488' => 
    array (
      0 => '/home/p514664/public_html/themes/AngarTheme/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6888643225ada6eeede3e47-30455268',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada8df3630ab3_90677310',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada8df3630ab3_90677310')) {function content_5ada8df3630ab3_90677310($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://test-stz.xaa.pl/index.php?controller=manufacturer" title="Producenci">
				Producenci
			</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://test-stz.xaa.pl/index.php?id_manufacturer=1&amp;controller=manufacturer" title="Około Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">Wszyscy producenci</option>
													<option value="http://test-stz.xaa.pl/index.php?id_manufacturer=1&amp;controller=manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
