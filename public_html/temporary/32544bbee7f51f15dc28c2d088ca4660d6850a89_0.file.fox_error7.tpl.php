<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/fox_error7.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263207ce2d1_09284533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32544bbee7f51f15dc28c2d088ca4660d6850a89' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/fox_error7.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611263207ce2d1_09284533 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value != '' && is_string($_smarty_tpl->tpl_vars['error']->value)) {
$_smarty_tpl->_assignInScope('class', 'fox_error');
$_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['error']->value);
} elseif ($_smarty_tpl->tpl_vars['message']->value != '' && is_string($_smarty_tpl->tpl_vars['message']->value)) {
$_smarty_tpl->_assignInScope('class', 'fox_success');
$_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['message']->value);
} elseif ($_smarty_tpl->tpl_vars['snotice']->value != '' && is_string($_smarty_tpl->tpl_vars['snotice']->value)) {
$_smarty_tpl->_assignInScope('class', 'fox_notice');
$_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['snotice']->value);
} elseif ($_smarty_tpl->tpl_vars['attention']->value != '' && is_string($_smarty_tpl->tpl_vars['attention']->value)) {
$_smarty_tpl->_assignInScope('class', 'fox_attention');
$_smarty_tpl->_assignInScope('text', $_smarty_tpl->tpl_vars['attention']->value);
}
if ($_smarty_tpl->tpl_vars['class']->value && $_smarty_tpl->tpl_vars['text']->value) {?><div class='<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
'><div class="centerwrap lg-centerwrap"><p><?php if ($_smarty_tpl->tpl_vars['class']->value === 'fox_attention') {?><i class="icon ico-attention_white v-align-m mr5"></i><?php }
echo $_smarty_tpl->tpl_vars['text']->value;?>
</p></div></div><?php }
}
}
