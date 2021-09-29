<?php
$tdatadosen = array();
$tdatadosen[".searchableFields"] = array();
$tdatadosen[".ShortName"] = "dosen";
$tdatadosen[".OwnerID"] = "";
$tdatadosen[".OriginalTable"] = "dosen";


$tdatadosen[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatadosen[".originalPagesByType"] = $tdatadosen[".pagesByType"];
$tdatadosen[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatadosen[".originalPages"] = $tdatadosen[".pages"];
$tdatadosen[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatadosen[".originalDefaultPages"] = $tdatadosen[".defaultPages"];

//	field labels
$fieldLabelsdosen = array();
$fieldToolTipsdosen = array();
$pageTitlesdosen = array();
$placeHoldersdosen = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdosen["English"] = array();
	$fieldToolTipsdosen["English"] = array();
	$placeHoldersdosen["English"] = array();
	$pageTitlesdosen["English"] = array();
	$fieldLabelsdosen["English"]["id_dosen"] = "Id Dosen";
	$fieldToolTipsdosen["English"]["id_dosen"] = "";
	$placeHoldersdosen["English"]["id_dosen"] = "";
	$fieldLabelsdosen["English"]["NAMA"] = "NAMA";
	$fieldToolTipsdosen["English"]["NAMA"] = "";
	$placeHoldersdosen["English"]["NAMA"] = "";
	$fieldLabelsdosen["English"]["NIP"] = "NIP";
	$fieldToolTipsdosen["English"]["NIP"] = "";
	$placeHoldersdosen["English"]["NIP"] = "";
	$fieldLabelsdosen["English"]["NIDN"] = "NIDN";
	$fieldToolTipsdosen["English"]["NIDN"] = "";
	$placeHoldersdosen["English"]["NIDN"] = "";
	$fieldLabelsdosen["English"]["NIDK"] = "NIDK";
	$fieldToolTipsdosen["English"]["NIDK"] = "";
	$placeHoldersdosen["English"]["NIDK"] = "";
	$fieldLabelsdosen["English"]["KETERANGAN"] = "KETERANGAN";
	$fieldToolTipsdosen["English"]["KETERANGAN"] = "";
	$placeHoldersdosen["English"]["KETERANGAN"] = "";
	$fieldLabelsdosen["English"]["Status"] = "Status";
	$fieldToolTipsdosen["English"]["Status"] = "";
	$placeHoldersdosen["English"]["Status"] = "";
	$fieldLabelsdosen["English"]["RS"] = "RS";
	$fieldToolTipsdosen["English"]["RS"] = "";
	$placeHoldersdosen["English"]["RS"] = "";
	if (count($fieldToolTipsdosen["English"]))
		$tdatadosen[".isUseToolTips"] = true;
}


	$tdatadosen[".NCSearch"] = true;



$tdatadosen[".shortTableName"] = "dosen";
$tdatadosen[".nSecOptions"] = 0;

$tdatadosen[".mainTableOwnerID"] = "";
$tdatadosen[".entityType"] = 0;
$tdatadosen[".connId"] = "newrm_at_localhost";


$tdatadosen[".strOriginalTableName"] = "dosen";

	



$tdatadosen[".showAddInPopup"] = false;

$tdatadosen[".showEditInPopup"] = false;

$tdatadosen[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadosen[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadosen[".listAjax"] = false;
//	temporary
$tdatadosen[".listAjax"] = false;

	$tdatadosen[".audit"] = false;

	$tdatadosen[".locking"] = false;


$pages = $tdatadosen[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadosen[".edit"] = true;
	$tdatadosen[".afterEditAction"] = 1;
	$tdatadosen[".closePopupAfterEdit"] = 1;
	$tdatadosen[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadosen[".add"] = true;
$tdatadosen[".afterAddAction"] = 1;
$tdatadosen[".closePopupAfterAdd"] = 1;
$tdatadosen[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadosen[".list"] = true;
}



$tdatadosen[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadosen[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadosen[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadosen[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadosen[".printFriendly"] = true;
}



$tdatadosen[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadosen[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadosen[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadosen[".isUseAjaxSuggest"] = true;

$tdatadosen[".rowHighlite"] = true;





$tdatadosen[".ajaxCodeSnippetAdded"] = false;

$tdatadosen[".buttonsAdded"] = false;

$tdatadosen[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadosen[".isUseTimeForSearch"] = false;


$tdatadosen[".badgeColor"] = "E8926F";


$tdatadosen[".allSearchFields"] = array();
$tdatadosen[".filterFields"] = array();
$tdatadosen[".requiredSearchFields"] = array();

$tdatadosen[".googleLikeFields"] = array();
$tdatadosen[".googleLikeFields"][] = "id_dosen";
$tdatadosen[".googleLikeFields"][] = "NAMA";
$tdatadosen[".googleLikeFields"][] = "NIP";
$tdatadosen[".googleLikeFields"][] = "NIDN";
$tdatadosen[".googleLikeFields"][] = "NIDK";
$tdatadosen[".googleLikeFields"][] = "KETERANGAN";
$tdatadosen[".googleLikeFields"][] = "Status";
$tdatadosen[".googleLikeFields"][] = "RS";



$tdatadosen[".tableType"] = "list";

$tdatadosen[".printerPageOrientation"] = 0;
$tdatadosen[".nPrinterPageScale"] = 100;

$tdatadosen[".nPrinterSplitRecords"] = 40;

$tdatadosen[".geocodingEnabled"] = false;










$tdatadosen[".pageSize"] = 20;

$tdatadosen[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadosen[".strOrderBy"] = $tstrOrderBy;

$tdatadosen[".orderindexes"] = array();


$tdatadosen[".sqlHead"] = "SELECT id_dosen,  	NAMA,  	NIP,  	NIDN,  	NIDK,  	KETERANGAN,  	Status,  	RS";
$tdatadosen[".sqlFrom"] = "FROM dosen";
$tdatadosen[".sqlWhereExpr"] = "";
$tdatadosen[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadosen[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadosen[".arrGroupsPerPage"] = $arrGPP;

$tdatadosen[".highlightSearchResults"] = true;

$tableKeysdosen = array();
$tableKeysdosen[] = "id_dosen";
$tdatadosen[".Keys"] = $tableKeysdosen;


$tdatadosen[".hideMobileList"] = array();




//	id_dosen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_dosen";
	$fdata["GoodName"] = "id_dosen";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","id_dosen");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_dosen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_dosen";

	
	
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


	$tdatadosen["id_dosen"] = $fdata;
		$tdatadosen[".searchableFields"][] = "id_dosen";
//	NAMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NAMA";
	$fdata["GoodName"] = "NAMA";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","NAMA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NAMA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NAMA";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadosen["NAMA"] = $fdata;
		$tdatadosen[".searchableFields"][] = "NAMA";
//	NIP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NIP";
	$fdata["GoodName"] = "NIP";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","NIP");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NIP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIP";

	
	
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
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadosen["NIP"] = $fdata;
		$tdatadosen[".searchableFields"][] = "NIP";
//	NIDN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "NIDN";
	$fdata["GoodName"] = "NIDN";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","NIDN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "NIDN";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIDN";

	
	
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
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadosen["NIDN"] = $fdata;
		$tdatadosen[".searchableFields"][] = "NIDN";
//	NIDK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NIDK";
	$fdata["GoodName"] = "NIDK";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","NIDK");
	$fdata["FieldType"] = 13;

	
	
	
			

		$fdata["strField"] = "NIDK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIDK";

	
	
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
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadosen["NIDK"] = $fdata;
		$tdatadosen[".searchableFields"][] = "NIDK";
//	KETERANGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "KETERANGAN";
	$fdata["GoodName"] = "KETERANGAN";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","KETERANGAN");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "KETERANGAN";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KETERANGAN";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadosen["KETERANGAN"] = $fdata;
		$tdatadosen[".searchableFields"][] = "KETERANGAN";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","Status");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadosen["Status"] = $fdata;
		$tdatadosen[".searchableFields"][] = "Status";
//	RS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "RS";
	$fdata["GoodName"] = "RS";
	$fdata["ownerTable"] = "dosen";
	$fdata["Label"] = GetFieldLabel("dosen","RS");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RS";

	
	
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
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdatadosen["RS"] = $fdata;
		$tdatadosen[".searchableFields"][] = "RS";


$tables_data["dosen"]=&$tdatadosen;
$field_labels["dosen"] = &$fieldLabelsdosen;
$fieldToolTips["dosen"] = &$fieldToolTipsdosen;
$placeHolders["dosen"] = &$placeHoldersdosen;
$page_titles["dosen"] = &$pageTitlesdosen;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["dosen"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["dosen"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dosen()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_dosen,  	NAMA,  	NIP,  	NIDN,  	NIDK,  	KETERANGAN,  	Status,  	RS";
$proto0["m_strFrom"] = "FROM dosen";
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
	"m_strName" => "id_dosen",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto6["m_sql"] = "id_dosen";
$proto6["m_srcTableName"] = "dosen";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NAMA",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto8["m_sql"] = "NAMA";
$proto8["m_srcTableName"] = "dosen";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NIP",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto10["m_sql"] = "NIP";
$proto10["m_srcTableName"] = "dosen";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NIDN",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto12["m_sql"] = "NIDN";
$proto12["m_srcTableName"] = "dosen";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NIDK",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto14["m_sql"] = "NIDK";
$proto14["m_srcTableName"] = "dosen";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "KETERANGAN",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto16["m_sql"] = "KETERANGAN";
$proto16["m_srcTableName"] = "dosen";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto18["m_sql"] = "Status";
$proto18["m_srcTableName"] = "dosen";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "RS",
	"m_strTable" => "dosen",
	"m_srcTableName" => "dosen"
));

$proto20["m_sql"] = "RS";
$proto20["m_srcTableName"] = "dosen";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "dosen";
$proto23["m_srcTableName"] = "dosen";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_dosen";
$proto23["m_columns"][] = "NAMA";
$proto23["m_columns"][] = "NIP";
$proto23["m_columns"][] = "NIDN";
$proto23["m_columns"][] = "NIDK";
$proto23["m_columns"][] = "KETERANGAN";
$proto23["m_columns"][] = "Status";
$proto23["m_columns"][] = "RS";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "dosen";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "dosen";
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
$proto0["m_srcTableName"]="dosen";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dosen = createSqlQuery_dosen();


	
		;

								

$tdatadosen[".sqlquery"] = $queryData_dosen;



$tableEvents["dosen"] = new eventsBase;
$tdatadosen[".hasEvents"] = false;

?>