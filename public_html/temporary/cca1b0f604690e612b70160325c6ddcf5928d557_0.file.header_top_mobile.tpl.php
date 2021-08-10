<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/header_top_mobile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263207294c1_31445763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca1b0f604690e612b70160325c6ddcf5928d557' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/header_top_mobile.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611263207294c1_31445763 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="headertop-mobile justify-content-between m-visible">
	<?php if ($_smarty_tpl->tpl_vars['hasBackButton']->value) {?>
		<div class="header_back-button pull-left" onclick="window.history.length > 1 ? window.history.back() : window.location.href = '/'">
			<i class="fa fa-angle-left color-white"></i>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['mobileReferer']->value) {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['mobileReferer']->value;?>
" class="back-link-mobile">
			<i class="fa fa-angle-left"></i>
		</a>
	<?php }?>
	<div class="foxmenubutton">
		<div class="<?php if ($_smarty_tpl->tpl_vars['actor']->value) {?> <?php if ($_smarty_tpl->tpl_vars['actor']->value->notify_unread_count > 0) {?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['cart']->value) > 0) {?>active<?php }?> <?php if ($_smarty_tpl->tpl_vars['actor']->value->notify_unread_count > 0) {?>active<?php }
}?> " onclick="mobile_menu_toggle();">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="header_search m-visible">
		<div id="general-search-mobile">
			<general-search class="mobile" default-search-encoded='<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchValue']->value);?>
'></general-search>
		</div>
	</div>

	<?php if ($_smarty_tpl->tpl_vars['actor']->value) {?>
		<a class="menu-category" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories">
			<span></span><span></span><span></span><span></span>
		</a>
	<?php } else { ?>
		<a class="menu-category menu-category_login login-js">
			<i class="icon ico-signIn"></i>
		</a>
	<?php }?>
</div><?php }
}
