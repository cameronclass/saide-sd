<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("");
$APPLICATION->SetPageProperty("BX_INC_AREA_ID", "bx_incl_area_mark");
$APPLICATION->SetPageProperty("title", "关于我们");
?>
<div class="content-page__page">
    <div class="content-page__title" data-aos="fade-up">
        <h1 class="content-page__title_text">关于我们</h1>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ContactPage",
            "mainEntity": {
                "@type": "Organization",
                "name": "Saide",
                "url": "https://saide-sd.cn",
                "logo": "https://saide-sd.cn/bitrix/templates/main-wisetao/assets/images/logo.svg",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+86-17304560702",
                    "contactType": "customer service",
                    "availableLanguage": "CN",
                    "areaServed": "CN"
                }
            }
        }
        </script>
    </div>
    <div class="content-page__content">
        <div class="content-page__content_left">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "about_advantages",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0 => "ID", 1 => "CODE", 2 => "NAME", 3 => "PREVIEW_PICTURE", 4 => "PREVIEW_TEXT", 5 => "", ),
                    "FILE_404" => "",
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "16",
                    "IBLOCK_TYPE" => "about",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "4",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "О компании (сетрификаты)",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC"
                )
            ); ?>

            <link href="https://unpkg.com/video.js/dist/video-js.min.css" rel="stylesheet">
            <script src="https://unpkg.com/video.js/dist/video.min.js"></script>

            <video id="my-player" class="video-js" controls preload="auto" data-setup="{}" width="100%"
                poster="<?= SITE_TEMPLATE_PATH ?>/assets/video/poster.jpg">
                <source src="<?= SITE_TEMPLATE_PATH ?>/assets/video/about-cn.mp4" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>

            <script>
            const player = videojs(document.querySelector('.video-js'), {
                controls: true,
                preload: 'auto' // Предзагрузка метаданных
            });
            </script>


            <!--            <iframe id="videoFrame" class="iframe-wisetao-about" data-aos="fade-up"-->
            <!--                style="margin-bottom: 10px; margin-top: 20px;" width="100%"-->
            <!--                src="https://dzen.ru/embed/v_sJZ3yOe0TY?from_block=partner&from=zen&mute=0&autoplay=0&tv=0"-->
            <!--                allow="autoplay; fullscreen; accelerometer; gyroscope; picture-in-picture; encrypted-media"-->
            <!--                frameborder="0" scrolling="no" allowfullscreen></iframe>-->


            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "about_text_img",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "about_text_img",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(0 => "ID", 1 => "CODE", 2 => "NAME", 3 => "PREVIEW_TEXT", 4 => "PREVIEW_PICTURE", 5 => "", ),
                    "FILE_404" => "",
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "14",
                    "IBLOCK_TYPE" => "about",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "5",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "О компании",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(0 => "", 1 => "", ),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
            <?
            $customOffset = 0;
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "about_certificates",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",

                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("ID", "CODE", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                    "FILE_404" => "",
                    "CUSTOM_OFFSET" => $customOffset,
                    "CUSTOM_COUNT" => 4,
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "15",
                    "IBLOCK_TYPE" => "about",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "8",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "О компании (сетрификаты)",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
            <div class="timeline" data-aos="fade-up">
                <?
                session_start();
                if (!isset($_SESSION['n_count'])) {
                    $_SESSION['n_count'] = 2;
                }
                if (isset($_GET['more'])) {
                    $_SESSION['n_count'] = 0;
                }
                if (!isset($_GET['more'])) {
                    $_SESSION['n_count'] = 2;
                }
                BXClearCache('/s3/bitrix/news.list/');
                $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "logistic_about_timeline",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "ID",
                            1 => "CODE",
                            2 => "NAME",
                            3 => "PREVIEW_PICTURE",
                            4 => "PREVIEW_TEXT",
                            5 => "",
                        ),
                        "FILE_404" => "",
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "26",
                        "IBLOCK_TYPE" => "logistic",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => $_SESSION['n_count'],
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Логистика (история компании - шкала)",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "DATE_CREATE",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC",
                    ),
                    false
                ); ?>
            </div>
            <h2 class="group-title mt-5 mb-4" data-aos="fade-up">
                许可证 </h2>
            <?
            $customOffset = 4;
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "about_certificates",
                array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("ID", "CODE", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
                    "FILE_404" => "",
                    "CUSTOM_OFFSET" => $customOffset,
                    "CUSTOM_COUNT" => 4,
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "15",
                    "IBLOCK_TYPE" => "about",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "8",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "О компании (сетрификаты)",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("", ""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "SORT",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "ASC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            ); ?>
        </div>
        <div class="content-page__content_right">
            <div class="service-cards" itemscope="" itemtype="https://schema.org/Blog" data-aos="fade-up">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "logistic_about_delivery_types_from_about",
                    array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(0 => "ID", 1 => "CODE", 2 => "NAME", 3 => "PREVIEW_PICTURE", 4 => "PREVIEW_TEXT", 5 => "", ),
                        "FILE_404" => "",
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "25",
                        "IBLOCK_TYPE" => "logistic",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "N",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => 3,
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Логистика (о типах доставки)",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(0 => "LINK", ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "DATE_CREATE",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC"
                    )
                ); ?>
            </div>
        </div>
    </div>
    <div class="about-workers__wrapper">
        <h2 class="group-title mt-5 mb-2" data-aos="fade-up">
            我们的团队 </h2>
        <!--            -->
        <?// $APPLICATION->IncludeComponent(
//                "bitrix:news.list",
//                "about_team",
//                array(
//                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
//                    "ADD_SECTIONS_CHAIN" => "N",
//                    "AJAX_MODE" => "N",
//                    "AJAX_OPTION_ADDITIONAL" => "",
//                    "AJAX_OPTION_HISTORY" => "N",
//                    "AJAX_OPTION_JUMP" => "N",
//                    "AJAX_OPTION_STYLE" => "Y",
//                    "CACHE_FILTER" => "N",
//                    "CACHE_GROUPS" => "Y",
//                    "CACHE_TIME" => "36000000",
//                    "CACHE_TYPE" => "A",
//                    "CHECK_DATES" => "Y",
//                    "DETAIL_URL" => "",
//                    "DISPLAY_BOTTOM_PAGER" => "N",
//                    "DISPLAY_DATE" => "N",
//                    "DISPLAY_NAME" => "N",
//                    "DISPLAY_PICTURE" => "Y",
//                    "DISPLAY_PREVIEW_TEXT" => "Y",
//                    "DISPLAY_TOP_PAGER" => "N",
//                    "FIELD_CODE" => array(0 => "ID", 1 => "CODE", 2 => "NAME", 3 => "PREVIEW_PICTURE", 4 => "PREVIEW_TEXT", 5 => "",),
//                    "FILE_404" => "",
//                    "FILTER_NAME" => "",
//                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
//                    "IBLOCK_ID" => "37",
//                    "IBLOCK_TYPE" => "about_team",
//                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
//                    "INCLUDE_SUBSECTIONS" => "N",
//                    "MESSAGE_404" => "",
//                    "NEWS_COUNT" => 0,
//                    "PAGER_BASE_LINK_ENABLE" => "N",
//                    "PAGER_DESC_NUMBERING" => "N",
//                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//                    "PAGER_SHOW_ALL" => "N",
//                    "PAGER_SHOW_ALWAYS" => "N",
//                    "PAGER_TEMPLATE" => ".default",
//                    "PAGER_TITLE" => "Наша команда (О нас)",
//                    "PARENT_SECTION" => "",
//                    "PARENT_SECTION_CODE" => "",
//                    "PREVIEW_TRUNCATE_LEN" => "",
//                    "SET_BROWSER_TITLE" => "N",
//                    "SET_LAST_MODIFIED" => "N",
//                    "SET_META_DESCRIPTION" => "N",
//                    "SET_META_KEYWORDS" => "N",
//                    "SET_STATUS_404" => "N",
//                    "SET_TITLE" => "N",
//                    "SHOW_404" => "N",
//                    "SORT_BY1" => "DATE_CREATE",
//                    "SORT_BY2" => "SORT",
//                    "SORT_ORDER1" => "ASC",
//                    "SORT_ORDER2" => "ASC"
//                )
//            ); ?>
        <div class="about-workers photo-studio my-4" data-aos="fade-up">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/1.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/1.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Vitaliy Novikov</span> <span
                                class="about-workers__text">公司创始人</span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/11.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/11.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Tatyana Zvonkova</span> <span
                                class="about-workers__text">消费品领域（电商平台）零售业务负责人</span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/12.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/12.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Yang Yang</span> <span
                                class="about-workers__text">俄罗斯财务总监</span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/8.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/8.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Roman</span> <span
                                class="about-workers__text">陪同部门负责人（初步联系人） </span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/10.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/10.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Tatyana</span> <span
                                class="about-workers__text">俄罗斯咨询部门负责人</span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/7.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/7.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Olga</span> <span
                                class="about-workers__text">俄罗斯采购部门负责人</span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/9.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/9.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Xiu Xiu</span> <span
                                class="about-workers__text">俄罗斯物流部门负责人</span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/4.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/4.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Dju Dzen</span> <span
                                class="about-workers__text">俄罗斯法律服务部门负责人</span> </span>
                    </div>
                    <div class="swiper-slide">
                        <a class="fancy-link" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/6.jpg"
                            data-fancybox="gallery"> <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/company/6.jpg"
                                class="photo-studio__item" alt=""> </a> <span class="about-workers__block"> <span
                                class="about-workers__title">Liu yong Jun</span> <span
                                class="about-workers__text">仓储服务部门负责人</span> </span>
                    </div>
                </div>
                <div class="photo-studio__arrows aos-init aos-animate" data-aos="fade-up">
                    <div class="swiper-button-prev">
                    </div>
                    <div class="casePagination">
                        <div class="swiper-pagination">
                        </div>
                    </div>
                    <div class="swiper-button-next">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-page__more">
</div>
<br>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>