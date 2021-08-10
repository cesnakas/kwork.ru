<?php
/* Smarty version 3.1.32, created on 2021-08-10 14:26:05
  from '/home/user20/www/test-stand20/public_html/themes/wants/payer/create_edit_want.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_6112624db7f503_27410508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1060379901a27fbd2a90228d7bfeb6b055a23157' => 
    array (
      0 => '/home/user20/www/test-stand20/public_html/themes/wants/payer/create_edit_want.tpl',
      1 => 1628580485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:fox_error7.tpl' => 1,
    'file:wants/common/want_payer_statistic.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6112624db7f503_27410508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.cdnBaseUrl.php','function'=>'smarty_modifier_cdnBaseUrl',),1=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.t.php','function'=>'smarty_modifier_t',),2=>array('file'=>'/home/user20/www/test-stand20/public_html/smarty/libs/plugins/modifier.substr.php','function'=>'smarty_modifier_substr',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo Helper::printJsFile(smarty_modifier_cdnBaseUrl("/js/dist/components/file-uploader.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/chosen.jquery.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/field-tooltips.js"));
echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/dist/create-edit-want.js"));
echo Helper::printCssFile(smarty_modifier_cdnBaseUrl("/css/dist/create-edit-want.css"));
$_smarty_tpl->_subTemplateRender("file:fox_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="centerwrap pt20 mb20">		<?php if (false && UserManager::isTester($_smarty_tpl->tpl_vars['actor']->value->id)) {?><h1 class="mb30 f32 sm-text-center"><?php if ($_smarty_tpl->tpl_vars['want']->value && $_smarty_tpl->tpl_vars['isNew']->value) {
echo smarty_modifier_t('Создание проекта');
} elseif ($_smarty_tpl->tpl_vars['want']->value) {
echo smarty_modifier_t('Редактирование проекта');
} else {
echo smarty_modifier_t('Опишите, что нужно сделать');
}?></h1><div class="project-form"><div class="project-form__aside"><ul class="project-form__steps"><li class="project-form__steps-item<?php if ($_smarty_tpl->tpl_vars['want']->value->id) {?> project-form__steps-item_saved<?php }?>" data-step="1"><i class="project-form__steps-icon project-form__steps-icon_one"></i><i class="project-form__steps-icon project-form__steps-icon_done project-form__steps-icon_position_right"></i><?php echo smarty_modifier_t('Название и сфера проекта');?>
<a href="javascript:;" class="project-form__steps-edit<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><i class="kwork-icon icon-pencil"></i></a></li><li class="project-form__steps-item<?php if ($_smarty_tpl->tpl_vars['want']->value->id) {?> project-form__steps-item_saved<?php }?>" data-step="2"><i class="project-form__steps-icon project-form__steps-icon_two"></i><i class="project-form__steps-icon project-form__steps-icon_done project-form__steps-icon_position_right"></i><?php echo smarty_modifier_t('Описание');?>
<a href="javascript:;" class="project-form__steps-edit<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><i class="kwork-icon icon-pencil"></i></a></li><li class="project-form__steps-item<?php if ($_smarty_tpl->tpl_vars['want']->value->id) {?> project-form__steps-item_saved<?php }?>" data-step="3"><i class="project-form__steps-icon project-form__steps-icon_three"></i><i class="project-form__steps-icon project-form__steps-icon_done project-form__steps-icon_position_right"></i><?php echo smarty_modifier_t('Бюджет');?>
<a href="javascript:;" class="project-form__steps-edit<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><i class="kwork-icon icon-pencil"></i></a></li><li class="project-form__steps-item<?php if ($_smarty_tpl->tpl_vars['want']->value->id) {?> project-form__steps-item_saved<?php }?>" data-step="4"><i class="project-form__steps-icon project-form__steps-icon_four"></i><?php echo smarty_modifier_t('Просмотр и публикация');?>
</li></ul></div><div class="project-form__content" id="foxPostForm"><form id="sendKworkRequest" method="POST" name="sendKworkRequest" enctype="multipart/form-data" class="js-form"><?php if ($_smarty_tpl->tpl_vars['want']->value) {?><input type="hidden" name="want_id" value="<?php echo $_smarty_tpl->tpl_vars['want']->value->id;?>
"><?php }?>					<div class="project-form__step" data-step="1"><div class="project-form__block"><div class="project-form__block-header"><div class="project-form__block-header-title"><?php echo smarty_modifier_t('Название и сфера проекта');?>
</div><div class="project-form__block-header-subtitle"><?php echo smarty_modifier_t('Шаг %s из %s',1,3);?>
</div></div><div class="project-form__block-content"><div class="project-form__group"><label for="wish_name" class="project-form__block-title"><?php echo smarty_modifier_t('Укажите название проекта');?>
</label><input name="title" id="wish_name" type="text" class="js-title-input w100p styled-input styled-input--thin f15 db" placeholder="<?php echo smarty_modifier_t('Введите название');?>
"value="<?php echo stripslashes($_smarty_tpl->tpl_vars['want']->value->name);?>
"><span class="js-title-error-field color-red hidden"></span></div><div class="project-form__block-title f13 ml15 mt10"><?php echo smarty_modifier_t('Хорошие примеры названий');?>
:</div><ul class="project-form__block-list f13 pl15"><li><?php echo smarty_modifier_t('Изменения в интернет-магазине на ModX');?>
</li><li><?php echo smarty_modifier_t('Разработка фирменной атрибутики компании с нуля');?>
</li><li><?php echo smarty_modifier_t('Адаптация большого веб-проекта под мобильные устройства');?>
</li></ul></div></div><div class="project-form__block"><div class="project-form__block-content"><div class="project-form__group js-category-select-wrapper"><label for="parents" class="project-form__block-title"><?php echo smarty_modifier_t('Я ищу фрилансеров, которые специализируются на');?>
:</label><?php $_smarty_tpl->assign('categories' , insert_get_categories2 (array('type' => 3, 'lang' => $_smarty_tpl->tpl_vars['wantLang']->value),$_smarty_tpl), true);?><select class="select-styled select-styled--thin long-touch-js f15 parents js-category-select dib" id="parents" name="parents" autocomplete="off" data-placeholder="<?php echo smarty_modifier_t('Выберите специальность');?>
"><option value="" selected><?php if ($_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['isTablet']->value && !$_smarty_tpl->tpl_vars['onlyDesktopVersion']->value) {
echo smarty_modifier_t('Выберите специальность');
}?></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'parentCategory', false, 'parentId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parentId']->value => $_smarty_tpl->tpl_vars['parentCategory']->value) {
$_smarty_tpl->_assignInScope('selected', '' ,true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parentCategory']->value->cats, 'category', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['category']->value) {
if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['want']->value->category_id) {
$_smarty_tpl->_assignInScope('selected', 'selected="selected" data-sel="sel"' ,true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><option value="<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
><?php echo smarty_modifier_t($_smarty_tpl->tpl_vars['parentCategory']->value->name);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'parentCategory', false, 'parentId');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['parentId']->value => $_smarty_tpl->tpl_vars['parentCategory']->value) {
if ($_smarty_tpl->tpl_vars['parentCategory']->value->cats) {
$_smarty_tpl->_assignInScope('selected', false ,true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parentCategory']->value->cats, 'category', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['category']->value) {
if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['want']->value->category_id) {
$_smarty_tpl->_assignInScope('selected', true ,true);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><select data-catId="<?php echo $_smarty_tpl->tpl_vars['parentCategory']->value->id;?>
"class="sub-<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
 js-sub-category-select js-sub-category-<?php echo $_smarty_tpl->tpl_vars['parentId']->value;?>
 sub_category select-styled select-styled--thin long-touch-js f15 childs gig_categories dib mt15 <?php if (!$_smarty_tpl->tpl_vars['selected']->value) {?>hidden<?php }?>"<?php if ($_smarty_tpl->tpl_vars['selected']->value) {?>name="category"<?php }?>autocomplete="off"data-placeholder="<?php echo smarty_modifier_t('Уточните специальность');?>
"><option value="" selected><?php if ($_smarty_tpl->tpl_vars['isMobile']->value && !$_smarty_tpl->tpl_vars['isTablet']->value && !$_smarty_tpl->tpl_vars['onlyDesktopVersion']->value) {
echo smarty_modifier_t('Уточните специальность');
}?></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['parentCategory']->value->cats, 'category', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['category']->value) {
?><option style="color:#000" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
"data-max-days="<?php echo $_smarty_tpl->tpl_vars['category']->value->max_days;?>
"data-max-photo-count="<?php echo $_smarty_tpl->tpl_vars['category']->value->max_photo_count;?>
"<?php if ($_smarty_tpl->tpl_vars['category']->value->id == $_smarty_tpl->tpl_vars['want']->value->category_id) {?>selected="selected"data-sel="sel"<?php }?>><?php echo smarty_modifier_t($_smarty_tpl->tpl_vars['category']->value->name);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><div class="js-category-attributes-select-wrapper"></div><span class="js-category-error-field color-red hidden db"></span></div></div><div class="project-form__block-footer"><button type="button" class="green-btn btn--big pull-reset m-wMax js-project-goto-next<?php if ($_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><?php echo smarty_modifier_t('Далее');?>
</button><button type="button" class="green-btn btn--big pull-reset m-wMax js-project-goto-last<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><?php echo smarty_modifier_t('Готово');?>
</button></div></div></div>					<div class="project-form__step project-form__step-hidden" data-step="2"><div class="project-form__block"><div class="project-form__block-header"><div class="project-form__block-header-title"><?php echo smarty_modifier_t('Описание');?>
</div><div class="project-form__block-header-subtitle"><?php echo smarty_modifier_t('Шаг %s из %s',2,3);?>
</div></div><div class="project-form__block-content"><label for="wish_description" class="project-form__block-title"><?php echo smarty_modifier_t('Опишите суть проекта');?>
</label><div class="project-form__block-title f13 ml15"><?php echo smarty_modifier_t('Хорошее описание включает');?>
:</div><ul class="project-form__block-list f13 pl15"><li><?php echo smarty_modifier_t('Что и в каком объеме нужно сделать');?>
</li><li><?php echo smarty_modifier_t('Что должно получиться на выходе');?>
</li><li><?php echo smarty_modifier_t('Особенности проекта и требования к фрилансерам');?>
</li></ul><div class="project-form__group mt20 relative"><textarea data-autoresize class="js-description-input text f15 autoheight-js js-stopwords-check" style="height:auto;" cols="74" id="wish_description" name="description" rows="9" placeholder="<?php echo smarty_modifier_t('Опишите, что именно вам нужно, в каком объеме и за какой срок');?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['want']->value->desc);?>
</textarea><span class="js-description-error-field color-red hidden"></span><div class="color-gray f12 pt10"><?php echo smarty_modifier_t('Максимальная длина - %s символов. Сейчас: %s',1500,'<span class="wishdescused">0</span>');?>
</div><div class="block-state-active no-hover"><div id="load-files-description" class="add-files" data-input-name="description"></div></div></div></div><div class="project-form__block-footer"><button type="button" class="white-btn btn--big pull-reset m-wMax js-project-goto-prev"><?php echo smarty_modifier_t('Назад');?>
</button><button type="button" class="green-btn btn--big pull-reset m-wMax ml30 js-project-goto-next<?php if ($_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php } else { ?> disabled<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> disabled<?php }?>><?php echo smarty_modifier_t('Далее');?>
</button><button type="button" class="green-btn btn--big pull-reset m-wMax js-project-goto-last<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><?php echo smarty_modifier_t('Готово');?>
</button></div></div></div>					<div class="project-form__step project-form__step-hidden" data-step="3"><div class="project-form__block"><div class="project-form__block-header"><div class="project-form__block-header-title"><?php echo smarty_modifier_t('Укажите бюджет заказа');?>
</div><div class="project-form__block-header-subtitle"><?php echo smarty_modifier_t('Шаг %s из %s',3,3);?>
</div></div><div class="project-form__block-content"><div class="project-form__pay"><div class="project-form__pay-item project-form__pay-item_inactive"><div class="project-form__pay-inner"><i class="project-form__pay-icon project-form__pay-icon_time"></i><div class="project-form__pay-title"><?php echo smarty_modifier_t('Оплата по часам');?>
</div><div class="project-form__pay-info"><?php echo smarty_modifier_t('Подходит для длинных проектов');?>
</div><div class="project-form__pay-label"><?php echo smarty_modifier_t('Скоро');?>
</div></div></div><div class="project-form__pay-item project-form__pay-item_active"><div class="project-form__pay-inner"><i class="project-form__pay-icon project-form__pay-icon_label-<?php echo $_smarty_tpl->tpl_vars['wantLang']->value;?>
"></i><div class="project-form__pay-title"><?php echo smarty_modifier_t('Оплата за проект');?>
</div></div></div></div></div></div><div class="project-form__block"><div class="project-form__block-content"><div class="project-form__group"><label for="price_limit" class="project-form__block-title"><?php echo smarty_modifier_t('Цена не более');?>
</label><input name="price_limit" id="price_limit" data-min="<?php echo $_smarty_tpl->tpl_vars['minPriceLimit']->value;?>
"data-max="<?php echo $_smarty_tpl->tpl_vars['maxPriceLimit']->value;?>
"data-lang="<?php echo $_smarty_tpl->tpl_vars['wantLang']->value;?>
"type="tel"class="js-price-limit-input js-only-numeric w100p styled-input styled-input--thin f15 db"placeholder="<?php echo smarty_modifier_t('Введите цену');?>
"autocomplete="off"value="<?php echo smarty_modifier_substr($_smarty_tpl->tpl_vars['want']->value->price_limit,0,-3);?>
"><span class="js-price-limit-error-field color-red hidden"></span></div></div><div class="project-form__block-footer"><button type="button" class="white-btn btn--big pull-reset m-wMax js-project-goto-prev"><?php echo smarty_modifier_t('Назад');?>
</button><button type="button" class="green-btn btn--big pull-reset m-wMax ml30 js-project-goto-next<?php if ($_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php } else { ?> disabled<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> disabled<?php }?>><?php echo smarty_modifier_t('Далее');?>
</button><button type="button" class="green-btn btn--big pull-reset m-wMax js-project-goto-last<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><?php echo smarty_modifier_t('Готово');?>
</button></div></div></div>					<div class="project-form__step project-form__step-hidden" data-step="4"><div class="project-form__block"><div class="project-form__block-header"><div class="project-form__block-header-title"><?php echo smarty_modifier_t('Опубликуйте задание');?>
</div></div><div class="project-form__block-content"><div class="card want-card js-want-container"><div class="card__content pb5"><div class="mb15"><div class="wants-card__header"><div class="wants-card__header-title first-letter js-project-title"></div><div class="wants-card__header-right-block"><div class="wants-card__header-controls"><div class="wants-card__header-price wants-card__price m-hidden<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><span class="js-project-price"></span></div></div></div></div><div class="mt10 br-with-lh js-project-description"></div><div class="files-list project-form__files-list mt10<?php if (mb_strlen($_smarty_tpl->tpl_vars['want']->value->desc) >= 245) {?> hidden<?php }?>"></div><div class="wants-card__header-price wants-card__price mt10 m-visible<?php if (!$_smarty_tpl->tpl_vars['want']->value->id) {?> hidden<?php }?>"><span class="js-project-price"></span></div></div><?php if ($_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->_subTemplateRender("file:wants/common/want_payer_statistic.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('user'=>$_smarty_tpl->tpl_vars['user']->value), 0, false);
}?></div></div><?php if (isNotAuth() && Translations::isDefaultLang()) {?><div class="project-form__group mt20"><label class="project-form__block-title" for="request-form__email"><?php echo smarty_modifier_t('Адрес электронной почты');?>
</label><input name="email" id="request-form__email" requiredtype="email" class="js-email-input w100p styled-input styled-input--thin f15 db" placeholder="<?php echo smarty_modifier_t('Введите email');?>
"><span class="js-email-error-field color-red hidden db"></span><span id="request-form__email_warning" class="color-orange font-OpenSans f14 ml10" style="display: none;"><?php echo smarty_modifier_t('Введен неправильный email');?>
</span></div><?php }?></div><div class="project-form__block-footer project-form__block-footer_theme_flex"><button type="submit" class="js-sendKworkRequest__submit js-uploader-button-disable green-btn btn--big pull-reset m-wMax w250"><?php if ($_smarty_tpl->tpl_vars['want']->value) {
echo smarty_modifier_t('Сохранить');
} else {
echo smarty_modifier_t('Опубликовать');
}?></button><div class="js-preloader preloader-want" style="display: none"><div class="preloader__ico preloader-want__ico"></div><div class="preloader-want__text"><?php echo smarty_modifier_t('Сохранение...');?>
</div></div><input type="hidden" name="action" value="submit"></div></div></div><?php if (isNotAuth()) {?><div class="mt20 f14 t-align-c"><?php echo smarty_modifier_t('Размещая проект, вы регистрируетесь и принимаете %sПользовательское соглашение%s и соглашаетесь на email-рассылки','<a href="/terms" target="_blank" class="color-text underline">','</a>');?>
</div><?php }?></form></div></div><?php } else { ?><div class="w700"><h1 class="f32 sm-text-center sm-lh-120p"><?php if ($_smarty_tpl->tpl_vars['want']->value && $_smarty_tpl->tpl_vars['isNew']->value) {
echo smarty_modifier_t('Создание проекта');
} elseif ($_smarty_tpl->tpl_vars['want']->value) {
echo smarty_modifier_t('Редактирование проекта');
} else {
echo smarty_modifier_t('Опишите, что нужно сделать');
}?></h1><div class="info-block" data-type="new_project"><div class="info-block__text f14 lh23 v-align-m sm-margin-reset"><p><?php echo smarty_modifier_t('Разместите свою задачу на бирже. Ваш проект станет видимым для тысяч фрилансеров, и некоторые из них сделают вам предложения. Изучите их рейтинг, портфолио и выберите лучших из них. Подтвердите заказ, когда будете удовлетворены результатом на 100%%. Только после этого оплата спишется в пользу продавца.');?>
</p></div></div><div class="clear"></div><div id="foxPostForm" class="pt0 p15-20 white-bg-border w700"><form id="sendKworkRequest" method="POST" name="sendKworkRequest" enctype="multipart/form-data" class="js-form"><?php if ($_smarty_tpl->tpl_vars['want']->value) {?><input type="hidden" name="want_id" value="<?php echo $_smarty_tpl->tpl_vars['want']->value->id;?>
" /><?php }?><div><div class="pt20 pb10 long-touch-js"><div class="field-tooltip-activator" data-show-from-width="1000"><div class="pb10"><label class="semibold mr5" for="wish_name"><?php echo smarty_modifier_t('Основная задача');?>
</label><span class="tooltipster kwork-icon icon-custom-help fs16before" data-tooltip-text="<?php echo smarty_modifier_t('Укажите в заголовке главную задачу');?>
"></span></div><div class="offer-sprite offer-sprite-list m-hidden pull-left"></div><input name="title" id="wish_name" type="text" class="js-title-input w618 m-wMax styled-input styled-input--thin f15 pull-left pli4" placeholder="<?php echo smarty_modifier_t('Введите название');?>
"value="<?php echo stripslashes($_smarty_tpl->tpl_vars['want']->value->name);?>
" /><span class="js-title-error-field color-red hidden"></span><div class="tooltip-container"><div class="field-tooltip field-tooltip_name"><div class="field-tooltip__corner"></div><div class="field-tooltip__image"></div><div class="field-tooltip__text-block"><div class="field-tooltip__title"><?php echo smarty_modifier_t('Примеры хороших заголовков:');?>
</div><div class="field-tooltip__message"><ul><li><?php echo smarty_modifier_t('Нужен разработчик для создания темы на WordPress');?>
</li><li><?php echo smarty_modifier_t('Создать 3D-модель существующего дома');?>
</li><li><?php echo smarty_modifier_t('Нужен дизайн для нового логотипа компании');?>
</li></ul></div></div></div></div></div></div></div><div class="clear"></div><div><div class="pt10 pb10 long-touch-js"><div class="field-tooltip-activator" data-show-from-width="1000"><div class="pb10"><label class="semibold mb10 mr5" for="wish_description"><?php echo smarty_modifier_t('Детальное описание задачи');?>
</label><span class="tooltipster kwork-icon icon-custom-help fs16before" data-tooltip-text="<?php echo smarty_modifier_t('Опишите услуги, которые вам нужны. Включите в описание важные аспекты.');?>
"></span></div><div class="offer-sprite offer-sprite-text m-hidden pull-left"></div><div class="w618 pull-left m-wMax relative"><textarea data-autoresize class="js-description-input text f15 autoheight-js js-stopwords-check pli4 lh22 mhi210" style="height:auto;" cols="74" id="wish_description" name="description" rows="9" placeholder="<?php echo smarty_modifier_t('Опишите, что именно вам нужно, в каком объеме и за какой срок');?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['want']->value->desc);?>
</textarea><span class="js-description-error-field color-red hidden"></span><div class="color-gray f12 pt10"><?php echo smarty_modifier_t('Максимальная длина - %s символов. Сейчас: %s',1500,'<span class="wishdescused">0</span>');?>
</div></div><div class="tooltip-container"><div class="field-tooltip field-tooltip_description"><div class="field-tooltip__corner"></div><div class="field-tooltip__image"></div><div class="field-tooltip__text-block"><div class="field-tooltip__title"><?php echo smarty_modifier_t('Хорошее описание включает в себя:');?>
</div><div class="field-tooltip__message"><ul><li><?php echo smarty_modifier_t('Что конкретно нужно сделать');?>
</li><li><?php echo smarty_modifier_t('В каком объеме (количестве) и в какой желаемый срок');?>
</li><li><?php echo smarty_modifier_t('Какие умения или компетенции требуются от исполнителя');?>
</li></ul></div></div></div></div></div></div></div><div class="clearfix"><div class="pt10 pb20 ml40 m-ml0"><div class="block-state-active no-hover"><div id="load-files-description" class="add-files" data-input-name="description"></div><div class="block-state-active_tooltip" style="right:-280px; top: -60px;"><?php echo smarty_modifier_t("На сайте есть ограничение на размер каждого файла: %sМб. Всё, что больше, можно заливать в любое облако и добавлять ссылку в сообщение.",$_smarty_tpl->tpl_vars['config']->value['files']['maxSize']);?>
</div></div></div></div><div class="clear"></div><div><div class="mt10 long-touch-js"><div><div class="mb10"><label class="semibold mr5" for="price_limit"><?php echo smarty_modifier_t('Цена не более');?>
</label><span class="tooltipster kwork-icon icon-custom-help fs16before" data-tooltip-text="<?php echo smarty_modifier_t('Отсекать предложения от продавцов свыше указанной суммы');?>
"></span></div><div class="offer-sprite offer-sprite-budget pull-left m-hidden mt2"></div><div class="w618 m-wMax"><input name="price_limit" id="price_limit" data-min="<?php echo $_smarty_tpl->tpl_vars['minPriceLimit']->value;?>
"data-max="<?php echo $_smarty_tpl->tpl_vars['maxPriceLimit']->value;?>
"data-lang="<?php echo $_smarty_tpl->tpl_vars['wantLang']->value;?>
"data-hour-price="0"data-project-price="0"style="width: 49%;min-width:250px"type="tel"class="js-price-limit-input js-price-changer js-input-number border-box styled-input styled-input--thin f15 pli4"placeholder="<?php echo smarty_modifier_t('Введите цену');?>
"autocomplete="off"value="<?php echo smarty_modifier_substr($_smarty_tpl->tpl_vars['want']->value->price_limit,0,-3);?>
" /></div><span class="js-price-limit-error-field color-red hidden"></span></div></div></div><div class="clear"></div><?php if (isNotAuth() && Translations::isDefaultLang()) {?><div class="clear"></div><div class="pt10"><div class="mb10"><label class="semibold mr5" for="request-form__email"><?php echo smarty_modifier_t('Адрес электронной почты');?>
</label><span class="tooltipster kwork-icon icon-custom-help fs16before" data-tooltip-text="<?php echo smarty_modifier_t('На этот адрес электронной почты будет выслано письмо для подтверждения регистрации.');?>
"></span></div><div class="offer-sprite offer-sprite-mail pull-left m-hidden mt2"></div><div class="w618 m-wMax"><input name="email" id="request-form__email" required style="width: 49%" type="email" class="js-email-input border-box styled-input styled-input--thin f15" placeholder="<?php echo smarty_modifier_t('Введите email');?>
" /></div><span class="js-email-error-field color-red hidden db"></span><span id="request-form__email_warning" class="color-orange font-OpenSans f14 ml10" style="display: none;"><?php echo smarty_modifier_t('Введен неправильный email');?>
</span></div><?php }?><div class="clear"></div><div class="bottom-form-filed"><div class="t-align-c clearfix"><input <?php if (isNotAuth() && !Translations::isDefaultLang()) {?>onclick="show_login('order'); return false;"}<?php }?> type="submit" value="<?php if ($_smarty_tpl->tpl_vars['want']->value) {
echo smarty_modifier_t('Сохранить');
} else {
echo smarty_modifier_t('Разместить');
}?>"class="js-sendKworkRequest__submit js-uploader-button-disable green-btn btn--big pull-reset m-wMax w250 mt20" /></div><input type="hidden" name="action" value="submit" /><div class="js-preloader preloader-want" style="display: none"><div class="preloader__ico preloader-want__ico"></div><div class="preloader-want__text"><?php echo smarty_modifier_t('Сохранение...');?>
</div></div><?php if (isNotAuth()) {?><div class="mt20 f14 t-align-c"><?php echo smarty_modifier_t('Размещая проект, вы регистрируетесь и принимаете %sПользовательское соглашение%s и соглашаетесь на email-рассылки','<a href="/terms" target="_blank" class="color-text underline">','</a>');?>
</div><?php }?></div></form></div></div><?php }?></div><?php echo Helper::registerFooterJsFile(smarty_modifier_cdnBaseUrl("/js/pages/new_project.js"));?>

		<?php echo '<script'; ?>
>
			var minPrices = <?php echo json_encode($_smarty_tpl->tpl_vars['minPrices']->value);?>
;

			$(function () {
				var submitButton = $(".js-sendKworkRequest__submit");
				var submitButtonTitle = submitButton.val();
				$("#wish_description").keyup(function () {
					updateGigDescCharsCount();
				});

				<?php if ($_smarty_tpl->tpl_vars['isPageNeedSmsVerification']->value) {?>
				submitButton.click(function (e) {
					e.preventDefault();
					$.ajax({
						url: "/check_payer_phone_verification",
						type: "GET",
						context: this,
						success: function (result) {
							if (!result.success) {
								phoneVerifiedOpenModal();
							} else {
								$(this).unbind("click").click();
							}
						}
					});
				});
				<?php }?>
			});
			function updateGigDescCharsCount() {
				var used = $("#wish_description").val().length;
				$(".wishdescused").html(used);
			}

			$(window).load(function () {
				updateGigDescCharsCount();
			});

			var isNewSelect = true;
			var isNewForm = false;
			
			<?php if (false && UserManager::isTester($_smarty_tpl->tpl_vars['actor']->value->id)) {?>
			isNewForm = true;
			var selectedAttributesIds = <?php if ($_smarty_tpl->tpl_vars['want']->value) {
echo json_encode($_smarty_tpl->tpl_vars['want']->value->getAttrsIds(),JSON_NUMERIC_CHECK);
} else { ?>[]<?php }?>;
			var wantAttributesTree = <?php if ($_smarty_tpl->tpl_vars['wantAttributesTree']->value) {
echo json_encode($_smarty_tpl->tpl_vars['wantAttributesTree']->value,JSON_NUMERIC_CHECK);
} else { ?>[]<?php }?>;
			<?php }?>

		<?php echo '</script'; ?>
>
	
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
