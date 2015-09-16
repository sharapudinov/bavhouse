<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();?>
<?$this->setFrameMode(true);?>

<div class="top-slider flexslider unstyled" data-plugin-options='{"animation": "slide", "directionNav": true, "animationLoop": true, "slideshow": true, "touch" : true, "controlNav" :true}'>
	<ul class="slides">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			$img = is_array($arItem["DETAIL_PICTURE"]) ? $arItem["DETAIL_PICTURE"]["SRC"] : $this->GetFolder()."/images/background.png";
			$type = $arItem["PROPERTIES"]["BANNERTYPE"]["VALUE_XML_ID"];
			$bOnlyImage = $type == "T1" || !$type;
			$bLinkOnName = strlen($arItem["PROPERTIES"]["LINKIMG"]["VALUE"]);
			?>
			<li id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background:url('<?=$img?>') center center no-repeat !important;">
				<div class="container<?=($bOnlyImage && $bLinkOnName ? ' fa' : '')?>">
						<div class="row <?=$arItem["PROPERTIES"]["TEXTCOLOR"]["VALUE_XML_ID"]?>">
							<div class="col-md-8 col-sm-8 col-xs-12 bordered">
								<div class="text-rewiev">
									<p><?=$arItem["PREVIEW_TEXT"]?></p>
									<div class="rewiev-name"><?=$arItem["NAME"]?>, <?=$arItem["POST"]?></div>
								</div>
							</div>
							<div class="col-md-3 col-sm-3 col-xs-12">				
								<div class="image">
										<a href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="img-inside fancybox">
											<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="img-responsive">
										</a>
 								</div>
							</div>
						</div>
				</div>
			</li>
		<?endforeach;?>
	</ul>
	<span class="btn btn-primary rew-btn" data-event="jqm" data-param-id="25" data-name="review">Оставить отзыв</span>
</div>