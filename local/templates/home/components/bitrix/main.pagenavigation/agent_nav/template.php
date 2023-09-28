<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/**
 * @var array $arResult
 * @var array $arParam
 * @var CBitrixComponentTemplate $this
 */

/** @var PageNavigationComponent $component */
$component = $this->getComponent();

$this->setFrameMode(true);

?>
<div class="row-nav">
    <div class="col-md-12 text-center">
    	<div class="site-pagination">
		<? 
			$page = $arResult["START_PAGE"];
			do
			{
				if ($page == $arResult["CURRENT_PAGE"]):
		?>
					<a class="active"><?=$page?></a>
		<?
				elseif($page == 1):
		?>
					<a href="<?=htmlspecialcharsbx($arResult["URL"])?>" >1</a>
		<?
				else:
		?>
					<a href="<?=htmlspecialcharsbx($component->replaceUrlTemplate($page))?>"><?=$page?></a>
		<?
				endif;
				$page++;
			}
			while($page <= $arResult["END_PAGE"]);

		?>
		</div>
	</div>
</div>