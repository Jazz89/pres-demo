<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:09:19
         compiled from "/home/p514664/public_html/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:559401075ada650f384176-35676338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '383ec369d8f1c979348cb17a6e865a33f5d96ca6' => 
    array (
      0 => '/home/p514664/public_html/admin/themes/default/template/content.tpl',
      1 => 1524261687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '559401075ada650f384176-35676338',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada650f38c134_26644123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada650f38c134_26644123')) {function content_5ada650f38c134_26644123($_smarty_tpl) {?>
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
