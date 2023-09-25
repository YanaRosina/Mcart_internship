<?php
   AddEventHandler("main", "OnAfterUserAdd", "OnAfterUserAddHandler"); 
   function OnAfterUserAddHandler(&$arFields) 
   { 

       if(strlen($arFields["UF_TYPE"]) > 0)  //Если поле UF_BAZA заполнено 
       { 
            switch($arFields["UF_TYPE"])
            {
                case 5: //Seller
                {
                    $arGroups = CUser::GetUserGroup($arFields["ID"]); 
                    $arGroups[] = 7; 
                    CUser::SetUserGroup($arFields["ID"], $arGroups);  
                    break;
                }
                case 6: //Buyer
                {
                    $arGroups = CUser::GetUserGroup($arFields["ID"]); 
                    $arGroups[] = 6; 
                    CUser::SetUserGroup($arFields["ID"], $arGroups);  
                    break;
                }

            }

        } 
   } 

?>