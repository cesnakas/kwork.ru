<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:26:13
  from '/home/user20/www/test-stand20/public_html/themes/promo/_blocks/banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126255d44670_28373579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '301e6c03791ebbe714ca8261f0a0da61658bc99d' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/promo/_blocks/banner.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61126255d44670_28373579 (Smarty_Internal_Template $_smarty_tpl) {
if (false && PromoBlackfridayManager::isPageShow() && Translations::getLang() == Translations::DEFAULT_LANG) {?>
	<div class="lg-centerwrap centerwrap main-wrap m-m0 ovf-h">
		<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/blackfriday" class="promo_blackfriday__banner"></a>
	</div>
<?php }
}
}
