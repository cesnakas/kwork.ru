<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/mobile_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_61126320701dc7_82732612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fa2ba2640a73f332e84ec2fc305eb4433abf56d' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/mobile_menu.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user_avatar.tpl' => 1,
    'file:utils/currency.tpl' => 1,
    'file:contest/contest_2019_case_mobile_menu_link.tpl' => 1,
  ),
),false)) {
function content_61126320701dc7_82732612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),1=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.tn.php','function'=>'smarty_modifier_tn',),));
?><div class="mobile-menu-hide" onclick="mobile_menu_hide();"><i class="fa fa-arrow-left"></i></div><div class="fox-dotcom-mobile-dropdown" id="dropdown-menu"><?php if ($_smarty_tpl->tpl_vars['actor']->value) {?><span class="fox-dotcom-mobile-dropdown_profile"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['actor']->value->username, 'UTF-8');?>
" class="dib v-align-m"><?php $_smarty_tpl->_subTemplateRender("file:user_avatar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profilepicture'=>$_smarty_tpl->tpl_vars['actor']->value->profilepicture,'username'=>$_smarty_tpl->tpl_vars['actor']->value->username,'size'=>"big",'class'=>"s60"), 0, false);
?></a><span class="dib v-align-m ml20 fox-dotcom-mobile-dropdown_profile_text"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['actor']->value->username, 'UTF-8');?>
" class="fox-dotcom-mobile-dropdown_profile_text_username"><?php echo $_smarty_tpl->tpl_vars['actor']->value->username;?>
</a><br><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance" class="fox-dotcom-mobile-dropdown_profile_text_balance"><?php $_smarty_tpl->_subTemplateRender("file:utils/currency.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('lang'=>$_smarty_tpl->tpl_vars['actor']->value->lang,'total'=>floor($_smarty_tpl->tpl_vars['actor']->value->totalFunds)), 0, false);
?></a></span></span><?php }
if (!$_smarty_tpl->tpl_vars['actor']->value) {
if (Translations::getLang() != Translations::EN_LANG) {?><div class="ml10 mr10 mb20"><a class="hugeGreenBtn GreenBtnStyle h40 pull-reset wMax signup-js"><?php echo smarty_modifier_t('Регистрация');?>
</a></div><?php }?><a class="foxkworkitem login-js" href="javascript:;"><i class="fa fa-sign-in"></i><?php echo smarty_modifier_t('Вход');?>
</a><?php }?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><i class="fa fa-home" aria-hidden="true"></i><?php echo smarty_modifier_t('На главную');?>
</a><?php if ($_smarty_tpl->tpl_vars['actor']->value) {?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories"><i class="fa fa-th-large" aria-hidden="true"></i><?php echo smarty_modifier_t('Категории');?>
</a><a class="foxkworkitem foxkworkitem_top-border js-notice-mobile" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/notifications"><i class="fa fa-bell" aria-hidden="true"></i><?php echo smarty_modifier_t('Уведомления');?>
<span class="notify-number-block js-notice-mobile__other-counter<?php if ($_smarty_tpl->tpl_vars['actor']->value->notify_unread_count == 0) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['actor']->value->red_notify && App::config('module.inbox_abuse.enable')) {?> notify-number-block_warning<?php }?>"><?php echo $_smarty_tpl->tpl_vars['actor']->value->notify_unread_count;?>
</span></a><?php $_smarty_tpl->_assignInScope('warn', '');
if (($_smarty_tpl->tpl_vars['warningDialogCount']->value > 0 && App::config("module.inbox_abuse.enable")) && ($_smarty_tpl->tpl_vars['actor']->value->is_available_at_weekends == 1 || ($_smarty_tpl->tpl_vars['actor']->value->is_available_at_weekends == 0 && !Helper::isWeekends()))) {
$_smarty_tpl->_assignInScope('warn', "notify-number-block_warning");
}?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox"><i class="fa fa-envelope-o" aria-hidden="true"></i><?php echo smarty_modifier_t('Сообщения');?>
<span class="notify-number-block js-notice-mobile__message-counter <?php echo $_smarty_tpl->tpl_vars['warn']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['unreadDialogCount']->value == 0) {?> style="display: none;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['unreadDialogCount']->value;?>
</span></a><?php if ($_smarty_tpl->tpl_vars['basketEnable']->value) {?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/basket"><i class="fa fa-shopping-cart" aria-hidden="true"></i><?php echo smarty_modifier_t('Корзина');
if (count($_smarty_tpl->tpl_vars['cart']->value) > 0) {?><span class="notify-number-block"><?php echo count($_smarty_tpl->tpl_vars['cart']->value);?>
</span><?php }?></a><?php }?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bookmarks"><i class="fa fa-heart" aria-hidden="true"></i><?php echo smarty_modifier_t('Избранное');?>
</a><?php if ($_smarty_tpl->tpl_vars['show2019CaseContestLink']->value) {
$_smarty_tpl->_subTemplateRender("file:contest/contest_2019_case_mobile_menu_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?><a class="foxkworkitem foxkworkitem_type"><?php echo smarty_modifier_t('Покупатель');?>
</a><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders" onclick="changeUserType(1)"><i class="fa fa-list" aria-hidden="true"></i><span class="has-orders-count-as-payer"><?php echo smarty_modifier_t('Мои заказы');?>
</span></a><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_projects" onclick="changeUserType(1)"><i class="fa fa-list-alt" aria-hidden="true"></i><?php echo smarty_modifier_t('Биржа');?>
</a><a class="foxkworkitem foxkworkitem_type"><?php echo smarty_modifier_t('Продавец');?>
</a><a class="foxkworkitem js-blocked-kworks" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new" onclick="changeUserType(2)"><i class="fa fa-plus-circle" aria-hidden="true"></i><?php echo smarty_modifier_t('Создать кворк');?>
</a><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_kworks" onclick="changeUserType(2)"><i class="fa fa-th" aria-hidden="true"></i><?php echo smarty_modifier_t('Мои кворки');?>
</a><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/projects" onclick="changeUserType(2)"><i class="fa fa-exchange" aria-hidden="true"></i><?php echo smarty_modifier_t('Биржа');?>
 <span class="italic f12"><?php ob_start();
echo WantManager::getNewWantsCount();
$_prefixVariable3 = ob_get_clean();
ob_start();
echo WantManager::getNewWantsCount();
$_prefixVariable4 = ob_get_clean();
echo smarty_modifier_tn('+%s проектов за сутки',$_prefixVariable3,$_prefixVariable4);?>
</span></a>			<?php if (false && \UserManager::isLanguageTester($_smarty_tpl->tpl_vars['actor']->value->USERID) && Translations::getLang() == Translations::DEFAULT_LANG) {?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/prize" onclick="changeUserType(2)"><i class="fa fa-gift" aria-hidden="true"></i>Розыгрыш iPhone 8<div class="round-sign">!</div></a><?php }?>			<a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_orders" onclick="changeUserType(2)"><i class="fa fa-cog" aria-hidden="true"></i><span class="has-orders-count-as-worker"><?php echo smarty_modifier_t('Заказы');?>
</span></a><?php if ($_smarty_tpl->tpl_vars['actor']->value->analytics_enable) {?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/analytics" class="foxkworkitem" onclick="changeUserType(2)"><i class="fa fa-bullseye" aria-hidden="true"></i><?php echo smarty_modifier_t('Аналитика продаж');?>
</a><?php }
if ($_smarty_tpl->tpl_vars['actor']->value && ($_smarty_tpl->tpl_vars['actor']->value->role == "moder" || $_smarty_tpl->tpl_vars['actor']->value->role == "admin")) {
$_smarty_tpl->_assignInScope('countModerKwork', ModerManager::getRedisKworkCountOnModer());?><a class="foxkworkitem <?php if ($_smarty_tpl->tpl_vars['countModerKwork']->value > 100) {?>color-red<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/moder_kwork"><i class="fa fa-user-secret" aria-hidden="true"></i><?php echo smarty_modifier_t('Модерация');
if ($_smarty_tpl->tpl_vars['countModerKwork']->value) {?> (<?php echo $_smarty_tpl->tpl_vars['countModerKwork']->value;?>
)<?php }?></a><?php }
}
if (!$_smarty_tpl->tpl_vars['actor']->value) {
if ($_smarty_tpl->tpl_vars['isTopFreelancerApp']->value) {?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_projects"><i class="fa fa-list-alt" aria-hidden="true"></i><?php echo smarty_modifier_t('Биржа');?>
</a><?php } else { ?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories"><i class="fa fa-th-large" aria-hidden="true"></i><?php echo smarty_modifier_t('Категории');?>
</a><?php }?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/terms_of_service"><i class="fa fa-list-ul"></i><?php echo smarty_modifier_t('Правила сервиса');?>
</a><a class="foxkworkitem" href="/faq"><i class="fa fa-question" aria-hidden="true"></i><?php echo smarty_modifier_t('Вопрос - Ответ');?>
</a><?php }
if ($_smarty_tpl->tpl_vars['actor']->value) {?><a class="foxkworkitem foxkworkitem_type"><?php echo smarty_modifier_t('ОБЩЕЕ');?>
</a>			<a class="foxkworkitem" href="/faq"><i class="fa fa-question" aria-hidden="true"></i><?php echo smarty_modifier_t('Вопрос - Ответ');?>
</a><?php if (Translations::isDefaultLang()) {?><a class="foxkworkitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/kwork_book"><i class="fa fa-info" aria-hidden="true"></i>Как зарабатывать на Kwork</a><?php }?><a class="foxkworkitem" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i><?php echo smarty_modifier_t('Выход');?>
</a><?php }?><a class="foxkworkitem render_desktop-js"><i class="fa fa-desktop" aria-hidden="true"></i><?php echo smarty_modifier_t('Перейти на полную версию сайта');?>
</a></div><?php }
}
