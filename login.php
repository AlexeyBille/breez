<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("TITLE", "Вход");
$APPLICATION->SetPageProperty("keywords", "Вход");
$APPLICATION->SetPageProperty("description", "Вход");
$APPLICATION->SetTitle("Вход");
?><? $APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_form", Array(
    "FORGOT_PASSWORD_URL" => "",    // Страница забытого пароля
    "PROFILE_URL"         => "",    // Страница профиля
    "REGISTER_URL"        => "/registration.php",    // Страница регистрации
    "SHOW_ERRORS"         => "Y",    // Показывать ошибки
    "COMPONENT_TEMPLATE"  => ".default",
	"NEW_USER_REGISTRATION" => "Y"
), false); ?><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>