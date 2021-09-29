<?php
$tdatabedah = array();
$tdatabedah[".searchableFields"] = array();
$tdatabedah[".ShortName"] = "bedah";
$tdatabedah[".OwnerID"] = "";
$tdatabedah[".OriginalTable"] = "bedah";


$tdatabedah[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatabedah[".originalPagesByType"] = $tdatabedah[".pagesByType"];
$tdatabedah[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatabedah[".originalPages"] = $tdatabedah[".pages"];
$tdatabedah[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatabedah[".originalDefaultPages"] = $tdatabedah[".defaultPages"];

//	field labels
$fieldLabelsbedah = array();
$fieldToolTipsbedah = array();
$pageTitlesbedah = array();
$placeHoldersbedah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbedah["English"] = array();
	$fieldToolTipsbedah["English"] = array();
	$placeHoldersbedah["English"] = array();
	$pageTitlesbedah["English"] = array();
	$fieldLabelsbedah["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipsbedah["English"]["Keluhan_Utama"] = "";
	$placeHoldersbedah["English"]["Keluhan_Utama"] = "";
	$fieldLabelsbedah["English"]["Keluhan_Tambahan"] = "Keluhan Tambahan";
	$fieldToolTipsbedah["English"]["Keluhan_Tambahan"] = "";
	$placeHoldersbedah["English"]["Keluhan_Tambahan"] = "";
	$fieldLabelsbedah["English"]["Riwayat_Penyakit_Sekarang"] = "Riwayat Penyakit Sekarang";
	$fieldToolTipsbedah["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$placeHoldersbedah["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$fieldLabelsbedah["English"]["Riwayat_Penyakit_Dahulu"] = "Riwayat Penyakit Dahulu";
	$fieldToolTipsbedah["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$placeHoldersbedah["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$fieldLabelsbedah["English"]["Riwayat_Penyakit_Keluarga"] = "Riwayat Penyakit Keluarga";
	$fieldToolTipsbedah["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$placeHoldersbedah["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$fieldLabelsbedah["English"]["Riwayat_Alergi"] = "Riwayat Alergi";
	$fieldToolTipsbedah["English"]["Riwayat_Alergi"] = "";
	$placeHoldersbedah["English"]["Riwayat_Alergi"] = "";
	$fieldLabelsbedah["English"]["Riwayat_Pengobatan"] = "Riwayat Pengobatan";
	$fieldToolTipsbedah["English"]["Riwayat_Pengobatan"] = "";
	$placeHoldersbedah["English"]["Riwayat_Pengobatan"] = "";
	$fieldLabelsbedah["English"]["Riwayat_Kebiasaan"] = "Riwayat Kebiasaan";
	$fieldToolTipsbedah["English"]["Riwayat_Kebiasaan"] = "";
	$placeHoldersbedah["English"]["Riwayat_Kebiasaan"] = "";
	$fieldLabelsbedah["English"]["Pemeriksaan_Umum"] = "Pemeriksaan Umum";
	$fieldToolTipsbedah["English"]["Pemeriksaan_Umum"] = "";
	$placeHoldersbedah["English"]["Pemeriksaan_Umum"] = "";
	$fieldLabelsbedah["English"]["Pemeriksaan_Fisik"] = "Pemeriksaan Fisik";
	$fieldToolTipsbedah["English"]["Pemeriksaan_Fisik"] = "";
	$placeHoldersbedah["English"]["Pemeriksaan_Fisik"] = "";
	$fieldLabelsbedah["English"]["Foto_Klinis"] = "Foto Klinis";
	$fieldToolTipsbedah["English"]["Foto_Klinis"] = "";
	$placeHoldersbedah["English"]["Foto_Klinis"] = "";
	$fieldLabelsbedah["English"]["CT_SCAN"] = "CT-SCAN";
	$fieldToolTipsbedah["English"]["CT_SCAN"] = "";
	$placeHoldersbedah["English"]["CT_SCAN"] = "";
	$fieldLabelsbedah["English"]["MRI"] = "MRI";
	$fieldToolTipsbedah["English"]["MRI"] = "";
	$placeHoldersbedah["English"]["MRI"] = "";
	$fieldLabelsbedah["English"]["Patologi_Anatomi"] = "Patologi Anatomi";
	$fieldToolTipsbedah["English"]["Patologi_Anatomi"] = "";
	$placeHoldersbedah["English"]["Patologi_Anatomi"] = "";
	$fieldLabelsbedah["English"]["status_lokalis"] = "Status Lokalis";
	$fieldToolTipsbedah["English"]["status_lokalis"] = "";
	$placeHoldersbedah["English"]["status_lokalis"] = "";
	$fieldLabelsbedah["English"]["resume"] = "Resume";
	$fieldToolTipsbedah["English"]["resume"] = "";
	$placeHoldersbedah["English"]["resume"] = "";
	$fieldLabelsbedah["English"]["Diagnosis"] = "Diagnosis";
	$fieldToolTipsbedah["English"]["Diagnosis"] = "";
	$placeHoldersbedah["English"]["Diagnosis"] = "";
	$fieldLabelsbedah["English"]["Diagnosis_Banding"] = "Diagnosis Banding";
	$fieldToolTipsbedah["English"]["Diagnosis_Banding"] = "";
	$placeHoldersbedah["English"]["Diagnosis_Banding"] = "";
	$fieldLabelsbedah["English"]["Diagnosis_Plan"] = "Diagnosis Plan";
	$fieldToolTipsbedah["English"]["Diagnosis_Plan"] = "";
	$placeHoldersbedah["English"]["Diagnosis_Plan"] = "";
	$fieldLabelsbedah["English"]["Terapi_Medikamentosa"] = "Terapi Medikamentosa";
	$fieldToolTipsbedah["English"]["Terapi_Medikamentosa"] = "";
	$placeHoldersbedah["English"]["Terapi_Medikamentosa"] = "";
	$fieldLabelsbedah["English"]["Terapi_Non_Medikamentosa___Operatif"] = "Terapi Non Medikamentosa / Operatif";
	$fieldToolTipsbedah["English"]["Terapi_Non_Medikamentosa___Operatif"] = "";
	$placeHoldersbedah["English"]["Terapi_Non_Medikamentosa___Operatif"] = "";
	$fieldLabelsbedah["English"]["Monitoring"] = "Monitoring";
	$fieldToolTipsbedah["English"]["Monitoring"] = "";
	$placeHoldersbedah["English"]["Monitoring"] = "";
	$fieldLabelsbedah["English"]["Edukasi"] = "Edukasi";
	$fieldToolTipsbedah["English"]["Edukasi"] = "";
	$placeHoldersbedah["English"]["Edukasi"] = "";
	$fieldLabelsbedah["English"]["Prognosis"] = "Prognosis";
	$fieldToolTipsbedah["English"]["Prognosis"] = "";
	$placeHoldersbedah["English"]["Prognosis"] = "";
	$fieldLabelsbedah["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsbedah["English"]["id_pasien"] = "";
	$placeHoldersbedah["English"]["id_pasien"] = "";
	$fieldLabelsbedah["English"]["id_user"] = "Id User";
	$fieldToolTipsbedah["English"]["id_user"] = "";
	$placeHoldersbedah["English"]["id_user"] = "";
	$fieldLabelsbedah["English"]["nomor_rm"] = "Nomor Rm";
	$fieldToolTipsbedah["English"]["nomor_rm"] = "";
	$placeHoldersbedah["English"]["nomor_rm"] = "";
	$fieldLabelsbedah["English"]["Id_bedah"] = "Id Bedah";
	$fieldToolTipsbedah["English"]["Id_bedah"] = "";
	$placeHoldersbedah["English"]["Id_bedah"] = "";
	if (count($fieldToolTipsbedah["English"]))
		$tdatabedah[".isUseToolTips"] = true;
}


	$tdatabedah[".NCSearch"] = true;



$tdatabedah[".shortTableName"] = "bedah";
$tdatabedah[".nSecOptions"] = 0;

$tdatabedah[".mainTableOwnerID"] = "";
$tdatabedah[".entityType"] = 0;
$tdatabedah[".connId"] = "newrm_at_localhost";


$tdatabedah[".strOriginalTableName"] = "bedah";

	



$tdatabedah[".showAddInPopup"] = false;

$tdatabedah[".showEditInPopup"] = false;

$tdatabedah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabedah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabedah[".listAjax"] = false;
//	temporary
$tdatabedah[".listAjax"] = false;

	$tdatabedah[".audit"] = false;

	$tdatabedah[".locking"] = false;


$pages = $tdatabedah[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabedah[".edit"] = true;
	$tdatabedah[".afterEditAction"] = 1;
	$tdatabedah[".closePopupAfterEdit"] = 1;
	$tdatabedah[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabedah[".add"] = true;
$tdatabedah[".afterAddAction"] = 1;
$tdatabedah[".closePopupAfterAdd"] = 1;
$tdatabedah[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabedah[".list"] = true;
}



$tdatabedah[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabedah[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabedah[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabedah[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabedah[".printFriendly"] = true;
}



$tdatabedah[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabedah[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabedah[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabedah[".isUseAjaxSuggest"] = true;

$tdatabedah[".rowHighlite"] = true;





$tdatabedah[".ajaxCodeSnippetAdded"] = false;

$tdatabedah[".buttonsAdded"] = false;

$tdatabedah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabedah[".isUseTimeForSearch"] = false;


$tdatabedah[".badgeColor"] = "cd5c5c";


$tdatabedah[".allSearchFields"] = array();
$tdatabedah[".filterFields"] = array();
$tdatabedah[".requiredSearchFields"] = array();

$tdatabedah[".googleLikeFields"] = array();
$tdatabedah[".googleLikeFields"][] = "Id_bedah";
$tdatabedah[".googleLikeFields"][] = "Keluhan Utama";
$tdatabedah[".googleLikeFields"][] = "Keluhan Tambahan";
$tdatabedah[".googleLikeFields"][] = "Riwayat Penyakit Sekarang";
$tdatabedah[".googleLikeFields"][] = "Riwayat Penyakit Dahulu";
$tdatabedah[".googleLikeFields"][] = "Riwayat Penyakit Keluarga";
$tdatabedah[".googleLikeFields"][] = "Riwayat Alergi";
$tdatabedah[".googleLikeFields"][] = "Riwayat Pengobatan";
$tdatabedah[".googleLikeFields"][] = "Riwayat Kebiasaan";
$tdatabedah[".googleLikeFields"][] = "Pemeriksaan Umum";
$tdatabedah[".googleLikeFields"][] = "Pemeriksaan Fisik";
$tdatabedah[".googleLikeFields"][] = "Foto Klinis";
$tdatabedah[".googleLikeFields"][] = "CT-SCAN";
$tdatabedah[".googleLikeFields"][] = "MRI";
$tdatabedah[".googleLikeFields"][] = "Patologi Anatomi";
$tdatabedah[".googleLikeFields"][] = "status lokalis";
$tdatabedah[".googleLikeFields"][] = "resume";
$tdatabedah[".googleLikeFields"][] = "Diagnosis";
$tdatabedah[".googleLikeFields"][] = "Diagnosis Banding";
$tdatabedah[".googleLikeFields"][] = "Diagnosis Plan";
$tdatabedah[".googleLikeFields"][] = "Terapi Medikamentosa";
$tdatabedah[".googleLikeFields"][] = "Terapi Non Medikamentosa / Operatif";
$tdatabedah[".googleLikeFields"][] = "Monitoring";
$tdatabedah[".googleLikeFields"][] = "Edukasi";
$tdatabedah[".googleLikeFields"][] = "Prognosis";
$tdatabedah[".googleLikeFields"][] = "id_pasien";
$tdatabedah[".googleLikeFields"][] = "id_user";
$tdatabedah[".googleLikeFields"][] = "nomor_rm";



$tdatabedah[".tableType"] = "list";

$tdatabedah[".printerPageOrientation"] = 0;
$tdatabedah[".nPrinterPageScale"] = 100;

$tdatabedah[".nPrinterSplitRecords"] = 40;

$tdatabedah[".geocodingEnabled"] = false;










$tdatabedah[".pageSize"] = 20;

$tdatabedah[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabedah[".strOrderBy"] = $tstrOrderBy;

$tdatabedah[".orderindexes"] = array();


$tdatabedah[".sqlHead"] = "SELECT Id_bedah,  	`Keluhan Utama`,  	`Keluhan Tambahan`,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Pemeriksaan Umum`,  	`Pemeriksaan Fisik`,  	`Foto Klinis`,  	`CT-SCAN`,  	MRI,  	`Patologi Anatomi`,  	`status lokalis`,  	resume,  	Diagnosis,  	`Diagnosis Banding`,  	`Diagnosis Plan`,  	`Terapi Medikamentosa`,  	`Terapi Non Medikamentosa / Operatif`,  	Monitoring,  	Edukasi,  	Prognosis,  	id_pasien,  	id_user,  	nomor_rm";
$tdatabedah[".sqlFrom"] = "FROM bedah";
$tdatabedah[".sqlWhereExpr"] = "";
$tdatabedah[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabedah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabedah[".arrGroupsPerPage"] = $arrGPP;

$tdatabedah[".highlightSearchResults"] = true;

$tableKeysbedah = array();
$tdatabedah[".Keys"] = $tableKeysbedah;


$tdatabedah[".hideMobileList"] = array();




//	Id_bedah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_bedah";
	$fdata["GoodName"] = "Id_bedah";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Id_bedah");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_bedah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_bedah";

	
	
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


	$tdatabedah["Id_bedah"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Id_bedah";
//	Keluhan Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Keluhan_Utama");
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


	$tdatabedah["Keluhan Utama"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Keluhan Utama";
//	Keluhan Tambahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Keluhan Tambahan";
	$fdata["GoodName"] = "Keluhan_Tambahan";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Keluhan_Tambahan");
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


	$tdatabedah["Keluhan Tambahan"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Keluhan Tambahan";
//	Riwayat Penyakit Sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Riwayat Penyakit Sekarang";
	$fdata["GoodName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Riwayat_Penyakit_Sekarang");
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


	$tdatabedah["Riwayat Penyakit Sekarang"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Riwayat Penyakit Sekarang";
//	Riwayat Penyakit Dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Riwayat Penyakit Dahulu";
	$fdata["GoodName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Riwayat_Penyakit_Dahulu");
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


	$tdatabedah["Riwayat Penyakit Dahulu"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Riwayat Penyakit Dahulu";
//	Riwayat Penyakit Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat Penyakit Keluarga";
	$fdata["GoodName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Riwayat_Penyakit_Keluarga");
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


	$tdatabedah["Riwayat Penyakit Keluarga"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Riwayat Penyakit Keluarga";
//	Riwayat Alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat Alergi";
	$fdata["GoodName"] = "Riwayat_Alergi";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Riwayat_Alergi");
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


	$tdatabedah["Riwayat Alergi"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Riwayat Alergi";
//	Riwayat Pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat Pengobatan";
	$fdata["GoodName"] = "Riwayat_Pengobatan";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Riwayat_Pengobatan");
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


	$tdatabedah["Riwayat Pengobatan"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Riwayat Pengobatan";
//	Riwayat Kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat Kebiasaan";
	$fdata["GoodName"] = "Riwayat_Kebiasaan";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Riwayat_Kebiasaan");
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


	$tdatabedah["Riwayat Kebiasaan"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Riwayat Kebiasaan";
//	Pemeriksaan Umum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Pemeriksaan Umum";
	$fdata["GoodName"] = "Pemeriksaan_Umum";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Pemeriksaan_Umum");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pemeriksaan Umum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Pemeriksaan Umum`";

	
	
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


	$tdatabedah["Pemeriksaan Umum"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Pemeriksaan Umum";
//	Pemeriksaan Fisik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Pemeriksaan Fisik";
	$fdata["GoodName"] = "Pemeriksaan_Fisik";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Pemeriksaan_Fisik");
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


	$tdatabedah["Pemeriksaan Fisik"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Pemeriksaan Fisik";
//	Foto Klinis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Foto Klinis";
	$fdata["GoodName"] = "Foto_Klinis";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Foto_Klinis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Foto Klinis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Foto Klinis`";

	
	
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


	$tdatabedah["Foto Klinis"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Foto Klinis";
//	CT-SCAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CT-SCAN";
	$fdata["GoodName"] = "CT_SCAN";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","CT_SCAN");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "CT-SCAN";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`CT-SCAN`";

	
	
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


	$tdatabedah["CT-SCAN"] = $fdata;
		$tdatabedah[".searchableFields"][] = "CT-SCAN";
//	MRI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "MRI";
	$fdata["GoodName"] = "MRI";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","MRI");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "MRI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MRI";

	
	
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


	$tdatabedah["MRI"] = $fdata;
		$tdatabedah[".searchableFields"][] = "MRI";
//	Patologi Anatomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Patologi Anatomi";
	$fdata["GoodName"] = "Patologi_Anatomi";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Patologi_Anatomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Patologi Anatomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Patologi Anatomi`";

	
	
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


	$tdatabedah["Patologi Anatomi"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Patologi Anatomi";
//	status lokalis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "status lokalis";
	$fdata["GoodName"] = "status_lokalis";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","status_lokalis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "status lokalis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status lokalis`";

	
	
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


	$tdatabedah["status lokalis"] = $fdata;
		$tdatabedah[".searchableFields"][] = "status lokalis";
//	resume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "resume";
	$fdata["GoodName"] = "resume";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","resume");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "resume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resume";

	
	
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


	$tdatabedah["resume"] = $fdata;
		$tdatabedah[".searchableFields"][] = "resume";
//	Diagnosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Diagnosis";
	$fdata["GoodName"] = "Diagnosis";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Diagnosis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosis";

	
	
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


	$tdatabedah["Diagnosis"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Diagnosis";
//	Diagnosis Banding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Diagnosis Banding";
	$fdata["GoodName"] = "Diagnosis_Banding";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Diagnosis_Banding");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosis Banding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Diagnosis Banding`";

	
	
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


	$tdatabedah["Diagnosis Banding"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Diagnosis Banding";
//	Diagnosis Plan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Diagnosis Plan";
	$fdata["GoodName"] = "Diagnosis_Plan";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Diagnosis_Plan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosis Plan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Diagnosis Plan`";

	
	
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


	$tdatabedah["Diagnosis Plan"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Diagnosis Plan";
//	Terapi Medikamentosa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Terapi Medikamentosa";
	$fdata["GoodName"] = "Terapi_Medikamentosa";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Terapi_Medikamentosa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Terapi Medikamentosa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Terapi Medikamentosa`";

	
	
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


	$tdatabedah["Terapi Medikamentosa"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Terapi Medikamentosa";
//	Terapi Non Medikamentosa / Operatif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Terapi Non Medikamentosa / Operatif";
	$fdata["GoodName"] = "Terapi_Non_Medikamentosa___Operatif";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Terapi_Non_Medikamentosa___Operatif");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Terapi Non Medikamentosa / Operatif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Terapi Non Medikamentosa / Operatif`";

	
	
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


	$tdatabedah["Terapi Non Medikamentosa / Operatif"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Terapi Non Medikamentosa / Operatif";
//	Monitoring
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Monitoring";
	$fdata["GoodName"] = "Monitoring";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Monitoring");
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


	$tdatabedah["Monitoring"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Monitoring";
//	Edukasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Edukasi";
	$fdata["GoodName"] = "Edukasi";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Edukasi");
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


	$tdatabedah["Edukasi"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Edukasi";
//	Prognosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Prognosis";
	$fdata["GoodName"] = "Prognosis";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","Prognosis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Prognosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prognosis";

	
	
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


	$tdatabedah["Prognosis"] = $fdata;
		$tdatabedah[".searchableFields"][] = "Prognosis";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","id_pasien");
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


	$tdatabedah["id_pasien"] = $fdata;
		$tdatabedah[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","id_user");
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


	$tdatabedah["id_user"] = $fdata;
		$tdatabedah[".searchableFields"][] = "id_user";
//	nomor_rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "nomor_rm";
	$fdata["GoodName"] = "nomor_rm";
	$fdata["ownerTable"] = "bedah";
	$fdata["Label"] = GetFieldLabel("bedah","nomor_rm");
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


	$tdatabedah["nomor_rm"] = $fdata;
		$tdatabedah[".searchableFields"][] = "nomor_rm";


$tables_data["bedah"]=&$tdatabedah;
$field_labels["bedah"] = &$fieldLabelsbedah;
$fieldToolTips["bedah"] = &$fieldToolTipsbedah;
$placeHolders["bedah"] = &$placeHoldersbedah;
$page_titles["bedah"] = &$pageTitlesbedah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["bedah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["bedah"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bedah"][0] = $masterParams;
				$masterTablesData["bedah"][0]["masterKeys"] = array();
	$masterTablesData["bedah"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["bedah"][0]["detailKeys"] = array();
	$masterTablesData["bedah"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["bedah"][1] = $masterParams;
				$masterTablesData["bedah"][1]["masterKeys"] = array();
	$masterTablesData["bedah"][1]["masterKeys"][]="id";
				$masterTablesData["bedah"][1]["detailKeys"] = array();
	$masterTablesData["bedah"][1]["detailKeys"][]="id_user";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bedah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_bedah,  	`Keluhan Utama`,  	`Keluhan Tambahan`,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Pemeriksaan Umum`,  	`Pemeriksaan Fisik`,  	`Foto Klinis`,  	`CT-SCAN`,  	MRI,  	`Patologi Anatomi`,  	`status lokalis`,  	resume,  	Diagnosis,  	`Diagnosis Banding`,  	`Diagnosis Plan`,  	`Terapi Medikamentosa`,  	`Terapi Non Medikamentosa / Operatif`,  	Monitoring,  	Edukasi,  	Prognosis,  	id_pasien,  	id_user,  	nomor_rm";
$proto0["m_strFrom"] = "FROM bedah";
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
	"m_strName" => "Id_bedah",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto6["m_sql"] = "Id_bedah";
$proto6["m_srcTableName"] = "bedah";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan Utama",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto8["m_sql"] = "`Keluhan Utama`";
$proto8["m_srcTableName"] = "bedah";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan Tambahan",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto10["m_sql"] = "`Keluhan Tambahan`";
$proto10["m_srcTableName"] = "bedah";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Sekarang",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto12["m_sql"] = "`Riwayat Penyakit Sekarang`";
$proto12["m_srcTableName"] = "bedah";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Dahulu",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto14["m_sql"] = "`Riwayat Penyakit Dahulu`";
$proto14["m_srcTableName"] = "bedah";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Keluarga",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto16["m_sql"] = "`Riwayat Penyakit Keluarga`";
$proto16["m_srcTableName"] = "bedah";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Alergi",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto18["m_sql"] = "`Riwayat Alergi`";
$proto18["m_srcTableName"] = "bedah";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Pengobatan",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto20["m_sql"] = "`Riwayat Pengobatan`";
$proto20["m_srcTableName"] = "bedah";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Kebiasaan",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto22["m_sql"] = "`Riwayat Kebiasaan`";
$proto22["m_srcTableName"] = "bedah";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Pemeriksaan Umum",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto24["m_sql"] = "`Pemeriksaan Umum`";
$proto24["m_srcTableName"] = "bedah";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Pemeriksaan Fisik",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto26["m_sql"] = "`Pemeriksaan Fisik`";
$proto26["m_srcTableName"] = "bedah";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto Klinis",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto28["m_sql"] = "`Foto Klinis`";
$proto28["m_srcTableName"] = "bedah";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CT-SCAN",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto30["m_sql"] = "`CT-SCAN`";
$proto30["m_srcTableName"] = "bedah";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "MRI",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto32["m_sql"] = "MRI";
$proto32["m_srcTableName"] = "bedah";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Patologi Anatomi",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto34["m_sql"] = "`Patologi Anatomi`";
$proto34["m_srcTableName"] = "bedah";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "status lokalis",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto36["m_sql"] = "`status lokalis`";
$proto36["m_srcTableName"] = "bedah";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "resume",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto38["m_sql"] = "resume";
$proto38["m_srcTableName"] = "bedah";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosis",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto40["m_sql"] = "Diagnosis";
$proto40["m_srcTableName"] = "bedah";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosis Banding",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto42["m_sql"] = "`Diagnosis Banding`";
$proto42["m_srcTableName"] = "bedah";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosis Plan",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto44["m_sql"] = "`Diagnosis Plan`";
$proto44["m_srcTableName"] = "bedah";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Terapi Medikamentosa",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto46["m_sql"] = "`Terapi Medikamentosa`";
$proto46["m_srcTableName"] = "bedah";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Terapi Non Medikamentosa / Operatif",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto48["m_sql"] = "`Terapi Non Medikamentosa / Operatif`";
$proto48["m_srcTableName"] = "bedah";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Monitoring",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto50["m_sql"] = "Monitoring";
$proto50["m_srcTableName"] = "bedah";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Edukasi",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto52["m_sql"] = "Edukasi";
$proto52["m_srcTableName"] = "bedah";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Prognosis",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto54["m_sql"] = "Prognosis";
$proto54["m_srcTableName"] = "bedah";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto56["m_sql"] = "id_pasien";
$proto56["m_srcTableName"] = "bedah";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto58["m_sql"] = "id_user";
$proto58["m_srcTableName"] = "bedah";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor_rm",
	"m_strTable" => "bedah",
	"m_srcTableName" => "bedah"
));

$proto60["m_sql"] = "nomor_rm";
$proto60["m_srcTableName"] = "bedah";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "bedah";
$proto63["m_srcTableName"] = "bedah";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "Id_bedah";
$proto63["m_columns"][] = "Keluhan Utama";
$proto63["m_columns"][] = "Keluhan Tambahan";
$proto63["m_columns"][] = "Riwayat Penyakit Sekarang";
$proto63["m_columns"][] = "Riwayat Penyakit Dahulu";
$proto63["m_columns"][] = "Riwayat Penyakit Keluarga";
$proto63["m_columns"][] = "Riwayat Alergi";
$proto63["m_columns"][] = "Riwayat Pengobatan";
$proto63["m_columns"][] = "Riwayat Kebiasaan";
$proto63["m_columns"][] = "Pemeriksaan Umum";
$proto63["m_columns"][] = "Pemeriksaan Fisik";
$proto63["m_columns"][] = "Foto Klinis";
$proto63["m_columns"][] = "CT-SCAN";
$proto63["m_columns"][] = "MRI";
$proto63["m_columns"][] = "Patologi Anatomi";
$proto63["m_columns"][] = "status lokalis";
$proto63["m_columns"][] = "resume";
$proto63["m_columns"][] = "Diagnosis";
$proto63["m_columns"][] = "Diagnosis Banding";
$proto63["m_columns"][] = "Diagnosis Plan";
$proto63["m_columns"][] = "Terapi Medikamentosa";
$proto63["m_columns"][] = "Terapi Non Medikamentosa / Operatif";
$proto63["m_columns"][] = "Monitoring";
$proto63["m_columns"][] = "Edukasi";
$proto63["m_columns"][] = "Prognosis";
$proto63["m_columns"][] = "id_pasien";
$proto63["m_columns"][] = "id_user";
$proto63["m_columns"][] = "nomor_rm";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "bedah";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "bedah";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="bedah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bedah = createSqlQuery_bedah();


	
		;

																												

$tdatabedah[".sqlquery"] = $queryData_bedah;



$tableEvents["bedah"] = new eventsBase;
$tdatabedah[".hasEvents"] = false;

?>