<?php
$tdataparu = array();
$tdataparu[".searchableFields"] = array();
$tdataparu[".ShortName"] = "paru";
$tdataparu[".OwnerID"] = "";
$tdataparu[".OriginalTable"] = "paru";


$tdataparu[".pagesByType"] = my_json_decode( "{\"add\":[\"EDIT1\",\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataparu[".originalPagesByType"] = $tdataparu[".pagesByType"];
$tdataparu[".pages"] = types2pages( my_json_decode( "{\"add\":[\"EDIT1\",\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataparu[".originalPages"] = $tdataparu[".pages"];
$tdataparu[".defaultPages"] = my_json_decode( "{\"add\":\"EDIT1\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataparu[".originalDefaultPages"] = $tdataparu[".defaultPages"];

//	field labels
$fieldLabelsparu = array();
$fieldToolTipsparu = array();
$pageTitlesparu = array();
$placeHoldersparu = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparu["English"] = array();
	$fieldToolTipsparu["English"] = array();
	$placeHoldersparu["English"] = array();
	$pageTitlesparu["English"] = array();
	$fieldLabelsparu["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipsparu["English"]["Keluhan_Utama"] = "";
	$placeHoldersparu["English"]["Keluhan_Utama"] = "";
	$fieldLabelsparu["English"]["Keluhan_Tambahan"] = "Keluhan Tambahan";
	$fieldToolTipsparu["English"]["Keluhan_Tambahan"] = "";
	$placeHoldersparu["English"]["Keluhan_Tambahan"] = "";
	$fieldLabelsparu["English"]["Riwayat_Penyakit_Sekarang"] = "Riwayat Penyakit Sekarang";
	$fieldToolTipsparu["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$placeHoldersparu["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$fieldLabelsparu["English"]["Riwayat_Penyakit_Dahulu"] = "Riwayat Penyakit Dahulu";
	$fieldToolTipsparu["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$placeHoldersparu["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$fieldLabelsparu["English"]["Riwayat_Penyakit_Keluarga"] = "Riwayat Penyakit Keluarga";
	$fieldToolTipsparu["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$placeHoldersparu["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$fieldLabelsparu["English"]["Riwayat_Alergi"] = "Riwayat Alergi";
	$fieldToolTipsparu["English"]["Riwayat_Alergi"] = "";
	$placeHoldersparu["English"]["Riwayat_Alergi"] = "";
	$fieldLabelsparu["English"]["Riwayat_Pengobatan"] = "Riwayat Pengobatan";
	$fieldToolTipsparu["English"]["Riwayat_Pengobatan"] = "";
	$placeHoldersparu["English"]["Riwayat_Pengobatan"] = "";
	$fieldLabelsparu["English"]["Riwayat_Kebiasaan"] = "Riwayat Kebiasaan";
	$fieldToolTipsparu["English"]["Riwayat_Kebiasaan"] = "";
	$placeHoldersparu["English"]["Riwayat_Kebiasaan"] = "";
	$fieldLabelsparu["English"]["Riwayat_Sosial_Ekonomi"] = "Riwayat Sosial Ekonomi";
	$fieldToolTipsparu["English"]["Riwayat_Sosial_Ekonomi"] = "";
	$placeHoldersparu["English"]["Riwayat_Sosial_Ekonomi"] = "";
	$fieldLabelsparu["English"]["Pemeriksaan_Fisik"] = "Pemeriksaan Fisik";
	$fieldToolTipsparu["English"]["Pemeriksaan_Fisik"] = "";
	$placeHoldersparu["English"]["Pemeriksaan_Fisik"] = "";
	$fieldLabelsparu["English"]["Laboratorium"] = "Laboratorium";
	$fieldToolTipsparu["English"]["Laboratorium"] = "";
	$placeHoldersparu["English"]["Laboratorium"] = "";
	$fieldLabelsparu["English"]["Status"] = "Status";
	$fieldToolTipsparu["English"]["Status"] = "";
	$placeHoldersparu["English"]["Status"] = "";
	$fieldLabelsparu["English"]["Radiologi"] = "Radiologi";
	$fieldToolTipsparu["English"]["Radiologi"] = "";
	$placeHoldersparu["English"]["Radiologi"] = "";
	$fieldLabelsparu["English"]["Lain_lain"] = "Lain-lain";
	$fieldToolTipsparu["English"]["Lain_lain"] = "";
	$placeHoldersparu["English"]["Lain_lain"] = "";
	$fieldLabelsparu["English"]["PENILAIAN_RENCANA"] = "PENILAIAN RENCANA";
	$fieldToolTipsparu["English"]["PENILAIAN_RENCANA"] = "";
	$placeHoldersparu["English"]["PENILAIAN_RENCANA"] = "";
	$fieldLabelsparu["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsparu["English"]["id_pasien"] = "";
	$placeHoldersparu["English"]["id_pasien"] = "";
	$fieldLabelsparu["English"]["id_user"] = "Id User";
	$fieldToolTipsparu["English"]["id_user"] = "";
	$placeHoldersparu["English"]["id_user"] = "";
	$fieldLabelsparu["English"]["nomor_rm"] = "Nomor Rm";
	$fieldToolTipsparu["English"]["nomor_rm"] = "";
	$placeHoldersparu["English"]["nomor_rm"] = "";
	$fieldLabelsparu["English"]["Id_paru"] = "Id Paru";
	$fieldToolTipsparu["English"]["Id_paru"] = "";
	$placeHoldersparu["English"]["Id_paru"] = "";
	if (count($fieldToolTipsparu["English"]))
		$tdataparu[".isUseToolTips"] = true;
}


	$tdataparu[".NCSearch"] = true;



$tdataparu[".shortTableName"] = "paru";
$tdataparu[".nSecOptions"] = 0;

$tdataparu[".mainTableOwnerID"] = "";
$tdataparu[".entityType"] = 0;
$tdataparu[".connId"] = "newrm_at_localhost";


$tdataparu[".strOriginalTableName"] = "paru";

	



$tdataparu[".showAddInPopup"] = false;

$tdataparu[".showEditInPopup"] = false;

$tdataparu[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataparu[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataparu[".listAjax"] = false;
//	temporary
$tdataparu[".listAjax"] = false;

	$tdataparu[".audit"] = false;

	$tdataparu[".locking"] = false;


$pages = $tdataparu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataparu[".edit"] = true;
	$tdataparu[".afterEditAction"] = 1;
	$tdataparu[".closePopupAfterEdit"] = 1;
	$tdataparu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataparu[".add"] = true;
$tdataparu[".afterAddAction"] = 1;
$tdataparu[".closePopupAfterAdd"] = 1;
$tdataparu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataparu[".list"] = true;
}



$tdataparu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataparu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataparu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataparu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataparu[".printFriendly"] = true;
}



$tdataparu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataparu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataparu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataparu[".isUseAjaxSuggest"] = true;

$tdataparu[".rowHighlite"] = true;





$tdataparu[".ajaxCodeSnippetAdded"] = false;

$tdataparu[".buttonsAdded"] = false;

$tdataparu[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparu[".isUseTimeForSearch"] = false;


$tdataparu[".badgeColor"] = "e67349";


$tdataparu[".allSearchFields"] = array();
$tdataparu[".filterFields"] = array();
$tdataparu[".requiredSearchFields"] = array();

$tdataparu[".googleLikeFields"] = array();
$tdataparu[".googleLikeFields"][] = "Id_paru";
$tdataparu[".googleLikeFields"][] = "Keluhan Utama";
$tdataparu[".googleLikeFields"][] = "Keluhan Tambahan";
$tdataparu[".googleLikeFields"][] = "Riwayat Penyakit Sekarang";
$tdataparu[".googleLikeFields"][] = "Riwayat Penyakit Dahulu";
$tdataparu[".googleLikeFields"][] = "Riwayat Penyakit Keluarga";
$tdataparu[".googleLikeFields"][] = "Riwayat Alergi";
$tdataparu[".googleLikeFields"][] = "Riwayat Pengobatan";
$tdataparu[".googleLikeFields"][] = "Riwayat Kebiasaan";
$tdataparu[".googleLikeFields"][] = "Riwayat Sosial Ekonomi";
$tdataparu[".googleLikeFields"][] = "Pemeriksaan Fisik";
$tdataparu[".googleLikeFields"][] = "Laboratorium";
$tdataparu[".googleLikeFields"][] = "Status";
$tdataparu[".googleLikeFields"][] = "Radiologi";
$tdataparu[".googleLikeFields"][] = "Lain-lain";
$tdataparu[".googleLikeFields"][] = "PENILAIAN_RENCANA";
$tdataparu[".googleLikeFields"][] = "id_pasien";
$tdataparu[".googleLikeFields"][] = "id_user";
$tdataparu[".googleLikeFields"][] = "nomor_rm";



$tdataparu[".tableType"] = "list";

$tdataparu[".printerPageOrientation"] = 0;
$tdataparu[".nPrinterPageScale"] = 100;

$tdataparu[".nPrinterSplitRecords"] = 40;

$tdataparu[".geocodingEnabled"] = false;










$tdataparu[".pageSize"] = 20;

$tdataparu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataparu[".strOrderBy"] = $tstrOrderBy;

$tdataparu[".orderindexes"] = array();


$tdataparu[".sqlHead"] = "SELECT Id_paru,  	`Keluhan Utama`,  	`Keluhan Tambahan`,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Riwayat Sosial Ekonomi`,  	`Pemeriksaan Fisik`,  	Laboratorium,  	Status,  	Radiologi,  	`Lain-lain`,  	PENILAIAN_RENCANA,  	id_pasien,  	id_user,  	nomor_rm";
$tdataparu[".sqlFrom"] = "FROM paru";
$tdataparu[".sqlWhereExpr"] = "";
$tdataparu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparu[".arrGroupsPerPage"] = $arrGPP;

$tdataparu[".highlightSearchResults"] = true;

$tableKeysparu = array();
$tdataparu[".Keys"] = $tableKeysparu;


$tdataparu[".hideMobileList"] = array();




//	Id_paru
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_paru";
	$fdata["GoodName"] = "Id_paru";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Id_paru");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_paru";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_paru";

	
	
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


	$tdataparu["Id_paru"] = $fdata;
		$tdataparu[".searchableFields"][] = "Id_paru";
//	Keluhan Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Keluhan_Utama");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keluhan Utama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Keluhan Utama`";

	
	
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


	$tdataparu["Keluhan Utama"] = $fdata;
		$tdataparu[".searchableFields"][] = "Keluhan Utama";
//	Keluhan Tambahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Keluhan Tambahan";
	$fdata["GoodName"] = "Keluhan_Tambahan";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Keluhan_Tambahan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keluhan Tambahan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Keluhan Tambahan`";

	
	
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


	$tdataparu["Keluhan Tambahan"] = $fdata;
		$tdataparu[".searchableFields"][] = "Keluhan Tambahan";
//	Riwayat Penyakit Sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Riwayat Penyakit Sekarang";
	$fdata["GoodName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Riwayat_Penyakit_Sekarang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Penyakit Sekarang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Penyakit Sekarang`";

	
	
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


	$tdataparu["Riwayat Penyakit Sekarang"] = $fdata;
		$tdataparu[".searchableFields"][] = "Riwayat Penyakit Sekarang";
//	Riwayat Penyakit Dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Riwayat Penyakit Dahulu";
	$fdata["GoodName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Riwayat_Penyakit_Dahulu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Penyakit Dahulu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Penyakit Dahulu`";

	
	
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


	$tdataparu["Riwayat Penyakit Dahulu"] = $fdata;
		$tdataparu[".searchableFields"][] = "Riwayat Penyakit Dahulu";
//	Riwayat Penyakit Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat Penyakit Keluarga";
	$fdata["GoodName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Riwayat_Penyakit_Keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Penyakit Keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Penyakit Keluarga`";

	
	
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


	$tdataparu["Riwayat Penyakit Keluarga"] = $fdata;
		$tdataparu[".searchableFields"][] = "Riwayat Penyakit Keluarga";
//	Riwayat Alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat Alergi";
	$fdata["GoodName"] = "Riwayat_Alergi";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Riwayat_Alergi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Alergi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Alergi`";

	
	
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


	$tdataparu["Riwayat Alergi"] = $fdata;
		$tdataparu[".searchableFields"][] = "Riwayat Alergi";
//	Riwayat Pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat Pengobatan";
	$fdata["GoodName"] = "Riwayat_Pengobatan";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Riwayat_Pengobatan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Pengobatan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Pengobatan`";

	
	
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


	$tdataparu["Riwayat Pengobatan"] = $fdata;
		$tdataparu[".searchableFields"][] = "Riwayat Pengobatan";
//	Riwayat Kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat Kebiasaan";
	$fdata["GoodName"] = "Riwayat_Kebiasaan";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Riwayat_Kebiasaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Kebiasaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Kebiasaan`";

	
	
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


	$tdataparu["Riwayat Kebiasaan"] = $fdata;
		$tdataparu[".searchableFields"][] = "Riwayat Kebiasaan";
//	Riwayat Sosial Ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat Sosial Ekonomi";
	$fdata["GoodName"] = "Riwayat_Sosial_Ekonomi";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Riwayat_Sosial_Ekonomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Sosial Ekonomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Sosial Ekonomi`";

	
	
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


	$tdataparu["Riwayat Sosial Ekonomi"] = $fdata;
		$tdataparu[".searchableFields"][] = "Riwayat Sosial Ekonomi";
//	Pemeriksaan Fisik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Pemeriksaan Fisik";
	$fdata["GoodName"] = "Pemeriksaan_Fisik";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Pemeriksaan_Fisik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pemeriksaan Fisik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Pemeriksaan Fisik`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
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


	$tdataparu["Pemeriksaan Fisik"] = $fdata;
		$tdataparu[".searchableFields"][] = "Pemeriksaan Fisik";
//	Laboratorium
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Laboratorium";
	$fdata["GoodName"] = "Laboratorium";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Laboratorium");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Laboratorium";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Laboratorium";

	
	
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


	$tdataparu["Laboratorium"] = $fdata;
		$tdataparu[".searchableFields"][] = "Laboratorium";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Status");
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


	$tdataparu["Status"] = $fdata;
		$tdataparu[".searchableFields"][] = "Status";
//	Radiologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Radiologi";
	$fdata["GoodName"] = "Radiologi";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Radiologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Radiologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Radiologi";

	
	
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


	$tdataparu["Radiologi"] = $fdata;
		$tdataparu[".searchableFields"][] = "Radiologi";
//	Lain-lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Lain-lain";
	$fdata["GoodName"] = "Lain_lain";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","Lain_lain");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lain-lain";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Lain-lain`";

	
	
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


	$tdataparu["Lain-lain"] = $fdata;
		$tdataparu[".searchableFields"][] = "Lain-lain";
//	PENILAIAN_RENCANA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PENILAIAN_RENCANA";
	$fdata["GoodName"] = "PENILAIAN_RENCANA";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","PENILAIAN_RENCANA");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PENILAIAN_RENCANA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PENILAIAN_RENCANA";

	
	
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


	$tdataparu["PENILAIAN_RENCANA"] = $fdata;
		$tdataparu[".searchableFields"][] = "PENILAIAN_RENCANA";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","id_pasien");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_pasien";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
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
	$edata["LookupTable"] = "identitas_pasien";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id_Pasien";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "Nama";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataparu["id_pasien"] = $fdata;
		$tdataparu[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","id_user");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataparu["id_user"] = $fdata;
		$tdataparu[".searchableFields"][] = "id_user";
//	nomor_rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "nomor_rm";
	$fdata["GoodName"] = "nomor_rm";
	$fdata["ownerTable"] = "paru";
	$fdata["Label"] = GetFieldLabel("paru","nomor_rm");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nomor_rm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomor_rm";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataparu["nomor_rm"] = $fdata;
		$tdataparu[".searchableFields"][] = "nomor_rm";


$tables_data["paru"]=&$tdataparu;
$field_labels["paru"] = &$fieldLabelsparu;
$fieldToolTips["paru"] = &$fieldToolTipsparu;
$placeHolders["paru"] = &$placeHoldersparu;
$page_titles["paru"] = &$pageTitlesparu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["paru"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["paru"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paru"][0] = $masterParams;
				$masterTablesData["paru"][0]["masterKeys"] = array();
	$masterTablesData["paru"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["paru"][0]["detailKeys"] = array();
	$masterTablesData["paru"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["paru"][1] = $masterParams;
				$masterTablesData["paru"][1]["masterKeys"] = array();
	$masterTablesData["paru"][1]["masterKeys"][]="id";
				$masterTablesData["paru"][1]["detailKeys"] = array();
	$masterTablesData["paru"][1]["detailKeys"][]="id_user";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_paru()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_paru,  	`Keluhan Utama`,  	`Keluhan Tambahan`,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Riwayat Sosial Ekonomi`,  	`Pemeriksaan Fisik`,  	Laboratorium,  	Status,  	Radiologi,  	`Lain-lain`,  	PENILAIAN_RENCANA,  	id_pasien,  	id_user,  	nomor_rm";
$proto0["m_strFrom"] = "FROM paru";
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
	"m_strName" => "Id_paru",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto6["m_sql"] = "Id_paru";
$proto6["m_srcTableName"] = "paru";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan Utama",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto8["m_sql"] = "`Keluhan Utama`";
$proto8["m_srcTableName"] = "paru";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan Tambahan",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto10["m_sql"] = "`Keluhan Tambahan`";
$proto10["m_srcTableName"] = "paru";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Sekarang",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto12["m_sql"] = "`Riwayat Penyakit Sekarang`";
$proto12["m_srcTableName"] = "paru";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Dahulu",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto14["m_sql"] = "`Riwayat Penyakit Dahulu`";
$proto14["m_srcTableName"] = "paru";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Keluarga",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto16["m_sql"] = "`Riwayat Penyakit Keluarga`";
$proto16["m_srcTableName"] = "paru";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Alergi",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto18["m_sql"] = "`Riwayat Alergi`";
$proto18["m_srcTableName"] = "paru";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Pengobatan",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto20["m_sql"] = "`Riwayat Pengobatan`";
$proto20["m_srcTableName"] = "paru";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Kebiasaan",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto22["m_sql"] = "`Riwayat Kebiasaan`";
$proto22["m_srcTableName"] = "paru";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Sosial Ekonomi",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto24["m_sql"] = "`Riwayat Sosial Ekonomi`";
$proto24["m_srcTableName"] = "paru";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Pemeriksaan Fisik",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto26["m_sql"] = "`Pemeriksaan Fisik`";
$proto26["m_srcTableName"] = "paru";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Laboratorium",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto28["m_sql"] = "Laboratorium";
$proto28["m_srcTableName"] = "paru";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto30["m_sql"] = "Status";
$proto30["m_srcTableName"] = "paru";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Radiologi",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto32["m_sql"] = "Radiologi";
$proto32["m_srcTableName"] = "paru";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Lain-lain",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto34["m_sql"] = "`Lain-lain`";
$proto34["m_srcTableName"] = "paru";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PENILAIAN_RENCANA",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto36["m_sql"] = "PENILAIAN_RENCANA";
$proto36["m_srcTableName"] = "paru";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto38["m_sql"] = "id_pasien";
$proto38["m_srcTableName"] = "paru";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto40["m_sql"] = "id_user";
$proto40["m_srcTableName"] = "paru";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor_rm",
	"m_strTable" => "paru",
	"m_srcTableName" => "paru"
));

$proto42["m_sql"] = "nomor_rm";
$proto42["m_srcTableName"] = "paru";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "paru";
$proto45["m_srcTableName"] = "paru";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "Id_paru";
$proto45["m_columns"][] = "Keluhan Utama";
$proto45["m_columns"][] = "Keluhan Tambahan";
$proto45["m_columns"][] = "Riwayat Penyakit Sekarang";
$proto45["m_columns"][] = "Riwayat Penyakit Dahulu";
$proto45["m_columns"][] = "Riwayat Penyakit Keluarga";
$proto45["m_columns"][] = "Riwayat Alergi";
$proto45["m_columns"][] = "Riwayat Pengobatan";
$proto45["m_columns"][] = "Riwayat Kebiasaan";
$proto45["m_columns"][] = "Riwayat Sosial Ekonomi";
$proto45["m_columns"][] = "Pemeriksaan Fisik";
$proto45["m_columns"][] = "Laboratorium";
$proto45["m_columns"][] = "Status";
$proto45["m_columns"][] = "Radiologi";
$proto45["m_columns"][] = "Lain-lain";
$proto45["m_columns"][] = "PENILAIAN_RENCANA";
$proto45["m_columns"][] = "id_pasien";
$proto45["m_columns"][] = "id_user";
$proto45["m_columns"][] = "nomor_rm";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "paru";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "paru";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="paru";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_paru = createSqlQuery_paru();


	
		;

																			

$tdataparu[".sqlquery"] = $queryData_paru;



$tableEvents["paru"] = new eventsBase;
$tdataparu[".hasEvents"] = false;

?>