<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<h3>Фотогаллерея</h3>
<div class="fotogallary"
     data-plugin-options='{"animation": "slide", "directionNav": true, "animationLoop": true, "slideshow": true, "touch" : true, "controlNav" :true}'>
    <ul class="slides">
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction(
                $arItem['ID'],
                $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID(
                    $arItem["IBLOCK_ID"],
                    "ELEMENT_EDIT"
                )
            );
            $this->AddDeleteAction(
                $arItem['ID'],
                $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID(
                    $arItem["IBLOCK_ID"],
                    "ELEMENT_DELETE"
                ),
                ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
            );
            $img = is_array($arItem["DETAIL_PICTURE"]) ? $arItem["DETAIL_PICTURE"]["SRC"] : $this->GetFolder(
                ) . "/images/background.png";
            $type = $arItem["PROPERTIES"]["BANNERTYPE"]["VALUE_XML_ID"];
            $bOnlyImage = $type == "T1" || !$type;
            $bLinkOnName = strlen($arItem["PROPERTIES"]["LINKIMG"]["VALUE"]);
            ?>
            <li id="<?= $this->GetEditAreaId($arItem['ID']); ?>"
                style="background:url('<?= $img ?>') center center no-repeat !important;">
                <div class="container<?= ($bOnlyImage && $bLinkOnName ? ' fa' : '') ?>">
                    <div class="row <?= $arItem["PROPERTIES"]["TEXTCOLOR"]["VALUE_XML_ID"] ?>">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <? $img = CFile::ResizeImageGet(
                                    $arItem["PREVIEW_PICTURE"],
                                    [
                                        'width'  => 500,
                                        'height' => 250
                                    ],
                                    BX_RESIZE_IMAGE_EXACT
                                ) ?>
                                <img src="<?= $img["src"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                     title="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        <? endforeach; ?>
    </ul>
</div>
<script>
    $(document).ready(function () {
        $('.fotogallary').flexslider({
            animation: "slide",
            controlNav: true,
            touch: true,
            animationLoop: true,
            slideshow: true,
        });
    })
</script>
