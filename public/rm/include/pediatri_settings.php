<?php
$tdatapediatri = array();
$tdatapediatri[".searchableFields"] = array();
$tdatapediatri[".ShortName"] = "pediatri";
$tdatapediatri[".OwnerID"] = "";
$tdatapediatri[".OriginalTable"] = "pediatri";


$tdatapediatri[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapediatri[".originalPagesByType"] = $tdatapediatri[".pagesByType"];
$tdatapediatri[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapediatri[".originalPages"] = $tdatapediatri[".pages"];
$tdatapediatri[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapediatri[".originalDefaultPages"] = $tdatapediatri[".defaultPages"];

//	field labels
$fieldLabelspediatri = array();
$fieldToolTipspediatri = array();
$pageTitlespediatri = array();
$placeHolderspediatri = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspediatri["English"] = array();
	$fieldToolTipspediatri["English"] = array();
	$placeHolderspediatri["English"] = array();
	$pageTitlespediatri["English"] = array();
	$fieldLabelspediatri["English"]["id_pediatri"] = "Id Pediatri";
	$fieldToolTipspediatri["English"]["id_pediatri"] = "";
	$placeHolderspediatri["English"]["id_pediatri"] = "";
	$fieldLabelspediatri["English"]["keluhan_pertama"] = "Keluhan Pertama";
	$fieldToolTipspediatri["English"]["keluhan_pertama"] = "";
	$placeHolderspediatri["English"]["keluhan_pertama"] = "";
	$fieldLabelspediatri["English"]["keluhan_tmbhan"] = "Keluhan Tmbhan";
	$fieldToolTipspediatri["English"]["keluhan_tmbhan"] = "";
	$placeHolderspediatri["English"]["keluhan_tmbhan"] = "";
	$fieldLabelspediatri["English"]["rwyt_skrg"] = "Rwyt Skrg";
	$fieldToolTipspediatri["English"]["rwyt_skrg"] = "";
	$placeHolderspediatri["English"]["rwyt_skrg"] = "";
	$fieldLabelspediatri["English"]["rwyt_dulu"] = "Rwyt Dulu";
	$fieldToolTipspediatri["English"]["rwyt_dulu"] = "";
	$placeHolderspediatri["English"]["rwyt_dulu"] = "";
	$fieldLabelspediatri["English"]["rwyt_klg"] = "Rwyt Klg";
	$fieldToolTipspediatri["English"]["rwyt_klg"] = "";
	$placeHolderspediatri["English"]["rwyt_klg"] = "";
	$fieldLabelspediatri["English"]["rwyt_alergi"] = "Rwyt Alergi";
	$fieldToolTipspediatri["English"]["rwyt_alergi"] = "";
	$placeHolderspediatri["English"]["rwyt_alergi"] = "";
	$fieldLabelspediatri["English"]["rwyt_pengobatan"] = "Rwyt Pengobatan";
	$fieldToolTipspediatri["English"]["rwyt_pengobatan"] = "";
	$placeHolderspediatri["English"]["rwyt_pengobatan"] = "";
	$fieldLabelspediatri["English"]["rwyt_kebiasaan"] = "Rwyt Kebiasaan";
	$fieldToolTipspediatri["English"]["rwyt_kebiasaan"] = "";
	$placeHolderspediatri["English"]["rwyt_kebiasaan"] = "";
	$fieldLabelspediatri["English"]["rwyt_sos"] = "Rwyt Sos";
	$fieldToolTipspediatri["English"]["rwyt_sos"] = "";
	$placeHolderspediatri["English"]["rwyt_sos"] = "";
	$fieldLabelspediatri["English"]["rwyt_imunisasi"] = "Rwyt Imunisasi";
	$fieldToolTipspediatri["English"]["rwyt_imunisasi"] = "";
	$placeHolderspediatri["English"]["rwyt_imunisasi"] = "";
	$fieldLabelspediatri["English"]["tb"] = "Tb";
	$fieldToolTipspediatri["English"]["tb"] = "";
	$placeHolderspediatri["English"]["tb"] = "";
	$fieldLabelspediatri["English"]["bb"] = "Bb";
	$fieldToolTipspediatri["English"]["bb"] = "";
	$placeHolderspediatri["English"]["bb"] = "";
	$fieldLabelspediatri["English"]["kepala"] = "Kepala";
	$fieldToolTipspediatri["English"]["kepala"] = "";
	$placeHolderspediatri["English"]["kepala"] = "";
	$fieldLabelspediatri["English"]["leher"] = "Leher";
	$fieldToolTipspediatri["English"]["leher"] = "";
	$placeHolderspediatri["English"]["leher"] = "";
	$fieldLabelspediatri["English"]["thorax"] = "Thorax";
	$fieldToolTipspediatri["English"]["thorax"] = "";
	$placeHolderspediatri["English"]["thorax"] = "";
	$fieldLabelspediatri["English"]["abdomen"] = "Abdomen";
	$fieldToolTipspediatri["English"]["abdomen"] = "";
	$placeHolderspediatri["English"]["abdomen"] = "";
	$fieldLabelspediatri["English"]["ekstremitas"] = "Ekstremitas";
	$fieldToolTipspediatri["English"]["ekstremitas"] = "";
	$placeHolderspediatri["English"]["ekstremitas"] = "";
	$fieldLabelspediatri["English"]["id_mhs"] = "Id User";
	$fieldToolTipspediatri["English"]["id_mhs"] = "";
	$placeHolderspediatri["English"]["id_mhs"] = "";
	$fieldLabelspediatri["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipspediatri["English"]["id_pasien"] = "";
	$placeHolderspediatri["English"]["id_pasien"] = "";
	$fieldLabelspediatri["English"]["rwyt_kelahiran"] = "Rwyt Kelahiran";
	$fieldToolTipspediatri["English"]["rwyt_kelahiran"] = "";
	$placeHolderspediatri["English"]["rwyt_kelahiran"] = "";
	$fieldLabelspediatri["English"]["rwyt_tumbuh_kembang"] = "Rwyt Tumbuh Kembang";
	$fieldToolTipspediatri["English"]["rwyt_tumbuh_kembang"] = "";
	$placeHolderspediatri["English"]["rwyt_tumbuh_kembang"] = "";
	$fieldLabelspediatri["English"]["kesan_umum"] = "Kesan Umum";
	$fieldToolTipspediatri["English"]["kesan_umum"] = "";
	$placeHolderspediatri["English"]["kesan_umum"] = "";
	$fieldLabelspediatri["English"]["imt"] = "Imt";
	$fieldToolTipspediatri["English"]["imt"] = "";
	$placeHolderspediatri["English"]["imt"] = "";
	$fieldLabelspediatri["English"]["tanda_vital"] = "Tanda Vital";
	$fieldToolTipspediatri["English"]["tanda_vital"] = "";
	$placeHolderspediatri["English"]["tanda_vital"] = "";
	$fieldLabelspediatri["English"]["pmrksaan_pnunjang_lab"] = "Pmrksaan Pnunjang Lab";
	$fieldToolTipspediatri["English"]["pmrksaan_pnunjang_lab"] = "";
	$placeHolderspediatri["English"]["pmrksaan_pnunjang_lab"] = "";
	$fieldLabelspediatri["English"]["pmrksaan_pnunjang_radiologi"] = "Pmrksaan Pnunjang Radiologi";
	$fieldToolTipspediatri["English"]["pmrksaan_pnunjang_radiologi"] = "";
	$placeHolderspediatri["English"]["pmrksaan_pnunjang_radiologi"] = "";
	$fieldLabelspediatri["English"]["pmrksaan_pnunjang_lain"] = "Pmrksaan Pnunjang Lain";
	$fieldToolTipspediatri["English"]["pmrksaan_pnunjang_lain"] = "";
	$placeHolderspediatri["English"]["pmrksaan_pnunjang_lain"] = "";
	$fieldLabelspediatri["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipspediatri["English"]["Nomor_Rm"] = "";
	$placeHolderspediatri["English"]["Nomor_Rm"] = "";
	if (count($fieldToolTipspediatri["English"]))
		$tdatapediatri[".isUseToolTips"] = true;
}


	$tdatapediatri[".NCSearch"] = true;



$tdatapediatri[".shortTableName"] = "pediatri";
$tdatapediatri[".nSecOptions"] = 0;

$tdatapediatri[".mainTableOwnerID"] = "";
$tdatapediatri[".entityType"] = 0;
$tdatapediatri[".connId"] = "newrm_at_localhost";


$tdatapediatri[".strOriginalTableName"] = "pediatri";

	



$tdatapediatri[".showAddInPopup"] = false;

$tdatapediatri[".showEditInPopup"] = false;

$tdatapediatri[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapediatri[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapediatri[".listAjax"] = false;
//	temporary
$tdatapediatri[".listAjax"] = false;

	$tdatapediatri[".audit"] = false;

	$tdatapediatri[".locking"] = false;


$pages = $tdatapediatri[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapediatri[".edit"] = true;
	$tdatapediatri[".afterEditAction"] = 1;
	$tdatapediatri[".closePopupAfterEdit"] = 1;
	$tdatapediatri[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapediatri[".add"] = true;
$tdatapediatri[".afterAddAction"] = 1;
$tdatapediatri[".closePopupAfterAdd"] = 1;
$tdatapediatri[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapediatri[".list"] = true;
}



$tdatapediatri[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapediatri[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapediatri[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapediatri[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapediatri[".printFriendly"] = true;
}



$tdatapediatri[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapediatri[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapediatri[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapediatri[".isUseAjaxSuggest"] = true;

$tdatapediatri[".rowHighlite"] = true;





$tdatapediatri[".ajaxCodeSnippetAdded"] = false;

$tdatapediatri[".buttonsAdded"] = false;

$tdatapediatri[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapediatri[".isUseTimeForSearch"] = false;


$tdatapediatri[".badgeColor"] = "db7093";


$tdatapediatri[".allSearchFields"] = array();
$tdatapediatri[".filterFields"] = array();
$tdatapediatri[".requiredSearchFields"] = array();

$tdatapediatri[".googleLikeFields"] = array();
$tdatapediatri[".googleLikeFields"][] = "id_pediatri";
$tdatapediatri[".googleLikeFields"][] = "id_mhs";
$tdatapediatri[".googleLikeFields"][] = "id_pasien";
$tdatapediatri[".googleLikeFields"][] = "keluhan_pertama";
$tdatapediatri[".googleLikeFields"][] = "keluhan_tmbhan";
$tdatapediatri[".googleLikeFields"][] = "rwyt_skrg";
$tdatapediatri[".googleLikeFields"][] = "rwyt_dulu";
$tdatapediatri[".googleLikeFields"][] = "rwyt_kelahiran";
$tdatapediatri[".googleLikeFields"][] = "rwyt_imunisasi";
$tdatapediatri[".googleLikeFields"][] = "rwyt_tumbuh_kembang";
$tdatapediatri[".googleLikeFields"][] = "rwyt_alergi";
$tdatapediatri[".googleLikeFields"][] = "rwyt_klg";
$tdatapediatri[".googleLikeFields"][] = "rwyt_pengobatan";
$tdatapediatri[".googleLikeFields"][] = "rwyt_kebiasaan";
$tdatapediatri[".googleLikeFields"][] = "rwyt_sos";
$tdatapediatri[".googleLikeFields"][] = "kesan_umum";
$tdatapediatri[".googleLikeFields"][] = "bb";
$tdatapediatri[".googleLikeFields"][] = "tb";
$tdatapediatri[".googleLikeFields"][] = "imt";
$tdatapediatri[".googleLikeFields"][] = "tanda_vital";
$tdatapediatri[".googleLikeFields"][] = "kepala";
$tdatapediatri[".googleLikeFields"][] = "leher";
$tdatapediatri[".googleLikeFields"][] = "thorax";
$tdatapediatri[".googleLikeFields"][] = "abdomen";
$tdatapediatri[".googleLikeFields"][] = "ekstremitas";
$tdatapediatri[".googleLikeFields"][] = "pmrksaan_pnunjang_lab";
$tdatapediatri[".googleLikeFields"][] = "pmrksaan_pnunjang_radiologi";
$tdatapediatri[".googleLikeFields"][] = "pmrksaan_pnunjang_lain";
$tdatapediatri[".googleLikeFields"][] = "Nomor_Rm";



$tdatapediatri[".tableType"] = "list";

$tdatapediatri[".printerPageOrientation"] = 0;
$tdatapediatri[".nPrinterPageScale"] = 100;

$tdatapediatri[".nPrinterSplitRecords"] = 40;

$tdatapediatri[".geocodingEnabled"] = false;










$tdatapediatri[".pageSize"] = 20;

$tdatapediatri[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapediatri[".strOrderBy"] = $tstrOrderBy;

$tdatapediatri[".orderindexes"] = array();


$tdatapediatri[".sqlHead"] = "SELECT id_pediatri,  	id_mhs,  	id_pasien,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_kelahiran,  	rwyt_imunisasi,  	rwyt_tumbuh_kembang,  	rwyt_alergi,  	rwyt_klg,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	rwyt_sos,  	kesan_umum,  	bb,  	tb,  	imt,  	tanda_vital,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	pmrksaan_pnunjang_lab,  	pmrksaan_pnunjang_radiologi,  	pmrksaan_pnunjang_lain,  	Nomor_Rm";
$tdatapediatri[".sqlFrom"] = "FROM pediatri";
$tdatapediatri[".sqlWhereExpr"] = "";
$tdatapediatri[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapediatri[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapediatri[".arrGroupsPerPage"] = $arrGPP;

$tdatapediatri[".highlightSearchResults"] = true;

$tableKeyspediatri = array();
$tableKeyspediatri[] = "id_pediatri";
$tdatapediatri[".Keys"] = $tableKeyspediatri;


$tdatapediatri[".hideMobileList"] = array();




//	id_pediatri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_pediatri";
	$fdata["GoodName"] = "id_pediatri";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","id_pediatri");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatapediatri["id_pediatri"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "id_pediatri";
//	id_mhs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_mhs";
	$fdata["GoodName"] = "id_mhs";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","id_mhs");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_mhs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_mhs";

	
	
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


	$tdatapediatri["id_mhs"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "id_mhs";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","id_pasien");
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


	$tdatapediatri["id_pasien"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "id_pasien";
//	keluhan_pertama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "keluhan_pertama";
	$fdata["GoodName"] = "keluhan_pertama";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","keluhan_pertama");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "keluhan_pertama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "keluhan_pertama";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["keluhan_pertama"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "keluhan_pertama";
//	keluhan_tmbhan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keluhan_tmbhan";
	$fdata["GoodName"] = "keluhan_tmbhan";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","keluhan_tmbhan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "keluhan_tmbhan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "keluhan_tmbhan";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["keluhan_tmbhan"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "keluhan_tmbhan";
//	rwyt_skrg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rwyt_skrg";
	$fdata["GoodName"] = "rwyt_skrg";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_skrg");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_skrg";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_skrg";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_skrg"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_skrg";
//	rwyt_dulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rwyt_dulu";
	$fdata["GoodName"] = "rwyt_dulu";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_dulu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_dulu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_dulu";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_dulu"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_dulu";
//	rwyt_kelahiran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rwyt_kelahiran";
	$fdata["GoodName"] = "rwyt_kelahiran";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_kelahiran");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_kelahiran";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_kelahiran";

	
	
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


	$tdatapediatri["rwyt_kelahiran"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_kelahiran";
//	rwyt_imunisasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rwyt_imunisasi";
	$fdata["GoodName"] = "rwyt_imunisasi";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_imunisasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_imunisasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_imunisasi";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_imunisasi"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_imunisasi";
//	rwyt_tumbuh_kembang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rwyt_tumbuh_kembang";
	$fdata["GoodName"] = "rwyt_tumbuh_kembang";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_tumbuh_kembang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_tumbuh_kembang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_tumbuh_kembang";

	
	
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


	$tdatapediatri["rwyt_tumbuh_kembang"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_tumbuh_kembang";
//	rwyt_alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rwyt_alergi";
	$fdata["GoodName"] = "rwyt_alergi";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_alergi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_alergi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_alergi";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_alergi"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_alergi";
//	rwyt_klg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "rwyt_klg";
	$fdata["GoodName"] = "rwyt_klg";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_klg");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_klg";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_klg";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_klg"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_klg";
//	rwyt_pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "rwyt_pengobatan";
	$fdata["GoodName"] = "rwyt_pengobatan";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_pengobatan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_pengobatan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_pengobatan";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_pengobatan"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_pengobatan";
//	rwyt_kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "rwyt_kebiasaan";
	$fdata["GoodName"] = "rwyt_kebiasaan";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_kebiasaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_kebiasaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_kebiasaan";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_kebiasaan"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_kebiasaan";
//	rwyt_sos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "rwyt_sos";
	$fdata["GoodName"] = "rwyt_sos";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","rwyt_sos");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "rwyt_sos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_sos";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["rwyt_sos"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "rwyt_sos";
//	kesan_umum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kesan_umum";
	$fdata["GoodName"] = "kesan_umum";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","kesan_umum");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "kesan_umum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kesan_umum";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["kesan_umum"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "kesan_umum";
//	bb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "bb";
	$fdata["GoodName"] = "bb";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","bb");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "bb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bb";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["bb"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "bb";
//	tb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "tb";
	$fdata["GoodName"] = "tb";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","tb");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tb";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["tb"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "tb";
//	imt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "imt";
	$fdata["GoodName"] = "imt";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","imt");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "imt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imt";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["imt"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "imt";
//	tanda_vital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "tanda_vital";
	$fdata["GoodName"] = "tanda_vital";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","tanda_vital");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tanda_vital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanda_vital";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["tanda_vital"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "tanda_vital";
//	kepala
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "kepala";
	$fdata["GoodName"] = "kepala";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","kepala");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "kepala";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kepala";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["kepala"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "kepala";
//	leher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "leher";
	$fdata["GoodName"] = "leher";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","leher");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "leher";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "leher";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["leher"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "leher";
//	thorax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "thorax";
	$fdata["GoodName"] = "thorax";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","thorax");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "thorax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "thorax";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["thorax"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "thorax";
//	abdomen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "abdomen";
	$fdata["GoodName"] = "abdomen";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","abdomen");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "abdomen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "abdomen";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["abdomen"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "abdomen";
//	ekstremitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ekstremitas";
	$fdata["GoodName"] = "ekstremitas";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","ekstremitas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "ekstremitas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ekstremitas";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatapediatri["ekstremitas"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "ekstremitas";
//	pmrksaan_pnunjang_lab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "pmrksaan_pnunjang_lab";
	$fdata["GoodName"] = "pmrksaan_pnunjang_lab";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","pmrksaan_pnunjang_lab");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "pmrksaan_pnunjang_lab";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmrksaan_pnunjang_lab";

	
	
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


	$tdatapediatri["pmrksaan_pnunjang_lab"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "pmrksaan_pnunjang_lab";
//	pmrksaan_pnunjang_radiologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "pmrksaan_pnunjang_radiologi";
	$fdata["GoodName"] = "pmrksaan_pnunjang_radiologi";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","pmrksaan_pnunjang_radiologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "pmrksaan_pnunjang_radiologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmrksaan_pnunjang_radiologi";

	
	
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


	$tdatapediatri["pmrksaan_pnunjang_radiologi"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "pmrksaan_pnunjang_radiologi";
//	pmrksaan_pnunjang_lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "pmrksaan_pnunjang_lain";
	$fdata["GoodName"] = "pmrksaan_pnunjang_lain";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","pmrksaan_pnunjang_lain");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "pmrksaan_pnunjang_lain";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmrksaan_pnunjang_lain";

	
	
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


	$tdatapediatri["pmrksaan_pnunjang_lain"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "pmrksaan_pnunjang_lain";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "pediatri";
	$fdata["Label"] = GetFieldLabel("pediatri","Nomor_Rm");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nomor_Rm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nomor_Rm";

	
	
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


	$tdatapediatri["Nomor_Rm"] = $fdata;
		$tdatapediatri[".searchableFields"][] = "Nomor_Rm";


$tables_data["pediatri"]=&$tdatapediatri;
$field_labels["pediatri"] = &$fieldLabelspediatri;
$fieldToolTips["pediatri"] = &$fieldToolTipspediatri;
$placeHolders["pediatri"] = &$placeHolderspediatri;
$page_titles["pediatri"] = &$pageTitlespediatri;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pediatri"] = array();
//	daftar_masalah_pediatri
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="daftar_masalah_pediatri";
		$detailsParam["dOriginalTable"] = "daftar_masalah_pediatri";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "daftar_masalah_pediatri";
	$detailsParam["dCaptionTable"] = GetTableCaption("daftar_masalah_pediatri");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pediatri"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pediatri"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pediatri"][$dIndex]["masterKeys"][]="id_pediatri";

				$detailsTablesData["pediatri"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pediatri"][$dIndex]["detailKeys"][]="id_pediatri";

// tables which are master tables for current table (detail)
$masterTablesData["pediatri"] = array();



	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pediatri"][0] = $masterParams;
				$masterTablesData["pediatri"][0]["masterKeys"] = array();
	$masterTablesData["pediatri"][0]["masterKeys"][]="id";
				$masterTablesData["pediatri"][0]["detailKeys"] = array();
	$masterTablesData["pediatri"][0]["detailKeys"][]="id_mhs";
		
	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pediatri"][1] = $masterParams;
				$masterTablesData["pediatri"][1]["masterKeys"] = array();
	$masterTablesData["pediatri"][1]["masterKeys"][]="Id_Pasien";
				$masterTablesData["pediatri"][1]["detailKeys"] = array();
	$masterTablesData["pediatri"][1]["detailKeys"][]="id_pasien";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pediatri()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_pediatri,  	id_mhs,  	id_pasien,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_kelahiran,  	rwyt_imunisasi,  	rwyt_tumbuh_kembang,  	rwyt_alergi,  	rwyt_klg,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	rwyt_sos,  	kesan_umum,  	bb,  	tb,  	imt,  	tanda_vital,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	pmrksaan_pnunjang_lab,  	pmrksaan_pnunjang_radiologi,  	pmrksaan_pnunjang_lain,  	Nomor_Rm";
$proto0["m_strFrom"] = "FROM pediatri";
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
	"m_strName" => "id_pediatri",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto6["m_sql"] = "id_pediatri";
$proto6["m_srcTableName"] = "pediatri";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mhs",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto8["m_sql"] = "id_mhs";
$proto8["m_srcTableName"] = "pediatri";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto10["m_sql"] = "id_pasien";
$proto10["m_srcTableName"] = "pediatri";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_pertama",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto12["m_sql"] = "keluhan_pertama";
$proto12["m_srcTableName"] = "pediatri";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_tmbhan",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto14["m_sql"] = "keluhan_tmbhan";
$proto14["m_srcTableName"] = "pediatri";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_skrg",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto16["m_sql"] = "rwyt_skrg";
$proto16["m_srcTableName"] = "pediatri";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_dulu",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto18["m_sql"] = "rwyt_dulu";
$proto18["m_srcTableName"] = "pediatri";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_kelahiran",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto20["m_sql"] = "rwyt_kelahiran";
$proto20["m_srcTableName"] = "pediatri";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_imunisasi",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto22["m_sql"] = "rwyt_imunisasi";
$proto22["m_srcTableName"] = "pediatri";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_tumbuh_kembang",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto24["m_sql"] = "rwyt_tumbuh_kembang";
$proto24["m_srcTableName"] = "pediatri";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_alergi",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto26["m_sql"] = "rwyt_alergi";
$proto26["m_srcTableName"] = "pediatri";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_klg",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto28["m_sql"] = "rwyt_klg";
$proto28["m_srcTableName"] = "pediatri";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_pengobatan",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto30["m_sql"] = "rwyt_pengobatan";
$proto30["m_srcTableName"] = "pediatri";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_kebiasaan",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto32["m_sql"] = "rwyt_kebiasaan";
$proto32["m_srcTableName"] = "pediatri";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_sos",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto34["m_sql"] = "rwyt_sos";
$proto34["m_srcTableName"] = "pediatri";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "kesan_umum",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto36["m_sql"] = "kesan_umum";
$proto36["m_srcTableName"] = "pediatri";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "bb",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto38["m_sql"] = "bb";
$proto38["m_srcTableName"] = "pediatri";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "tb",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto40["m_sql"] = "tb";
$proto40["m_srcTableName"] = "pediatri";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "imt",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto42["m_sql"] = "imt";
$proto42["m_srcTableName"] = "pediatri";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "tanda_vital",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto44["m_sql"] = "tanda_vital";
$proto44["m_srcTableName"] = "pediatri";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "kepala",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto46["m_sql"] = "kepala";
$proto46["m_srcTableName"] = "pediatri";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "leher",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto48["m_sql"] = "leher";
$proto48["m_srcTableName"] = "pediatri";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "thorax",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto50["m_sql"] = "thorax";
$proto50["m_srcTableName"] = "pediatri";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "abdomen",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto52["m_sql"] = "abdomen";
$proto52["m_srcTableName"] = "pediatri";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ekstremitas",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto54["m_sql"] = "ekstremitas";
$proto54["m_srcTableName"] = "pediatri";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_pnunjang_lab",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto56["m_sql"] = "pmrksaan_pnunjang_lab";
$proto56["m_srcTableName"] = "pediatri";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_pnunjang_radiologi",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto58["m_sql"] = "pmrksaan_pnunjang_radiologi";
$proto58["m_srcTableName"] = "pediatri";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_pnunjang_lain",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto60["m_sql"] = "pmrksaan_pnunjang_lain";
$proto60["m_srcTableName"] = "pediatri";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "pediatri",
	"m_srcTableName" => "pediatri"
));

$proto62["m_sql"] = "Nomor_Rm";
$proto62["m_srcTableName"] = "pediatri";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "pediatri";
$proto65["m_srcTableName"] = "pediatri";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "id_pediatri";
$proto65["m_columns"][] = "id_mhs";
$proto65["m_columns"][] = "id_pasien";
$proto65["m_columns"][] = "keluhan_pertama";
$proto65["m_columns"][] = "keluhan_tmbhan";
$proto65["m_columns"][] = "rwyt_skrg";
$proto65["m_columns"][] = "rwyt_dulu";
$proto65["m_columns"][] = "rwyt_kelahiran";
$proto65["m_columns"][] = "rwyt_imunisasi";
$proto65["m_columns"][] = "rwyt_tumbuh_kembang";
$proto65["m_columns"][] = "rwyt_alergi";
$proto65["m_columns"][] = "rwyt_klg";
$proto65["m_columns"][] = "rwyt_pengobatan";
$proto65["m_columns"][] = "rwyt_kebiasaan";
$proto65["m_columns"][] = "rwyt_sos";
$proto65["m_columns"][] = "kesan_umum";
$proto65["m_columns"][] = "bb";
$proto65["m_columns"][] = "tb";
$proto65["m_columns"][] = "imt";
$proto65["m_columns"][] = "tanda_vital";
$proto65["m_columns"][] = "kepala";
$proto65["m_columns"][] = "leher";
$proto65["m_columns"][] = "thorax";
$proto65["m_columns"][] = "abdomen";
$proto65["m_columns"][] = "ekstremitas";
$proto65["m_columns"][] = "pmrksaan_pnunjang_lab";
$proto65["m_columns"][] = "pmrksaan_pnunjang_radiologi";
$proto65["m_columns"][] = "pmrksaan_pnunjang_lain";
$proto65["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "pediatri";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "pediatri";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pediatri";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pediatri = createSqlQuery_pediatri();


	
		;

																													

$tdatapediatri[".sqlquery"] = $queryData_pediatri;



$tableEvents["pediatri"] = new eventsBase;
$tdatapediatri[".hasEvents"] = false;

?>