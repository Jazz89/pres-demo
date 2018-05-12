<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:26
         compiled from "/home/p514664/public_html/modules/angarslider/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3102057775ada6eee5abe81-91049519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec88e22ea37be64289bf4f778c2dc88236d6e51' => 
    array (
      0 => '/home/p514664/public_html/modules/angarslider/views/templates/hook/header.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3102057775ada6eee5abe81-91049519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'angarslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6eee5e2b61_14851392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6eee5e2b61_14851392')) {function content_5ada6eee5e2b61_14851392($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['angarslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_loop'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_width'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_speed'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('angarslider_pause'=>intval($_smarty_tpl->tpl_vars['angarslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>
