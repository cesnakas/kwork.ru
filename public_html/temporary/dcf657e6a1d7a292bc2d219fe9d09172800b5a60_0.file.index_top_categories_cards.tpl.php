<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:26:13
  from '/home/user20/www/test-stand20/public_html/themes/index_top_categories_cards.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126255d288e8_66185682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf657e6a1d7a292bc2d219fe9d09172800b5a60' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/index_top_categories_cards.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61126255d288e8_66185682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),1=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnImageUrl.php','function'=>'smarty_modifier_cdnImageUrl',),));
?><div class="top-categories d-flex flex-wrap justify-content-center<?php if ($_smarty_tpl->tpl_vars['cardsLayout']->value) {?> cards-layout<?php }?>"><?php $_smarty_tpl->_assignInScope('subcategoryMaxShow', 3);
$_smarty_tpl->_assignInScope('imageDefault_x1', '/collage/default_category@x1.jpg');
$_smarty_tpl->_assignInScope('imageDefault_x2', '/collage/default_category@x2.jpg');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (array_slice(array(),0,8)), 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->_assignInScope('subcategoryCount', count($_smarty_tpl->tpl_vars['category']->value->cats));
$_smarty_tpl->_assignInScope('categoryUrl', "/categories/".((string)$_smarty_tpl->tpl_vars['category']->value->seo));
ob_start();
echo Translations::getLang();
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('image', "/collage/categories_first_level/".$_prefixVariable4."/".((string)$_smarty_tpl->tpl_vars['category']->value->seo));
$_smarty_tpl->_assignInScope('image_x1', ((string)$_smarty_tpl->tpl_vars['image']->value)."@x1.jpg");
$_smarty_tpl->_assignInScope('image_x2', ((string)$_smarty_tpl->tpl_vars['image']->value)."@x2.jpg");
$_smarty_tpl->_assignInScope('image_x1_webp', ((string)$_smarty_tpl->tpl_vars['image']->value)."@x1.webp");
$_smarty_tpl->_assignInScope('image_x2_webp', ((string)$_smarty_tpl->tpl_vars['image']->value)."@x2.webp");?>		<?php if (!file_exists(((string)$_smarty_tpl->tpl_vars['imagedir']->value).((string)$_smarty_tpl->tpl_vars['image_x1']->value))) {
$_smarty_tpl->_assignInScope('image_x1', $_smarty_tpl->tpl_vars['imageDefault_x1']->value);
}
if (!file_exists(((string)$_smarty_tpl->tpl_vars['imagedir']->value).((string)$_smarty_tpl->tpl_vars['image_x2']->value))) {
$_smarty_tpl->_assignInScope('image_x2', $_smarty_tpl->tpl_vars['imageDefault_x2']->value);
}?><div class="top-categories-col<?php if ($_smarty_tpl->tpl_vars['cardsLayout']->value) {?> cards-layout-item<?php }?>"><div class="top-category"><a href="<?php echo $_smarty_tpl->tpl_vars['categoryUrl']->value;?>
" class="top-category-link"></a><div class="top-category-content"><ul><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, (array_slice($_smarty_tpl->tpl_vars['category']->value->cats,0,$_smarty_tpl->tpl_vars['subcategoryMaxShow']->value)), 'subcategory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->value) {
?><li><a href="/categories/<?php echo $_smarty_tpl->tpl_vars['subcategory']->value->seo;?>
"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value->short_name;?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['subcategoryCount']->value > $_smarty_tpl->tpl_vars['subcategoryMaxShow']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['categoryUrl']->value;?>
"><?php echo smarty_modifier_t('И еще %s %s',($_smarty_tpl->tpl_vars['subcategoryCount']->value-$_smarty_tpl->tpl_vars['subcategoryMaxShow']->value),declension($_smarty_tpl->tpl_vars['subcategoryCount']->value-$_smarty_tpl->tpl_vars['subcategoryMaxShow']->value,array(Translations::t('рубрика'),Translations::t('рубрики'),Translations::t('рубрик'))));?>
</a></li><?php }?></ul></div><?php $_smarty_tpl->_assignInScope('image_webp_exist', (file_exists(((string)$_smarty_tpl->tpl_vars['imagedir']->value).((string)$_smarty_tpl->tpl_vars['image_x1_webp']->value)) && file_exists(((string)$_smarty_tpl->tpl_vars['imagedir']->value).((string)$_smarty_tpl->tpl_vars['image_x2_webp']->value))));
if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {?><picture class="lazy-load lazy-load_webp"><?php if ($_smarty_tpl->tpl_vars['image_webp_exist']->value) {?><source data-srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x1_webp']->value);?>
 1x, <?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x2_webp']->value);?>
 2x" type="image/webp"><?php }?><source data-srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x1']->value);?>
 1x, <?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x2']->value);?>
 2x" type="image/jpeg"><img src="<?php echo smarty_modifier_cdnImageUrl("/collage/categories_first_level/blank.png");?>
" data-src="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x1']->value);?>
" data-srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x2']->value);?>
 2x" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
"></picture><?php } else { ?><picture><?php if ($_smarty_tpl->tpl_vars['image_webp_exist']->value) {?><source srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x1_webp']->value);?>
 1x, <?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x2_webp']->value);?>
 2x" type="image/webp"><?php }?><source srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x1']->value);?>
 1x, <?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x2']->value);?>
 2x" type="image/jpeg"><img src="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x1']->value);?>
" srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['image_x2']->value);?>
 2x" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
"></picture><?php }?></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
}
