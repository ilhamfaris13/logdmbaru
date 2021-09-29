<?php
$strTableName="daftar_masalah_pediatri";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="daftar_masalah_pediatri";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("daftar_masalah_pediatri");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["daftar_masalah_pediatri"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>