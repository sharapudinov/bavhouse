<?/* if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

    $arSections = CCache::CIBlockSection_GetList(
        [
            "SORT"  => "ASC",
            "ID"    => "ASC",
            "CACHE" => [
                "TAG"   => CCache::GetIBlockCacheTag(
                    CCache::$arIBlocks[ SITE_ID ]["aspro_allcorp_content"]["aspro_allcorp_services"][0]
                ),
                "MULTI" => "Y"
            ]
        ],
        [
            "IBLOCK_ID"           => CCache::$arIBlocks[ SITE_ID ]["aspro_allcorp_content"]["aspro_allcorp_services"][0],
            "ACTIVE"              => "Y",
            "GLOBAL_ACTIVE"       => "Y",
            "ACTIVE_DATE"         => "Y",
            "UF_SHOW_IN_TOP_MENU" => 'Да'
        ]
    );
    $arSectionsByParentSectionID = CCache::GroupArrayBy(
        $arSections,
        [
            "MULTI" => "Y",
            "GROUP" => ["IBLOCK_SECTION_ID"]
        ]
    );
    $arItems = CCache::CIBlockElement_GetList(
        [
            "SORT"  => "ASC",
            "ID"    => "ASC",
            "CACHE" => [
                "TAG"   => CCache::GetIBlockCacheTag(
                    CCache::$arIBlocks[ SITE_ID ]["aspro_allcorp_content"]["aspro_allcorp_services"][0]
                ),
                "MULTI" => "Y"
            ]
        ],
        [
            "IBLOCK_ID"             => CCache::$arIBlocks[ SITE_ID ]["aspro_allcorp_content"]["aspro_allcorp_services"][0],
            "ACTIVE"                => "Y",
            "SECTION_GLOBAL_ACTIVE" => "Y",
            "ACTIVE_DATE"           => "Y",
            "INCLUDE_SUBSECTIONS"   => "Y"
        ]
    );
    $arItemsBySectionID = CCache::GroupArrayBy(
        $arItems,
        [
            "MULTI" => "Y",
            "GROUP" => ["IBLOCK_SECTION_ID"]
        ]
    );

    if ($arSections)
    {
        $aMenuLinksExt = [];
        aspro::getSectionChilds(
            false,
            $arSections,
            $arSectionsByParentSectionID,
            $arItemsBySectionID,
            $aMenuLinksExt
        );
    } else
    {
        foreach ($arItems as $arItem)
        {
            $aMenuLinksExt[] = [
                $arItem["NAME"],
                $arItem["DETAIL_PAGE_URL"],
                [],
                [
                    "FROM_IBLOCK" => 1,
                    "DEPTH_LEVEL" => 1
                ]
            ];
        }
    }
    $aMenuLinks = array_merge(
        $aMenuLinks,
        $aMenuLinksExt
    );
*/?>