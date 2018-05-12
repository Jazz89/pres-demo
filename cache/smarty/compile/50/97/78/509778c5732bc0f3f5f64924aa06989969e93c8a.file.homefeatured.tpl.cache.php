<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:27
         compiled from "/home/p514664/public_html/themes/AngarTheme/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15305122985ada6eef5d8a50-08029129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509778c5732bc0f3f5f64924aa06989969e93c8a' => 
    array (
      0 => '/home/p514664/public_html/themes/AngarTheme/modules/homefeatured/homefeatured.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15305122985ada6eef5d8a50-08029129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6eef5eb9c8_02070321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6eef5eb9c8_02070321')) {function content_5ada6eef5eb9c8_02070321($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<h4 class="index_title"><span><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</span></h4>	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
	<h4 class="index_title"><span><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured'),$_smarty_tpl);?>
</span></h4>	
	<ul id="homefeatured" class="homefeatured tab-pane">
		<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
	</ul>
<?php }?><?php }} ?>
