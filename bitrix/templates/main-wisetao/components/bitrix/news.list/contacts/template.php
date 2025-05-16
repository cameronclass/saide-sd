<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);
?>
<div class="contact-page__location">
    <? foreach ($arResult["ITEMS"] as $key => $arItem): ?>
    <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
    <? if ($key < count($arResult["ITEMS"]) - 1): ?>
    <div class="location-card" data-aos="fade-up" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
        <div class="location-card__bg">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/contacts-bg.png" alt="">
        </div>
        <div class="location-card__block">
            <div class="location-card__title">
                <span><?= $arItem["NAME"]; ?></span>
                <span class="location-card__title_line"></span>
            </div>
            <div class="location-card__content">
                <div class="location-card__item">
                    <span>关于服务订购的相关问题</span>
                </div>
                <div class="location-card__item">

                    <? if ($arItem["NAME"] === 'Офис в России'): ?>
                    <a target="_blank" class="ask-panel__btn _telegram" href="https://t.me/+79676433973"
                        onclick="_tmr.push({ type: 'reachGoal', id: 3555455, goal: 'Telegram'}); return true;">
                        <span>通过 Telegram 联系</span>
                        <img class="ask-panel__btn_icon"
                            src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/telegram-neon.png" alt="">
                    </a>
                    <a target="_blank" class="ask-panel__btn _whatsapp"
                        href="https://api.whatsapp.com/send?phone=8613154567328"
                        onclick="_tmr.push({ type: 'reachGoal', id: 3555455, goal: 'Watsapp'}); return true;">
                        <span>通过 WhatsApp 联系</span>
                        <img class="ask-panel__btn_icon"
                            src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/whatsapp-neon.png" alt="">
                    </a>
                    <? else: ?>
                    <span>联系电话: </span>
                    <span><?= $arItem['PROPERTIES']['PHONE_NUMBER']['VALUE'] ?></span>
                    <a target="_blank" class="ask-panel__btn _wechat" href="weixin://dl/chat?weixinid=ningdejin777">
                        <span>通过微信联系</span>
                        <img class="ask-panel__btn_icon"
                            src="<?= SITE_TEMPLATE_PATH ?>/assets/images/icons/wechat-neon.png" alt="">
                    </a>
                    <? endif; ?>
                </div>
                <div class="location-card__item">
                    <span>电子邮件: </span>
                    <a href="mailto:<?= $arItem['PROPERTIES']['EMAIL']['VALUE'] ?>"
                        onclick="_tmr.push({ type: 'reachGoal', id: 3555455, goal: 'E-mail_button'}); return true;">
                        <?= $arItem['PROPERTIES']['EMAIL']['VALUE'] ?>
                    </a>
                </div>
                <div class="location-card__item">
                    <span>工作时间:</span>
                    <span><?= $arItem['PROPERTIES']['OPERATING_MODE_WEEKDAYS']['VALUE'] ?> <br>
                        <?= $arItem['PROPERTIES']['OPERATING_MODE_WEEKEND']['VALUE'] ?></span>
                </div>
                <div class="location-card__item">
                    <span>地址:</span>
                    <span><?= $arItem['PROPERTIES']['ADDRESS']['~VALUE']['TEXT'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <? else: ?>
</div>
<div class="contact-page__text" data-aos="fade-up" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
    <h3 class="contact-page__text_title"><?= $arItem["NAME"]; ?></h3>
    <p><?= $arItem['PREVIEW_TEXT'] ?></p>
    <div class="location-card__item">
        <span>联系电话: </span>
        <span><?= $arItem['PROPERTIES']['PHONE_NUMBER']['VALUE'] ?></span>
    </div>
    <div class="location-card__item">
        <span>电子邮件地址: </span>
        <span><?= $arItem['PROPERTIES']['EMAIL']['VALUE'] ?></span>
    </div>
</div>
<? endif; ?>
<? endforeach; ?>