<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "ремонт квартир, цена на ремонт квартиры, ремонт квартир в Москве, ремонт квартир под ключ, ремонт квартир в новостройке, ремонт квартиры с материалами, стоимость ремонта квартиры");
$APPLICATION->SetPageProperty("description", "Нужно произвести ремонт квартир в Москве? Требуется ответственный, опытный исполнитель по доступной стоимости? Компания «Рем Проект» выполнит ремонт квартиры профессионально и оперативно.");
$APPLICATION->SetTitle("Ремонт квартир в Москве под ключ");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"service-mainpage",
	Array(
		"IBLOCK_ID" => "2",
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
		"COMPONENT_TEMPLATE" => "service-mainpage",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
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
		"PROPERTY_CODE" => array(0=>"LINK",1=>"PRICE",2=>"",),
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
	)
);?>
<hr>
<h2>НАШИ ПРЕИМУЩЕСТВА</h2>
<div class="row">
	<div class="col-sm-4">
		 <?$APPLICATION->IncludeFile(
			SITE_DIR."include/advantage1.php",
			Array(),
			Array(
				"MODE" => "html",
				"NAME" => "преимущества",
			)
		);?>
	</div>
	<div class="col-sm-4">
		 <?$APPLICATION->IncludeFile(
			SITE_DIR."include/advantage2.php",
			Array(),
			Array(
				"MODE" => "html",
				"NAME" => "преимущества",
			)
		);?>
	</div>
	<div class="col-sm-4">
		 <?$APPLICATION->IncludeFile(
			SITE_DIR."include/advantage3.php",
			Array(),
			Array(
				"MODE" => "html",
				"NAME" => "преимущества",
			)
		);?>
	</div>
	<div class="clearfix visible-sm">
	</div>
</div>
<div class="hidden-xs">
	<hr>
	<h2>КАК МЫ РАБОТАЕМ</h2>
	 <?$APPLICATION->IncludeFile(
		SITE_DIR."include/how-work.php",
		Array(),
		Array(
			"MODE" => "html",
			"NAME" => "блок",
		)
	);?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
