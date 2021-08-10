<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:28:43
  from '/home/user20/www/test-stand20/public_html/themes/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611262eb7cc2e9_06602904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0a46e88856aaca980c6a40ee09759479b632d8' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/index.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:index/authorized.tpl' => 1,
    'file:index/unauthorized.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_611262eb7cc2e9_06602904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['actor']->value) {?>		<?php echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/pages/index.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/jquery.kworkcarousel.min.js"));
}
if ($_smarty_tpl->tpl_vars['actor']->value) {
$_smarty_tpl->_subTemplateRender("file:index/authorized.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else {
$_smarty_tpl->_subTemplateRender("file:index/unauthorized.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
