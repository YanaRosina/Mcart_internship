<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

if (!empty($arParams["~AUTH_RESULT"]))
{
	ShowMessage($arParams["~AUTH_RESULT"]);
}


?>
<div class="site-section">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
			<form name="bform" method="post" target="_top" class="p-5 bg-white border" action="<?=$arResult["AUTH_URL"]?>">
			<?
			if ($arResult["BACKURL"] <> '')
			{
			?>
				<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
			<?
			}
			?>
				<input type="hidden" name="AUTH_FORM" value="Y">
				<input type="hidden" name="TYPE" value="SEND_PWD">

				<p><?echo GetMessage("sys_forgot_pass_label")?></p>

				<div class="row form-group">
                	<div class="col-md-12 mb-3 mb-md-0">
						<div><b><?=GetMessage("sys_forgot_pass_login1")?></b></div>
					<div>
						<input type="text" name="USER_LOGIN" value="<?=$arResult["USER_LOGIN"]?>" class="form-control" />
						<input type="hidden" name="USER_EMAIL" />
					</div>
					<div><?echo GetMessage("sys_forgot_pass_note_email")?></div>
				</div>
			</div>
		

			<?if($arResult["USE_CAPTCHA"]):?>
				<div class="row form-group">
                	<div class="col-md-12">
						<div>
						<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
						<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>"  width="180" height="40" alt="CAPTCHA" />
					</div>
					
					<div><?echo GetMessage("system_auth_captcha")?></div>
					<div><input type="text" name="captcha_word" class="form-control" maxlength="50" value="" /></div>
				</div>
			</div>
			<?endif?>
			<div class="row form-group">
                <div class="col-md-12">
					<input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" class="btn btn-primary  py-2 px-4 rounded-0" />
				</div>
			</div>
		</form>
		<div class="row form-group" style="margin-top: 30px;" >
            <div class="col-md-12">
				<p><a class="font-weight-bold" href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p>
			</div>
		</div>
	
	</div>
</div>
</div>

<script type="text/javascript">
document.bform.onsubmit = function(){document.bform.USER_EMAIL.value = document.bform.USER_LOGIN.value;};
document.bform.USER_LOGIN.focus();
</script>
