<?php
$tdataobstetri = array();
$tdataobstetri[".searchableFields"] = array();
$tdataobstetri[".ShortName"] = "obstetri";
$tdataobstetri[".OwnerID"] = "";
$tdataobstetri[".OriginalTable"] = "obstetri";


$tdataobstetri[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataobstetri[".originalPagesByType"] = $tdataobstetri[".pagesByType"];
$tdataobstetri[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataobstetri[".originalPages"] = $tdataobstetri[".pages"];
$tdataobstetri[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataobstetri[".originalDefaultPages"] = $tdataobstetri[".defaultPages"];

//	field labels
$fieldLabelsobstetri = array();
$fieldToolTipsobstetri = array();
$pageTitlesobstetri = array();
$placeHoldersobstetri = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsobstetri["English"] = array();
	$fieldToolTipsobstetri["English"] = array();
	$placeHoldersobstetri["English"] = array();
	$pageTitlesobstetri["English"] = array();
	$fieldLabelsobstetri["English"]["ANAMNESIS"] = "ANAMNESIS";
	$fieldToolTipsobstetri["English"]["ANAMNESIS"] = "";
	$placeHoldersobstetri["English"]["ANAMNESIS"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Penyakit_Sekarang"] = "Riwayat Penyakit Sekarang";
	$fieldToolTipsobstetri["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Penyakit_Dahulu"] = "Riwayat Penyakit Dahulu";
	$fieldToolTipsobstetri["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Penyakit_Keluarga"] = "Riwayat Penyakit Keluarga";
	$fieldToolTipsobstetri["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Alergi"] = "Riwayat Alergi";
	$fieldToolTipsobstetri["English"]["Riwayat_Alergi"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Alergi"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Pengobatan"] = "Riwayat Pengobatan";
	$fieldToolTipsobstetri["English"]["Riwayat_Pengobatan"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Pengobatan"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Kebiasaan"] = "Riwayat Kebiasaan";
	$fieldToolTipsobstetri["English"]["Riwayat_Kebiasaan"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Kebiasaan"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_haid"] = "Riwayat Haid";
	$fieldToolTipsobstetri["English"]["Riwayat_haid"] = "";
	$placeHoldersobstetri["English"]["Riwayat_haid"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_pernikahan"] = "Riwayat Pernikahan";
	$fieldToolTipsobstetri["English"]["Riwayat_pernikahan"] = "";
	$placeHoldersobstetri["English"]["Riwayat_pernikahan"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Sosial_Ekonomi"] = "Riwayat Sosial Ekonomi";
	$fieldToolTipsobstetri["English"]["Riwayat_Sosial_Ekonomi"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Sosial_Ekonomi"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_persalinan"] = "Riwayat Persalinan";
	$fieldToolTipsobstetri["English"]["Riwayat_persalinan"] = "";
	$placeHoldersobstetri["English"]["Riwayat_persalinan"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_menyusui"] = "Riwayat Menyusui";
	$fieldToolTipsobstetri["English"]["Riwayat_menyusui"] = "";
	$placeHoldersobstetri["English"]["Riwayat_menyusui"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_imunisasi"] = "Riwayat Imunisasi";
	$fieldToolTipsobstetri["English"]["Riwayat_imunisasi"] = "";
	$placeHoldersobstetri["English"]["Riwayat_imunisasi"] = "";
	$fieldLabelsobstetri["English"]["Riwayat_Keluarga_Berencana"] = "Riwayat Keluarga Berencana";
	$fieldToolTipsobstetri["English"]["Riwayat_Keluarga_Berencana"] = "";
	$placeHoldersobstetri["English"]["Riwayat_Keluarga_Berencana"] = "";
	$fieldLabelsobstetri["English"]["PEMERIKSAA_FISIK__UMUM"] = "PEMERIKSAA FISIK  UMUM";
	$fieldToolTipsobstetri["English"]["PEMERIKSAA_FISIK__UMUM"] = "";
	$placeHoldersobstetri["English"]["PEMERIKSAA_FISIK__UMUM"] = "";
	$fieldLabelsobstetri["English"]["PEMERIKSAAN__OBSTETRI_GINEKOLOGI"] = "PEMERIKSAAN  OBSTETRI/GINEKOLOGI";
	$fieldToolTipsobstetri["English"]["PEMERIKSAAN__OBSTETRI_GINEKOLOGI"] = "";
	$placeHoldersobstetri["English"]["PEMERIKSAAN__OBSTETRI_GINEKOLOGI"] = "";
	$fieldLabelsobstetri["English"]["PEMERIKSAAN_PENUNJANG"] = "PEMERIKSAAN PENUNJANG";
	$fieldToolTipsobstetri["English"]["PEMERIKSAAN_PENUNJANG"] = "";
	$placeHoldersobstetri["English"]["PEMERIKSAAN_PENUNJANG"] = "";
	$fieldLabelsobstetri["English"]["DIAGNOSIS"] = "DIAGNOSIS";
	$fieldToolTipsobstetri["English"]["DIAGNOSIS"] = "";
	$placeHoldersobstetri["English"]["DIAGNOSIS"] = "";
	$fieldLabelsobstetri["English"]["RENCANA_TATALAKSANA__USULAN_PEMERIKSAAN"] = "RENCANA TATALAKSANA/ USULAN PEMERIKSAAN";
	$fieldToolTipsobstetri["English"]["RENCANA_TATALAKSANA__USULAN_PEMERIKSAAN"] = "";
	$placeHoldersobstetri["English"]["RENCANA_TATALAKSANA__USULAN_PEMERIKSAAN"] = "";
	$fieldLabelsobstetri["English"]["KONSELING"] = "KONSELING";
	$fieldToolTipsobstetri["English"]["KONSELING"] = "";
	$placeHoldersobstetri["English"]["KONSELING"] = "";
	$fieldLabelsobstetri["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsobstetri["English"]["id_pasien"] = "";
	$placeHoldersobstetri["English"]["id_pasien"] = "";
	$fieldLabelsobstetri["English"]["id_user"] = "Id User";
	$fieldToolTipsobstetri["English"]["id_user"] = "";
	$placeHoldersobstetri["English"]["id_user"] = "";
	$fieldLabelsobstetri["English"]["nomor_rm"] = "Nomor Rm";
	$fieldToolTipsobstetri["English"]["nomor_rm"] = "";
	$placeHoldersobstetri["English"]["nomor_rm"] = "";
	$fieldLabelsobstetri["English"]["Id_obstetri"] = "Id Obstetri";
	$fieldToolTipsobstetri["English"]["Id_obstetri"] = "";
	$placeHoldersobstetri["English"]["Id_obstetri"] = "";
	if (count($fieldToolTipsobstetri["English"]))
		$tdataobstetri[".isUseToolTips"] = true;
}


	$tdataobstetri[".NCSearch"] = true;



$tdataobstetri[".shortTableName"] = "obstetri";
$tdataobstetri[".nSecOptions"] = 0;

$tdataobstetri[".mainTableOwnerID"] = "";
$tdataobstetri[".entityType"] = 0;
$tdataobstetri[".connId"] = "newrm_at_localhost";


$tdataobstetri[".strOriginalTableName"] = "obstetri";

	



$tdataobstetri[".showAddInPopup"] = false;

$tdataobstetri[".showEditInPopup"] = false;

$tdataobstetri[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataobstetri[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataobstetri[".listAjax"] = false;
//	temporary
$tdataobstetri[".listAjax"] = false;

	$tdataobstetri[".audit"] = false;

	$tdataobstetri[".locking"] = false;


$pages = $tdataobstetri[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataobstetri[".edit"] = true;
	$tdataobstetri[".afterEditAction"] = 1;
	$tdataobstetri[".closePopupAfterEdit"] = 1;
	$tdataobstetri[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataobstetri[".add"] = true;
$tdataobstetri[".afterAddAction"] = 1;
$tdataobstetri[".closePopupAfterAdd"] = 1;
$tdataobstetri[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataobstetri[".list"] = true;
}



$tdataobstetri[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataobstetri[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataobstetri[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataobstetri[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataobstetri[".printFriendly"] = true;
}



$tdataobstetri[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataobstetri[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataobstetri[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataobstetri[".isUseAjaxSuggest"] = true;

$tdataobstetri[".rowHighlite"] = true;





$tdataobstetri[".ajaxCodeSnippetAdded"] = false;

$tdataobstetri[".buttonsAdded"] = false;

$tdataobstetri[".addPageEvents"] = false;

// use timepicker for search panel
$tdataobstetri[".isUseTimeForSearch"] = false;


$tdataobstetri[".badgeColor"] = "db7093";


$tdataobstetri[".allSearchFields"] = array();
$tdataobstetri[".filterFields"] = array();
$tdataobstetri[".requiredSearchFields"] = array();

$tdataobstetri[".googleLikeFields"] = array();
$tdataobstetri[".googleLikeFields"][] = "Id_obstetri";
$tdataobstetri[".googleLikeFields"][] = "ANAMNESIS";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Penyakit Sekarang";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Penyakit Dahulu";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Penyakit Keluarga";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Alergi";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Pengobatan";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Kebiasaan";
$tdataobstetri[".googleLikeFields"][] = "Riwayat haid";
$tdataobstetri[".googleLikeFields"][] = "Riwayat pernikahan";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Sosial Ekonomi";
$tdataobstetri[".googleLikeFields"][] = "Riwayat persalinan";
$tdataobstetri[".googleLikeFields"][] = "Riwayat menyusui";
$tdataobstetri[".googleLikeFields"][] = "Riwayat imunisasi";
$tdataobstetri[".googleLikeFields"][] = "Riwayat Keluarga Berencana";
$tdataobstetri[".googleLikeFields"][] = "PEMERIKSAA FISIK  UMUM";
$tdataobstetri[".googleLikeFields"][] = "PEMERIKSAAN  OBSTETRI/GINEKOLOGI";
$tdataobstetri[".googleLikeFields"][] = "PEMERIKSAAN PENUNJANG";
$tdataobstetri[".googleLikeFields"][] = "DIAGNOSIS";
$tdataobstetri[".googleLikeFields"][] = "RENCANA TATALAKSANA/ USULAN PEMERIKSAAN";
$tdataobstetri[".googleLikeFields"][] = "KONSELING";
$tdataobstetri[".googleLikeFields"][] = "id_pasien";
$tdataobstetri[".googleLikeFields"][] = "id_user";
$tdataobstetri[".googleLikeFields"][] = "nomor_rm";



$tdataobstetri[".tableType"] = "list";

$tdataobstetri[".printerPageOrientation"] = 0;
$tdataobstetri[".nPrinterPageScale"] = 100;

$tdataobstetri[".nPrinterSplitRecords"] = 40;

$tdataobstetri[".geocodingEnabled"] = false;










$tdataobstetri[".pageSize"] = 20;

$tdataobstetri[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataobstetri[".strOrderBy"] = $tstrOrderBy;

$tdataobstetri[".orderindexes"] = array();


$tdataobstetri[".sqlHead"] = "SELECT Id_obstetri,  	ANAMNESIS,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Riwayat haid`,  	`Riwayat pernikahan`,  	`Riwayat Sosial Ekonomi`,  	`Riwayat persalinan`,  	`Riwayat menyusui`,  	`Riwayat imunisasi`,  	`Riwayat Keluarga Berencana`,  	`PEMERIKSAA FISIK  UMUM`,  	`PEMERIKSAAN  OBSTETRI/GINEKOLOGI`,  	`PEMERIKSAAN PENUNJANG`,  	DIAGNOSIS,  	`RENCANA TATALAKSANA/ USULAN PEMERIKSAAN`,  	KONSELING,  	id_pasien,  	id_user,  	nomor_rm";
$tdataobstetri[".sqlFrom"] = "FROM obstetri";
$tdataobstetri[".sqlWhereExpr"] = "";
$tdataobstetri[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataobstetri[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataobstetri[".arrGroupsPerPage"] = $arrGPP;

$tdataobstetri[".highlightSearchResults"] = true;

$tableKeysobstetri = array();
$tdataobstetri[".Keys"] = $tableKeysobstetri;


$tdataobstetri[".hideMobileList"] = array();




//	Id_obstetri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_obstetri";
	$fdata["GoodName"] = "Id_obstetri";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Id_obstetri");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_obstetri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_obstetri";

	
	
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


	$tdataobstetri["Id_obstetri"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Id_obstetri";
//	ANAMNESIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ANAMNESIS";
	$fdata["GoodName"] = "ANAMNESIS";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","ANAMNESIS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "ANAMNESIS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ANAMNESIS";

	
	
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


	$tdataobstetri["ANAMNESIS"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "ANAMNESIS";
//	Riwayat Penyakit Sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Riwayat Penyakit Sekarang";
	$fdata["GoodName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Penyakit_Sekarang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Penyakit Sekarang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Penyakit Sekarang`";

	
	
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


	$tdataobstetri["Riwayat Penyakit Sekarang"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Penyakit Sekarang";
//	Riwayat Penyakit Dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Riwayat Penyakit Dahulu";
	$fdata["GoodName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Penyakit_Dahulu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Penyakit Dahulu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Penyakit Dahulu`";

	
	
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


	$tdataobstetri["Riwayat Penyakit Dahulu"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Penyakit Dahulu";
//	Riwayat Penyakit Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Riwayat Penyakit Keluarga";
	$fdata["GoodName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Penyakit_Keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Penyakit Keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Penyakit Keluarga`";

	
	
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


	$tdataobstetri["Riwayat Penyakit Keluarga"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Penyakit Keluarga";
//	Riwayat Alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat Alergi";
	$fdata["GoodName"] = "Riwayat_Alergi";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Alergi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Alergi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Alergi`";

	
	
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


	$tdataobstetri["Riwayat Alergi"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Alergi";
//	Riwayat Pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat Pengobatan";
	$fdata["GoodName"] = "Riwayat_Pengobatan";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Pengobatan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Pengobatan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Pengobatan`";

	
	
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


	$tdataobstetri["Riwayat Pengobatan"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Pengobatan";
//	Riwayat Kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat Kebiasaan";
	$fdata["GoodName"] = "Riwayat_Kebiasaan";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Kebiasaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Kebiasaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Kebiasaan`";

	
	
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


	$tdataobstetri["Riwayat Kebiasaan"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Kebiasaan";
//	Riwayat haid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat haid";
	$fdata["GoodName"] = "Riwayat_haid";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_haid");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat haid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat haid`";

	
	
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


	$tdataobstetri["Riwayat haid"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat haid";
//	Riwayat pernikahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat pernikahan";
	$fdata["GoodName"] = "Riwayat_pernikahan";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_pernikahan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat pernikahan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat pernikahan`";

	
	
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


	$tdataobstetri["Riwayat pernikahan"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat pernikahan";
//	Riwayat Sosial Ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Riwayat Sosial Ekonomi";
	$fdata["GoodName"] = "Riwayat_Sosial_Ekonomi";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Sosial_Ekonomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Sosial Ekonomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Sosial Ekonomi`";

	
	
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


	$tdataobstetri["Riwayat Sosial Ekonomi"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Sosial Ekonomi";
//	Riwayat persalinan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Riwayat persalinan";
	$fdata["GoodName"] = "Riwayat_persalinan";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_persalinan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat persalinan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat persalinan`";

	
	
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


	$tdataobstetri["Riwayat persalinan"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat persalinan";
//	Riwayat menyusui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Riwayat menyusui";
	$fdata["GoodName"] = "Riwayat_menyusui";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_menyusui");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat menyusui";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat menyusui`";

	
	
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


	$tdataobstetri["Riwayat menyusui"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat menyusui";
//	Riwayat imunisasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Riwayat imunisasi";
	$fdata["GoodName"] = "Riwayat_imunisasi";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_imunisasi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Riwayat imunisasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat imunisasi`";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataobstetri["Riwayat imunisasi"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat imunisasi";
//	Riwayat Keluarga Berencana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Riwayat Keluarga Berencana";
	$fdata["GoodName"] = "Riwayat_Keluarga_Berencana";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","Riwayat_Keluarga_Berencana");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat Keluarga Berencana";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Riwayat Keluarga Berencana`";

	
	
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


	$tdataobstetri["Riwayat Keluarga Berencana"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "Riwayat Keluarga Berencana";
//	PEMERIKSAA FISIK  UMUM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PEMERIKSAA FISIK  UMUM";
	$fdata["GoodName"] = "PEMERIKSAA_FISIK__UMUM";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","PEMERIKSAA_FISIK__UMUM");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PEMERIKSAA FISIK  UMUM";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`PEMERIKSAA FISIK  UMUM`";

	
	
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


	$tdataobstetri["PEMERIKSAA FISIK  UMUM"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "PEMERIKSAA FISIK  UMUM";
//	PEMERIKSAAN  OBSTETRI/GINEKOLOGI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PEMERIKSAAN  OBSTETRI/GINEKOLOGI";
	$fdata["GoodName"] = "PEMERIKSAAN__OBSTETRI_GINEKOLOGI";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","PEMERIKSAAN__OBSTETRI_GINEKOLOGI");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PEMERIKSAAN  OBSTETRI/GINEKOLOGI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`PEMERIKSAAN  OBSTETRI/GINEKOLOGI`";

	
	
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


	$tdataobstetri["PEMERIKSAAN  OBSTETRI/GINEKOLOGI"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "PEMERIKSAAN  OBSTETRI/GINEKOLOGI";
//	PEMERIKSAAN PENUNJANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "PEMERIKSAAN PENUNJANG";
	$fdata["GoodName"] = "PEMERIKSAAN_PENUNJANG";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","PEMERIKSAAN_PENUNJANG");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PEMERIKSAAN PENUNJANG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`PEMERIKSAAN PENUNJANG`";

	
	
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


	$tdataobstetri["PEMERIKSAAN PENUNJANG"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "PEMERIKSAAN PENUNJANG";
//	DIAGNOSIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DIAGNOSIS";
	$fdata["GoodName"] = "DIAGNOSIS";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","DIAGNOSIS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "DIAGNOSIS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIAGNOSIS";

	
	
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


	$tdataobstetri["DIAGNOSIS"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "DIAGNOSIS";
//	RENCANA TATALAKSANA/ USULAN PEMERIKSAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "RENCANA TATALAKSANA/ USULAN PEMERIKSAAN";
	$fdata["GoodName"] = "RENCANA_TATALAKSANA__USULAN_PEMERIKSAAN";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","RENCANA_TATALAKSANA__USULAN_PEMERIKSAAN");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "RENCANA TATALAKSANA/ USULAN PEMERIKSAAN";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`RENCANA TATALAKSANA/ USULAN PEMERIKSAAN`";

	
	
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


	$tdataobstetri["RENCANA TATALAKSANA/ USULAN PEMERIKSAAN"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "RENCANA TATALAKSANA/ USULAN PEMERIKSAAN";
//	KONSELING
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "KONSELING";
	$fdata["GoodName"] = "KONSELING";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","KONSELING");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "KONSELING";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KONSELING";

	
	
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


	$tdataobstetri["KONSELING"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "KONSELING";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","id_pasien");
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


	$tdataobstetri["id_pasien"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","id_user");
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


	$tdataobstetri["id_user"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "id_user";
//	nomor_rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "nomor_rm";
	$fdata["GoodName"] = "nomor_rm";
	$fdata["ownerTable"] = "obstetri";
	$fdata["Label"] = GetFieldLabel("obstetri","nomor_rm");
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


	$tdataobstetri["nomor_rm"] = $fdata;
		$tdataobstetri[".searchableFields"][] = "nomor_rm";


$tables_data["obstetri"]=&$tdataobstetri;
$field_labels["obstetri"] = &$fieldLabelsobstetri;
$fieldToolTips["obstetri"] = &$fieldToolTipsobstetri;
$placeHolders["obstetri"] = &$placeHoldersobstetri;
$page_titles["obstetri"] = &$pageTitlesobstetri;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["obstetri"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["obstetri"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["obstetri"][0] = $masterParams;
				$masterTablesData["obstetri"][0]["masterKeys"] = array();
	$masterTablesData["obstetri"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["obstetri"][0]["detailKeys"] = array();
	$masterTablesData["obstetri"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["obstetri"][1] = $masterParams;
				$masterTablesData["obstetri"][1]["masterKeys"] = array();
	$masterTablesData["obstetri"][1]["masterKeys"][]="id";
				$masterTablesData["obstetri"][1]["detailKeys"] = array();
	$masterTablesData["obstetri"][1]["detailKeys"][]="id_user";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_obstetri()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_obstetri,  	ANAMNESIS,  	`Riwayat Penyakit Sekarang`,  	`Riwayat Penyakit Dahulu`,  	`Riwayat Penyakit Keluarga`,  	`Riwayat Alergi`,  	`Riwayat Pengobatan`,  	`Riwayat Kebiasaan`,  	`Riwayat haid`,  	`Riwayat pernikahan`,  	`Riwayat Sosial Ekonomi`,  	`Riwayat persalinan`,  	`Riwayat menyusui`,  	`Riwayat imunisasi`,  	`Riwayat Keluarga Berencana`,  	`PEMERIKSAA FISIK  UMUM`,  	`PEMERIKSAAN  OBSTETRI/GINEKOLOGI`,  	`PEMERIKSAAN PENUNJANG`,  	DIAGNOSIS,  	`RENCANA TATALAKSANA/ USULAN PEMERIKSAAN`,  	KONSELING,  	id_pasien,  	id_user,  	nomor_rm";
$proto0["m_strFrom"] = "FROM obstetri";
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
	"m_strName" => "Id_obstetri",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto6["m_sql"] = "Id_obstetri";
$proto6["m_srcTableName"] = "obstetri";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ANAMNESIS",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto8["m_sql"] = "ANAMNESIS";
$proto8["m_srcTableName"] = "obstetri";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Sekarang",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto10["m_sql"] = "`Riwayat Penyakit Sekarang`";
$proto10["m_srcTableName"] = "obstetri";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Dahulu",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto12["m_sql"] = "`Riwayat Penyakit Dahulu`";
$proto12["m_srcTableName"] = "obstetri";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Penyakit Keluarga",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto14["m_sql"] = "`Riwayat Penyakit Keluarga`";
$proto14["m_srcTableName"] = "obstetri";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Alergi",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto16["m_sql"] = "`Riwayat Alergi`";
$proto16["m_srcTableName"] = "obstetri";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Pengobatan",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto18["m_sql"] = "`Riwayat Pengobatan`";
$proto18["m_srcTableName"] = "obstetri";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Kebiasaan",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto20["m_sql"] = "`Riwayat Kebiasaan`";
$proto20["m_srcTableName"] = "obstetri";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat haid",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto22["m_sql"] = "`Riwayat haid`";
$proto22["m_srcTableName"] = "obstetri";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat pernikahan",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto24["m_sql"] = "`Riwayat pernikahan`";
$proto24["m_srcTableName"] = "obstetri";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Sosial Ekonomi",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto26["m_sql"] = "`Riwayat Sosial Ekonomi`";
$proto26["m_srcTableName"] = "obstetri";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat persalinan",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto28["m_sql"] = "`Riwayat persalinan`";
$proto28["m_srcTableName"] = "obstetri";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat menyusui",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto30["m_sql"] = "`Riwayat menyusui`";
$proto30["m_srcTableName"] = "obstetri";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat imunisasi",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto32["m_sql"] = "`Riwayat imunisasi`";
$proto32["m_srcTableName"] = "obstetri";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat Keluarga Berencana",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto34["m_sql"] = "`Riwayat Keluarga Berencana`";
$proto34["m_srcTableName"] = "obstetri";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PEMERIKSAA FISIK  UMUM",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto36["m_sql"] = "`PEMERIKSAA FISIK  UMUM`";
$proto36["m_srcTableName"] = "obstetri";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PEMERIKSAAN  OBSTETRI/GINEKOLOGI",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto38["m_sql"] = "`PEMERIKSAAN  OBSTETRI/GINEKOLOGI`";
$proto38["m_srcTableName"] = "obstetri";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "PEMERIKSAAN PENUNJANG",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto40["m_sql"] = "`PEMERIKSAAN PENUNJANG`";
$proto40["m_srcTableName"] = "obstetri";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DIAGNOSIS",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto42["m_sql"] = "DIAGNOSIS";
$proto42["m_srcTableName"] = "obstetri";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RENCANA TATALAKSANA/ USULAN PEMERIKSAAN",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto44["m_sql"] = "`RENCANA TATALAKSANA/ USULAN PEMERIKSAAN`";
$proto44["m_srcTableName"] = "obstetri";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "KONSELING",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto46["m_sql"] = "KONSELING";
$proto46["m_srcTableName"] = "obstetri";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto48["m_sql"] = "id_pasien";
$proto48["m_srcTableName"] = "obstetri";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto50["m_sql"] = "id_user";
$proto50["m_srcTableName"] = "obstetri";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor_rm",
	"m_strTable" => "obstetri",
	"m_srcTableName" => "obstetri"
));

$proto52["m_sql"] = "nomor_rm";
$proto52["m_srcTableName"] = "obstetri";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "obstetri";
$proto55["m_srcTableName"] = "obstetri";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "Id_obstetri";
$proto55["m_columns"][] = "ANAMNESIS";
$proto55["m_columns"][] = "Riwayat Penyakit Sekarang";
$proto55["m_columns"][] = "Riwayat Penyakit Dahulu";
$proto55["m_columns"][] = "Riwayat Penyakit Keluarga";
$proto55["m_columns"][] = "Riwayat Alergi";
$proto55["m_columns"][] = "Riwayat Pengobatan";
$proto55["m_columns"][] = "Riwayat Kebiasaan";
$proto55["m_columns"][] = "Riwayat haid";
$proto55["m_columns"][] = "Riwayat pernikahan";
$proto55["m_columns"][] = "Riwayat Sosial Ekonomi";
$proto55["m_columns"][] = "Riwayat persalinan";
$proto55["m_columns"][] = "Riwayat menyusui";
$proto55["m_columns"][] = "Riwayat imunisasi";
$proto55["m_columns"][] = "Riwayat Keluarga Berencana";
$proto55["m_columns"][] = "PEMERIKSAA FISIK  UMUM";
$proto55["m_columns"][] = "PEMERIKSAAN  OBSTETRI/GINEKOLOGI";
$proto55["m_columns"][] = "PEMERIKSAAN PENUNJANG";
$proto55["m_columns"][] = "DIAGNOSIS";
$proto55["m_columns"][] = "RENCANA TATALAKSANA/ USULAN PEMERIKSAAN";
$proto55["m_columns"][] = "KONSELING";
$proto55["m_columns"][] = "id_pasien";
$proto55["m_columns"][] = "id_user";
$proto55["m_columns"][] = "nomor_rm";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "obstetri";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "obstetri";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="obstetri";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_obstetri = createSqlQuery_obstetri();


	
		;

																								

$tdataobstetri[".sqlquery"] = $queryData_obstetri;



$tableEvents["obstetri"] = new eventsBase;
$tdataobstetri[".hasEvents"] = false;

?>