<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126320aa27b1_48271421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f4d5e6f47b5563891ca543eea0dd36b5773d9c5' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/footer.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer_pagespeed.tpl' => 1,
    'file:config/footer.tpl' => 1,
    'file:footer_base.tpl' => 1,
  ),
),false)) {
function content_61126320aa27b1_48271421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),));
if ($_smarty_tpl->tpl_vars['pageModuleName']->value != "chat") {?><div class="substrate-footer"></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['pageModuleName']->value != "chat") {?><div class="clear"></div><div class="footer m-hidden<?php if ($_smarty_tpl->tpl_vars['pageName']->value == "index") {?> is_index<?php }?>"><div class="lg-centerwrap centerwrap footertop"><div class="bottomLinks <?php if (Translations::getLang() == Translations::EN_LANG) {?>en<?php }?>"><div class='linksBlock'><span class="linksBlockTitle"><?php echo smarty_modifier_t('О Kwork');?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/about"><?php echo smarty_modifier_t('О проекте');?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/terms"><?php echo smarty_modifier_t('Пользовательское соглашение');?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/privacy"><?php echo smarty_modifier_t('Политика конфиденциальности');?>
</a></div><div class='linksBlock'><span class="linksBlockTitle"><?php echo smarty_modifier_t('Помощь');?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/terms_of_service"><?php echo smarty_modifier_t('Правила сервиса');?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/faq"><?php echo smarty_modifier_t('Вопрос - Ответ');?>
</a><?php if (App::config("module.support_enable")) {?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/support"><?php echo smarty_modifier_t('Служба поддержки');?>
</a><?php }?><a href="/" class="render_mobile-js" <?php if (!$_smarty_tpl->tpl_vars['isMobile']->value || !$_smarty_tpl->tpl_vars['onlyDesktopVersion']->value) {?>style="display:none"<?php }?>><?php echo smarty_modifier_t('Перейти на мобильную версию');?>
</a></div><div class="linksBlock"><span class="linksBlockTitle"><?php echo smarty_modifier_t('Полезное');?>
</span><?php if (Translations::isDefaultLang()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/for-sellers"><?php echo smarty_modifier_t('Фрилансеру');?>
</a><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/for-sellers"><?php echo smarty_modifier_t('Фрилансеру');?>
</a><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['catalog']->value;?>
"><?php echo smarty_modifier_t('Категории');?>
</a><?php if (Translations::isDefaultLang()) {?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/kwork_book"><span class="label-new">Новое</span>Как зарабатывать на Kwork</a><?php }?></div><div class="linksBlock"><span class="linksBlockTitle"><?php echo smarty_modifier_t('Сообщество');?>
</span><?php if (Translations::isDefaultLang()) {?><a href="http://blog.kwork.ru" target="_blank"><?php echo smarty_modifier_t('Блог Кворк');?>
</a><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/cases"><?php echo smarty_modifier_t('Кейсы');?>
</a><?php }?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/partners"><?php echo smarty_modifier_t('Партнерская программа');?>
</a><?php if (Translations::getLang() == Translations::EN_LANG) {?><div class="footer__correct-currency"><?php echo Translations::getShortCurrencyByLang(Translations::EN_LANG);?>
 <?php echo Translations::getCurrencyByLang(Translations::EN_LANG);?>
</div><?php }?></div><div class="linksBlock"><?php if (Translations::isDefaultLang()) {?><a href="http://mirafox.com" class="dib mr18 cur-hover" target="_blank"><i class="icon ico-mirafoxLogo"></i></a><div class="socialIcons"><a href="https://vk.com/kwork_kwork" class="icon ico-circle-vk-hover" target="_blank"></a><a href="https://www.facebook.com/kworkru" class="icon ico-circle-fb-hover" target="_blank"></a><a href="https://twitter.com/kworkru" class="icon ico-circle-tw-hover" target="_blank"></a></div><div class="dib f13 copyright">&copy; 2015 - <?php echo $_smarty_tpl->tpl_vars['curYear']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</div><?php } else { ?><a href="http://mirafox.com/en/" class="dib mr18 cur-hover" target="_blank"><i class="icon ico-mirafoxLogo"></i></a><div class="socialIcons"><a href="https://twitter.com/KworkProject" class="icon ico-circle-tw-hover" target="_blank"></a><a href="https://www.facebook.com/KworkProject" class="icon ico-circle-fb-hover" target="_blank"></a></div><div class="dib f13 copyright">&copy; 2018 - <?php echo $_smarty_tpl->tpl_vars['curYear']->value;?>
 <?php echo smarty_modifier_t($_smarty_tpl->tpl_vars['site_name']->value);?>
</div><?php }?></div></div><?php if (Translations::getLang() === Translations::EN_LANG && App::config("module.en_bugreport.enable")) {?><div class="mt20">Press CTRL+ENTER to report a bug or a mistake</div><?php }?><div class="clear"></div></div><a href="#" class="scrollup"><i class="fa fa-chevron-up" aria-hidden="true"></i></a></div><?php }
if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {
$_smarty_tpl->_subTemplateRender("file:footer_pagespeed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
$_smarty_tpl->_subTemplateRender("file:config/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer_base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
