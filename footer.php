<?IncludeTemplateLangFile(__FILE__);?>
</div>
</div>
</div>
</div>

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
),
false
);?>
</div>
<div class="clearfix"></div>

</div>
</div>
</div>
<?}

if ($is_contacts_page) {?>
<div class="content-block-fullwidth">
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
    <div class="col-md-4 service-price">
<h3>Эконом-предложение</h3>
<p>материал заказчика</p>                <div class="service-price-info">
    <div class="spi-image">
        <img src="/upload/iblock/39e/39e26544600604eaa6ff1afc82f04464.png" class="img-responsive" />
        <div class='mark'>от 3500 руб/м2</div>                    </div>
    <ul>
<li>Очистка поверхностей</li>
<li>Выравнивание стен шпаклевкой</li>
<li>Наливной пол</li>
<li>Оклейка обоев</li>
<li>Окраска потолков в 1 слой</li>
<li>Укладка ламината или линолеума</li>
<li>Установка пластиковых плинтусов</li>
<li>Вывоз мусора</li>
</ul>                </div>
<hr class="hidden-md hidden-lg" />
</div><!-- /service-price -->
    <div class="col-md-4 service-price">
<h3>Бизнес-предложение</h3>
<p>черновой материал включен</p>                <div class="service-price-info">
    <div class="spi-image">
        <img src="/upload/iblock/11b/11b73c0de7b43c3e7929f64f833c63c3.png" class="img-responsive" />
        <div class='mark'>от 4000 руб/м2</div>                    </div>
    <ul>
<li>Демонтаж пола и очистка стен</li>
<li>Выравнивание стен гипсокартон</li>
<li>Стяжка пола</li>
<li>Оклейка обоев</li>
<li>Окраска потолков в 2 слоя</li>
<li>Укладка ламината или линолеума</li>
<li>Установка пластиковых плинтусов</li>
<li>Вывоз мусора</li>
</ul>                </div>
<hr class="hidden-md hidden-lg" />
</div><!-- /service-price -->
    <div class="col-md-4 service-price">
<h3>Люкс-предложение</h3>
<p>весь материал включен</p>                <div class="service-price-info">
    <div class="spi-image">
        <img src="/upload/iblock/7d1/7d1072513c511e057cee8a7a5b9c1351.png" class="img-responsive" />
        <div class='mark'>от 4500 руб/м2</div>                    </div>
    <ul>
<li>Демонтаж существующих покрытий</li>
<li>Оштукатуривание стен по маякам</li>
<li>Финишная подготовка стен и потолка</li>
<li>Заливка пола стяжкой по маякам</li>
<li>Оклейка обоев / окраска стен</li>
<li>Окраска потолков в 2 слоя</li>
<li>Монтаж паркетной доски или ламината</li>
<li>Вывоз мусора</li>
</ul>                </div>
<hr class="hidden-md hidden-lg" />
</div><!-- /service-price -->
</div>
</div>

</div>
<div class="footer-button">
<div class='container'>
<div class="row">
<div class="col-xs-12">
<?$APPLICATION->IncludeFile(
    SITE_DIR."include/bottom-button.php",
    Array(),
    Array(
        "MODE" => "html",
        "NAME" => GetMessage("BUTTON"),
    )
);?>
<div class="spacing-25"></div>
</div>
</div>
</div>
</div>

<?if ($is_main_page) {?>
</div>
</div>
<?}?>

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
<p><?$APPLICATION->IncludeFile(
    SITE_DIR."include/address.php",
    Array(),
    Array(
        "MODE" => "html",
        "NAME" => GetMessage("ADDRESS"),
    )
);?></p>
<p><?$APPLICATION->IncludeFile(
    SITE_DIR."include/licence.php",
    Array(),
    Array(
        "MODE" => "html",
        "NAME" => GetMessage("LICENCE"),
    )
);?></p>
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
