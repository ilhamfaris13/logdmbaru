<?php
$tdataresep = array();
$tdataresep[".searchableFields"] = array();
$tdataresep[".ShortName"] = "resep";
$tdataresep[".OwnerID"] = "";
$tdataresep[".OriginalTable"] = "resep";


$tdataresep[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataresep[".originalPagesByType"] = $tdataresep[".pagesByType"];
$tdataresep[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataresep[".originalPages"] = $tdataresep[".pages"];
$tdataresep[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataresep[".originalDefaultPages"] = $tdataresep[".defaultPages"];

//	field labels
$fieldLabelsresep = array();
$fieldToolTipsresep = array();
$pageTitlesresep = array();
$placeHoldersresep = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresep["English"] = array();
	$fieldToolTipsresep["English"] = array();
	$placeHoldersresep["English"] = array();
	$pageTitlesresep["English"] = array();
	$fieldLabelsresep["English"]["Id"] = "Id";
	$fieldToolTipsresep["English"]["Id"] = "";
	$placeHoldersresep["English"]["Id"] = "";
	$fieldLabelsresep["English"]["dokter"] = "Dokter";
	$fieldToolTipsresep["English"]["dokter"] = "";
	$placeHoldersresep["English"]["dokter"] = "";
	$fieldLabelsresep["English"]["tanggal"] = "Tanggal";
	$fieldToolTipsresep["English"]["tanggal"] = "";
	$placeHoldersresep["English"]["tanggal"] = "";
	$fieldLabelsresep["English"]["isi_resep"] = "Isi Resep";
	$fieldToolTipsresep["English"]["isi_resep"] = "";
	$placeHoldersresep["English"]["isi_resep"] = "";
	$fieldLabelsresep["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsresep["English"]["id_pasien"] = "";
	$placeHoldersresep["English"]["id_pasien"] = "";
	if (count($fieldToolTipsresep["English"]))
		$tdataresep[".isUseToolTips"] = true;
}


	$tdataresep[".NCSearch"] = true;



$tdataresep[".shortTableName"] = "resep";
$tdataresep[".nSecOptions"] = 0;

$tdataresep[".mainTableOwnerID"] = "";
$tdataresep[".entityType"] = 0;
$tdataresep[".connId"] = "newrm_at_localhost";


$tdataresep[".strOriginalTableName"] = "resep";

	



$tdataresep[".showAddInPopup"] = false;

$tdataresep[".showEditInPopup"] = false;

$tdataresep[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataresep[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataresep[".listAjax"] = false;
//	temporary
$tdataresep[".listAjax"] = false;

	$tdataresep[".audit"] = false;

	$tdataresep[".locking"] = false;


$pages = $tdataresep[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataresep[".edit"] = true;
	$tdataresep[".afterEditAction"] = 1;
	$tdataresep[".closePopupAfterEdit"] = 1;
	$tdataresep[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataresep[".add"] = true;
$tdataresep[".afterAddAction"] = 1;
$tdataresep[".closePopupAfterAdd"] = 1;
$tdataresep[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataresep[".list"] = true;
}



$tdataresep[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataresep[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataresep[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataresep[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataresep[".printFriendly"] = true;
}



$tdataresep[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataresep[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataresep[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataresep[".isUseAjaxSuggest"] = true;

$tdataresep[".rowHighlite"] = true;





$tdataresep[".ajaxCodeSnippetAdded"] = false;

$tdataresep[".buttonsAdded"] = false;

$tdataresep[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresep[".isUseTimeForSearch"] = false;


$tdataresep[".badgeColor"] = "cd5c5c";


$tdataresep[".allSearchFields"] = array();
$tdataresep[".filterFields"] = array();
$tdataresep[".requiredSearchFields"] = array();

$tdataresep[".googleLikeFields"] = array();
$tdataresep[".googleLikeFields"][] = "Id";
$tdataresep[".googleLikeFields"][] = "dokter";
$tdataresep[".googleLikeFields"][] = "tanggal";
$tdataresep[".googleLikeFields"][] = "isi_resep";
$tdataresep[".googleLikeFields"][] = "id_pasien";



$tdataresep[".tableType"] = "list";

$tdataresep[".printerPageOrientation"] = 0;
$tdataresep[".nPrinterPageScale"] = 100;

$tdataresep[".nPrinterSplitRecords"] = 40;

$tdataresep[".geocodingEnabled"] = false;










$tdataresep[".pageSize"] = 20;

$tdataresep[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataresep[".strOrderBy"] = $tstrOrderBy;

$tdataresep[".orderindexes"] = array();


$tdataresep[".sqlHead"] = "SELECT Id,  	dokter,  	tanggal,  	isi_resep,  	id_pasien";
$tdataresep[".sqlFrom"] = "FROM resep";
$tdataresep[".sqlWhereExpr"] = "";
$tdataresep[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresep[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresep[".arrGroupsPerPage"] = $arrGPP;

$tdataresep[".highlightSearchResults"] = true;

$tableKeysresep = array();
$tableKeysresep[] = "Id";
$tdataresep[".Keys"] = $tableKeysresep;


$tdataresep[".hideMobileList"] = array();




//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "resep";
	$fdata["Label"] = GetFieldLabel("resep","Id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
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


	$tdataresep["Id"] = $fdata;
		$tdataresep[".searchableFields"][] = "Id";
//	dokter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dokter";
	$fdata["GoodName"] = "dokter";
	$fdata["ownerTable"] = "resep";
	$fdata["Label"] = GetFieldLabel("resep","dokter");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "dokter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dokter";

	
	
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
	$edata["LookupTable"] = "dosen";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_dosen";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "NAMA";

	

	
	$edata["LookupOrderBy"] = "NAMA";

	
	
	
	

	
	
	
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


	$tdataresep["dokter"] = $fdata;
		$tdataresep[".searchableFields"][] = "dokter";
//	tanggal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tanggal";
	$fdata["GoodName"] = "tanggal";
	$fdata["ownerTable"] = "resep";
	$fdata["Label"] = GetFieldLabel("resep","tanggal");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "tanggal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tanggal";

	
	
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


	$tdataresep["tanggal"] = $fdata;
		$tdataresep[".searchableFields"][] = "tanggal";
//	isi_resep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "isi_resep";
	$fdata["GoodName"] = "isi_resep";
	$fdata["ownerTable"] = "resep";
	$fdata["Label"] = GetFieldLabel("resep","isi_resep");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "isi_resep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isi_resep";

	
	
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


	$tdataresep["isi_resep"] = $fdata;
		$tdataresep[".searchableFields"][] = "isi_resep";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "resep";
	$fdata["Label"] = GetFieldLabel("resep","id_pasien");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataresep["id_pasien"] = $fdata;
		$tdataresep[".searchableFields"][] = "id_pasien";


$tables_data["resep"]=&$tdataresep;
$field_labels["resep"] = &$fieldLabelsresep;
$fieldToolTips["resep"] = &$fieldToolTipsresep;
$placeHolders["resep"] = &$placeHoldersresep;
$page_titles["resep"] = &$pageTitlesresep;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["resep"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["resep"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["resep"][0] = $masterParams;
				$masterTablesData["resep"][0]["masterKeys"] = array();
	$masterTablesData["resep"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["resep"][0]["detailKeys"] = array();
	$masterTablesData["resep"][0]["detailKeys"][]="id_pasien";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_resep()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  	dokter,  	tanggal,  	isi_resep,  	id_pasien";
$proto0["m_strFrom"] = "FROM resep";
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
	"m_strName" => "Id",
	"m_strTable" => "resep",
	"m_srcTableName" => "resep"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "resep";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dokter",
	"m_strTable" => "resep",
	"m_srcTableName" => "resep"
));

$proto8["m_sql"] = "dokter";
$proto8["m_srcTableName"] = "resep";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tanggal",
	"m_strTable" => "resep",
	"m_srcTableName" => "resep"
));

$proto10["m_sql"] = "tanggal";
$proto10["m_srcTableName"] = "resep";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "isi_resep",
	"m_strTable" => "resep",
	"m_srcTableName" => "resep"
));

$proto12["m_sql"] = "isi_resep";
$proto12["m_srcTableName"] = "resep";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "resep",
	"m_srcTableName" => "resep"
));

$proto14["m_sql"] = "id_pasien";
$proto14["m_srcTableName"] = "resep";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "resep";
$proto17["m_srcTableName"] = "resep";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "Id";
$proto17["m_columns"][] = "dokter";
$proto17["m_columns"][] = "tanggal";
$proto17["m_columns"][] = "isi_resep";
$proto17["m_columns"][] = "id_pasien";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "resep";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "resep";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="resep";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_resep = createSqlQuery_resep();


	
		;

					

$tdataresep[".sqlquery"] = $queryData_resep;



$tableEvents["resep"] = new eventsBase;
$tdataresep[".hasEvents"] = false;

?>