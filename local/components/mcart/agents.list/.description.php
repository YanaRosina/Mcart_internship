<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/*
 *  Задать имя компонента и Описание
 *  Разместить его в своем разделе в Визуальном редакторе
 */

$arComponentDescription = array(
    "NAME" => GetMessage("MYCOMP_AGENT_NAME"), 
    "DESCRIPTION" => GetMessage("MYCOMP_AGENT_DESC"),
    "PATH" => array(
      "ID" => "mycomp",
      "NAME" => GetMessage("MYCOMP_GROUP_NAME"),
	  ),
);
