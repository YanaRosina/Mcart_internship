<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

?>

<?if($USER->IsAuthorized()):?>

	<p><?echo GetMessage("MAIN_REGISTER_AUTH")?></p>

<?else:?>
	<div class="site-section">
      <div class="container">
        <div class="row">
			<div class="col-md-12 col-lg-8 mb-5">
				<?if (!empty($arResult["ERRORS"])):
					foreach ($arResult["ERRORS"] as $key => $error)
						if (intval($key) == 0 && $key !== 0) 
							$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);

					ShowError(implode("<br />", $arResult["ERRORS"]));

					elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"): ?>
						<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
				<?endif?>
				<h2><?=GetMessage("AUTH_REGISTER")?></h2>
				<form method="post" class="p-5 bg-white border" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
					<input type="hidden" name="SIGNED_DATA" value="<?=htmlspecialcharsbx($arResult["SIGNED_DATA"])?>" />
					

					<?foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<label class="font-weight-bold"><?=GetMessage("REGISTER_FIELD_".$FIELD)?>:<?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><span class="starrequired">*</span><?endif?></label>
								<? switch ($FIELD) {
									case "PASSWORD":?>
										
										<input size="30" type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off" class="form-control" />
										<? break;

									case "CONFIRM_PASSWORD":?>
										
										<input size="30" type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off" class="form-control" />
										<? break;

									default: ?>
										<input size="30" type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" autocomplete="off" class="form-control"/>
								<? }?>
							</div>
						</div>
					<?endforeach?>
					<?// ********************* User properties ***************************************************?>
					<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
						<div class="row form-group">
							<div class="col-md-12 mb-3 mb-md-0">
								<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
									<label class="font-weight-bold" for="fullname"><?=$arUserField["EDIT_FORM_LABEL"]?></label>
										<br><?$APPLICATION->IncludeComponent(
											"bitrix:system.field.edit",
											$arUserField["USER_TYPE"]["USER_TYPE_ID"],
											array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "regform"), null, array("HIDE_ICONS"=>"Y"));?>
									</br>
								
								<?endforeach;?>
							</div>
						</div>
					<?endif;?>
					<?// ******************** /User properties ***************************************************?>


					<?
					/* CAPTCHA */
					if ($arResult["USE_CAPTCHA"] == "Y")
					{
						?>
							<tr>
								<td colspan="2"><b><?=GetMessage("REGISTER_CAPTCHA_TITLE")?></b></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
									<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
								</td>
							</tr>
							<tr>
								<td><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></td>
								<td><input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" /></td>
							</tr>
						<?
					}
					/* !CAPTCHA */
					?>

					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" name="register_submit_button" value="<?=GetMessage("AUTH_REGISTER")?>" class="btn btn-primary  py-2 px-4 rounded-0">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?endif?>
