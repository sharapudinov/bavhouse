<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();

$arTemplateParameters = array(
	"VIEW_TYPE" => array(
		"SORT" => 100,
		"NAME" => GetMessage("VIEW_TYPE"),
		"TYPE" => "LIST",
		"VALUES" => array(
			"list" => GetMessage("VIEW_TYPE_LIST"),
			"accordion" => GetMessage("VIEW_TYPE_ACCORDION"),
		),
		"DEFAULT" => "list",
		"REFRESH" => "Y"
	),
	"SHOW_TABS" => array(
		"SORT" => 100,
		"NAME" => GetMessage("SHOW_TABS"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
	"SHOW_SECTION_PREVIEW_DESCRIPTION" => array(
		"SORT" => 500,
		"NAME" => GetMessage("SHOW_SECTION_PREVIEW_DESCRIPTION"),
		"TYPE" => "CHECKBOX",
		"DEFAULT" => "Y",
	),
);

$arTemplateParameters["IMAGE_POSITION"] = array(
	"SORT" => 250,
	"NAME" => GetMessage("IMAGE_POSITION"),
	"TYPE" => "LIST",
	"VALUES" => array(
		"left" => GetMessage("IMAGE_POSITION_LEFT"),
		"right" => GetMessage("IMAGE_POSITION_RIGHT"),
	),
	"DEFAULT" => "left",
);
?>