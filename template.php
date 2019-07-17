<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
$is_main_page = ($APPLICATION->GetCurPage(true)== SITE_DIR."index.php") ? true : false;
$is_contacts_page = ($APPLICATION->GetCurPage(true)== SITE_DIR."contacts/index.php") ? true : false;

if(!CModule::IncludeModule("designcode.builder")) {
	ShowError(GetMessage("DC_BUILDER_ERROR_MODULE"));
}
?>
<!DOCTYPE html>
<html lang="ru" xml:lang="<?=LANGUAGE_ID?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta class="os-tdn" http-equiv="Content-Language" content="<?=LANGUAGE_ID?>">
    <meta class="os-tdn" property="og:locale" content="<?=LANGUAGE_ID?>">
    <title><?$APPLICATION->ShowTitle()?></title>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <?$APPLICATION->ShowHead();?>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.magnific-popup.css" rel='stylesheet' type='text/css'>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/slick.css" rel='stylesheet' type='text/css'>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/slick.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" rel="stylesheet">
    <?if(CModule::IncludeModule("designcode.builder")){CDesigncodeBuilder::Start(SITE_ID);}?>
    <link href="<?=SITE_TEMPLATE_PATH?>/css/custom.css" rel="stylesheet">
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <div class="head-logo">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 block-logo">
                    <a class="logo" href="/">
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/logo.php",
                            Array(),
                            Array(
                                "MODE" => "html",
                                "NAME" => GetMessage("LOGO"),
                            )
                        );?>
                    </a>
                </div>
                <div class="col-md-5 hidden-xs hidden-sm">
                    <!--$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "header-banner",
                        array(
                            "IBLOCK_ID" => "5",
                            "IBLOCK_TYPE" => "dc_builder_list",
                            "ACTIVE_DATE_FORMAT" => "d.m.Y",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "AJAX_MODE" => "N",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "AJAX_OPTION_HISTORY" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "CHECK_DATES" => "Y",
                            "COMPONENT_TEMPLATE" => "header-banner",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "N",
                            "DISPLAY_DATE" => "N",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "20",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                            "PAGER_SHOW_ALL" => "N",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_TEMPLATE" => ".default",
                            "PAGER_TITLE" => "",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SET_BROWSER_TITLE" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "N",
                            "SET_META_KEYWORDS" => "N",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "N",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "SORT",
                            "SORT_BY2" => "ACTIVE_FROM",
                            "SORT_ORDER1" => "ASC",
                            "SORT_ORDER2" => "DESC"
                        ),
                        false
                    );-->
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class='head-btn'>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/top-button.php",
                            Array(),
                            Array(
                                "MODE" => "html",
                                "NAME" => GetMessage("BUTTON"),
                            )
                        );?>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-6">
                    <div class="contacts">
                        <div class="worktime">
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."include/worktime.php",
                                Array(),
                                Array(
                                    "MODE" => "text",
                                    "NAME" => GetMessage("WORKTIME"),
                                )
                            );?>
                        </div>
                        <div class="phone">
                            <?$APPLICATION->IncludeFile(
                                SITE_DIR."include/phone.php",
                                Array(),
                                Array(
                                    "MODE" => "text",
                                    "NAME" => GetMessage("PHONE"),
                                )
                            );?>
                        </div>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/email.php",
                            Array(),
                            Array(
                                "MODE" => "html",
                                "NAME" => GetMessage("EMAIL"),
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-stripe">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top-menu", Array(
                "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => "",
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "Y",
                ),
                false
            );?>

        </div>
    </div>

    <?if ($is_main_page) {?>
        <div class="slider-main-page">
            <div class='container-fullwidth'>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "slider-mainpage",
                    array(
                        "IBLOCK_ID" => "1",
                        "IBLOCK_TYPE" => "dc_builder_list",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "COMPONENT_TEMPLATE" => "slider-mainpage",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array(
                            0 => "",
                            1 => "",
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => array(
                            0 => "LINK",
                            1 => "",
                        ),
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "TIMESTAMP_X",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "DESC"
                    ),
                    false
                );?>
            </div>
        </div>
        <div class="spacing-10"></div>
        <!-- портфолио на главной -->
        <?$APPLICATION->IncludeComponent(
                "bitrix:news",
                "portfolio",
                array(
                    "IBLOCK_ID" => "10",
                    "IBLOCK_TYPE" => "dc_builder_content",
                    "ADD_ELEMENT_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "BROWSER_TITLE" => "-",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "portfolio",
                    "DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
                    "DETAIL_DISPLAY_TOP_PAGER" => "N",
                    "DETAIL_FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "DETAIL_PAGER_SHOW_ALL" => "N",
                    "DETAIL_PAGER_TEMPLATE" => "",
                    "DETAIL_PAGER_TITLE" => "Страница",
                    "DETAIL_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "PHOTO",
                        2 => "",
                    ),
                    "DETAIL_SET_CANONICAL_URL" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "N",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "LIST_FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "LIST_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "PHOTO",
                        2 => "",
                    ),
                    "MESSAGE_404" => "",
                    "META_DESCRIPTION" => "-",
                    "META_KEYWORDS" => "-",
                    "NEWS_COUNT" => "4",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => "modern",
                    "PAGER_TITLE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "SEF_FOLDER" => "/portfolio/",
                    "SEF_MODE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "USE_CATEGORIES" => "N",
                    "USE_FILTER" => "N",
                    "USE_PERMISSIONS" => "N",
                    "USE_RATING" => "N",
                    "USE_RSS" => "N",
                    "USE_SEARCH" => "N",
                    "USE_SHARE" => "N",
                    "SEF_URL_TEMPLATES" => array(
                        "news" => "",
                        "section" => "#SECTION_CODE#/",
                        "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/",
                    )
                ),
                false
            );?>
    <?}?>
    <div class="content-block <?if ($is_main_page) {?>main-page<?}?>">
        <div class='container'>
        <?if (!$is_main_page) {?>
            <div class="row">
                <div class="col-xs-12">
                    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
                        "START_FROM" => "0",
                        "PATH" => "",
                        "SITE_ID" => "",
                        ),
                        false
                    );?>
                    <h1 class="page-title"><?$APPLICATION->ShowTitle(false);?></h1>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "page-menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "COMPONENT_TEMPLATE" => "page-menu",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "left",
                            "USE_EXT" => "Y"
                        ),
                        false
                    );?>
                </div>
            </div>
        <?}?>
        </div>
    </div>
#WORK_AREA#
    <?IncludeTemplateLangFile(__FILE__);?>
    <div class="content-block-fullwidth">
        <?=$APPLICATION->ShowViewContent("after-content-block");?>
    </div>
<?if ($is_main_page) {?>
    <div class="reviews">
        <div class='container'>
            <div class="row">
                <div class="col-xs-12">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/reviews-block.php",
                        Array(),
                        Array(
                            "MODE" => "html",
                            "NAME" => GetMessage("BLOCK"),
                        )
                    );?>
                </div>
                <div class="clearfix"></div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "review",
                    Array(
                    "IBLOCK_ID" => "3",
                    "IBLOCK_TYPE" => "dc_builder_list",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "N",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => ".default",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "N",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "N",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => "",
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "3",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => "",
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "RAND",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC"
                    )
                    );?>
                </div>
            </div>
        </div>
        <div class="content-block">
            <div class='container'>
                <div class="row">
                    <div class="col-xs-12">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/brands-block.php",
                        Array(),
                        Array(
                            "MODE" => "html",
                            "NAME" => GetMessage("BLOCK"),
                        )
                    );?>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "brands", Array(
                        "IBLOCK_ID" => "4",
                        "IBLOCK_TYPE" => "dc_builder_list",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "N",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "COMPONENT_TEMPLATE" => ".default",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => "",
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "MESSAGE_404" => "",
                        "NEWS_COUNT" => "20",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PROPERTY_CODE" => "",
                        "SET_BROWSER_TITLE" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "N",
                        "SET_META_KEYWORDS" => "N",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "N",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "SORT",
                        "SORT_BY2" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "DESC",
                    ),false);?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
<?}?>
<?if ($is_contacts_page) {?>
    <div class="content-block-fullwidth yandex">
        <div class="contacts-map">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:map.yandex.view",
                            ".default",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "CONTROLS" => array(
                                    0 => "SMALLZOOM",
                                ),
                                "INIT_MAP_TYPE" => "MAP",
                                "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.82004986604052;s:10:\"yandex_lon\";d:37.601625298919686;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.60462937301638;s:3:\"LAT\";d:55.82042435759982;s:4:\"TEXT\";s:0:\"\";}}}",
                                "MAP_HEIGHT" => "336",
                                "MAP_ID" => "contact_map_1",
                                "MAP_WIDTH" => "100%",
                                "OPTIONS" => array(
                                    0 => "ENABLE_DRAGGING",
                                )
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacing-20"></div>
        <!--  Labels -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/contacts1.php",
                        Array(),
                        Array(
                            "MODE" => "html",
                            "NAME" => GetMessage("BLOCK"),
                        )
                    );?>
                </div>
                <div class="col-sm-4">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/contacts2.php",
                        Array(),
                        Array(
                            "MODE" => "html",
                            "NAME" => GetMessage("BLOCK"),
                        )
                    );?>
                </div>
                <div class="col-sm-4">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/contacts3.php",
                        Array(),
                        Array(
                            "MODE" => "html",
                            "NAME" => GetMessage("BLOCK"),
                        )
                    );?>
                </div>
            </div>
        </div>
        <div class="spacing-20"></div>
    </div>
<?}?>
<div class="clearfix"></div>
<div class="spacing-20"></div>
<div class="container">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-md-3 service-price">
                <h3>Косметический ремонт</h3>
                <p>&nbsp;</p>
                <div class="service-price-info">
                    <div class="spi-image">
                        <img src="/upload/iblock/39e/39e26544600604eaa6ff1afc82f04464.png" class="img-responsive" />
                        <div class='mark'>от 3500 руб/м2</div>
                    </div>
                    <ul>
                        <li>Очистка поверхностей</li>
                        <li>Выравнивание стен шпаклевкой</li>
                        <li>Наливной пол</li>
                        <li>Оклейка обоев</li>
                        <li>Окраска потолков в 1 слой</li>
                        <li>Укладка ламината или линолеума</li>
                        <li>Установка пластиковых плинтусов</li>
                        <li>Вывоз мусора</li>
                    </ul>
                </div>
                <hr class="hidden-md hidden-lg" />
            </div><!-- /service-price -->
            <div class="col-md-3 service-price">
                <h3>Капитальный ремонт</h3>
                <p>&nbsp;</p>
                <div class="service-price-info">
                    <div class="spi-image">
                        <img src="/upload/iblock/11b/11b73c0de7b43c3e7929f64f833c63c3.png" class="img-responsive" />
                        <div class='mark'>от 6000 руб/м2</div>
                    </div>
                    <ul>
                        <li>Демонтаж пола и очистка стен</li>
                        <li>Выравнивание стен гипсокартон</li>
                        <li>Стяжка пола</li>
                        <li>Оклейка обоев</li>
                        <li>Окраска потолков в 2 слоя</li>
                        <li>Укладка ламината или линолеума</li>
                        <li>Установка пластиковых плинтусов</li>
                        <li>Вывоз мусора</li>
                    </ul>
                </div>
                <hr class="hidden-md hidden-lg" />
            </div><!-- /service-price -->
            <div class="col-md-3 service-price">
                <h3>Евроремонт</h3>
                <p> </p>
                <div class="service-price-info">
                    <div class="spi-image">
                        <img src="/upload/iblock/7d1/7d1072513c511e057cee8a7a5b9c1351.png" class="img-responsive" />
                        <div class='mark'>от 8000 руб/м2</div>
                    </div>
                    <ul>
                        <li>Демонтаж существующих покрытий</li>
                        <li>Оштукатуривание стен по маякам</li>
                        <li>Финишная подготовка стен и потолка</li>
                        <li>Заливка пола стяжкой по маякам</li>
                        <li>Оклейка обоев / окраска стен</li>
                        <li>Окраска потолков в 2 слоя</li>
                        <li>Монтаж паркетной доски или ламината</li>
                        <li>Вывоз мусора</li>
                    </ul>
                </div>
                <hr class="hidden-md hidden-lg" />
            </div><!-- /service-price -->
            <div class="col-md-3 service-price">
                <h3>Элитный ремонт</h3>
                <p> </p>
                <div class="service-price-info">
                    <div class="spi-image">
                        <img src="/upload/iblock/39e/39e26544600604eaa6ff1afc82f04464.png" class="img-responsive" />
                        <div class='mark'>от 12000 руб/м2</div>                    </div>
                        <ul>
                            <li>Очистка поверхностей</li>
                            <li>Выравнивание стен шпаклевкой</li>
                            <li>Наливной пол</li>
                            <li>Оклейка обоев</li>
                            <li>Окраска потолков в 1 слой</li>
                            <li>Укладка ламината или линолеума</li>
                            <li>Установка пластиковых плинтусов</li>
                            <li>Вывоз мусора</li>
                        </ul>
                    </div>
                    <hr class="hidden-md hidden-lg" />
                </div><!-- /service-price -->
            </div>
        </div>
    </div>
</div>
</div>

<div class="footer">
<div class='container'>
    <div class="row">
        <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom-menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "COMPONENT_TEMPLATE" => "bottom-menu",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(
                    ),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "ROOT_MENU_TYPE" => "bottom",
                    "USE_EXT" => "N"
                ),
                false
            );?>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 pull-right">
            <p>
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/address.php",
                    Array(),
                    Array(
                        "MODE" => "html",
                        "NAME" => GetMessage("ADDRESS"),
                    )
                );?>
            </p>
            <p>
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."include/licence.php",
                    Array(),
                    Array(
                        "MODE" => "html",
                        "NAME" => GetMessage("LICENCE"),
                    )
                );?>
            </p>
        </div>
        <div class="clearfix visible-xs"></div>
        <div class="col-md-2 col-sm-6 copyright">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/copyright.php",
                Array(),
                Array(
                    "MODE" => "html",
                    "NAME" => GetMessage("COPYRIGHT"),
                )
            );?>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <?$APPLICATION->IncludeFile(
                SITE_DIR."include/counters.php",
                Array(),
                Array(
                    "MODE" => "text",
                    "NAME" => GetMessage("COUNTERS"),
                )
            );?>
        </div>
    </div>
</div>
</div>
<div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content"></div>
</div>
</div>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.magnific-popup.js"></script>
</body>
</html>
