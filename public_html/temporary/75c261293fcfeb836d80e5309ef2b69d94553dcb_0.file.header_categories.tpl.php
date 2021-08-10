<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/components/header_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6112632079bd86_85700739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75c261293fcfeb836d80e5309ef2b69d94553dcb' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/components/header_categories.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components\\header_menu\\_thin_items.tpl' => 1,
    'file:components\\header_menu\\_wide_items.tpl' => 1,
    'file:components\\header_categories_colored_navs.tpl' => 2,
  ),
),false)) {
function content_6112632079bd86_85700739 (Smarty_Internal_Template $_smarty_tpl) {
if (App::config("promo_page_in_menu")) {
$_smarty_tpl->_assignInScope('wideMaxParent', 7);
$_smarty_tpl->_assignInScope('thinMaxParent', 6);
} else {
$_smarty_tpl->_assignInScope('wideMaxParent', 8);
$_smarty_tpl->_assignInScope('thinMaxParent', 7);
}
$_smarty_tpl->assign('c' , insert_get_header_menu (array(),$_smarty_tpl), true);
if (!App::config("category.color_view")) {?><div class="subnav"><div class="centerwrap lg-centerwrap category-menu"><?php $_smarty_tpl->_subTemplateRender("file:components\header_menu\_thin_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:components\header_menu\_wide_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></div><?php } else { ?><div class="subnav"><div class="centerwrap lg-centerwrap category-menu category-menu__bg"><ul class="category-menu__list cat-menu-thin sub-menu-parent"><?php $_smarty_tpl->_subTemplateRender("file:components\header_categories_colored_navs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentMaxParent'=>$_smarty_tpl->tpl_vars['thinMaxParent']->value), 0, false);
?></ul><ul class="category-menu__list cat-menu-wide sub-menu-parent category-menu__bg"><?php $_smarty_tpl->_subTemplateRender("file:components\header_categories_colored_navs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('currentMaxParent'=>$_smarty_tpl->tpl_vars['wideMaxParent']->value), 0, true);
?></ul></div></div><?php }
}
}
