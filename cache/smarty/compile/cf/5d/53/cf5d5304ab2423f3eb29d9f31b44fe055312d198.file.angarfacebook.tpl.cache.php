<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:28
         compiled from "/home/p514664/public_html/modules/angarfacebook/views/templates/front/angarfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18323117385ada6ef09db347-08590025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf5d5304ab2423f3eb29d9f31b44fe055312d198' => 
    array (
      0 => '/home/p514664/public_html/modules/angarfacebook/views/templates/front/angarfacebook.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18323117385ada6ef09db347-08590025',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6ef09edd60_63752004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6ef09edd60_63752004')) {function content_5ada6ef09edd60_63752004($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="likebox_content">
	<h4><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'angarfacebook'),$_smarty_tpl);?>
</h4>
	<div class="likebox_tab"></div>
	<div class="fb-page" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
">Facebook</a></blockquote></div></div>
</div>
<?php }?>
<?php }} ?>
