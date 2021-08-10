<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/head_relations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263206717b1_81041503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efeeb74746226c514679d2f5c679062d97c79aa5' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/head_relations.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head_favicon.tpl' => 1,
    'file:config/header.tpl' => 1,
    'file:head_scripts.tpl' => 1,
  ),
),false)) {
function content_611263206717b1_81041503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),1=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),2=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/function.to_js.php','function'=>'smarty_function_to_js',),));
if ($_smarty_tpl->tpl_vars['alternateUrls']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alternateUrls']->value, 'href', false, 'hreflang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hreflang']->value => $_smarty_tpl->tpl_vars['href']->value) {
?><link rel="alternate" href="https://<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" hreflang="<?php echo $_smarty_tpl->tpl_vars['hreflang']->value;?>
" /><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><meta name="format-detection" content="telephone=no"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title><?php if ($_smarty_tpl->tpl_vars['mtitle']->value != '') {
echo smarty_modifier_t($_smarty_tpl->tpl_vars['mtitle']->value);
} else {
if ($_smarty_tpl->tpl_vars['pagetitle']->value != '') {
echo smarty_modifier_t($_smarty_tpl->tpl_vars['pagetitle']->value);?>
 - Kwork<?php }
}?></title><meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['mdesc']->value) {
echo $_smarty_tpl->tpl_vars['mdesc']->value;
} else {
if ($_smarty_tpl->tpl_vars['pagetitle']->value) {
echo smarty_modifier_t($_smarty_tpl->tpl_vars['pagetitle']->value);
}
if ($_smarty_tpl->tpl_vars['pagetitle']->value && $_smarty_tpl->tpl_vars['metadescription']->value) {?> - <?php }
if ($_smarty_tpl->tpl_vars['metadescription']->value) {
echo $_smarty_tpl->tpl_vars['metadescription']->value;
}
}?>"><meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['metakeywords']->value != '') {
echo smarty_modifier_t($_smarty_tpl->tpl_vars['metakeywords']->value);
} else {
if ($_smarty_tpl->tpl_vars['mtags']->value != '') {
echo smarty_modifier_t($_smarty_tpl->tpl_vars['mtags']->value);
} else {
if ($_smarty_tpl->tpl_vars['pagetitle']->value != '') {
echo smarty_modifier_t($_smarty_tpl->tpl_vars['pagetitle']->value);
}
echo $_smarty_tpl->tpl_vars['site_name']->value;
}
}?>"><?php if ($_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['isTablet']->value && !$_smarty_tpl->tpl_vars['onlyDesktopVersion']->value) {?><meta name="viewport" id="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/><?php } else { ?><meta name="viewport" id="viewport" content="width=1024"/><?php }
if ($_smarty_tpl->tpl_vars['isMultiApp']->value) {
if ($_smarty_tpl->tpl_vars['canonicalKworkUrl']->value) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonicalKworkUrl']->value;?>
" /><?php }
} else {
if ($_smarty_tpl->tpl_vars['canonicalUrl']->value) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonicalUrl']->value;?>
" /><?php }
}
if (App::isMirror()) {?><meta name="robots" content="noindex, nofollow"/><?php } elseif ($_smarty_tpl->tpl_vars['isNoIndex']->value == 1) {?><meta name="robots" content="noindex, follow"/><?php }
echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/fonts.css"),"screen");
if ($_smarty_tpl->tpl_vars['isWorkbayApp']->value) {
echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/fontgothampro.css"),"screen");
echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/dist/workbay.css"),"screen");
}
if (!$_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {?>	<?php if ($_smarty_tpl->tpl_vars['pageSpeedDesktop']->value && $_smarty_tpl->tpl_vars['pageName']->value != "view") {?>		<?php echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/minified_basic.css"),"screen");
} else {
echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/minified.css"),"screen");
}
if ($_smarty_tpl->tpl_vars['pageName']->value == "land") {
echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/land.css"),"screen");
}
} else { ?>	<style><?php echo $_smarty_tpl->tpl_vars['criticalStyles']->value;?>
</style><?php }
$_smarty_tpl->_subTemplateRender("file:head_favicon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><meta http-equiv="X-UA-Compatible" content="IE=edge" /><?php if ($_smarty_tpl->tpl_vars['pageName']->value == "index") {?><meta name="yandex-verification" content="b9ed2660bbff1e2f" /><?php }
if (Translations::isDefaultLang()) {
echo '<script'; ?>
>var translates = {};<?php echo '</script'; ?>
><?php } else {
ob_start();
echo Translations::getLang();
$_prefixVariable2=ob_get_clean();
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/".$_prefixVariable2.".js"),$_smarty_tpl->tpl_vars['pageSpeedMobile']->value);
}
$_smarty_tpl->_subTemplateRender("file:config/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
>var ORIGIN_URL = '<?php echo App::config('originurl');?>
';var KWORK_BASE_URL = '<?php echo App::config('kwork_baseurl');?>
';var CANONICAL_ORIGIN_URL = '<?php echo $_smarty_tpl->tpl_vars['canonicalOriginUrl']->value;?>
';var IS_MIRROR = <?php if (App::isMirror()) {?>1<?php } else { ?>0<?php }?>;var IS_BILL_ENABLE = 0;var USER_ID = "<?php echo $_smarty_tpl->tpl_vars['actor']->value->id;?>
";var PULL_MODULE_ENABLE = false;var MESSAGE_SOUND_ENABLE = <?php if ($_smarty_tpl->tpl_vars['actor']->value && $_smarty_tpl->tpl_vars['actor']->value->message_sound) {?>1<?php } else { ?>0<?php }?>;var MIN_LANG_PERCENT = "<?php echo KworkManager::MIN_LANG_PERCENT;?>
";var USER_REFILL_SYSTEM = 1;var BILL_COMISSION = 0;<?php if ($_smarty_tpl->tpl_vars['actor']->value->kwork_allow_status === "deny") {?>var USER_KWORK_BLOCKED = {blockType: "<?php echo $_smarty_tpl->tpl_vars['actor']->value->kworkBlock['blockType'];?>
",reason: "<?php echo str_replace(array("\r\n","\r","\n"),"<br />",$_smarty_tpl->tpl_vars['actor']->value->kworkBlock['reason']);?>
",dueDate: "<?php echo $_smarty_tpl->tpl_vars['actor']->value->kworkBlock['dueDate'];?>
"};<?php }?>var lang = "<?php echo Translations::getLang();?>
";<?php if ($_smarty_tpl->tpl_vars['actor']->value) {?>var actor_lang = "<?php echo $_smarty_tpl->tpl_vars['actor']->value->lang;?>
";<?php } else { ?>var actor_lang = "<?php echo Translations::getLang();?>
";<?php }
if ($_smarty_tpl->tpl_vars['actor']->value && $_smarty_tpl->tpl_vars['actor']->value->disableEn) {?>var disable_actor_en = true;<?php } else { ?>var disable_actor_en = false;<?php }
if (App::config("module.lang.enable") || $_smarty_tpl->tpl_vars['actor']->value->isLanguageTester) {?>var disable_en = false;<?php } else { ?>var disable_en = true;<?php }
if (Translations::isDefaultLang()) {?>var MIN_PRICE = 500;<?php } else { ?>var MIN_PRICE = 10;<?php }?>var CURRENCY_RATE = <?php echo App::config("currency_rate");?>
;var PAYPAL_ENABLED = false;<?php echo smarty_function_to_js(array('name'=>"serverTime",'var'=>time()),$_smarty_tpl);?>
var base_url = '<?php echo App::config('baseurl');?>
';var CURRENT_APP_DESCRIPTION = "Kwork";<?php echo '</script'; ?>
><?php $_smarty_tpl->_subTemplateRender("file:head_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
