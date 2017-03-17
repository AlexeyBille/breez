<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	".default",
	Array(
		"COMPONENT_TEMPLATE" => ".default",
		"FORGOT_PASSWORD_URL" => "w",
		"PROFILE_URL" => "e",
		"REGISTER_URL" => "q",
		"SHOW_ERRORS" => "N"
	)
);?><br>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>