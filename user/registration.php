<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Регистрация пользователя");
$APPLICATION->SetTitle("Регистрация пользователя");
?><div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:main.register",
	"registration",
	Array(
		"AUTH" => "Y",
		"COMPONENT_TEMPLATE" => "registration",
		"REQUIRED_FIELDS" => array(),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(),
		"SUCCESS_PAGE" => "",
		"USER_PROPERTY" => array(0=>"UF_TYPE",),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y"
	)
);?>
</div>
<div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>