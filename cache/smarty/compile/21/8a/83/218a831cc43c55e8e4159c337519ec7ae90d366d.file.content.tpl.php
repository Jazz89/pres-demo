<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:18:00
         compiled from "/home/p514664/public_html/admin605bhnwol/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4223806535ada6718485765-73579489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218a831cc43c55e8e4159c337519ec7ae90d366d' => 
    array (
      0 => '/home/p514664/public_html/admin605bhnwol/themes/default/template/content.tpl',
      1 => 1524261687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4223806535ada6718485765-73579489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada671848f337_68423405',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada671848f337_68423405')) {function content_5ada671848f337_68423405($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
