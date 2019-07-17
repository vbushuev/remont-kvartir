<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
$is_main_page = ($APPLICATION->GetCurPage(true)== SITE_DIR."index.php") ? true : false;
$is_contacts_page = ($APPLICATION->GetCurPage(true)== SITE_DIR."contacts/index.php") ? true : false;

if(!CModule::IncludeModule("designcode.builder")) {
	ShowError(GetMessage("DC_BUILDER_ERROR_MODULE"));
}
?><!DOCTYPE html>
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

    <!-- Custom CSS -->
    <link href="<?=SITE_TEMPLATE_PATH?>/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="head-logo">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 block-logo"><a class="logo" href="/"><?$APPLICATION->IncludeFile(
			SITE_DIR."include/logo.php",
			Array(),
			Array(
				"MODE" => "html",
				"NAME" => GetMessage("LOGO"),
			)
		);?></a></div>
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
        		<div class="phone"><?$APPLICATION->IncludeFile(
				    SITE_DIR."include/phone.php",
				    Array(),
				    Array(
				        "MODE" => "text",
				        "NAME" => GetMessage("PHONE"),
				    )
				);?></div>
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
        <div class="container">
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
</div>

<?if ($is_main_page) {?>
<div class="slider-main-page">
    <div class='container'>
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

<?if ($is_main_page) {?>
<div class="wrapper-table">
<div class="mainText">
<div class="container">
<div class="row">
<div class="col-xs-12">
      <h1>Ремонт квартир в Москве под ключ</h1>
<ul>
 <li>Нужно произвести <strong>ремонт квартиры под ключ</strong> в Москве или Московской области?</li>
 <li>Требуется ответственный, опытный исполнитель по доступной стоимости?</li>
</ul>
<p>Компания &laquo;Рем Проект&raquo; ремонтирует квартиры профессионально, оперативно, предоставляя длительные гарантии высокого качества результата.</p>
<p>Мы &ndash; специалисты строительной сферы, с огромным опытом проведения разнообразных отделочно-ремонтных мероприятий. Выполняем любые типы ремонтов, начиная от сложных капитальных ремонтов, VIP-ремонтов и заканчивая простой косметикой квартир.</p>

<h2>Что &laquo;Рем Проект&raquo; предлагает своим заказчикам?</h2>
<p>Наш богатый и успешный опыт, высокий уровень квалификации работников позволяет справиться с самыми непростыми задачами. Какой ремонт жилья вы бы ни затеяли, вы всегда можете рассчитывать на нашу профессиональную помощь.</p>
<ul>
 <li>Ремонтируем и монтируем инженерные коммуникации.</li>
 <li>Выполняет все типы ремонта.</li>
 <li>Работаем с любыми декоративными отделочными материалами.</li></ul>
<p>У нас по выгодной цене можно заказать ремонт, как в квартире, так и в отдельных помещениях.</p>
<p>Если вам нужен ремонт квартиры в Москве, и вы ищете специалистов для его проведения, обратите внимание на наше предложение. У нас большой выбор мастеров, которые имеют высокую квалификацию и выполняют широкий спектр строительно-монтажных и отделочных работ. С нашей помощью ваш дом станет стильным и комфортным.</p>
<p>Мы предлагаем клиентам высокий уровень сервиса и оказываем услуги по ремонту под ключ в новостройке, используя новейшие технологии и современные материалы. У нас есть необходимые допуски и разрешения, а техническая база и профессионализм сотрудников позволяют воплощать самые сложные архитектурные и дизайнерские идеи. Мы преобразуем жилье в соответствии с предварительно разработанным проектом, который может предусматривать как минимальные изменения с небольшими затратами, так и элитный ремонт.</p>
<h2> Особенности ремонта квартиры под ключ в Москве</h2>
<p>Чтобы заказать у нас ремонт квартиры, вам потребуется обратиться к нам и оставить заявку, выбрав удобный способ — на сайте в специальной форме или по телефону.</p>
<p>Затем выполняются следующие действия:</p>
<ul>
<li> Согласуется время приезда замерщика. Наш сотрудник посетит квартиру в удобное для вас время и выполнит все необходимые операции бесплатно. Выезд замерщика осуществляется во все районы и округа Москвы и не требует финансовых вложений от клиентов.
<li> Осмотр жилых помещений. Во время этого этапа наш специалист оценит состояние квартиры и определит вместе с ее владельцем перечень предполагаемых изменений. Он также проводит необходимые замеры, используя инструменты и оборудование.
<li> Оформление договора. В нем указывают сроки выполнения ремонта квартиры в новостройке на каждом этапе и перечень работ по преобразованию жилья.
<li> Подготовку проекта. Составляется техническое задание и разрабатывается проектная документация, на основе которой будет проводиться ремонт квартиры в Москве в новостройке. При этом используется информация, собранная замерщиком.
<li> Выполнение строительных и отделочных работ, предусмотренных проектом и договором. Оно осуществляется с соблюдением технологии и под контролем наших специалистов, которые имеют допуски и необходимую квалификацию.
</ul>
<p>На завершающем этапе ремонта выносится строительный мусор и производится уборка. Вы сможете наслаждаться комфортным жильем с интересным по дизайну интерьером, не тратя время и силы на удаление оставшихся после ремонта загрязнений.</p>
<h2> Преимущества для клиентов</h2>
<p>Обратившись к нам и доверив выполнение работ нашим специалистам, вы можете рассчитывать на безупречный результат и дополнительные бонусы.</p>
<h3> Почему сотрудничество будет выгодным для вас? </h3>
<p>Во-первых, мы создаем стильное и комфортное жилье, воплощая все пожелания клиентов и учитывая современные тенденции в сфере дизайна квартир. Среди других преимуществ, которыми сопровождается сотрудничество с нами, можно выделить:</p>
<ul>
<li>Документальное оформление оказываемых услуг и предоставление гарантий на все виды выполненных технологических операций.</li>
<li> Высокое качество проводимых строительно-монтажных и отделочных работ по ремонту квартиры под ключ. Оно обеспечивается за счет использования новейших технологий, профессионализма мастеров и применения сертифицированных материалов, которые приобретаются у проверенных поставщиков.</li>
<li> Гибкую ценовую политику. Индивидуальный подход к формированию окончательной суммы, необходимой для оплаты ремонта квартиры в Москве, позволяет нашим клиентам существенно сэкономить.</li>
 <li> Прозрачное ценообразование. Стоимость предстоящих работ по изменению интерьера вашего жилья определяется при составлении сметы, согласуется с клиентом и не изменяется в процессе оказания услуг.</li>
</ul>
<p>Мы выполняем все виды работ, соблюдая санитарно-гигиенические нормы, технику безопасности и требования, регламентируемые ГОСТ и другими документами.</p>
<h3> Как мы достигаем безупречного результата</h3>
<p>Решив воспользоваться нашими услугами и заключить договор на проведение ремонта квартир в Москве, вы получите 100% воплощение ваших представлений об идеальном интерьере. Ваша квартира станет функциональной, удобной и стильной. Чтобы добиться такого результата, мы выполняем следующее:</p>
<ul>
<li> Отбираем необходимые материалы с особой тщательностью. Для преобразований жилья используется качественная продукция, которая экологически безопасна и сертифицирована согласно требованиям законодательства РФ. </li>
<li> Применяем инструменты и высокотехнологическое оборудование. Благодаря нашему техническому оснащению и профессионализму мастеров возможно выполнение строительно-ремонтных работ любой сложности. </li>
<li> Точно следуем разработанным технологиям. В рамках ремонта квартиры в Москве под ключ все технические операции проводятся согласно рекомендациям производителей материалов. Кроме того, наши сотрудники применяют новейшие разработки в сфере звукоизоляции и гидроизоляции жилых помещений, и при прокладке внутренних инженерных коммуникаций.</li>
 <li> Предоставляем заказчику возможность контролировать проведение ремонта на каждом этапе. Вы сможете наблюдать выполнение строительных и отделочных работ, проверяя их качество и соответствие отраженному в смете перечню.</li>
</ul>
<p>При оказании услуг по ремонту квартиры в новостройке мы неукоснительно соблюдаем указанный в договоре график и не нарушаем сроки. За счет применения современного оснащения и оптимальной организации труда создаются условия, позволяющие экономить время без ущерба для качества.</p>
<h2> Как оформить заказ на ремонт квартиры в новостройке или вторичке?</h2>
<p>Для этого вам потребуется позвонить по указанному телефону или оставить заявку на сайте. Наши сотрудники отреагируют на ваше обращение в самые короткие сроки, а специалисты технического отдела предоставят всю интересующую вас информацию и бесплатно проконсультируют по поводу ремонта квартиры в новостройке или вторичке. На основе заявки будут осуществляться дальнейшие действия, которые могут корректироваться заказчиком.</p>
<h2> Как получить достойное качество без огромных затрат? </h2>
<p>При выборе исполнителей для ремонта квартиры в новостройке объяснимо желание клиента снизить свои затраты? Можно ли уменьшить сумму, необходимую для преобразования жилья, и получить безупречный результат? Да, если вы воспользуетесь услугами наших специалистов. Мы сможем подобрать оптимальное дизайнерское решение для каждого клиента и воплотим ваши пожелания по преобразованию и декоративному оформлению помещений с минимальными затратами.</p>
<h2> Ремонт квартир в Москве без проблем и хлопот</h2>
<p>В процессе выполнения строительных и отделочных работ по преобразованию жилья могут возникать различные сложности. Чтобы избежать проблем с соседями и контролирующими органами, необходимо обратить внимание на следующее:</p>
<ul>
<li> Проведение ремонтных работ в Москве регламентируется законодательно и предусматривает выполнение особенно шумных операций с понедельника по субботу включительно с 9.00 до 13.00 и с 15.00 до 19.00. В воскресенье и в праздничные дни работы, которые сопровождаются повышенным уровнем шума, запрещены. </li>
<li> Все изменения в квартире, предполагающие перепланировку, должны осуществляться после согласования в контролирующих органах. При отсутствии разрешений и оформления соответствующих документов жилье будет сложно продать или обменять. </li>
<li> Поскольку ремонт занимает некоторый период времени, то следует проинформировать о его проведении соседей, благодаря чему можно избежать недоразумений и конфликтов.</li>
 </ul>

<p>Также наши специалисты разрабатывают грамотные технические проектные документы, в том числе оригинальные, стильные дизайн-проекты. Профессиональный дизайнерский проект с учетом всех требований и пожеланий заказчика значительно облегчит осуществление ремонта квартиры под ключ и поможет дать нужный клиенту результат, учесть абсолютно все нюансы и мелочи интерьерного оформления квартиры. Поэтому заказывайте создание дизайн-проекта в нашей фирме. Мы:</p>
<ul>
 <li>выберем подходящую именно вам интерьерную стилистику;</li>
 <li>продумаем в деталях дизайн комнат (цветовые решения, свет, декор и т.д.);</li>
 <li>подберем красивые и надежные декоративные стройматериалы.</li></ul>
<p>Создадим 3D-модель дизайн-проекта и наглядно покажем, как будет выглядеть ваша квартира после ремонта, а вы, при необходимости, внесете нужные дополнения и изменения в план-проект.</p>
<h2>Ремонтируем (монтируем) инженерные системы</h2>
<ul>
 <li>Устанавливаем в туалете и ванной, на кухне современные трубы водопровода и канализации. Если в вашей квартире трубопровод старый и проржавевший, то мы демонтируем существующую систему подачи и отвода воды, смонтируем новые трубы, например, металлопластиковые, пластиковые, стальные или медные. Такие коммуникации не поддаются коррозии, отлично приглушают шум воды, имеют длительные эксплуатационные сроки. Каждый материал обладает определенными преимуществами, о которых вам расскажут наши сантехники. Трубопровод устанавливается в специальные штробы, не занимает лишнего места и не влияет на внешний вид санитарного узла и кухни.</li>
 <li>Монтируем новую электропроводку из меди. Алюминиевые электропровода тоже стоит заменить. Старая электрическая проводка плохо справляется с современными мощными электроприборами. Более того, с течением времени алюминий становится ломким, а это небезопасно. Наши электрики подберут провода нужной мощности, разведут проводку по квартире, организуют качественное освещение во всех комнатах.</li>
 <li>Устанавливаем эффективные системы отопления. В ходе ремонта квартиры под ключ можем заменить отопительные радиаторы, стояки советского образца современной отопительной системой.</li>
 <li>Организовываем качественную вентиляцию. Позаботимся о том, чтобы в вашем жилище была хорошая вентиляция, что особенно важно для санузла и кухни.</li></ul>
<p>После выполнения таких капитальных ремонтных работ можно приступать к черновой и чистовому ремонту квартиры.</p>
<h2>Проводим черновые и чистовые отделочные мероприятия</h2>
<p>Черновая и чистовая ремонта &ndash; важная стадия любого ремонта квартиры в новостройке или вторичке. Мастера &laquo;Рем Проект&raquo;:</p>
<ul>
 <li>Устранят все недостатки (неровности, трещинки, сколы и т.п.) поверхностей (стены, полы, потолки). Для этого выполняется стяжка, осуществляются штукатурные и шпаклевочные работы.</li>
 <li>При необходимости дополнительно утеплят, звукоизолируют помещения, гидроизолируют полы.</li>
 <li>Если нужно, на стадии чернового ремонта мы можем заменить старые оконные конструкции.</li></ul>
<p>После проведения такой подготовки к чистовому ремонту можно оформлять интерьер квартиры финишными декоративными стройматериалами. Работаем со всеми типами современной ремонта. Вы можете выбирать любые материалы, исходя из своих вкусов и финансовых возможностей.</p>
<p>Обращайтесь к нам, заказывайте ремонт квартир в Москве под ключ и очень скоро вы получите отличный результат по доступной цене. Работаем быстро и при этом очень качественно. Осуществляем капитальные ремонты, косметику, евроремонты, VIP-ремонты. Разрабатываем любые проекты, создаем эффектные интерьеры. Всегда идем навстречу заказчику. Умеем работать в рамках небольших бюджетов. Составляем адекватные сметы, предоставляем гарантии. Все наши специалисты очень ответственны, квалифицированы, профессиональны. Нам всегда можно доверить даже самую сложную реконструкцию. </p>
</div>
	</div>
	</div>
	</div>
<div class="wrapper-table__head">
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
        <div class="row">
            <div class="col-xs-12">
