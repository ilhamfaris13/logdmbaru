<?php
$tdatakulit1 = array();
$tdatakulit1[".searchableFields"] = array();
$tdatakulit1[".ShortName"] = "kulit1";
$tdatakulit1[".OwnerID"] = "";
$tdatakulit1[".OriginalTable"] = "kulit";


$tdatakulit1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakulit1[".originalPagesByType"] = $tdatakulit1[".pagesByType"];
$tdatakulit1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakulit1[".originalPages"] = $tdatakulit1[".pages"];
$tdatakulit1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakulit1[".originalDefaultPages"] = $tdatakulit1[".defaultPages"];

//	field labels
$fieldLabelskulit1 = array();
$fieldToolTipskulit1 = array();
$pageTitleskulit1 = array();
$placeHolderskulit1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskulit1["English"] = array();
	$fieldToolTipskulit1["English"] = array();
	$placeHolderskulit1["English"] = array();
	$pageTitleskulit1["English"] = array();
	$fieldLabelskulit1["English"]["id_kulit"] = "Id Kulit";
	$fieldToolTipskulit1["English"]["id_kulit"] = "";
	$placeHolderskulit1["English"]["id_kulit"] = "";
	$fieldLabelskulit1["English"]["keluhan_pertama"] = "Keluhan Pertama";
	$fieldToolTipskulit1["English"]["keluhan_pertama"] = "";
	$placeHolderskulit1["English"]["keluhan_pertama"] = "";
	$fieldLabelskulit1["English"]["keluhan_tmbhan"] = "Keluhan Tmbhan";
	$fieldToolTipskulit1["English"]["keluhan_tmbhan"] = "";
	$placeHolderskulit1["English"]["keluhan_tmbhan"] = "";
	$fieldLabelskulit1["English"]["rwyt_skrg"] = "Rwyt Skrg";
	$fieldToolTipskulit1["English"]["rwyt_skrg"] = "";
	$placeHolderskulit1["English"]["rwyt_skrg"] = "";
	$fieldLabelskulit1["English"]["rwyt_dulu"] = "Rwyt Dulu";
	$fieldToolTipskulit1["English"]["rwyt_dulu"] = "";
	$placeHolderskulit1["English"]["rwyt_dulu"] = "";
	$fieldLabelskulit1["English"]["rwyt_klg"] = "Rwyt Klg";
	$fieldToolTipskulit1["English"]["rwyt_klg"] = "";
	$placeHolderskulit1["English"]["rwyt_klg"] = "";
	$fieldLabelskulit1["English"]["rwyt_alergi"] = "Rwyt Alergi";
	$fieldToolTipskulit1["English"]["rwyt_alergi"] = "";
	$placeHolderskulit1["English"]["rwyt_alergi"] = "";
	$fieldLabelskulit1["English"]["rwyt_pengobatan"] = "Rwyt Pengobatan";
	$fieldToolTipskulit1["English"]["rwyt_pengobatan"] = "";
	$placeHolderskulit1["English"]["rwyt_pengobatan"] = "";
	$fieldLabelskulit1["English"]["rwyt_kebiasaan"] = "Rwyt Kebiasaan";
	$fieldToolTipskulit1["English"]["rwyt_kebiasaan"] = "";
	$placeHolderskulit1["English"]["rwyt_kebiasaan"] = "";
	$fieldLabelskulit1["English"]["tb"] = "Tb";
	$fieldToolTipskulit1["English"]["tb"] = "";
	$placeHolderskulit1["English"]["tb"] = "";
	$fieldLabelskulit1["English"]["bb"] = "Bb";
	$fieldToolTipskulit1["English"]["bb"] = "";
	$placeHolderskulit1["English"]["bb"] = "";
	$fieldLabelskulit1["English"]["nadi"] = "Nadi";
	$fieldToolTipskulit1["English"]["nadi"] = "";
	$placeHolderskulit1["English"]["nadi"] = "";
	$fieldLabelskulit1["English"]["temp"] = "Temp";
	$fieldToolTipskulit1["English"]["temp"] = "";
	$placeHolderskulit1["English"]["temp"] = "";
	$fieldLabelskulit1["English"]["kepala"] = "Kepala";
	$fieldToolTipskulit1["English"]["kepala"] = "";
	$placeHolderskulit1["English"]["kepala"] = "";
	$fieldLabelskulit1["English"]["leher"] = "Leher";
	$fieldToolTipskulit1["English"]["leher"] = "";
	$placeHolderskulit1["English"]["leher"] = "";
	$fieldLabelskulit1["English"]["thorax"] = "Thorax";
	$fieldToolTipskulit1["English"]["thorax"] = "";
	$placeHolderskulit1["English"]["thorax"] = "";
	$fieldLabelskulit1["English"]["abdomen"] = "Abdomen";
	$fieldToolTipskulit1["English"]["abdomen"] = "";
	$placeHolderskulit1["English"]["abdomen"] = "";
	$fieldLabelskulit1["English"]["ekstremitas"] = "Ekstremitas";
	$fieldToolTipskulit1["English"]["ekstremitas"] = "";
	$placeHolderskulit1["English"]["ekstremitas"] = "";
	$fieldLabelskulit1["English"]["diagnosis"] = "Diagnosis";
	$fieldToolTipskulit1["English"]["diagnosis"] = "";
	$placeHolderskulit1["English"]["diagnosis"] = "";
	$fieldLabelskulit1["English"]["id_mhs"] = "Id User";
	$fieldToolTipskulit1["English"]["id_mhs"] = "";
	$placeHolderskulit1["English"]["id_mhs"] = "";
	$fieldLabelskulit1["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipskulit1["English"]["id_pasien"] = "";
	$placeHolderskulit1["English"]["id_pasien"] = "";
	$fieldLabelskulit1["English"]["keadaan_umum"] = "Keadaan Umum";
	$fieldToolTipskulit1["English"]["keadaan_umum"] = "";
	$placeHolderskulit1["English"]["keadaan_umum"] = "";
	$fieldLabelskulit1["English"]["kesadaran_gcs"] = "Kesadaran Gcs";
	$fieldToolTipskulit1["English"]["kesadaran_gcs"] = "";
	$placeHolderskulit1["English"]["kesadaran_gcs"] = "";
	$fieldLabelskulit1["English"]["status_gizi"] = "Status Gizi";
	$fieldToolTipskulit1["English"]["status_gizi"] = "";
	$placeHolderskulit1["English"]["status_gizi"] = "";
	$fieldLabelskulit1["English"]["tensi"] = "Tensi";
	$fieldToolTipskulit1["English"]["tensi"] = "";
	$placeHolderskulit1["English"]["tensi"] = "";
	$fieldLabelskulit1["English"]["rr_x_menit"] = "Rr X Menit";
	$fieldToolTipskulit1["English"]["rr_x_menit"] = "";
	$placeHolderskulit1["English"]["rr_x_menit"] = "";
	$fieldLabelskulit1["English"]["status_dermatologis"] = "Status Dermatologis";
	$fieldToolTipskulit1["English"]["status_dermatologis"] = "";
	$placeHolderskulit1["English"]["status_dermatologis"] = "";
	$fieldLabelskulit1["English"]["pmrksaan_lab_pnunjang"] = "Pmrksaan Lab Pnunjang";
	$fieldToolTipskulit1["English"]["pmrksaan_lab_pnunjang"] = "";
	$placeHolderskulit1["English"]["pmrksaan_lab_pnunjang"] = "";
	$fieldLabelskulit1["English"]["resume"] = "Resume";
	$fieldToolTipskulit1["English"]["resume"] = "";
	$placeHolderskulit1["English"]["resume"] = "";
	$fieldLabelskulit1["English"]["diagnosis_banding"] = "Diagnosis Banding";
	$fieldToolTipskulit1["English"]["diagnosis_banding"] = "";
	$placeHolderskulit1["English"]["diagnosis_banding"] = "";
	$fieldLabelskulit1["English"]["diagnosis_planning"] = "Diagnosis Planning";
	$fieldToolTipskulit1["English"]["diagnosis_planning"] = "";
	$placeHolderskulit1["English"]["diagnosis_planning"] = "";
	$fieldLabelskulit1["English"]["terapi_medikamentosa"] = "Terapi Medikamentosa";
	$fieldToolTipskulit1["English"]["terapi_medikamentosa"] = "";
	$placeHolderskulit1["English"]["terapi_medikamentosa"] = "";
	$fieldLabelskulit1["English"]["terapi_nonmedikamentosa"] = "Terapi Nonmedikamentosa";
	$fieldToolTipskulit1["English"]["terapi_nonmedikamentosa"] = "";
	$placeHolderskulit1["English"]["terapi_nonmedikamentosa"] = "";
	$fieldLabelskulit1["English"]["monitoring"] = "Monitoring";
	$fieldToolTipskulit1["English"]["monitoring"] = "";
	$placeHolderskulit1["English"]["monitoring"] = "";
	$fieldLabelskulit1["English"]["edukasi"] = "Edukasi";
	$fieldToolTipskulit1["English"]["edukasi"] = "";
	$placeHolderskulit1["English"]["edukasi"] = "";
	$fieldLabelskulit1["English"]["prognosis"] = "Prognosis";
	$fieldToolTipskulit1["English"]["prognosis"] = "";
	$placeHolderskulit1["English"]["prognosis"] = "";
	$fieldLabelskulit1["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipskulit1["English"]["Nomor_Rm"] = "";
	$placeHolderskulit1["English"]["Nomor_Rm"] = "";
	$fieldLabelskulit1["English"]["id"] = "Id";
	$fieldToolTipskulit1["English"]["id"] = "";
	$placeHolderskulit1["English"]["id"] = "";
	$fieldLabelskulit1["English"]["name"] = "Name";
	$fieldToolTipskulit1["English"]["name"] = "";
	$placeHolderskulit1["English"]["name"] = "";
	$fieldLabelskulit1["English"]["username"] = "Username";
	$fieldToolTipskulit1["English"]["username"] = "";
	$placeHolderskulit1["English"]["username"] = "";
	$fieldLabelskulit1["English"]["email"] = "Email";
	$fieldToolTipskulit1["English"]["email"] = "";
	$placeHolderskulit1["English"]["email"] = "";
	$fieldLabelskulit1["English"]["Id_Pasien1"] = "Id Pasien1";
	$fieldToolTipskulit1["English"]["Id_Pasien1"] = "";
	$placeHolderskulit1["English"]["Id_Pasien1"] = "";
	$fieldLabelskulit1["English"]["Nama"] = "Nama";
	$fieldToolTipskulit1["English"]["Nama"] = "";
	$placeHolderskulit1["English"]["Nama"] = "";
	$fieldLabelskulit1["English"]["Alamat"] = "Alamat";
	$fieldToolTipskulit1["English"]["Alamat"] = "";
	$placeHolderskulit1["English"]["Alamat"] = "";
	$fieldLabelskulit1["English"]["Umur"] = "Umur";
	$fieldToolTipskulit1["English"]["Umur"] = "";
	$placeHolderskulit1["English"]["Umur"] = "";
	$fieldLabelskulit1["English"]["Status_Perkawinan"] = "Status Perkawinan";
	$fieldToolTipskulit1["English"]["Status_Perkawinan"] = "";
	$placeHolderskulit1["English"]["Status_Perkawinan"] = "";
	$fieldLabelskulit1["English"]["Jenis_Kelamin"] = "Jenis Kelamin";
	$fieldToolTipskulit1["English"]["Jenis_Kelamin"] = "";
	$placeHolderskulit1["English"]["Jenis_Kelamin"] = "";
	$fieldLabelskulit1["English"]["Suku_Ras"] = "Suku Ras";
	$fieldToolTipskulit1["English"]["Suku_Ras"] = "";
	$placeHolderskulit1["English"]["Suku_Ras"] = "";
	$fieldLabelskulit1["English"]["Agama"] = "Agama";
	$fieldToolTipskulit1["English"]["Agama"] = "";
	$placeHolderskulit1["English"]["Agama"] = "";
	$fieldLabelskulit1["English"]["Kerja"] = "Kerja";
	$fieldToolTipskulit1["English"]["Kerja"] = "";
	$placeHolderskulit1["English"]["Kerja"] = "";
	$fieldLabelskulit1["English"]["Tanggal_MRS"] = "Tanggal MRS";
	$fieldToolTipskulit1["English"]["Tanggal_MRS"] = "";
	$placeHolderskulit1["English"]["Tanggal_MRS"] = "";
	if (count($fieldToolTipskulit1["English"]))
		$tdatakulit1[".isUseToolTips"] = true;
}


	$tdatakulit1[".NCSearch"] = true;



$tdatakulit1[".shortTableName"] = "kulit1";
$tdatakulit1[".nSecOptions"] = 0;

$tdatakulit1[".mainTableOwnerID"] = "";
$tdatakulit1[".entityType"] = 1;
$tdatakulit1[".connId"] = "newrm_at_localhost";


$tdatakulit1[".strOriginalTableName"] = "kulit";

	



$tdatakulit1[".showAddInPopup"] = false;

$tdatakulit1[".showEditInPopup"] = false;

$tdatakulit1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatakulit1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatakulit1[".listAjax"] = false;
//	temporary
$tdatakulit1[".listAjax"] = false;

	$tdatakulit1[".audit"] = false;

	$tdatakulit1[".locking"] = false;


$pages = $tdatakulit1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakulit1[".edit"] = true;
	$tdatakulit1[".afterEditAction"] = 1;
	$tdatakulit1[".closePopupAfterEdit"] = 1;
	$tdatakulit1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakulit1[".add"] = true;
$tdatakulit1[".afterAddAction"] = 1;
$tdatakulit1[".closePopupAfterAdd"] = 1;
$tdatakulit1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakulit1[".list"] = true;
}



$tdatakulit1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakulit1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakulit1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakulit1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakulit1[".printFriendly"] = true;
}



$tdatakulit1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakulit1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakulit1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakulit1[".isUseAjaxSuggest"] = true;

$tdatakulit1[".rowHighlite"] = true;





$tdatakulit1[".ajaxCodeSnippetAdded"] = false;

$tdatakulit1[".buttonsAdded"] = false;

$tdatakulit1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakulit1[".isUseTimeForSearch"] = false;


$tdatakulit1[".badgeColor"] = "7B68EE";


$tdatakulit1[".allSearchFields"] = array();
$tdatakulit1[".filterFields"] = array();
$tdatakulit1[".requiredSearchFields"] = array();

$tdatakulit1[".googleLikeFields"] = array();
$tdatakulit1[".googleLikeFields"][] = "id_kulit";
$tdatakulit1[".googleLikeFields"][] = "id_mhs";
$tdatakulit1[".googleLikeFields"][] = "id_pasien";
$tdatakulit1[".googleLikeFields"][] = "keluhan_pertama";
$tdatakulit1[".googleLikeFields"][] = "keluhan_tmbhan";
$tdatakulit1[".googleLikeFields"][] = "rwyt_skrg";
$tdatakulit1[".googleLikeFields"][] = "rwyt_dulu";
$tdatakulit1[".googleLikeFields"][] = "rwyt_klg";
$tdatakulit1[".googleLikeFields"][] = "rwyt_alergi";
$tdatakulit1[".googleLikeFields"][] = "rwyt_pengobatan";
$tdatakulit1[".googleLikeFields"][] = "rwyt_kebiasaan";
$tdatakulit1[".googleLikeFields"][] = "keadaan_umum";
$tdatakulit1[".googleLikeFields"][] = "kesadaran_gcs";
$tdatakulit1[".googleLikeFields"][] = "tb";
$tdatakulit1[".googleLikeFields"][] = "bb";
$tdatakulit1[".googleLikeFields"][] = "status_gizi";
$tdatakulit1[".googleLikeFields"][] = "tensi";
$tdatakulit1[".googleLikeFields"][] = "nadi";
$tdatakulit1[".googleLikeFields"][] = "rr_x_menit";
$tdatakulit1[".googleLikeFields"][] = "temp";
$tdatakulit1[".googleLikeFields"][] = "kepala";
$tdatakulit1[".googleLikeFields"][] = "leher";
$tdatakulit1[".googleLikeFields"][] = "thorax";
$tdatakulit1[".googleLikeFields"][] = "abdomen";
$tdatakulit1[".googleLikeFields"][] = "ekstremitas";
$tdatakulit1[".googleLikeFields"][] = "status_dermatologis";
$tdatakulit1[".googleLikeFields"][] = "pmrksaan_lab_pnunjang";
$tdatakulit1[".googleLikeFields"][] = "resume";
$tdatakulit1[".googleLikeFields"][] = "diagnosis";
$tdatakulit1[".googleLikeFields"][] = "diagnosis_banding";
$tdatakulit1[".googleLikeFields"][] = "diagnosis_planning";
$tdatakulit1[".googleLikeFields"][] = "terapi_medikamentosa";
$tdatakulit1[".googleLikeFields"][] = "terapi_nonmedikamentosa";
$tdatakulit1[".googleLikeFields"][] = "monitoring";
$tdatakulit1[".googleLikeFields"][] = "edukasi";
$tdatakulit1[".googleLikeFields"][] = "prognosis";
$tdatakulit1[".googleLikeFields"][] = "Nomor_Rm";
$tdatakulit1[".googleLikeFields"][] = "id";
$tdatakulit1[".googleLikeFields"][] = "name";
$tdatakulit1[".googleLikeFields"][] = "username";
$tdatakulit1[".googleLikeFields"][] = "email";
$tdatakulit1[".googleLikeFields"][] = "Id_Pasien1";
$tdatakulit1[".googleLikeFields"][] = "Nama";
$tdatakulit1[".googleLikeFields"][] = "Alamat";
$tdatakulit1[".googleLikeFields"][] = "Umur";
$tdatakulit1[".googleLikeFields"][] = "Status_Perkawinan";
$tdatakulit1[".googleLikeFields"][] = "Jenis Kelamin";
$tdatakulit1[".googleLikeFields"][] = "Suku_Ras";
$tdatakulit1[".googleLikeFields"][] = "Agama";
$tdatakulit1[".googleLikeFields"][] = "Kerja";
$tdatakulit1[".googleLikeFields"][] = "Tanggal_MRS";



$tdatakulit1[".tableType"] = "list";

$tdatakulit1[".printerPageOrientation"] = 0;
$tdatakulit1[".nPrinterPageScale"] = 100;

$tdatakulit1[".nPrinterSplitRecords"] = 40;

$tdatakulit1[".geocodingEnabled"] = false;










$tdatakulit1[".pageSize"] = 20;

$tdatakulit1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatakulit1[".strOrderBy"] = $tstrOrderBy;

$tdatakulit1[".orderindexes"] = array();


$tdatakulit1[".sqlHead"] = "SELECT id_kulit,  	id_mhs,  	kulit.id_pasien,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_klg,  	rwyt_alergi,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	keadaan_umum,  	kesadaran_gcs,  	tb,  	bb,  	status_gizi,  	tensi,  	nadi,  	rr_x_menit,  	temp,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	status_dermatologis,  	pmrksaan_lab_pnunjang,  	resume,  	diagnosis,  	diagnosis_banding,  	diagnosis_planning,  	terapi_medikamentosa,  	terapi_nonmedikamentosa,  	monitoring,  	edukasi,  	prognosis,  	Nomor_Rm,  users.id,  users.name,  users.username,  users.email,  identitas_pasien.Id_Pasien AS Id_Pasien1,  identitas_pasien.Nama,  identitas_pasien.Alamat,  identitas_pasien.Umur,  identitas_pasien.Status_Perkawinan,  identitas_pasien.`Jenis Kelamin`,  identitas_pasien.Suku_Ras,  identitas_pasien.Agama,  identitas_pasien.Pekerjaan AS Kerja,  identitas_pasien.Tanggal_MRS";
$tdatakulit1[".sqlFrom"] = "FROM kulit   INNER JOIN identitas_pasien ON kulit.id_pasien = identitas_pasien.Id_Pasien  INNER JOIN users ON kulit.id_mhs = users.id";
$tdatakulit1[".sqlWhereExpr"] = "";
$tdatakulit1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakulit1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakulit1[".arrGroupsPerPage"] = $arrGPP;

$tdatakulit1[".highlightSearchResults"] = true;

$tableKeyskulit1 = array();
$tableKeyskulit1[] = "id_kulit";
$tdatakulit1[".Keys"] = $tableKeyskulit1;


$tdatakulit1[".hideMobileList"] = array();




//	id_kulit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_kulit";
	$fdata["GoodName"] = "id_kulit";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","id_kulit");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_kulit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_kulit";

	
	
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


	$tdatakulit1["id_kulit"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "id_kulit";
//	id_mhs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_mhs";
	$fdata["GoodName"] = "id_mhs";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","id_mhs");
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


	$tdatakulit1["id_mhs"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "id_mhs";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","id_pasien");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kulit.id_pasien";

	
	
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


	$tdatakulit1["id_pasien"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "id_pasien";
//	keluhan_pertama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "keluhan_pertama";
	$fdata["GoodName"] = "keluhan_pertama";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","keluhan_pertama");
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


	$tdatakulit1["keluhan_pertama"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "keluhan_pertama";
//	keluhan_tmbhan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keluhan_tmbhan";
	$fdata["GoodName"] = "keluhan_tmbhan";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","keluhan_tmbhan");
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


	$tdatakulit1["keluhan_tmbhan"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "keluhan_tmbhan";
//	rwyt_skrg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rwyt_skrg";
	$fdata["GoodName"] = "rwyt_skrg";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","rwyt_skrg");
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


	$tdatakulit1["rwyt_skrg"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "rwyt_skrg";
//	rwyt_dulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "rwyt_dulu";
	$fdata["GoodName"] = "rwyt_dulu";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","rwyt_dulu");
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


	$tdatakulit1["rwyt_dulu"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "rwyt_dulu";
//	rwyt_klg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rwyt_klg";
	$fdata["GoodName"] = "rwyt_klg";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","rwyt_klg");
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


	$tdatakulit1["rwyt_klg"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "rwyt_klg";
//	rwyt_alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rwyt_alergi";
	$fdata["GoodName"] = "rwyt_alergi";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","rwyt_alergi");
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


	$tdatakulit1["rwyt_alergi"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "rwyt_alergi";
//	rwyt_pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rwyt_pengobatan";
	$fdata["GoodName"] = "rwyt_pengobatan";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","rwyt_pengobatan");
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


	$tdatakulit1["rwyt_pengobatan"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "rwyt_pengobatan";
//	rwyt_kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rwyt_kebiasaan";
	$fdata["GoodName"] = "rwyt_kebiasaan";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","rwyt_kebiasaan");
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


	$tdatakulit1["rwyt_kebiasaan"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "rwyt_kebiasaan";
//	keadaan_umum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "keadaan_umum";
	$fdata["GoodName"] = "keadaan_umum";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","keadaan_umum");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "keadaan_umum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "keadaan_umum";

	
	
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


	$tdatakulit1["keadaan_umum"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "keadaan_umum";
//	kesadaran_gcs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "kesadaran_gcs";
	$fdata["GoodName"] = "kesadaran_gcs";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","kesadaran_gcs");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "kesadaran_gcs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kesadaran_gcs";

	
	
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


	$tdatakulit1["kesadaran_gcs"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "kesadaran_gcs";
//	tb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tb";
	$fdata["GoodName"] = "tb";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","tb");
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


	$tdatakulit1["tb"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "tb";
//	bb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "bb";
	$fdata["GoodName"] = "bb";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","bb");
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


	$tdatakulit1["bb"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "bb";
//	status_gizi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "status_gizi";
	$fdata["GoodName"] = "status_gizi";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","status_gizi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "status_gizi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_gizi";

	
	
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


	$tdatakulit1["status_gizi"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "status_gizi";
//	tensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "tensi";
	$fdata["GoodName"] = "tensi";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","tensi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "tensi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tensi";

	
	
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


	$tdatakulit1["tensi"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "tensi";
//	nadi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nadi";
	$fdata["GoodName"] = "nadi";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","nadi");
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


	$tdatakulit1["nadi"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "nadi";
//	rr_x_menit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "rr_x_menit";
	$fdata["GoodName"] = "rr_x_menit";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","rr_x_menit");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rr_x_menit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rr_x_menit";

	
	
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


	$tdatakulit1["rr_x_menit"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "rr_x_menit";
//	temp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "temp";
	$fdata["GoodName"] = "temp";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","temp");
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


	$tdatakulit1["temp"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "temp";
//	kepala
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "kepala";
	$fdata["GoodName"] = "kepala";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","kepala");
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


	$tdatakulit1["kepala"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "kepala";
//	leher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "leher";
	$fdata["GoodName"] = "leher";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","leher");
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


	$tdatakulit1["leher"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "leher";
//	thorax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "thorax";
	$fdata["GoodName"] = "thorax";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","thorax");
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


	$tdatakulit1["thorax"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "thorax";
//	abdomen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "abdomen";
	$fdata["GoodName"] = "abdomen";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","abdomen");
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


	$tdatakulit1["abdomen"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "abdomen";
//	ekstremitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ekstremitas";
	$fdata["GoodName"] = "ekstremitas";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","ekstremitas");
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


	$tdatakulit1["ekstremitas"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "ekstremitas";
//	status_dermatologis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "status_dermatologis";
	$fdata["GoodName"] = "status_dermatologis";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","status_dermatologis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "status_dermatologis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status_dermatologis";

	
	
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


	$tdatakulit1["status_dermatologis"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "status_dermatologis";
//	pmrksaan_lab_pnunjang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "pmrksaan_lab_pnunjang";
	$fdata["GoodName"] = "pmrksaan_lab_pnunjang";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","pmrksaan_lab_pnunjang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "pmrksaan_lab_pnunjang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pmrksaan_lab_pnunjang";

	
	
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


	$tdatakulit1["pmrksaan_lab_pnunjang"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "pmrksaan_lab_pnunjang";
//	resume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "resume";
	$fdata["GoodName"] = "resume";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","resume");
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


	$tdatakulit1["resume"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "resume";
//	diagnosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "diagnosis";
	$fdata["GoodName"] = "diagnosis";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","diagnosis");
	$fdata["FieldType"] = 201;

	
	
	
			

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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "DESCRIPTION";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "DESCRIPTION";

	

	
	$edata["LookupOrderBy"] = "DESCRIPTION";

	
	
	
	

	
	
	
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


	$tdatakulit1["diagnosis"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "diagnosis";
//	diagnosis_banding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "diagnosis_banding";
	$fdata["GoodName"] = "diagnosis_banding";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","diagnosis_banding");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diagnosis_banding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosis_banding";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "DESCRIPTION";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "DESCRIPTION";

	

	
	$edata["LookupOrderBy"] = "DESCRIPTION";

	
	
	
	

	
	
	
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


	$tdatakulit1["diagnosis_banding"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "diagnosis_banding";
//	diagnosis_planning
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "diagnosis_planning";
	$fdata["GoodName"] = "diagnosis_planning";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","diagnosis_planning");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "diagnosis_planning";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diagnosis_planning";

	
	
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


	$tdatakulit1["diagnosis_planning"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "diagnosis_planning";
//	terapi_medikamentosa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "terapi_medikamentosa";
	$fdata["GoodName"] = "terapi_medikamentosa";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","terapi_medikamentosa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "terapi_medikamentosa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "terapi_medikamentosa";

	
	
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


	$tdatakulit1["terapi_medikamentosa"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "terapi_medikamentosa";
//	terapi_nonmedikamentosa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "terapi_nonmedikamentosa";
	$fdata["GoodName"] = "terapi_nonmedikamentosa";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","terapi_nonmedikamentosa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "terapi_nonmedikamentosa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "terapi_nonmedikamentosa";

	
	
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


	$tdatakulit1["terapi_nonmedikamentosa"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "terapi_nonmedikamentosa";
//	monitoring
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "monitoring";
	$fdata["GoodName"] = "monitoring";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","monitoring");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "monitoring";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monitoring";

	
	
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


	$tdatakulit1["monitoring"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "monitoring";
//	edukasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "edukasi";
	$fdata["GoodName"] = "edukasi";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","edukasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "edukasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edukasi";

	
	
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


	$tdatakulit1["edukasi"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "edukasi";
//	prognosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "prognosis";
	$fdata["GoodName"] = "prognosis";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","prognosis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "prognosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prognosis";

	
	
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


	$tdatakulit1["prognosis"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "prognosis";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "kulit";
	$fdata["Label"] = GetFieldLabel("kulit1","Nomor_Rm");
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


	$tdatakulit1["Nomor_Rm"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Nomor_Rm";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("kulit1","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users.id";

	
	
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


	$tdatakulit1["id"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("kulit1","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users.name";

	
	
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


	$tdatakulit1["name"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "name";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("kulit1","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users.username";

	
	
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


	$tdatakulit1["username"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("kulit1","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "users.email";

	
	
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


	$tdatakulit1["email"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "email";
//	Id_Pasien1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Id_Pasien1";
	$fdata["GoodName"] = "Id_Pasien1";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Id_Pasien1");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Id_Pasien";

	
	
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


	$tdatakulit1["Id_Pasien1"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Id_Pasien1";
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Nama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Nama";

	
	
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


	$tdatakulit1["Nama"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Nama";
//	Alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Alamat";
	$fdata["GoodName"] = "Alamat";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Alamat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Alamat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Alamat";

	
	
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


	$tdatakulit1["Alamat"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Alamat";
//	Umur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Umur";
	$fdata["GoodName"] = "Umur";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Umur");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Umur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Umur";

	
	
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


	$tdatakulit1["Umur"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Umur";
//	Status_Perkawinan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Status_Perkawinan";
	$fdata["GoodName"] = "Status_Perkawinan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Status_Perkawinan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Status_Perkawinan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Status_Perkawinan";

	
	
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


	$tdatakulit1["Status_Perkawinan"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Status_Perkawinan";
//	Jenis Kelamin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Jenis Kelamin";
	$fdata["GoodName"] = "Jenis_Kelamin";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Jenis_Kelamin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Jenis Kelamin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.`Jenis Kelamin`";

	
	
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


	$tdatakulit1["Jenis Kelamin"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Jenis Kelamin";
//	Suku_Ras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Suku_Ras";
	$fdata["GoodName"] = "Suku_Ras";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Suku_Ras");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Suku_Ras";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Suku_Ras";

	
	
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


	$tdatakulit1["Suku_Ras"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Suku_Ras";
//	Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Agama";
	$fdata["GoodName"] = "Agama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Agama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Agama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Agama";

	
	
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


	$tdatakulit1["Agama"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Agama";
//	Kerja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Kerja";
	$fdata["GoodName"] = "Kerja";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Kerja");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Pekerjaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Pekerjaan";

	
	
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


	$tdatakulit1["Kerja"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Kerja";
//	Tanggal_MRS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Tanggal_MRS";
	$fdata["GoodName"] = "Tanggal_MRS";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("kulit1","Tanggal_MRS");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Tanggal_MRS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "identitas_pasien.Tanggal_MRS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatakulit1["Tanggal_MRS"] = $fdata;
		$tdatakulit1[".searchableFields"][] = "Tanggal_MRS";


$tables_data["kulit1"]=&$tdatakulit1;
$field_labels["kulit1"] = &$fieldLabelskulit1;
$fieldToolTips["kulit1"] = &$fieldToolTipskulit1;
$placeHolders["kulit1"] = &$placeHolderskulit1;
$page_titles["kulit1"] = &$pageTitleskulit1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["kulit1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["kulit1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_kulit1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_kulit,  	id_mhs,  	kulit.id_pasien,  	keluhan_pertama,  	keluhan_tmbhan,  	rwyt_skrg,  	rwyt_dulu,  	rwyt_klg,  	rwyt_alergi,  	rwyt_pengobatan,  	rwyt_kebiasaan,  	keadaan_umum,  	kesadaran_gcs,  	tb,  	bb,  	status_gizi,  	tensi,  	nadi,  	rr_x_menit,  	temp,  	kepala,  	leher,  	thorax,  	abdomen,  	ekstremitas,  	status_dermatologis,  	pmrksaan_lab_pnunjang,  	resume,  	diagnosis,  	diagnosis_banding,  	diagnosis_planning,  	terapi_medikamentosa,  	terapi_nonmedikamentosa,  	monitoring,  	edukasi,  	prognosis,  	Nomor_Rm,  users.id,  users.name,  users.username,  users.email,  identitas_pasien.Id_Pasien AS Id_Pasien1,  identitas_pasien.Nama,  identitas_pasien.Alamat,  identitas_pasien.Umur,  identitas_pasien.Status_Perkawinan,  identitas_pasien.`Jenis Kelamin`,  identitas_pasien.Suku_Ras,  identitas_pasien.Agama,  identitas_pasien.Pekerjaan AS Kerja,  identitas_pasien.Tanggal_MRS";
$proto0["m_strFrom"] = "FROM kulit   INNER JOIN identitas_pasien ON kulit.id_pasien = identitas_pasien.Id_Pasien  INNER JOIN users ON kulit.id_mhs = users.id";
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
	"m_strName" => "id_kulit",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto6["m_sql"] = "id_kulit";
$proto6["m_srcTableName"] = "kulit1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mhs",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto8["m_sql"] = "id_mhs";
$proto8["m_srcTableName"] = "kulit1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto10["m_sql"] = "kulit.id_pasien";
$proto10["m_srcTableName"] = "kulit1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_pertama",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto12["m_sql"] = "keluhan_pertama";
$proto12["m_srcTableName"] = "kulit1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keluhan_tmbhan",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto14["m_sql"] = "keluhan_tmbhan";
$proto14["m_srcTableName"] = "kulit1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_skrg",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto16["m_sql"] = "rwyt_skrg";
$proto16["m_srcTableName"] = "kulit1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_dulu",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto18["m_sql"] = "rwyt_dulu";
$proto18["m_srcTableName"] = "kulit1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_klg",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto20["m_sql"] = "rwyt_klg";
$proto20["m_srcTableName"] = "kulit1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_alergi",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto22["m_sql"] = "rwyt_alergi";
$proto22["m_srcTableName"] = "kulit1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_pengobatan",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto24["m_sql"] = "rwyt_pengobatan";
$proto24["m_srcTableName"] = "kulit1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "rwyt_kebiasaan",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto26["m_sql"] = "rwyt_kebiasaan";
$proto26["m_srcTableName"] = "kulit1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "keadaan_umum",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto28["m_sql"] = "keadaan_umum";
$proto28["m_srcTableName"] = "kulit1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "kesadaran_gcs",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto30["m_sql"] = "kesadaran_gcs";
$proto30["m_srcTableName"] = "kulit1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "tb",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto32["m_sql"] = "tb";
$proto32["m_srcTableName"] = "kulit1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "bb",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto34["m_sql"] = "bb";
$proto34["m_srcTableName"] = "kulit1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "status_gizi",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto36["m_sql"] = "status_gizi";
$proto36["m_srcTableName"] = "kulit1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "tensi",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto38["m_sql"] = "tensi";
$proto38["m_srcTableName"] = "kulit1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nadi",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto40["m_sql"] = "nadi";
$proto40["m_srcTableName"] = "kulit1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "rr_x_menit",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto42["m_sql"] = "rr_x_menit";
$proto42["m_srcTableName"] = "kulit1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "temp",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto44["m_sql"] = "temp";
$proto44["m_srcTableName"] = "kulit1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "kepala",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto46["m_sql"] = "kepala";
$proto46["m_srcTableName"] = "kulit1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "leher",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto48["m_sql"] = "leher";
$proto48["m_srcTableName"] = "kulit1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "thorax",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto50["m_sql"] = "thorax";
$proto50["m_srcTableName"] = "kulit1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "abdomen",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto52["m_sql"] = "abdomen";
$proto52["m_srcTableName"] = "kulit1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ekstremitas",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto54["m_sql"] = "ekstremitas";
$proto54["m_srcTableName"] = "kulit1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "status_dermatologis",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto56["m_sql"] = "status_dermatologis";
$proto56["m_srcTableName"] = "kulit1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "pmrksaan_lab_pnunjang",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto58["m_sql"] = "pmrksaan_lab_pnunjang";
$proto58["m_srcTableName"] = "kulit1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "resume",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto60["m_sql"] = "resume";
$proto60["m_srcTableName"] = "kulit1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosis",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto62["m_sql"] = "diagnosis";
$proto62["m_srcTableName"] = "kulit1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosis_banding",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto64["m_sql"] = "diagnosis_banding";
$proto64["m_srcTableName"] = "kulit1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "diagnosis_planning",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto66["m_sql"] = "diagnosis_planning";
$proto66["m_srcTableName"] = "kulit1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "terapi_medikamentosa",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto68["m_sql"] = "terapi_medikamentosa";
$proto68["m_srcTableName"] = "kulit1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "terapi_nonmedikamentosa",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto70["m_sql"] = "terapi_nonmedikamentosa";
$proto70["m_srcTableName"] = "kulit1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "monitoring",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto72["m_sql"] = "monitoring";
$proto72["m_srcTableName"] = "kulit1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "edukasi",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto74["m_sql"] = "edukasi";
$proto74["m_srcTableName"] = "kulit1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "prognosis",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto76["m_sql"] = "prognosis";
$proto76["m_srcTableName"] = "kulit1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto78["m_sql"] = "Nomor_Rm";
$proto78["m_srcTableName"] = "kulit1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "kulit1"
));

$proto80["m_sql"] = "users.id";
$proto80["m_srcTableName"] = "kulit1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "users",
	"m_srcTableName" => "kulit1"
));

$proto82["m_sql"] = "users.name";
$proto82["m_srcTableName"] = "kulit1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users",
	"m_srcTableName" => "kulit1"
));

$proto84["m_sql"] = "users.username";
$proto84["m_srcTableName"] = "kulit1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "kulit1"
));

$proto86["m_sql"] = "users.email";
$proto86["m_srcTableName"] = "kulit1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Pasien",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto88["m_sql"] = "identitas_pasien.Id_Pasien";
$proto88["m_srcTableName"] = "kulit1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "Id_Pasien1";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto90["m_sql"] = "identitas_pasien.Nama";
$proto90["m_srcTableName"] = "kulit1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Alamat",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto92["m_sql"] = "identitas_pasien.Alamat";
$proto92["m_srcTableName"] = "kulit1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Umur",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto94["m_sql"] = "identitas_pasien.Umur";
$proto94["m_srcTableName"] = "kulit1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_Perkawinan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto96["m_sql"] = "identitas_pasien.Status_Perkawinan";
$proto96["m_srcTableName"] = "kulit1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis Kelamin",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto98["m_sql"] = "identitas_pasien.`Jenis Kelamin`";
$proto98["m_srcTableName"] = "kulit1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Suku_Ras",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto100["m_sql"] = "identitas_pasien.Suku_Ras";
$proto100["m_srcTableName"] = "kulit1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Agama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto102["m_sql"] = "identitas_pasien.Agama";
$proto102["m_srcTableName"] = "kulit1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto104["m_sql"] = "identitas_pasien.Pekerjaan";
$proto104["m_srcTableName"] = "kulit1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "Kerja";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal_MRS",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "kulit1"
));

$proto106["m_sql"] = "identitas_pasien.Tanggal_MRS";
$proto106["m_srcTableName"] = "kulit1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "kulit";
$proto109["m_srcTableName"] = "kulit1";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "id_kulit";
$proto109["m_columns"][] = "id_mhs";
$proto109["m_columns"][] = "id_pasien";
$proto109["m_columns"][] = "keluhan_pertama";
$proto109["m_columns"][] = "keluhan_tmbhan";
$proto109["m_columns"][] = "rwyt_skrg";
$proto109["m_columns"][] = "rwyt_dulu";
$proto109["m_columns"][] = "rwyt_klg";
$proto109["m_columns"][] = "rwyt_alergi";
$proto109["m_columns"][] = "rwyt_pengobatan";
$proto109["m_columns"][] = "rwyt_kebiasaan";
$proto109["m_columns"][] = "keadaan_umum";
$proto109["m_columns"][] = "kesadaran_gcs";
$proto109["m_columns"][] = "tb";
$proto109["m_columns"][] = "bb";
$proto109["m_columns"][] = "status_gizi";
$proto109["m_columns"][] = "tensi";
$proto109["m_columns"][] = "nadi";
$proto109["m_columns"][] = "rr_x_menit";
$proto109["m_columns"][] = "temp";
$proto109["m_columns"][] = "kepala";
$proto109["m_columns"][] = "leher";
$proto109["m_columns"][] = "thorax";
$proto109["m_columns"][] = "abdomen";
$proto109["m_columns"][] = "ekstremitas";
$proto109["m_columns"][] = "status_dermatologis";
$proto109["m_columns"][] = "pmrksaan_lab_pnunjang";
$proto109["m_columns"][] = "resume";
$proto109["m_columns"][] = "diagnosis";
$proto109["m_columns"][] = "diagnosis_banding";
$proto109["m_columns"][] = "diagnosis_planning";
$proto109["m_columns"][] = "terapi_medikamentosa";
$proto109["m_columns"][] = "terapi_nonmedikamentosa";
$proto109["m_columns"][] = "monitoring";
$proto109["m_columns"][] = "edukasi";
$proto109["m_columns"][] = "prognosis";
$proto109["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "kulit";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "kulit1";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
												$proto112=array();
$proto112["m_link"] = "SQLL_INNERJOIN";
			$proto113=array();
$proto113["m_strName"] = "identitas_pasien";
$proto113["m_srcTableName"] = "kulit1";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "Id_Pasien";
$proto113["m_columns"][] = "Nama";
$proto113["m_columns"][] = "Alamat";
$proto113["m_columns"][] = "Umur";
$proto113["m_columns"][] = "Status_Perkawinan";
$proto113["m_columns"][] = "Jenis Kelamin";
$proto113["m_columns"][] = "Suku_Ras";
$proto113["m_columns"][] = "Agama";
$proto113["m_columns"][] = "Pekerjaan";
$proto113["m_columns"][] = "Tanggal_MRS";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "INNER JOIN identitas_pasien ON kulit.id_pasien = identitas_pasien.Id_Pasien";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "kulit1";
$proto114=array();
$proto114["m_sql"] = "kulit.id_pasien = identitas_pasien.Id_Pasien";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "= identitas_pasien.Id_Pasien";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
												$proto116=array();
$proto116["m_link"] = "SQLL_INNERJOIN";
			$proto117=array();
$proto117["m_strName"] = "users";
$proto117["m_srcTableName"] = "kulit1";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "id";
$proto117["m_columns"][] = "name";
$proto117["m_columns"][] = "username";
$proto117["m_columns"][] = "email";
$proto117["m_columns"][] = "email_verified_at";
$proto117["m_columns"][] = "password";
$proto117["m_columns"][] = "two_factor_secret";
$proto117["m_columns"][] = "two_factor_recovery_codes";
$proto117["m_columns"][] = "level";
$proto117["m_columns"][] = "remember_token";
$proto117["m_columns"][] = "profile_photo_path";
$proto117["m_columns"][] = "created_at";
$proto117["m_columns"][] = "updated_at";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "INNER JOIN users ON kulit.id_mhs = users.id";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "kulit1";
$proto118=array();
$proto118["m_sql"] = "kulit.id_mhs = users.id";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_mhs",
	"m_strTable" => "kulit",
	"m_srcTableName" => "kulit1"
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "= users.id";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="kulit1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kulit1 = createSqlQuery_kulit1();


	
		;

																																																			

$tdatakulit1[".sqlquery"] = $queryData_kulit1;



$tableEvents["kulit1"] = new eventsBase;
$tdatakulit1[".hasEvents"] = false;

?>