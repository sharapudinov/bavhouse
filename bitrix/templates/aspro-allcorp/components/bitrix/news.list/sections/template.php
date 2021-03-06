<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?$this->setFrameMode(true);?>
<?if($arResult["SECTIONS"]):?>
	<div class="item-views services groups tabs sections <?=$arParams["VIEW_TYPE"]?> <?=($arParams["SHOW_TABS"] == "Y" ? "with_tabs" : "")?> <?=($arParams["IMAGE_POSITION"] ? "image_".$arParams["IMAGE_POSITION"] : "")?> <?=($templateName = $component->{"__parent"}->{"__template"}->{"__name"})?>">
		<?// top pagination?>
		<? /*if($arParams["DISPLAY_TOP_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?>
		<?endif; */ ?>
			
		<div class="group-content">
			<div class="row">
				<?$i = 1;?>
				<?$counts = count($arResult["SECTIONS"]);?>
				<?foreach($arResult["SECTIONS"] as $arSection):?>
					<?if(!$arSection["ID"]) continue;?>
					<?
					// edit/add/delete buttons for edit mode
					$this->AddEditAction($arSection["ID"], $arSection["EDIT_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], $arSection["DEPTH_LEVEL"] ? "SECTION_EDIT" : "ELEMENT_EDIT"));
					$this->AddDeleteAction($arSection["ID"], $arSection["DELETE_LINK"], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], $arSection["DEPTH_LEVEL"] ? "SECTION_DELETE" : "ELEMENT_DELETE"), array("CONFIRM" => GetMessage("CATALOG_ELEMENT_DELETE_CONFIRM")));
					?>
					<?$size = ($counts == 1 ? 1 : ($arParams["COUNT_IN_LINE"] > 0 ? $arParams["COUNT_IN_LINE"] : 1));?>				
					<div class="col-md-<?=floor(12 / $size)?> col-sm-<?=floor(12 / round($size / 2))?>">
						<div class="item" id="<?=$this->GetEditAreaId($arSection["ID"])?>">
							<?if($arParams["VIEW_TYPE"] == "list"):?>
								<div class="row">
							<?endif;?>
							
							<?ob_start();?>
								<?// section title?>
								<div class="title">
									<a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a>
								</div>
								
								<?/*// section info text*/?><!--
								<?/*if(strlen($arSection["UF_INFOTEXT"])){*/?>
									<div class="description">
										<p><?/*=$arSection["UF_INFOTEXT"]*/?></p>
									</div>
								--><?/*}*/?>
							<?$textPart = ob_get_clean();?>
								
							<?ob_start();?>
								<div class="image">
									<a href="<?=$arSection["SECTION_PAGE_URL"]?>">										
										<?if($arSection["PREVIEW_PICTURE"]):?>
											<img src="<?=$arSection["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arSection["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arSection["PREVIEW_PICTURE"]["TITLE"]?>" class="img-responsive" />
										<?else:?>
											<img src="<?=SITE_TEMPLATE_PATH?>/images/noimage.png" alt="<?=$arSection["NAME"]?>" title="<?=$arSection["NAME"]?>" class="img-responsive" />
										<?endif;?>
									</a>
								</div>
							<?$imagePart = ob_get_clean();?>

									<?if($arParams["VIEW_TYPE"] == "list"):?>
										<?if($arParams["IMAGE_POSITION"] == "left"):?>
									<div class="col-md-4 col-sm-5"><?=$imagePart?></div>
									<div class="col-md-8 col-sm-7"><div class="text"><?=$textPart?></div></div>
								<?elseif($arParams["IMAGE_POSITION"] == "right"):?>
									<div class="col-md-8 col-sm-7"><div class="text"><?=$textPart?></div></div>
									<div class="col-md-4 col-sm-5"><?=$imagePart?></div>
								<?endif;?>
							<?elseif($arParams["VIEW_TYPE"] == "table"):?>
								<?=$imagePart;?>
								<div class="text"><?=$textPart?></div>
							<?endif;?>

							<?if($arParams["VIEW_TYPE"] == "list"):?>
								</div>
							<?endif;?>
						</div>
					</div>
					
					<?if(!($i % $size) && $i < $counts):?>
						</div>
						<hr/>
						<div class="row">
					<?endif;?>
					<?$i++;?>
				<?endforeach;?>
				
				<?// slice elements height?>
				<script>
				var templateName = '<?=$templateName?>';
				$(document).ready(function(){
					setTimeout(function(){
						$(".sections." + templateName + " .row .image").sliceHeight({slice: <?=$size?>, lineheight:-3});
						$(".sections." + templateName + " .row .text").sliceHeight({slice: <?=$size?>});
					}, 500)
				})
				</script>
			</div>
			
			<?if($arParams["PARENT_SECTION"]):?>
				<hr/>
			<?endif;?>
		</div>
		
		<?// bottom pagination?>
		<? /*if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?>
		<?endif;*/ ?>
	</div>
<?endif;?>