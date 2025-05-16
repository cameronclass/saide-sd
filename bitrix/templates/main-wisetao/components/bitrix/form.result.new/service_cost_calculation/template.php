<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

if (!\Bitrix\Main\Loader::includeModule("iblock"))
    return;

use Bitrix\Iblock\ElementTable;

if (!isset($_SESSION['ajax_ask_inc'])) {
    $_SESSION['ajax_ask_inc'] = 0;
}
$_SESSION['ajax_ask_inc']++;

$this->setFrameMode(false);

$query = ElementTable::query();

$query->setSelect([
    'NAME',
]);

$query->setFilter([
    'IBLOCK_ID' => 32,
    '=CODE' => $_GET['name'] // Символьный код элемента
]);

$result = $query->exec();
$element = $result->fetch();

// Добавляем элементы в структуру


// Получаем свойства элемента
if ($element) {
    $title = $element['NAME'];
}
else {
    $element = CIBlockSection::GetList(
        [],
        [
            '=CODE' => $_GET['name'],
            'IBLOCK_ID' => 32,
        ],
        false,
        [
            'NAME',
        ],
    )->fetch();
    $title = $element['NAME'];
}
?>

<button class="js-ask-close" data-ajax_ask_inc="<?= $_SESSION['ajax_ask_inc'] ?>">
    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
        <path
            d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z">
        </path>
    </svg>
</button>

<div class="ask-panel__submit">
    <div class="ask-panel__title" style="margin-top: 15px;">计算服务费用</div>
    <div class="ask-panel__title ask-panel__title_orange">
        <span class="css service-name" data-splitting="words">"<?=$title?>"</span>
    </div>
    <div class="ask-panel__title">在商业提案中</div>
    <div class="ask-panel__subtitle">请留下您的联系方式，以便我们快速发送商业提案给您。</div>
    <form name="SIMPLE_FORM_2" class="ask-panel__form" action="" method="POST" enctype="multipart/form-data">
        <?=bitrix_sessid_post() ?>
        <input type="hidden" name="WEB_FORM_ID" value="2">
        <input type="hidden" name="form_hidden_8" value="<?=$title?>">
        <div class="input-question-form__block">
            <input type="text" placeholder="称呼 *" class="main-input order-service__form_input client-name"
                name="form_text_4" required>
            <div class="input-form__notice hidden"></div>
        </div>
        <div class="input-question-form__block">
            <input type="tel" placeholder="联系电话 *" class="main-input order-service__form_input phone" name="form_text_5"
                required>
            <div class="input-form__notice hidden"></div>
            <div class="input-form__notice-valid-number hidden"></div>
        </div>
        <div class="input-question-form__block">
            <input type="email" placeholder="邮箱 *" class="main-input order-service__form_input email"
                name="form_email_6" required>
            <div class="input-form__notice hidden"></div>
        </div>
        <textarea placeholder="给经理的额外问题" class="main-input service-question" name="form_textarea_7" id=""></textarea>
        <button class="main-btn _white m-0" name="web_form_submit" type="submit" value="发送"
            onclick="_tmr.push({ type: 'reachGoal', id: 3555455, goal: 'E-mail_form'}); return true;">发送</button>
    </form>
    <div class="ask-panel__subtitle mt-3">或者通过您方便的即时通讯工具提问。:</div>
    <div class="ask-panel__contact">
        <div class="ask-panel__qrcode">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/wechat.jpg" alt="">
        </div>
        <div class="ask-panel__qrcode">
            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/group_wechat.jpg" alt="">
        </div>
    </div>
</div>

<div class="ask-panel__result d-none">
    <div class="ask-panel__title">请求已成功发送！</div>
    <div class="ask-panel__result_svg">
        <svg width="61" height="53" viewBox="0 0 61 53" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 27.5L30.5 38.5L57.5 3.5" stroke="#F09123" stroke-width="5" />
            <circle cx="30" cy="31" r="21.5" stroke="#F09123" />
        </svg>
    </div>
    <div class="ask-panel__subtitle _center">
        我们将在30分钟内处理您的请求，并将商业提案发送到您的邮箱。
        <br><br>
        感谢您的耐心等待！
    </div>

</div>