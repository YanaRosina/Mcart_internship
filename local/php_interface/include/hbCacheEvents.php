<?php

$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler('', 'RealEstateAgentsOnAfterAdd', 'HbResetCache');
$eventManager->addEventHandler('', 'RealEstateAgentsOnAfterUpdate', 'HbResetCache');
$eventManager->addEventHandler('', 'RealEstateAgentsOnAfterDelete', 'HbResetCache');

function HbResetCache(\Bitrix\Main\Entity\Event $event) {
   $entity = $event->getEntity();
   $tableName = $entity->getDBTableName();


    $taggedCache = \Bitrix\Main\Application::getInstance()->getTaggedCache();
    $taggedCache->clearByTag('hlblock_table_name_' . $tableName); 
}



?>