<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>
Пустая страница. <a href="/bitrix/admin/">Перейти в Панель &nbsp;Управления</a>
<?php
// 	$APPLICATION->IncludeComponent(
// 	"bitrix:main.include",
// 	"template2", 
// 	[
// 		"AREA_FILE_SHOW" => "file",	// Показывать включаемую область
// 		"PATH" => SITE_TEMPLATE_PATH . "/components/bitrix/main.include/template2/template.php",	// Путь к файлу области
// 	],
// 	false
// );


// $APPLICATION->IncludeComponent(
// 	"bitrix:main.include",
// 	"",
// 	Array(
// 	"AREA_FILE_SHOW" => "file", 
// 	"PATH" => SITE_TEMPLATE_PATH . "/test.php",	// Путь к файлу области
// 	)
// );

	

?>
<?php 

	// echo '<pre>';
	// var_dump(SITE_TEMPLATE_PATH);
	echo '</pre>';

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>