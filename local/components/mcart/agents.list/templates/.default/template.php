<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

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
 
<div class="row mb-5">
    <div class="col-12">
        <div class="site-section-title">
            <h2><?= GetMessage("AGENTS_TITLE")?></h2>
        </div>
    </div>
</div>
<? foreach($arResult["AGENTS"]["ITEMS"] as $agentItem): ?>
<?  $isPhoto = $agentItem['UF_PHOTO'] ? $agentItem['UF_PHOTO'] : SITE_TEMPLATE_PATH.'/images/no-avatar.png'; ?>
<div class="mb-5">
    <div class="agent__card">
        <div class="small-info">
            <div class="avatar" style="background-image: url(<?= $isPhoto?>);">
            </div>
            <div class="info">
                <div class="name"><?=$agentItem['UF_NAME']?></div>
            </div>
        </div>
        <div class="agent__card_item">
            <div class="agent__card_info">
                <div class="card__info_item">
                    <div class="position"><?= GetMessage("AGENTS_EMAIL")?></div>
                    <div class="name"><?=$agentItem['UF_EMAIL']?></div>
                </div>
                <div class="card__info_item">
                    <div class="position"><?= GetMessage("AGENTS_PHONE")?></div>
                    <div class="name"><?=$agentItem['UF_PHONE']?></div>
                </div>
                <div class="card__info_item">
                    <div class="position"><?= GetMessage("AGENTS_TYPE_OF_ACTIVITY")?></div>
                    <div class="name"><?=$agentItem['UF_TYPE_OF_ACTIVITY']?></div>
                </div>
            </div>
        </div>
        <a class="star <? if(in_array($agentItem['ID'], $arResult['STAR_AGENTS'])) echo 'active' ?>" data-id="<?= $agentItem['ID']?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4L14.472 9.26604L20 10.1157L16 14.2124L16.944 20L12 17.266L7.056 20L8 14.2124L4 10.1157L9.528 9.26604L12 4Z" stroke="#95929A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </div>

<?endforeach;?>
</div>
<?  
$APPLICATION->IncludeComponent("bitrix:main.pagenavigation", "agent_nav", Array(
    "NAV_OBJECT" => $arResult["AGENTS"]["NAV_OBJECT"]
    ),
    false);
?>
</div>

                




