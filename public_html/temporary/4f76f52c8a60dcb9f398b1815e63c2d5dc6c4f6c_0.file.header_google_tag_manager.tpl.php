<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/header_google_tag_manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263206d2414_00664218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f76f52c8a60dcb9f398b1815e63c2d5dc6c4f6c' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/header_google_tag_manager.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611263206d2414_00664218 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['appMode']->value == "stage") {?>
	
		<!-- Google Tag Manager (noscript) -->
		<noscript>
	
	<?php if (Translations::isDefaultLang()) {?>
		
			<iframe src="//www.googletagmanager.com/ns.html?id=GTM-KJSMMH" height="0" width="0"	style="display:none;visibility:hidden"></iframe>
		
	<?php } else { ?>
		
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZXSF2S" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		
	<?php }?>
	
		</noscript>
		<!-- End Google Tag Manager (noscript) -->
	
<?php }
}
}
