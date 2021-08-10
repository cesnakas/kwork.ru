<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/config/chat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263206a03c2_46452775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abfe00fd163e4ae014d90e5f2d989c27d487bf1b' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/config/chat.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611263206a03c2_46452775 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/function.to_js.php','function'=>'smarty_function_to_js',),));
if (!$_smarty_tpl->tpl_vars['config']->value["chat"]) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['config']) ? $_smarty_tpl->tpl_vars['config']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array["chat"] = array("isFocusGroupMember"=>UserManager::isTester($_smarty_tpl->tpl_vars['actor']->value->id));
$_smarty_tpl->_assignInScope('config', $_tmp_array ,false ,8);
}
echo '<script'; ?>
><?php echo smarty_function_to_js(array('name'=>"config.chat",'var'=>$_smarty_tpl->tpl_vars['config']->value['chat']),$_smarty_tpl);
echo '</script'; ?>
><?php }
}
