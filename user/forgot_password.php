<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Восстановление пароля");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.forgotpasswd", 
	".default", 
	array(
		"AUTH_AUTH_URL" => "/user/",
		"AUTH_REGISTER_URL" => "/user/registration.php",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>