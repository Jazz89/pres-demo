<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:28
         compiled from "/home/p514664/public_html/modules/angarcmsdesc/views/templates/front/angarcmsdesc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17793327935ada6ef072eda0-34013735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb31004383330ced46bde079fb38091c73aa1029' => 
    array (
      0 => '/home/p514664/public_html/modules/angarcmsdesc/views/templates/front/angarcmsdesc.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17793327935ada6ef072eda0-34013735',
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
  'unifunc' => 'content_5ada6ef073d663_16216084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6ef073d663_16216084')) {function content_5ada6ef073d663_16216084($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="angarinfo_desc">
	<?php  $_smarty_tpl->tpl_vars['info2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info2']->key => $_smarty_tpl->tpl_vars['info2']->value) {
$_smarty_tpl->tpl_vars['info2']->_loop = true;
?>
		<div class="desc_block"><?php echo $_smarty_tpl->tpl_vars['info2']->value['text'];?>
 </div>
	<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?>
<?php }} ?>
