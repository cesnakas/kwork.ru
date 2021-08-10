<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:26:13
  from '/home/user20/www/test-stand20/public_html/themes/index_top_categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126255d090e8_65849542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '520b911bcc07fa837f35227fd38a8ac720348afe' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/index_top_categories.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./index_top_categories_cards.tpl' => 1,
  ),
),false)) {
function content_61126255d090e8_65849542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),));
?><div class="bgWhite"><div class="lg-centerwrap centerwrap clearfix"><div class="pt20"></div><h2 class="mt10 f26 t-align-c m-m0"><?php echo smarty_modifier_t('Выбирайте услуги');?>
</h2><div class="f18 t-align-c mt10"><?php echo smarty_modifier_t('из тысяч предложений фрилансеров в магазине Kwork');?>
</div><div class="pt20"></div><div class="pt20 m-hidden"></div>			<?php $_smarty_tpl->_subTemplateRender("file:./index_top_categories_cards.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></div><?php }
}
