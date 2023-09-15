<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"bottom_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "bottom_menu",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N"
	)
);?>
</div>
<div>
 <br>
</div>
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>