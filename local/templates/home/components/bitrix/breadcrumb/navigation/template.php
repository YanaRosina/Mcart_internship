<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url('.SITE_TEMPLATE_PATH.'/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
<div class="container">
  <div class="row align-items-center justify-content-center text-center">
	<div class="col-md-10">
	  <h1 class="mb-2">'.CMain::GetDirProperty("title").'</h1>
	  <div>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize-1; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<span class="mx-2 text-white">&bullet;</span>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= $arrow.'
				<a href="'.$arResult[$index]["LINK"].'" >
					'.$title.'
				</a>
			';
	}
	else
	{
		$strReturn .= $arrow.'
				<strong class="text-white">'.$title.'</strong>
			</div>';
	}
}

$strReturn .= '</div></div></div></div></div>';

return $strReturn;
