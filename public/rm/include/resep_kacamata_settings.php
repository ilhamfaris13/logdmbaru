<?php
$tdataresep_kacamata = array();
$tdataresep_kacamata[".searchableFields"] = array();
$tdataresep_kacamata[".ShortName"] = "resep_kacamata";
$tdataresep_kacamata[".OwnerID"] = "";
$tdataresep_kacamata[".OriginalTable"] = "resep_kacamata";


$tdataresep_kacamata[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresep_kacamata[".originalPagesByType"] = $tdataresep_kacamata[".pagesByType"];
$tdataresep_kacamata[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresep_kacamata[".originalPages"] = $tdataresep_kacamata[".pages"];
$tdataresep_kacamata[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataresep_kacamata[".originalDefaultPages"] = $tdataresep_kacamata[".defaultPages"];

//	field labels
$fieldLabelsresep_kacamata = array();
$fieldToolTipsresep_kacamata = array();
$pageTitlesresep_kacamata = array();
$placeHoldersresep_kacamata = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresep_kacamata["English"] = array();
	$fieldToolTipsresep_kacamata["English"] = array();
	$placeHoldersresep_kacamata["English"] = array();
	$pageTitlesresep_kacamata["English"] = array();
	$fieldLabelsresep_kacamata["English"]["id"] = "Id";
	$fieldToolTipsresep_kacamata["English"]["id"] = "";
	$placeHoldersresep_kacamata["English"]["id"] = "";
	$fieldLabelsresep_kacamata["English"]["od_spheris"] = "Spheris";
	$fieldToolTipsresep_kacamata["English"]["od_spheris"] = "";
	$placeHoldersresep_kacamata["English"]["od_spheris"] = "";
	$fieldLabelsresep_kacamata["English"]["od_cylindris"] = "Cylindris";
	$fieldToolTipsresep_kacamata["English"]["od_cylindris"] = "";
	$placeHoldersresep_kacamata["English"]["od_cylindris"] = "";
	$fieldLabelsresep_kacamata["English"]["od_axis"] = "Axis";
	$fieldToolTipsresep_kacamata["English"]["od_axis"] = "";
	$placeHoldersresep_kacamata["English"]["od_axis"] = "";
	$fieldLabelsresep_kacamata["English"]["addisi_od"] = "";
	$fieldToolTipsresep_kacamata["English"]["addisi_od"] = "";
	$placeHoldersresep_kacamata["English"]["addisi_od"] = "";
	$fieldLabelsresep_kacamata["English"]["os_spheris"] = "Spheris";
	$fieldToolTipsresep_kacamata["English"]["os_spheris"] = "";
	$placeHoldersresep_kacamata["English"]["os_spheris"] = "";
	$fieldLabelsresep_kacamata["English"]["os_cylindris"] = "Cylindris";
	$fieldToolTipsresep_kacamata["English"]["os_cylindris"] = "";
	$placeHoldersresep_kacamata["English"]["os_cylindris"] = "";
	$fieldLabelsresep_kacamata["English"]["os_axis"] = "Axis";
	$fieldToolTipsresep_kacamata["English"]["os_axis"] = "";
	$placeHoldersresep_kacamata["English"]["os_axis"] = "";
	$fieldLabelsresep_kacamata["English"]["addis_os"] = "";
	$fieldToolTipsresep_kacamata["English"]["addis_os"] = "";
	$placeHoldersresep_kacamata["English"]["addis_os"] = "";
	$fieldLabelsresep_kacamata["English"]["jarak_pupil"] = "Jarak Pupil";
	$fieldToolTipsresep_kacamata["English"]["jarak_pupil"] = "";
	$placeHoldersresep_kacamata["English"]["jarak_pupil"] = "";
	$fieldLabelsresep_kacamata["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsresep_kacamata["English"]["id_pasien"] = "";
	$placeHoldersresep_kacamata["English"]["id_pasien"] = "";
	if (count($fieldToolTipsresep_kacamata["English"]))
		$tdataresep_kacamata[".isUseToolTips"] = true;
}


	$tdataresep_kacamata[".NCSearch"] = true;



$tdataresep_kacamata[".shortTableName"] = "resep_kacamata";
$tdataresep_kacamata[".nSecOptions"] = 0;

$tdataresep_kacamata[".mainTableOwnerID"] = "";
$tdataresep_kacamata[".entityType"] = 0;
$tdataresep_kacamata[".connId"] = "newrm_at_localhost";


$tdataresep_kacamata[".strOriginalTableName"] = "resep_kacamata";

	



$tdataresep_kacamata[".showAddInPopup"] = false;

$tdataresep_kacamata[".showEditInPopup"] = false;

$tdataresep_kacamata[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataresep_kacamata[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataresep_kacamata[".listAjax"] = false;
//	temporary
$tdataresep_kacamata[".listAjax"] = false;

	$tdataresep_kacamata[".audit"] = false;

	$tdataresep_kacamata[".locking"] = false;


$pages = $tdataresep_kacamata[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresep_kacamata[".edit"] = true;
	$tdataresep_kacamata[".afterEditAction"] = 1;
	$tdataresep_kacamata[".closePopupAfterEdit"] = 1;
	$tdataresep_kacamata[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresep_kacamata[".add"] = true;
$tdataresep_kacamata[".afterAddAction"] = 1;
$tdataresep_kacamata[".closePopupAfterAdd"] = 1;
$tdataresep_kacamata[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresep_kacamata[".list"] = true;
}



$tdataresep_kacamata[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresep_kacamata[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresep_kacamata[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresep_kacamata[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresep_kacamata[".printFriendly"] = true;
}



$tdataresep_kacamata[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresep_kacamata[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresep_kacamata[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresep_kacamata[".isUseAjaxSuggest"] = true;

$tdataresep_kacamata[".rowHighlite"] = true;





$tdataresep_kacamata[".ajaxCodeSnippetAdded"] = false;

$tdataresep_kacamata[".buttonsAdded"] = false;

$tdataresep_kacamata[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresep_kacamata[".isUseTimeForSearch"] = false;


$tdataresep_kacamata[".badgeColor"] = "6da5c8";


$tdataresep_kacamata[".allSearchFields"] = array();
$tdataresep_kacamata[".filterFields"] = array();
$tdataresep_kacamata[".requiredSearchFields"] = array();

$tdataresep_kacamata[".googleLikeFields"] = array();
$tdataresep_kacamata[".googleLikeFields"][] = "id";
$tdataresep_kacamata[".googleLikeFields"][] = "od_spheris";
$tdataresep_kacamata[".googleLikeFields"][] = "od_cylindris";
$tdataresep_kacamata[".googleLikeFields"][] = "od_axis";
$tdataresep_kacamata[".googleLikeFields"][] = "addisi_od";
$tdataresep_kacamata[".googleLikeFields"][] = "os_spheris";
$tdataresep_kacamata[".googleLikeFields"][] = "os_cylindris";
$tdataresep_kacamata[".googleLikeFields"][] = "os_axis";
$tdataresep_kacamata[".googleLikeFields"][] = "addis_os";
$tdataresep_kacamata[".googleLikeFields"][] = "jarak_pupil";
$tdataresep_kacamata[".googleLikeFields"][] = "id_pasien";



$tdataresep_kacamata[".tableType"] = "list";

$tdataresep_kacamata[".printerPageOrientation"] = 0;
$tdataresep_kacamata[".nPrinterPageScale"] = 100;

$tdataresep_kacamata[".nPrinterSplitRecords"] = 40;

$tdataresep_kacamata[".geocodingEnabled"] = false;










$tdataresep_kacamata[".pageSize"] = 20;

$tdataresep_kacamata[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataresep_kacamata[".strOrderBy"] = $tstrOrderBy;

$tdataresep_kacamata[".orderindexes"] = array();


$tdataresep_kacamata[".sqlHead"] = "SELECT id,  	od_spheris,  	od_cylindris,  	od_axis,  	addisi_od,  	os_spheris,  	os_cylindris,  	os_axis,  	addis_os,  	jarak_pupil,  	id_pasien";
$tdataresep_kacamata[".sqlFrom"] = "FROM resep_kacamata";
$tdataresep_kacamata[".sqlWhereExpr"] = "";
$tdataresep_kacamata[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresep_kacamata[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresep_kacamata[".arrGroupsPerPage"] = $arrGPP;

$tdataresep_kacamata[".highlightSearchResults"] = true;

$tableKeysresep_kacamata = array();
$tableKeysresep_kacamata[] = "id";
$tdataresep_kacamata[".Keys"] = $tableKeysresep_kacamata;


$tdataresep_kacamata[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataresep_kacamata["id"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "id";
//	od_spheris
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "od_spheris";
	$fdata["GoodName"] = "od_spheris";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","od_spheris");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "od_spheris";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "od_spheris";

	
	
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


	$tdataresep_kacamata["od_spheris"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "od_spheris";
//	od_cylindris
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "od_cylindris";
	$fdata["GoodName"] = "od_cylindris";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","od_cylindris");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "od_cylindris";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "od_cylindris";

	
	
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


	$tdataresep_kacamata["od_cylindris"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "od_cylindris";
//	od_axis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "od_axis";
	$fdata["GoodName"] = "od_axis";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","od_axis");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "od_axis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "od_axis";

	
	
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


	$tdataresep_kacamata["od_axis"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "od_axis";
//	addisi_od
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "addisi_od";
	$fdata["GoodName"] = "addisi_od";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","addisi_od");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "addisi_od";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "addisi_od";

	
	
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


	$tdataresep_kacamata["addisi_od"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "addisi_od";
//	os_spheris
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "os_spheris";
	$fdata["GoodName"] = "os_spheris";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","os_spheris");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "os_spheris";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "os_spheris";

	
	
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


	$tdataresep_kacamata["os_spheris"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "os_spheris";
//	os_cylindris
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "os_cylindris";
	$fdata["GoodName"] = "os_cylindris";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","os_cylindris");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "os_cylindris";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "os_cylindris";

	
	
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


	$tdataresep_kacamata["os_cylindris"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "os_cylindris";
//	os_axis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "os_axis";
	$fdata["GoodName"] = "os_axis";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","os_axis");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "os_axis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "os_axis";

	
	
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


	$tdataresep_kacamata["os_axis"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "os_axis";
//	addis_os
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "addis_os";
	$fdata["GoodName"] = "addis_os";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","addis_os");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "addis_os";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "addis_os";

	
	
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


	$tdataresep_kacamata["addis_os"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "addis_os";
//	jarak_pupil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "jarak_pupil";
	$fdata["GoodName"] = "jarak_pupil";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","jarak_pupil");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "jarak_pupil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jarak_pupil";

	
	
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


	$tdataresep_kacamata["jarak_pupil"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "jarak_pupil";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "resep_kacamata";
	$fdata["Label"] = GetFieldLabel("resep_kacamata","id_pasien");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_pasien";

	
	
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


	$tdataresep_kacamata["id_pasien"] = $fdata;
		$tdataresep_kacamata[".searchableFields"][] = "id_pasien";


$tables_data["resep_kacamata"]=&$tdataresep_kacamata;
$field_labels["resep_kacamata"] = &$fieldLabelsresep_kacamata;
$fieldToolTips["resep_kacamata"] = &$fieldToolTipsresep_kacamata;
$placeHolders["resep_kacamata"] = &$placeHoldersresep_kacamata;
$page_titles["resep_kacamata"] = &$pageTitlesresep_kacamata;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["resep_kacamata"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["resep_kacamata"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["resep_kacamata"][0] = $masterParams;
				$masterTablesData["resep_kacamata"][0]["masterKeys"] = array();
	$masterTablesData["resep_kacamata"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["resep_kacamata"][0]["detailKeys"] = array();
	$masterTablesData["resep_kacamata"][0]["detailKeys"][]="id_pasien";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_resep_kacamata()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	od_spheris,  	od_cylindris,  	od_axis,  	addisi_od,  	os_spheris,  	os_cylindris,  	os_axis,  	addis_os,  	jarak_pupil,  	id_pasien";
$proto0["m_strFrom"] = "FROM resep_kacamata";
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
	"m_strName" => "id",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "resep_kacamata";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "od_spheris",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto8["m_sql"] = "od_spheris";
$proto8["m_srcTableName"] = "resep_kacamata";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "od_cylindris",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto10["m_sql"] = "od_cylindris";
$proto10["m_srcTableName"] = "resep_kacamata";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "od_axis",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto12["m_sql"] = "od_axis";
$proto12["m_srcTableName"] = "resep_kacamata";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "addisi_od",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto14["m_sql"] = "addisi_od";
$proto14["m_srcTableName"] = "resep_kacamata";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "os_spheris",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto16["m_sql"] = "os_spheris";
$proto16["m_srcTableName"] = "resep_kacamata";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "os_cylindris",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto18["m_sql"] = "os_cylindris";
$proto18["m_srcTableName"] = "resep_kacamata";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "os_axis",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto20["m_sql"] = "os_axis";
$proto20["m_srcTableName"] = "resep_kacamata";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "addis_os",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto22["m_sql"] = "addis_os";
$proto22["m_srcTableName"] = "resep_kacamata";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "jarak_pupil",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto24["m_sql"] = "jarak_pupil";
$proto24["m_srcTableName"] = "resep_kacamata";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "resep_kacamata",
	"m_srcTableName" => "resep_kacamata"
));

$proto26["m_sql"] = "id_pasien";
$proto26["m_srcTableName"] = "resep_kacamata";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "resep_kacamata";
$proto29["m_srcTableName"] = "resep_kacamata";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "od_spheris";
$proto29["m_columns"][] = "od_cylindris";
$proto29["m_columns"][] = "od_axis";
$proto29["m_columns"][] = "addisi_od";
$proto29["m_columns"][] = "os_spheris";
$proto29["m_columns"][] = "os_cylindris";
$proto29["m_columns"][] = "os_axis";
$proto29["m_columns"][] = "addis_os";
$proto29["m_columns"][] = "jarak_pupil";
$proto29["m_columns"][] = "id_pasien";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "resep_kacamata";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "resep_kacamata";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="resep_kacamata";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_resep_kacamata = createSqlQuery_resep_kacamata();


	
		;

											

$tdataresep_kacamata[".sqlquery"] = $queryData_resep_kacamata;



$tableEvents["resep_kacamata"] = new eventsBase;
$tdataresep_kacamata[".hasEvents"] = false;

?>