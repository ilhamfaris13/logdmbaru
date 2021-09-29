<?php
$tdatarujukan = array();
$tdatarujukan[".searchableFields"] = array();
$tdatarujukan[".ShortName"] = "rujukan";
$tdatarujukan[".OwnerID"] = "";
$tdatarujukan[".OriginalTable"] = "rujukan";


$tdatarujukan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarujukan[".originalPagesByType"] = $tdatarujukan[".pagesByType"];
$tdatarujukan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarujukan[".originalPages"] = $tdatarujukan[".pages"];
$tdatarujukan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarujukan[".originalDefaultPages"] = $tdatarujukan[".defaultPages"];

//	field labels
$fieldLabelsrujukan = array();
$fieldToolTipsrujukan = array();
$pageTitlesrujukan = array();
$placeHoldersrujukan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrujukan["English"] = array();
	$fieldToolTipsrujukan["English"] = array();
	$placeHoldersrujukan["English"] = array();
	$pageTitlesrujukan["English"] = array();
	$fieldLabelsrujukan["English"]["id_rujukan"] = "Id Rujukan";
	$fieldToolTipsrujukan["English"]["id_rujukan"] = "";
	$placeHoldersrujukan["English"]["id_rujukan"] = "";
	$fieldLabelsrujukan["English"]["dokter"] = "Dokter";
	$fieldToolTipsrujukan["English"]["dokter"] = "";
	$placeHoldersrujukan["English"]["dokter"] = "";
	$fieldLabelsrujukan["English"]["diagnosa_1"] = "Diagnosa 1";
	$fieldToolTipsrujukan["English"]["diagnosa_1"] = "";
	$placeHoldersrujukan["English"]["diagnosa_1"] = "";
	$fieldLabelsrujukan["English"]["hasil_pemeriksaan"] = "Hasil Pemeriksaan";
	$fieldToolTipsrujukan["English"]["hasil_pemeriksaan"] = "";
	$placeHoldersrujukan["English"]["hasil_pemeriksaan"] = "";
	$fieldLabelsrujukan["English"]["permohonan"] = "Permohonan";
	$fieldToolTipsrujukan["English"]["permohonan"] = "";
	$placeHoldersrujukan["English"]["permohonan"] = "";
	$fieldLabelsrujukan["English"]["tanggal"] = "Tanggal";
	$fieldToolTipsrujukan["English"]["tanggal"] = "";
	$placeHoldersrujukan["English"]["tanggal"] = "";
	$fieldLabelsrujukan["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsrujukan["English"]["id_pasien"] = "";
	$placeHoldersrujukan["English"]["id_pasien"] = "";
	if (count($fieldToolTipsrujukan["English"]))
		$tdatarujukan[".isUseToolTips"] = true;
}


	$tdatarujukan[".NCSearch"] = true;



$tdatarujukan[".shortTableName"] = "rujukan";
$tdatarujukan[".nSecOptions"] = 0;

$tdatarujukan[".mainTableOwnerID"] = "";
$tdatarujukan[".entityType"] = 0;
$tdatarujukan[".connId"] = "newrm_at_localhost";


$tdatarujukan[".strOriginalTableName"] = "rujukan";

	



$tdatarujukan[".showAddInPopup"] = false;

$tdatarujukan[".showEditInPopup"] = false;

$tdatarujukan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarujukan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarujukan[".listAjax"] = false;
//	temporary
$tdatarujukan[".listAjax"] = false;

	$tdatarujukan[".audit"] = false;

	$tdatarujukan[".locking"] = false;


$pages = $tdatarujukan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarujukan[".edit"] = true;
	$tdatarujukan[".afterEditAction"] = 1;
	$tdatarujukan[".closePopupAfterEdit"] = 1;
	$tdatarujukan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarujukan[".add"] = true;
$tdatarujukan[".afterAddAction"] = 1;
$tdatarujukan[".closePopupAfterAdd"] = 1;
$tdatarujukan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarujukan[".list"] = true;
}



$tdatarujukan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarujukan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarujukan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarujukan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarujukan[".printFriendly"] = true;
}



$tdatarujukan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarujukan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarujukan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarujukan[".isUseAjaxSuggest"] = true;

$tdatarujukan[".rowHighlite"] = true;





$tdatarujukan[".ajaxCodeSnippetAdded"] = false;

$tdatarujukan[".buttonsAdded"] = false;

$tdatarujukan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarujukan[".isUseTimeForSearch"] = false;


$tdatarujukan[".badgeColor"] = "cd853f";


$tdatarujukan[".allSearchFields"] = array();
$tdatarujukan[".filterFields"] = array();
$tdatarujukan[".requiredSearchFields"] = array();

$tdatarujukan[".googleLikeFields"] = array();
$tdatarujukan[".googleLikeFields"][] = "id_rujukan";
$tdatarujukan[".googleLikeFields"][] = "dokter";
$tdatarujukan[".googleLikeFields"][] = "diagnosa_1";
$tdatarujukan[".googleLikeFields"][] = "hasil_pemeriksaan";
$tdatarujukan[".googleLikeFields"][] = "permohonan";
$tdatarujukan[".googleLikeFields"][] = "tanggal";
$tdatarujukan[".googleLikeFields"][] = "id_pasien";



$tdatarujukan[".tableType"] = "list";

$tdatarujukan[".printerPageOrientation"] = 0;
$tdatarujukan[".nPrinterPageScale"] = 100;

$tdatarujukan[".nPrinterSplitRecords"] = 40;

$tdatarujukan[".geocodingEnabled"] = false;










$tdatarujukan[".pageSize"] = 20;

$tdatarujukan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarujukan[".strOrderBy"] = $tstrOrderBy;

$tdatarujukan[".orderindexes"] = array();


$tdatarujukan[".sqlHead"] = "SELECT id_rujukan,  	dokter,  	diagnosa_1,  	hasil_pemeriksaan,  	permohonan,  	tanggal,  	id_pasien";
$tdatarujukan[".sqlFrom"] = "FROM rujukan";
$tdatarujukan[".sqlWhereExpr"] = "";
$tdatarujukan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarujukan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarujukan[".arrGroupsPerPage"] = $arrGPP;

$tdatarujukan[".highlightSearchResults"] = true;

$tableKeysrujukan = array();
$tableKeysrujukan[] = "id_rujukan";
$tdatarujukan[".Keys"] = $tableKeysrujukan;


$tdatarujukan[".hideMobileList"] = array();




//	id_rujukan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_rujukan";
	$fdata["GoodName"] = "id_rujukan";
	$fdata["ownerTable"] = "rujukan";
	$fdata["Label"] = GetFieldLabel("rujukan","id_rujukan");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_rujukan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_rujukan";

	
	
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


	$tdatarujukan["id_rujukan"] = $fdata;
		$tdatarujukan[".searchableFields"][] = "id_rujukan";
//	dokter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dokter";
	$fdata["GoodName"] = "dokter";
	$fdata["ownerTable"] = "rujukan";
	$fdata["Label"] = GetFieldLabel("rujukan","dokter");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "dokter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dokter";

	
	
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


	$tdatarujukan["dokter"] = $fdata;
		$tdatarujukan[".searchableFields"][] = "dokter";
//	diagnosa_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "diagnosa_1";
	$fdata["GoodName"] = "diagnosa_1";
	$fdata["ownerTable"] = "rujukan";
	$fdata["Label"] = GetFieldLabel("rujukan","diagnosa_1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diagnosa_1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosa_1";

	
	
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


	$tdatarujukan["diagnosa_1"] = $fdata;
		$tdatarujukan[".searchableFields"][] = "diagnosa_1";
//	hasil_pemeriksaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hasil_pemeriksaan";
	$fdata["GoodName"] = "hasil_pemeriksaan";
	$fdata["ownerTable"] = "rujukan";
	$fdata["Label"] = GetFieldLabel("rujukan","hasil_pemeriksaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "hasil_pemeriksaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hasil_pemeriksaan";

	
	
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


	$tdatarujukan["hasil_pemeriksaan"] = $fdata;
		$tdatarujukan[".searchableFields"][] = "hasil_pemeriksaan";
//	permohonan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "permohonan";
	$fdata["GoodName"] = "permohonan";
	$fdata["ownerTable"] = "rujukan";
	$fdata["Label"] = GetFieldLabel("rujukan","permohonan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "permohonan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "permohonan";

	
	
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


	$tdatarujukan["permohonan"] = $fdata;
		$tdatarujukan[".searchableFields"][] = "permohonan";
//	tanggal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tanggal";
	$fdata["GoodName"] = "tanggal";
	$fdata["ownerTable"] = "rujukan";
	$fdata["Label"] = GetFieldLabel("rujukan","tanggal");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "tanggal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggal";

	
	
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


	$tdatarujukan["tanggal"] = $fdata;
		$tdatarujukan[".searchableFields"][] = "tanggal";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "rujukan";
	$fdata["Label"] = GetFieldLabel("rujukan","id_pasien");
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


	$tdatarujukan["id_pasien"] = $fdata;
		$tdatarujukan[".searchableFields"][] = "id_pasien";


$tables_data["rujukan"]=&$tdatarujukan;
$field_labels["rujukan"] = &$fieldLabelsrujukan;
$fieldToolTips["rujukan"] = &$fieldToolTipsrujukan;
$placeHolders["rujukan"] = &$placeHoldersrujukan;
$page_titles["rujukan"] = &$pageTitlesrujukan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["rujukan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["rujukan"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["rujukan"][0] = $masterParams;
				$masterTablesData["rujukan"][0]["masterKeys"] = array();
	$masterTablesData["rujukan"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["rujukan"][0]["detailKeys"] = array();
	$masterTablesData["rujukan"][0]["detailKeys"][]="id_pasien";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rujukan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_rujukan,  	dokter,  	diagnosa_1,  	hasil_pemeriksaan,  	permohonan,  	tanggal,  	id_pasien";
$proto0["m_strFrom"] = "FROM rujukan";
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
	"m_strName" => "id_rujukan",
	"m_strTable" => "rujukan",
	"m_srcTableName" => "rujukan"
));

$proto6["m_sql"] = "id_rujukan";
$proto6["m_srcTableName"] = "rujukan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dokter",
	"m_strTable" => "rujukan",
	"m_srcTableName" => "rujukan"
));

$proto8["m_sql"] = "dokter";
$proto8["m_srcTableName"] = "rujukan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosa_1",
	"m_strTable" => "rujukan",
	"m_srcTableName" => "rujukan"
));

$proto10["m_sql"] = "diagnosa_1";
$proto10["m_srcTableName"] = "rujukan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hasil_pemeriksaan",
	"m_strTable" => "rujukan",
	"m_srcTableName" => "rujukan"
));

$proto12["m_sql"] = "hasil_pemeriksaan";
$proto12["m_srcTableName"] = "rujukan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "permohonan",
	"m_strTable" => "rujukan",
	"m_srcTableName" => "rujukan"
));

$proto14["m_sql"] = "permohonan";
$proto14["m_srcTableName"] = "rujukan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggal",
	"m_strTable" => "rujukan",
	"m_srcTableName" => "rujukan"
));

$proto16["m_sql"] = "tanggal";
$proto16["m_srcTableName"] = "rujukan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "rujukan",
	"m_srcTableName" => "rujukan"
));

$proto18["m_sql"] = "id_pasien";
$proto18["m_srcTableName"] = "rujukan";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "rujukan";
$proto21["m_srcTableName"] = "rujukan";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_rujukan";
$proto21["m_columns"][] = "dokter";
$proto21["m_columns"][] = "diagnosa_1";
$proto21["m_columns"][] = "hasil_pemeriksaan";
$proto21["m_columns"][] = "permohonan";
$proto21["m_columns"][] = "tanggal";
$proto21["m_columns"][] = "id_pasien";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "rujukan";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "rujukan";
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
$proto0["m_srcTableName"]="rujukan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rujukan = createSqlQuery_rujukan();


	
		;

							

$tdatarujukan[".sqlquery"] = $queryData_rujukan;



$tableEvents["rujukan"] = new eventsBase;
$tdatarujukan[".hasEvents"] = false;

?>