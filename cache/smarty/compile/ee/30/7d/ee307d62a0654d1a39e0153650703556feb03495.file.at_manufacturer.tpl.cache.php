<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:28
         compiled from "/home/p514664/public_html/modules/angarmanufacturer/views/templates/front/at_manufacturer.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_5ada6ef09aa614_50635432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6ef09aa614_50635432')) {function content_5ada6ef09aa614_50635432($_smarty_tpl) {?>

<script>
	$(document).ready(function() {
	if (!!$.prototype.bxSlider)
		$('#bx_manufacturer').bxSlider({
			auto: <?php if ($_smarty_tpl->tpl_vars['man_auto']->value==0) {?>false<?php } else { ?>true<?php }?>,
			minSlides: 1,
			maxSlides: 5,
			slideWidth: 234,
			pager: false,
			pause: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['man_pause']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
			nextSelector: '#next_man',
			prevSelector: '#prev_man',
			nextText: '>',
			prevText: '<',
			moveSlides: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['man_move']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
,
			infiniteLoop: <?php if ($_smarty_tpl->tpl_vars['man_loop']->value==0) {?>false<?php } else { ?>true<?php }?>,
			hideControlOnEnd: true
		});
	});
</script>


<div id="home_man">

<h4 class="man_title">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl);?>
"><span><?php echo smartyTranslate(array('s'=>'Featured manufacturers','mod'=>'angarmanufacturer'),$_smarty_tpl);?>
</span></a>
	<div id="next_man" class="slider-btn"></div>
	<div id="prev_man" class="slider-btn"></div>
</h4>

<ul id="bx_manufacturer">
<?php  $_smarty_tpl->tpl_vars['homeManufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['homeManufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeManufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['homeManufacturer']->key => $_smarty_tpl->tpl_vars['homeManufacturer']->value) {
$_smarty_tpl->tpl_vars['homeManufacturer']->_loop = true;
?>
	<li>

		<a title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['homeManufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" href="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['homeManufacturer']->value['id'];?>
<?php $_tmp15=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['homeManufacturer']->value['link_rewrite'];?>
<?php $_tmp16=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerLink($_tmp15,$_tmp16), ENT_QUOTES, 'UTF-8', true);?>
">
			<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['homeManufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['homeManufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
		</a>

	</li>
<?php } ?>	
</ul>

<div class="clearfix"></div>

</div><?php }} ?>
