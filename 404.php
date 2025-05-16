<?
include_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/urlrewrite.php');
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
?>
<? $APPLICATION->SetPageProperty("title", "Ошибка 404. Страница не найдена."); ?>
<div class="content-page__page">
    <div class="content-page__content">
        <div class="error-page">
            <div class="error-page__text">
                <div class="error-page__title">404</div>
                <div class="error-page__subtitle">哎呀...这个页面不存在。</div>
                <div class="error-page__link">前往<a href="/">主页</a></div>
            </div>
            <div class="error-page__img">
                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/404.png" alt="">
            </div>
        </div>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>