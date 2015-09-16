<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>

<?
	$arFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y", "GLOBAL_ACTIVE" => "Y", "ACTIVE_DATE" => "Y");
	$arFilter["DEPTH_LEVEL"] = "1";
	$arSections = CCache::CIBLockSection_GetList(array("SORT" => "ASC", "NAME" => "ASC", "CACHE" => array("TAG" => CCache::GetIBlockCacheTag($arParams["IBLOCK_ID"]), "GROUP" => array("ID"), "MULTI" => "N")), $arFilter, false, array("ID", "NAME", "IBLOCK_ID", "DEPTH_LEVEL", "SECTION_PAGE_URL", "PICTURE", "DETAIL_PICTURE", "UF_INFOTEXT", "DESCRIPTION"));
	
	unset($arFilter);
	foreach ($arSections as $arSection) {
		echo '<div class="row"><div class="col-md-12">';		
		echo '<h3>'.$arSection["NAME"].'</h3>';
		
		global $arFilter;
		$arFilter["SECTION_ID"] = $arSection["ID"];
		$arFilter["SECTION_CODE"] = $arSection["CODE"];

		?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"projects",
				Array(
					"SHOW_DETAIL" => $arParams["SHOW_DETAIL"],
					"SHOW_IMAGE" => $arParams["SHOW_IMAGE"],
					"IMAGE_POSITION" => $arParams["IMAGE_POSITION"],
					"IBLOCK_TYPE"	=>	$arParams["IBLOCK_TYPE"],
					"IBLOCK_ID"	=>	$arParams["IBLOCK_ID"],
					"NEWS_COUNT"	=>	2,
					"SORT_BY1"	=>	$arParams["SORT_BY1"],
					"SORT_ORDER1"	=>	$arParams["SORT_ORDER1"],
					"SORT_BY2"	=>	$arParams["SORT_BY2"],
					"SORT_ORDER2"	=>	$arParams["SORT_ORDER2"],
					"FIELD_CODE"	=>	$arParams["LIST_FIELD_CODE"],
					"PROPERTY_CODE"	=>	$arParams["LIST_PROPERTY_CODE"],
					"DETAIL_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
					"SECTION_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
					"IBLOCK_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
					"DISPLAY_PANEL"	=>	$arParams["DISPLAY_PANEL"],
					"SET_TITLE"	=>	$arParams["SET_TITLE"],
					"SET_STATUS_404" => $arParams["SET_STATUS_404"],
					"INCLUDE_IBLOCK_INTO_CHAIN"	=>	$arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
					"CACHE_TYPE"	=>	$arParams["CACHE_TYPE"],
					"CACHE_TIME"	=>	$arParams["CACHE_TIME"],
					"CACHE_FILTER"	=>	$arParams["CACHE_FILTER"],
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"DISPLAY_TOP_PAGER"	=>	"N",
					"DISPLAY_BOTTOM_PAGER"	=>	"N",
					"PAGER_TITLE"	=>	$arParams["PAGER_TITLE"],
					"PAGER_TEMPLATE"	=>	$arParams["PAGER_TEMPLATE"],
					"PAGER_SHOW_ALWAYS"	=>	$arParams["PAGER_SHOW_ALWAYS"],
					"PAGER_DESC_NUMBERING"	=>	$arParams["PAGER_DESC_NUMBERING"],
					"PAGER_DESC_NUMBERING_CACHE_TIME"	=>	$arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
					"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
					"DISPLAY_DATE"	=>	$arParams["DISPLAY_DATE"],
					"DISPLAY_NAME"	=>	"Y",
					"DISPLAY_PICTURE"	=>	$arParams["DISPLAY_PICTURE"],
					"DISPLAY_PREVIEW_TEXT"	=>	$arParams["DISPLAY_PREVIEW_TEXT"],
					"PREVIEW_TRUNCATE_LEN"	=>	$arParams["PREVIEW_TRUNCATE_LEN"],
					"ACTIVE_DATE_FORMAT"	=>	$arParams["LIST_ACTIVE_DATE_FORMAT"],
					"USE_PERMISSIONS"	=>	$arParams["USE_PERMISSIONS"],
					"GROUP_PERMISSIONS"	=>	$arParams["GROUP_PERMISSIONS"],
					"FILTER_NAME"	=>	"arFilter",
					"HIDE_LINK_WHEN_NO_DETAIL"	=>	$arParams["HIDE_LINK_WHEN_NO_DETAIL"],
					"CHECK_DATES"	=>	$arParams["CHECK_DATES"],
					"NO_SHOW_MORE"	=>	"Y"
				),
				$component
			);?>
		<?
		echo '</div></div>';
	}
?>

<?/*$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"projects-list",
	Array(
		"COUNT_IN_LINE" => $arParams["COUNT_IN_LINE"],
		"COUNT_LIST_LINE" => $arParams["COUNT_LIST_LINE"],
		"VIEW_TYPE" => $arParams["VIEW_TYPE"],
		"SHOW_TABS" => $arParams["SHOW_TABS"],
		"SHOW_NAME" => $arParams["SHOW_NAME"],
		"SHOW_DETAIL" => $arParams["SHOW_DETAIL"],
		"SHOW_IMAGE" => $arParams["SHOW_IMAGE"],
		"IMAGE_POSITION" => $arParams["IMAGE_POSITION"],
		"IBLOCK_TYPE"	=>	$arParams["IBLOCK_TYPE"],
		"IBLOCK_ID"	=>	$arParams["IBLOCK_ID"],
		"NEWS_COUNT"	=>	$arParams["NEWS_COUNT"],
		"SORT_BY1"	=>	$arParams["SORT_BY1"],
		"SORT_ORDER1"	=>	$arParams["SORT_ORDER1"],
		"SORT_BY2"	=>	$arParams["SORT_BY2"],
		"SORT_ORDER2"	=>	$arParams["SORT_ORDER2"],
		"FIELD_CODE"	=>	$arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE"	=>	$arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL"	=>	$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL"	=>	$arParams["DISPLAY_PANEL"],
		"SET_TITLE"	=>	$arParams["SET_TITLE"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN"	=>	$arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE"	=>	$arParams["CACHE_TYPE"],
		"CACHE_TIME"	=>	$arParams["CACHE_TIME"],
		"CACHE_FILTER"	=>	$arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER"	=>	$arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER"	=>	$arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE"	=>	$arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE"	=>	$arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS"	=>	$arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING"	=>	$arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME"	=>	$arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"DISPLAY_DATE"	=>	$arParams["DISPLAY_DATE"],
		"DISPLAY_NAME"	=>	"Y",
		"DISPLAY_PICTURE"	=>	$arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT"	=>	$arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN"	=>	$arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT"	=>	$arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS"	=>	$arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS"	=>	$arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME"	=>	"arFilter",
		"HIDE_LINK_WHEN_NO_DETAIL"	=>	$arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES"	=>	$arParams["CHECK_DATES"],
	),
	$component
);*/?>