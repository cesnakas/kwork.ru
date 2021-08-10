<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:26:13
  from '/home/user20/www/test-stand20/public_html/themes/index/unauthorized.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126255d01f65_39283713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18fd2b639ff355e4a9ef3b5bc5f8ae88f82c105f' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/index/unauthorized.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index_top_categories.tpl' => 1,
    'file:how_it_works_content.tpl' => 1,
    'file:promo/_blocks/banner.tpl' => 1,
    'file:index/statistics.tpl' => 1,
  ),
),false)) {
function content_61126255d01f65_39283713 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),1=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),2=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnImageUrl.php','function'=>'smarty_modifier_cdnImageUrl',),));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/dist/index.js"));?>
<div id="app"><div class="banner"><div class="centerwrap relative"><div class="headertext"><h1 class="f34 fw600"><?php echo smarty_modifier_t('Kwork – магазин и биржа фриланс-услуг');?>
</h1><span class="headertext_subtitle"><?php echo smarty_modifier_t('87%% пользователей считают Kwork гораздо более удобным,<br class="m-hidden">надежным и быстрым, чем любые биржи фриланса.');?>
</span><div class="find-service m-hidden"><general-search-index></general-search-index><?php if ($_smarty_tpl->tpl_vars['popular_cat']->value) {?><div class="font-OpenSans mt5 example-search-link m-text-center"><?php echo smarty_modifier_t('Например:');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['catalog']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['popular_cat']->value['seo'];?>
"><?php echo smarty_modifier_t($_smarty_tpl->tpl_vars['popular_cat']->value['name']);?>
</a></div><?php }?><div class="clear"></div></div><div class="color-white f16 font-OpenSans t-align-c mt20 index-advantage-block index-advantages"><div class="dib v-align-m t-align-l banner-icon outline-none"><i class="icon v-align-m ico-about-price"></i><span class="dib v-align-m ml10"><?php echo smarty_modifier_t('Десятки тысяч<br> услуг');?>
</span></div><div class="dib v-align-m t-align-l banner-icon outline-none"><i class="icon v-align-m ico-about-term"></i><span class="dib v-align-m ml10"><?php echo smarty_modifier_t('Быстрый заказ без<br>долгих обсуждений');?>
</span></div><div class="dib v-align-m t-align-l banner-icon outline-none"><i class="icon v-align-m ico-about-warranty "></i><span class="dib v-align-m ml10"><?php echo smarty_modifier_t('Оплата без риска<br>с гарантией возврата');?>
</span></div></div></div></div></div></div><?php $_smarty_tpl->_subTemplateRender("file:index_top_categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="index-market bgLightGray<?php if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {?> lazy-load_scroll-wrapper<?php }?>"><div class="lg-centerwrap centerwrap position-r"><div class="index-market__content"><h2 class="f26 index-market__title"><?php echo smarty_modifier_t("Биржа фриланса Kwork");?>
</h2><p class="f18 index-market__text"><?php echo smarty_modifier_t("Не нашли в магазине Kwork нужной услуги?<br> Разместите задание на бирже - множество<br> фрилансеров сделают свои предложения. Вам<br> останется только выбрать лучшее и начать работу.");?>
</p><div class="btnWrap t-align-c m-wMax"><a class="hugeGreenBtn hoverMe GreenBtnStyle h50 pull-reset index-market__button" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new_project"><?php echo smarty_modifier_t("Создать задание");?>
</a><a class="db mt5" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/projects"><?php echo smarty_modifier_t('Смотреть проекты на бирже');?>
</a></div></div><?php $_smarty_tpl->_assignInScope('index_market', "/index_market@x1_gray_bg.jpg");
$_smarty_tpl->_assignInScope('index_market2x', "/index_market@x2_gray_bg.jpg");
if (Translations::getLang() == Translations::EN_LANG) {
$_smarty_tpl->_assignInScope('index_market', "/index_market_en@x1_gray_bg.jpg");
$_smarty_tpl->_assignInScope('index_market2x', "/index_market_en@x2_gray_bg.jpg");
}
if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {?><img src="<?php echo smarty_modifier_cdnImageUrl("/blank.png");?>
" class="index-market__image lazy-load_scroll" data-src="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['index_market']->value);?>
" data-srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['index_market2x']->value);?>
 2x" width="350" height="356" alt=""><?php } else { ?><img class="index-market__image" src="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['index_market']->value);?>
" srcset="<?php echo smarty_modifier_cdnImageUrl($_smarty_tpl->tpl_vars['index_market2x']->value);?>
 2x" alt=""><?php }?></div></div><div class="bgWhite<?php if ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value) {?> lazy-load_scroll-wrapper<?php }?>"><div class="lg-centerwrap centerwrap pb10 clearfix"><div class="pt20"></div><h2 class="mt10 f26 t-align-c m-m0"><?php echo smarty_modifier_t('Kwork — новый подход к фрилансу');?>
</h2><div class="pt20"></div><div class="pt20 m-hidden"></div><div class="landing-how-it-works"><?php $_smarty_tpl->_subTemplateRender('file:how_it_works_content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div><div class="pt20"></div><div class="pt20 m-hidden"></div></div></div><?php $_smarty_tpl->_subTemplateRender('file:promo/_blocks/banner.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if (Translations::isDefaultLang()) {?><div class="bgLightGray<?php if ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value) {?> lazy-load_scroll-wrapper<?php }?>"><div class="lg-centerwrap centerwrap pt20"><h2 class="mt10 f26 t-align-c"><?php echo smarty_modifier_t('Реальные фриланс кейсы');?>
</h2><div class="f18 t-align-c mt10"><?php echo smarty_modifier_t('Или как  Kwork прокачивает бизнес');?>
</div><div class="clearfix real-case"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainCases']->value, 'case');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['case']->value) {
?><div class="real-case_item"><?php if ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value) {?><img src="<?php echo smarty_modifier_cdnImageUrl("/blank.png");?>
" class="lazy-load_scroll" data-src="<?php echo smarty_modifier_cdnImageUrl("/cases/avatars/".((string)$_smarty_tpl->tpl_vars['case']->value['user_login']).".jpg");?>
" width="144" height="144" alt="<?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
"><?php } else { ?><img src="<?php echo smarty_modifier_cdnImageUrl("/cases/avatars/".((string)$_smarty_tpl->tpl_vars['case']->value['user_login']).".jpg");?>
" width="144" height="144" alt="<?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
"><?php }?><div class="real-case_name"><?php echo $_smarty_tpl->tpl_vars['case']->value['user_name'];?>
</div><div class="js-multi-elipsis real-case_title" title="<?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
"><div><?php echo $_smarty_tpl->tpl_vars['case']->value['title'];?>
</div></div><div class="clearfix"><a href="/cases/<?php echo $_smarty_tpl->tpl_vars['case']->value['id'];?>
" class="real-case_link"><?php echo smarty_modifier_t('Читать полностью');?>
</a></div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="mb20 m-hidden"></div><div class="t-align-c"><a href="/cases" class="green-btn inactive real-case_btn"><?php echo smarty_modifier_t('Смотреть все кейсы');?>
</a><div class="pb40 m-hidden"></div><div class="pb20 m-visible"></div></div></div></div><?php }?><div class="dark-gray-wrap m-hidden"><div class="centerwrap index-footer-centerwrap"><div class="fontf-pnl m-text-center pb25"><div class="pb30"><?php $_smarty_tpl->_subTemplateRender("file:index/statistics.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div><div class="t-align-c"><i class="icon ico_retina ico-kwork footer_logo"></i><?php if (Translations::getLang() == Translations::EN_LANG) {?><span class="fs22" style="margin-right: 8px;">:</span><?php } else { ?><span class="fs22" style="margin: 0 8px;">–</span><?php }?><span class="fs22 after-logo-text fontf-pnr"><?php echo smarty_modifier_t('супер фриланс');?>
</span></div><div class="index-footer pt20"><p class="mb10 t-align-c"><?php echo smarty_modifier_t('Kwork – это потрясающе удобная фриланс платформа, которая включает:');?>
</p><ol class="index-footer-columns"><li><?php echo smarty_modifier_t('<strong>Магазин фриланс услуг.</strong> Фрилансеры оформляют свои услуги в виде кворков, то есть в виде товаров, которые можно купить в один клик. Идеально подходит для типовых услуг: логотипы, баннеры, SEO и др... То есть услуги и работа исполнителей продается как товар, а это экономит массу времени, денег и нервов. Нет опыта во фрилансе – начните именно с магазина, в нем разберется даже ребенок.');?>
</li><li><?php echo smarty_modifier_t('<strong>Биржа фриланса.</strong> Вы создаете задание, и оно становится доступно тысячам фрилансеров, которые могут отправить вам предложения. Остается только выбрать лучшее и начать работу. Такой фриланс – это идеальный вариант для решения больших и уникальных задач. Если не удалось найти подходящей услуги в магазине, то биржа фриланса – ваш выбор. ');?>
</li></ol><p><?php echo 'Фриланс сервис Kwork – это 100% гарантия возврата средств в случае срыва заказа. Уникальная система рейтингов фрилансеров способствует тому, что во фриланс сервисе Kwork остаются только лучшие исполнители, а плохие постоянно вытесняются. Для хороших специалистов, кто ищет удаленную работу, Kwork – идеальное место. Здесь нет клонов, демпинга и конкуренции с плохими фрилансерами, зато есть тысячи хороших заказчиков, готовых платить за ваши услуги.';?>
</p></div></div></div></div><?php }
}
