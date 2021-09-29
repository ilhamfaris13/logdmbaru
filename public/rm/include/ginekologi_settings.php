<?php
$tdataginekologi = array();
$tdataginekologi[".searchableFields"] = array();
$tdataginekologi[".ShortName"] = "ginekologi";
$tdataginekologi[".OwnerID"] = "";
$tdataginekologi[".OriginalTable"] = "ginekologi";


$tdataginekologi[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataginekologi[".originalPagesByType"] = $tdataginekologi[".pagesByType"];
$tdataginekologi[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataginekologi[".originalPages"] = $tdataginekologi[".pages"];
$tdataginekologi[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataginekologi[".originalDefaultPages"] = $tdataginekologi[".defaultPages"];

//	field labels
$fieldLabelsginekologi = array();
$fieldToolTipsginekologi = array();
$pageTitlesginekologi = array();
$placeHoldersginekologi = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsginekologi["English"] = array();
	$fieldToolTipsginekologi["English"] = array();
	$placeHoldersginekologi["English"] = array();
	$pageTitlesginekologi["English"] = array();
	$fieldLabelsginekologi["English"]["keluhan_pertama"] = "Keluhan Pertama";
	$fieldToolTipsginekologi["English"]["keluhan_pertama"] = "";
	$placeHoldersginekologi["English"]["keluhan_pertama"] = "";
	$fieldLabelsginekologi["English"]["keluhan_tmbhan"] = "Keluhan Tmbhan";
	$fieldToolTipsginekologi["English"]["keluhan_tmbhan"] = "";
	$placeHoldersginekologi["English"]["keluhan_tmbhan"] = "";
	$fieldLabelsginekologi["English"]["rwyt_skrg"] = "Rwyt Skrg";
	$fieldToolTipsginekologi["English"]["rwyt_skrg"] = "";
	$placeHoldersginekologi["English"]["rwyt_skrg"] = "";
	$fieldLabelsginekologi["English"]["rwyt_dulu"] = "Rwyt Dulu";
	$fieldToolTipsginekologi["English"]["rwyt_dulu"] = "";
	$placeHoldersginekologi["English"]["rwyt_dulu"] = "";
	$fieldLabelsginekologi["English"]["rwyt_klg"] = "Rwyt Klg";
	$fieldToolTipsginekologi["English"]["rwyt_klg"] = "";
	$placeHoldersginekologi["English"]["rwyt_klg"] = "";
	$fieldLabelsginekologi["English"]["rwyt_alergi"] = "Rwyt Alergi";
	$fieldToolTipsginekologi["English"]["rwyt_alergi"] = "";
	$placeHoldersginekologi["English"]["rwyt_alergi"] = "";
	$fieldLabelsginekologi["English"]["rwyt_pengobatan"] = "Rwyt Pengobatan";
	$fieldToolTipsginekologi["English"]["rwyt_pengobatan"] = "";
	$placeHoldersginekologi["English"]["rwyt_pengobatan"] = "";
	$fieldLabelsginekologi["English"]["rwyt_kebiasaan"] = "Rwyt Kebiasaan";
	$fieldToolTipsginekologi["English"]["rwyt_kebiasaan"] = "";
	$placeHoldersginekologi["English"]["rwyt_kebiasaan"] = "";
	$fieldLabelsginekologi["English"]["rwyt_haid"] = "Rwyt Haid";
	$fieldToolTipsginekologi["English"]["rwyt_haid"] = "";
	$placeHoldersginekologi["English"]["rwyt_haid"] = "";
	$fieldLabelsginekologi["English"]["rwyt_nikah"] = "Rwyt Nikah";
	$fieldToolTipsginekologi["English"]["rwyt_nikah"] = "";
	$placeHoldersginekologi["English"]["rwyt_nikah"] = "";
	$fieldLabelsginekologi["English"]["rwyt_sos"] = "Rwyt Sos";
	$fieldToolTipsginekologi["English"]["rwyt_sos"] = "";
	$placeHoldersginekologi["English"]["rwyt_sos"] = "";
	$fieldLabelsginekologi["English"]["rwyt_prsalinan_satu"] = "Rwyt Prsalinan Satu";
	$fieldToolTipsginekologi["English"]["rwyt_prsalinan_satu"] = "";
	$placeHoldersginekologi["English"]["rwyt_prsalinan_satu"] = "";
	$fieldLabelsginekologi["English"]["rwyt_prsalinan_dua"] = "Rwyt Prsalinan Dua";
	$fieldToolTipsginekologi["English"]["rwyt_prsalinan_dua"] = "";
	$placeHoldersginekologi["English"]["rwyt_prsalinan_dua"] = "";
	$fieldLabelsginekologi["English"]["rwyt_prsalinan_tiga"] = "Rwyt Prsalinan Tiga";
	$fieldToolTipsginekologi["English"]["rwyt_prsalinan_tiga"] = "";
	$placeHoldersginekologi["English"]["rwyt_prsalinan_tiga"] = "";
	$fieldLabelsginekologi["English"]["rwyt_prsalinan_empat"] = "Rwyt Prsalinan Empat";
	$fieldToolTipsginekologi["English"]["rwyt_prsalinan_empat"] = "";
	$placeHoldersginekologi["English"]["rwyt_prsalinan_empat"] = "";
	$fieldLabelsginekologi["English"]["rwyt_mnyusui"] = "Rwyt Mnyusui";
	$fieldToolTipsginekologi["English"]["rwyt_mnyusui"] = "";
	$placeHoldersginekologi["English"]["rwyt_mnyusui"] = "";
	$fieldLabelsginekologi["English"]["rwyt_imunisasi"] = "Rwyt Imunisasi";
	$fieldToolTipsginekologi["English"]["rwyt_imunisasi"] = "";
	$placeHoldersginekologi["English"]["rwyt_imunisasi"] = "";
	$fieldLabelsginekologi["English"]["rwyt_kb"] = "Rwyt Kb";
	$fieldToolTipsginekologi["English"]["rwyt_kb"] = "";
	$placeHoldersginekologi["English"]["rwyt_kb"] = "";
	$fieldLabelsginekologi["English"]["ku"] = "Ku";
	$fieldToolTipsginekologi["English"]["ku"] = "";
	$placeHoldersginekologi["English"]["ku"] = "";
	$fieldLabelsginekologi["English"]["gcs"] = "Gcs";
	$fieldToolTipsginekologi["English"]["gcs"] = "";
	$placeHoldersginekologi["English"]["gcs"] = "";
	$fieldLabelsginekologi["English"]["tb"] = "Tb";
	$fieldToolTipsginekologi["English"]["tb"] = "";
	$placeHoldersginekologi["English"]["tb"] = "";
	$fieldLabelsginekologi["English"]["bb"] = "Bb";
	$fieldToolTipsginekologi["English"]["bb"] = "";
	$placeHoldersginekologi["English"]["bb"] = "";
	$fieldLabelsginekologi["English"]["lila"] = "Lila";
	$fieldToolTipsginekologi["English"]["lila"] = "";
	$placeHoldersginekologi["English"]["lila"] = "";
	$fieldLabelsginekologi["English"]["TD"] = "TD";
	$fieldToolTipsginekologi["English"]["TD"] = "";
	$placeHoldersginekologi["English"]["TD"] = "";
	$fieldLabelsginekologi["English"]["nadi"] = "Nadi";
	$fieldToolTipsginekologi["English"]["nadi"] = "";
	$placeHoldersginekologi["English"]["nadi"] = "";
	$fieldLabelsginekologi["English"]["respi"] = "Respi";
	$fieldToolTipsginekologi["English"]["respi"] = "";
	$placeHoldersginekologi["English"]["respi"] = "";
	$fieldLabelsginekologi["English"]["temp"] = "Temp";
	$fieldToolTipsginekologi["English"]["temp"] = "";
	$placeHoldersginekologi["English"]["temp"] = "";
	$fieldLabelsginekologi["English"]["kepala"] = "Kepala";
	$fieldToolTipsginekologi["English"]["kepala"] = "";
	$placeHoldersginekologi["English"]["kepala"] = "";
	$fieldLabelsginekologi["English"]["leher"] = "Leher";
	$fieldToolTipsginekologi["English"]["leher"] = "";
	$placeHoldersginekologi["English"]["leher"] = "";
	$fieldLabelsginekologi["English"]["thorax"] = "Thorax";
	$fieldToolTipsginekologi["English"]["thorax"] = "";
	$placeHoldersginekologi["English"]["thorax"] = "";
	$fieldLabelsginekologi["English"]["abdomen"] = "Abdomen";
	$fieldToolTipsginekologi["English"]["abdomen"] = "";
	$placeHoldersginekologi["English"]["abdomen"] = "";
	$fieldLabelsginekologi["English"]["ekstremitas"] = "Ekstremitas";
	$fieldToolTipsginekologi["English"]["ekstremitas"] = "";
	$placeHoldersginekologi["English"]["ekstremitas"] = "";
	$fieldLabelsginekologi["English"]["genital_ekterna"] = "Genital Ekterna";
	$fieldToolTipsginekologi["English"]["genital_ekterna"] = "";
	$placeHoldersginekologi["English"]["genital_ekterna"] = "";
	$fieldLabelsginekologi["English"]["dnding_vagina_genital_interna"] = "Dnding Vagina Genital Interna";
	$fieldToolTipsginekologi["English"]["dnding_vagina_genital_interna"] = "";
	$placeHoldersginekologi["English"]["dnding_vagina_genital_interna"] = "";
	$fieldLabelsginekologi["English"]["porsio"] = "Porsio";
	$fieldToolTipsginekologi["English"]["porsio"] = "";
	$placeHoldersginekologi["English"]["porsio"] = "";
	$fieldLabelsginekologi["English"]["kavum_doglasi"] = "Kavum Doglasi";
	$fieldToolTipsginekologi["English"]["kavum_doglasi"] = "";
	$placeHoldersginekologi["English"]["kavum_doglasi"] = "";
	$fieldLabelsginekologi["English"]["korpus_uteri"] = "Korpus Uteri";
	$fieldToolTipsginekologi["English"]["korpus_uteri"] = "";
	$placeHoldersginekologi["English"]["korpus_uteri"] = "";
	$fieldLabelsginekologi["English"]["adneksa_parametrium"] = "Adneksa Parametrium";
	$fieldToolTipsginekologi["English"]["adneksa_parametrium"] = "";
	$placeHoldersginekologi["English"]["adneksa_parametrium"] = "";
	$fieldLabelsginekologi["English"]["dnding_vagina_spekulum"] = "Dnding Vagina Spekulum";
	$fieldToolTipsginekologi["English"]["dnding_vagina_spekulum"] = "";
	$placeHoldersginekologi["English"]["dnding_vagina_spekulum"] = "";
	$fieldLabelsginekologi["English"]["cerviks_spekulum"] = "Cerviks Spekulum";
	$fieldToolTipsginekologi["English"]["cerviks_spekulum"] = "";
	$placeHoldersginekologi["English"]["cerviks_spekulum"] = "";
	$fieldLabelsginekologi["English"]["pmrksaan_pnunjang"] = "Pmrksaan Pnunjang";
	$fieldToolTipsginekologi["English"]["pmrksaan_pnunjang"] = "";
	$placeHoldersginekologi["English"]["pmrksaan_pnunjang"] = "";
	$fieldLabelsginekologi["English"]["diagnosis"] = "Diagnosis";
	$fieldToolTipsginekologi["English"]["diagnosis"] = "";
	$placeHoldersginekologi["English"]["diagnosis"] = "";
	$fieldLabelsginekologi["English"]["usul_pmrksaan"] = "Usul Pmrksaan";
	$fieldToolTipsginekologi["English"]["usul_pmrksaan"] = "";
	$placeHoldersginekologi["English"]["usul_pmrksaan"] = "";
	$fieldLabelsginekologi["English"]["konseling"] = "Konseling";
	$fieldToolTipsginekologi["English"]["konseling"] = "";
	$placeHoldersginekologi["English"]["konseling"] = "";
	$fieldLabelsginekologi["English"]["id_mhs"] = "Id User";
	$fieldToolTipsginekologi["English"]["id_mhs"] = "";
	$placeHoldersginekologi["English"]["id_mhs"] = "";
	$fieldLabelsginekologi["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsginekologi["English"]["id_pasien"] = "";
	$placeHoldersginekologi["English"]["id_pasien"] = "";
	$fieldLabelsginekologi["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipsginekologi["English"]["Nomor_Rm"] = "";
	$placeHoldersginekologi["English"]["Nomor_Rm"] = "";
	$fieldLabelsginekologi["English"]["id_gine"] = "Id Gine";
	$fieldToolTipsginekologi["English"]["id_gine"] = "";
	$placeHoldersginekologi["English"]["id_gine"] = "";
	if (count($fieldToolTipsginekologi["English"]))
		$tdataginekologi[".isUseToolTips"] = true;
}


	$tdataginekologi[".NCSearch"] = true;



$tdataginekologi[".shortTableName"] = "ginekologi";
$tdataginekologi[".nSecOptions"] = 0;

$tdataginekologi[".mainTableOwnerID"] = "";
$tdataginekologi[".entityType"] = 0;
$tdataginekologi[".connId"] = "newrm_at_localhost";


$tdataginekologi[".strOriginalTableName"] = "ginekologi";

	



$tdataginekologi[".showAddInPopup"] = false;

$tdataginekologi[".showEditInPopup"] = false;

$tdataginekologi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataginekologi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataginekologi[".listAjax"] = false;
//	temporary
$tdataginekologi[".listAjax"] = false;

	$tdataginekologi[".audit"] = false;

	$tdataginekologi[".locking"] = false;


$pages = $tdataginekologi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataginekologi[".edit"] = true;
	$tdataginekologi[".afterEditAction"] = 1;
	$tdataginekologi[".closePopupAfterEdit"] = 1;
	$tdataginekologi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataginekologi[".add"] = true;
$tdataginekologi[".afterAddAction"] = 1;
$tdataginekologi[".closePopupAfterAdd"] = 1;
$tdataginekologi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataginekologi[".list"] = true;
}



$tdataginekologi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataginekologi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataginekologi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataginekologi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataginekologi[".printFriendly"] = true;
}



$tdataginekologi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataginekologi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataginekologi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataginekologi[".isUseAjaxSuggest"] = true;

$tdataginekologi[".rowHighlite"] = true;





$tdataginekologi[".ajaxCodeSnippetAdded"] = false;

$tdataginekologi[".buttonsAdded"] = false;

$tdataginekologi[".addPageEvents"] = false;

// use timepicker for search panel
$tdataginekologi[".isUseTimeForSearch"] = false;


$tdataginekologi[".badgeColor"] = "6da5c8";


$tdataginekologi[".allSearchFields"] = array();
$tdataginekologi[".filterFields"] = array();
$tdataginekologi[".requiredSearchFields"] = array();

$tdataginekologi[".googleLikeFields"] = array();
$tdataginekologi[".googleLikeFields"][] = "id_gine";
$tdataginekologi[".googleLikeFields"][] = "keluhan_pertama";
$tdataginekologi[".googleLikeFields"][] = "keluhan_tmbhan";
$tdataginekologi[".googleLikeFields"][] = "rwyt_skrg";
$tdataginekologi[".googleLikeFields"][] = "rwyt_dulu";
$tdataginekologi[".googleLikeFields"][] = "rwyt_klg";
$tdataginekologi[".googleLikeFields"][] = "rwyt_alergi";
$tdataginekologi[".googleLikeFields"][] = "rwyt_pengobatan";
$tdataginekologi[".googleLikeFields"][] = "rwyt_kebiasaan";
$tdataginekologi[".googleLikeFields"][] = "rwyt_haid";
$tdataginekologi[".googleLikeFields"][] = "rwyt_nikah";
$tdataginekologi[".googleLikeFields"][] = "rwyt_sos";
$tdataginekologi[".googleLikeFields"][] = "rwyt_prsalinan_satu";
$tdataginekologi[".googleLikeFields"][] = "rwyt_prsalinan_dua";
$tdataginekologi[".googleLikeFields"][] = "rwyt_prsalinan_tiga";
$tdataginekologi[".googleLikeFields"][] = "rwyt_prsalinan_empat";
$tdataginekologi[".googleLikeFields"][] = "rwyt_mnyusui";
$tdataginekologi[".googleLikeFields"][] = "rwyt_imunisasi";
$tdataginekologi[".googleLikeFields"][] = "rwyt_kb";
$tdataginekologi[".googleLikeFields"][] = "ku";
$tdataginekologi[".googleLikeFields"][] = "gcs";
$tdataginekologi[".googleLikeFields"][] = "tb";
$tdataginekologi[".googleLikeFields"][] = "bb";
$tdataginekologi[".googleLikeFields"][] = "lila";
$tdataginekologi[".googleLikeFields"][] = "TD";
$tdataginekologi[".googleLikeFields"][] = "nadi";
$tdataginekologi[".googleLikeFields"][] = "respi";
$tdataginekologi[".googleLikeFields"][] = "temp";
$tdataginekologi[".googleLikeFields"][] = "kepala";
$tdataginekologi[".googleLikeFields"][] = "leher";
$tdataginekologi[".googleLikeFields"][] = "thorax";
$tdataginekologi[".googleLikeFields"][] = "abdomen";
$tdataginekologi[".googleLikeFields"][] = "ekstremitas";
$tdataginekologi[".googleLikeFields"][] = "genital_ekterna";
$tdataginekologi[".googleLikeFields"][] = "dnding_vagina_genital_interna";
$tdataginekologi[".googleLikeFields"][] = "porsio";
$tdataginekologi[".googleLikeFields"][] = "kavum_doglasi";
$tdataginekologi[".googleLikeFields"][] = "korpus_uteri";
$tdataginekologi[".googleLikeFields"][] = "adneksa_parametrium";
$tdataginekologi[".googleLikeFields"][] = "dnding_vagina_spekulum";
$tdataginekologi[".googleLikeFields"][] = "cerviks_spekulum";
$tdataginekologi[".googleLikeFields"][] = "pmrksaan_pnunjang";
$tdataginekologi[".googleLikeFields"][] = "diagnosis";
$tdataginekologi[".googleLikeFields"][] = "usul_pmrksaan";
$tdataginekologi[".googleLikeFields"][] = "konseling";
$tdataginekologi[".googleLikeFields"][] = "id_mhs";
$tdataginekologi[".googleLikeFields"][] = "id_pasien";
$tdataginekologi[".googleLikeFields"][] = "Nomor_Rm";



$tdataginekologi[".tableType"] = "list";

$tdataginekologi[".printerPageOrientation"] = 0;
$tdataginekologi[".nPrinterPageScale"] = 100;

$tdataginekologi[".nPrinterSplitRecords"] = 40;

$tdataginekologi[".geocodingEnabled"] = false;










$tdataginekologi[".pageSize"] = 20;

$tdataginekologi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataginekologi[".strOrderBy"] = $tstrOrderBy;

$tdataginekologi[".orderindexes"] = array();


$tdataginekologi[".sqlHead"] = "SELECT id_gine,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_klg,  	rwyt_alergi,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	rwyt_haid,  	rwyt_nikah,  	rwyt_sos,  	rwyt_prsalinan_satu,  	rwyt_prsalinan_dua,  	rwyt_prsalinan_tiga,  	rwyt_prsalinan_empat,  	rwyt_mnyusui,  	rwyt_imunisasi,  	rwyt_kb,  	ku,  	gcs,  	tb,  	bb,  	lila,  	TD,  	nadi,  	respi,  	temp,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	genital_ekterna,  	dnding_vagina_genital_interna,  	porsio,  	kavum_doglasi,  	korpus_uteri,  	adneksa_parametrium,  	dnding_vagina_spekulum,  	cerviks_spekulum,  	pmrksaan_pnunjang,  	diagnosis,  	usul_pmrksaan,  	konseling,  	id_mhs,  	id_pasien,  	Nomor_Rm";
$tdataginekologi[".sqlFrom"] = "FROM ginekologi";
$tdataginekologi[".sqlWhereExpr"] = "";
$tdataginekologi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataginekologi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataginekologi[".arrGroupsPerPage"] = $arrGPP;

$tdataginekologi[".highlightSearchResults"] = true;

$tableKeysginekologi = array();
$tdataginekologi[".Keys"] = $tableKeysginekologi;


$tdataginekologi[".hideMobileList"] = array();




//	id_gine
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_gine";
	$fdata["GoodName"] = "id_gine";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","id_gine");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_gine";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_gine";

	
	
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


	$tdataginekologi["id_gine"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "id_gine";
//	keluhan_pertama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "keluhan_pertama";
	$fdata["GoodName"] = "keluhan_pertama";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","keluhan_pertama");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["keluhan_pertama"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "keluhan_pertama";
//	keluhan_tmbhan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "keluhan_tmbhan";
	$fdata["GoodName"] = "keluhan_tmbhan";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","keluhan_tmbhan");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["keluhan_tmbhan"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "keluhan_tmbhan";
//	rwyt_skrg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rwyt_skrg";
	$fdata["GoodName"] = "rwyt_skrg";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_skrg");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_skrg"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_skrg";
//	rwyt_dulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rwyt_dulu";
	$fdata["GoodName"] = "rwyt_dulu";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_dulu");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_dulu"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_dulu";
//	rwyt_klg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rwyt_klg";
	$fdata["GoodName"] = "rwyt_klg";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_klg");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_klg"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_klg";
//	rwyt_alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rwyt_alergi";
	$fdata["GoodName"] = "rwyt_alergi";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_alergi");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_alergi"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_alergi";
//	rwyt_pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rwyt_pengobatan";
	$fdata["GoodName"] = "rwyt_pengobatan";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_pengobatan");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_pengobatan"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_pengobatan";
//	rwyt_kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rwyt_kebiasaan";
	$fdata["GoodName"] = "rwyt_kebiasaan";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_kebiasaan");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_kebiasaan"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_kebiasaan";
//	rwyt_haid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rwyt_haid";
	$fdata["GoodName"] = "rwyt_haid";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_haid");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_haid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_haid";

	
	
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


	$tdataginekologi["rwyt_haid"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_haid";
//	rwyt_nikah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rwyt_nikah";
	$fdata["GoodName"] = "rwyt_nikah";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_nikah");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_nikah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_nikah";

	
	
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


	$tdataginekologi["rwyt_nikah"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_nikah";
//	rwyt_sos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "rwyt_sos";
	$fdata["GoodName"] = "rwyt_sos";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_sos");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_sos"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_sos";
//	rwyt_prsalinan_satu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "rwyt_prsalinan_satu";
	$fdata["GoodName"] = "rwyt_prsalinan_satu";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_prsalinan_satu");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_prsalinan_satu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_prsalinan_satu";

	
	
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


	$tdataginekologi["rwyt_prsalinan_satu"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_prsalinan_satu";
//	rwyt_prsalinan_dua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "rwyt_prsalinan_dua";
	$fdata["GoodName"] = "rwyt_prsalinan_dua";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_prsalinan_dua");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_prsalinan_dua";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_prsalinan_dua";

	
	
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


	$tdataginekologi["rwyt_prsalinan_dua"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_prsalinan_dua";
//	rwyt_prsalinan_tiga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "rwyt_prsalinan_tiga";
	$fdata["GoodName"] = "rwyt_prsalinan_tiga";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_prsalinan_tiga");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_prsalinan_tiga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_prsalinan_tiga";

	
	
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


	$tdataginekologi["rwyt_prsalinan_tiga"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_prsalinan_tiga";
//	rwyt_prsalinan_empat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "rwyt_prsalinan_empat";
	$fdata["GoodName"] = "rwyt_prsalinan_empat";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_prsalinan_empat");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_prsalinan_empat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_prsalinan_empat";

	
	
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


	$tdataginekologi["rwyt_prsalinan_empat"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_prsalinan_empat";
//	rwyt_mnyusui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "rwyt_mnyusui";
	$fdata["GoodName"] = "rwyt_mnyusui";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_mnyusui");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_mnyusui";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_mnyusui";

	
	
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


	$tdataginekologi["rwyt_mnyusui"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_mnyusui";
//	rwyt_imunisasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "rwyt_imunisasi";
	$fdata["GoodName"] = "rwyt_imunisasi";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_imunisasi");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["rwyt_imunisasi"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_imunisasi";
//	rwyt_kb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "rwyt_kb";
	$fdata["GoodName"] = "rwyt_kb";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","rwyt_kb");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rwyt_kb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rwyt_kb";

	
	
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


	$tdataginekologi["rwyt_kb"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "rwyt_kb";
//	ku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ku";
	$fdata["GoodName"] = "ku";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","ku");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ku";

	
	
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


	$tdataginekologi["ku"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "ku";
//	gcs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "gcs";
	$fdata["GoodName"] = "gcs";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","gcs");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "gcs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gcs";

	
	
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


	$tdataginekologi["gcs"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "gcs";
//	tb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "tb";
	$fdata["GoodName"] = "tb";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","tb");
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


	$tdataginekologi["tb"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "tb";
//	bb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "bb";
	$fdata["GoodName"] = "bb";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","bb");
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


	$tdataginekologi["bb"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "bb";
//	lila
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "lila";
	$fdata["GoodName"] = "lila";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","lila");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "lila";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lila";

	
	
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


	$tdataginekologi["lila"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "lila";
//	TD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "TD";
	$fdata["GoodName"] = "TD";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","TD");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TD";

	
	
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


	$tdataginekologi["TD"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "TD";
//	nadi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nadi";
	$fdata["GoodName"] = "nadi";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","nadi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nadi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nadi";

	
	
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


	$tdataginekologi["nadi"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "nadi";
//	respi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "respi";
	$fdata["GoodName"] = "respi";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","respi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "respi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "respi";

	
	
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


	$tdataginekologi["respi"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "respi";
//	temp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "temp";
	$fdata["GoodName"] = "temp";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","temp");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "temp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "temp";

	
	
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


	$tdataginekologi["temp"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "temp";
//	kepala
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "kepala";
	$fdata["GoodName"] = "kepala";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","kepala");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["kepala"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "kepala";
//	leher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "leher";
	$fdata["GoodName"] = "leher";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","leher");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["leher"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "leher";
//	thorax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "thorax";
	$fdata["GoodName"] = "thorax";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","thorax");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["thorax"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "thorax";
//	abdomen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "abdomen";
	$fdata["GoodName"] = "abdomen";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","abdomen");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["abdomen"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "abdomen";
//	ekstremitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ekstremitas";
	$fdata["GoodName"] = "ekstremitas";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","ekstremitas");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdataginekologi["ekstremitas"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "ekstremitas";
//	genital_ekterna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "genital_ekterna";
	$fdata["GoodName"] = "genital_ekterna";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","genital_ekterna");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "genital_ekterna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "genital_ekterna";

	
	
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


	$tdataginekologi["genital_ekterna"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "genital_ekterna";
//	dnding_vagina_genital_interna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "dnding_vagina_genital_interna";
	$fdata["GoodName"] = "dnding_vagina_genital_interna";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","dnding_vagina_genital_interna");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dnding_vagina_genital_interna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dnding_vagina_genital_interna";

	
	
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


	$tdataginekologi["dnding_vagina_genital_interna"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "dnding_vagina_genital_interna";
//	porsio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "porsio";
	$fdata["GoodName"] = "porsio";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","porsio");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "porsio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "porsio";

	
	
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


	$tdataginekologi["porsio"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "porsio";
//	kavum_doglasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "kavum_doglasi";
	$fdata["GoodName"] = "kavum_doglasi";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","kavum_doglasi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "kavum_doglasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kavum_doglasi";

	
	
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


	$tdataginekologi["kavum_doglasi"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "kavum_doglasi";
//	korpus_uteri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "korpus_uteri";
	$fdata["GoodName"] = "korpus_uteri";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","korpus_uteri");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "korpus_uteri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "korpus_uteri";

	
	
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


	$tdataginekologi["korpus_uteri"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "korpus_uteri";
//	adneksa_parametrium
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "adneksa_parametrium";
	$fdata["GoodName"] = "adneksa_parametrium";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","adneksa_parametrium");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "adneksa_parametrium";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "adneksa_parametrium";

	
	
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


	$tdataginekologi["adneksa_parametrium"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "adneksa_parametrium";
//	dnding_vagina_spekulum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "dnding_vagina_spekulum";
	$fdata["GoodName"] = "dnding_vagina_spekulum";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","dnding_vagina_spekulum");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "dnding_vagina_spekulum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dnding_vagina_spekulum";

	
	
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


	$tdataginekologi["dnding_vagina_spekulum"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "dnding_vagina_spekulum";
//	cerviks_spekulum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "cerviks_spekulum";
	$fdata["GoodName"] = "cerviks_spekulum";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","cerviks_spekulum");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cerviks_spekulum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cerviks_spekulum";

	
	
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


	$tdataginekologi["cerviks_spekulum"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "cerviks_spekulum";
//	pmrksaan_pnunjang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "pmrksaan_pnunjang";
	$fdata["GoodName"] = "pmrksaan_pnunjang";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","pmrksaan_pnunjang");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pmrksaan_pnunjang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmrksaan_pnunjang";

	
	
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


	$tdataginekologi["pmrksaan_pnunjang"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "pmrksaan_pnunjang";
//	diagnosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "diagnosis";
	$fdata["GoodName"] = "diagnosis";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","diagnosis");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "diagnosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosis";

	
	
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


	$tdataginekologi["diagnosis"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "diagnosis";
//	usul_pmrksaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "usul_pmrksaan";
	$fdata["GoodName"] = "usul_pmrksaan";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","usul_pmrksaan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "usul_pmrksaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usul_pmrksaan";

	
	
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


	$tdataginekologi["usul_pmrksaan"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "usul_pmrksaan";
//	konseling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "konseling";
	$fdata["GoodName"] = "konseling";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","konseling");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "konseling";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "konseling";

	
	
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


	$tdataginekologi["konseling"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "konseling";
//	id_mhs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "id_mhs";
	$fdata["GoodName"] = "id_mhs";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","id_mhs");
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


	$tdataginekologi["id_mhs"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "id_mhs";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","id_pasien");
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


	$tdataginekologi["id_pasien"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "id_pasien";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "ginekologi";
	$fdata["Label"] = GetFieldLabel("ginekologi","Nomor_Rm");
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


	$tdataginekologi["Nomor_Rm"] = $fdata;
		$tdataginekologi[".searchableFields"][] = "Nomor_Rm";


$tables_data["ginekologi"]=&$tdataginekologi;
$field_labels["ginekologi"] = &$fieldLabelsginekologi;
$fieldToolTips["ginekologi"] = &$fieldToolTipsginekologi;
$placeHolders["ginekologi"] = &$placeHoldersginekologi;
$page_titles["ginekologi"] = &$pageTitlesginekologi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ginekologi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ginekologi"] = array();



	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ginekologi"][0] = $masterParams;
				$masterTablesData["ginekologi"][0]["masterKeys"] = array();
	$masterTablesData["ginekologi"][0]["masterKeys"][]="id";
				$masterTablesData["ginekologi"][0]["detailKeys"] = array();
	$masterTablesData["ginekologi"][0]["detailKeys"][]="id_mhs";
		
	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["ginekologi"][1] = $masterParams;
				$masterTablesData["ginekologi"][1]["masterKeys"] = array();
	$masterTablesData["ginekologi"][1]["masterKeys"][]="Id_Pasien";
				$masterTablesData["ginekologi"][1]["detailKeys"] = array();
	$masterTablesData["ginekologi"][1]["detailKeys"][]="id_pasien";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ginekologi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_gine,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_klg,  	rwyt_alergi,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	rwyt_haid,  	rwyt_nikah,  	rwyt_sos,  	rwyt_prsalinan_satu,  	rwyt_prsalinan_dua,  	rwyt_prsalinan_tiga,  	rwyt_prsalinan_empat,  	rwyt_mnyusui,  	rwyt_imunisasi,  	rwyt_kb,  	ku,  	gcs,  	tb,  	bb,  	lila,  	TD,  	nadi,  	respi,  	temp,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	genital_ekterna,  	dnding_vagina_genital_interna,  	porsio,  	kavum_doglasi,  	korpus_uteri,  	adneksa_parametrium,  	dnding_vagina_spekulum,  	cerviks_spekulum,  	pmrksaan_pnunjang,  	diagnosis,  	usul_pmrksaan,  	konseling,  	id_mhs,  	id_pasien,  	Nomor_Rm";
$proto0["m_strFrom"] = "FROM ginekologi";
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
	"m_strName" => "id_gine",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto6["m_sql"] = "id_gine";
$proto6["m_srcTableName"] = "ginekologi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_pertama",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto8["m_sql"] = "keluhan_pertama";
$proto8["m_srcTableName"] = "ginekologi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_tmbhan",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto10["m_sql"] = "keluhan_tmbhan";
$proto10["m_srcTableName"] = "ginekologi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_skrg",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto12["m_sql"] = "rwyt_skrg";
$proto12["m_srcTableName"] = "ginekologi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_dulu",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto14["m_sql"] = "rwyt_dulu";
$proto14["m_srcTableName"] = "ginekologi";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_klg",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto16["m_sql"] = "rwyt_klg";
$proto16["m_srcTableName"] = "ginekologi";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_alergi",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto18["m_sql"] = "rwyt_alergi";
$proto18["m_srcTableName"] = "ginekologi";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_pengobatan",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto20["m_sql"] = "rwyt_pengobatan";
$proto20["m_srcTableName"] = "ginekologi";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_kebiasaan",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto22["m_sql"] = "rwyt_kebiasaan";
$proto22["m_srcTableName"] = "ginekologi";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_haid",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto24["m_sql"] = "rwyt_haid";
$proto24["m_srcTableName"] = "ginekologi";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_nikah",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto26["m_sql"] = "rwyt_nikah";
$proto26["m_srcTableName"] = "ginekologi";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_sos",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto28["m_sql"] = "rwyt_sos";
$proto28["m_srcTableName"] = "ginekologi";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_prsalinan_satu",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto30["m_sql"] = "rwyt_prsalinan_satu";
$proto30["m_srcTableName"] = "ginekologi";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_prsalinan_dua",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto32["m_sql"] = "rwyt_prsalinan_dua";
$proto32["m_srcTableName"] = "ginekologi";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_prsalinan_tiga",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto34["m_sql"] = "rwyt_prsalinan_tiga";
$proto34["m_srcTableName"] = "ginekologi";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_prsalinan_empat",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto36["m_sql"] = "rwyt_prsalinan_empat";
$proto36["m_srcTableName"] = "ginekologi";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_mnyusui",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto38["m_sql"] = "rwyt_mnyusui";
$proto38["m_srcTableName"] = "ginekologi";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_imunisasi",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto40["m_sql"] = "rwyt_imunisasi";
$proto40["m_srcTableName"] = "ginekologi";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_kb",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto42["m_sql"] = "rwyt_kb";
$proto42["m_srcTableName"] = "ginekologi";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ku",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto44["m_sql"] = "ku";
$proto44["m_srcTableName"] = "ginekologi";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "gcs",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto46["m_sql"] = "gcs";
$proto46["m_srcTableName"] = "ginekologi";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "tb",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto48["m_sql"] = "tb";
$proto48["m_srcTableName"] = "ginekologi";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "bb",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto50["m_sql"] = "bb";
$proto50["m_srcTableName"] = "ginekologi";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "lila",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto52["m_sql"] = "lila";
$proto52["m_srcTableName"] = "ginekologi";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "TD",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto54["m_sql"] = "TD";
$proto54["m_srcTableName"] = "ginekologi";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "nadi",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto56["m_sql"] = "nadi";
$proto56["m_srcTableName"] = "ginekologi";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "respi",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto58["m_sql"] = "respi";
$proto58["m_srcTableName"] = "ginekologi";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "temp",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto60["m_sql"] = "temp";
$proto60["m_srcTableName"] = "ginekologi";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "kepala",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto62["m_sql"] = "kepala";
$proto62["m_srcTableName"] = "ginekologi";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "leher",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto64["m_sql"] = "leher";
$proto64["m_srcTableName"] = "ginekologi";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "thorax",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto66["m_sql"] = "thorax";
$proto66["m_srcTableName"] = "ginekologi";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "abdomen",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto68["m_sql"] = "abdomen";
$proto68["m_srcTableName"] = "ginekologi";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ekstremitas",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto70["m_sql"] = "ekstremitas";
$proto70["m_srcTableName"] = "ginekologi";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "genital_ekterna",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto72["m_sql"] = "genital_ekterna";
$proto72["m_srcTableName"] = "ginekologi";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "dnding_vagina_genital_interna",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto74["m_sql"] = "dnding_vagina_genital_interna";
$proto74["m_srcTableName"] = "ginekologi";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "porsio",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto76["m_sql"] = "porsio";
$proto76["m_srcTableName"] = "ginekologi";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "kavum_doglasi",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto78["m_sql"] = "kavum_doglasi";
$proto78["m_srcTableName"] = "ginekologi";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "korpus_uteri",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto80["m_sql"] = "korpus_uteri";
$proto80["m_srcTableName"] = "ginekologi";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "adneksa_parametrium",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto82["m_sql"] = "adneksa_parametrium";
$proto82["m_srcTableName"] = "ginekologi";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "dnding_vagina_spekulum",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto84["m_sql"] = "dnding_vagina_spekulum";
$proto84["m_srcTableName"] = "ginekologi";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "cerviks_spekulum",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto86["m_sql"] = "cerviks_spekulum";
$proto86["m_srcTableName"] = "ginekologi";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_pnunjang",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto88["m_sql"] = "pmrksaan_pnunjang";
$proto88["m_srcTableName"] = "ginekologi";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosis",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto90["m_sql"] = "diagnosis";
$proto90["m_srcTableName"] = "ginekologi";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "usul_pmrksaan",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto92["m_sql"] = "usul_pmrksaan";
$proto92["m_srcTableName"] = "ginekologi";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "konseling",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto94["m_sql"] = "konseling";
$proto94["m_srcTableName"] = "ginekologi";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mhs",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto96["m_sql"] = "id_mhs";
$proto96["m_srcTableName"] = "ginekologi";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto98["m_sql"] = "id_pasien";
$proto98["m_srcTableName"] = "ginekologi";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "ginekologi",
	"m_srcTableName" => "ginekologi"
));

$proto100["m_sql"] = "Nomor_Rm";
$proto100["m_srcTableName"] = "ginekologi";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "ginekologi";
$proto103["m_srcTableName"] = "ginekologi";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "id_gine";
$proto103["m_columns"][] = "keluhan_pertama";
$proto103["m_columns"][] = "keluhan_tmbhan";
$proto103["m_columns"][] = "rwyt_skrg";
$proto103["m_columns"][] = "rwyt_dulu";
$proto103["m_columns"][] = "rwyt_klg";
$proto103["m_columns"][] = "rwyt_alergi";
$proto103["m_columns"][] = "rwyt_pengobatan";
$proto103["m_columns"][] = "rwyt_kebiasaan";
$proto103["m_columns"][] = "rwyt_haid";
$proto103["m_columns"][] = "rwyt_nikah";
$proto103["m_columns"][] = "rwyt_sos";
$proto103["m_columns"][] = "rwyt_prsalinan_satu";
$proto103["m_columns"][] = "rwyt_prsalinan_dua";
$proto103["m_columns"][] = "rwyt_prsalinan_tiga";
$proto103["m_columns"][] = "rwyt_prsalinan_empat";
$proto103["m_columns"][] = "rwyt_mnyusui";
$proto103["m_columns"][] = "rwyt_imunisasi";
$proto103["m_columns"][] = "rwyt_kb";
$proto103["m_columns"][] = "ku";
$proto103["m_columns"][] = "gcs";
$proto103["m_columns"][] = "tb";
$proto103["m_columns"][] = "bb";
$proto103["m_columns"][] = "lila";
$proto103["m_columns"][] = "TD";
$proto103["m_columns"][] = "nadi";
$proto103["m_columns"][] = "respi";
$proto103["m_columns"][] = "temp";
$proto103["m_columns"][] = "kepala";
$proto103["m_columns"][] = "leher";
$proto103["m_columns"][] = "thorax";
$proto103["m_columns"][] = "abdomen";
$proto103["m_columns"][] = "ekstremitas";
$proto103["m_columns"][] = "genital_ekterna";
$proto103["m_columns"][] = "dnding_vagina_genital_interna";
$proto103["m_columns"][] = "porsio";
$proto103["m_columns"][] = "kavum_doglasi";
$proto103["m_columns"][] = "korpus_uteri";
$proto103["m_columns"][] = "adneksa_parametrium";
$proto103["m_columns"][] = "dnding_vagina_spekulum";
$proto103["m_columns"][] = "cerviks_spekulum";
$proto103["m_columns"][] = "pmrksaan_pnunjang";
$proto103["m_columns"][] = "diagnosis";
$proto103["m_columns"][] = "usul_pmrksaan";
$proto103["m_columns"][] = "konseling";
$proto103["m_columns"][] = "id_mhs";
$proto103["m_columns"][] = "id_pasien";
$proto103["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "ginekologi";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "ginekologi";
$proto104=array();
$proto104["m_sql"] = "";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ginekologi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ginekologi = createSqlQuery_ginekologi();


	
		;

																																																

$tdataginekologi[".sqlquery"] = $queryData_ginekologi;



$tableEvents["ginekologi"] = new eventsBase;
$tdataginekologi[".hasEvents"] = false;

?>