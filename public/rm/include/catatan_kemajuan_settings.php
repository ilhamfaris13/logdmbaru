<?php
$tdatacatatan_kemajuan = array();
$tdatacatatan_kemajuan[".searchableFields"] = array();
$tdatacatatan_kemajuan[".ShortName"] = "catatan_kemajuan";
$tdatacatatan_kemajuan[".OwnerID"] = "";
$tdatacatatan_kemajuan[".OriginalTable"] = "catatan_kemajuan";


$tdatacatatan_kemajuan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacatatan_kemajuan[".originalPagesByType"] = $tdatacatatan_kemajuan[".pagesByType"];
$tdatacatatan_kemajuan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacatatan_kemajuan[".originalPages"] = $tdatacatatan_kemajuan[".pages"];
$tdatacatatan_kemajuan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacatatan_kemajuan[".originalDefaultPages"] = $tdatacatatan_kemajuan[".defaultPages"];

//	field labels
$fieldLabelscatatan_kemajuan = array();
$fieldToolTipscatatan_kemajuan = array();
$pageTitlescatatan_kemajuan = array();
$placeHolderscatatan_kemajuan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscatatan_kemajuan["English"] = array();
	$fieldToolTipscatatan_kemajuan["English"] = array();
	$placeHolderscatatan_kemajuan["English"] = array();
	$pageTitlescatatan_kemajuan["English"] = array();
	$fieldLabelscatatan_kemajuan["English"]["Id_Catatan_Kemajuan"] = "";
	$fieldToolTipscatatan_kemajuan["English"]["Id_Catatan_Kemajuan"] = "";
	$placeHolderscatatan_kemajuan["English"]["Id_Catatan_Kemajuan"] = "";
	$fieldLabelscatatan_kemajuan["English"]["Tanggal"] = "Tanggal";
	$fieldToolTipscatatan_kemajuan["English"]["Tanggal"] = "";
	$placeHolderscatatan_kemajuan["English"]["Tanggal"] = "";
	$fieldLabelscatatan_kemajuan["English"]["Subyektif"] = "Subyektif";
	$fieldToolTipscatatan_kemajuan["English"]["Subyektif"] = "";
	$placeHolderscatatan_kemajuan["English"]["Subyektif"] = "";
	$fieldLabelscatatan_kemajuan["English"]["Obyektif"] = "Obyektif";
	$fieldToolTipscatatan_kemajuan["English"]["Obyektif"] = "";
	$placeHolderscatatan_kemajuan["English"]["Obyektif"] = "";
	$fieldLabelscatatan_kemajuan["English"]["Assesment"] = "Assesment";
	$fieldToolTipscatatan_kemajuan["English"]["Assesment"] = "";
	$placeHolderscatatan_kemajuan["English"]["Assesment"] = "";
	$fieldLabelscatatan_kemajuan["English"]["Planning"] = "Planning";
	$fieldToolTipscatatan_kemajuan["English"]["Planning"] = "";
	$placeHolderscatatan_kemajuan["English"]["Planning"] = "";
	$fieldLabelscatatan_kemajuan["English"]["id_mata"] = "";
	$fieldToolTipscatatan_kemajuan["English"]["id_mata"] = "";
	$placeHolderscatatan_kemajuan["English"]["id_mata"] = "";
	if (count($fieldToolTipscatatan_kemajuan["English"]))
		$tdatacatatan_kemajuan[".isUseToolTips"] = true;
}


	$tdatacatatan_kemajuan[".NCSearch"] = true;



$tdatacatatan_kemajuan[".shortTableName"] = "catatan_kemajuan";
$tdatacatatan_kemajuan[".nSecOptions"] = 0;

$tdatacatatan_kemajuan[".mainTableOwnerID"] = "";
$tdatacatatan_kemajuan[".entityType"] = 0;
$tdatacatatan_kemajuan[".connId"] = "newrm_at_localhost";


$tdatacatatan_kemajuan[".strOriginalTableName"] = "catatan_kemajuan";

	



$tdatacatatan_kemajuan[".showAddInPopup"] = false;

$tdatacatatan_kemajuan[".showEditInPopup"] = false;

$tdatacatatan_kemajuan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacatatan_kemajuan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacatatan_kemajuan[".listAjax"] = false;
//	temporary
$tdatacatatan_kemajuan[".listAjax"] = false;

	$tdatacatatan_kemajuan[".audit"] = false;

	$tdatacatatan_kemajuan[".locking"] = false;


$pages = $tdatacatatan_kemajuan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacatatan_kemajuan[".edit"] = true;
	$tdatacatatan_kemajuan[".afterEditAction"] = 1;
	$tdatacatatan_kemajuan[".closePopupAfterEdit"] = 1;
	$tdatacatatan_kemajuan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacatatan_kemajuan[".add"] = true;
$tdatacatatan_kemajuan[".afterAddAction"] = 1;
$tdatacatatan_kemajuan[".closePopupAfterAdd"] = 1;
$tdatacatatan_kemajuan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacatatan_kemajuan[".list"] = true;
}



$tdatacatatan_kemajuan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacatatan_kemajuan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacatatan_kemajuan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacatatan_kemajuan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacatatan_kemajuan[".printFriendly"] = true;
}



$tdatacatatan_kemajuan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacatatan_kemajuan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacatatan_kemajuan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacatatan_kemajuan[".isUseAjaxSuggest"] = true;

$tdatacatatan_kemajuan[".rowHighlite"] = true;





$tdatacatatan_kemajuan[".ajaxCodeSnippetAdded"] = false;

$tdatacatatan_kemajuan[".buttonsAdded"] = false;

$tdatacatatan_kemajuan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacatatan_kemajuan[".isUseTimeForSearch"] = false;


$tdatacatatan_kemajuan[".badgeColor"] = "d2691e";


$tdatacatatan_kemajuan[".allSearchFields"] = array();
$tdatacatatan_kemajuan[".filterFields"] = array();
$tdatacatatan_kemajuan[".requiredSearchFields"] = array();

$tdatacatatan_kemajuan[".googleLikeFields"] = array();
$tdatacatatan_kemajuan[".googleLikeFields"][] = "Id_Catatan_Kemajuan";
$tdatacatatan_kemajuan[".googleLikeFields"][] = "Tanggal";
$tdatacatatan_kemajuan[".googleLikeFields"][] = "Subyektif";
$tdatacatatan_kemajuan[".googleLikeFields"][] = "Obyektif";
$tdatacatatan_kemajuan[".googleLikeFields"][] = "Assesment";
$tdatacatatan_kemajuan[".googleLikeFields"][] = "Planning";
$tdatacatatan_kemajuan[".googleLikeFields"][] = "id_mata";



$tdatacatatan_kemajuan[".tableType"] = "list";

$tdatacatatan_kemajuan[".printerPageOrientation"] = 0;
$tdatacatatan_kemajuan[".nPrinterPageScale"] = 100;

$tdatacatatan_kemajuan[".nPrinterSplitRecords"] = 40;

$tdatacatatan_kemajuan[".geocodingEnabled"] = false;










$tdatacatatan_kemajuan[".pageSize"] = 20;

$tdatacatatan_kemajuan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacatatan_kemajuan[".strOrderBy"] = $tstrOrderBy;

$tdatacatatan_kemajuan[".orderindexes"] = array();


$tdatacatatan_kemajuan[".sqlHead"] = "SELECT Id_Catatan_Kemajuan,  	Tanggal,  	Subyektif,  	Obyektif,  	Assesment,  	Planning,  	id_mata";
$tdatacatatan_kemajuan[".sqlFrom"] = "FROM catatan_kemajuan";
$tdatacatatan_kemajuan[".sqlWhereExpr"] = "";
$tdatacatatan_kemajuan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacatatan_kemajuan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacatatan_kemajuan[".arrGroupsPerPage"] = $arrGPP;

$tdatacatatan_kemajuan[".highlightSearchResults"] = true;

$tableKeyscatatan_kemajuan = array();
$tableKeyscatatan_kemajuan[] = "Id_Catatan_Kemajuan";
$tdatacatatan_kemajuan[".Keys"] = $tableKeyscatatan_kemajuan;


$tdatacatatan_kemajuan[".hideMobileList"] = array();




//	Id_Catatan_Kemajuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Catatan_Kemajuan";
	$fdata["GoodName"] = "Id_Catatan_Kemajuan";
	$fdata["ownerTable"] = "catatan_kemajuan";
	$fdata["Label"] = GetFieldLabel("catatan_kemajuan","Id_Catatan_Kemajuan");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Catatan_Kemajuan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_Catatan_Kemajuan";

	
	
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


	$tdatacatatan_kemajuan["Id_Catatan_Kemajuan"] = $fdata;
		$tdatacatatan_kemajuan[".searchableFields"][] = "Id_Catatan_Kemajuan";
//	Tanggal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tanggal";
	$fdata["GoodName"] = "Tanggal";
	$fdata["ownerTable"] = "catatan_kemajuan";
	$fdata["Label"] = GetFieldLabel("catatan_kemajuan","Tanggal");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Tanggal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tanggal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacatatan_kemajuan["Tanggal"] = $fdata;
		$tdatacatatan_kemajuan[".searchableFields"][] = "Tanggal";
//	Subyektif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Subyektif";
	$fdata["GoodName"] = "Subyektif";
	$fdata["ownerTable"] = "catatan_kemajuan";
	$fdata["Label"] = GetFieldLabel("catatan_kemajuan","Subyektif");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Subyektif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subyektif";

	
	
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


	$tdatacatatan_kemajuan["Subyektif"] = $fdata;
		$tdatacatatan_kemajuan[".searchableFields"][] = "Subyektif";
//	Obyektif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Obyektif";
	$fdata["GoodName"] = "Obyektif";
	$fdata["ownerTable"] = "catatan_kemajuan";
	$fdata["Label"] = GetFieldLabel("catatan_kemajuan","Obyektif");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Obyektif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obyektif";

	
	
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


	$tdatacatatan_kemajuan["Obyektif"] = $fdata;
		$tdatacatatan_kemajuan[".searchableFields"][] = "Obyektif";
//	Assesment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Assesment";
	$fdata["GoodName"] = "Assesment";
	$fdata["ownerTable"] = "catatan_kemajuan";
	$fdata["Label"] = GetFieldLabel("catatan_kemajuan","Assesment");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Assesment";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Assesment";

	
	
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


	$tdatacatatan_kemajuan["Assesment"] = $fdata;
		$tdatacatatan_kemajuan[".searchableFields"][] = "Assesment";
//	Planning
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Planning";
	$fdata["GoodName"] = "Planning";
	$fdata["ownerTable"] = "catatan_kemajuan";
	$fdata["Label"] = GetFieldLabel("catatan_kemajuan","Planning");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Planning";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Planning";

	
	
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


	$tdatacatatan_kemajuan["Planning"] = $fdata;
		$tdatacatatan_kemajuan[".searchableFields"][] = "Planning";
//	id_mata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_mata";
	$fdata["GoodName"] = "id_mata";
	$fdata["ownerTable"] = "catatan_kemajuan";
	$fdata["Label"] = GetFieldLabel("catatan_kemajuan","id_mata");
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


	$tdatacatatan_kemajuan["id_mata"] = $fdata;
		$tdatacatatan_kemajuan[".searchableFields"][] = "id_mata";


$tables_data["catatan_kemajuan"]=&$tdatacatatan_kemajuan;
$field_labels["catatan_kemajuan"] = &$fieldLabelscatatan_kemajuan;
$fieldToolTips["catatan_kemajuan"] = &$fieldToolTipscatatan_kemajuan;
$placeHolders["catatan_kemajuan"] = &$placeHolderscatatan_kemajuan;
$page_titles["catatan_kemajuan"] = &$pageTitlescatatan_kemajuan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["catatan_kemajuan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["catatan_kemajuan"] = array();



	
				$strOriginalDetailsTable="mata";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mata";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mata";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["catatan_kemajuan"][0] = $masterParams;
				$masterTablesData["catatan_kemajuan"][0]["masterKeys"] = array();
	$masterTablesData["catatan_kemajuan"][0]["masterKeys"][]="Id_Mata";
				$masterTablesData["catatan_kemajuan"][0]["detailKeys"] = array();
	$masterTablesData["catatan_kemajuan"][0]["detailKeys"][]="id_mata";
		
	
				$strOriginalDetailsTable="mata";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mata1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mata1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["catatan_kemajuan"][1] = $masterParams;
				$masterTablesData["catatan_kemajuan"][1]["masterKeys"] = array();
	$masterTablesData["catatan_kemajuan"][1]["masterKeys"][]="Id_Mata";
				$masterTablesData["catatan_kemajuan"][1]["detailKeys"] = array();
	$masterTablesData["catatan_kemajuan"][1]["detailKeys"][]="id_mata";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_catatan_kemajuan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_Catatan_Kemajuan,  	Tanggal,  	Subyektif,  	Obyektif,  	Assesment,  	Planning,  	id_mata";
$proto0["m_strFrom"] = "FROM catatan_kemajuan";
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
	"m_strName" => "Id_Catatan_Kemajuan",
	"m_strTable" => "catatan_kemajuan",
	"m_srcTableName" => "catatan_kemajuan"
));

$proto6["m_sql"] = "Id_Catatan_Kemajuan";
$proto6["m_srcTableName"] = "catatan_kemajuan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal",
	"m_strTable" => "catatan_kemajuan",
	"m_srcTableName" => "catatan_kemajuan"
));

$proto8["m_sql"] = "Tanggal";
$proto8["m_srcTableName"] = "catatan_kemajuan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Subyektif",
	"m_strTable" => "catatan_kemajuan",
	"m_srcTableName" => "catatan_kemajuan"
));

$proto10["m_sql"] = "Subyektif";
$proto10["m_srcTableName"] = "catatan_kemajuan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Obyektif",
	"m_strTable" => "catatan_kemajuan",
	"m_srcTableName" => "catatan_kemajuan"
));

$proto12["m_sql"] = "Obyektif";
$proto12["m_srcTableName"] = "catatan_kemajuan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Assesment",
	"m_strTable" => "catatan_kemajuan",
	"m_srcTableName" => "catatan_kemajuan"
));

$proto14["m_sql"] = "Assesment";
$proto14["m_srcTableName"] = "catatan_kemajuan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Planning",
	"m_strTable" => "catatan_kemajuan",
	"m_srcTableName" => "catatan_kemajuan"
));

$proto16["m_sql"] = "Planning";
$proto16["m_srcTableName"] = "catatan_kemajuan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mata",
	"m_strTable" => "catatan_kemajuan",
	"m_srcTableName" => "catatan_kemajuan"
));

$proto18["m_sql"] = "id_mata";
$proto18["m_srcTableName"] = "catatan_kemajuan";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "catatan_kemajuan";
$proto21["m_srcTableName"] = "catatan_kemajuan";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "Id_Catatan_Kemajuan";
$proto21["m_columns"][] = "Tanggal";
$proto21["m_columns"][] = "Subyektif";
$proto21["m_columns"][] = "Obyektif";
$proto21["m_columns"][] = "Assesment";
$proto21["m_columns"][] = "Planning";
$proto21["m_columns"][] = "id_mata";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "catatan_kemajuan";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "catatan_kemajuan";
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
$proto0["m_srcTableName"]="catatan_kemajuan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_catatan_kemajuan = createSqlQuery_catatan_kemajuan();


	
		;

							

$tdatacatatan_kemajuan[".sqlquery"] = $queryData_catatan_kemajuan;



$tableEvents["catatan_kemajuan"] = new eventsBase;
$tdatacatatan_kemajuan[".hasEvents"] = false;

?>