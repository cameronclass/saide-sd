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
$this->setFrameMode(false);

if (!isset($_SESSION['ajax_question_inc'])) {
    $_SESSION['ajax_question_inc'] = 0;
}
$_SESSION['ajax_question_inc']++;

?>

<div class="question-block__bg">
    <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/review-form.png" alt="">
</div>
<div class="question-block__block">
    <div class="question-block__submit" data-ajax_question_inc="<?= $_SESSION['ajax_question_inc'] ?>">
        <div class="question-block__title">
            <div class="question-block__title_text">
                <span class="question-block__title_first">还有疑问？</span>
                <span class="question-block__title_divide">/</span>
                <span class="question-block__title_last">想开始合作？</span>
            </div>
            <div class="question-block__subtitle">随时联系！</div>
        </div>
        <form name="SIMPLE_FORM_1" class="question-block__form" action="" method="POST" enctype="multipart/form-data">
            <?=bitrix_sessid_post() ?>
            <input type="hidden" name="WEB_FORM_ID" value="1">
            <div class="question-block__form_title">我们认真对待每一份申请，并将在15分钟内回复您。 <br> 请留下您的联系方式，以便我们与您联系：</div>
            <div class="question-block__form_block">
                <div class="input-question-form__block">
                    <input type="text" placeholder="称呼 *" name="form_text_1" class="main-input question-block__form_input client-name" required>
                    <div class="input-form__notice hidden"></div>
                </div>
                <div class="input-question-form__block">
                    <input type="text" placeholder="联系电话 *" name="form_text_3" class="main-input question-block__form_input phone" required>
                    <div class="input-form__notice hidden"></div>
                    <div class="input-form__notice-valid-number hidden"></div>
                </div>
                <div class="input-question-form__block">
                    <input type="email" placeholder="邮箱 *" name="form_email_2" class="main-input question-block__form_input email" required>
                    <div class="input-form__notice hidden"></div>
                </div>
                <button class="main-btn" name="web_form_submit" value="发送" type="submit" onclick="_tmr.push({ type: 'reachGoal', id: 3555455, goal: 'E-mail_form'}); return true;">发送</button>
            </div>
        </form>
        <div class="question-block__contacts">
            <div class="question-block__contacts_title">微信联系</div>
            <div class="question-block__contacts_block">
                <a href="mailto:saide_guoji@yeah.net" class="question-block__contacts_link link-whatsapp">微信</a>
            </div>
        </div>
    </div>
    <div class="question-block__result d-none">
        <div class="question-block__title">请求已成功发送！</div>
        <div class="ask-panel__result_svg">
            <svg width="61" height="53" viewBox="0 0 61 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 27.5L30.5 38.5L57.5 3.5" stroke="#F09123" stroke-width="5" />
                <circle cx="30" cy="31" r="21.5" stroke="#F09123" />
            </svg>
        </div>
    </div>
</div>