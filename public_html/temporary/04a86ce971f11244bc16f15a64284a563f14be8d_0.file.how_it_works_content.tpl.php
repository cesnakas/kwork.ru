<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:26:13
  from '/home/user20/www/test-stand20/public_html/themes/how_it_works_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126255d3eae4_97944641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04a86ce971f11244bc16f15a64284a563f14be8d' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/how_it_works_content.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61126255d3eae4_97944641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnImageUrl.php','function'=>'smarty_modifier_cdnImageUrl',),1=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),));
?><div class="how-it-works-content clearfix"><div class="icons t-align-c">		<div class="step outline-none"><div class="about-index_item_image"><?php if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value || ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value && $_smarty_tpl->tpl_vars['pageName']->value == "index")) {?><img src="<?php echo smarty_modifier_cdnImageUrl("/blank.png");?>
" class="lazy-load_scroll" data-src="<?php echo smarty_modifier_cdnImageUrl("/howitworks_1.png");?>
" width="100" height="100" alt=""><?php } else { ?><img src="<?php echo smarty_modifier_cdnImageUrl("/howitworks_1.png");?>
" width="100" height="100" alt=""><?php }?></div><h3 class="fontf-pnb mb10 ta-left fs18"><?php echo smarty_modifier_t("Выберите услугу");?>
</h3><p class="m-hidden"><?php echo smarty_modifier_t("Десятки тысяч услуг в каталоге и&nbsp;отличные предложения на бирже");?>
<span class="tooltipster tooltip_circle tooltip_circle--light tooltip_circle--hover ml5" data-tooltip-text="<?php echo smarty_modifier_t("Тысячи фрилансеров размещают свои услуги на сайте Kwork. Для поиска услуг используйте каталог, а также поисковую строку. Или разместите свой проект на бирже Kwork и получите множество предложений от профи.");?>
"data-tooltip-theme="dark">?</span></p><p class="m-visible"><?php echo smarty_modifier_t("Среди десятка тысяч услуг");?>
</p></div>		<div class="step outline-none"><div class="about-index_item_image"><?php if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value || ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value && $_smarty_tpl->tpl_vars['pageName']->value == "index")) {?><img src="<?php echo smarty_modifier_cdnImageUrl("/blank.png");?>
" class="lazy-load_scroll" data-src="<?php echo smarty_modifier_cdnImageUrl("/howitworks_2.png");?>
" width="100" height="100" alt=""><?php } else { ?><img src="<?php echo smarty_modifier_cdnImageUrl("/howitworks_2.png");?>
" width="100" height="100" alt=""><?php }?></div><h3 class="fontf-pnb mb10 ta-left fs18"><?php echo smarty_modifier_t("Оплатите");?>
</h3><p><?php echo smarty_modifier_t("Один клик, и услуга<br>заказана");?>
<span class="m-hidden tooltipster tooltip_circle tooltip_circle--light tooltip_circle--hover ml5" data-tooltip-text="<?php echo smarty_modifier_t("Нажмите кнопку «Купить» на странице услуги. Деньги будут перечислены продавцу после того, как он выполнит работу, и вы её одобрите.");?>
"data-tooltip-theme="dark">?</span></p><i class="icon icon_info-ispolnitel ico-arrow-1 sm-hidden"></i><i class="icon icon_info-ispolnitel ico-arrow-2 sm-hidden"></i></div>		<div class="step outline-none"><div class="about-index_item_image"><?php if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value || ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value && $_smarty_tpl->tpl_vars['pageName']->value == "index")) {?><img src="<?php echo smarty_modifier_cdnImageUrl("/blank.png");?>
" class="lazy-load_scroll" data-src="<?php echo smarty_modifier_cdnImageUrl("/howitworks_3.png");?>
" width="100" height="100" alt=""><?php } else { ?><img src="<?php echo smarty_modifier_cdnImageUrl("/howitworks_3.png");?>
" width="100" height="100" alt=""><?php }?></div><h3 class="fontf-pnb mb10 ta-left fs18"><?php echo smarty_modifier_t("Получите результат");?>
</h3><p class="m-hidden"><?php echo smarty_modifier_t("Качественный&nbsp;результат&nbsp;в&nbsp;срок и&nbsp;гарантия&nbsp;возврата&nbsp;средств");?>
<span class="tooltipster tooltip_circle tooltip_circle--light tooltip_circle--hover ml5" data-tooltip-text="<?php echo smarty_modifier_t("Исполнители стараются работать быстро и качественно – от этого зависит их рейтинг и доходы. Если работа не выполнена в срок, вы можете отменить заказ в один клик.");?>
"data-tooltip-theme="dark">?</span></p><p class="m-visible"><?php echo smarty_modifier_t("Качественно и в срок");?>
</p></div></div></div><?php }
}
