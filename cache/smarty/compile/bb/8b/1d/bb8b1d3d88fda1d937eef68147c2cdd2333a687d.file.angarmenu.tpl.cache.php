<?php /* Smarty version Smarty-3.1.19, created on 2018-04-21 00:51:28
         compiled from "/home/p514664/public_html/modules/angarmenu/views/templates/front/angarmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18804216735ada6ef0591716-14807914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8b1d3d88fda1d937eef68147c2cdd2333a687d' => 
    array (
      0 => '/home/p514664/public_html/modules/angarmenu/views/templates/front/angarmenu.tpl',
      1 => 1524263505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18804216735ada6ef0591716-14807914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
    'MENU_SEARCH' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ada6ef05b03d3_59724181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ada6ef05b03d3_59724181')) {function content_5ada6ef05b03d3_59724181($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<!-- Menu -->
<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
	
	<div class="container">
		<div class="cat-title"><?php echo smartyTranslate(array('s'=>'Menu ','mod'=>'angarmenu'),$_smarty_tpl);?>
</div>
		<ul class="sf-menu clearfix menu-content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
 
			<?php if ($_smarty_tpl->tpl_vars['MENU_SEARCH']->value) {?>
				<li class="sf-search noBack" style="float:right">
					<form id="searchbox" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="get">
						<p>
							<input type="hidden" name="controller" value="search" />
							<input type="hidden" value="position" name="orderby"/>
							<input type="hidden" value="desc" name="orderway"/>
							<input type="text" name="search_query" value="<?php if (isset($_GET['search_query'])) {?><?php echo htmlspecialchars($_GET['search_query'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
						</p>
					</form>
				</li>
			<?php }?>
		</ul>
	</div>
</div>
	<!--/ Menu -->
<?php }?><?php }} ?>
