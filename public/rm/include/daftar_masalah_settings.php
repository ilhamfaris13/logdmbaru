<?php
$tdatadaftar_masalah = array();
$tdatadaftar_masalah[".searchableFields"] = array();
$tdatadaftar_masalah[".ShortName"] = "daftar_masalah";
$tdatadaftar_masalah[".OwnerID"] = "";
$tdatadaftar_masalah[".OriginalTable"] = "daftar_masalah";


$tdatadaftar_masalah[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadaftar_masalah[".originalPagesByType"] = $tdatadaftar_masalah[".pagesByType"];
$tdatadaftar_masalah[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\",\"list1\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadaftar_masalah[".originalPages"] = $tdatadaftar_masalah[".pages"];
$tdatadaftar_masalah[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadaftar_masalah[".originalDefaultPages"] = $tdatadaftar_masalah[".defaultPages"];

//	field labels
$fieldLabelsdaftar_masalah = array();
$fieldToolTipsdaftar_masalah = array();
$pageTitlesdaftar_masalah = array();
$placeHoldersdaftar_masalah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaftar_masalah["English"] = array();
	$fieldToolTipsdaftar_masalah["English"] = array();
	$placeHoldersdaftar_masalah["English"] = array();
	$pageTitlesdaftar_masalah["English"] = array();
	$fieldLabelsdaftar_masalah["English"]["Id_Daftar_Masalah"] = "";
	$fieldToolTipsdaftar_masalah["English"]["Id_Daftar_Masalah"] = "";
	$placeHoldersdaftar_masalah["English"]["Id_Daftar_Masalah"] = "";
	$fieldLabelsdaftar_masalah["English"]["Tanggal_Mulai"] = "Tanggal Mulai";
	$fieldToolTipsdaftar_masalah["English"]["Tanggal_Mulai"] = "";
	$placeHoldersdaftar_masalah["English"]["Tanggal_Mulai"] = "";
	$fieldLabelsdaftar_masalah["English"]["Masalah_Aktif"] = "Masalah Aktif";
	$fieldToolTipsdaftar_masalah["English"]["Masalah_Aktif"] = "";
	$placeHoldersdaftar_masalah["English"]["Masalah_Aktif"] = "";
	$fieldLabelsdaftar_masalah["English"]["id_mata"] = "";
	$fieldToolTipsdaftar_masalah["English"]["id_mata"] = "";
	$placeHoldersdaftar_masalah["English"]["id_mata"] = "";
	if (count($fieldToolTipsdaftar_masalah["English"]))
		$tdatadaftar_masalah[".isUseToolTips"] = true;
}


	$tdatadaftar_masalah[".NCSearch"] = true;



$tdatadaftar_masalah[".shortTableName"] = "daftar_masalah";
$tdatadaftar_masalah[".nSecOptions"] = 0;

$tdatadaftar_masalah[".mainTableOwnerID"] = "";
$tdatadaftar_masalah[".entityType"] = 0;
$tdatadaftar_masalah[".connId"] = "newrm_at_localhost";


$tdatadaftar_masalah[".strOriginalTableName"] = "daftar_masalah";

	



$tdatadaftar_masalah[".showAddInPopup"] = false;

$tdatadaftar_masalah[".showEditInPopup"] = false;

$tdatadaftar_masalah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaftar_masalah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaftar_masalah[".listAjax"] = false;
//	temporary
$tdatadaftar_masalah[".listAjax"] = false;

	$tdatadaftar_masalah[".audit"] = false;

	$tdatadaftar_masalah[".locking"] = false;


$pages = $tdatadaftar_masalah[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadaftar_masalah[".edit"] = true;
	$tdatadaftar_masalah[".afterEditAction"] = 1;
	$tdatadaftar_masalah[".closePopupAfterEdit"] = 1;
	$tdatadaftar_masalah[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadaftar_masalah[".add"] = true;
$tdatadaftar_masalah[".afterAddAction"] = 1;
$tdatadaftar_masalah[".closePopupAfterAdd"] = 1;
$tdatadaftar_masalah[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadaftar_masalah[".list"] = true;
}



$tdatadaftar_masalah[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadaftar_masalah[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadaftar_masalah[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadaftar_masalah[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadaftar_masalah[".printFriendly"] = true;
}



$tdatadaftar_masalah[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadaftar_masalah[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadaftar_masalah[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadaftar_masalah[".isUseAjaxSuggest"] = true;

$tdatadaftar_masalah[".rowHighlite"] = true;





$tdatadaftar_masalah[".ajaxCodeSnippetAdded"] = false;

$tdatadaftar_masalah[".buttonsAdded"] = false;

$tdatadaftar_masalah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaftar_masalah[".isUseTimeForSearch"] = false;


$tdatadaftar_masalah[".badgeColor"] = "cd5c5c";


$tdatadaftar_masalah[".allSearchFields"] = array();
$tdatadaftar_masalah[".filterFields"] = array();
$tdatadaftar_masalah[".requiredSearchFields"] = array();

$tdatadaftar_masalah[".googleLikeFields"] = array();
$tdatadaftar_masalah[".googleLikeFields"][] = "Id_Daftar_Masalah";
$tdatadaftar_masalah[".googleLikeFields"][] = "Tanggal_Mulai";
$tdatadaftar_masalah[".googleLikeFields"][] = "Masalah_Aktif";
$tdatadaftar_masalah[".googleLikeFields"][] = "id_mata";



$tdatadaftar_masalah[".tableType"] = "list";

$tdatadaftar_masalah[".printerPageOrientation"] = 0;
$tdatadaftar_masalah[".nPrinterPageScale"] = 100;

$tdatadaftar_masalah[".nPrinterSplitRecords"] = 40;

$tdatadaftar_masalah[".geocodingEnabled"] = false;










$tdatadaftar_masalah[".pageSize"] = 20;

$tdatadaftar_masalah[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaftar_masalah[".strOrderBy"] = $tstrOrderBy;

$tdatadaftar_masalah[".orderindexes"] = array();


$tdatadaftar_masalah[".sqlHead"] = "SELECT Id_Daftar_Masalah,  	Tanggal_Mulai,  	Masalah_Aktif,  	id_mata";
$tdatadaftar_masalah[".sqlFrom"] = "FROM daftar_masalah";
$tdatadaftar_masalah[".sqlWhereExpr"] = "";
$tdatadaftar_masalah[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaftar_masalah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaftar_masalah[".arrGroupsPerPage"] = $arrGPP;

$tdatadaftar_masalah[".highlightSearchResults"] = true;

$tableKeysdaftar_masalah = array();
$tableKeysdaftar_masalah[] = "Id_Daftar_Masalah";
$tdatadaftar_masalah[".Keys"] = $tableKeysdaftar_masalah;


$tdatadaftar_masalah[".hideMobileList"] = array();




//	Id_Daftar_Masalah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Daftar_Masalah";
	$fdata["GoodName"] = "Id_Daftar_Masalah";
	$fdata["ownerTable"] = "daftar_masalah";
	$fdata["Label"] = GetFieldLabel("daftar_masalah","Id_Daftar_Masalah");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Daftar_Masalah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_Daftar_Masalah";

	
	
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


	$tdatadaftar_masalah["Id_Daftar_Masalah"] = $fdata;
		$tdatadaftar_masalah[".searchableFields"][] = "Id_Daftar_Masalah";
//	Tanggal_Mulai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tanggal_Mulai";
	$fdata["GoodName"] = "Tanggal_Mulai";
	$fdata["ownerTable"] = "daftar_masalah";
	$fdata["Label"] = GetFieldLabel("daftar_masalah","Tanggal_Mulai");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Tanggal_Mulai";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tanggal_Mulai";

	
	
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


	$tdatadaftar_masalah["Tanggal_Mulai"] = $fdata;
		$tdatadaftar_masalah[".searchableFields"][] = "Tanggal_Mulai";
//	Masalah_Aktif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Masalah_Aktif";
	$fdata["GoodName"] = "Masalah_Aktif";
	$fdata["ownerTable"] = "daftar_masalah";
	$fdata["Label"] = GetFieldLabel("daftar_masalah","Masalah_Aktif");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Masalah_Aktif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Masalah_Aktif";

	
	
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


	$tdatadaftar_masalah["Masalah_Aktif"] = $fdata;
		$tdatadaftar_masalah[".searchableFields"][] = "Masalah_Aktif";
//	id_mata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_mata";
	$fdata["GoodName"] = "id_mata";
	$fdata["ownerTable"] = "daftar_masalah";
	$fdata["Label"] = GetFieldLabel("daftar_masalah","id_mata");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_mata";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_mata";

	
	
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
	$edata["LookupTable"] = "mata";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id_Mata";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "Keluhan_Utama";

	

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatadaftar_masalah["id_mata"] = $fdata;
		$tdatadaftar_masalah[".searchableFields"][] = "id_mata";


$tables_data["daftar_masalah"]=&$tdatadaftar_masalah;
$field_labels["daftar_masalah"] = &$fieldLabelsdaftar_masalah;
$fieldToolTips["daftar_masalah"] = &$fieldToolTipsdaftar_masalah;
$placeHolders["daftar_masalah"] = &$placeHoldersdaftar_masalah;
$page_titles["daftar_masalah"] = &$pageTitlesdaftar_masalah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daftar_masalah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daftar_masalah"] = array();



	
				$strOriginalDetailsTable="mata";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mata";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mata";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["daftar_masalah"][0] = $masterParams;
				$masterTablesData["daftar_masalah"][0]["masterKeys"] = array();
	$masterTablesData["daftar_masalah"][0]["masterKeys"][]="Id_Mata";
				$masterTablesData["daftar_masalah"][0]["detailKeys"] = array();
	$masterTablesData["daftar_masalah"][0]["detailKeys"][]="id_mata";
		
	
				$strOriginalDetailsTable="mata";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mata1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mata1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["daftar_masalah"][1] = $masterParams;
				$masterTablesData["daftar_masalah"][1]["masterKeys"] = array();
	$masterTablesData["daftar_masalah"][1]["masterKeys"][]="Id_Mata";
				$masterTablesData["daftar_masalah"][1]["detailKeys"] = array();
	$masterTablesData["daftar_masalah"][1]["detailKeys"][]="id_mata";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_daftar_masalah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_Daftar_Masalah,  	Tanggal_Mulai,  	Masalah_Aktif,  	id_mata";
$proto0["m_strFrom"] = "FROM daftar_masalah";
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
	"m_strName" => "Id_Daftar_Masalah",
	"m_strTable" => "daftar_masalah",
	"m_srcTableName" => "daftar_masalah"
));

$proto6["m_sql"] = "Id_Daftar_Masalah";
$proto6["m_srcTableName"] = "daftar_masalah";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal_Mulai",
	"m_strTable" => "daftar_masalah",
	"m_srcTableName" => "daftar_masalah"
));

$proto8["m_sql"] = "Tanggal_Mulai";
$proto8["m_srcTableName"] = "daftar_masalah";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Masalah_Aktif",
	"m_strTable" => "daftar_masalah",
	"m_srcTableName" => "daftar_masalah"
));

$proto10["m_sql"] = "Masalah_Aktif";
$proto10["m_srcTableName"] = "daftar_masalah";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_mata",
	"m_strTable" => "daftar_masalah",
	"m_srcTableName" => "daftar_masalah"
));

$proto12["m_sql"] = "id_mata";
$proto12["m_srcTableName"] = "daftar_masalah";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "daftar_masalah";
$proto15["m_srcTableName"] = "daftar_masalah";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "Id_Daftar_Masalah";
$proto15["m_columns"][] = "Tanggal_Mulai";
$proto15["m_columns"][] = "Masalah_Aktif";
$proto15["m_columns"][] = "id_mata";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "daftar_masalah";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "daftar_masalah";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="daftar_masalah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daftar_masalah = createSqlQuery_daftar_masalah();


	
		;

				

$tdatadaftar_masalah[".sqlquery"] = $queryData_daftar_masalah;



$tableEvents["daftar_masalah"] = new eventsBase;
$tdatadaftar_masalah[".hasEvents"] = false;

?>