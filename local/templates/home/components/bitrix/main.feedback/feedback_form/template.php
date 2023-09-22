<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

\Bitrix\Main\UI\Extension::load("ui.bootstrap4");
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="col-md-12 col-lg-8 mb-5">
	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{
		foreach($arResult["ERROR_MESSAGE"] as $v)
			ShowError($v);
	}
	if($arResult["OK_MESSAGE"] <> '')
	{
		?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
	}
	?>

	<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="p-5 bg-white border">
		<?=bitrix_sessid_post()?>
		<div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
				<label class="font-weight-bold" for="fullname"><?=GetMessage("MFT_NAME");?><?
					if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><?endif;?></label>
				<input type="text" id="fullname" name="user_name" class="form-control" placeholder="<?= GetMessage("MFT_NAME") ?>" value="<?=$arResult["AUTHOR_NAME"]?>"/>
			</div>
		</div>

		<div class="row form-group">
            <div class="col-md-12">
				<label class="font-weight-bold" for="email"><?=GetMessage("MFT_EMAIL")?><?
					if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><?endif?></label>
				<input type="email" name="user_email" id="email" class="form-control" placeholder="<?= GetMessage("MFT_EMAIL") ?>" value="<?=$arResult["AUTHOR_EMAIL"]?>"/>
			</div>
		</div>
		<div class="row form-group">
            <div class="col-md-12">
				<label class="font-weight-bold" for="subject"><?=GetMessage("MFT_SUBJECT");?><?
					if(empty($arParams["REQUIRED_FIELDS"]) || in_array("SUBJECT", $arParams["REQUIRED_FIELDS"])):?><?endif;?></label>
				<input type="text" id="subject" name="user_subject" placeholder="<?= GetMessage("MFT_SUBJECT") ?>" class="form-control" value="<?=$arResult["AUTHOR_SUBJECT"]?>"/>		
			</div>
		</div>

		<div class="row form-group">
			<div class="col-md-12">
				<label for="message"><?=GetMessage("MFT_MESSAGE")?><?
					if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><?endif?></label>
				<textarea class="form-control" id="message" name="MESSAGE" placeholder="<?=GetMessage("MFT_MESSAGE")?>" rows="5" cols="30"><?=$arResult["MESSAGE"]?></textarea>
			</div>
		</div>
		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>"> 
		<div class="row form-group">
            <div class="col-md-12">
				<input type="submit" name="submit"  value="<?=GetMessage("MFT_SUBMIT")?>" class="btn btn-primary py-2 px-4 rounded-0">
			</div>
        </div>
	</form>
</div>