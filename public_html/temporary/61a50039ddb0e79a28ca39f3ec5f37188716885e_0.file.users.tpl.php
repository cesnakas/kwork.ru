<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/config/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126320688f76_17732918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61a50039ddb0e79a28ca39f3ec5f37188716885e' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/config/users.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61126320688f76_17732918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/function.to_js.php','function'=>'smarty_function_to_js',),));
if (!$_smarty_tpl->tpl_vars['config']->value["users"]) {?>
	<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['config']) ? $_smarty_tpl->tpl_vars['config']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array["users"] = array("profilePicUrl"=>App::config("membersprofilepicurl"));
$_smarty_tpl->_assignInScope('config', $_tmp_array ,false ,8);
}
echo '<script'; ?>
>
	<?php echo smarty_function_to_js(array('name'=>"config.users",'var'=>$_smarty_tpl->tpl_vars['config']->value['users']),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['userAvatarColors']->value) {
echo smarty_function_to_js(array('name'=>"userAvatarColors",'var'=>$_smarty_tpl->tpl_vars['userAvatarColors']->value),$_smarty_tpl);
}
echo '</script'; ?>
><?php }
}
