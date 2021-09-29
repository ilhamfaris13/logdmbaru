<?php
$tdatadaftar_masalah_pediatri = array();
$tdatadaftar_masalah_pediatri[".searchableFields"] = array();
$tdatadaftar_masalah_pediatri[".ShortName"] = "daftar_masalah_pediatri";
$tdatadaftar_masalah_pediatri[".OwnerID"] = "";
$tdatadaftar_masalah_pediatri[".OriginalTable"] = "daftar_masalah_pediatri";


$tdatadaftar_masalah_pediatri[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadaftar_masalah_pediatri[".originalPagesByType"] = $tdatadaftar_masalah_pediatri[".pagesByType"];
$tdatadaftar_masalah_pediatri[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadaftar_masalah_pediatri[".originalPages"] = $tdatadaftar_masalah_pediatri[".pages"];
$tdatadaftar_masalah_pediatri[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadaftar_masalah_pediatri[".originalDefaultPages"] = $tdatadaftar_masalah_pediatri[".defaultPages"];

//	field labels
$fieldLabelsdaftar_masalah_pediatri = array();
$fieldToolTipsdaftar_masalah_pediatri = array();
$pageTitlesdaftar_masalah_pediatri = array();
$placeHoldersdaftar_masalah_pediatri = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaftar_masalah_pediatri["English"] = array();
	$fieldToolTipsdaftar_masalah_pediatri["English"] = array();
	$placeHoldersdaftar_masalah_pediatri["English"] = array();
	$pageTitlesdaftar_masalah_pediatri["English"] = array();
	$fieldLabelsdaftar_masalah_pediatri["English"]["id_problemlist"] = "";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["id_problemlist"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["id_problemlist"] = "";
	$fieldLabelsdaftar_masalah_pediatri["English"]["daftar_masalah"] = "Daftar Masalah";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["daftar_masalah"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["daftar_masalah"] = "";
	$fieldLabelsdaftar_masalah_pediatri["English"]["diagnosa_awal"] = "Diagnosa Awal";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["diagnosa_awal"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["diagnosa_awal"] = "";
	$fieldLabelsdaftar_masalah_pediatri["English"]["diagnostik"] = "Diagnostik";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["diagnostik"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["diagnostik"] = "";
	$fieldLabelsdaftar_masalah_pediatri["English"]["terapi"] = "Terapi";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["terapi"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["terapi"] = "";
	$fieldLabelsdaftar_masalah_pediatri["English"]["monitoring"] = "Monitoring";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["monitoring"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["monitoring"] = "";
	$fieldLabelsdaftar_masalah_pediatri["English"]["edukasi"] = "Edukasi";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["edukasi"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["edukasi"] = "";
	$fieldLabelsdaftar_masalah_pediatri["English"]["id_pediatri"] = "";
	$fieldToolTipsdaftar_masalah_pediatri["English"]["id_pediatri"] = "";
	$placeHoldersdaftar_masalah_pediatri["English"]["id_pediatri"] = "";
	if (count($fieldToolTipsdaftar_masalah_pediatri["English"]))
		$tdatadaftar_masalah_pediatri[".isUseToolTips"] = true;
}


	$tdatadaftar_masalah_pediatri[".NCSearch"] = true;



$tdatadaftar_masalah_pediatri[".shortTableName"] = "daftar_masalah_pediatri";
$tdatadaftar_masalah_pediatri[".nSecOptions"] = 0;

$tdatadaftar_masalah_pediatri[".mainTableOwnerID"] = "";
$tdatadaftar_masalah_pediatri[".entityType"] = 0;
$tdatadaftar_masalah_pediatri[".connId"] = "newrm_at_localhost";


$tdatadaftar_masalah_pediatri[".strOriginalTableName"] = "daftar_masalah_pediatri";

	



$tdatadaftar_masalah_pediatri[".showAddInPopup"] = false;

$tdatadaftar_masalah_pediatri[".showEditInPopup"] = false;

$tdatadaftar_masalah_pediatri[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaftar_masalah_pediatri[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaftar_masalah_pediatri[".listAjax"] = false;
//	temporary
$tdatadaftar_masalah_pediatri[".listAjax"] = false;

	$tdatadaftar_masalah_pediatri[".audit"] = false;

	$tdatadaftar_masalah_pediatri[".locking"] = false;


$pages = $tdatadaftar_masalah_pediatri[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadaftar_masalah_pediatri[".edit"] = true;
	$tdatadaftar_masalah_pediatri[".afterEditAction"] = 1;
	$tdatadaftar_masalah_pediatri[".closePopupAfterEdit"] = 1;
	$tdatadaftar_masalah_pediatri[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadaftar_masalah_pediatri[".add"] = true;
$tdatadaftar_masalah_pediatri[".afterAddAction"] = 1;
$tdatadaftar_masalah_pediatri[".closePopupAfterAdd"] = 1;
$tdatadaftar_masalah_pediatri[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadaftar_masalah_pediatri[".list"] = true;
}



$tdatadaftar_masalah_pediatri[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadaftar_masalah_pediatri[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadaftar_masalah_pediatri[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadaftar_masalah_pediatri[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadaftar_masalah_pediatri[".printFriendly"] = true;
}



$tdatadaftar_masalah_pediatri[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadaftar_masalah_pediatri[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadaftar_masalah_pediatri[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadaftar_masalah_pediatri[".isUseAjaxSuggest"] = true;

$tdatadaftar_masalah_pediatri[".rowHighlite"] = true;





$tdatadaftar_masalah_pediatri[".ajaxCodeSnippetAdded"] = false;

$tdatadaftar_masalah_pediatri[".buttonsAdded"] = false;

$tdatadaftar_masalah_pediatri[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaftar_masalah_pediatri[".isUseTimeForSearch"] = false;


$tdatadaftar_masalah_pediatri[".badgeColor"] = "db7093";


$tdatadaftar_masalah_pediatri[".allSearchFields"] = array();
$tdatadaftar_masalah_pediatri[".filterFields"] = array();
$tdatadaftar_masalah_pediatri[".requiredSearchFields"] = array();

$tdatadaftar_masalah_pediatri[".googleLikeFields"] = array();
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "id_problemlist";
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "daftar_masalah";
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "diagnosa_awal";
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "diagnostik";
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "terapi";
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "monitoring";
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "edukasi";
$tdatadaftar_masalah_pediatri[".googleLikeFields"][] = "id_pediatri";



$tdatadaftar_masalah_pediatri[".tableType"] = "list";

$tdatadaftar_masalah_pediatri[".printerPageOrientation"] = 0;
$tdatadaftar_masalah_pediatri[".nPrinterPageScale"] = 100;

$tdatadaftar_masalah_pediatri[".nPrinterSplitRecords"] = 40;

$tdatadaftar_masalah_pediatri[".geocodingEnabled"] = false;










$tdatadaftar_masalah_pediatri[".pageSize"] = 20;

$tdatadaftar_masalah_pediatri[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaftar_masalah_pediatri[".strOrderBy"] = $tstrOrderBy;

$tdatadaftar_masalah_pediatri[".orderindexes"] = array();


$tdatadaftar_masalah_pediatri[".sqlHead"] = "SELECT id_problemlist,  	daftar_masalah,  	diagnosa_awal,  	diagnostik,  	terapi,  	monitoring,  	edukasi,  	id_pediatri";
$tdatadaftar_masalah_pediatri[".sqlFrom"] = "FROM daftar_masalah_pediatri";
$tdatadaftar_masalah_pediatri[".sqlWhereExpr"] = "";
$tdatadaftar_masalah_pediatri[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaftar_masalah_pediatri[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaftar_masalah_pediatri[".arrGroupsPerPage"] = $arrGPP;

$tdatadaftar_masalah_pediatri[".highlightSearchResults"] = true;

$tableKeysdaftar_masalah_pediatri = array();
$tableKeysdaftar_masalah_pediatri[] = "id_problemlist";
$tdatadaftar_masalah_pediatri[".Keys"] = $tableKeysdaftar_masalah_pediatri;


$tdatadaftar_masalah_pediatri[".hideMobileList"] = array();




//	id_problemlist
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_problemlist";
	$fdata["GoodName"] = "id_problemlist";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","id_problemlist");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_problemlist";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_problemlist";

	
	
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


	$tdatadaftar_masalah_pediatri["id_problemlist"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "id_problemlist";
//	daftar_masalah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "daftar_masalah";
	$fdata["GoodName"] = "daftar_masalah";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","daftar_masalah");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "daftar_masalah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "daftar_masalah";

	
	
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


	$tdatadaftar_masalah_pediatri["daftar_masalah"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "daftar_masalah";
//	diagnosa_awal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "diagnosa_awal";
	$fdata["GoodName"] = "diagnosa_awal";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","diagnosa_awal");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diagnosa_awal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosa_awal";

	
	
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


	$tdatadaftar_masalah_pediatri["diagnosa_awal"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "diagnosa_awal";
//	diagnostik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "diagnostik";
	$fdata["GoodName"] = "diagnostik";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","diagnostik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diagnostik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnostik";

	
	
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


	$tdatadaftar_masalah_pediatri["diagnostik"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "diagnostik";
//	terapi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "terapi";
	$fdata["GoodName"] = "terapi";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","terapi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "terapi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "terapi";

	
	
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


	$tdatadaftar_masalah_pediatri["terapi"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "terapi";
//	monitoring
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "monitoring";
	$fdata["GoodName"] = "monitoring";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","monitoring");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "monitoring";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monitoring";

	
	
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


	$tdatadaftar_masalah_pediatri["monitoring"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "monitoring";
//	edukasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "edukasi";
	$fdata["GoodName"] = "edukasi";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","edukasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "edukasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edukasi";

	
	
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


	$tdatadaftar_masalah_pediatri["edukasi"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "edukasi";
//	id_pediatri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_pediatri";
	$fdata["GoodName"] = "id_pediatri";
	$fdata["ownerTable"] = "daftar_masalah_pediatri";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_pediatri","id_pediatri");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_pediatri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_pediatri";

	
	
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


	$tdatadaftar_masalah_pediatri["id_pediatri"] = $fdata;
		$tdatadaftar_masalah_pediatri[".searchableFields"][] = "id_pediatri";


$tables_data["daftar_masalah_pediatri"]=&$tdatadaftar_masalah_pediatri;
$field_labels["daftar_masalah_pediatri"] = &$fieldLabelsdaftar_masalah_pediatri;
$fieldToolTips["daftar_masalah_pediatri"] = &$fieldToolTipsdaftar_masalah_pediatri;
$placeHolders["daftar_masalah_pediatri"] = &$placeHoldersdaftar_masalah_pediatri;
$page_titles["daftar_masalah_pediatri"] = &$pageTitlesdaftar_masalah_pediatri;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daftar_masalah_pediatri"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daftar_masalah_pediatri"] = array();



	
				$strOriginalDetailsTable="pediatri";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pediatri";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pediatri";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["daftar_masalah_pediatri"][0] = $masterParams;
				$masterTablesData["daftar_masalah_pediatri"][0]["masterKeys"] = array();
	$masterTablesData["daftar_masalah_pediatri"][0]["masterKeys"][]="id_pediatri";
				$masterTablesData["daftar_masalah_pediatri"][0]["detailKeys"] = array();
	$masterTablesData["daftar_masalah_pediatri"][0]["detailKeys"][]="id_pediatri";
		
	
				$strOriginalDetailsTable="pediatri";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pediatri1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pediatri1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["daftar_masalah_pediatri"][1] = $masterParams;
				$masterTablesData["daftar_masalah_pediatri"][1]["masterKeys"] = array();
	$masterTablesData["daftar_masalah_pediatri"][1]["masterKeys"][]="id_pediatri";
				$masterTablesData["daftar_masalah_pediatri"][1]["detailKeys"] = array();
	$masterTablesData["daftar_masalah_pediatri"][1]["detailKeys"][]="id_pediatri";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_daftar_masalah_pediatri()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_problemlist,  	daftar_masalah,  	diagnosa_awal,  	diagnostik,  	terapi,  	monitoring,  	edukasi,  	id_pediatri";
$proto0["m_strFrom"] = "FROM daftar_masalah_pediatri";
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
	"m_strName" => "id_problemlist",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto6["m_sql"] = "id_problemlist";
$proto6["m_srcTableName"] = "daftar_masalah_pediatri";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "daftar_masalah",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto8["m_sql"] = "daftar_masalah";
$proto8["m_srcTableName"] = "daftar_masalah_pediatri";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosa_awal",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto10["m_sql"] = "diagnosa_awal";
$proto10["m_srcTableName"] = "daftar_masalah_pediatri";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnostik",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto12["m_sql"] = "diagnostik";
$proto12["m_srcTableName"] = "daftar_masalah_pediatri";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "terapi",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto14["m_sql"] = "terapi";
$proto14["m_srcTableName"] = "daftar_masalah_pediatri";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "monitoring",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto16["m_sql"] = "monitoring";
$proto16["m_srcTableName"] = "daftar_masalah_pediatri";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "edukasi",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto18["m_sql"] = "edukasi";
$proto18["m_srcTableName"] = "daftar_masalah_pediatri";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pediatri",
	"m_strTable" => "daftar_masalah_pediatri",
	"m_srcTableName" => "daftar_masalah_pediatri"
));

$proto20["m_sql"] = "id_pediatri";
$proto20["m_srcTableName"] = "daftar_masalah_pediatri";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "daftar_masalah_pediatri";
$proto23["m_srcTableName"] = "daftar_masalah_pediatri";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_problemlist";
$proto23["m_columns"][] = "daftar_masalah";
$proto23["m_columns"][] = "diagnosa_awal";
$proto23["m_columns"][] = "diagnostik";
$proto23["m_columns"][] = "terapi";
$proto23["m_columns"][] = "monitoring";
$proto23["m_columns"][] = "edukasi";
$proto23["m_columns"][] = "id_pediatri";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "daftar_masalah_pediatri";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "daftar_masalah_pediatri";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="daftar_masalah_pediatri";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daftar_masalah_pediatri = createSqlQuery_daftar_masalah_pediatri();


	
		;

								

$tdatadaftar_masalah_pediatri[".sqlquery"] = $queryData_daftar_masalah_pediatri;



$tableEvents["daftar_masalah_pediatri"] = new eventsBase;
$tdatadaftar_masalah_pediatri[".hasEvents"] = false;

?>