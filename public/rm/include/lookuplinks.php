<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["andrologi.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["andrologi.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["andrologi.id_pasien"]["edit"] = array("table" => "andrologi", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["mata.Diagnosa_Diagnosa_Banding"] )) {
			$lookupTableLinks["icd10"]["mata.Diagnosa_Diagnosa_Banding"] = array();
		}
		$lookupTableLinks["icd10"]["mata.Diagnosa_Diagnosa_Banding"]["edit"] = array("table" => "mata", "field" => "Diagnosa_Diagnosa_Banding", "page" => "edit");
		if( !isset( $lookupTableLinks["users"] ) ) {
			$lookupTableLinks["users"] = array();
		}
		if( !isset( $lookupTableLinks["users"]["mata.Id_User"] )) {
			$lookupTableLinks["users"]["mata.Id_User"] = array();
		}
		$lookupTableLinks["users"]["mata.Id_User"]["edit"] = array("table" => "mata", "field" => "Id_User", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["mata.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["mata.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["mata.id_pasien"]["edit"] = array("table" => "mata", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["jiwa.Diagnosis_Axis"] )) {
			$lookupTableLinks["icd10"]["jiwa.Diagnosis_Axis"] = array();
		}
		$lookupTableLinks["icd10"]["jiwa.Diagnosis_Axis"]["edit"] = array("table" => "jiwa", "field" => "Diagnosis_Axis", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["jiwa.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["jiwa.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["jiwa.id_pasien"]["edit"] = array("table" => "jiwa", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht.Diagnosa"] )) {
			$lookupTableLinks["icd10"]["tht.Diagnosa"] = array();
		}
		$lookupTableLinks["icd10"]["tht.Diagnosa"]["edit"] = array("table" => "tht", "field" => "Diagnosa", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht.Diagnosa_2"] )) {
			$lookupTableLinks["icd10"]["tht.Diagnosa_2"] = array();
		}
		$lookupTableLinks["icd10"]["tht.Diagnosa_2"]["edit"] = array("table" => "tht", "field" => "Diagnosa_2", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht.Diagnosa_3"] )) {
			$lookupTableLinks["icd10"]["tht.Diagnosa_3"] = array();
		}
		$lookupTableLinks["icd10"]["tht.Diagnosa_3"]["edit"] = array("table" => "tht", "field" => "Diagnosa_3", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht.Diagnosa_4"] )) {
			$lookupTableLinks["icd10"]["tht.Diagnosa_4"] = array();
		}
		$lookupTableLinks["icd10"]["tht.Diagnosa_4"]["edit"] = array("table" => "tht", "field" => "Diagnosa_4", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht.Diagnosa_5"] )) {
			$lookupTableLinks["icd10"]["tht.Diagnosa_5"] = array();
		}
		$lookupTableLinks["icd10"]["tht.Diagnosa_5"]["edit"] = array("table" => "tht", "field" => "Diagnosa_5", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["tht.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["tht.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["tht.id_pasien"]["edit"] = array("table" => "tht", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["dosen"] ) ) {
			$lookupTableLinks["dosen"] = array();
		}
		if( !isset( $lookupTableLinks["dosen"]["resep.dokter"] )) {
			$lookupTableLinks["dosen"]["resep.dokter"] = array();
		}
		$lookupTableLinks["dosen"]["resep.dokter"]["edit"] = array("table" => "resep", "field" => "dokter", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["ginekologi.diagnosis"] )) {
			$lookupTableLinks["icd10"]["ginekologi.diagnosis"] = array();
		}
		$lookupTableLinks["icd10"]["ginekologi.diagnosis"]["edit"] = array("table" => "ginekologi", "field" => "diagnosis", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["ginekologi.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["ginekologi.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["ginekologi.id_pasien"]["edit"] = array("table" => "ginekologi", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["interna.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["interna.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["interna.id_pasien"]["edit"] = array("table" => "interna", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["kulit.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["kulit.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["kulit.id_pasien"]["edit"] = array("table" => "kulit", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["kulit.diagnosis"] )) {
			$lookupTableLinks["icd10"]["kulit.diagnosis"] = array();
		}
		$lookupTableLinks["icd10"]["kulit.diagnosis"]["edit"] = array("table" => "kulit", "field" => "diagnosis", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["kulit.diagnosis_banding"] )) {
			$lookupTableLinks["icd10"]["kulit.diagnosis_banding"] = array();
		}
		$lookupTableLinks["icd10"]["kulit.diagnosis_banding"]["edit"] = array("table" => "kulit", "field" => "diagnosis_banding", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["pediatri.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["pediatri.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["pediatri.id_pasien"]["edit"] = array("table" => "pediatri", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["mata"] ) ) {
			$lookupTableLinks["mata"] = array();
		}
		if( !isset( $lookupTableLinks["mata"]["catatan_kemajuan.id_mata"] )) {
			$lookupTableLinks["mata"]["catatan_kemajuan.id_mata"] = array();
		}
		$lookupTableLinks["mata"]["catatan_kemajuan.id_mata"]["edit"] = array("table" => "catatan_kemajuan", "field" => "id_mata", "page" => "edit");
		if( !isset( $lookupTableLinks["mata"] ) ) {
			$lookupTableLinks["mata"] = array();
		}
		if( !isset( $lookupTableLinks["mata"]["daftar_masalah.id_mata"] )) {
			$lookupTableLinks["mata"]["daftar_masalah.id_mata"] = array();
		}
		$lookupTableLinks["mata"]["daftar_masalah.id_mata"]["edit"] = array("table" => "daftar_masalah", "field" => "id_mata", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["daftar_masalah_interna.diagnosa_awal"] )) {
			$lookupTableLinks["icd10"]["daftar_masalah_interna.diagnosa_awal"] = array();
		}
		$lookupTableLinks["icd10"]["daftar_masalah_interna.diagnosa_awal"]["edit"] = array("table" => "daftar_masalah_interna", "field" => "diagnosa_awal", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["daftar_masalah_interna.diagnostik"] )) {
			$lookupTableLinks["icd10"]["daftar_masalah_interna.diagnostik"] = array();
		}
		$lookupTableLinks["icd10"]["daftar_masalah_interna.diagnostik"]["edit"] = array("table" => "daftar_masalah_interna", "field" => "diagnostik", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["daftar_masalah_pediatri.diagnosa_awal"] )) {
			$lookupTableLinks["icd10"]["daftar_masalah_pediatri.diagnosa_awal"] = array();
		}
		$lookupTableLinks["icd10"]["daftar_masalah_pediatri.diagnosa_awal"]["edit"] = array("table" => "daftar_masalah_pediatri", "field" => "diagnosa_awal", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["daftar_masalah_pediatri.diagnostik"] )) {
			$lookupTableLinks["icd10"]["daftar_masalah_pediatri.diagnostik"] = array();
		}
		$lookupTableLinks["icd10"]["daftar_masalah_pediatri.diagnostik"]["edit"] = array("table" => "daftar_masalah_pediatri", "field" => "diagnostik", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["rencana_permulaan.Pemeriksaan_Diagnostik"] )) {
			$lookupTableLinks["icd10"]["rencana_permulaan.Pemeriksaan_Diagnostik"] = array();
		}
		$lookupTableLinks["icd10"]["rencana_permulaan.Pemeriksaan_Diagnostik"]["edit"] = array("table" => "rencana_permulaan", "field" => "Pemeriksaan_Diagnostik", "page" => "edit");
		if( !isset( $lookupTableLinks["mata"] ) ) {
			$lookupTableLinks["mata"] = array();
		}
		if( !isset( $lookupTableLinks["mata"]["rencana_permulaan.id_mata"] )) {
			$lookupTableLinks["mata"]["rencana_permulaan.id_mata"] = array();
		}
		$lookupTableLinks["mata"]["rencana_permulaan.id_mata"]["edit"] = array("table" => "rencana_permulaan", "field" => "id_mata", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["mata1.Diagnosa_Diagnosa_Banding"] )) {
			$lookupTableLinks["icd10"]["mata1.Diagnosa_Diagnosa_Banding"] = array();
		}
		$lookupTableLinks["icd10"]["mata1.Diagnosa_Diagnosa_Banding"]["edit"] = array("table" => "mata1", "field" => "Diagnosa_Diagnosa_Banding", "page" => "edit");
		if( !isset( $lookupTableLinks["users"] ) ) {
			$lookupTableLinks["users"] = array();
		}
		if( !isset( $lookupTableLinks["users"]["mata1.Id_User"] )) {
			$lookupTableLinks["users"]["mata1.Id_User"] = array();
		}
		$lookupTableLinks["users"]["mata1.Id_User"]["edit"] = array("table" => "mata1", "field" => "Id_User", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["mata1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["mata1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["mata1.id_pasien"]["edit"] = array("table" => "mata1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["paru.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["paru.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["paru.id_pasien"]["edit"] = array("table" => "paru", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["obstetri.DIAGNOSIS"] )) {
			$lookupTableLinks["icd10"]["obstetri.DIAGNOSIS"] = array();
		}
		$lookupTableLinks["icd10"]["obstetri.DIAGNOSIS"]["edit"] = array("table" => "obstetri", "field" => "DIAGNOSIS", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["obstetri.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["obstetri.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["obstetri.id_pasien"]["edit"] = array("table" => "obstetri", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["bedah.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["bedah.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["bedah.id_pasien"]["edit"] = array("table" => "bedah", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["neurologi.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["neurologi.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["neurologi.id_pasien"]["edit"] = array("table" => "neurologi", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["andrologi1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["andrologi1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["andrologi1.id_pasien"]["edit"] = array("table" => "andrologi1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["ginekologi1.diagnosis"] )) {
			$lookupTableLinks["icd10"]["ginekologi1.diagnosis"] = array();
		}
		$lookupTableLinks["icd10"]["ginekologi1.diagnosis"]["edit"] = array("table" => "ginekologi1", "field" => "diagnosis", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["ginekologi1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["ginekologi1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["ginekologi1.id_pasien"]["edit"] = array("table" => "ginekologi1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["interna1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["interna1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["interna1.id_pasien"]["edit"] = array("table" => "interna1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["jiwa1.Diagnosis_Axis"] )) {
			$lookupTableLinks["icd10"]["jiwa1.Diagnosis_Axis"] = array();
		}
		$lookupTableLinks["icd10"]["jiwa1.Diagnosis_Axis"]["edit"] = array("table" => "jiwa1", "field" => "Diagnosis_Axis", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["jiwa1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["jiwa1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["jiwa1.id_pasien"]["edit"] = array("table" => "jiwa1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["kulit1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["kulit1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["kulit1.id_pasien"]["edit"] = array("table" => "kulit1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["kulit1.diagnosis"] )) {
			$lookupTableLinks["icd10"]["kulit1.diagnosis"] = array();
		}
		$lookupTableLinks["icd10"]["kulit1.diagnosis"]["edit"] = array("table" => "kulit1", "field" => "diagnosis", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["kulit1.diagnosis_banding"] )) {
			$lookupTableLinks["icd10"]["kulit1.diagnosis_banding"] = array();
		}
		$lookupTableLinks["icd10"]["kulit1.diagnosis_banding"]["edit"] = array("table" => "kulit1", "field" => "diagnosis_banding", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["bedah1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["bedah1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["bedah1.id_pasien"]["edit"] = array("table" => "bedah1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["obstetri1.DIAGNOSIS"] )) {
			$lookupTableLinks["icd10"]["obstetri1.DIAGNOSIS"] = array();
		}
		$lookupTableLinks["icd10"]["obstetri1.DIAGNOSIS"]["edit"] = array("table" => "obstetri1", "field" => "DIAGNOSIS", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["obstetri1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["obstetri1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["obstetri1.id_pasien"]["edit"] = array("table" => "obstetri1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["paru1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["paru1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["paru1.id_pasien"]["edit"] = array("table" => "paru1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["pediatri1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["pediatri1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["pediatri1.id_pasien"]["edit"] = array("table" => "pediatri1", "field" => "id_pasien", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht1.Diagnosa"] )) {
			$lookupTableLinks["icd10"]["tht1.Diagnosa"] = array();
		}
		$lookupTableLinks["icd10"]["tht1.Diagnosa"]["edit"] = array("table" => "tht1", "field" => "Diagnosa", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht1.Diagnosa_2"] )) {
			$lookupTableLinks["icd10"]["tht1.Diagnosa_2"] = array();
		}
		$lookupTableLinks["icd10"]["tht1.Diagnosa_2"]["edit"] = array("table" => "tht1", "field" => "Diagnosa_2", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht1.Diagnosa_3"] )) {
			$lookupTableLinks["icd10"]["tht1.Diagnosa_3"] = array();
		}
		$lookupTableLinks["icd10"]["tht1.Diagnosa_3"]["edit"] = array("table" => "tht1", "field" => "Diagnosa_3", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht1.Diagnosa_4"] )) {
			$lookupTableLinks["icd10"]["tht1.Diagnosa_4"] = array();
		}
		$lookupTableLinks["icd10"]["tht1.Diagnosa_4"]["edit"] = array("table" => "tht1", "field" => "Diagnosa_4", "page" => "edit");
		if( !isset( $lookupTableLinks["icd10"] ) ) {
			$lookupTableLinks["icd10"] = array();
		}
		if( !isset( $lookupTableLinks["icd10"]["tht1.Diagnosa_5"] )) {
			$lookupTableLinks["icd10"]["tht1.Diagnosa_5"] = array();
		}
		$lookupTableLinks["icd10"]["tht1.Diagnosa_5"]["edit"] = array("table" => "tht1", "field" => "Diagnosa_5", "page" => "edit");
		if( !isset( $lookupTableLinks["identitas_pasien"] ) ) {
			$lookupTableLinks["identitas_pasien"] = array();
		}
		if( !isset( $lookupTableLinks["identitas_pasien"]["tht1.id_pasien"] )) {
			$lookupTableLinks["identitas_pasien"]["tht1.id_pasien"] = array();
		}
		$lookupTableLinks["identitas_pasien"]["tht1.id_pasien"]["edit"] = array("table" => "tht1", "field" => "id_pasien", "page" => "edit");
}

?>