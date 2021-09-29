<?php
$tdatarencana_permulaan = array();
$tdatarencana_permulaan[".searchableFields"] = array();
$tdatarencana_permulaan[".ShortName"] = "rencana_permulaan";
$tdatarencana_permulaan[".OwnerID"] = "";
$tdatarencana_permulaan[".OriginalTable"] = "rencana_permulaan";


$tdatarencana_permulaan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarencana_permulaan[".originalPagesByType"] = $tdatarencana_permulaan[".pagesByType"];
$tdatarencana_permulaan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarencana_permulaan[".originalPages"] = $tdatarencana_permulaan[".pages"];
$tdatarencana_permulaan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarencana_permulaan[".originalDefaultPages"] = $tdatarencana_permulaan[".defaultPages"];

//	field labels
$fieldLabelsrencana_permulaan = array();
$fieldToolTipsrencana_permulaan = array();
$pageTitlesrencana_permulaan = array();
$placeHoldersrencana_permulaan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrencana_permulaan["English"] = array();
	$fieldToolTipsrencana_permulaan["English"] = array();
	$placeHoldersrencana_permulaan["English"] = array();
	$pageTitlesrencana_permulaan["English"] = array();
	$fieldLabelsrencana_permulaan["English"]["Id_Rencana_Permulaan"] = "";
	$fieldToolTipsrencana_permulaan["English"]["Id_Rencana_Permulaan"] = "";
	$placeHoldersrencana_permulaan["English"]["Id_Rencana_Permulaan"] = "";
	$fieldLabelsrencana_permulaan["English"]["Daftar_Permasalahan"] = "Daftar Permasalahan";
	$fieldToolTipsrencana_permulaan["English"]["Daftar_Permasalahan"] = "";
	$placeHoldersrencana_permulaan["English"]["Daftar_Permasalahan"] = "";
	$fieldLabelsrencana_permulaan["English"]["Pemeriksaan_Diagnostik"] = "Pemeriksaan Diagnostik";
	$fieldToolTipsrencana_permulaan["English"]["Pemeriksaan_Diagnostik"] = "";
	$placeHoldersrencana_permulaan["English"]["Pemeriksaan_Diagnostik"] = "";
	$fieldLabelsrencana_permulaan["English"]["Monitoring"] = "Monitoring";
	$fieldToolTipsrencana_permulaan["English"]["Monitoring"] = "";
	$placeHoldersrencana_permulaan["English"]["Monitoring"] = "";
	$fieldLabelsrencana_permulaan["English"]["Terapi"] = "Terapi";
	$fieldToolTipsrencana_permulaan["English"]["Terapi"] = "";
	$placeHoldersrencana_permulaan["English"]["Terapi"] = "";
	$fieldLabelsrencana_permulaan["English"]["Edukasi"] = "Edukasi";
	$fieldToolTipsrencana_permulaan["English"]["Edukasi"] = "";
	$placeHoldersrencana_permulaan["English"]["Edukasi"] = "";
	$fieldLabelsrencana_permulaan["English"]["id_mata"] = "";
	$fieldToolTipsrencana_permulaan["English"]["id_mata"] = "";
	$placeHoldersrencana_permulaan["English"]["id_mata"] = "";
	if (count($fieldToolTipsrencana_permulaan["English"]))
		$tdatarencana_permulaan[".isUseToolTips"] = true;
}


	$tdatarencana_permulaan[".NCSearch"] = true;



$tdatarencana_permulaan[".shortTableName"] = "rencana_permulaan";
$tdatarencana_permulaan[".nSecOptions"] = 0;

$tdatarencana_permulaan[".mainTableOwnerID"] = "";
$tdatarencana_permulaan[".entityType"] = 0;
$tdatarencana_permulaan[".connId"] = "newrm_at_localhost";


$tdatarencana_permulaan[".strOriginalTableName"] = "rencana_permulaan";

	



$tdatarencana_permulaan[".showAddInPopup"] = false;

$tdatarencana_permulaan[".showEditInPopup"] = false;

$tdatarencana_permulaan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarencana_permulaan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarencana_permulaan[".listAjax"] = false;
//	temporary
$tdatarencana_permulaan[".listAjax"] = false;

	$tdatarencana_permulaan[".audit"] = false;

	$tdatarencana_permulaan[".locking"] = false;


$pages = $tdatarencana_permulaan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarencana_permulaan[".edit"] = true;
	$tdatarencana_permulaan[".afterEditAction"] = 1;
	$tdatarencana_permulaan[".closePopupAfterEdit"] = 1;
	$tdatarencana_permulaan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarencana_permulaan[".add"] = true;
$tdatarencana_permulaan[".afterAddAction"] = 1;
$tdatarencana_permulaan[".closePopupAfterAdd"] = 1;
$tdatarencana_permulaan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarencana_permulaan[".list"] = true;
}



$tdatarencana_permulaan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarencana_permulaan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarencana_permulaan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarencana_permulaan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarencana_permulaan[".printFriendly"] = true;
}



$tdatarencana_permulaan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarencana_permulaan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarencana_permulaan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarencana_permulaan[".isUseAjaxSuggest"] = true;

$tdatarencana_permulaan[".rowHighlite"] = true;





$tdatarencana_permulaan[".ajaxCodeSnippetAdded"] = false;

$tdatarencana_permulaan[".buttonsAdded"] = false;

$tdatarencana_permulaan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarencana_permulaan[".isUseTimeForSearch"] = false;


$tdatarencana_permulaan[".badgeColor"] = "d2af80";


$tdatarencana_permulaan[".allSearchFields"] = array();
$tdatarencana_permulaan[".filterFields"] = array();
$tdatarencana_permulaan[".requiredSearchFields"] = array();

$tdatarencana_permulaan[".googleLikeFields"] = array();
$tdatarencana_permulaan[".googleLikeFields"][] = "Id_Rencana_Permulaan";
$tdatarencana_permulaan[".googleLikeFields"][] = "Daftar_Permasalahan";
$tdatarencana_permulaan[".googleLikeFields"][] = "Pemeriksaan_Diagnostik";
$tdatarencana_permulaan[".googleLikeFields"][] = "Monitoring";
$tdatarencana_permulaan[".googleLikeFields"][] = "Terapi";
$tdatarencana_permulaan[".googleLikeFields"][] = "Edukasi";
$tdatarencana_permulaan[".googleLikeFields"][] = "id_mata";



$tdatarencana_permulaan[".tableType"] = "list";

$tdatarencana_permulaan[".printerPageOrientation"] = 0;
$tdatarencana_permulaan[".nPrinterPageScale"] = 100;

$tdatarencana_permulaan[".nPrinterSplitRecords"] = 40;

$tdatarencana_permulaan[".geocodingEnabled"] = false;










$tdatarencana_permulaan[".pageSize"] = 20;

$tdatarencana_permulaan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarencana_permulaan[".strOrderBy"] = $tstrOrderBy;

$tdatarencana_permulaan[".orderindexes"] = array();


$tdatarencana_permulaan[".sqlHead"] = "SELECT Id_Rencana_Permulaan,  	Daftar_Permasalahan,  	Pemeriksaan_Diagnostik,  	Monitoring,  	Terapi,  	Edukasi,  	id_mata";
$tdatarencana_permulaan[".sqlFrom"] = "FROM rencana_permulaan";
$tdatarencana_permulaan[".sqlWhereExpr"] = "";
$tdatarencana_permulaan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarencana_permulaan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarencana_permulaan[".arrGroupsPerPage"] = $arrGPP;

$tdatarencana_permulaan[".highlightSearchResults"] = true;

$tableKeysrencana_permulaan = array();
$tableKeysrencana_permulaan[] = "Id_Rencana_Permulaan";
$tdatarencana_permulaan[".Keys"] = $tableKeysrencana_permulaan;


$tdatarencana_permulaan[".hideMobileList"] = array();




//	Id_Rencana_Permulaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Rencana_Permulaan";
	$fdata["GoodName"] = "Id_Rencana_Permulaan";
	$fdata["ownerTable"] = "rencana_permulaan";
	$fdata["Label"] = GetFieldLabel("rencana_permulaan","Id_Rencana_Permulaan");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Rencana_Permulaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_Rencana_Permulaan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarencana_permulaan["Id_Rencana_Permulaan"] = $fdata;
		$tdatarencana_permulaan[".searchableFields"][] = "Id_Rencana_Permulaan";
//	Daftar_Permasalahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Daftar_Permasalahan";
	$fdata["GoodName"] = "Daftar_Permasalahan";
	$fdata["ownerTable"] = "rencana_permulaan";
	$fdata["Label"] = GetFieldLabel("rencana_permulaan","Daftar_Permasalahan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daftar_Permasalahan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daftar_Permasalahan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarencana_permulaan["Daftar_Permasalahan"] = $fdata;
		$tdatarencana_permulaan[".searchableFields"][] = "Daftar_Permasalahan";
//	Pemeriksaan_Diagnostik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Pemeriksaan_Diagnostik";
	$fdata["GoodName"] = "Pemeriksaan_Diagnostik";
	$fdata["ownerTable"] = "rencana_permulaan";
	$fdata["Label"] = GetFieldLabel("rencana_permulaan","Pemeriksaan_Diagnostik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pemeriksaan_Diagnostik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pemeriksaan_Diagnostik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "icd10";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODE";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "DESCRIPTION";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarencana_permulaan["Pemeriksaan_Diagnostik"] = $fdata;
		$tdatarencana_permulaan[".searchableFields"][] = "Pemeriksaan_Diagnostik";
//	Monitoring
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Monitoring";
	$fdata["GoodName"] = "Monitoring";
	$fdata["ownerTable"] = "rencana_permulaan";
	$fdata["Label"] = GetFieldLabel("rencana_permulaan","Monitoring");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Monitoring";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Monitoring";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarencana_permulaan["Monitoring"] = $fdata;
		$tdatarencana_permulaan[".searchableFields"][] = "Monitoring";
//	Terapi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Terapi";
	$fdata["GoodName"] = "Terapi";
	$fdata["ownerTable"] = "rencana_permulaan";
	$fdata["Label"] = GetFieldLabel("rencana_permulaan","Terapi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Terapi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Terapi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarencana_permulaan["Terapi"] = $fdata;
		$tdatarencana_permulaan[".searchableFields"][] = "Terapi";
//	Edukasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Edukasi";
	$fdata["GoodName"] = "Edukasi";
	$fdata["ownerTable"] = "rencana_permulaan";
	$fdata["Label"] = GetFieldLabel("rencana_permulaan","Edukasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Edukasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Edukasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarencana_permulaan["Edukasi"] = $fdata;
		$tdatarencana_permulaan[".searchableFields"][] = "Edukasi";
//	id_mata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_mata";
	$fdata["GoodName"] = "id_mata";
	$fdata["ownerTable"] = "rencana_permulaan";
	$fdata["Label"] = GetFieldLabel("rencana_permulaan","id_mata");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_mata";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_mata";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mata";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id_Mata";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "Keluhan_Utama";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarencana_permulaan["id_mata"] = $fdata;
		$tdatarencana_permulaan[".searchableFields"][] = "id_mata";


$tables_data["rencana_permulaan"]=&$tdatarencana_permulaan;
$field_labels["rencana_permulaan"] = &$fieldLabelsrencana_permulaan;
$fieldToolTips["rencana_permulaan"] = &$fieldToolTipsrencana_permulaan;
$placeHolders["rencana_permulaan"] = &$placeHoldersrencana_permulaan;
$page_titles["rencana_permulaan"] = &$pageTitlesrencana_permulaan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rencana_permulaan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["rencana_permulaan"] = array();



	
				$strOriginalDetailsTable="mata";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mata";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mata";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["rencana_permulaan"][0] = $masterParams;
				$masterTablesData["rencana_permulaan"][0]["masterKeys"] = array();
	$masterTablesData["rencana_permulaan"][0]["masterKeys"][]="Id_Mata";
				$masterTablesData["rencana_permulaan"][0]["detailKeys"] = array();
	$masterTablesData["rencana_permulaan"][0]["detailKeys"][]="id_mata";
		
	
				$strOriginalDetailsTable="mata";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mata1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mata1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["rencana_permulaan"][1] = $masterParams;
				$masterTablesData["rencana_permulaan"][1]["masterKeys"] = array();
	$masterTablesData["rencana_permulaan"][1]["masterKeys"][]="Id_Mata";
				$masterTablesData["rencana_permulaan"][1]["detailKeys"] = array();
	$masterTablesData["rencana_permulaan"][1]["detailKeys"][]="id_mata";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rencana_permulaan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_Rencana_Permulaan,  	Daftar_Permasalahan,  	Pemeriksaan_Diagnostik,  	Monitoring,  	Terapi,  	Edukasi,  	id_mata";
$proto0["m_strFrom"] = "FROM rencana_permulaan";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Rencana_Permulaan",
	"m_strTable" => "rencana_permulaan",
	"m_srcTableName" => "rencana_permulaan"
));

$proto6["m_sql"] = "Id_Rencana_Permulaan";
$proto6["m_srcTableName"] = "rencana_permulaan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Daftar_Permasalahan",
	"m_strTable" => "rencana_permulaan",
	"m_srcTableName" => "rencana_permulaan"
));

$proto8["m_sql"] = "Daftar_Permasalahan";
$proto8["m_srcTableName"] = "rencana_permulaan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Pemeriksaan_Diagnostik",
	"m_strTable" => "rencana_permulaan",
	"m_srcTableName" => "rencana_permulaan"
));

$proto10["m_sql"] = "Pemeriksaan_Diagnostik";
$proto10["m_srcTableName"] = "rencana_permulaan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Monitoring",
	"m_strTable" => "rencana_permulaan",
	"m_srcTableName" => "rencana_permulaan"
));

$proto12["m_sql"] = "Monitoring";
$proto12["m_srcTableName"] = "rencana_permulaan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Terapi",
	"m_strTable" => "rencana_permulaan",
	"m_srcTableName" => "rencana_permulaan"
));

$proto14["m_sql"] = "Terapi";
$proto14["m_srcTableName"] = "rencana_permulaan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Edukasi",
	"m_strTable" => "rencana_permulaan",
	"m_srcTableName" => "rencana_permulaan"
));

$proto16["m_sql"] = "Edukasi";
$proto16["m_srcTableName"] = "rencana_permulaan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mata",
	"m_strTable" => "rencana_permulaan",
	"m_srcTableName" => "rencana_permulaan"
));

$proto18["m_sql"] = "id_mata";
$proto18["m_srcTableName"] = "rencana_permulaan";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "rencana_permulaan";
$proto21["m_srcTableName"] = "rencana_permulaan";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Id_Rencana_Permulaan";
$proto21["m_columns"][] = "Daftar_Permasalahan";
$proto21["m_columns"][] = "Pemeriksaan_Diagnostik";
$proto21["m_columns"][] = "Monitoring";
$proto21["m_columns"][] = "Terapi";
$proto21["m_columns"][] = "Edukasi";
$proto21["m_columns"][] = "id_mata";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "rencana_permulaan";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "rencana_permulaan";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rencana_permulaan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rencana_permulaan = createSqlQuery_rencana_permulaan();


	
		;

							

$tdatarencana_permulaan[".sqlquery"] = $queryData_rencana_permulaan;



$tableEvents["rencana_permulaan"] = new eventsBase;
$tdatarencana_permulaan[".hasEvents"] = false;

?>