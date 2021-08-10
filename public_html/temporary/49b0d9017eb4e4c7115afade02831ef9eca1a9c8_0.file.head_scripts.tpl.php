<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:29:36
  from '/home/user20/www/test-stand20/public_html/themes/head_scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_611263206cab54_15479919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49b0d9017eb4e4c7115afade02831ef9eca1a9c8' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/head_scripts.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611263206cab54_15479919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),));
$_smarty_tpl->_assignInScope('pageSpeedTypes', array("index","cat","view","land","catalog"));
if ($_smarty_tpl->tpl_vars['pageName']->value && in_array($_smarty_tpl->tpl_vars['pageName']->value,$_smarty_tpl->tpl_vars['pageSpeedTypes']->value) && !$_smarty_tpl->tpl_vars['actor']->value) {?>		<?php $_smarty_tpl->_assignInScope('pageSpeedScripts', array("/js/jquery.min.1.9.1.js","/js/fox.js","/js/js.cookie.js","/js/jquery.touchSwipe.min.js","/js/pagespeed.js"));
if ($_smarty_tpl->tpl_vars['pageName']->value != "indexTopfreelancer") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/dist/general-search.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['pageName']->value == "index" || $_smarty_tpl->tpl_vars['pageName']->value == "cat" || $_smarty_tpl->tpl_vars['pageName']->value == "land") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/slick.min.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['pageName']->value == "cat" && !$_smarty_tpl->tpl_vars['parent']->value && $_smarty_tpl->tpl_vars['CATID']->value != "all") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/jquery.kworkcarousel.min.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['pageName']->value == "view") {
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/portfolio_view_popup.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['pageName']->value == "catalog" && $_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/components/allAttributes.min.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/components/tooltipster.bundle.min.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
}?>		<?php if (!$_smarty_tpl->tpl_vars['pageSpeedMobile']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/chosen-compatible.jquery.min.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/components/allAttributes.min.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/components/tooltipster.bundle.min.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['pageSpeedScripts']) ? $_smarty_tpl->tpl_vars['pageSpeedScripts']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = "/js/chosen.jquery.js";
$_smarty_tpl->_assignInScope('pageSpeedScripts', $_tmp_array);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageSpeedScripts']->value, 'pageSpeedScript');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pageSpeedScript']->value) {
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl($_smarty_tpl->tpl_vars['pageSpeedScript']->value),1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '<script'; ?>
><?php if ($_smarty_tpl->tpl_vars['pageName']->value == "cat" || $_smarty_tpl->tpl_vars['pageName']->value == "land") {?>
			//проверить, поддерживает ли браузер формат webp
			!function(){var A=new Image;A.onload=A.onerror=function(){2===A.height&&(document.getElementsByTagName("body")[0].className+=" is_webp")},A.src="data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA"}();
			<?php }?>

			window.addEventListener('DOMContentLoaded', function() {
				<?php if ($_smarty_tpl->tpl_vars['pageName']->value == "catalog") {?>
				//отложенная подгрузка изображений при попадании во viewport
				lazyLoadImgViewport();
				window.addEventListener('scroll', lazyLoadImgViewport);
				<?php }?>

				//отложенная подгрузка изображений при скроле
				lazyLoadImgScroll();
			});

			<?php echo '</script'; ?>
><?php } else { ?>		<?php echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/jquery.min.1.9.1.js"));
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/jquery.mb.browser.min.js"));
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/jquery.jscrollpane.min.js"));
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/chosen-compatible.jquery.min.js"));
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/url-search-params.min.js"));
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/formDataFilter.js"));
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/fox.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/jquery.mousewheel.min.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/js.cookie.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/cropper.min.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/jquery-cropper.min.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/jquery.touchSwipe.min.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/components/allAttributes.min.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/components/tooltipster.bundle.min.js"));
if ($_smarty_tpl->tpl_vars['needToGetFingerprint']->value) {?>			            <?php echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/dist/fing.js"));
}
}
if ($_smarty_tpl->tpl_vars['isWorkbayApp']->value) {
echo Helper::registerFooterJsFile("/js/dist/workbay.js");
}
if (App::config("app.mode") == "dev") {?><meta name="robots" content="noindex"><?php }
}
}
