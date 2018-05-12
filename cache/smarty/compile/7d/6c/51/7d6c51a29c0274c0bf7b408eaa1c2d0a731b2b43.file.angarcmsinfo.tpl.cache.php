<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:28
         compiled from "/home/p514664/public_html/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15445965095ada6ef09bdcc8-14350503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d6c51a29c0274c0bf7b408eaa1c2d0a731b2b43' => 
    array (
      0 => '/home/p514664/public_html/modules/angarcmsinfo/views/templates/front/angarcmsinfo.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15445965095ada6ef09bdcc8-14350503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6ef09cc9a5_63631380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6ef09cc9a5_63631380')) {function content_5ada6ef09cc9a5_63631380($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="angarinfo_block">
	<div class="container">
		<?php  $_smarty_tpl->tpl_vars['info2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info2']->key => $_smarty_tpl->tpl_vars['info2']->value) {
$_smarty_tpl->tpl_vars['info2']->_loop = true;
?>
			<div class="col-xs-3"><?php echo $_smarty_tpl->tpl_vars['info2']->value['text'];?>
 </div>
		<?php } ?>
	</div>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?>
<?php }} ?>
