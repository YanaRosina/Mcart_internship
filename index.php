<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания");
?>
<div>
	
	<?$GLOBALS['arrFilter'] = array("=PROPERTY_PRIORITY_VALUE"=> "YES");
	
	$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "604800",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "Ads",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "PRICE",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_FILTER" => "Y",
		"COMPONENT_TEMPLATE" => "slider"
	),
	false
);?>

	<div class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						"", 
						array(
						"AREA_FILE-SHOW" => "file",
						"PATH" => "/include/advantage1.php",
						"EDIT_TEMPLATE" => "",
						"AREA_FILE-SUFFIX" => "inc",
						"AREA_FILE_SHOW" => "file"
						),
						false
					);?>
				</div>
				<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						"", 
						array(
						"AREA_FILE-SHOW" => "file",
						"PATH" => "/include/advantage2.php",
						"EDIT_TEMPLATE" => "",
						"AREA_FILE-SUFFIX" => "inc",
						"AREA_FILE_SHOW" => "file"
						),
						false
					);?>
				</div>
				<div class="col-md-6 col-lg-4 mb-3 mb-lg-0">
					<?$APPLICATION->IncludeComponent(
						"bitrix:main.include", 
						"", 
						array(
						"AREA_FILE-SHOW" => "file",
						"PATH" => "/include/advantage3.php",
						"EDIT_TEMPLATE" => "",
						"AREA_FILE-SUFFIX" => "inc",
						"AREA_FILE_SHOW" => "file"
						),
						false
					);?>
				</div>
			</div>
		</div>
	</div>

		<?$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"new_properties", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "",
		"CACHE_TYPE" => "N",
		"COMPONENT_TEMPLATE" => "new_properties",
		"DETAIL_URL" => "#SITE_DIR##IBLOCK_CODE#/#CODE#/",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "NAME",
			2 => "PREVIEW_TEXT",
			3 => "PREVIEW_PICTURE",
			4 => "PROPERTY_AREA",
			5 => "PROPERTY_FLOORS",
			6 => "PROPERTY_BATHROOMS",
			7 => "PROPERTY_GARAGE",
			8 => "PROPERTY_PRICE",
			9 => "",
		),
		"IBLOCKS" => array(
			0 => "5",
		),
		"IBLOCK_TYPE" => "Ads",
		"NEWS_COUNT" => "9",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC"
	),
	false
);?>   

 
		<?  
		$APPLICATION->IncludeComponent("bitrix:news.line", "services", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "3600000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMPONENT_TEMPLATE" => ".default",
		"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
		"FIELD_CODE" => array(	// Поля
			0 => "PROPERTY_LINK",
			1 => "NAME",
		),
		"IBLOCKS" => array(	// Код информационного блока
			0 => "6",
		),
		"IBLOCK_TYPE" => "services",	// Тип информационного блока
		"NEWS_COUNT" => "6",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
	),
	false
);
?> 
		<?  
		$APPLICATION->IncludeComponent(
	"bitrix:news.line", 
	"our_blog", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "60480",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "our_blog",
		"DETAIL_URL" => "#SITE_DIR#/about-the-service/news/#CODE#/",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"IBLOCKS" => array(
			0 => "1",
		),
		"IBLOCK_TYPE" => "news",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "NAME",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "DESC"
	),
	false
);
?> 

<p>
	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
</p>