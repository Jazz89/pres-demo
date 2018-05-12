<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:27
         compiled from "/home/p514664/public_html/themes/AngarTheme/modules/blockspecials/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11572831625ada6eef6a6900-29021615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09574c2d54c16afe07acc285f00f4f05475cddaf' => 
    array (
      0 => '/home/p514664/public_html/themes/AngarTheme/modules/blockspecials/blockspecials-home.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11572831625ada6eef6a6900-29021615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6eef6ca941_74696082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6eef6ca941_74696082')) {function content_5ada6eef6ca941_74696082($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<h4 class="index_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</a></h4>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
	<h4 class="index_title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockspecials'),$_smarty_tpl);?>
</a></h4>
	<ul id="blockspecials" class="blockspecials tab-pane">
		<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
	</ul>
<?php }?>
<?php }} ?>
