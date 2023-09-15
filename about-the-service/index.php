<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О сервисе");
?><?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"catalog_vertical", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "catalog_vertical",
		"MENU_THEME" => "site"
	),
	false
);?>
<div>
<div class="site-section border-bottom">
      <div class="container">
        <div class="row align-items-center">

		<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE-SHOW" => "file",
			"AREA_FILE-SUFFIX" => "inc",
			"PATH" => "/include/about-the-service-img.php",
			"EDIT_TEMPLATE" => "",
			"AREA_FILE_SHOW" => "file"
		)
		);?>
          <div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
            <div class="site-section-title mb-3">
		<?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE-SHOW" => "file",
			"AREA_FILE-SUFFIX" => "inc",
			"PATH" => "/include/about-the-service-text.php",
			"EDIT_TEMPLATE" => "",
			"AREA_FILE_SHOW" => "file"
		)
		);?>
          </div>
        </div>
      </div>
    </div>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>