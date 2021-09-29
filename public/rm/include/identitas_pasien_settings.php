<?php
$tdataidentitas_pasien = array();
$tdataidentitas_pasien[".searchableFields"] = array();
$tdataidentitas_pasien[".ShortName"] = "identitas_pasien";
$tdataidentitas_pasien[".OwnerID"] = "";
$tdataidentitas_pasien[".OriginalTable"] = "identitas_pasien";


$tdataidentitas_pasien[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view1\",\"view\"]}" );
$tdataidentitas_pasien[".originalPagesByType"] = $tdataidentitas_pasien[".pagesByType"];
$tdataidentitas_pasien[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view1\",\"view\"]}" ) );
$tdataidentitas_pasien[".originalPages"] = $tdataidentitas_pasien[".pages"];
$tdataidentitas_pasien[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view1\"}" );
$tdataidentitas_pasien[".originalDefaultPages"] = $tdataidentitas_pasien[".defaultPages"];

//	field labels
$fieldLabelsidentitas_pasien = array();
$fieldToolTipsidentitas_pasien = array();
$pageTitlesidentitas_pasien = array();
$placeHoldersidentitas_pasien = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsidentitas_pasien["English"] = array();
	$fieldToolTipsidentitas_pasien["English"] = array();
	$placeHoldersidentitas_pasien["English"] = array();
	$pageTitlesidentitas_pasien["English"] = array();
	$fieldLabelsidentitas_pasien["English"]["Id_Pasien"] = "Id Pasien";
	$fieldToolTipsidentitas_pasien["English"]["Id_Pasien"] = "";
	$placeHoldersidentitas_pasien["English"]["Id_Pasien"] = "";
	$fieldLabelsidentitas_pasien["English"]["Nama"] = "Nama";
	$fieldToolTipsidentitas_pasien["English"]["Nama"] = "";
	$placeHoldersidentitas_pasien["English"]["Nama"] = "";
	$fieldLabelsidentitas_pasien["English"]["Alamat"] = "Alamat";
	$fieldToolTipsidentitas_pasien["English"]["Alamat"] = "";
	$placeHoldersidentitas_pasien["English"]["Alamat"] = "";
	$fieldLabelsidentitas_pasien["English"]["Umur"] = "Umur";
	$fieldToolTipsidentitas_pasien["English"]["Umur"] = "";
	$placeHoldersidentitas_pasien["English"]["Umur"] = "";
	$fieldLabelsidentitas_pasien["English"]["Status_Perkawinan"] = "Status Perkawinan";
	$fieldToolTipsidentitas_pasien["English"]["Status_Perkawinan"] = "";
	$placeHoldersidentitas_pasien["English"]["Status_Perkawinan"] = "";
	$fieldLabelsidentitas_pasien["English"]["Jenis_Kelamin"] = "Jenis Kelamin";
	$fieldToolTipsidentitas_pasien["English"]["Jenis_Kelamin"] = "";
	$placeHoldersidentitas_pasien["English"]["Jenis_Kelamin"] = "";
	$fieldLabelsidentitas_pasien["English"]["Suku_Ras"] = "Suku Ras";
	$fieldToolTipsidentitas_pasien["English"]["Suku_Ras"] = "";
	$placeHoldersidentitas_pasien["English"]["Suku_Ras"] = "";
	$fieldLabelsidentitas_pasien["English"]["Agama"] = "Agama";
	$fieldToolTipsidentitas_pasien["English"]["Agama"] = "";
	$placeHoldersidentitas_pasien["English"]["Agama"] = "";
	$fieldLabelsidentitas_pasien["English"]["Pekerjaan"] = "Pekerjaan";
	$fieldToolTipsidentitas_pasien["English"]["Pekerjaan"] = "";
	$placeHoldersidentitas_pasien["English"]["Pekerjaan"] = "";
	$fieldLabelsidentitas_pasien["English"]["Tanggal_MRS"] = "Tanggal MRS";
	$fieldToolTipsidentitas_pasien["English"]["Tanggal_MRS"] = "";
	$placeHoldersidentitas_pasien["English"]["Tanggal_MRS"] = "";
	if (count($fieldToolTipsidentitas_pasien["English"]))
		$tdataidentitas_pasien[".isUseToolTips"] = true;
}


	$tdataidentitas_pasien[".NCSearch"] = true;



$tdataidentitas_pasien[".shortTableName"] = "identitas_pasien";
$tdataidentitas_pasien[".nSecOptions"] = 0;

$tdataidentitas_pasien[".mainTableOwnerID"] = "";
$tdataidentitas_pasien[".entityType"] = 0;
$tdataidentitas_pasien[".connId"] = "newrm_at_localhost";


$tdataidentitas_pasien[".strOriginalTableName"] = "identitas_pasien";

	



$tdataidentitas_pasien[".showAddInPopup"] = false;

$tdataidentitas_pasien[".showEditInPopup"] = false;

$tdataidentitas_pasien[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataidentitas_pasien[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataidentitas_pasien[".listAjax"] = false;
//	temporary
$tdataidentitas_pasien[".listAjax"] = false;

	$tdataidentitas_pasien[".audit"] = false;

	$tdataidentitas_pasien[".locking"] = false;


$pages = $tdataidentitas_pasien[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataidentitas_pasien[".edit"] = true;
	$tdataidentitas_pasien[".afterEditAction"] = 1;
	$tdataidentitas_pasien[".closePopupAfterEdit"] = 1;
	$tdataidentitas_pasien[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataidentitas_pasien[".add"] = true;
$tdataidentitas_pasien[".afterAddAction"] = 1;
$tdataidentitas_pasien[".closePopupAfterAdd"] = 1;
$tdataidentitas_pasien[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataidentitas_pasien[".list"] = true;
}



$tdataidentitas_pasien[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataidentitas_pasien[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataidentitas_pasien[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataidentitas_pasien[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataidentitas_pasien[".printFriendly"] = true;
}



$tdataidentitas_pasien[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataidentitas_pasien[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataidentitas_pasien[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataidentitas_pasien[".isUseAjaxSuggest"] = true;

$tdataidentitas_pasien[".rowHighlite"] = true;





$tdataidentitas_pasien[".ajaxCodeSnippetAdded"] = false;

$tdataidentitas_pasien[".buttonsAdded"] = false;

$tdataidentitas_pasien[".addPageEvents"] = false;

// use timepicker for search panel
$tdataidentitas_pasien[".isUseTimeForSearch"] = false;


$tdataidentitas_pasien[".badgeColor"] = "9ACD32";


$tdataidentitas_pasien[".allSearchFields"] = array();
$tdataidentitas_pasien[".filterFields"] = array();
$tdataidentitas_pasien[".requiredSearchFields"] = array();

$tdataidentitas_pasien[".googleLikeFields"] = array();
$tdataidentitas_pasien[".googleLikeFields"][] = "Id_Pasien";
$tdataidentitas_pasien[".googleLikeFields"][] = "Nama";
$tdataidentitas_pasien[".googleLikeFields"][] = "Alamat";
$tdataidentitas_pasien[".googleLikeFields"][] = "Umur";
$tdataidentitas_pasien[".googleLikeFields"][] = "Status_Perkawinan";
$tdataidentitas_pasien[".googleLikeFields"][] = "Jenis Kelamin";
$tdataidentitas_pasien[".googleLikeFields"][] = "Suku_Ras";
$tdataidentitas_pasien[".googleLikeFields"][] = "Agama";
$tdataidentitas_pasien[".googleLikeFields"][] = "Pekerjaan";
$tdataidentitas_pasien[".googleLikeFields"][] = "Tanggal_MRS";



$tdataidentitas_pasien[".tableType"] = "list";

$tdataidentitas_pasien[".printerPageOrientation"] = 0;
$tdataidentitas_pasien[".nPrinterPageScale"] = 100;

$tdataidentitas_pasien[".nPrinterSplitRecords"] = 40;

$tdataidentitas_pasien[".geocodingEnabled"] = false;










$tdataidentitas_pasien[".pageSize"] = 20;

$tdataidentitas_pasien[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataidentitas_pasien[".strOrderBy"] = $tstrOrderBy;

$tdataidentitas_pasien[".orderindexes"] = array();


$tdataidentitas_pasien[".sqlHead"] = "SELECT Id_Pasien,  	Nama,  	Alamat,  	Umur,  	Status_Perkawinan,  	`Jenis Kelamin`,  	Suku_Ras,  	Agama,  	Pekerjaan,  	Tanggal_MRS";
$tdataidentitas_pasien[".sqlFrom"] = "FROM identitas_pasien";
$tdataidentitas_pasien[".sqlWhereExpr"] = "";
$tdataidentitas_pasien[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataidentitas_pasien[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataidentitas_pasien[".arrGroupsPerPage"] = $arrGPP;

$tdataidentitas_pasien[".highlightSearchResults"] = true;

$tableKeysidentitas_pasien = array();
$tableKeysidentitas_pasien[] = "Id_Pasien";
$tdataidentitas_pasien[".Keys"] = $tableKeysidentitas_pasien;


$tdataidentitas_pasien[".hideMobileList"] = array();




//	Id_Pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Pasien";
	$fdata["GoodName"] = "Id_Pasien";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Id_Pasien");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_Pasien";

	
	
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


	$tdataidentitas_pasien["Id_Pasien"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Id_Pasien";
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Nama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nama";

	
	
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


	$tdataidentitas_pasien["Nama"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Nama";
//	Alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Alamat";
	$fdata["GoodName"] = "Alamat";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Alamat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Alamat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Alamat";

	
	
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


	$tdataidentitas_pasien["Alamat"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Alamat";
//	Umur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Umur";
	$fdata["GoodName"] = "Umur";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Umur");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Umur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Umur";

	
	
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


	$tdataidentitas_pasien["Umur"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Umur";
//	Status_Perkawinan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Status_Perkawinan";
	$fdata["GoodName"] = "Status_Perkawinan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Status_Perkawinan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Status_Perkawinan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status_Perkawinan";

	
	
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


	$tdataidentitas_pasien["Status_Perkawinan"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Status_Perkawinan";
//	Jenis Kelamin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Jenis Kelamin";
	$fdata["GoodName"] = "Jenis_Kelamin";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Jenis_Kelamin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Jenis Kelamin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Jenis Kelamin`";

	
	
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


	$tdataidentitas_pasien["Jenis Kelamin"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Jenis Kelamin";
//	Suku_Ras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Suku_Ras";
	$fdata["GoodName"] = "Suku_Ras";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Suku_Ras");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Suku_Ras";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Suku_Ras";

	
	
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


	$tdataidentitas_pasien["Suku_Ras"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Suku_Ras";
//	Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Agama";
	$fdata["GoodName"] = "Agama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Agama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Agama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Agama";

	
	
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


	$tdataidentitas_pasien["Agama"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Agama";
//	Pekerjaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Pekerjaan";
	$fdata["GoodName"] = "Pekerjaan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Pekerjaan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Pekerjaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pekerjaan";

	
	
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


	$tdataidentitas_pasien["Pekerjaan"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Pekerjaan";
//	Tanggal_MRS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Tanggal_MRS";
	$fdata["GoodName"] = "Tanggal_MRS";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("identitas_pasien","Tanggal_MRS");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Tanggal_MRS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tanggal_MRS";

	
	
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


	$tdataidentitas_pasien["Tanggal_MRS"] = $fdata;
		$tdataidentitas_pasien[".searchableFields"][] = "Tanggal_MRS";


$tables_data["identitas_pasien"]=&$tdataidentitas_pasien;
$field_labels["identitas_pasien"] = &$fieldLabelsidentitas_pasien;
$fieldToolTips["identitas_pasien"] = &$fieldToolTipsidentitas_pasien;
$placeHolders["identitas_pasien"] = &$placeHoldersidentitas_pasien;
$page_titles["identitas_pasien"] = &$pageTitlesidentitas_pasien;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["identitas_pasien"] = array();
//	mata
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mata";
		$detailsParam["dOriginalTable"] = "mata";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mata";
	$detailsParam["dCaptionTable"] = GetTableCaption("mata");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	tht
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tht";
		$detailsParam["dOriginalTable"] = "tht";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tht";
	$detailsParam["dCaptionTable"] = GetTableCaption("tht");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	andrologi
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="andrologi";
		$detailsParam["dOriginalTable"] = "andrologi";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "andrologi";
	$detailsParam["dCaptionTable"] = GetTableCaption("andrologi");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	jiwa
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="jiwa";
		$detailsParam["dOriginalTable"] = "jiwa";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "jiwa";
	$detailsParam["dCaptionTable"] = GetTableCaption("jiwa");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	resep
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="resep";
		$detailsParam["dOriginalTable"] = "resep";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "resep";
	$detailsParam["dCaptionTable"] = GetTableCaption("resep");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	rujukan
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="rujukan";
		$detailsParam["dOriginalTable"] = "rujukan";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "rujukan";
	$detailsParam["dCaptionTable"] = GetTableCaption("rujukan");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	kulit
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="kulit";
		$detailsParam["dOriginalTable"] = "kulit";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "kulit";
	$detailsParam["dCaptionTable"] = GetTableCaption("kulit");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	pediatri
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="pediatri";
		$detailsParam["dOriginalTable"] = "pediatri";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pediatri";
	$detailsParam["dCaptionTable"] = GetTableCaption("pediatri");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	interna
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="interna";
		$detailsParam["dOriginalTable"] = "interna";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "interna";
	$detailsParam["dCaptionTable"] = GetTableCaption("interna");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	ginekologi
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="ginekologi";
		$detailsParam["dOriginalTable"] = "ginekologi";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ginekologi";
	$detailsParam["dCaptionTable"] = GetTableCaption("ginekologi");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	resep_kacamata
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="resep_kacamata";
		$detailsParam["dOriginalTable"] = "resep_kacamata";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "resep_kacamata";
	$detailsParam["dCaptionTable"] = GetTableCaption("resep_kacamata");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	mata1
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mata1";
		$detailsParam["dOriginalTable"] = "mata";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mata1";
	$detailsParam["dCaptionTable"] = GetTableCaption("mata1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	obstetri
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="obstetri";
		$detailsParam["dOriginalTable"] = "obstetri";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "obstetri";
	$detailsParam["dCaptionTable"] = GetTableCaption("obstetri");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	paru
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="paru";
		$detailsParam["dOriginalTable"] = "paru";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "paru";
	$detailsParam["dCaptionTable"] = GetTableCaption("paru");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	bedah
	
	

		$dIndex = 14;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="bedah";
		$detailsParam["dOriginalTable"] = "bedah";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "bedah";
	$detailsParam["dCaptionTable"] = GetTableCaption("bedah");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	neurologi
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="neurologi";
		$detailsParam["dOriginalTable"] = "neurologi";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "neurologi";
	$detailsParam["dCaptionTable"] = GetTableCaption("neurologi");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";
//	tht1
	
	

		$dIndex = 16;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tht1";
		$detailsParam["dOriginalTable"] = "tht";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tht1";
	$detailsParam["dCaptionTable"] = GetTableCaption("tht1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["identitas_pasien"][$dIndex] = $detailsParam;

	
		$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["masterKeys"][]="Id_Pasien";

				$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["identitas_pasien"][$dIndex]["detailKeys"][]="id_pasien";

// tables which are master tables for current table (detail)
$masterTablesData["identitas_pasien"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_identitas_pasien()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_Pasien,  	Nama,  	Alamat,  	Umur,  	Status_Perkawinan,  	`Jenis Kelamin`,  	Suku_Ras,  	Agama,  	Pekerjaan,  	Tanggal_MRS";
$proto0["m_strFrom"] = "FROM identitas_pasien";
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
	"m_strName" => "Id_Pasien",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto6["m_sql"] = "Id_Pasien";
$proto6["m_srcTableName"] = "identitas_pasien";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto8["m_sql"] = "Nama";
$proto8["m_srcTableName"] = "identitas_pasien";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Alamat",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto10["m_sql"] = "Alamat";
$proto10["m_srcTableName"] = "identitas_pasien";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Umur",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto12["m_sql"] = "Umur";
$proto12["m_srcTableName"] = "identitas_pasien";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_Perkawinan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto14["m_sql"] = "Status_Perkawinan";
$proto14["m_srcTableName"] = "identitas_pasien";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis Kelamin",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto16["m_sql"] = "`Jenis Kelamin`";
$proto16["m_srcTableName"] = "identitas_pasien";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Suku_Ras",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto18["m_sql"] = "Suku_Ras";
$proto18["m_srcTableName"] = "identitas_pasien";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Agama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto20["m_sql"] = "Agama";
$proto20["m_srcTableName"] = "identitas_pasien";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto22["m_sql"] = "Pekerjaan";
$proto22["m_srcTableName"] = "identitas_pasien";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal_MRS",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "identitas_pasien"
));

$proto24["m_sql"] = "Tanggal_MRS";
$proto24["m_srcTableName"] = "identitas_pasien";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "identitas_pasien";
$proto27["m_srcTableName"] = "identitas_pasien";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "Id_Pasien";
$proto27["m_columns"][] = "Nama";
$proto27["m_columns"][] = "Alamat";
$proto27["m_columns"][] = "Umur";
$proto27["m_columns"][] = "Status_Perkawinan";
$proto27["m_columns"][] = "Jenis Kelamin";
$proto27["m_columns"][] = "Suku_Ras";
$proto27["m_columns"][] = "Agama";
$proto27["m_columns"][] = "Pekerjaan";
$proto27["m_columns"][] = "Tanggal_MRS";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "identitas_pasien";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "identitas_pasien";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="identitas_pasien";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_identitas_pasien = createSqlQuery_identitas_pasien();


	
		;

										

$tdataidentitas_pasien[".sqlquery"] = $queryData_identitas_pasien;



$tableEvents["identitas_pasien"] = new eventsBase;
$tdataidentitas_pasien[".hasEvents"] = false;

?>