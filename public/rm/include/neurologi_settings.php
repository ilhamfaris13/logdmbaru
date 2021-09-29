<?php
$tdataneurologi = array();
$tdataneurologi[".searchableFields"] = array();
$tdataneurologi[".ShortName"] = "neurologi";
$tdataneurologi[".OwnerID"] = "";
$tdataneurologi[".OriginalTable"] = "neurologi";


$tdataneurologi[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataneurologi[".originalPagesByType"] = $tdataneurologi[".pagesByType"];
$tdataneurologi[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataneurologi[".originalPages"] = $tdataneurologi[".pages"];
$tdataneurologi[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataneurologi[".originalDefaultPages"] = $tdataneurologi[".defaultPages"];

//	field labels
$fieldLabelsneurologi = array();
$fieldToolTipsneurologi = array();
$pageTitlesneurologi = array();
$placeHoldersneurologi = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsneurologi["English"] = array();
	$fieldToolTipsneurologi["English"] = array();
	$placeHoldersneurologi["English"] = array();
	$pageTitlesneurologi["English"] = array();
	$fieldLabelsneurologi["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipsneurologi["English"]["Keluhan_Utama"] = "";
	$placeHoldersneurologi["English"]["Keluhan_Utama"] = "";
	$fieldLabelsneurologi["English"]["Keluhan_Tambahan"] = "Keluhan Tambahan";
	$fieldToolTipsneurologi["English"]["Keluhan_Tambahan"] = "";
	$placeHoldersneurologi["English"]["Keluhan_Tambahan"] = "";
	$fieldLabelsneurologi["English"]["Riwayat_Penyakit_Sekarang"] = "Riwayat Penyakit Sekarang";
	$fieldToolTipsneurologi["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$placeHoldersneurologi["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$fieldLabelsneurologi["English"]["Riwayat_Penyakit_Dahulu"] = "Riwayat Penyakit Dahulu";
	$fieldToolTipsneurologi["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$placeHoldersneurologi["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$fieldLabelsneurologi["English"]["Riwayat_Penyakit_Keluarga"] = "Riwayat Penyakit Keluarga";
	$fieldToolTipsneurologi["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$placeHoldersneurologi["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$fieldLabelsneurologi["English"]["Riwayat_Alergi"] = "Riwayat Alergi";
	$fieldToolTipsneurologi["English"]["Riwayat_Alergi"] = "";
	$placeHoldersneurologi["English"]["Riwayat_Alergi"] = "";
	$fieldLabelsneurologi["English"]["Riwayat_Pengobatan"] = "Riwayat Pengobatan";
	$fieldToolTipsneurologi["English"]["Riwayat_Pengobatan"] = "";
	$placeHoldersneurologi["English"]["Riwayat_Pengobatan"] = "";
	$fieldLabelsneurologi["English"]["Riwayat_Kebiasaan"] = "Riwayat Kebiasaan";
	$fieldToolTipsneurologi["English"]["Riwayat_Kebiasaan"] = "";
	$placeHoldersneurologi["English"]["Riwayat_Kebiasaan"] = "";
	$fieldLabelsneurologi["English"]["Riwayat_Psiko_Sosial_Ekonomi"] = "Riwayat Psiko Sosial Ekonomi";
	$fieldToolTipsneurologi["English"]["Riwayat_Psiko_Sosial_Ekonomi"] = "";
	$placeHoldersneurologi["English"]["Riwayat_Psiko_Sosial_Ekonomi"] = "";
	$fieldLabelsneurologi["English"]["Pemeriksaan_Fisik"] = "Pemeriksaan Fisik";
	$fieldToolTipsneurologi["English"]["Pemeriksaan_Fisik"] = "";
	$placeHoldersneurologi["English"]["Pemeriksaan_Fisik"] = "";
	$fieldLabelsneurologi["English"]["Status_Psikiatri_Singkat"] = "Status Psikiatri Singkat";
	$fieldToolTipsneurologi["English"]["Status_Psikiatri_Singkat"] = "";
	$placeHoldersneurologi["English"]["Status_Psikiatri_Singkat"] = "";
	$fieldLabelsneurologi["English"]["Status_Neurologis"] = "Status Neurologis";
	$fieldToolTipsneurologi["English"]["Status_Neurologis"] = "";
	$placeHoldersneurologi["English"]["Status_Neurologis"] = "";
	$fieldLabelsneurologi["English"]["PEMERIKSAAN_KHUSUS"] = "PEMERIKSAAN KHUSUS";
	$fieldToolTipsneurologi["English"]["PEMERIKSAAN_KHUSUS"] = "";
	$placeHoldersneurologi["English"]["PEMERIKSAAN_KHUSUS"] = "";
	$fieldLabelsneurologi["English"]["Pemeriksaan_Penunjang"] = "Pemeriksaan Penunjang";
	$fieldToolTipsneurologi["English"]["Pemeriksaan_Penunjang"] = "";
	$placeHoldersneurologi["English"]["Pemeriksaan_Penunjang"] = "";
	$fieldLabelsneurologi["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsneurologi["English"]["id_pasien"] = "";
	$placeHoldersneurologi["English"]["id_pasien"] = "";
	$fieldLabelsneurologi["English"]["id_user"] = "Id User";
	$fieldToolTipsneurologi["English"]["id_user"] = "";
	$placeHoldersneurologi["English"]["id_user"] = "";
	$fieldLabelsneurologi["English"]["nomor_rm"] = "Nomor Rm";
	$fieldToolTipsneurologi["English"]["nomor_rm"] = "";
	$placeHoldersneurologi["English"]["nomor_rm"] = "";
	$fieldLabelsneurologi["English"]["id_neuro"] = "Id Neuro";
	$fieldToolTipsneurologi["English"]["id_neuro"] = "";
	$placeHoldersneurologi["English"]["id_neuro"] = "";
	if (count($fieldToolTipsneurologi["English"]))
		$tdataneurologi[".isUseToolTips"] = true;
}


	$tdataneurologi[".NCSearch"] = true;



$tdataneurologi[".shortTableName"] = "neurologi";
$tdataneurologi[".nSecOptions"] = 0;

$tdataneurologi[".mainTableOwnerID"] = "";
$tdataneurologi[".entityType"] = 0;
$tdataneurologi[".connId"] = "newrm_at_localhost";


$tdataneurologi[".strOriginalTableName"] = "neurologi";

	



$tdataneurologi[".showAddInPopup"] = false;

$tdataneurologi[".showEditInPopup"] = false;

$tdataneurologi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataneurologi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataneurologi[".listAjax"] = false;
//	temporary
$tdataneurologi[".listAjax"] = false;

	$tdataneurologi[".audit"] = false;

	$tdataneurologi[".locking"] = false;


$pages = $tdataneurologi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataneurologi[".edit"] = true;
	$tdataneurologi[".afterEditAction"] = 1;
	$tdataneurologi[".closePopupAfterEdit"] = 1;
	$tdataneurologi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataneurologi[".add"] = true;
$tdataneurologi[".afterAddAction"] = 1;
$tdataneurologi[".closePopupAfterAdd"] = 1;
$tdataneurologi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataneurologi[".list"] = true;
}



$tdataneurologi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataneurologi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataneurologi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataneurologi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataneurologi[".printFriendly"] = true;
}



$tdataneurologi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataneurologi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataneurologi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataneurologi[".isUseAjaxSuggest"] = true;

$tdataneurologi[".rowHighlite"] = true;





$tdataneurologi[".ajaxCodeSnippetAdded"] = false;

$tdataneurologi[".buttonsAdded"] = false;

$tdataneurologi[".addPageEvents"] = false;

// use timepicker for search panel
$tdataneurologi[".isUseTimeForSearch"] = false;


$tdataneurologi[".badgeColor"] = "3cb371";


$tdataneurologi[".allSearchFields"] = array();
$tdataneurologi[".filterFields"] = array();
$tdataneurologi[".requiredSearchFields"] = array();

$tdataneurologi[".googleLikeFields"] = array();
$tdataneurologi[".googleLikeFields"][] = "id_neuro";
$tdataneurologi[".googleLikeFields"][] = "Keluhan Utama";
$tdataneurologi[".googleLikeFields"][] = "Keluhan Tambahan";
$tdataneurologi[".googleLikeFields"][] = "Riwayat Penyakit Sekarang";
$tdataneurologi[".googleLikeFields"][] = "Riwayat Penyakit Dahulu";
$tdataneurologi[".googleLikeFields"][] = "Riwayat Penyakit Keluarga";
$tdataneurologi[".googleLikeFields"][] = "Riwayat Alergi";
$tdataneurologi[".googleLikeFields"][] = "Riwayat Pengobatan";
$tdataneurologi[".googleLikeFields"][] = "Riwayat Kebiasaan";
$tdataneurologi[".googleLikeFields"][] = "Riwayat Psiko Sosial Ekonomi";
$tdataneurologi[".googleLikeFields"][] = "Pemeriksaan Fisik";
$tdataneurologi[".googleLikeFields"][] = "Status Psikiatri Singkat";
$tdataneurologi[".googleLikeFields"][] = "Status Neurologis";
$tdataneurologi[".googleLikeFields"][] = "PEMERIKSAAN KHUSUS";
$tdataneurologi[".googleLikeFields"][] = "Pemeriksaan Penunjang";
$tdataneurologi[".googleLikeFields"][] = "id_pasien";
$tdataneurologi[".googleLikeFields"][] = "id_user";
$tdataneurologi[".googleLikeFields"][] = "nomor_rm";



$tdataneurologi[".tableType"] = "list";

$tdataneurologi[".printerPageOrientation"] = 0;
$tdataneurologi[".nPrinterPageScale"] = 100;

$tdataneurologi[".nPrinterSplitRecords"] = 40;

$tdataneurologi[".geocodingEnabled"] = false;










$tdataneurologi[".pageSize"] = 20;

$tdataneurologi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataneurologi[".strOrderBy"] = $tstrOrderBy;

$tdataneurologi[".orderindexes"] = array();


$tdataneurologi[".sqlHead"] = "SELECT id_neuro,  	`Keluhan Utama`,  	`Keluhan Tambahan`,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Riwayat Psiko Sosial Ekonomi`,  	`Pemeriksaan Fisik`,  	`Status Psikiatri Singkat`,  	`Status Neurologis`,  	`PEMERIKSAAN KHUSUS`,  	`Pemeriksaan Penunjang`,  	id_pasien,  	id_user,  	nomor_rm";
$tdataneurologi[".sqlFrom"] = "FROM neurologi";
$tdataneurologi[".sqlWhereExpr"] = "";
$tdataneurologi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataneurologi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataneurologi[".arrGroupsPerPage"] = $arrGPP;

$tdataneurologi[".highlightSearchResults"] = true;

$tableKeysneurologi = array();
$tdataneurologi[".Keys"] = $tableKeysneurologi;


$tdataneurologi[".hideMobileList"] = array();




//	id_neuro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_neuro";
	$fdata["GoodName"] = "id_neuro";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","id_neuro");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_neuro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_neuro";

	
	
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


	$tdataneurologi["id_neuro"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "id_neuro";
//	Keluhan Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Keluhan_Utama");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keluhan Utama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Keluhan Utama`";

	
	
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


	$tdataneurologi["Keluhan Utama"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Keluhan Utama";
//	Keluhan Tambahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Keluhan Tambahan";
	$fdata["GoodName"] = "Keluhan_Tambahan";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Keluhan_Tambahan");
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


	$tdataneurologi["Keluhan Tambahan"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Keluhan Tambahan";
//	Riwayat Penyakit Sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Riwayat Penyakit Sekarang";
	$fdata["GoodName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Riwayat_Penyakit_Sekarang");
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


	$tdataneurologi["Riwayat Penyakit Sekarang"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Riwayat Penyakit Sekarang";
//	Riwayat Penyakit Dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Riwayat Penyakit Dahulu";
	$fdata["GoodName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Riwayat_Penyakit_Dahulu");
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


	$tdataneurologi["Riwayat Penyakit Dahulu"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Riwayat Penyakit Dahulu";
//	Riwayat Penyakit Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat Penyakit Keluarga";
	$fdata["GoodName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Riwayat_Penyakit_Keluarga");
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


	$tdataneurologi["Riwayat Penyakit Keluarga"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Riwayat Penyakit Keluarga";
//	Riwayat Alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat Alergi";
	$fdata["GoodName"] = "Riwayat_Alergi";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Riwayat_Alergi");
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


	$tdataneurologi["Riwayat Alergi"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Riwayat Alergi";
//	Riwayat Pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat Pengobatan";
	$fdata["GoodName"] = "Riwayat_Pengobatan";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Riwayat_Pengobatan");
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


	$tdataneurologi["Riwayat Pengobatan"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Riwayat Pengobatan";
//	Riwayat Kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat Kebiasaan";
	$fdata["GoodName"] = "Riwayat_Kebiasaan";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Riwayat_Kebiasaan");
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


	$tdataneurologi["Riwayat Kebiasaan"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Riwayat Kebiasaan";
//	Riwayat Psiko Sosial Ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat Psiko Sosial Ekonomi";
	$fdata["GoodName"] = "Riwayat_Psiko_Sosial_Ekonomi";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Riwayat_Psiko_Sosial_Ekonomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Psiko Sosial Ekonomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Psiko Sosial Ekonomi`";

	
	
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


	$tdataneurologi["Riwayat Psiko Sosial Ekonomi"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Riwayat Psiko Sosial Ekonomi";
//	Pemeriksaan Fisik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Pemeriksaan Fisik";
	$fdata["GoodName"] = "Pemeriksaan_Fisik";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Pemeriksaan_Fisik");
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


	$tdataneurologi["Pemeriksaan Fisik"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Pemeriksaan Fisik";
//	Status Psikiatri Singkat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Status Psikiatri Singkat";
	$fdata["GoodName"] = "Status_Psikiatri_Singkat";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Status_Psikiatri_Singkat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Status Psikiatri Singkat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Status Psikiatri Singkat`";

	
	
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


	$tdataneurologi["Status Psikiatri Singkat"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Status Psikiatri Singkat";
//	Status Neurologis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Status Neurologis";
	$fdata["GoodName"] = "Status_Neurologis";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Status_Neurologis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Status Neurologis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Status Neurologis`";

	
	
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


	$tdataneurologi["Status Neurologis"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Status Neurologis";
//	PEMERIKSAAN KHUSUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PEMERIKSAAN KHUSUS";
	$fdata["GoodName"] = "PEMERIKSAAN_KHUSUS";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","PEMERIKSAAN_KHUSUS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PEMERIKSAAN KHUSUS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`PEMERIKSAAN KHUSUS`";

	
	
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


	$tdataneurologi["PEMERIKSAAN KHUSUS"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "PEMERIKSAAN KHUSUS";
//	Pemeriksaan Penunjang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Pemeriksaan Penunjang";
	$fdata["GoodName"] = "Pemeriksaan_Penunjang";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","Pemeriksaan_Penunjang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pemeriksaan Penunjang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Pemeriksaan Penunjang`";

	
	
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


	$tdataneurologi["Pemeriksaan Penunjang"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "Pemeriksaan Penunjang";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","id_pasien");
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


	$tdataneurologi["id_pasien"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","id_user");
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


	$tdataneurologi["id_user"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "id_user";
//	nomor_rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nomor_rm";
	$fdata["GoodName"] = "nomor_rm";
	$fdata["ownerTable"] = "neurologi";
	$fdata["Label"] = GetFieldLabel("neurologi","nomor_rm");
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


	$tdataneurologi["nomor_rm"] = $fdata;
		$tdataneurologi[".searchableFields"][] = "nomor_rm";


$tables_data["neurologi"]=&$tdataneurologi;
$field_labels["neurologi"] = &$fieldLabelsneurologi;
$fieldToolTips["neurologi"] = &$fieldToolTipsneurologi;
$placeHolders["neurologi"] = &$placeHoldersneurologi;
$page_titles["neurologi"] = &$pageTitlesneurologi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["neurologi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["neurologi"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["neurologi"][0] = $masterParams;
				$masterTablesData["neurologi"][0]["masterKeys"] = array();
	$masterTablesData["neurologi"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["neurologi"][0]["detailKeys"] = array();
	$masterTablesData["neurologi"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["neurologi"][1] = $masterParams;
				$masterTablesData["neurologi"][1]["masterKeys"] = array();
	$masterTablesData["neurologi"][1]["masterKeys"][]="id";
				$masterTablesData["neurologi"][1]["detailKeys"] = array();
	$masterTablesData["neurologi"][1]["detailKeys"][]="id_user";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_neurologi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_neuro,  	`Keluhan Utama`,  	`Keluhan Tambahan`,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Riwayat Psiko Sosial Ekonomi`,  	`Pemeriksaan Fisik`,  	`Status Psikiatri Singkat`,  	`Status Neurologis`,  	`PEMERIKSAAN KHUSUS`,  	`Pemeriksaan Penunjang`,  	id_pasien,  	id_user,  	nomor_rm";
$proto0["m_strFrom"] = "FROM neurologi";
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
	"m_strName" => "id_neuro",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto6["m_sql"] = "id_neuro";
$proto6["m_srcTableName"] = "neurologi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan Utama",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto8["m_sql"] = "`Keluhan Utama`";
$proto8["m_srcTableName"] = "neurologi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan Tambahan",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto10["m_sql"] = "`Keluhan Tambahan`";
$proto10["m_srcTableName"] = "neurologi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Sekarang",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto12["m_sql"] = "`Riwayat Penyakit Sekarang`";
$proto12["m_srcTableName"] = "neurologi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Dahulu",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto14["m_sql"] = "`Riwayat Penyakit Dahulu`";
$proto14["m_srcTableName"] = "neurologi";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Keluarga",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto16["m_sql"] = "`Riwayat Penyakit Keluarga`";
$proto16["m_srcTableName"] = "neurologi";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Alergi",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto18["m_sql"] = "`Riwayat Alergi`";
$proto18["m_srcTableName"] = "neurologi";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Pengobatan",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto20["m_sql"] = "`Riwayat Pengobatan`";
$proto20["m_srcTableName"] = "neurologi";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Kebiasaan",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto22["m_sql"] = "`Riwayat Kebiasaan`";
$proto22["m_srcTableName"] = "neurologi";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Psiko Sosial Ekonomi",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto24["m_sql"] = "`Riwayat Psiko Sosial Ekonomi`";
$proto24["m_srcTableName"] = "neurologi";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Pemeriksaan Fisik",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto26["m_sql"] = "`Pemeriksaan Fisik`";
$proto26["m_srcTableName"] = "neurologi";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Status Psikiatri Singkat",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto28["m_sql"] = "`Status Psikiatri Singkat`";
$proto28["m_srcTableName"] = "neurologi";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Status Neurologis",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto30["m_sql"] = "`Status Neurologis`";
$proto30["m_srcTableName"] = "neurologi";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PEMERIKSAAN KHUSUS",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto32["m_sql"] = "`PEMERIKSAAN KHUSUS`";
$proto32["m_srcTableName"] = "neurologi";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Pemeriksaan Penunjang",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto34["m_sql"] = "`Pemeriksaan Penunjang`";
$proto34["m_srcTableName"] = "neurologi";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto36["m_sql"] = "id_pasien";
$proto36["m_srcTableName"] = "neurologi";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto38["m_sql"] = "id_user";
$proto38["m_srcTableName"] = "neurologi";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor_rm",
	"m_strTable" => "neurologi",
	"m_srcTableName" => "neurologi"
));

$proto40["m_sql"] = "nomor_rm";
$proto40["m_srcTableName"] = "neurologi";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "neurologi";
$proto43["m_srcTableName"] = "neurologi";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id_neuro";
$proto43["m_columns"][] = "Keluhan Utama";
$proto43["m_columns"][] = "Keluhan Tambahan";
$proto43["m_columns"][] = "Riwayat Penyakit Sekarang";
$proto43["m_columns"][] = "Riwayat Penyakit Dahulu";
$proto43["m_columns"][] = "Riwayat Penyakit Keluarga";
$proto43["m_columns"][] = "Riwayat Alergi";
$proto43["m_columns"][] = "Riwayat Pengobatan";
$proto43["m_columns"][] = "Riwayat Kebiasaan";
$proto43["m_columns"][] = "Riwayat Psiko Sosial Ekonomi";
$proto43["m_columns"][] = "Pemeriksaan Fisik";
$proto43["m_columns"][] = "Status Psikiatri Singkat";
$proto43["m_columns"][] = "Status Neurologis";
$proto43["m_columns"][] = "PEMERIKSAAN KHUSUS";
$proto43["m_columns"][] = "Pemeriksaan Penunjang";
$proto43["m_columns"][] = "id_pasien";
$proto43["m_columns"][] = "id_user";
$proto43["m_columns"][] = "nomor_rm";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "neurologi";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "neurologi";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="neurologi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_neurologi = createSqlQuery_neurologi();


	
		;

																		

$tdataneurologi[".sqlquery"] = $queryData_neurologi;



$tableEvents["neurologi"] = new eventsBase;
$tdataneurologi[".hasEvents"] = false;

?>