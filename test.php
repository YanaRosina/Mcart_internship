<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Тестовая");
?><?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_form", Array(
	"FORGOT_PASSWORD_URL" => "/login/",	// Страница забытого пароля
		"PROFILE_URL" => "",	// Страница профиля
		"REGISTER_URL" => "/registration.php",	// Страница регистрации
		"SHOW_ERRORS" => "N",	// Показывать ошибки
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>