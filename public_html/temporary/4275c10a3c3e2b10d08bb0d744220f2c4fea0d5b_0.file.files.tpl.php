<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/config/files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126320691324_45173098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4275c10a3c3e2b10d08bb0d744220f2c4fea0d5b' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/config/files.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61126320691324_45173098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/function.to_js.php','function'=>'smarty_function_to_js',),));
if (!$_smarty_tpl->tpl_vars['config']->value["files"]) {?>
	<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['config']) ? $_smarty_tpl->tpl_vars['config']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array["files"] = array("maxCount"=>(int)App::config("files.max_count"),"maxSizeReal"=>(int)App::config("files.max_size"),"maxSize"=>round(App::config("files.max_size")/1048576));
$_smarty_tpl->_assignInScope('config', $_tmp_array ,false ,8);
}
echo '<script'; ?>
><?php echo smarty_function_to_js(array('name'=>"config.files",'var'=>$_smarty_tpl->tpl_vars['config']->value['files']),$_smarty_tpl);
echo '</script'; ?>
><?php }
}
