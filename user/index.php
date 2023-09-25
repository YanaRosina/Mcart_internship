<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация пользователя");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth_form", 
	array(
		"FORGOT_PASSWORD_URL" => "/user/forgot_password.php",
		"PROFILE_URL" => "/user/profile.php",
		"REGISTER_URL" => "/user/registration.php",
		"SHOW_ERRORS" => "N",
		"COMPONENT_TEMPLATE" => "auth_form"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>