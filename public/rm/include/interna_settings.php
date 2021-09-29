<?php
$tdatainterna = array();
$tdatainterna[".searchableFields"] = array();
$tdatainterna[".ShortName"] = "interna";
$tdatainterna[".OwnerID"] = "";
$tdatainterna[".OriginalTable"] = "interna";


$tdatainterna[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainterna[".originalPagesByType"] = $tdatainterna[".pagesByType"];
$tdatainterna[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainterna[".originalPages"] = $tdatainterna[".pages"];
$tdatainterna[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainterna[".originalDefaultPages"] = $tdatainterna[".defaultPages"];

//	field labels
$fieldLabelsinterna = array();
$fieldToolTipsinterna = array();
$pageTitlesinterna = array();
$placeHoldersinterna = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinterna["English"] = array();
	$fieldToolTipsinterna["English"] = array();
	$placeHoldersinterna["English"] = array();
	$pageTitlesinterna["English"] = array();
	$fieldLabelsinterna["English"]["id_interna"] = "Id Interna";
	$fieldToolTipsinterna["English"]["id_interna"] = "";
	$placeHoldersinterna["English"]["id_interna"] = "";
	$fieldLabelsinterna["English"]["keluhan_pertama"] = "Keluhan Pertama";
	$fieldToolTipsinterna["English"]["keluhan_pertama"] = "";
	$placeHoldersinterna["English"]["keluhan_pertama"] = "";
	$fieldLabelsinterna["English"]["keluhan_tmbhan"] = "Keluhan Tmbhan";
	$fieldToolTipsinterna["English"]["keluhan_tmbhan"] = "";
	$placeHoldersinterna["English"]["keluhan_tmbhan"] = "";
	$fieldLabelsinterna["English"]["rwyt_skrg"] = "Rwyt Skrg";
	$fieldToolTipsinterna["English"]["rwyt_skrg"] = "";
	$placeHoldersinterna["English"]["rwyt_skrg"] = "";
	$fieldLabelsinterna["English"]["rwyt_dulu"] = "Rwyt Dulu";
	$fieldToolTipsinterna["English"]["rwyt_dulu"] = "";
	$placeHoldersinterna["English"]["rwyt_dulu"] = "";
	$fieldLabelsinterna["English"]["rwyt_klg"] = "Rwyt Klg";
	$fieldToolTipsinterna["English"]["rwyt_klg"] = "";
	$placeHoldersinterna["English"]["rwyt_klg"] = "";
	$fieldLabelsinterna["English"]["rwyt_alergi"] = "Rwyt Alergi";
	$fieldToolTipsinterna["English"]["rwyt_alergi"] = "";
	$placeHoldersinterna["English"]["rwyt_alergi"] = "";
	$fieldLabelsinterna["English"]["rwyt_pengobatan"] = "Rwyt Pengobatan";
	$fieldToolTipsinterna["English"]["rwyt_pengobatan"] = "";
	$placeHoldersinterna["English"]["rwyt_pengobatan"] = "";
	$fieldLabelsinterna["English"]["rwyt_kebiasaan"] = "Rwyt Kebiasaan";
	$fieldToolTipsinterna["English"]["rwyt_kebiasaan"] = "";
	$placeHoldersinterna["English"]["rwyt_kebiasaan"] = "";
	$fieldLabelsinterna["English"]["rwyt_sos"] = "Rwyt Sos";
	$fieldToolTipsinterna["English"]["rwyt_sos"] = "";
	$placeHoldersinterna["English"]["rwyt_sos"] = "";
	$fieldLabelsinterna["English"]["pem_umum_ku"] = "Pem Umum Ku";
	$fieldToolTipsinterna["English"]["pem_umum_ku"] = "";
	$placeHoldersinterna["English"]["pem_umum_ku"] = "";
	$fieldLabelsinterna["English"]["pem_umum_tb"] = "Pem Umum Tb";
	$fieldToolTipsinterna["English"]["pem_umum_tb"] = "";
	$placeHoldersinterna["English"]["pem_umum_tb"] = "";
	$fieldLabelsinterna["English"]["pem_umum_bb"] = "Pem Umum Bb";
	$fieldToolTipsinterna["English"]["pem_umum_bb"] = "";
	$placeHoldersinterna["English"]["pem_umum_bb"] = "";
	$fieldLabelsinterna["English"]["pem_umum_imt"] = "Pem Umum Imt";
	$fieldToolTipsinterna["English"]["pem_umum_imt"] = "";
	$placeHoldersinterna["English"]["pem_umum_imt"] = "";
	$fieldLabelsinterna["English"]["tanda_vital"] = "Tanda Vital";
	$fieldToolTipsinterna["English"]["tanda_vital"] = "";
	$placeHoldersinterna["English"]["tanda_vital"] = "";
	$fieldLabelsinterna["English"]["kepala"] = "Kepala";
	$fieldToolTipsinterna["English"]["kepala"] = "";
	$placeHoldersinterna["English"]["kepala"] = "";
	$fieldLabelsinterna["English"]["leher"] = "Leher";
	$fieldToolTipsinterna["English"]["leher"] = "";
	$placeHoldersinterna["English"]["leher"] = "";
	$fieldLabelsinterna["English"]["thorax"] = "Thorax";
	$fieldToolTipsinterna["English"]["thorax"] = "";
	$placeHoldersinterna["English"]["thorax"] = "";
	$fieldLabelsinterna["English"]["abdomen"] = "Abdomen";
	$fieldToolTipsinterna["English"]["abdomen"] = "";
	$placeHoldersinterna["English"]["abdomen"] = "";
	$fieldLabelsinterna["English"]["ekstremitas"] = "Ekstremitas";
	$fieldToolTipsinterna["English"]["ekstremitas"] = "";
	$placeHoldersinterna["English"]["ekstremitas"] = "";
	$fieldLabelsinterna["English"]["pmrksaan_pnunjang_lab"] = "Pmrksaan Pnunjang Lab";
	$fieldToolTipsinterna["English"]["pmrksaan_pnunjang_lab"] = "";
	$placeHoldersinterna["English"]["pmrksaan_pnunjang_lab"] = "";
	$fieldLabelsinterna["English"]["pmrksaan_pnunjang_radiologi"] = "Pmrksaan Pnunjang Radiologi";
	$fieldToolTipsinterna["English"]["pmrksaan_pnunjang_radiologi"] = "";
	$placeHoldersinterna["English"]["pmrksaan_pnunjang_radiologi"] = "";
	$fieldLabelsinterna["English"]["pmrksaan_pnunjang_lain"] = "Pmrksaan Pnunjang Lain";
	$fieldToolTipsinterna["English"]["pmrksaan_pnunjang_lain"] = "";
	$placeHoldersinterna["English"]["pmrksaan_pnunjang_lain"] = "";
	$fieldLabelsinterna["English"]["id_mhs"] = "Id User";
	$fieldToolTipsinterna["English"]["id_mhs"] = "";
	$placeHoldersinterna["English"]["id_mhs"] = "";
	$fieldLabelsinterna["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsinterna["English"]["id_pasien"] = "";
	$placeHoldersinterna["English"]["id_pasien"] = "";
	$fieldLabelsinterna["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipsinterna["English"]["Nomor_Rm"] = "";
	$placeHoldersinterna["English"]["Nomor_Rm"] = "";
	if (count($fieldToolTipsinterna["English"]))
		$tdatainterna[".isUseToolTips"] = true;
}


	$tdatainterna[".NCSearch"] = true;



$tdatainterna[".shortTableName"] = "interna";
$tdatainterna[".nSecOptions"] = 0;

$tdatainterna[".mainTableOwnerID"] = "";
$tdatainterna[".entityType"] = 0;
$tdatainterna[".connId"] = "newrm_at_localhost";


$tdatainterna[".strOriginalTableName"] = "interna";

	



$tdatainterna[".showAddInPopup"] = false;

$tdatainterna[".showEditInPopup"] = false;

$tdatainterna[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainterna[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainterna[".listAjax"] = false;
//	temporary
$tdatainterna[".listAjax"] = false;

	$tdatainterna[".audit"] = false;

	$tdatainterna[".locking"] = false;


$pages = $tdatainterna[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainterna[".edit"] = true;
	$tdatainterna[".afterEditAction"] = 1;
	$tdatainterna[".closePopupAfterEdit"] = 1;
	$tdatainterna[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainterna[".add"] = true;
$tdatainterna[".afterAddAction"] = 1;
$tdatainterna[".closePopupAfterAdd"] = 1;
$tdatainterna[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainterna[".list"] = true;
}



$tdatainterna[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainterna[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainterna[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainterna[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainterna[".printFriendly"] = true;
}



$tdatainterna[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainterna[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainterna[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainterna[".isUseAjaxSuggest"] = true;

$tdatainterna[".rowHighlite"] = true;





$tdatainterna[".ajaxCodeSnippetAdded"] = false;

$tdatainterna[".buttonsAdded"] = false;

$tdatainterna[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainterna[".isUseTimeForSearch"] = false;


$tdatainterna[".badgeColor"] = "7b68ee";


$tdatainterna[".allSearchFields"] = array();
$tdatainterna[".filterFields"] = array();
$tdatainterna[".requiredSearchFields"] = array();

$tdatainterna[".googleLikeFields"] = array();
$tdatainterna[".googleLikeFields"][] = "id_interna";
$tdatainterna[".googleLikeFields"][] = "keluhan_pertama";
$tdatainterna[".googleLikeFields"][] = "keluhan_tmbhan";
$tdatainterna[".googleLikeFields"][] = "rwyt_skrg";
$tdatainterna[".googleLikeFields"][] = "rwyt_dulu";
$tdatainterna[".googleLikeFields"][] = "rwyt_klg";
$tdatainterna[".googleLikeFields"][] = "rwyt_alergi";
$tdatainterna[".googleLikeFields"][] = "rwyt_pengobatan";
$tdatainterna[".googleLikeFields"][] = "rwyt_kebiasaan";
$tdatainterna[".googleLikeFields"][] = "rwyt_sos";
$tdatainterna[".googleLikeFields"][] = "pem_umum_ku";
$tdatainterna[".googleLikeFields"][] = "pem_umum_tb";
$tdatainterna[".googleLikeFields"][] = "pem_umum_bb";
$tdatainterna[".googleLikeFields"][] = "pem_umum_imt";
$tdatainterna[".googleLikeFields"][] = "tanda_vital";
$tdatainterna[".googleLikeFields"][] = "kepala";
$tdatainterna[".googleLikeFields"][] = "leher";
$tdatainterna[".googleLikeFields"][] = "thorax";
$tdatainterna[".googleLikeFields"][] = "abdomen";
$tdatainterna[".googleLikeFields"][] = "ekstremitas";
$tdatainterna[".googleLikeFields"][] = "pmrksaan_pnunjang_lab";
$tdatainterna[".googleLikeFields"][] = "pmrksaan_pnunjang_radiologi";
$tdatainterna[".googleLikeFields"][] = "pmrksaan_pnunjang_lain";
$tdatainterna[".googleLikeFields"][] = "id_mhs";
$tdatainterna[".googleLikeFields"][] = "id_pasien";
$tdatainterna[".googleLikeFields"][] = "Nomor_Rm";



$tdatainterna[".tableType"] = "list";

$tdatainterna[".printerPageOrientation"] = 0;
$tdatainterna[".nPrinterPageScale"] = 100;

$tdatainterna[".nPrinterSplitRecords"] = 40;

$tdatainterna[".geocodingEnabled"] = false;










$tdatainterna[".pageSize"] = 20;

$tdatainterna[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainterna[".strOrderBy"] = $tstrOrderBy;

$tdatainterna[".orderindexes"] = array();


$tdatainterna[".sqlHead"] = "SELECT id_interna,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_klg,  	rwyt_alergi,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	rwyt_sos,  	pem_umum_ku,  	pem_umum_tb,  	pem_umum_bb,  	pem_umum_imt,  	tanda_vital,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	pmrksaan_pnunjang_lab,  	pmrksaan_pnunjang_radiologi,  	pmrksaan_pnunjang_lain,  	id_mhs,  	id_pasien,  	Nomor_Rm";
$tdatainterna[".sqlFrom"] = "FROM interna";
$tdatainterna[".sqlWhereExpr"] = "";
$tdatainterna[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainterna[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainterna[".arrGroupsPerPage"] = $arrGPP;

$tdatainterna[".highlightSearchResults"] = true;

$tableKeysinterna = array();
$tableKeysinterna[] = "id_interna";
$tdatainterna[".Keys"] = $tableKeysinterna;


$tdatainterna[".hideMobileList"] = array();




//	id_interna
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_interna";
	$fdata["GoodName"] = "id_interna";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","id_interna");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_interna";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_interna";

	
	
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


	$tdatainterna["id_interna"] = $fdata;
		$tdatainterna[".searchableFields"][] = "id_interna";
//	keluhan_pertama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "keluhan_pertama";
	$fdata["GoodName"] = "keluhan_pertama";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","keluhan_pertama");
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


	$tdatainterna["keluhan_pertama"] = $fdata;
		$tdatainterna[".searchableFields"][] = "keluhan_pertama";
//	keluhan_tmbhan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "keluhan_tmbhan";
	$fdata["GoodName"] = "keluhan_tmbhan";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","keluhan_tmbhan");
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


	$tdatainterna["keluhan_tmbhan"] = $fdata;
		$tdatainterna[".searchableFields"][] = "keluhan_tmbhan";
//	rwyt_skrg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rwyt_skrg";
	$fdata["GoodName"] = "rwyt_skrg";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","rwyt_skrg");
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


	$tdatainterna["rwyt_skrg"] = $fdata;
		$tdatainterna[".searchableFields"][] = "rwyt_skrg";
//	rwyt_dulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rwyt_dulu";
	$fdata["GoodName"] = "rwyt_dulu";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","rwyt_dulu");
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


	$tdatainterna["rwyt_dulu"] = $fdata;
		$tdatainterna[".searchableFields"][] = "rwyt_dulu";
//	rwyt_klg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rwyt_klg";
	$fdata["GoodName"] = "rwyt_klg";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","rwyt_klg");
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


	$tdatainterna["rwyt_klg"] = $fdata;
		$tdatainterna[".searchableFields"][] = "rwyt_klg";
//	rwyt_alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rwyt_alergi";
	$fdata["GoodName"] = "rwyt_alergi";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","rwyt_alergi");
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


	$tdatainterna["rwyt_alergi"] = $fdata;
		$tdatainterna[".searchableFields"][] = "rwyt_alergi";
//	rwyt_pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rwyt_pengobatan";
	$fdata["GoodName"] = "rwyt_pengobatan";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","rwyt_pengobatan");
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


	$tdatainterna["rwyt_pengobatan"] = $fdata;
		$tdatainterna[".searchableFields"][] = "rwyt_pengobatan";
//	rwyt_kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rwyt_kebiasaan";
	$fdata["GoodName"] = "rwyt_kebiasaan";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","rwyt_kebiasaan");
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


	$tdatainterna["rwyt_kebiasaan"] = $fdata;
		$tdatainterna[".searchableFields"][] = "rwyt_kebiasaan";
//	rwyt_sos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rwyt_sos";
	$fdata["GoodName"] = "rwyt_sos";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","rwyt_sos");
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


	$tdatainterna["rwyt_sos"] = $fdata;
		$tdatainterna[".searchableFields"][] = "rwyt_sos";
//	pem_umum_ku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pem_umum_ku";
	$fdata["GoodName"] = "pem_umum_ku";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","pem_umum_ku");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pem_umum_ku";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pem_umum_ku";

	
	
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


	$tdatainterna["pem_umum_ku"] = $fdata;
		$tdatainterna[".searchableFields"][] = "pem_umum_ku";
//	pem_umum_tb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "pem_umum_tb";
	$fdata["GoodName"] = "pem_umum_tb";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","pem_umum_tb");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pem_umum_tb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pem_umum_tb";

	
	
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


	$tdatainterna["pem_umum_tb"] = $fdata;
		$tdatainterna[".searchableFields"][] = "pem_umum_tb";
//	pem_umum_bb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "pem_umum_bb";
	$fdata["GoodName"] = "pem_umum_bb";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","pem_umum_bb");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pem_umum_bb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pem_umum_bb";

	
	
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


	$tdatainterna["pem_umum_bb"] = $fdata;
		$tdatainterna[".searchableFields"][] = "pem_umum_bb";
//	pem_umum_imt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pem_umum_imt";
	$fdata["GoodName"] = "pem_umum_imt";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","pem_umum_imt");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pem_umum_imt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pem_umum_imt";

	
	
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


	$tdatainterna["pem_umum_imt"] = $fdata;
		$tdatainterna[".searchableFields"][] = "pem_umum_imt";
//	tanda_vital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "tanda_vital";
	$fdata["GoodName"] = "tanda_vital";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","tanda_vital");
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


	$tdatainterna["tanda_vital"] = $fdata;
		$tdatainterna[".searchableFields"][] = "tanda_vital";
//	kepala
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kepala";
	$fdata["GoodName"] = "kepala";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","kepala");
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


	$tdatainterna["kepala"] = $fdata;
		$tdatainterna[".searchableFields"][] = "kepala";
//	leher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "leher";
	$fdata["GoodName"] = "leher";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","leher");
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


	$tdatainterna["leher"] = $fdata;
		$tdatainterna[".searchableFields"][] = "leher";
//	thorax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "thorax";
	$fdata["GoodName"] = "thorax";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","thorax");
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


	$tdatainterna["thorax"] = $fdata;
		$tdatainterna[".searchableFields"][] = "thorax";
//	abdomen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "abdomen";
	$fdata["GoodName"] = "abdomen";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","abdomen");
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


	$tdatainterna["abdomen"] = $fdata;
		$tdatainterna[".searchableFields"][] = "abdomen";
//	ekstremitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ekstremitas";
	$fdata["GoodName"] = "ekstremitas";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","ekstremitas");
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


	$tdatainterna["ekstremitas"] = $fdata;
		$tdatainterna[".searchableFields"][] = "ekstremitas";
//	pmrksaan_pnunjang_lab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "pmrksaan_pnunjang_lab";
	$fdata["GoodName"] = "pmrksaan_pnunjang_lab";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","pmrksaan_pnunjang_lab");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatainterna["pmrksaan_pnunjang_lab"] = $fdata;
		$tdatainterna[".searchableFields"][] = "pmrksaan_pnunjang_lab";
//	pmrksaan_pnunjang_radiologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "pmrksaan_pnunjang_radiologi";
	$fdata["GoodName"] = "pmrksaan_pnunjang_radiologi";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","pmrksaan_pnunjang_radiologi");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatainterna["pmrksaan_pnunjang_radiologi"] = $fdata;
		$tdatainterna[".searchableFields"][] = "pmrksaan_pnunjang_radiologi";
//	pmrksaan_pnunjang_lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "pmrksaan_pnunjang_lain";
	$fdata["GoodName"] = "pmrksaan_pnunjang_lain";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","pmrksaan_pnunjang_lain");
	$fdata["FieldType"] = 200;

	
	
	
			

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


	$tdatainterna["pmrksaan_pnunjang_lain"] = $fdata;
		$tdatainterna[".searchableFields"][] = "pmrksaan_pnunjang_lain";
//	id_mhs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "id_mhs";
	$fdata["GoodName"] = "id_mhs";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","id_mhs");
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


	$tdatainterna["id_mhs"] = $fdata;
		$tdatainterna[".searchableFields"][] = "id_mhs";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","id_pasien");
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


	$tdatainterna["id_pasien"] = $fdata;
		$tdatainterna[".searchableFields"][] = "id_pasien";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "interna";
	$fdata["Label"] = GetFieldLabel("interna","Nomor_Rm");
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


	$tdatainterna["Nomor_Rm"] = $fdata;
		$tdatainterna[".searchableFields"][] = "Nomor_Rm";


$tables_data["interna"]=&$tdatainterna;
$field_labels["interna"] = &$fieldLabelsinterna;
$fieldToolTips["interna"] = &$fieldToolTipsinterna;
$placeHolders["interna"] = &$placeHoldersinterna;
$page_titles["interna"] = &$pageTitlesinterna;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["interna"] = array();
//	daftar_masalah_interna
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="daftar_masalah_interna";
		$detailsParam["dOriginalTable"] = "daftar_masalah_interna";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "daftar_masalah_interna";
	$detailsParam["dCaptionTable"] = GetTableCaption("daftar_masalah_interna");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["interna"][$dIndex] = $detailsParam;

	
		$detailsTablesData["interna"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["interna"][$dIndex]["masterKeys"][]="id_interna";

				$detailsTablesData["interna"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["interna"][$dIndex]["detailKeys"][]="id_interna";

// tables which are master tables for current table (detail)
$masterTablesData["interna"] = array();



	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["interna"][0] = $masterParams;
				$masterTablesData["interna"][0]["masterKeys"] = array();
	$masterTablesData["interna"][0]["masterKeys"][]="id";
				$masterTablesData["interna"][0]["detailKeys"] = array();
	$masterTablesData["interna"][0]["detailKeys"][]="id_mhs";
		
	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["interna"][1] = $masterParams;
				$masterTablesData["interna"][1]["masterKeys"] = array();
	$masterTablesData["interna"][1]["masterKeys"][]="Id_Pasien";
				$masterTablesData["interna"][1]["detailKeys"] = array();
	$masterTablesData["interna"][1]["detailKeys"][]="id_pasien";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_interna()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_interna,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_klg,  	rwyt_alergi,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	rwyt_sos,  	pem_umum_ku,  	pem_umum_tb,  	pem_umum_bb,  	pem_umum_imt,  	tanda_vital,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	pmrksaan_pnunjang_lab,  	pmrksaan_pnunjang_radiologi,  	pmrksaan_pnunjang_lain,  	id_mhs,  	id_pasien,  	Nomor_Rm";
$proto0["m_strFrom"] = "FROM interna";
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
	"m_strName" => "id_interna",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto6["m_sql"] = "id_interna";
$proto6["m_srcTableName"] = "interna";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_pertama",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto8["m_sql"] = "keluhan_pertama";
$proto8["m_srcTableName"] = "interna";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_tmbhan",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto10["m_sql"] = "keluhan_tmbhan";
$proto10["m_srcTableName"] = "interna";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_skrg",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto12["m_sql"] = "rwyt_skrg";
$proto12["m_srcTableName"] = "interna";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_dulu",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto14["m_sql"] = "rwyt_dulu";
$proto14["m_srcTableName"] = "interna";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_klg",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto16["m_sql"] = "rwyt_klg";
$proto16["m_srcTableName"] = "interna";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_alergi",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto18["m_sql"] = "rwyt_alergi";
$proto18["m_srcTableName"] = "interna";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_pengobatan",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto20["m_sql"] = "rwyt_pengobatan";
$proto20["m_srcTableName"] = "interna";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_kebiasaan",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto22["m_sql"] = "rwyt_kebiasaan";
$proto22["m_srcTableName"] = "interna";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_sos",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto24["m_sql"] = "rwyt_sos";
$proto24["m_srcTableName"] = "interna";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "pem_umum_ku",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto26["m_sql"] = "pem_umum_ku";
$proto26["m_srcTableName"] = "interna";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "pem_umum_tb",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto28["m_sql"] = "pem_umum_tb";
$proto28["m_srcTableName"] = "interna";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "pem_umum_bb",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto30["m_sql"] = "pem_umum_bb";
$proto30["m_srcTableName"] = "interna";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pem_umum_imt",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto32["m_sql"] = "pem_umum_imt";
$proto32["m_srcTableName"] = "interna";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "tanda_vital",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto34["m_sql"] = "tanda_vital";
$proto34["m_srcTableName"] = "interna";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "kepala",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto36["m_sql"] = "kepala";
$proto36["m_srcTableName"] = "interna";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "leher",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto38["m_sql"] = "leher";
$proto38["m_srcTableName"] = "interna";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "thorax",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto40["m_sql"] = "thorax";
$proto40["m_srcTableName"] = "interna";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "abdomen",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto42["m_sql"] = "abdomen";
$proto42["m_srcTableName"] = "interna";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ekstremitas",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto44["m_sql"] = "ekstremitas";
$proto44["m_srcTableName"] = "interna";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_pnunjang_lab",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto46["m_sql"] = "pmrksaan_pnunjang_lab";
$proto46["m_srcTableName"] = "interna";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_pnunjang_radiologi",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto48["m_sql"] = "pmrksaan_pnunjang_radiologi";
$proto48["m_srcTableName"] = "interna";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_pnunjang_lain",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto50["m_sql"] = "pmrksaan_pnunjang_lain";
$proto50["m_srcTableName"] = "interna";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mhs",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto52["m_sql"] = "id_mhs";
$proto52["m_srcTableName"] = "interna";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto54["m_sql"] = "id_pasien";
$proto54["m_srcTableName"] = "interna";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "interna",
	"m_srcTableName" => "interna"
));

$proto56["m_sql"] = "Nomor_Rm";
$proto56["m_srcTableName"] = "interna";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "interna";
$proto59["m_srcTableName"] = "interna";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id_interna";
$proto59["m_columns"][] = "keluhan_pertama";
$proto59["m_columns"][] = "keluhan_tmbhan";
$proto59["m_columns"][] = "rwyt_skrg";
$proto59["m_columns"][] = "rwyt_dulu";
$proto59["m_columns"][] = "rwyt_klg";
$proto59["m_columns"][] = "rwyt_alergi";
$proto59["m_columns"][] = "rwyt_pengobatan";
$proto59["m_columns"][] = "rwyt_kebiasaan";
$proto59["m_columns"][] = "rwyt_sos";
$proto59["m_columns"][] = "pem_umum_ku";
$proto59["m_columns"][] = "pem_umum_tb";
$proto59["m_columns"][] = "pem_umum_bb";
$proto59["m_columns"][] = "pem_umum_imt";
$proto59["m_columns"][] = "tanda_vital";
$proto59["m_columns"][] = "kepala";
$proto59["m_columns"][] = "leher";
$proto59["m_columns"][] = "thorax";
$proto59["m_columns"][] = "abdomen";
$proto59["m_columns"][] = "ekstremitas";
$proto59["m_columns"][] = "pmrksaan_pnunjang_lab";
$proto59["m_columns"][] = "pmrksaan_pnunjang_radiologi";
$proto59["m_columns"][] = "pmrksaan_pnunjang_lain";
$proto59["m_columns"][] = "id_mhs";
$proto59["m_columns"][] = "id_pasien";
$proto59["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "interna";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "interna";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="interna";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_interna = createSqlQuery_interna();


	
		;

																										

$tdatainterna[".sqlquery"] = $queryData_interna;



$tableEvents["interna"] = new eventsBase;
$tdatainterna[".hasEvents"] = false;

?>