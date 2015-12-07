<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Ремонт и отделка квартир в Москве, а также коммерческой недвижисоти недорого от компании BavHouse Group. Лучшие цены на ремонт квартир и офисов в Москве.");
$APPLICATION->SetPageProperty("keywords", "ремонт квартир, ремонт квартир в москве, ремонт квартир цены, ремонт квартир недорого, ремонт и отделка квартир, ремонт квартир и офисов");
$APPLICATION->SetPageProperty("title", "Ремонт квартиры и коммерческой недвижимости • BavHouse Group");
$APPLICATION->SetTitle("Ремонт квартиры и коммерческой недвижимости • BavHouse Group");
	//тестовый коммит
?>
	<hr>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "otzivi", Array(
	"COMPONENT_TEMPLATE" => "otzivi",
		"IBLOCK_TYPE" => "aspro_allcorp_content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "9",	// Код информационного блока
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортиводить под списком
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SHOW_404" => "N",	// Показ специальной страницы
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"IMAGE_POSITION" => "left"
	),
	false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>