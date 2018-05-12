<?php /*%%SmartyHeaderCode:15287035885ada6ef096dd32-85692412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee307d62a0654d1a39e0153650703556feb03495' => 
    array (
      0 => '/home/p514664/public_html/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15287035885ada6ef096dd32-85692412',
  'variables' => 
  array (
    'man_auto' => 0,
    'man_pause' => 0,
    'man_move' => 0,
    'man_loop' => 0,
    'link' => 0,
    'homeManufacturers' => 0,
    'homeManufacturer' => 0,
    'img_manu_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6ef09adcd7_02911369',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6ef09adcd7_02911369')) {function content_5ada6ef09adcd7_02911369($_smarty_tpl) {?>
<script>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: false,
			minSlides: 1,
			maxSlides: 5,
			slideWidth: 234,
			pager: false,
			pause: 3000,
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: 1,
			infiniteLoop: false,
			hideControlOnEnd: true
		});
	});
</script>


<div id="home_man">

<h4 class="man_title">
	<a href="http://test-stz.xaa.pl/index.php?controller=manufacturer" title="Polecani producenci"><span>Polecani producenci</span></a>
	<div id="next_man" class="slider-btn"></div>
	<div id="prev_man" class="slider-btn"></div>
</h4>

<ul id="bx_manufacturer">
	<li>

		<a title="Fashion Manufacturer" href="http://test-stz.xaa.pl/index.php?id_manufacturer=1&amp;controller=manufacturer">
			<img src="http://test-stz.xaa.pl/img/m/1-medium_default.jpg" alt="Fashion Manufacturer" />
		</a>

	</li>
	
</ul>

<div class="clearfix"></div>

</div><?php }} ?>
