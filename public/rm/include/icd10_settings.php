<?php
$tdataicd10 = array();
$tdataicd10[".searchableFields"] = array();
$tdataicd10[".ShortName"] = "icd10";
$tdataicd10[".OwnerID"] = "";
$tdataicd10[".OriginalTable"] = "icd10";


$tdataicd10[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataicd10[".originalPagesByType"] = $tdataicd10[".pagesByType"];
$tdataicd10[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataicd10[".originalPages"] = $tdataicd10[".pages"];
$tdataicd10[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataicd10[".originalDefaultPages"] = $tdataicd10[".defaultPages"];

//	field labels
$fieldLabelsicd10 = array();
$fieldToolTipsicd10 = array();
$pageTitlesicd10 = array();
$placeHoldersicd10 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsicd10["English"] = array();
	$fieldToolTipsicd10["English"] = array();
	$placeHoldersicd10["English"] = array();
	$pageTitlesicd10["English"] = array();
	$fieldLabelsicd10["English"]["ID"] = "ID";
	$fieldToolTipsicd10["English"]["ID"] = "";
	$placeHoldersicd10["English"]["ID"] = "";
	$fieldLabelsicd10["English"]["CODE"] = "CODE";
	$fieldToolTipsicd10["English"]["CODE"] = "";
	$placeHoldersicd10["English"]["CODE"] = "";
	$fieldLabelsicd10["English"]["DESCRIPTION"] = "DESCRIPTION";
	$fieldToolTipsicd10["English"]["DESCRIPTION"] = "";
	$placeHoldersicd10["English"]["DESCRIPTION"] = "";
	$fieldLabelsicd10["English"]["ALIAS"] = "ALIAS";
	$fieldToolTipsicd10["English"]["ALIAS"] = "";
	$placeHoldersicd10["English"]["ALIAS"] = "";
	if (count($fieldToolTipsicd10["English"]))
		$tdataicd10[".isUseToolTips"] = true;
}


	$tdataicd10[".NCSearch"] = true;



$tdataicd10[".shortTableName"] = "icd10";
$tdataicd10[".nSecOptions"] = 0;

$tdataicd10[".mainTableOwnerID"] = "";
$tdataicd10[".entityType"] = 0;
$tdataicd10[".connId"] = "newrm_at_localhost";


$tdataicd10[".strOriginalTableName"] = "icd10";

	



$tdataicd10[".showAddInPopup"] = false;

$tdataicd10[".showEditInPopup"] = false;

$tdataicd10[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataicd10[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataicd10[".listAjax"] = false;
//	temporary
$tdataicd10[".listAjax"] = false;

	$tdataicd10[".audit"] = false;

	$tdataicd10[".locking"] = false;


$pages = $tdataicd10[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataicd10[".edit"] = true;
	$tdataicd10[".afterEditAction"] = 1;
	$tdataicd10[".closePopupAfterEdit"] = 1;
	$tdataicd10[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataicd10[".add"] = true;
$tdataicd10[".afterAddAction"] = 1;
$tdataicd10[".closePopupAfterAdd"] = 1;
$tdataicd10[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataicd10[".list"] = true;
}



$tdataicd10[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataicd10[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataicd10[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataicd10[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataicd10[".printFriendly"] = true;
}



$tdataicd10[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataicd10[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataicd10[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataicd10[".isUseAjaxSuggest"] = true;

$tdataicd10[".rowHighlite"] = true;





$tdataicd10[".ajaxCodeSnippetAdded"] = false;

$tdataicd10[".buttonsAdded"] = false;

$tdataicd10[".addPageEvents"] = false;

// use timepicker for search panel
$tdataicd10[".isUseTimeForSearch"] = false;


$tdataicd10[".badgeColor"] = "2F4F4F";


$tdataicd10[".allSearchFields"] = array();
$tdataicd10[".filterFields"] = array();
$tdataicd10[".requiredSearchFields"] = array();

$tdataicd10[".googleLikeFields"] = array();
$tdataicd10[".googleLikeFields"][] = "ID";
$tdataicd10[".googleLikeFields"][] = "CODE";
$tdataicd10[".googleLikeFields"][] = "DESCRIPTION";
$tdataicd10[".googleLikeFields"][] = "ALIAS";



$tdataicd10[".tableType"] = "list";

$tdataicd10[".printerPageOrientation"] = 0;
$tdataicd10[".nPrinterPageScale"] = 100;

$tdataicd10[".nPrinterSplitRecords"] = 40;

$tdataicd10[".geocodingEnabled"] = false;










$tdataicd10[".pageSize"] = 20;

$tdataicd10[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataicd10[".strOrderBy"] = $tstrOrderBy;

$tdataicd10[".orderindexes"] = array();


$tdataicd10[".sqlHead"] = "SELECT ID,  	CODE,  	DESCRIPTION,  	`ALIAS`";
$tdataicd10[".sqlFrom"] = "FROM icd10";
$tdataicd10[".sqlWhereExpr"] = "";
$tdataicd10[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataicd10[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataicd10[".arrGroupsPerPage"] = $arrGPP;

$tdataicd10[".highlightSearchResults"] = true;

$tableKeysicd10 = array();
$tableKeysicd10[] = "ID";
$tdataicd10[".Keys"] = $tableKeysicd10;


$tdataicd10[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "icd10";
	$fdata["Label"] = GetFieldLabel("icd10","ID");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataicd10["ID"] = $fdata;
		$tdataicd10[".searchableFields"][] = "ID";
//	CODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CODE";
	$fdata["GoodName"] = "CODE";
	$fdata["ownerTable"] = "icd10";
	$fdata["Label"] = GetFieldLabel("icd10","CODE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CODE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODE";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdataicd10["CODE"] = $fdata;
		$tdataicd10[".searchableFields"][] = "CODE";
//	DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPTION";
	$fdata["GoodName"] = "DESCRIPTION";
	$fdata["ownerTable"] = "icd10";
	$fdata["Label"] = GetFieldLabel("icd10","DESCRIPTION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "DESCRIPTION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPTION";

	
	
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
			$edata["EditParams"].= " maxlength=185";

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


	$tdataicd10["DESCRIPTION"] = $fdata;
		$tdataicd10[".searchableFields"][] = "DESCRIPTION";
//	ALIAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ALIAS";
	$fdata["GoodName"] = "ALIAS";
	$fdata["ownerTable"] = "icd10";
	$fdata["Label"] = GetFieldLabel("icd10","ALIAS");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ALIAS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ALIAS`";

	
	
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
			$edata["EditParams"].= " maxlength=185";

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


	$tdataicd10["ALIAS"] = $fdata;
		$tdataicd10[".searchableFields"][] = "ALIAS";


$tables_data["icd10"]=&$tdataicd10;
$field_labels["icd10"] = &$fieldLabelsicd10;
$fieldToolTips["icd10"] = &$fieldToolTipsicd10;
$placeHolders["icd10"] = &$placeHoldersicd10;
$page_titles["icd10"] = &$pageTitlesicd10;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["icd10"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["icd10"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_icd10()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	CODE,  	DESCRIPTION,  	`ALIAS`";
$proto0["m_strFrom"] = "FROM icd10";
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
	"m_strName" => "ID",
	"m_strTable" => "icd10",
	"m_srcTableName" => "icd10"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "icd10";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CODE",
	"m_strTable" => "icd10",
	"m_srcTableName" => "icd10"
));

$proto8["m_sql"] = "CODE";
$proto8["m_srcTableName"] = "icd10";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPTION",
	"m_strTable" => "icd10",
	"m_srcTableName" => "icd10"
));

$proto10["m_sql"] = "DESCRIPTION";
$proto10["m_srcTableName"] = "icd10";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ALIAS",
	"m_strTable" => "icd10",
	"m_srcTableName" => "icd10"
));

$proto12["m_sql"] = "`ALIAS`";
$proto12["m_srcTableName"] = "icd10";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "icd10";
$proto15["m_srcTableName"] = "icd10";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "CODE";
$proto15["m_columns"][] = "DESCRIPTION";
$proto15["m_columns"][] = "ALIAS";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "icd10";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "icd10";
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
$proto0["m_srcTableName"]="icd10";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_icd10 = createSqlQuery_icd10();


	
		;

				

$tdataicd10[".sqlquery"] = $queryData_icd10;



$tableEvents["icd10"] = new eventsBase;
$tdataicd10[".hasEvents"] = false;

?>