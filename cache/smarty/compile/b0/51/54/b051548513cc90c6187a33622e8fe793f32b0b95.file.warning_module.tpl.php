<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:55:08
         compiled from "/home/p514664/public_html/admin605bhnwol/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4140508705ada6fcc7ed4b3-19637206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b051548513cc90c6187a33622e8fe793f32b0b95' => 
    array (
      0 => '/home/p514664/public_html/admin605bhnwol/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1524261687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4140508705ada6fcc7ed4b3-19637206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6fcc7f4394_23724575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6fcc7f4394_23724575')) {function content_5ada6fcc7f4394_23724575($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
