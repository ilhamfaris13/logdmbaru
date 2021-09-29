<?php
$tdatatht1 = array();
$tdatatht1[".searchableFields"] = array();
$tdatatht1[".ShortName"] = "tht1";
$tdatatht1[".OwnerID"] = "";
$tdatatht1[".OriginalTable"] = "tht";


$tdatatht1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatht1[".originalPagesByType"] = $tdatatht1[".pagesByType"];
$tdatatht1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatht1[".originalPages"] = $tdatatht1[".pages"];
$tdatatht1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatht1[".originalDefaultPages"] = $tdatatht1[".defaultPages"];

//	field labels
$fieldLabelstht1 = array();
$fieldToolTipstht1 = array();
$pageTitlestht1 = array();
$placeHolderstht1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstht1["English"] = array();
	$fieldToolTipstht1["English"] = array();
	$placeHolderstht1["English"] = array();
	$pageTitlestht1["English"] = array();
	$fieldLabelstht1["English"]["id_tht"] = "Id Tht";
	$fieldToolTipstht1["English"]["id_tht"] = "";
	$placeHolderstht1["English"]["id_tht"] = "";
	$fieldLabelstht1["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipstht1["English"]["Keluhan_Utama"] = "";
	$placeHolderstht1["English"]["Keluhan_Utama"] = "";
	$fieldLabelstht1["English"]["Keluhan_Tambahan"] = "Keluhan Tambahan";
	$fieldToolTipstht1["English"]["Keluhan_Tambahan"] = "";
	$placeHolderstht1["English"]["Keluhan_Tambahan"] = "";
	$fieldLabelstht1["English"]["Riwayat_Penyakit_Sekarang"] = "Riwayat Penyakit Sekarang";
	$fieldToolTipstht1["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$placeHolderstht1["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$fieldLabelstht1["English"]["Riwayat_Penyakit_Dahulu"] = "Riwayat Penyakit Dahulu";
	$fieldToolTipstht1["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$placeHolderstht1["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$fieldLabelstht1["English"]["Riwayat_Alergi"] = "Riwayat Alergi";
	$fieldToolTipstht1["English"]["Riwayat_Alergi"] = "";
	$placeHolderstht1["English"]["Riwayat_Alergi"] = "";
	$fieldLabelstht1["English"]["Riwayat_Penyakit_Keluarga"] = "Riwayat Penyakit Keluarga";
	$fieldToolTipstht1["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$placeHolderstht1["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$fieldLabelstht1["English"]["Riwayat_Pengobatan"] = "Riwayat Pengobatan";
	$fieldToolTipstht1["English"]["Riwayat_Pengobatan"] = "";
	$placeHolderstht1["English"]["Riwayat_Pengobatan"] = "";
	$fieldLabelstht1["English"]["Riwayat_Kebiasaan"] = "Riwayat Kebiasaan";
	$fieldToolTipstht1["English"]["Riwayat_Kebiasaan"] = "";
	$placeHolderstht1["English"]["Riwayat_Kebiasaan"] = "";
	$fieldLabelstht1["English"]["Riwayat_Sosial_Ekonomi"] = "Riwayat Sosial Ekonomi";
	$fieldToolTipstht1["English"]["Riwayat_Sosial_Ekonomi"] = "";
	$placeHolderstht1["English"]["Riwayat_Sosial_Ekonomi"] = "";
	$fieldLabelstht1["English"]["Pem_Umum"] = "Pem Umum";
	$fieldToolTipstht1["English"]["Pem_Umum"] = "";
	$placeHolderstht1["English"]["Pem_Umum"] = "";
	$fieldLabelstht1["English"]["Tanda_Vital"] = "Tanda Vital";
	$fieldToolTipstht1["English"]["Tanda_Vital"] = "";
	$placeHolderstht1["English"]["Tanda_Vital"] = "";
	$fieldLabelstht1["English"]["Kepala"] = "Kepala";
	$fieldToolTipstht1["English"]["Kepala"] = "";
	$placeHolderstht1["English"]["Kepala"] = "";
	$fieldLabelstht1["English"]["Leher"] = "Leher";
	$fieldToolTipstht1["English"]["Leher"] = "";
	$placeHolderstht1["English"]["Leher"] = "";
	$fieldLabelstht1["English"]["Telinga"] = "Telinga";
	$fieldToolTipstht1["English"]["Telinga"] = "";
	$placeHolderstht1["English"]["Telinga"] = "";
	$fieldLabelstht1["English"]["Hidung"] = "Hidung";
	$fieldToolTipstht1["English"]["Hidung"] = "";
	$placeHolderstht1["English"]["Hidung"] = "";
	$fieldLabelstht1["English"]["Mulut"] = "Mulut";
	$fieldToolTipstht1["English"]["Mulut"] = "";
	$placeHolderstht1["English"]["Mulut"] = "";
	$fieldLabelstht1["English"]["Epipharynx"] = "Epipharynx";
	$fieldToolTipstht1["English"]["Epipharynx"] = "";
	$placeHolderstht1["English"]["Epipharynx"] = "";
	$fieldLabelstht1["English"]["Larynx"] = "Larynx";
	$fieldToolTipstht1["English"]["Larynx"] = "";
	$placeHolderstht1["English"]["Larynx"] = "";
	$fieldLabelstht1["English"]["Diagnosa_Banding"] = "Diagnosa Banding";
	$fieldToolTipstht1["English"]["Diagnosa_Banding"] = "";
	$placeHolderstht1["English"]["Diagnosa_Banding"] = "";
	$fieldLabelstht1["English"]["Laboratorium"] = "Laboratorium";
	$fieldToolTipstht1["English"]["Laboratorium"] = "";
	$placeHolderstht1["English"]["Laboratorium"] = "";
	$fieldLabelstht1["English"]["Radiologi"] = "Radiologi";
	$fieldToolTipstht1["English"]["Radiologi"] = "";
	$placeHolderstht1["English"]["Radiologi"] = "";
	$fieldLabelstht1["English"]["Lain_lain"] = "Lain Lain";
	$fieldToolTipstht1["English"]["Lain_lain"] = "";
	$placeHolderstht1["English"]["Lain_lain"] = "";
	$fieldLabelstht1["English"]["Diagnosa"] = "Diagnosa";
	$fieldToolTipstht1["English"]["Diagnosa"] = "";
	$placeHolderstht1["English"]["Diagnosa"] = "";
	$fieldLabelstht1["English"]["Diagnosa_2"] = "Diagnosa 2";
	$fieldToolTipstht1["English"]["Diagnosa_2"] = "";
	$placeHolderstht1["English"]["Diagnosa_2"] = "";
	$fieldLabelstht1["English"]["Diagnosa_3"] = "Diagnosa 3";
	$fieldToolTipstht1["English"]["Diagnosa_3"] = "";
	$placeHolderstht1["English"]["Diagnosa_3"] = "";
	$fieldLabelstht1["English"]["Diagnosa_4"] = "Diagnosa 4";
	$fieldToolTipstht1["English"]["Diagnosa_4"] = "";
	$placeHolderstht1["English"]["Diagnosa_4"] = "";
	$fieldLabelstht1["English"]["Diagnosa_5"] = "Diagnosa 5";
	$fieldToolTipstht1["English"]["Diagnosa_5"] = "";
	$placeHolderstht1["English"]["Diagnosa_5"] = "";
	$fieldLabelstht1["English"]["Terapi_Farmakologi"] = "Terapi Farmakologi";
	$fieldToolTipstht1["English"]["Terapi_Farmakologi"] = "";
	$placeHolderstht1["English"]["Terapi_Farmakologi"] = "";
	$fieldLabelstht1["English"]["Terapi_Non_Farmakologi"] = "Terapi Non Farmakologi";
	$fieldToolTipstht1["English"]["Terapi_Non_Farmakologi"] = "";
	$placeHolderstht1["English"]["Terapi_Non_Farmakologi"] = "";
	$fieldLabelstht1["English"]["Edukasi"] = "Edukasi";
	$fieldToolTipstht1["English"]["Edukasi"] = "";
	$placeHolderstht1["English"]["Edukasi"] = "";
	$fieldLabelstht1["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipstht1["English"]["id_pasien"] = "";
	$placeHolderstht1["English"]["id_pasien"] = "";
	$fieldLabelstht1["English"]["id_user"] = "Id User";
	$fieldToolTipstht1["English"]["id_user"] = "";
	$placeHolderstht1["English"]["id_user"] = "";
	$fieldLabelstht1["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipstht1["English"]["Nomor_Rm"] = "";
	$placeHolderstht1["English"]["Nomor_Rm"] = "";
	$fieldLabelstht1["English"]["id"] = "Id";
	$fieldToolTipstht1["English"]["id"] = "";
	$placeHolderstht1["English"]["id"] = "";
	$fieldLabelstht1["English"]["name"] = "Name";
	$fieldToolTipstht1["English"]["name"] = "";
	$placeHolderstht1["English"]["name"] = "";
	$fieldLabelstht1["English"]["username"] = "Username";
	$fieldToolTipstht1["English"]["username"] = "";
	$placeHolderstht1["English"]["username"] = "";
	$fieldLabelstht1["English"]["email"] = "Email";
	$fieldToolTipstht1["English"]["email"] = "";
	$placeHolderstht1["English"]["email"] = "";
	$fieldLabelstht1["English"]["Id_Pasien1"] = "Id Pasien1";
	$fieldToolTipstht1["English"]["Id_Pasien1"] = "";
	$placeHolderstht1["English"]["Id_Pasien1"] = "";
	$fieldLabelstht1["English"]["Nama"] = "Nama";
	$fieldToolTipstht1["English"]["Nama"] = "";
	$placeHolderstht1["English"]["Nama"] = "";
	$fieldLabelstht1["English"]["Alamat"] = "Alamat";
	$fieldToolTipstht1["English"]["Alamat"] = "";
	$placeHolderstht1["English"]["Alamat"] = "";
	$fieldLabelstht1["English"]["Umur"] = "Umur";
	$fieldToolTipstht1["English"]["Umur"] = "";
	$placeHolderstht1["English"]["Umur"] = "";
	$fieldLabelstht1["English"]["Status_Perkawinan"] = "Status Perkawinan";
	$fieldToolTipstht1["English"]["Status_Perkawinan"] = "";
	$placeHolderstht1["English"]["Status_Perkawinan"] = "";
	$fieldLabelstht1["English"]["Jenis_Kelamin"] = "Jenis Kelamin";
	$fieldToolTipstht1["English"]["Jenis_Kelamin"] = "";
	$placeHolderstht1["English"]["Jenis_Kelamin"] = "";
	$fieldLabelstht1["English"]["Suku_Ras"] = "Suku Ras";
	$fieldToolTipstht1["English"]["Suku_Ras"] = "";
	$placeHolderstht1["English"]["Suku_Ras"] = "";
	$fieldLabelstht1["English"]["Agama"] = "Agama";
	$fieldToolTipstht1["English"]["Agama"] = "";
	$placeHolderstht1["English"]["Agama"] = "";
	$fieldLabelstht1["English"]["Kerja"] = "Kerja";
	$fieldToolTipstht1["English"]["Kerja"] = "";
	$placeHolderstht1["English"]["Kerja"] = "";
	$fieldLabelstht1["English"]["Tanggal_MRS"] = "Tanggal MRS";
	$fieldToolTipstht1["English"]["Tanggal_MRS"] = "";
	$placeHolderstht1["English"]["Tanggal_MRS"] = "";
	if (count($fieldToolTipstht1["English"]))
		$tdatatht1[".isUseToolTips"] = true;
}


	$tdatatht1[".NCSearch"] = true;



$tdatatht1[".shortTableName"] = "tht1";
$tdatatht1[".nSecOptions"] = 0;

$tdatatht1[".mainTableOwnerID"] = "";
$tdatatht1[".entityType"] = 1;
$tdatatht1[".connId"] = "newrm_at_localhost";


$tdatatht1[".strOriginalTableName"] = "tht";

	



$tdatatht1[".showAddInPopup"] = false;

$tdatatht1[".showEditInPopup"] = false;

$tdatatht1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatht1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatht1[".listAjax"] = false;
//	temporary
$tdatatht1[".listAjax"] = false;

	$tdatatht1[".audit"] = false;

	$tdatatht1[".locking"] = false;


$pages = $tdatatht1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatht1[".edit"] = true;
	$tdatatht1[".afterEditAction"] = 1;
	$tdatatht1[".closePopupAfterEdit"] = 1;
	$tdatatht1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatht1[".add"] = true;
$tdatatht1[".afterAddAction"] = 1;
$tdatatht1[".closePopupAfterAdd"] = 1;
$tdatatht1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatht1[".list"] = true;
}



$tdatatht1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatht1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatht1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatht1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatht1[".printFriendly"] = true;
}



$tdatatht1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatht1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatht1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatht1[".isUseAjaxSuggest"] = true;

$tdatatht1[".rowHighlite"] = true;





$tdatatht1[".ajaxCodeSnippetAdded"] = false;

$tdatatht1[".buttonsAdded"] = false;

$tdatatht1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatht1[".isUseTimeForSearch"] = false;


$tdatatht1[".badgeColor"] = "1E90FF";


$tdatatht1[".allSearchFields"] = array();
$tdatatht1[".filterFields"] = array();
$tdatatht1[".requiredSearchFields"] = array();

$tdatatht1[".googleLikeFields"] = array();
$tdatatht1[".googleLikeFields"][] = "id_tht";
$tdatatht1[".googleLikeFields"][] = "Keluhan_Utama";
$tdatatht1[".googleLikeFields"][] = "Keluhan_Tambahan";
$tdatatht1[".googleLikeFields"][] = "Riwayat_Penyakit_Sekarang";
$tdatatht1[".googleLikeFields"][] = "Riwayat_Penyakit_Dahulu";
$tdatatht1[".googleLikeFields"][] = "Riwayat_Alergi";
$tdatatht1[".googleLikeFields"][] = "Riwayat_Penyakit_Keluarga";
$tdatatht1[".googleLikeFields"][] = "Riwayat_Pengobatan";
$tdatatht1[".googleLikeFields"][] = "Riwayat_Kebiasaan";
$tdatatht1[".googleLikeFields"][] = "Riwayat_Sosial_Ekonomi";
$tdatatht1[".googleLikeFields"][] = "Pem_Umum";
$tdatatht1[".googleLikeFields"][] = "Tanda_Vital";
$tdatatht1[".googleLikeFields"][] = "Kepala";
$tdatatht1[".googleLikeFields"][] = "Leher";
$tdatatht1[".googleLikeFields"][] = "Telinga";
$tdatatht1[".googleLikeFields"][] = "Hidung";
$tdatatht1[".googleLikeFields"][] = "Mulut";
$tdatatht1[".googleLikeFields"][] = "Epipharynx";
$tdatatht1[".googleLikeFields"][] = "Larynx";
$tdatatht1[".googleLikeFields"][] = "Diagnosa_Banding";
$tdatatht1[".googleLikeFields"][] = "Laboratorium";
$tdatatht1[".googleLikeFields"][] = "Radiologi";
$tdatatht1[".googleLikeFields"][] = "Lain_lain";
$tdatatht1[".googleLikeFields"][] = "Diagnosa";
$tdatatht1[".googleLikeFields"][] = "Diagnosa_2";
$tdatatht1[".googleLikeFields"][] = "Diagnosa_3";
$tdatatht1[".googleLikeFields"][] = "Diagnosa_4";
$tdatatht1[".googleLikeFields"][] = "Diagnosa_5";
$tdatatht1[".googleLikeFields"][] = "Terapi_Farmakologi";
$tdatatht1[".googleLikeFields"][] = "Terapi_Non_Farmakologi";
$tdatatht1[".googleLikeFields"][] = "Edukasi";
$tdatatht1[".googleLikeFields"][] = "id_pasien";
$tdatatht1[".googleLikeFields"][] = "id_user";
$tdatatht1[".googleLikeFields"][] = "Nomor_Rm";
$tdatatht1[".googleLikeFields"][] = "id";
$tdatatht1[".googleLikeFields"][] = "name";
$tdatatht1[".googleLikeFields"][] = "username";
$tdatatht1[".googleLikeFields"][] = "email";
$tdatatht1[".googleLikeFields"][] = "Id_Pasien1";
$tdatatht1[".googleLikeFields"][] = "Nama";
$tdatatht1[".googleLikeFields"][] = "Alamat";
$tdatatht1[".googleLikeFields"][] = "Umur";
$tdatatht1[".googleLikeFields"][] = "Status_Perkawinan";
$tdatatht1[".googleLikeFields"][] = "Jenis Kelamin";
$tdatatht1[".googleLikeFields"][] = "Suku_Ras";
$tdatatht1[".googleLikeFields"][] = "Agama";
$tdatatht1[".googleLikeFields"][] = "Kerja";
$tdatatht1[".googleLikeFields"][] = "Tanggal_MRS";



$tdatatht1[".tableType"] = "list";

$tdatatht1[".printerPageOrientation"] = 0;
$tdatatht1[".nPrinterPageScale"] = 100;

$tdatatht1[".nPrinterSplitRecords"] = 40;

$tdatatht1[".geocodingEnabled"] = false;










$tdatatht1[".pageSize"] = 20;

$tdatatht1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatht1[".strOrderBy"] = $tstrOrderBy;

$tdatatht1[".orderindexes"] = array();


$tdatatht1[".sqlHead"] = "SELECT id_tht,  	Keluhan_Utama,  	Keluhan_Tambahan,  	Riwayat_Penyakit_Sekarang,  	Riwayat_Penyakit_Dahulu,  	Riwayat_Alergi,  	Riwayat_Penyakit_Keluarga,  	Riwayat_Pengobatan,  	Riwayat_Kebiasaan,  	Riwayat_Sosial_Ekonomi,  	Pem_Umum,  	Tanda_Vital,  	Kepala,  	Leher,  	Telinga,  	Hidung,  	Mulut,  	Epipharynx,  	Larynx,  	Diagnosa_Banding,  	Laboratorium,  	Radiologi,  	Lain_lain,  	Diagnosa,  	Diagnosa_2,  	Diagnosa_3,  	Diagnosa_4,  	Diagnosa_5,  	Terapi_Farmakologi,  	Terapi_Non_Farmakologi,  	Edukasi,  	tht.id_pasien,  	id_user,  	Nomor_Rm,  users.id,  users.name,  users.username,  users.email,  identitas_pasien.Id_Pasien AS Id_Pasien1,  identitas_pasien.Nama,  identitas_pasien.Alamat,  identitas_pasien.Umur,  identitas_pasien.Status_Perkawinan,  identitas_pasien.`Jenis Kelamin`,  identitas_pasien.Suku_Ras,  identitas_pasien.Agama,  identitas_pasien.Pekerjaan AS Kerja,  identitas_pasien.Tanggal_MRS";
$tdatatht1[".sqlFrom"] = "FROM tht   INNER JOIN identitas_pasien ON tht.id_pasien = identitas_pasien.Id_Pasien  INNER JOIN users ON tht.id_user = users.id";
$tdatatht1[".sqlWhereExpr"] = "";
$tdatatht1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatht1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatht1[".arrGroupsPerPage"] = $arrGPP;

$tdatatht1[".highlightSearchResults"] = true;

$tableKeystht1 = array();
$tableKeystht1[] = "id_tht";
$tdatatht1[".Keys"] = $tableKeystht1;


$tdatatht1[".hideMobileList"] = array();




//	id_tht
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_tht";
	$fdata["GoodName"] = "id_tht";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","id_tht");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_tht";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_tht";

	
	
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


	$tdatatht1["id_tht"] = $fdata;
		$tdatatht1[".searchableFields"][] = "id_tht";
//	Keluhan_Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan_Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Keluhan_Utama");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keluhan_Utama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Keluhan_Utama";

	
	
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


	$tdatatht1["Keluhan_Utama"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Keluhan_Utama";
//	Keluhan_Tambahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Keluhan_Tambahan";
	$fdata["GoodName"] = "Keluhan_Tambahan";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Keluhan_Tambahan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keluhan_Tambahan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Keluhan_Tambahan";

	
	
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


	$tdatatht1["Keluhan_Tambahan"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Keluhan_Tambahan";
//	Riwayat_Penyakit_Sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["GoodName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Riwayat_Penyakit_Sekarang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Penyakit_Sekarang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Penyakit_Sekarang";

	
	
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


	$tdatatht1["Riwayat_Penyakit_Sekarang"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Riwayat_Penyakit_Sekarang";
//	Riwayat_Penyakit_Dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["GoodName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Riwayat_Penyakit_Dahulu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Penyakit_Dahulu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Penyakit_Dahulu";

	
	
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


	$tdatatht1["Riwayat_Penyakit_Dahulu"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Riwayat_Penyakit_Dahulu";
//	Riwayat_Alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat_Alergi";
	$fdata["GoodName"] = "Riwayat_Alergi";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Riwayat_Alergi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Alergi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Alergi";

	
	
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


	$tdatatht1["Riwayat_Alergi"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Riwayat_Alergi";
//	Riwayat_Penyakit_Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["GoodName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Riwayat_Penyakit_Keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Penyakit_Keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Penyakit_Keluarga";

	
	
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


	$tdatatht1["Riwayat_Penyakit_Keluarga"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Riwayat_Penyakit_Keluarga";
//	Riwayat_Pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat_Pengobatan";
	$fdata["GoodName"] = "Riwayat_Pengobatan";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Riwayat_Pengobatan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Pengobatan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Pengobatan";

	
	
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


	$tdatatht1["Riwayat_Pengobatan"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Riwayat_Pengobatan";
//	Riwayat_Kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat_Kebiasaan";
	$fdata["GoodName"] = "Riwayat_Kebiasaan";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Riwayat_Kebiasaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Kebiasaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Kebiasaan";

	
	
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


	$tdatatht1["Riwayat_Kebiasaan"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Riwayat_Kebiasaan";
//	Riwayat_Sosial_Ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat_Sosial_Ekonomi";
	$fdata["GoodName"] = "Riwayat_Sosial_Ekonomi";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Riwayat_Sosial_Ekonomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Sosial_Ekonomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Sosial_Ekonomi";

	
	
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


	$tdatatht1["Riwayat_Sosial_Ekonomi"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Riwayat_Sosial_Ekonomi";
//	Pem_Umum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Pem_Umum";
	$fdata["GoodName"] = "Pem_Umum";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Pem_Umum");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pem_Umum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pem_Umum";

	
	
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


	$tdatatht1["Pem_Umum"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Pem_Umum";
//	Tanda_Vital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Tanda_Vital";
	$fdata["GoodName"] = "Tanda_Vital";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Tanda_Vital");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tanda_Vital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tanda_Vital";

	
	
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


	$tdatatht1["Tanda_Vital"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Tanda_Vital";
//	Kepala
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Kepala";
	$fdata["GoodName"] = "Kepala";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Kepala");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kepala";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kepala";

	
	
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


	$tdatatht1["Kepala"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Kepala";
//	Leher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Leher";
	$fdata["GoodName"] = "Leher";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Leher");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Leher";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Leher";

	
	
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


	$tdatatht1["Leher"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Leher";
//	Telinga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Telinga";
	$fdata["GoodName"] = "Telinga";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Telinga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Telinga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telinga";

	
	
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


	$tdatatht1["Telinga"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Telinga";
//	Hidung
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Hidung";
	$fdata["GoodName"] = "Hidung";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Hidung");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hidung";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hidung";

	
	
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


	$tdatatht1["Hidung"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Hidung";
//	Mulut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Mulut";
	$fdata["GoodName"] = "Mulut";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Mulut");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mulut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mulut";

	
	
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


	$tdatatht1["Mulut"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Mulut";
//	Epipharynx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Epipharynx";
	$fdata["GoodName"] = "Epipharynx";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Epipharynx");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Epipharynx";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Epipharynx";

	
	
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


	$tdatatht1["Epipharynx"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Epipharynx";
//	Larynx
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Larynx";
	$fdata["GoodName"] = "Larynx";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Larynx");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Larynx";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Larynx";

	
	
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


	$tdatatht1["Larynx"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Larynx";
//	Diagnosa_Banding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Diagnosa_Banding";
	$fdata["GoodName"] = "Diagnosa_Banding";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Diagnosa_Banding");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosa_Banding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosa_Banding";

	
	
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


	$tdatatht1["Diagnosa_Banding"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Diagnosa_Banding";
//	Laboratorium
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Laboratorium";
	$fdata["GoodName"] = "Laboratorium";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Laboratorium");
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


	$tdatatht1["Laboratorium"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Laboratorium";
//	Radiologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Radiologi";
	$fdata["GoodName"] = "Radiologi";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Radiologi");
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


	$tdatatht1["Radiologi"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Radiologi";
//	Lain_lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Lain_lain";
	$fdata["GoodName"] = "Lain_lain";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Lain_lain");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lain_lain";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lain_lain";

	
	
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


	$tdatatht1["Lain_lain"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Lain_lain";
//	Diagnosa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Diagnosa";
	$fdata["GoodName"] = "Diagnosa";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Diagnosa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosa";

	
	
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


	$tdatatht1["Diagnosa"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Diagnosa";
//	Diagnosa_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Diagnosa_2";
	$fdata["GoodName"] = "Diagnosa_2";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Diagnosa_2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosa_2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosa_2";

	
	
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


	$tdatatht1["Diagnosa_2"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Diagnosa_2";
//	Diagnosa_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Diagnosa_3";
	$fdata["GoodName"] = "Diagnosa_3";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Diagnosa_3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosa_3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosa_3";

	
	
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


	$tdatatht1["Diagnosa_3"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Diagnosa_3";
//	Diagnosa_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Diagnosa_4";
	$fdata["GoodName"] = "Diagnosa_4";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Diagnosa_4");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosa_4";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosa_4";

	
	
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


	$tdatatht1["Diagnosa_4"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Diagnosa_4";
//	Diagnosa_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Diagnosa_5";
	$fdata["GoodName"] = "Diagnosa_5";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Diagnosa_5");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosa_5";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosa_5";

	
	
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


	$tdatatht1["Diagnosa_5"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Diagnosa_5";
//	Terapi_Farmakologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Terapi_Farmakologi";
	$fdata["GoodName"] = "Terapi_Farmakologi";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Terapi_Farmakologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Terapi_Farmakologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Terapi_Farmakologi";

	
	
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


	$tdatatht1["Terapi_Farmakologi"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Terapi_Farmakologi";
//	Terapi_Non_Farmakologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Terapi_Non_Farmakologi";
	$fdata["GoodName"] = "Terapi_Non_Farmakologi";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Terapi_Non_Farmakologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Terapi_Non_Farmakologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Terapi_Non_Farmakologi";

	
	
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


	$tdatatht1["Terapi_Non_Farmakologi"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Terapi_Non_Farmakologi";
//	Edukasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Edukasi";
	$fdata["GoodName"] = "Edukasi";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Edukasi");
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


	$tdatatht1["Edukasi"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Edukasi";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","id_pasien");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tht.id_pasien";

	
	
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


	$tdatatht1["id_pasien"] = $fdata;
		$tdatatht1[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","id_user");
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


	$tdatatht1["id_user"] = $fdata;
		$tdatatht1[".searchableFields"][] = "id_user";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "tht";
	$fdata["Label"] = GetFieldLabel("tht1","Nomor_Rm");
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


	$tdatatht1["Nomor_Rm"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Nomor_Rm";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("tht1","id");
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


	$tdatatht1["id"] = $fdata;
		$tdatatht1[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("tht1","name");
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


	$tdatatht1["name"] = $fdata;
		$tdatatht1[".searchableFields"][] = "name";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("tht1","username");
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


	$tdatatht1["username"] = $fdata;
		$tdatatht1[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("tht1","email");
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


	$tdatatht1["email"] = $fdata;
		$tdatatht1[".searchableFields"][] = "email";
//	Id_Pasien1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Id_Pasien1";
	$fdata["GoodName"] = "Id_Pasien1";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Id_Pasien1");
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


	$tdatatht1["Id_Pasien1"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Id_Pasien1";
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Nama");
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


	$tdatatht1["Nama"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Nama";
//	Alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Alamat";
	$fdata["GoodName"] = "Alamat";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Alamat");
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


	$tdatatht1["Alamat"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Alamat";
//	Umur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Umur";
	$fdata["GoodName"] = "Umur";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Umur");
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


	$tdatatht1["Umur"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Umur";
//	Status_Perkawinan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Status_Perkawinan";
	$fdata["GoodName"] = "Status_Perkawinan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Status_Perkawinan");
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


	$tdatatht1["Status_Perkawinan"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Status_Perkawinan";
//	Jenis Kelamin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Jenis Kelamin";
	$fdata["GoodName"] = "Jenis_Kelamin";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Jenis_Kelamin");
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


	$tdatatht1["Jenis Kelamin"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Jenis Kelamin";
//	Suku_Ras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Suku_Ras";
	$fdata["GoodName"] = "Suku_Ras";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Suku_Ras");
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


	$tdatatht1["Suku_Ras"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Suku_Ras";
//	Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Agama";
	$fdata["GoodName"] = "Agama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Agama");
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


	$tdatatht1["Agama"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Agama";
//	Kerja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Kerja";
	$fdata["GoodName"] = "Kerja";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Kerja");
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


	$tdatatht1["Kerja"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Kerja";
//	Tanggal_MRS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Tanggal_MRS";
	$fdata["GoodName"] = "Tanggal_MRS";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("tht1","Tanggal_MRS");
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


	$tdatatht1["Tanggal_MRS"] = $fdata;
		$tdatatht1[".searchableFields"][] = "Tanggal_MRS";


$tables_data["tht1"]=&$tdatatht1;
$field_labels["tht1"] = &$fieldLabelstht1;
$fieldToolTips["tht1"] = &$fieldToolTipstht1;
$placeHolders["tht1"] = &$placeHolderstht1;
$page_titles["tht1"] = &$pageTitlestht1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tht1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tht1"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tht1"][0] = $masterParams;
				$masterTablesData["tht1"][0]["masterKeys"] = array();
	$masterTablesData["tht1"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["tht1"][0]["detailKeys"] = array();
	$masterTablesData["tht1"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tht1"][1] = $masterParams;
				$masterTablesData["tht1"][1]["masterKeys"] = array();
	$masterTablesData["tht1"][1]["masterKeys"][]="id";
				$masterTablesData["tht1"][1]["detailKeys"] = array();
	$masterTablesData["tht1"][1]["detailKeys"][]="id_user";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tht1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_tht,  	Keluhan_Utama,  	Keluhan_Tambahan,  	Riwayat_Penyakit_Sekarang,  	Riwayat_Penyakit_Dahulu,  	Riwayat_Alergi,  	Riwayat_Penyakit_Keluarga,  	Riwayat_Pengobatan,  	Riwayat_Kebiasaan,  	Riwayat_Sosial_Ekonomi,  	Pem_Umum,  	Tanda_Vital,  	Kepala,  	Leher,  	Telinga,  	Hidung,  	Mulut,  	Epipharynx,  	Larynx,  	Diagnosa_Banding,  	Laboratorium,  	Radiologi,  	Lain_lain,  	Diagnosa,  	Diagnosa_2,  	Diagnosa_3,  	Diagnosa_4,  	Diagnosa_5,  	Terapi_Farmakologi,  	Terapi_Non_Farmakologi,  	Edukasi,  	tht.id_pasien,  	id_user,  	Nomor_Rm,  users.id,  users.name,  users.username,  users.email,  identitas_pasien.Id_Pasien AS Id_Pasien1,  identitas_pasien.Nama,  identitas_pasien.Alamat,  identitas_pasien.Umur,  identitas_pasien.Status_Perkawinan,  identitas_pasien.`Jenis Kelamin`,  identitas_pasien.Suku_Ras,  identitas_pasien.Agama,  identitas_pasien.Pekerjaan AS Kerja,  identitas_pasien.Tanggal_MRS";
$proto0["m_strFrom"] = "FROM tht   INNER JOIN identitas_pasien ON tht.id_pasien = identitas_pasien.Id_Pasien  INNER JOIN users ON tht.id_user = users.id";
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
	"m_strName" => "id_tht",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto6["m_sql"] = "id_tht";
$proto6["m_srcTableName"] = "tht1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Utama",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto8["m_sql"] = "Keluhan_Utama";
$proto8["m_srcTableName"] = "tht1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Tambahan",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto10["m_sql"] = "Keluhan_Tambahan";
$proto10["m_srcTableName"] = "tht1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Sekarang",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto12["m_sql"] = "Riwayat_Penyakit_Sekarang";
$proto12["m_srcTableName"] = "tht1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Dahulu",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto14["m_sql"] = "Riwayat_Penyakit_Dahulu";
$proto14["m_srcTableName"] = "tht1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Alergi",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto16["m_sql"] = "Riwayat_Alergi";
$proto16["m_srcTableName"] = "tht1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Keluarga",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto18["m_sql"] = "Riwayat_Penyakit_Keluarga";
$proto18["m_srcTableName"] = "tht1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Pengobatan",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto20["m_sql"] = "Riwayat_Pengobatan";
$proto20["m_srcTableName"] = "tht1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Kebiasaan",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto22["m_sql"] = "Riwayat_Kebiasaan";
$proto22["m_srcTableName"] = "tht1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Sosial_Ekonomi",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto24["m_sql"] = "Riwayat_Sosial_Ekonomi";
$proto24["m_srcTableName"] = "tht1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Pem_Umum",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto26["m_sql"] = "Pem_Umum";
$proto26["m_srcTableName"] = "tht1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanda_Vital",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto28["m_sql"] = "Tanda_Vital";
$proto28["m_srcTableName"] = "tht1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Kepala",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto30["m_sql"] = "Kepala";
$proto30["m_srcTableName"] = "tht1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Leher",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto32["m_sql"] = "Leher";
$proto32["m_srcTableName"] = "tht1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Telinga",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto34["m_sql"] = "Telinga";
$proto34["m_srcTableName"] = "tht1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Hidung",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto36["m_sql"] = "Hidung";
$proto36["m_srcTableName"] = "tht1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Mulut",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto38["m_sql"] = "Mulut";
$proto38["m_srcTableName"] = "tht1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Epipharynx",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto40["m_sql"] = "Epipharynx";
$proto40["m_srcTableName"] = "tht1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Larynx",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto42["m_sql"] = "Larynx";
$proto42["m_srcTableName"] = "tht1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa_Banding",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto44["m_sql"] = "Diagnosa_Banding";
$proto44["m_srcTableName"] = "tht1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Laboratorium",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto46["m_sql"] = "Laboratorium";
$proto46["m_srcTableName"] = "tht1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Radiologi",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto48["m_sql"] = "Radiologi";
$proto48["m_srcTableName"] = "tht1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Lain_lain",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto50["m_sql"] = "Lain_lain";
$proto50["m_srcTableName"] = "tht1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto52["m_sql"] = "Diagnosa";
$proto52["m_srcTableName"] = "tht1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa_2",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto54["m_sql"] = "Diagnosa_2";
$proto54["m_srcTableName"] = "tht1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa_3",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto56["m_sql"] = "Diagnosa_3";
$proto56["m_srcTableName"] = "tht1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa_4",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto58["m_sql"] = "Diagnosa_4";
$proto58["m_srcTableName"] = "tht1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa_5",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto60["m_sql"] = "Diagnosa_5";
$proto60["m_srcTableName"] = "tht1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Terapi_Farmakologi",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto62["m_sql"] = "Terapi_Farmakologi";
$proto62["m_srcTableName"] = "tht1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Terapi_Non_Farmakologi",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto64["m_sql"] = "Terapi_Non_Farmakologi";
$proto64["m_srcTableName"] = "tht1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Edukasi",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto66["m_sql"] = "Edukasi";
$proto66["m_srcTableName"] = "tht1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto68["m_sql"] = "tht.id_pasien";
$proto68["m_srcTableName"] = "tht1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto70["m_sql"] = "id_user";
$proto70["m_srcTableName"] = "tht1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto72["m_sql"] = "Nomor_Rm";
$proto72["m_srcTableName"] = "tht1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "tht1"
));

$proto74["m_sql"] = "users.id";
$proto74["m_srcTableName"] = "tht1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "users",
	"m_srcTableName" => "tht1"
));

$proto76["m_sql"] = "users.name";
$proto76["m_srcTableName"] = "tht1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users",
	"m_srcTableName" => "tht1"
));

$proto78["m_sql"] = "users.username";
$proto78["m_srcTableName"] = "tht1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "tht1"
));

$proto80["m_sql"] = "users.email";
$proto80["m_srcTableName"] = "tht1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Pasien",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto82["m_sql"] = "identitas_pasien.Id_Pasien";
$proto82["m_srcTableName"] = "tht1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "Id_Pasien1";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto84["m_sql"] = "identitas_pasien.Nama";
$proto84["m_srcTableName"] = "tht1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Alamat",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto86["m_sql"] = "identitas_pasien.Alamat";
$proto86["m_srcTableName"] = "tht1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Umur",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto88["m_sql"] = "identitas_pasien.Umur";
$proto88["m_srcTableName"] = "tht1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_Perkawinan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto90["m_sql"] = "identitas_pasien.Status_Perkawinan";
$proto90["m_srcTableName"] = "tht1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis Kelamin",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto92["m_sql"] = "identitas_pasien.`Jenis Kelamin`";
$proto92["m_srcTableName"] = "tht1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Suku_Ras",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto94["m_sql"] = "identitas_pasien.Suku_Ras";
$proto94["m_srcTableName"] = "tht1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Agama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto96["m_sql"] = "identitas_pasien.Agama";
$proto96["m_srcTableName"] = "tht1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto98["m_sql"] = "identitas_pasien.Pekerjaan";
$proto98["m_srcTableName"] = "tht1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "Kerja";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal_MRS",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "tht1"
));

$proto100["m_sql"] = "identitas_pasien.Tanggal_MRS";
$proto100["m_srcTableName"] = "tht1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "tht";
$proto103["m_srcTableName"] = "tht1";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "id_tht";
$proto103["m_columns"][] = "Keluhan_Utama";
$proto103["m_columns"][] = "Keluhan_Tambahan";
$proto103["m_columns"][] = "Riwayat_Penyakit_Sekarang";
$proto103["m_columns"][] = "Riwayat_Penyakit_Dahulu";
$proto103["m_columns"][] = "Riwayat_Alergi";
$proto103["m_columns"][] = "Riwayat_Penyakit_Keluarga";
$proto103["m_columns"][] = "Riwayat_Pengobatan";
$proto103["m_columns"][] = "Riwayat_Kebiasaan";
$proto103["m_columns"][] = "Riwayat_Sosial_Ekonomi";
$proto103["m_columns"][] = "Pem_Umum";
$proto103["m_columns"][] = "Tanda_Vital";
$proto103["m_columns"][] = "Kepala";
$proto103["m_columns"][] = "Leher";
$proto103["m_columns"][] = "Telinga";
$proto103["m_columns"][] = "Hidung";
$proto103["m_columns"][] = "Mulut";
$proto103["m_columns"][] = "Epipharynx";
$proto103["m_columns"][] = "Larynx";
$proto103["m_columns"][] = "Diagnosa_Banding";
$proto103["m_columns"][] = "Laboratorium";
$proto103["m_columns"][] = "Radiologi";
$proto103["m_columns"][] = "Lain_lain";
$proto103["m_columns"][] = "Diagnosa";
$proto103["m_columns"][] = "Diagnosa_2";
$proto103["m_columns"][] = "Diagnosa_3";
$proto103["m_columns"][] = "Diagnosa_4";
$proto103["m_columns"][] = "Diagnosa_5";
$proto103["m_columns"][] = "Terapi_Farmakologi";
$proto103["m_columns"][] = "Terapi_Non_Farmakologi";
$proto103["m_columns"][] = "Edukasi";
$proto103["m_columns"][] = "id_pasien";
$proto103["m_columns"][] = "id_user";
$proto103["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "tht";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "tht1";
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
												$proto106=array();
$proto106["m_link"] = "SQLL_INNERJOIN";
			$proto107=array();
$proto107["m_strName"] = "identitas_pasien";
$proto107["m_srcTableName"] = "tht1";
$proto107["m_columns"] = array();
$proto107["m_columns"][] = "Id_Pasien";
$proto107["m_columns"][] = "Nama";
$proto107["m_columns"][] = "Alamat";
$proto107["m_columns"][] = "Umur";
$proto107["m_columns"][] = "Status_Perkawinan";
$proto107["m_columns"][] = "Jenis Kelamin";
$proto107["m_columns"][] = "Suku_Ras";
$proto107["m_columns"][] = "Agama";
$proto107["m_columns"][] = "Pekerjaan";
$proto107["m_columns"][] = "Tanggal_MRS";
$obj = new SQLTable($proto107);

$proto106["m_table"] = $obj;
$proto106["m_sql"] = "INNER JOIN identitas_pasien ON tht.id_pasien = identitas_pasien.Id_Pasien";
$proto106["m_alias"] = "";
$proto106["m_srcTableName"] = "tht1";
$proto108=array();
$proto108["m_sql"] = "tht.id_pasien = identitas_pasien.Id_Pasien";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= identitas_pasien.Id_Pasien";
$proto108["m_havingmode"] = false;
$proto108["m_inBrackets"] = false;
$proto108["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto108);

$proto106["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto106);

$proto0["m_fromlist"][]=$obj;
												$proto110=array();
$proto110["m_link"] = "SQLL_INNERJOIN";
			$proto111=array();
$proto111["m_strName"] = "users";
$proto111["m_srcTableName"] = "tht1";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id";
$proto111["m_columns"][] = "name";
$proto111["m_columns"][] = "username";
$proto111["m_columns"][] = "email";
$proto111["m_columns"][] = "email_verified_at";
$proto111["m_columns"][] = "password";
$proto111["m_columns"][] = "two_factor_secret";
$proto111["m_columns"][] = "two_factor_recovery_codes";
$proto111["m_columns"][] = "level";
$proto111["m_columns"][] = "remember_token";
$proto111["m_columns"][] = "profile_photo_path";
$proto111["m_columns"][] = "created_at";
$proto111["m_columns"][] = "updated_at";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "INNER JOIN users ON tht.id_user = users.id";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "tht1";
$proto112=array();
$proto112["m_sql"] = "tht.id_user = users.id";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "tht",
	"m_srcTableName" => "tht1"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= users.id";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tht1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tht1 = createSqlQuery_tht1();


	
		;

																																																

$tdatatht1[".sqlquery"] = $queryData_tht1;



$tableEvents["tht1"] = new eventsBase;
$tdatatht1[".hasEvents"] = false;

?>