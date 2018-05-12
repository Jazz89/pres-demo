<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:28
         compiled from "/home/p514664/public_html/modules/angarparallax/views/templates/front/at_parallax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5616969525ada6ef07500d6-05642667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69fcabfda7227164cc6ab62f49ec9d778488ad13' => 
    array (
      0 => '/home/p514664/public_html/modules/angarparallax/views/templates/front/at_parallax.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5616969525ada6ef07500d6-05642667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parallax_img' => 0,
    'parallax_desc' => 0,
    'parallax_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6ef076a892_32341250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6ef076a892_32341250')) {function content_5ada6ef076a892_32341250($_smarty_tpl) {?>

<div id="parallax_baner" <?php if (isset($_smarty_tpl->tpl_vars['parallax_img']->value)) {?>style="background-image: url(<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['parallax_img']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
)"<?php }?>>

	<div class="parallax_desc">
		<?php echo $_smarty_tpl->tpl_vars['parallax_desc']->value;?>
 
	</div>

	<?php if (mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['parallax_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')) {?>
		<a class="parallax_button" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['parallax_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'See more','mod'=>'angarparallax'),$_smarty_tpl);?>
</a>
	<?php }?>

</div>
<?php }} ?>
