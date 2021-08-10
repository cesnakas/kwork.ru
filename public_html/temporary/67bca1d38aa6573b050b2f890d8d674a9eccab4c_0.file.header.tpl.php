<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263206410e7_07363285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67bca1d38aa6573b050b2f890d8d674a9eccab4c' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/header.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_relations.tpl' => 1,
    'file:header_google_tag_manager.tpl' => 1,
    'file:mobile_menu.tpl' => 1,
    'file:header_top_mobile.tpl' => 1,
    'file:lang_selector.tpl' => 1,
    'file:user_avatar.tpl' => 1,
    'file:header_profile.tpl' => 1,
    'file:components\\header_funds.tpl' => 1,
    'file:components\\header_notification.tpl' => 1,
    'file:components\\header_inbox.tpl' => 1,
    'file:cart.tpl' => 1,
  ),
),false)) {
function content_611263206410e7_07363285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),1=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.timeLeft.php','function'=>'smarty_modifier_timeLeft',),2=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnImageUrl.php','function'=>'smarty_modifier_cdnImageUrl',),3=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/function.control.php','function'=>'smarty_function_control',),4=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),));
?><!DOCTYPE html>
<html lang="<?php if (is_null($_smarty_tpl->tpl_vars['i18n']->value)) {?>ru<?php } else {
echo $_smarty_tpl->tpl_vars['i18n']->value;
}?>" <?php if ($_smarty_tpl->tpl_vars['isMobile']->value) {
if ($_smarty_tpl->tpl_vars['isTablet']->value) {?>class="tablet"<?php } else { ?>class="mobile"<?php }
}?>><head><?php $_smarty_tpl->_subTemplateRender("file:head_relations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></head><body id="body" class="<?php if ($_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['onlyDesktopVersion']->value) {?>is_mobile<?php }
if (strstr($_SERVER['HTTP_USER_AGENT'],'KworkMobileAppWebView')) {?> kwork-mobile-app<?php }
if ($_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {?> page-speed-loading<?php }
if ($_smarty_tpl->tpl_vars['pageModuleName']->value == "chat") {?> is_chat<?php }?>"><?php $_smarty_tpl->_subTemplateRender("file:header_google_tag_manager.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['actor']->value && $_smarty_tpl->tpl_vars['actor']->value->show_poll_notify && $_smarty_tpl->tpl_vars['canonicalUrl']->value != ($_smarty_tpl->tpl_vars['baseurl']->value).('/poll')) {?><div class="abandoned-basket m-hidden"><div class="abandoned-basket__layout"><span><?php echo smarty_modifier_t('Оставьте свое мнение о Kwork и получите награду в профиль.');?>
</span><div onclick="location.href = '/poll?hash=<?php echo $_smarty_tpl->tpl_vars['actor']->value->pollHash;?>
&type=notify'" class="green-btn ml20"><?php echo smarty_modifier_t('Перейти к опросу');?>
</div></div><div class="js-poll-notify__close abandoned-basket__close popup-close cur" style="top:25px;"></div></div><?php }
echo '<script'; ?>
 type="application/ld+json">{"@context" : "http://schema.org","@type" : "Organization","name" : "<?php echo smarty_modifier_t('kwork.ru - магазин фриланс-услуг');?>
",<?php if (Translations::isDefaultLang()) {?>"url" : "https://kwork.ru/",<?php } else { ?>"url" : "https://kwork.com/",<?php }?>"sameAs" : [<?php if (Translations::isDefaultLang()) {?>"https://www.facebook.com/kworkru","https://twitter.com/kworkru","https://vk.com/kwork_kwork"<?php } else { ?>"https://www.facebook.com/KworkProject","https://twitter.com/KworkProject"<?php }?>]}<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="application/ld+json">{"@context": "http://schema.org","@type": "Organization",<?php if (Translations::isDefaultLang()) {?>"url": "https://kwork.ru/","logo": "https://kwork.ru/images/logo-winter.png"<?php } else { ?>"url": "https://kwork.com/","logo": "https://kwork.com/images/logo-winter.png"<?php }?>}<?php echo '</script'; ?>
><div id="loadme"></div><?php if ($_smarty_tpl->tpl_vars['actor']->value) {?>
				<?php echo '<script'; ?>
>
					function loadContent(elementSelector, sourceURL) {
						$("" + elementSelector + "").load("" + sourceURL + "");
					}

					$(document).on('click', '.change-type-user-js', function () {
						$('.change-type-user-js').removeClass('active');
						$(this).addClass('active');
						changeUserType($(this).attr('data-type'))
					});

					function changeUserType(userType, reload) {
						$.get('/change_usertype?usertype=' + userType, function (answer) {
							if (typeof (yaCounter32983614) !== 'undefined') {
								if (userType == 1) {
									yaCounter32983614.reachGoal('CHANGE-TYPE-ZAKAZCHIK');
								} else {
									yaCounter32983614.reachGoal('CHANGE-TYPE-ISPOLNITEL');
								}
							}
							if (reload) {
								if (userType == 1) {
									location.href = '/';
								} else if (userType == 2) {
									location.href = '/';
								} else {
									location.reload();
								}
							}
						});
					}
					$(window).load(function () {<?php $_smarty_tpl->assign('sessvalue' , insert_session_get_and_clean (array('value' => 'a', 'param' => 'api_after_action'),$_smarty_tpl), true);
if ($_smarty_tpl->tpl_vars['sessvalue']->value == 'cart') {?>CartModule.makeOrder();<?php }?>});
				<?php echo '</script'; ?>
>
			<?php }?><div class="nav-fox" id="foxmobilenav" style="display:none"><?php $_smarty_tpl->_subTemplateRender("file:mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div><div class="header relative<?php if ($_smarty_tpl->tpl_vars['pageName']->value == 'index') {?> is_index<?php }?>"><div class="header_top"><div class="centerwrap lg-centerwrap relative"><div class="headertop"><?php $_smarty_tpl->_subTemplateRender("file:header_top_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="headertop-desktop m-hidden clearfix"><div class="brand-image"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><i class="icon ico_retina ico-kwork<?php if (Translations::getLang() == Translations::EN_LANG) {?> beta<?php }?>"></i><span class="f9 logo_subtext <?php if (Translations::getLang() == Translations::EN_LANG) {?>logo_subtext_en<?php }?>"><?php echo smarty_modifier_t('Супер фриланс');?>
</span></a></div><div class="search<?php if (Translations::getLang() == Translations::EN_LANG) {?> beta<?php }?>"><div id="general-search"><general-search default-search-encoded='<?php echo rawurlencode($_smarty_tpl->tpl_vars['searchValue']->value);?>
'></general-search></div></div><?php $_smarty_tpl->assign('onlineUserCount' , insert_onlineUserCount (array(),$_smarty_tpl), true);
$_smarty_tpl->assign('live_date' , insert_last_order_time (array(),$_smarty_tpl), true);
if (Translations::isDefaultLang() || $_smarty_tpl->tpl_vars['onlineUserCount']->value >= 200) {?><div class="online-count" style="<?php if ($_smarty_tpl->tpl_vars['live_date']->value >= 2760) {?>margin-top:18px;<?php } else { ?>margin-top:9px;<?php }?>"><div class="font-OpenSans f14 ml10" style="color: #ABABAB;"><i class="circle-online"></i><?php echo smarty_modifier_t('Пользователей онлайн:');?>
 <?php echo $_smarty_tpl->tpl_vars['onlineUserCount']->value;?>
</div><?php if ($_smarty_tpl->tpl_vars['live_date']->value < 2760) {?><div class="font-OpenSans f14 ml10" style="color: #ABABAB;"><i class="circle-ordercount"></i><?php echo smarty_modifier_t('Последний заказ:');?>
 <?php echo smarty_modifier_timeLeft($_smarty_tpl->tpl_vars['live_date']->value,false,'назад',1,true);?>
</div><?php }?></div><?php }?><input type="hidden" class="needCheckNotify" value="<?php if ($_smarty_tpl->tpl_vars['actor']->value) {?>1<?php } else { ?>0<?php }?>"/><?php if ($_smarty_tpl->tpl_vars['actor']->value) {
if (false) {?><a class="win-iphone8 promo_top_banner border-box<?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'payer') {?> win-iphone8-payer<?php } else { ?> win-iphone8-buyer<?php }
if (floor($_smarty_tpl->tpl_vars['actor']->value->totalFunds) > 0) {?> win-iphone8-balance<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/prize"><img src="<?php echo smarty_modifier_cdnImageUrl("/iphone8.png");?>
" width="137" height="50" alt="Выиграй iPhone 8"></a><?php }?><div class="logoutheader"><?php if (App::config("module.lang.en_site_enable") && $_smarty_tpl->tpl_vars['actor']->value->lang == Translations::DEFAULT_LANG && !$_smarty_tpl->tpl_vars['actor']->value->disableEn) {
$_smarty_tpl->_subTemplateRender("file:lang_selector.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?><div class="usernamebox droparrow" style="background: none;"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['actor']->value->username, 'UTF-8');?>
"><span class="userimage"><?php $_smarty_tpl->_subTemplateRender("file:user_avatar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('profilepicture'=>$_smarty_tpl->tpl_vars['actor']->value->profilepicture,'username'=>$_smarty_tpl->tpl_vars['actor']->value->username,'size'=>"medium",'class'=>"s28"), 0, false);
?></span><span class="dib userdata"><span class="menu usernamebox_user_name db" <?php if ($_smarty_tpl->tpl_vars['actor']->value && $_smarty_tpl->tpl_vars['actor']->value->isVirtual) {?>style="color:yellow"<?php }?>><?php echo $_smarty_tpl->tpl_vars['actor']->value->username;?>
</span><?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'payer') {?><span id="usertypelabel" class="uppercase f9 font-OpenSans db"><?php echo smarty_modifier_t('Покупатель');?>
</span><?php } elseif ($_smarty_tpl->tpl_vars['actor']->value->type == 'worker') {?><span id="usertypelabel" class="uppercase f9 font-OpenSans db"><?php echo smarty_modifier_t('Продавец');?>
</span><?php }?></span></a><div class="clear"></div><div class="dropdownbox dropdownbox-profile" style="display: none"><?php $_smarty_tpl->_subTemplateRender("file:header_profile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></div><?php $_smarty_tpl->_subTemplateRender("file:components\header_funds.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:components\header_notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:components\header_inbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['basketEnable']->value) {
$_smarty_tpl->_subTemplateRender("file:cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
if ($_smarty_tpl->tpl_vars['actor']->value->type == "payer") {?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new_project" class="orange_button button_create_task place_order js-sms-verification-action"><?php echo smarty_modifier_t('Создать задание');?>
</a><?php }?><a onclick="if (typeof (yaCounter32983614) !== 'undefined') {yaCounter32983614.reachGoal('ADD-KWORK');return true;}" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new" id="newkworkbutton" <?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'payer') {?>style="display:none"<?php }?> class="js-blocked-kworks pull-right GreenBtnStyle h24 mt15"><i class="fa fa-plus v-align-m"></i><span class="dib v-align-m ml5 uppercase"><?php echo smarty_modifier_t('Кворк');?>
</span></a><div class="clear"></div></div>								<?php if (Translations::getLang() == Translations::DEFAULT_LANG) {?>
										<?php echo '<script'; ?>
>
											function promoTopBannerCenter() {
												var margin, leftSideWidth, rightSideWidth, fullWidth;
												var headertop = $('.headertop');
												var brandImage = $('.headertop .brand-image:visible');
												var search = $('.headertop .search:visible');
												var onlineCount = $('.headertop .online-count:visible');
												var logoutHeader = $('.headertop .logoutheader:visible');
												var promoTopBanner = $('.promo_top_banner ');
												var minMargin = 10; // минимальная длина отступов от баннера

												leftSideWidth = 0;
												if (brandImage.length) {
													leftSideWidth += brandImage.width();
												}
												if (search.length) {
													leftSideWidth += search.width() + parseInt(search.css('margin-left'));
												}
												if (onlineCount.length) {
													leftSideWidth += onlineCount.width() + parseInt(onlineCount.css('margin-left'));
												}

												rightSideWidth = 0;
												if (logoutHeader.length) {
													rightSideWidth += logoutHeader.width();
													<?php if ($_smarty_tpl->tpl_vars['actor']->value->type == 'payer') {?>rightSideWidth -= 10;<?php }?>
												}

												fullWidth = $('.headertop').width();
												margin = Math.round((fullWidth - leftSideWidth - rightSideWidth - promoTopBanner.width()) / 2);

												if (headertop.width() - (leftSideWidth + rightSideWidth + promoTopBanner.width() + minMargin) > 0) {
													if (margin !== undefined) {
														promoTopBanner.css({'margin-left': margin + 'px'}).show();
													} else {
														promoTopBanner.show();
													}
												} else {
													promoTopBanner.hide();
												}
											}

											promoTopBannerCenter();
											window.onresize = promoTopBannerCenter;
										<?php echo '</script'; ?>
>
									<?php }
} else { ?>								<?php echo '<script'; ?>
>var userLoginLength = <?php echo $_smarty_tpl->tpl_vars['userLoginLength']->value;?>
;var countryList = [];var countriesWithoutWithdrawal = [];<?php echo '</script'; ?>
><div class="headeright"><ul class="clearfix"><li><a href="javascript:;" class="login-js"><?php echo smarty_modifier_t('Вход');?>
</a></li><?php if (Translations::isDefaultLang()) {?><li><a href="javascript:;" class="signup-js register-link"><?php echo smarty_modifier_t('Регистрация');?>
</a></li><?php }
if (!$_smarty_tpl->tpl_vars['actor']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new_project" class="orange_button button_create_task place_order"><?php echo smarty_modifier_t('Создать задание');?>
</a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/for-sellers" class="pr0"><?php echo smarty_modifier_t('Фрилансер?');?>
</a></li><?php }?></ul></div><?php }?></div><div class="clear"></div></div></div><?php echo smarty_function_control(array('name'=>"components\header_categories"),$_smarty_tpl);?>
</div></div><?php if (!$_smarty_tpl->tpl_vars['pageSpeedMobile']->value && !$_smarty_tpl->tpl_vars['pageSpeedDesktop']->value && ($_smarty_tpl->tpl_vars['pageName']->value != 'cat' || $_smarty_tpl->tpl_vars['actor']->value)) {
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/dist/general-search.js"));
}?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userRefillType']->value;?>
" class="user-payment-method" /><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userRefillTypeSaved']->value;?>
" class="user-payment-saved" /><div class="all_page<?php if ($_smarty_tpl->tpl_vars['pageModuleName']->value) {?> page-<?php if ($_smarty_tpl->tpl_vars['pageModuleName']->value == "chat") {?>conversation<?php } else {
echo $_smarty_tpl->tpl_vars['pageModuleName']->value;
}
}
if ($_smarty_tpl->tpl_vars['pageName']->value == 'index') {?> is_index<?php } elseif ($_smarty_tpl->tpl_vars['pageName']->value == 'land') {?> is_land<?php } elseif ($_smarty_tpl->tpl_vars['pageName']->value == 'cat') {?> is_cat<?php }?>"><?php if (App::config("category.color_view")) {?><div class="overlay_menu"></div><?php }
}
}
