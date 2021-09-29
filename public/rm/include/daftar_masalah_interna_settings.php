<?php
$tdatadaftar_masalah_interna = array();
$tdatadaftar_masalah_interna[".searchableFields"] = array();
$tdatadaftar_masalah_interna[".ShortName"] = "daftar_masalah_interna";
$tdatadaftar_masalah_interna[".OwnerID"] = "";
$tdatadaftar_masalah_interna[".OriginalTable"] = "daftar_masalah_interna";


$tdatadaftar_masalah_interna[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadaftar_masalah_interna[".originalPagesByType"] = $tdatadaftar_masalah_interna[".pagesByType"];
$tdatadaftar_masalah_interna[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadaftar_masalah_interna[".originalPages"] = $tdatadaftar_masalah_interna[".pages"];
$tdatadaftar_masalah_interna[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadaftar_masalah_interna[".originalDefaultPages"] = $tdatadaftar_masalah_interna[".defaultPages"];

//	field labels
$fieldLabelsdaftar_masalah_interna = array();
$fieldToolTipsdaftar_masalah_interna = array();
$pageTitlesdaftar_masalah_interna = array();
$placeHoldersdaftar_masalah_interna = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaftar_masalah_interna["English"] = array();
	$fieldToolTipsdaftar_masalah_interna["English"] = array();
	$placeHoldersdaftar_masalah_interna["English"] = array();
	$pageTitlesdaftar_masalah_interna["English"] = array();
	$fieldLabelsdaftar_masalah_interna["English"]["id_problemlist"] = "";
	$fieldToolTipsdaftar_masalah_interna["English"]["id_problemlist"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["id_problemlist"] = "";
	$fieldLabelsdaftar_masalah_interna["English"]["daftar_masalah"] = "Daftar Masalah";
	$fieldToolTipsdaftar_masalah_interna["English"]["daftar_masalah"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["daftar_masalah"] = "";
	$fieldLabelsdaftar_masalah_interna["English"]["diagnosa_awal"] = "Diagnosa Awal";
	$fieldToolTipsdaftar_masalah_interna["English"]["diagnosa_awal"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["diagnosa_awal"] = "";
	$fieldLabelsdaftar_masalah_interna["English"]["diagnostik"] = "Diagnostik";
	$fieldToolTipsdaftar_masalah_interna["English"]["diagnostik"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["diagnostik"] = "";
	$fieldLabelsdaftar_masalah_interna["English"]["terapi"] = "Terapi";
	$fieldToolTipsdaftar_masalah_interna["English"]["terapi"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["terapi"] = "";
	$fieldLabelsdaftar_masalah_interna["English"]["monitoring"] = "Monitoring";
	$fieldToolTipsdaftar_masalah_interna["English"]["monitoring"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["monitoring"] = "";
	$fieldLabelsdaftar_masalah_interna["English"]["edukasi"] = "Edukasi";
	$fieldToolTipsdaftar_masalah_interna["English"]["edukasi"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["edukasi"] = "";
	$fieldLabelsdaftar_masalah_interna["English"]["id_interna"] = "";
	$fieldToolTipsdaftar_masalah_interna["English"]["id_interna"] = "";
	$placeHoldersdaftar_masalah_interna["English"]["id_interna"] = "";
	if (count($fieldToolTipsdaftar_masalah_interna["English"]))
		$tdatadaftar_masalah_interna[".isUseToolTips"] = true;
}


	$tdatadaftar_masalah_interna[".NCSearch"] = true;



$tdatadaftar_masalah_interna[".shortTableName"] = "daftar_masalah_interna";
$tdatadaftar_masalah_interna[".nSecOptions"] = 0;

$tdatadaftar_masalah_interna[".mainTableOwnerID"] = "";
$tdatadaftar_masalah_interna[".entityType"] = 0;
$tdatadaftar_masalah_interna[".connId"] = "newrm_at_localhost";


$tdatadaftar_masalah_interna[".strOriginalTableName"] = "daftar_masalah_interna";

	



$tdatadaftar_masalah_interna[".showAddInPopup"] = false;

$tdatadaftar_masalah_interna[".showEditInPopup"] = false;

$tdatadaftar_masalah_interna[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaftar_masalah_interna[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaftar_masalah_interna[".listAjax"] = false;
//	temporary
$tdatadaftar_masalah_interna[".listAjax"] = false;

	$tdatadaftar_masalah_interna[".audit"] = false;

	$tdatadaftar_masalah_interna[".locking"] = false;


$pages = $tdatadaftar_masalah_interna[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadaftar_masalah_interna[".edit"] = true;
	$tdatadaftar_masalah_interna[".afterEditAction"] = 1;
	$tdatadaftar_masalah_interna[".closePopupAfterEdit"] = 1;
	$tdatadaftar_masalah_interna[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadaftar_masalah_interna[".add"] = true;
$tdatadaftar_masalah_interna[".afterAddAction"] = 1;
$tdatadaftar_masalah_interna[".closePopupAfterAdd"] = 1;
$tdatadaftar_masalah_interna[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadaftar_masalah_interna[".list"] = true;
}



$tdatadaftar_masalah_interna[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadaftar_masalah_interna[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadaftar_masalah_interna[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadaftar_masalah_interna[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadaftar_masalah_interna[".printFriendly"] = true;
}



$tdatadaftar_masalah_interna[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadaftar_masalah_interna[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadaftar_masalah_interna[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadaftar_masalah_interna[".isUseAjaxSuggest"] = true;

$tdatadaftar_masalah_interna[".rowHighlite"] = true;





$tdatadaftar_masalah_interna[".ajaxCodeSnippetAdded"] = false;

$tdatadaftar_masalah_interna[".buttonsAdded"] = false;

$tdatadaftar_masalah_interna[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaftar_masalah_interna[".isUseTimeForSearch"] = false;


$tdatadaftar_masalah_interna[".badgeColor"] = "6493ea";


$tdatadaftar_masalah_interna[".allSearchFields"] = array();
$tdatadaftar_masalah_interna[".filterFields"] = array();
$tdatadaftar_masalah_interna[".requiredSearchFields"] = array();

$tdatadaftar_masalah_interna[".googleLikeFields"] = array();
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "id_problemlist";
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "daftar_masalah";
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "diagnosa_awal";
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "diagnostik";
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "terapi";
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "monitoring";
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "edukasi";
$tdatadaftar_masalah_interna[".googleLikeFields"][] = "id_interna";



$tdatadaftar_masalah_interna[".tableType"] = "list";

$tdatadaftar_masalah_interna[".printerPageOrientation"] = 0;
$tdatadaftar_masalah_interna[".nPrinterPageScale"] = 100;

$tdatadaftar_masalah_interna[".nPrinterSplitRecords"] = 40;

$tdatadaftar_masalah_interna[".geocodingEnabled"] = false;










$tdatadaftar_masalah_interna[".pageSize"] = 20;

$tdatadaftar_masalah_interna[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaftar_masalah_interna[".strOrderBy"] = $tstrOrderBy;

$tdatadaftar_masalah_interna[".orderindexes"] = array();


$tdatadaftar_masalah_interna[".sqlHead"] = "SELECT id_problemlist,  	daftar_masalah,  	diagnosa_awal,  	diagnostik,  	terapi,  	monitoring,  	edukasi,  	id_interna";
$tdatadaftar_masalah_interna[".sqlFrom"] = "FROM daftar_masalah_interna";
$tdatadaftar_masalah_interna[".sqlWhereExpr"] = "";
$tdatadaftar_masalah_interna[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaftar_masalah_interna[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaftar_masalah_interna[".arrGroupsPerPage"] = $arrGPP;

$tdatadaftar_masalah_interna[".highlightSearchResults"] = true;

$tableKeysdaftar_masalah_interna = array();
$tableKeysdaftar_masalah_interna[] = "id_problemlist";
$tdatadaftar_masalah_interna[".Keys"] = $tableKeysdaftar_masalah_interna;


$tdatadaftar_masalah_interna[".hideMobileList"] = array();




//	id_problemlist
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_problemlist";
	$fdata["GoodName"] = "id_problemlist";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","id_problemlist");
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


	$tdatadaftar_masalah_interna["id_problemlist"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "id_problemlist";
//	daftar_masalah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "daftar_masalah";
	$fdata["GoodName"] = "daftar_masalah";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","daftar_masalah");
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


	$tdatadaftar_masalah_interna["daftar_masalah"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "daftar_masalah";
//	diagnosa_awal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "diagnosa_awal";
	$fdata["GoodName"] = "diagnosa_awal";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","diagnosa_awal");
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


	$tdatadaftar_masalah_interna["diagnosa_awal"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "diagnosa_awal";
//	diagnostik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "diagnostik";
	$fdata["GoodName"] = "diagnostik";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","diagnostik");
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


	$tdatadaftar_masalah_interna["diagnostik"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "diagnostik";
//	terapi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "terapi";
	$fdata["GoodName"] = "terapi";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","terapi");
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


	$tdatadaftar_masalah_interna["terapi"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "terapi";
//	monitoring
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "monitoring";
	$fdata["GoodName"] = "monitoring";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","monitoring");
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


	$tdatadaftar_masalah_interna["monitoring"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "monitoring";
//	edukasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "edukasi";
	$fdata["GoodName"] = "edukasi";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","edukasi");
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


	$tdatadaftar_masalah_interna["edukasi"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "edukasi";
//	id_interna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "id_interna";
	$fdata["GoodName"] = "id_interna";
	$fdata["ownerTable"] = "daftar_masalah_interna";
	$fdata["Label"] = GetFieldLabel("daftar_masalah_interna","id_interna");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id_interna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_interna";

	
	
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


	$tdatadaftar_masalah_interna["id_interna"] = $fdata;
		$tdatadaftar_masalah_interna[".searchableFields"][] = "id_interna";


$tables_data["daftar_masalah_interna"]=&$tdatadaftar_masalah_interna;
$field_labels["daftar_masalah_interna"] = &$fieldLabelsdaftar_masalah_interna;
$fieldToolTips["daftar_masalah_interna"] = &$fieldToolTipsdaftar_masalah_interna;
$placeHolders["daftar_masalah_interna"] = &$placeHoldersdaftar_masalah_interna;
$page_titles["daftar_masalah_interna"] = &$pageTitlesdaftar_masalah_interna;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daftar_masalah_interna"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daftar_masalah_interna"] = array();



	
				$strOriginalDetailsTable="interna";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="interna";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "interna";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["daftar_masalah_interna"][0] = $masterParams;
				$masterTablesData["daftar_masalah_interna"][0]["masterKeys"] = array();
	$masterTablesData["daftar_masalah_interna"][0]["masterKeys"][]="id_interna";
				$masterTablesData["daftar_masalah_interna"][0]["detailKeys"] = array();
	$masterTablesData["daftar_masalah_interna"][0]["detailKeys"][]="id_interna";
		
	
				$strOriginalDetailsTable="interna";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="interna1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "interna1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["daftar_masalah_interna"][1] = $masterParams;
				$masterTablesData["daftar_masalah_interna"][1]["masterKeys"] = array();
	$masterTablesData["daftar_masalah_interna"][1]["masterKeys"][]="id_interna";
				$masterTablesData["daftar_masalah_interna"][1]["detailKeys"] = array();
	$masterTablesData["daftar_masalah_interna"][1]["detailKeys"][]="id_interna";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_daftar_masalah_interna()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_problemlist,  	daftar_masalah,  	diagnosa_awal,  	diagnostik,  	terapi,  	monitoring,  	edukasi,  	id_interna";
$proto0["m_strFrom"] = "FROM daftar_masalah_interna";
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
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto6["m_sql"] = "id_problemlist";
$proto6["m_srcTableName"] = "daftar_masalah_interna";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "daftar_masalah",
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto8["m_sql"] = "daftar_masalah";
$proto8["m_srcTableName"] = "daftar_masalah_interna";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosa_awal",
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto10["m_sql"] = "diagnosa_awal";
$proto10["m_srcTableName"] = "daftar_masalah_interna";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnostik",
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto12["m_sql"] = "diagnostik";
$proto12["m_srcTableName"] = "daftar_masalah_interna";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "terapi",
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto14["m_sql"] = "terapi";
$proto14["m_srcTableName"] = "daftar_masalah_interna";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "monitoring",
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto16["m_sql"] = "monitoring";
$proto16["m_srcTableName"] = "daftar_masalah_interna";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "edukasi",
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto18["m_sql"] = "edukasi";
$proto18["m_srcTableName"] = "daftar_masalah_interna";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "id_interna",
	"m_strTable" => "daftar_masalah_interna",
	"m_srcTableName" => "daftar_masalah_interna"
));

$proto20["m_sql"] = "id_interna";
$proto20["m_srcTableName"] = "daftar_masalah_interna";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "daftar_masalah_interna";
$proto23["m_srcTableName"] = "daftar_masalah_interna";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_problemlist";
$proto23["m_columns"][] = "daftar_masalah";
$proto23["m_columns"][] = "diagnosa_awal";
$proto23["m_columns"][] = "diagnostik";
$proto23["m_columns"][] = "terapi";
$proto23["m_columns"][] = "monitoring";
$proto23["m_columns"][] = "edukasi";
$proto23["m_columns"][] = "id_interna";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "daftar_masalah_interna";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "daftar_masalah_interna";
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
$proto0["m_srcTableName"]="daftar_masalah_interna";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daftar_masalah_interna = createSqlQuery_daftar_masalah_interna();


	
		;

								

$tdatadaftar_masalah_interna[".sqlquery"] = $queryData_daftar_masalah_interna;



$tableEvents["daftar_masalah_interna"] = new eventsBase;
$tdatadaftar_masalah_interna[".hasEvents"] = false;

?>