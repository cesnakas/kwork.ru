<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:49
  from '/home/user20/www/test-stand20/public_html/themes/utils/currency.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6112632dcc8423_16279982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d5b1c83d6beaa10c75b5b476477333e60cfa94b' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/utils/currency.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6112632dcc8423_16279982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.zero.php','function'=>'smarty_modifier_zero',),));
if ($_smarty_tpl->tpl_vars['currencyId']->value == \Model\CurrencyModel::USD || $_smarty_tpl->tpl_vars['lang']->value == Translations::EN_LANG) {?><span>$</span><?php }
if (isset($_smarty_tpl->tpl_vars['total']->value)) {
if ($_smarty_tpl->tpl_vars['span']->value) {?><span class="funds"><?php }
echo smarty_modifier_zero($_smarty_tpl->tpl_vars['total']->value);
if ($_smarty_tpl->tpl_vars['span']->value) {?></span><?php }
}
if ($_smarty_tpl->tpl_vars['currencyId']->value == \Model\CurrencyModel::RUB || $_smarty_tpl->tpl_vars['lang']->value == Translations::DEFAULT_LANG) {?>&nbsp;<span class="rouble">Р</span><?php }
}
}
