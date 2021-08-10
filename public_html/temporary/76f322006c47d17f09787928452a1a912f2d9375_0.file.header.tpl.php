<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/config/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263206809d8_90321140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76f322006c47d17f09787928452a1a912f2d9375' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/config/header.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:config/users.tpl' => 1,
    'file:config/files.tpl' => 1,
    'file:config/track.tpl' => 1,
    'file:config/chat.tpl' => 1,
  ),
),false)) {
function content_611263206809d8_90321140 (Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>var config = {
		cdn : {
			"baseUrl"  : "<?php echo App::config("cdn.base_url");?>
",
			"adminUrl" : "<?php echo App::config("cdn.admin_url");?>
",
			"imageUrl" : "<?php echo App::config("imageurl");?>
"
		}
	};<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_assignInScope('config', array() ,false ,8);?>


<?php $_smarty_tpl->_subTemplateRender("file:config/users.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:config/files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:config/track.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:config/chat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
