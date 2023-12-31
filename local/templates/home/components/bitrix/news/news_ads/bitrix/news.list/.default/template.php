<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
 <?if($APPLICATION->GetCurPage() == "/ads/"){?>
<div class="pt-5">
      <div class="container">
        <form class="row">
          
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Lot Area</option>
                <option value="1000">1000</option>
                <option value="800">800</option>
                <option value="600">600</option>
                <option value="400">400</option>
                <option value="200">200</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Property Status</option>
                <option value="For Sale">For Sale</option>
                <option value="For Rent">For Rent</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Location</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Canada">Canada</option>
                <option value="Belgium">Belgium</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Lot Area</option>
                <option value="1000">1000</option>
                <option value="800">800</option>
                <option value="600">600</option>
                <option value="400">400</option>
                <option value="200">200</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Bathrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="mb-4">
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
          </div> 
        </form>
      </div>
    </div>
<? }?>
<div class="site-section site-section-sm bg-light">
<div class="container">
			<div class="row mb-5">
				<div class="col-12">
					<div class="site-section-title">

          
          <?if($APPLICATION->GetCurPage() == "/ads/"){?>
						<h2><?=GetMessage("NEW_PROPERTIES_TITLE")?></h2>
            <? }
            elseif($APPLICATION->GetCurPage() == "/sellers-personal-account/my-ads/"){?> 
              <h2><?=GetMessage("MY_ADS_TITLE")?></h2>  
            <? }
            else{?>   
              <h2><?=GetMessage("DEFAULT_ADS_TITLE")?></h2> 
              <? }?>
					</div>
				</div>
			</div>

			<div class="row mb-5">
			<?if($arParams["DISPLAY_TOP_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="col-md-6 col-lg-4 mb-4">
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="prop-entry d-block">
						<?if(is_array($arItem["PREVIEW_PICTURE"])): ?>
						<figure>
		  					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" class="img-fluid">
						</figure>
						<?endif;?>
							<div class="prop-text">
							<div class="inner">
								<span class="price rounded">$<? echo $arItem["DISPLAY_PROPERTIES"]["PRICE"]["VALUE"]?></span>
								<h3 class="title"><? echo $arItem["NAME"] ?></h3>
								<p class="location">
									<? echo $arItem["PREVIEW_TEXT"]?>
								</p>
							</div>
							<div class="prop-more-info">
								<div class="inner d-flex">
									<div class="col">
										Area: <strong><?echo $arItem["DISPLAY_PROPERTIES"]["AREA"]["VALUE"]?>m<sup>2</sup></strong>
									</div>
									<div class="col">
										Floors: <strong><?echo $arItem["DISPLAY_PROPERTIES"]["FLOORS"]["VALUE"]?></strong>
									</div>
									<div class="col">
										Baths: <strong><?echo $arItem["DISPLAY_PROPERTIES"]["BATHROOMS"]["VALUE"]?></strong>
									</div>
									<div class="col">
										Garages: <strong><?= $arItem["DISPLAY_PROPERTIES"]["GARAGE"]["VALUE"]? GetMessage("GARAGE_YES") : GetMessage("GARAGE_NO");?></strong>
									</div>
								</div>
							</div>
						</div>
 					</a>
				</div>
			<?endforeach;?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
			</div>
		</div>
	</div>


