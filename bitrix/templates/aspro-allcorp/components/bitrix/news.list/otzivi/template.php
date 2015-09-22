<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? $this->setFrameMode(true); ?>
<div class="row">
    <div class="col-md-12">
        <div class="top-slider flexslider unstyled"
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
                        style="background:url('<?= $img ?>') center center no-repeat !important;" class="otzivi">
                        <div class="container<?= ($bOnlyImage && $bLinkOnName ? ' fa' : '') ?>">
                            <div class="row <?= $arItem["PROPERTIES"]["TEXTCOLOR"]["VALUE_XML_ID"] ?>">
                                <div class="col-md-10 col-sm-10 col-xs-12 bordered">
                                    <div class="text-rewiev">
                                        <p><?= $arItem["PREVIEW_TEXT"] ?></p>

                                        <div class="rewiev-name"><?= $arItem["NAME"] ?>, <?= $arItem["POST"] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 otzivi">
        <div class="btn btn-primary rew-btn" data-event="jqm" data-param-id="25"
             data-name="review">Оставить отзыв
        </div>
    </div>
</div>

