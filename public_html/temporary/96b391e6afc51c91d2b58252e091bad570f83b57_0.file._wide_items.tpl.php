<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/components/header_menu/_wide_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263207c2038_21131407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96b391e6afc51c91d2b58252e091bad570f83b57' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/components/header_menu/_wide_items.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components\\header_menu\\_item.tpl' => 1,
    'file:components\\header_categories_promo_item.tpl' => 1,
    'file:components\\header_categories_more.tpl' => 1,
  ),
),false)) {
function content_611263207c2038_21131407 (Smarty_Internal_Template $_smarty_tpl) {
?><ul class="category-menu__list cat-menu-wide sub-menu-parent"><?php if ((count($_smarty_tpl->tpl_vars['c']->value)-1) <= $_smarty_tpl->tpl_vars['wideMaxParent']->value) {
$_smarty_tpl->_assignInScope('maxParent', $_smarty_tpl->tpl_vars['wideMaxParent']->value ,true);
} else {
$_smarty_tpl->_assignInScope('maxParent', ($_smarty_tpl->tpl_vars['wideMaxParent']->value-1) ,true);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c']->value, 'category', false, NULL, 'list', array (
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index']++;
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_list']->value['index'] : null) <= $_smarty_tpl->tpl_vars['maxParent']->value) {
$_smarty_tpl->_subTemplateRender("file:components\header_menu\_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (App::config("promo_page_in_menu")) {
$_smarty_tpl->_subTemplateRender("file:components\header_categories_promo_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ((count($_smarty_tpl->tpl_vars['c']->value)-1) > $_smarty_tpl->tpl_vars['wideMaxParent']->value) {
$_smarty_tpl->_subTemplateRender("file:components\header_categories_more.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('morePosition'=>$_smarty_tpl->tpl_vars['wideMaxParent']->value), 0, false);
}?></ul><?php }
}
