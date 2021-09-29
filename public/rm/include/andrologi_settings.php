<?php
$tdataandrologi = array();
$tdataandrologi[".searchableFields"] = array();
$tdataandrologi[".ShortName"] = "andrologi";
$tdataandrologi[".OwnerID"] = "";
$tdataandrologi[".OriginalTable"] = "andrologi";


$tdataandrologi[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataandrologi[".originalPagesByType"] = $tdataandrologi[".pagesByType"];
$tdataandrologi[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataandrologi[".originalPages"] = $tdataandrologi[".pages"];
$tdataandrologi[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataandrologi[".originalDefaultPages"] = $tdataandrologi[".defaultPages"];

//	field labels
$fieldLabelsandrologi = array();
$fieldToolTipsandrologi = array();
$pageTitlesandrologi = array();
$placeHoldersandrologi = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsandrologi["English"] = array();
	$fieldToolTipsandrologi["English"] = array();
	$placeHoldersandrologi["English"] = array();
	$pageTitlesandrologi["English"] = array();
	$fieldLabelsandrologi["English"]["id_andrologi"] = "Id Andrologi";
	$fieldToolTipsandrologi["English"]["id_andrologi"] = "";
	$placeHoldersandrologi["English"]["id_andrologi"] = "";
	$fieldLabelsandrologi["English"]["lama_perkawinan_1"] = "Lama Perkawinan 1";
	$fieldToolTipsandrologi["English"]["lama_perkawinan_1"] = "";
	$placeHoldersandrologi["English"]["lama_perkawinan_1"] = "";
	$fieldLabelsandrologi["English"]["lama_perkawinan_2"] = "Lama Perkawinan 2";
	$fieldToolTipsandrologi["English"]["lama_perkawinan_2"] = "";
	$placeHoldersandrologi["English"]["lama_perkawinan_2"] = "";
	$fieldLabelsandrologi["English"]["lama_perkawinan_3"] = "Lama Perkawinan 3";
	$fieldToolTipsandrologi["English"]["lama_perkawinan_3"] = "";
	$placeHoldersandrologi["English"]["lama_perkawinan_3"] = "";
	$fieldLabelsandrologi["English"]["anak_perkawinan_1"] = "Anak Perkawinan 1";
	$fieldToolTipsandrologi["English"]["anak_perkawinan_1"] = "";
	$placeHoldersandrologi["English"]["anak_perkawinan_1"] = "";
	$fieldLabelsandrologi["English"]["anak_perkawinan_2"] = "Anak Perkawinan 2";
	$fieldToolTipsandrologi["English"]["anak_perkawinan_2"] = "";
	$placeHoldersandrologi["English"]["anak_perkawinan_2"] = "";
	$fieldLabelsandrologi["English"]["anak_perkawinan_3"] = "Anak Perkawinan 3";
	$fieldToolTipsandrologi["English"]["anak_perkawinan_3"] = "";
	$placeHoldersandrologi["English"]["anak_perkawinan_3"] = "";
	$fieldLabelsandrologi["English"]["Libido"] = "Libido";
	$fieldToolTipsandrologi["English"]["Libido"] = "";
	$placeHoldersandrologi["English"]["Libido"] = "";
	$fieldLabelsandrologi["English"]["Frekwensi_koitus"] = "Frekwensi Koitus";
	$fieldToolTipsandrologi["English"]["Frekwensi_koitus"] = "";
	$placeHoldersandrologi["English"]["Frekwensi_koitus"] = "";
	$fieldLabelsandrologi["English"]["Dispareuni"] = "Dispareuni";
	$fieldToolTipsandrologi["English"]["Dispareuni"] = "";
	$placeHoldersandrologi["English"]["Dispareuni"] = "";
	$fieldLabelsandrologi["English"]["Orgasmus"] = "Orgasmus";
	$fieldToolTipsandrologi["English"]["Orgasmus"] = "";
	$placeHoldersandrologi["English"]["Orgasmus"] = "";
	$fieldLabelsandrologi["English"]["Reflux_Post_Coital"] = "Reflux Post Coital";
	$fieldToolTipsandrologi["English"]["Reflux_Post_Coital"] = "";
	$placeHoldersandrologi["English"]["Reflux_Post_Coital"] = "";
	$fieldLabelsandrologi["English"]["Ejakulasi_Dini"] = "Ejakulasi Dini";
	$fieldToolTipsandrologi["English"]["Ejakulasi_Dini"] = "";
	$placeHoldersandrologi["English"]["Ejakulasi_Dini"] = "";
	$fieldLabelsandrologi["English"]["Ejakulasi_Nocturnal"] = "Ejakulasi Nocturnal";
	$fieldToolTipsandrologi["English"]["Ejakulasi_Nocturnal"] = "";
	$placeHoldersandrologi["English"]["Ejakulasi_Nocturnal"] = "";
	$fieldLabelsandrologi["English"]["Ejakulasi_Nyeri"] = "Ejakulasi Nyeri";
	$fieldToolTipsandrologi["English"]["Ejakulasi_Nyeri"] = "";
	$placeHoldersandrologi["English"]["Ejakulasi_Nyeri"] = "";
	$fieldLabelsandrologi["English"]["Puber"] = "Puber";
	$fieldToolTipsandrologi["English"]["Puber"] = "";
	$placeHoldersandrologi["English"]["Puber"] = "";
	$fieldLabelsandrologi["English"]["Masturbasi"] = "Masturbasi";
	$fieldToolTipsandrologi["English"]["Masturbasi"] = "";
	$placeHoldersandrologi["English"]["Masturbasi"] = "";
	$fieldLabelsandrologi["English"]["Koitus_pranikah"] = "Koitus Pranikah";
	$fieldToolTipsandrologi["English"]["Koitus_pranikah"] = "";
	$placeHoldersandrologi["English"]["Koitus_pranikah"] = "";
	$fieldLabelsandrologi["English"]["Lain_lain"] = "Lain Lain";
	$fieldToolTipsandrologi["English"]["Lain_lain"] = "";
	$placeHoldersandrologi["English"]["Lain_lain"] = "";
	$fieldLabelsandrologi["English"]["Peny_Hub_Seksual"] = "Peny Hub Seksual";
	$fieldToolTipsandrologi["English"]["Peny_Hub_Seksual"] = "";
	$placeHoldersandrologi["English"]["Peny_Hub_Seksual"] = "";
	$fieldLabelsandrologi["English"]["Hernia"] = "Hernia";
	$fieldToolTipsandrologi["English"]["Hernia"] = "";
	$placeHoldersandrologi["English"]["Hernia"] = "";
	$fieldLabelsandrologi["English"]["Hidrokel"] = "Hidrokel";
	$fieldToolTipsandrologi["English"]["Hidrokel"] = "";
	$placeHoldersandrologi["English"]["Hidrokel"] = "";
	$fieldLabelsandrologi["English"]["Trauma"] = "Trauma";
	$fieldToolTipsandrologi["English"]["Trauma"] = "";
	$placeHoldersandrologi["English"]["Trauma"] = "";
	$fieldLabelsandrologi["English"]["Kelainan_bawaan"] = "Kelainan Bawaan";
	$fieldToolTipsandrologi["English"]["Kelainan_bawaan"] = "";
	$placeHoldersandrologi["English"]["Kelainan_bawaan"] = "";
	$fieldLabelsandrologi["English"]["Penyakit_Paru_kronis"] = "Penyakit Paru Kronis";
	$fieldToolTipsandrologi["English"]["Penyakit_Paru_kronis"] = "";
	$placeHoldersandrologi["English"]["Penyakit_Paru_kronis"] = "";
	$fieldLabelsandrologi["English"]["Penyakit_hidung_kronis"] = "Penyakit Hidung Kronis";
	$fieldToolTipsandrologi["English"]["Penyakit_hidung_kronis"] = "";
	$placeHoldersandrologi["English"]["Penyakit_hidung_kronis"] = "";
	$fieldLabelsandrologi["English"]["Tuberkulosa"] = "Tuberkulosa";
	$fieldToolTipsandrologi["English"]["Tuberkulosa"] = "";
	$placeHoldersandrologi["English"]["Tuberkulosa"] = "";
	$fieldLabelsandrologi["English"]["Diabetes_mellitus"] = "Diabetes Mellitus";
	$fieldToolTipsandrologi["English"]["Diabetes_mellitus"] = "";
	$placeHoldersandrologi["English"]["Diabetes_mellitus"] = "";
	$fieldLabelsandrologi["English"]["Gondongan_parotitis"] = "Gondongan Parotitis";
	$fieldToolTipsandrologi["English"]["Gondongan_parotitis"] = "";
	$placeHoldersandrologi["English"]["Gondongan_parotitis"] = "";
	$fieldLabelsandrologi["English"]["Penyakit_Saraf"] = "Penyakit Saraf";
	$fieldToolTipsandrologi["English"]["Penyakit_Saraf"] = "";
	$placeHoldersandrologi["English"]["Penyakit_Saraf"] = "";
	$fieldLabelsandrologi["English"]["Panas_dlm_6_bln"] = "Panas Dlm 6 Bln";
	$fieldToolTipsandrologi["English"]["Panas_dlm_6_bln"] = "";
	$placeHoldersandrologi["English"]["Panas_dlm_6_bln"] = "";
	$fieldLabelsandrologi["English"]["Status_keluarga"] = "Status Keluarga";
	$fieldToolTipsandrologi["English"]["Status_keluarga"] = "";
	$placeHoldersandrologi["English"]["Status_keluarga"] = "";
	$fieldLabelsandrologi["English"]["Saudara_kandung_suami"] = "Saudara Kandung Suami";
	$fieldToolTipsandrologi["English"]["Saudara_kandung_suami"] = "";
	$placeHoldersandrologi["English"]["Saudara_kandung_suami"] = "";
	$fieldLabelsandrologi["English"]["Saudara_kandung_istri"] = "Saudara Kandung Istri";
	$fieldToolTipsandrologi["English"]["Saudara_kandung_istri"] = "";
	$placeHoldersandrologi["English"]["Saudara_kandung_istri"] = "";
	$fieldLabelsandrologi["English"]["Lingkungan_sosial"] = "Lingkungan Sosial";
	$fieldToolTipsandrologi["English"]["Lingkungan_sosial"] = "";
	$placeHoldersandrologi["English"]["Lingkungan_sosial"] = "";
	$fieldLabelsandrologi["English"]["Pekerjaan"] = "Pekerjaan";
	$fieldToolTipsandrologi["English"]["Pekerjaan"] = "";
	$placeHoldersandrologi["English"]["Pekerjaan"] = "";
	$fieldLabelsandrologi["English"]["Keluarga"] = "Keluarga";
	$fieldToolTipsandrologi["English"]["Keluarga"] = "";
	$placeHoldersandrologi["English"]["Keluarga"] = "";
	$fieldLabelsandrologi["English"]["Rokok"] = "Rokok";
	$fieldToolTipsandrologi["English"]["Rokok"] = "";
	$placeHoldersandrologi["English"]["Rokok"] = "";
	$fieldLabelsandrologi["English"]["Alkohol"] = "Alkohol";
	$fieldToolTipsandrologi["English"]["Alkohol"] = "";
	$placeHoldersandrologi["English"]["Alkohol"] = "";
	$fieldLabelsandrologi["English"]["Obat"] = "Obat";
	$fieldToolTipsandrologi["English"]["Obat"] = "";
	$placeHoldersandrologi["English"]["Obat"] = "";
	$fieldLabelsandrologi["English"]["Celana_ketat"] = "Celana Ketat";
	$fieldToolTipsandrologi["English"]["Celana_ketat"] = "";
	$placeHoldersandrologi["English"]["Celana_ketat"] = "";
	$fieldLabelsandrologi["English"]["Bahan_kimia"] = "Bahan Kimia";
	$fieldToolTipsandrologi["English"]["Bahan_kimia"] = "";
	$placeHoldersandrologi["English"]["Bahan_kimia"] = "";
	$fieldLabelsandrologi["English"]["KU"] = "KU";
	$fieldToolTipsandrologi["English"]["KU"] = "";
	$placeHoldersandrologi["English"]["KU"] = "";
	$fieldLabelsandrologi["English"]["TB"] = "TB";
	$fieldToolTipsandrologi["English"]["TB"] = "";
	$placeHoldersandrologi["English"]["TB"] = "";
	$fieldLabelsandrologi["English"]["CM"] = "CM";
	$fieldToolTipsandrologi["English"]["CM"] = "";
	$placeHoldersandrologi["English"]["CM"] = "";
	$fieldLabelsandrologi["English"]["BB"] = "BB";
	$fieldToolTipsandrologi["English"]["BB"] = "";
	$placeHoldersandrologi["English"]["BB"] = "";
	$fieldLabelsandrologi["English"]["KG"] = "KG";
	$fieldToolTipsandrologi["English"]["KG"] = "";
	$placeHoldersandrologi["English"]["KG"] = "";
	$fieldLabelsandrologi["English"]["Tensi"] = "Tensi";
	$fieldToolTipsandrologi["English"]["Tensi"] = "";
	$placeHoldersandrologi["English"]["Tensi"] = "";
	$fieldLabelsandrologi["English"]["Pertumbuhan_distribusi_rambut"] = "Pertumbuhan Distribusi Rambut";
	$fieldToolTipsandrologi["English"]["Pertumbuhan_distribusi_rambut"] = "";
	$placeHoldersandrologi["English"]["Pertumbuhan_distribusi_rambut"] = "";
	$fieldLabelsandrologi["English"]["Kumis"] = "Kumis";
	$fieldToolTipsandrologi["English"]["Kumis"] = "";
	$placeHoldersandrologi["English"]["Kumis"] = "";
	$fieldLabelsandrologi["English"]["Jenggot"] = "Jenggot";
	$fieldToolTipsandrologi["English"]["Jenggot"] = "";
	$placeHoldersandrologi["English"]["Jenggot"] = "";
	$fieldLabelsandrologi["English"]["Mata"] = "Mata";
	$fieldToolTipsandrologi["English"]["Mata"] = "";
	$placeHoldersandrologi["English"]["Mata"] = "";
	$fieldLabelsandrologi["English"]["Hidung"] = "Hidung";
	$fieldToolTipsandrologi["English"]["Hidung"] = "";
	$placeHoldersandrologi["English"]["Hidung"] = "";
	$fieldLabelsandrologi["English"]["Leher"] = "Leher";
	$fieldToolTipsandrologi["English"]["Leher"] = "";
	$placeHoldersandrologi["English"]["Leher"] = "";
	$fieldLabelsandrologi["English"]["Dada"] = "Dada";
	$fieldToolTipsandrologi["English"]["Dada"] = "";
	$placeHoldersandrologi["English"]["Dada"] = "";
	$fieldLabelsandrologi["English"]["ginecomastia"] = "Ginecomastia";
	$fieldToolTipsandrologi["English"]["ginecomastia"] = "";
	$placeHoldersandrologi["English"]["ginecomastia"] = "";
	$fieldLabelsandrologi["English"]["PERUT"] = "PERUT";
	$fieldToolTipsandrologi["English"]["PERUT"] = "";
	$placeHoldersandrologi["English"]["PERUT"] = "";
	$fieldLabelsandrologi["English"]["INGUINAL"] = "INGUINAL";
	$fieldToolTipsandrologi["English"]["INGUINAL"] = "";
	$placeHoldersandrologi["English"]["INGUINAL"] = "";
	$fieldLabelsandrologi["English"]["kubitus__valganus___varus_"] = "kubitus (valganus / varus)";
	$fieldToolTipsandrologi["English"]["kubitus__valganus___varus_"] = "";
	$placeHoldersandrologi["English"]["kubitus__valganus___varus_"] = "";
	$fieldLabelsandrologi["English"]["Rentangan_tangan"] = "Rentangan Tangan";
	$fieldToolTipsandrologi["English"]["Rentangan_tangan"] = "";
	$placeHoldersandrologi["English"]["Rentangan_tangan"] = "";
	$fieldLabelsandrologi["English"]["_Rambut_axilla"] = "Rambut Axilla";
	$fieldToolTipsandrologi["English"]["_Rambut_axilla"] = "";
	$placeHoldersandrologi["English"]["_Rambut_axilla"] = "";
	$fieldLabelsandrologi["English"]["Cor"] = "Cor";
	$fieldToolTipsandrologi["English"]["Cor"] = "";
	$placeHoldersandrologi["English"]["Cor"] = "";
	$fieldLabelsandrologi["English"]["Hepar"] = "Hepar";
	$fieldToolTipsandrologi["English"]["Hepar"] = "";
	$placeHoldersandrologi["English"]["Hepar"] = "";
	$fieldLabelsandrologi["English"]["Pulmo"] = "Pulmo";
	$fieldToolTipsandrologi["English"]["Pulmo"] = "";
	$placeHoldersandrologi["English"]["Pulmo"] = "";
	$fieldLabelsandrologi["English"]["Lien"] = "Lien";
	$fieldToolTipsandrologi["English"]["Lien"] = "";
	$placeHoldersandrologi["English"]["Lien"] = "";
	$fieldLabelsandrologi["English"]["Penis"] = "Penis";
	$fieldToolTipsandrologi["English"]["Penis"] = "";
	$placeHoldersandrologi["English"]["Penis"] = "";
	$fieldLabelsandrologi["English"]["Muara_Urethra"] = "Muara Urethra";
	$fieldToolTipsandrologi["English"]["Muara_Urethra"] = "";
	$placeHoldersandrologi["English"]["Muara_Urethra"] = "";
	$fieldLabelsandrologi["English"]["Skrotum"] = "Skrotum";
	$fieldToolTipsandrologi["English"]["Skrotum"] = "";
	$placeHoldersandrologi["English"]["Skrotum"] = "";
	$fieldLabelsandrologi["English"]["Pubis"] = "Pubis";
	$fieldToolTipsandrologi["English"]["Pubis"] = "";
	$placeHoldersandrologi["English"]["Pubis"] = "";
	$fieldLabelsandrologi["English"]["Pola_Pubis"] = "Pola Pubis";
	$fieldToolTipsandrologi["English"]["Pola_Pubis"] = "";
	$placeHoldersandrologi["English"]["Pola_Pubis"] = "";
	$fieldLabelsandrologi["English"]["Interna_Kanan"] = "Interna Kanan";
	$fieldToolTipsandrologi["English"]["Interna_Kanan"] = "";
	$placeHoldersandrologi["English"]["Interna_Kanan"] = "";
	$fieldLabelsandrologi["English"]["Interna_Kiri"] = "Interna Kiri";
	$fieldToolTipsandrologi["English"]["Interna_Kiri"] = "";
	$placeHoldersandrologi["English"]["Interna_Kiri"] = "";
	$fieldLabelsandrologi["English"]["Posisi_Testis"] = "Posisi Testis";
	$fieldToolTipsandrologi["English"]["Posisi_Testis"] = "";
	$placeHoldersandrologi["English"]["Posisi_Testis"] = "";
	$fieldLabelsandrologi["English"]["Volume"] = "Volume";
	$fieldToolTipsandrologi["English"]["Volume"] = "";
	$placeHoldersandrologi["English"]["Volume"] = "";
	$fieldLabelsandrologi["English"]["Konsistensi"] = "Konsistensi";
	$fieldToolTipsandrologi["English"]["Konsistensi"] = "";
	$placeHoldersandrologi["English"]["Konsistensi"] = "";
	$fieldLabelsandrologi["English"]["Nyeri"] = "Nyeri";
	$fieldToolTipsandrologi["English"]["Nyeri"] = "";
	$placeHoldersandrologi["English"]["Nyeri"] = "";
	$fieldLabelsandrologi["English"]["VAS_DEFERENS"] = "VAS DEFERENS";
	$fieldToolTipsandrologi["English"]["VAS_DEFERENS"] = "";
	$placeHoldersandrologi["English"]["VAS_DEFERENS"] = "";
	$fieldLabelsandrologi["English"]["FUNICULUS"] = "FUNICULUS";
	$fieldToolTipsandrologi["English"]["FUNICULUS"] = "";
	$placeHoldersandrologi["English"]["FUNICULUS"] = "";
	$fieldLabelsandrologi["English"]["EPIDIDYMIS_Ukuran"] = "EPIDIDYMIS Ukuran";
	$fieldToolTipsandrologi["English"]["EPIDIDYMIS_Ukuran"] = "";
	$placeHoldersandrologi["English"]["EPIDIDYMIS_Ukuran"] = "";
	$fieldLabelsandrologi["English"]["EPIDIDYMIS_Konsistensi"] = "EPIDIDYMIS Konsistensi";
	$fieldToolTipsandrologi["English"]["EPIDIDYMIS_Konsistensi"] = "";
	$placeHoldersandrologi["English"]["EPIDIDYMIS_Konsistensi"] = "";
	$fieldLabelsandrologi["English"]["EPIDIDYMIS_Kistik"] = "EPIDIDYMIS Kistik";
	$fieldToolTipsandrologi["English"]["EPIDIDYMIS_Kistik"] = "";
	$placeHoldersandrologi["English"]["EPIDIDYMIS_Kistik"] = "";
	$fieldLabelsandrologi["English"]["EPIDIDYMIS_Nyeri"] = "EPIDIDYMIS Nyeri";
	$fieldToolTipsandrologi["English"]["EPIDIDYMIS_Nyeri"] = "";
	$placeHoldersandrologi["English"]["EPIDIDYMIS_Nyeri"] = "";
	$fieldLabelsandrologi["English"]["EPIDIDYMIS_Permukaan"] = "EPIDIDYMIS Permukaan";
	$fieldToolTipsandrologi["English"]["EPIDIDYMIS_Permukaan"] = "";
	$placeHoldersandrologi["English"]["EPIDIDYMIS_Permukaan"] = "";
	$fieldLabelsandrologi["English"]["VARIKOKEL"] = "VARIKOKEL";
	$fieldToolTipsandrologi["English"]["VARIKOKEL"] = "";
	$placeHoldersandrologi["English"]["VARIKOKEL"] = "";
	$fieldLabelsandrologi["English"]["Prostat"] = "Prostat";
	$fieldToolTipsandrologi["English"]["Prostat"] = "";
	$placeHoldersandrologi["English"]["Prostat"] = "";
	$fieldLabelsandrologi["English"]["V_Seminalis"] = "V Seminalis";
	$fieldToolTipsandrologi["English"]["V_Seminalis"] = "";
	$placeHoldersandrologi["English"]["V_Seminalis"] = "";
	$fieldLabelsandrologi["English"]["lab_ke"] = "Lab Ke";
	$fieldToolTipsandrologi["English"]["lab_ke"] = "";
	$placeHoldersandrologi["English"]["lab_ke"] = "";
	$fieldLabelsandrologi["English"]["lab_tgl"] = "Lab Tgl";
	$fieldToolTipsandrologi["English"]["lab_tgl"] = "";
	$placeHoldersandrologi["English"]["lab_tgl"] = "";
	$fieldLabelsandrologi["English"]["no_reg_lab"] = "No Reg Lab";
	$fieldToolTipsandrologi["English"]["no_reg_lab"] = "";
	$placeHoldersandrologi["English"]["no_reg_lab"] = "";
	$fieldLabelsandrologi["English"]["kesan_lab"] = "Kesan Lab";
	$fieldToolTipsandrologi["English"]["kesan_lab"] = "";
	$placeHoldersandrologi["English"]["kesan_lab"] = "";
	$fieldLabelsandrologi["English"]["Diagnosis_Banding"] = "Diagnosis Banding";
	$fieldToolTipsandrologi["English"]["Diagnosis_Banding"] = "";
	$placeHoldersandrologi["English"]["Diagnosis_Banding"] = "";
	$fieldLabelsandrologi["English"]["Rencana"] = "Rencana";
	$fieldToolTipsandrologi["English"]["Rencana"] = "";
	$placeHoldersandrologi["English"]["Rencana"] = "";
	$fieldLabelsandrologi["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsandrologi["English"]["id_pasien"] = "";
	$placeHoldersandrologi["English"]["id_pasien"] = "";
	$fieldLabelsandrologi["English"]["id_user"] = "Id User";
	$fieldToolTipsandrologi["English"]["id_user"] = "";
	$placeHoldersandrologi["English"]["id_user"] = "";
	$fieldLabelsandrologi["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipsandrologi["English"]["Nomor_Rm"] = "";
	$placeHoldersandrologi["English"]["Nomor_Rm"] = "";
	if (count($fieldToolTipsandrologi["English"]))
		$tdataandrologi[".isUseToolTips"] = true;
}


	$tdataandrologi[".NCSearch"] = true;



$tdataandrologi[".shortTableName"] = "andrologi";
$tdataandrologi[".nSecOptions"] = 0;

$tdataandrologi[".mainTableOwnerID"] = "";
$tdataandrologi[".entityType"] = 0;
$tdataandrologi[".connId"] = "newrm_at_localhost";


$tdataandrologi[".strOriginalTableName"] = "andrologi";

	



$tdataandrologi[".showAddInPopup"] = false;

$tdataandrologi[".showEditInPopup"] = false;

$tdataandrologi[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataandrologi[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataandrologi[".listAjax"] = false;
//	temporary
$tdataandrologi[".listAjax"] = false;

	$tdataandrologi[".audit"] = false;

	$tdataandrologi[".locking"] = false;


$pages = $tdataandrologi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataandrologi[".edit"] = true;
	$tdataandrologi[".afterEditAction"] = 1;
	$tdataandrologi[".closePopupAfterEdit"] = 1;
	$tdataandrologi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataandrologi[".add"] = true;
$tdataandrologi[".afterAddAction"] = 1;
$tdataandrologi[".closePopupAfterAdd"] = 1;
$tdataandrologi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataandrologi[".list"] = true;
}



$tdataandrologi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataandrologi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataandrologi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataandrologi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataandrologi[".printFriendly"] = true;
}



$tdataandrologi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataandrologi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataandrologi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataandrologi[".isUseAjaxSuggest"] = true;

$tdataandrologi[".rowHighlite"] = true;





$tdataandrologi[".ajaxCodeSnippetAdded"] = false;

$tdataandrologi[".buttonsAdded"] = false;

$tdataandrologi[".addPageEvents"] = false;

// use timepicker for search panel
$tdataandrologi[".isUseTimeForSearch"] = false;


$tdataandrologi[".badgeColor"] = "dc143c";


$tdataandrologi[".allSearchFields"] = array();
$tdataandrologi[".filterFields"] = array();
$tdataandrologi[".requiredSearchFields"] = array();

$tdataandrologi[".googleLikeFields"] = array();
$tdataandrologi[".googleLikeFields"][] = "id_andrologi";
$tdataandrologi[".googleLikeFields"][] = "lama_perkawinan_1";
$tdataandrologi[".googleLikeFields"][] = "lama_perkawinan_2";
$tdataandrologi[".googleLikeFields"][] = "lama_perkawinan_3";
$tdataandrologi[".googleLikeFields"][] = "anak_perkawinan_1";
$tdataandrologi[".googleLikeFields"][] = "anak_perkawinan_2";
$tdataandrologi[".googleLikeFields"][] = "anak_perkawinan_3";
$tdataandrologi[".googleLikeFields"][] = "Libido";
$tdataandrologi[".googleLikeFields"][] = "Frekwensi_koitus";
$tdataandrologi[".googleLikeFields"][] = "Dispareuni";
$tdataandrologi[".googleLikeFields"][] = "Orgasmus";
$tdataandrologi[".googleLikeFields"][] = "Reflux_Post_Coital";
$tdataandrologi[".googleLikeFields"][] = "Ejakulasi_Dini";
$tdataandrologi[".googleLikeFields"][] = "Ejakulasi_Nocturnal";
$tdataandrologi[".googleLikeFields"][] = "Ejakulasi_Nyeri";
$tdataandrologi[".googleLikeFields"][] = "Puber";
$tdataandrologi[".googleLikeFields"][] = "Masturbasi";
$tdataandrologi[".googleLikeFields"][] = "Koitus_pranikah";
$tdataandrologi[".googleLikeFields"][] = "Lain_lain";
$tdataandrologi[".googleLikeFields"][] = "Peny_Hub_Seksual";
$tdataandrologi[".googleLikeFields"][] = "Hernia";
$tdataandrologi[".googleLikeFields"][] = "Hidrokel";
$tdataandrologi[".googleLikeFields"][] = "Trauma";
$tdataandrologi[".googleLikeFields"][] = "Kelainan_bawaan";
$tdataandrologi[".googleLikeFields"][] = "Penyakit_Paru_kronis";
$tdataandrologi[".googleLikeFields"][] = "Penyakit_hidung_kronis";
$tdataandrologi[".googleLikeFields"][] = "Tuberkulosa";
$tdataandrologi[".googleLikeFields"][] = "Diabetes_mellitus";
$tdataandrologi[".googleLikeFields"][] = "Gondongan_parotitis";
$tdataandrologi[".googleLikeFields"][] = "Penyakit_Saraf";
$tdataandrologi[".googleLikeFields"][] = "Panas_dlm_6_bln";
$tdataandrologi[".googleLikeFields"][] = "Status_keluarga";
$tdataandrologi[".googleLikeFields"][] = "Saudara_kandung_suami";
$tdataandrologi[".googleLikeFields"][] = "Saudara_kandung_istri";
$tdataandrologi[".googleLikeFields"][] = "Lingkungan_sosial";
$tdataandrologi[".googleLikeFields"][] = "Pekerjaan";
$tdataandrologi[".googleLikeFields"][] = "Keluarga";
$tdataandrologi[".googleLikeFields"][] = "Rokok";
$tdataandrologi[".googleLikeFields"][] = "Alkohol";
$tdataandrologi[".googleLikeFields"][] = "Obat";
$tdataandrologi[".googleLikeFields"][] = "Celana ketat";
$tdataandrologi[".googleLikeFields"][] = "Bahan_kimia";
$tdataandrologi[".googleLikeFields"][] = "KU";
$tdataandrologi[".googleLikeFields"][] = "TB";
$tdataandrologi[".googleLikeFields"][] = "CM";
$tdataandrologi[".googleLikeFields"][] = "BB";
$tdataandrologi[".googleLikeFields"][] = "KG";
$tdataandrologi[".googleLikeFields"][] = "Tensi";
$tdataandrologi[".googleLikeFields"][] = "Pertumbuhan_distribusi_rambut";
$tdataandrologi[".googleLikeFields"][] = "Kumis";
$tdataandrologi[".googleLikeFields"][] = "Jenggot";
$tdataandrologi[".googleLikeFields"][] = "Mata";
$tdataandrologi[".googleLikeFields"][] = "Hidung";
$tdataandrologi[".googleLikeFields"][] = "Leher";
$tdataandrologi[".googleLikeFields"][] = "Dada";
$tdataandrologi[".googleLikeFields"][] = "ginecomastia";
$tdataandrologi[".googleLikeFields"][] = "PERUT";
$tdataandrologi[".googleLikeFields"][] = "INGUINAL";
$tdataandrologi[".googleLikeFields"][] = "kubitus (valganus / varus)";
$tdataandrologi[".googleLikeFields"][] = "Rentangan tangan";
$tdataandrologi[".googleLikeFields"][] = " Rambut axilla";
$tdataandrologi[".googleLikeFields"][] = "Cor";
$tdataandrologi[".googleLikeFields"][] = "Hepar";
$tdataandrologi[".googleLikeFields"][] = "Pulmo";
$tdataandrologi[".googleLikeFields"][] = "Lien";
$tdataandrologi[".googleLikeFields"][] = "Penis";
$tdataandrologi[".googleLikeFields"][] = "Muara_Urethra";
$tdataandrologi[".googleLikeFields"][] = "Skrotum";
$tdataandrologi[".googleLikeFields"][] = "Pubis";
$tdataandrologi[".googleLikeFields"][] = "Pola_Pubis";
$tdataandrologi[".googleLikeFields"][] = "Interna_Kanan";
$tdataandrologi[".googleLikeFields"][] = "Interna_Kiri";
$tdataandrologi[".googleLikeFields"][] = "Posisi_Testis";
$tdataandrologi[".googleLikeFields"][] = "Volume";
$tdataandrologi[".googleLikeFields"][] = "Konsistensi";
$tdataandrologi[".googleLikeFields"][] = "Nyeri";
$tdataandrologi[".googleLikeFields"][] = "VAS_DEFERENS";
$tdataandrologi[".googleLikeFields"][] = "FUNICULUS";
$tdataandrologi[".googleLikeFields"][] = "EPIDIDYMIS_Ukuran";
$tdataandrologi[".googleLikeFields"][] = "EPIDIDYMIS_Konsistensi";
$tdataandrologi[".googleLikeFields"][] = "EPIDIDYMIS_Kistik";
$tdataandrologi[".googleLikeFields"][] = "EPIDIDYMIS_Nyeri";
$tdataandrologi[".googleLikeFields"][] = "EPIDIDYMIS_Permukaan";
$tdataandrologi[".googleLikeFields"][] = "VARIKOKEL";
$tdataandrologi[".googleLikeFields"][] = "Prostat";
$tdataandrologi[".googleLikeFields"][] = "V_Seminalis";
$tdataandrologi[".googleLikeFields"][] = "lab_ke";
$tdataandrologi[".googleLikeFields"][] = "lab_tgl";
$tdataandrologi[".googleLikeFields"][] = "no_reg_lab";
$tdataandrologi[".googleLikeFields"][] = "kesan_lab";
$tdataandrologi[".googleLikeFields"][] = "Diagnosis_Banding";
$tdataandrologi[".googleLikeFields"][] = "Rencana";
$tdataandrologi[".googleLikeFields"][] = "id_pasien";
$tdataandrologi[".googleLikeFields"][] = "id_user";
$tdataandrologi[".googleLikeFields"][] = "Nomor_Rm";



$tdataandrologi[".tableType"] = "list";

$tdataandrologi[".printerPageOrientation"] = 0;
$tdataandrologi[".nPrinterPageScale"] = 100;

$tdataandrologi[".nPrinterSplitRecords"] = 40;

$tdataandrologi[".geocodingEnabled"] = false;










$tdataandrologi[".pageSize"] = 20;

$tdataandrologi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataandrologi[".strOrderBy"] = $tstrOrderBy;

$tdataandrologi[".orderindexes"] = array();


$tdataandrologi[".sqlHead"] = "SELECT id_andrologi,  	lama_perkawinan_1,  	lama_perkawinan_2,  	lama_perkawinan_3,  	anak_perkawinan_1,  	anak_perkawinan_2,  	anak_perkawinan_3,  	Libido,  	Frekwensi_koitus,  	Dispareuni,  	Orgasmus,  	Reflux_Post_Coital,  	Ejakulasi_Dini,  	Ejakulasi_Nocturnal,  	Ejakulasi_Nyeri,  	Puber,  	Masturbasi,  	Koitus_pranikah,  	Lain_lain,  	Peny_Hub_Seksual,  	Hernia,  	Hidrokel,  	Trauma,  	Kelainan_bawaan,  	Penyakit_Paru_kronis,  	Penyakit_hidung_kronis,  	Tuberkulosa,  	Diabetes_mellitus,  	Gondongan_parotitis,  	Penyakit_Saraf,  	Panas_dlm_6_bln,  	Status_keluarga,  	Saudara_kandung_suami,  	Saudara_kandung_istri,  	Lingkungan_sosial,  	Pekerjaan,  	Keluarga,  	Rokok,  	Alkohol,  	Obat,  	`Celana ketat`,  	Bahan_kimia,  	KU,  	TB,  	CM,  	BB,  	KG,  	Tensi,  	Pertumbuhan_distribusi_rambut,  	Kumis,  	Jenggot,  	Mata,  	Hidung,  	Leher,  	Dada,  	ginecomastia,  	PERUT,  	INGUINAL,  	`kubitus (valganus / varus)`,  	`Rentangan tangan`,  	` Rambut axilla`,  	Cor,  	Hepar,  	Pulmo,  	Lien,  	Penis,  	Muara_Urethra,  	Skrotum,  	Pubis,  	Pola_Pubis,  	Interna_Kanan,  	Interna_Kiri,  	Posisi_Testis,  	Volume,  	Konsistensi,  	Nyeri,  	VAS_DEFERENS,  	FUNICULUS,  	EPIDIDYMIS_Ukuran,  	EPIDIDYMIS_Konsistensi,  	EPIDIDYMIS_Kistik,  	EPIDIDYMIS_Nyeri,  	EPIDIDYMIS_Permukaan,  	VARIKOKEL,  	Prostat,  	V_Seminalis,  	lab_ke,  	lab_tgl,  	no_reg_lab,  	kesan_lab,  	Diagnosis_Banding,  	Rencana,  	id_pasien,  	id_user,  	Nomor_Rm";
$tdataandrologi[".sqlFrom"] = "FROM andrologi";
$tdataandrologi[".sqlWhereExpr"] = "";
$tdataandrologi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataandrologi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataandrologi[".arrGroupsPerPage"] = $arrGPP;

$tdataandrologi[".highlightSearchResults"] = true;

$tableKeysandrologi = array();
$tableKeysandrologi[] = "id_andrologi";
$tdataandrologi[".Keys"] = $tableKeysandrologi;


$tdataandrologi[".hideMobileList"] = array();




//	id_andrologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_andrologi";
	$fdata["GoodName"] = "id_andrologi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","id_andrologi");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_andrologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_andrologi";

	
	
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


	$tdataandrologi["id_andrologi"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "id_andrologi";
//	lama_perkawinan_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lama_perkawinan_1";
	$fdata["GoodName"] = "lama_perkawinan_1";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","lama_perkawinan_1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lama_perkawinan_1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lama_perkawinan_1";

	
	
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


	$tdataandrologi["lama_perkawinan_1"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "lama_perkawinan_1";
//	lama_perkawinan_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lama_perkawinan_2";
	$fdata["GoodName"] = "lama_perkawinan_2";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","lama_perkawinan_2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lama_perkawinan_2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lama_perkawinan_2";

	
	
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


	$tdataandrologi["lama_perkawinan_2"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "lama_perkawinan_2";
//	lama_perkawinan_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lama_perkawinan_3";
	$fdata["GoodName"] = "lama_perkawinan_3";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","lama_perkawinan_3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lama_perkawinan_3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lama_perkawinan_3";

	
	
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


	$tdataandrologi["lama_perkawinan_3"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "lama_perkawinan_3";
//	anak_perkawinan_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "anak_perkawinan_1";
	$fdata["GoodName"] = "anak_perkawinan_1";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","anak_perkawinan_1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "anak_perkawinan_1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anak_perkawinan_1";

	
	
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


	$tdataandrologi["anak_perkawinan_1"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "anak_perkawinan_1";
//	anak_perkawinan_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "anak_perkawinan_2";
	$fdata["GoodName"] = "anak_perkawinan_2";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","anak_perkawinan_2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "anak_perkawinan_2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anak_perkawinan_2";

	
	
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


	$tdataandrologi["anak_perkawinan_2"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "anak_perkawinan_2";
//	anak_perkawinan_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "anak_perkawinan_3";
	$fdata["GoodName"] = "anak_perkawinan_3";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","anak_perkawinan_3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "anak_perkawinan_3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anak_perkawinan_3";

	
	
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


	$tdataandrologi["anak_perkawinan_3"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "anak_perkawinan_3";
//	Libido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Libido";
	$fdata["GoodName"] = "Libido";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Libido");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Libido";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Libido";

	
	
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


	$tdataandrologi["Libido"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Libido";
//	Frekwensi_koitus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Frekwensi_koitus";
	$fdata["GoodName"] = "Frekwensi_koitus";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Frekwensi_koitus");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Frekwensi_koitus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Frekwensi_koitus";

	
	
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


	$tdataandrologi["Frekwensi_koitus"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Frekwensi_koitus";
//	Dispareuni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Dispareuni";
	$fdata["GoodName"] = "Dispareuni";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Dispareuni");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Dispareuni";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dispareuni";

	
	
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


	$tdataandrologi["Dispareuni"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Dispareuni";
//	Orgasmus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Orgasmus";
	$fdata["GoodName"] = "Orgasmus";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Orgasmus");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Orgasmus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Orgasmus";

	
	
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


	$tdataandrologi["Orgasmus"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Orgasmus";
//	Reflux_Post_Coital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reflux_Post_Coital";
	$fdata["GoodName"] = "Reflux_Post_Coital";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Reflux_Post_Coital");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Reflux_Post_Coital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Reflux_Post_Coital";

	
	
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


	$tdataandrologi["Reflux_Post_Coital"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Reflux_Post_Coital";
//	Ejakulasi_Dini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Ejakulasi_Dini";
	$fdata["GoodName"] = "Ejakulasi_Dini";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Ejakulasi_Dini");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ejakulasi_Dini";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejakulasi_Dini";

	
	
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


	$tdataandrologi["Ejakulasi_Dini"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Ejakulasi_Dini";
//	Ejakulasi_Nocturnal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Ejakulasi_Nocturnal";
	$fdata["GoodName"] = "Ejakulasi_Nocturnal";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Ejakulasi_Nocturnal");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ejakulasi_Nocturnal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejakulasi_Nocturnal";

	
	
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


	$tdataandrologi["Ejakulasi_Nocturnal"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Ejakulasi_Nocturnal";
//	Ejakulasi_Nyeri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Ejakulasi_Nyeri";
	$fdata["GoodName"] = "Ejakulasi_Nyeri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Ejakulasi_Nyeri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ejakulasi_Nyeri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ejakulasi_Nyeri";

	
	
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


	$tdataandrologi["Ejakulasi_Nyeri"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Ejakulasi_Nyeri";
//	Puber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Puber";
	$fdata["GoodName"] = "Puber";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Puber");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Puber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Puber";

	
	
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


	$tdataandrologi["Puber"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Puber";
//	Masturbasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Masturbasi";
	$fdata["GoodName"] = "Masturbasi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Masturbasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Masturbasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Masturbasi";

	
	
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


	$tdataandrologi["Masturbasi"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Masturbasi";
//	Koitus_pranikah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Koitus_pranikah";
	$fdata["GoodName"] = "Koitus_pranikah";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Koitus_pranikah");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Koitus_pranikah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Koitus_pranikah";

	
	
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


	$tdataandrologi["Koitus_pranikah"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Koitus_pranikah";
//	Lain_lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Lain_lain";
	$fdata["GoodName"] = "Lain_lain";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Lain_lain");
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


	$tdataandrologi["Lain_lain"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Lain_lain";
//	Peny_Hub_Seksual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Peny_Hub_Seksual";
	$fdata["GoodName"] = "Peny_Hub_Seksual";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Peny_Hub_Seksual");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Peny_Hub_Seksual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Peny_Hub_Seksual";

	
	
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


	$tdataandrologi["Peny_Hub_Seksual"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Peny_Hub_Seksual";
//	Hernia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Hernia";
	$fdata["GoodName"] = "Hernia";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Hernia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hernia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hernia";

	
	
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


	$tdataandrologi["Hernia"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Hernia";
//	Hidrokel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Hidrokel";
	$fdata["GoodName"] = "Hidrokel";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Hidrokel");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hidrokel";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hidrokel";

	
	
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


	$tdataandrologi["Hidrokel"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Hidrokel";
//	Trauma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Trauma";
	$fdata["GoodName"] = "Trauma";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Trauma");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Trauma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Trauma";

	
	
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


	$tdataandrologi["Trauma"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Trauma";
//	Kelainan_bawaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Kelainan_bawaan";
	$fdata["GoodName"] = "Kelainan_bawaan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Kelainan_bawaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kelainan_bawaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kelainan_bawaan";

	
	
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


	$tdataandrologi["Kelainan_bawaan"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Kelainan_bawaan";
//	Penyakit_Paru_kronis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Penyakit_Paru_kronis";
	$fdata["GoodName"] = "Penyakit_Paru_kronis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Penyakit_Paru_kronis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penyakit_Paru_kronis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penyakit_Paru_kronis";

	
	
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


	$tdataandrologi["Penyakit_Paru_kronis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Penyakit_Paru_kronis";
//	Penyakit_hidung_kronis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Penyakit_hidung_kronis";
	$fdata["GoodName"] = "Penyakit_hidung_kronis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Penyakit_hidung_kronis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penyakit_hidung_kronis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penyakit_hidung_kronis";

	
	
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


	$tdataandrologi["Penyakit_hidung_kronis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Penyakit_hidung_kronis";
//	Tuberkulosa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Tuberkulosa";
	$fdata["GoodName"] = "Tuberkulosa";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Tuberkulosa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tuberkulosa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tuberkulosa";

	
	
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


	$tdataandrologi["Tuberkulosa"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Tuberkulosa";
//	Diabetes_mellitus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Diabetes_mellitus";
	$fdata["GoodName"] = "Diabetes_mellitus";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Diabetes_mellitus");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diabetes_mellitus";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diabetes_mellitus";

	
	
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


	$tdataandrologi["Diabetes_mellitus"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Diabetes_mellitus";
//	Gondongan_parotitis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Gondongan_parotitis";
	$fdata["GoodName"] = "Gondongan_parotitis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Gondongan_parotitis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gondongan_parotitis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gondongan_parotitis";

	
	
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


	$tdataandrologi["Gondongan_parotitis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Gondongan_parotitis";
//	Penyakit_Saraf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Penyakit_Saraf";
	$fdata["GoodName"] = "Penyakit_Saraf";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Penyakit_Saraf");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penyakit_Saraf";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penyakit_Saraf";

	
	
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


	$tdataandrologi["Penyakit_Saraf"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Penyakit_Saraf";
//	Panas_dlm_6_bln
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Panas_dlm_6_bln";
	$fdata["GoodName"] = "Panas_dlm_6_bln";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Panas_dlm_6_bln");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Panas_dlm_6_bln";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Panas_dlm_6_bln";

	
	
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


	$tdataandrologi["Panas_dlm_6_bln"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Panas_dlm_6_bln";
//	Status_keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Status_keluarga";
	$fdata["GoodName"] = "Status_keluarga";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Status_keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Status_keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status_keluarga";

	
	
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


	$tdataandrologi["Status_keluarga"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Status_keluarga";
//	Saudara_kandung_suami
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Saudara_kandung_suami";
	$fdata["GoodName"] = "Saudara_kandung_suami";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Saudara_kandung_suami");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Saudara_kandung_suami";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Saudara_kandung_suami";

	
	
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


	$tdataandrologi["Saudara_kandung_suami"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Saudara_kandung_suami";
//	Saudara_kandung_istri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Saudara_kandung_istri";
	$fdata["GoodName"] = "Saudara_kandung_istri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Saudara_kandung_istri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Saudara_kandung_istri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Saudara_kandung_istri";

	
	
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


	$tdataandrologi["Saudara_kandung_istri"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Saudara_kandung_istri";
//	Lingkungan_sosial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Lingkungan_sosial";
	$fdata["GoodName"] = "Lingkungan_sosial";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Lingkungan_sosial");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lingkungan_sosial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lingkungan_sosial";

	
	
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


	$tdataandrologi["Lingkungan_sosial"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Lingkungan_sosial";
//	Pekerjaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Pekerjaan";
	$fdata["GoodName"] = "Pekerjaan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Pekerjaan");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdataandrologi["Pekerjaan"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Pekerjaan";
//	Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Keluarga";
	$fdata["GoodName"] = "Keluarga";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Keluarga";

	
	
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


	$tdataandrologi["Keluarga"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Keluarga";
//	Rokok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Rokok";
	$fdata["GoodName"] = "Rokok";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Rokok");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rokok";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rokok";

	
	
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


	$tdataandrologi["Rokok"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Rokok";
//	Alkohol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Alkohol";
	$fdata["GoodName"] = "Alkohol";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Alkohol");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Alkohol";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Alkohol";

	
	
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


	$tdataandrologi["Alkohol"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Alkohol";
//	Obat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Obat";
	$fdata["GoodName"] = "Obat";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Obat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Obat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obat";

	
	
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


	$tdataandrologi["Obat"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Obat";
//	Celana ketat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Celana ketat";
	$fdata["GoodName"] = "Celana_ketat";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Celana_ketat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Celana ketat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Celana ketat`";

	
	
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


	$tdataandrologi["Celana ketat"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Celana ketat";
//	Bahan_kimia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Bahan_kimia";
	$fdata["GoodName"] = "Bahan_kimia";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Bahan_kimia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Bahan_kimia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bahan_kimia";

	
	
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


	$tdataandrologi["Bahan_kimia"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Bahan_kimia";
//	KU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "KU";
	$fdata["GoodName"] = "KU";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","KU");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "KU";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KU";

	
	
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


	$tdataandrologi["KU"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "KU";
//	TB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "TB";
	$fdata["GoodName"] = "TB";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","TB");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "TB";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TB";

	
	
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


	$tdataandrologi["TB"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "TB";
//	CM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "CM";
	$fdata["GoodName"] = "CM";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","CM");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "CM";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CM";

	
	
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


	$tdataandrologi["CM"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "CM";
//	BB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "BB";
	$fdata["GoodName"] = "BB";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","BB");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "BB";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BB";

	
	
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


	$tdataandrologi["BB"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "BB";
//	KG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "KG";
	$fdata["GoodName"] = "KG";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","KG");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "KG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KG";

	
	
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


	$tdataandrologi["KG"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "KG";
//	Tensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Tensi";
	$fdata["GoodName"] = "Tensi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Tensi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tensi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tensi";

	
	
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


	$tdataandrologi["Tensi"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Tensi";
//	Pertumbuhan_distribusi_rambut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Pertumbuhan_distribusi_rambut";
	$fdata["GoodName"] = "Pertumbuhan_distribusi_rambut";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Pertumbuhan_distribusi_rambut");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pertumbuhan_distribusi_rambut";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pertumbuhan_distribusi_rambut";

	
	
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


	$tdataandrologi["Pertumbuhan_distribusi_rambut"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Pertumbuhan_distribusi_rambut";
//	Kumis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Kumis";
	$fdata["GoodName"] = "Kumis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Kumis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kumis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kumis";

	
	
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


	$tdataandrologi["Kumis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Kumis";
//	Jenggot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Jenggot";
	$fdata["GoodName"] = "Jenggot";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Jenggot");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Jenggot";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Jenggot";

	
	
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


	$tdataandrologi["Jenggot"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Jenggot";
//	Mata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Mata";
	$fdata["GoodName"] = "Mata";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Mata");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mata";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mata";

	
	
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


	$tdataandrologi["Mata"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Mata";
//	Hidung
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Hidung";
	$fdata["GoodName"] = "Hidung";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Hidung");
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


	$tdataandrologi["Hidung"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Hidung";
//	Leher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Leher";
	$fdata["GoodName"] = "Leher";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Leher");
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


	$tdataandrologi["Leher"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Leher";
//	Dada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Dada";
	$fdata["GoodName"] = "Dada";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Dada");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Dada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dada";

	
	
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


	$tdataandrologi["Dada"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Dada";
//	ginecomastia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "ginecomastia";
	$fdata["GoodName"] = "ginecomastia";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","ginecomastia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "ginecomastia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ginecomastia";

	
	
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


	$tdataandrologi["ginecomastia"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "ginecomastia";
//	PERUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "PERUT";
	$fdata["GoodName"] = "PERUT";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","PERUT");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PERUT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PERUT";

	
	
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


	$tdataandrologi["PERUT"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "PERUT";
//	INGUINAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "INGUINAL";
	$fdata["GoodName"] = "INGUINAL";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","INGUINAL");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "INGUINAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "INGUINAL";

	
	
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


	$tdataandrologi["INGUINAL"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "INGUINAL";
//	kubitus (valganus / varus)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "kubitus (valganus / varus)";
	$fdata["GoodName"] = "kubitus__valganus___varus_";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","kubitus__valganus___varus_");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "kubitus (valganus / varus)";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kubitus (valganus / varus)`";

	
	
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


	$tdataandrologi["kubitus (valganus / varus)"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "kubitus (valganus / varus)";
//	Rentangan tangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Rentangan tangan";
	$fdata["GoodName"] = "Rentangan_tangan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Rentangan_tangan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rentangan tangan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Rentangan tangan`";

	
	
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


	$tdataandrologi["Rentangan tangan"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Rentangan tangan";
//	 Rambut axilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = " Rambut axilla";
	$fdata["GoodName"] = "_Rambut_axilla";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","_Rambut_axilla");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = " Rambut axilla";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "` Rambut axilla`";

	
	
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


	$tdataandrologi[" Rambut axilla"] = $fdata;
		$tdataandrologi[".searchableFields"][] = " Rambut axilla";
//	Cor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Cor";
	$fdata["GoodName"] = "Cor";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Cor");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cor";

	
	
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


	$tdataandrologi["Cor"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Cor";
//	Hepar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Hepar";
	$fdata["GoodName"] = "Hepar";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Hepar");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hepar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hepar";

	
	
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


	$tdataandrologi["Hepar"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Hepar";
//	Pulmo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Pulmo";
	$fdata["GoodName"] = "Pulmo";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Pulmo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pulmo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pulmo";

	
	
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


	$tdataandrologi["Pulmo"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Pulmo";
//	Lien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Lien";
	$fdata["GoodName"] = "Lien";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Lien");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lien";

	
	
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


	$tdataandrologi["Lien"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Lien";
//	Penis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Penis";
	$fdata["GoodName"] = "Penis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Penis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penis";

	
	
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


	$tdataandrologi["Penis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Penis";
//	Muara_Urethra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Muara_Urethra";
	$fdata["GoodName"] = "Muara_Urethra";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Muara_Urethra");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Muara_Urethra";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Muara_Urethra";

	
	
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


	$tdataandrologi["Muara_Urethra"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Muara_Urethra";
//	Skrotum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Skrotum";
	$fdata["GoodName"] = "Skrotum";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Skrotum");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Skrotum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Skrotum";

	
	
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


	$tdataandrologi["Skrotum"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Skrotum";
//	Pubis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Pubis";
	$fdata["GoodName"] = "Pubis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Pubis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pubis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pubis";

	
	
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


	$tdataandrologi["Pubis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Pubis";
//	Pola_Pubis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Pola_Pubis";
	$fdata["GoodName"] = "Pola_Pubis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Pola_Pubis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pola_Pubis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pola_Pubis";

	
	
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


	$tdataandrologi["Pola_Pubis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Pola_Pubis";
//	Interna_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Interna_Kanan";
	$fdata["GoodName"] = "Interna_Kanan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Interna_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Interna_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Interna_Kanan";

	
	
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


	$tdataandrologi["Interna_Kanan"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Interna_Kanan";
//	Interna_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "Interna_Kiri";
	$fdata["GoodName"] = "Interna_Kiri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Interna_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Interna_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Interna_Kiri";

	
	
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


	$tdataandrologi["Interna_Kiri"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Interna_Kiri";
//	Posisi_Testis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "Posisi_Testis";
	$fdata["GoodName"] = "Posisi_Testis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Posisi_Testis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Posisi_Testis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Posisi_Testis";

	
	
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


	$tdataandrologi["Posisi_Testis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Posisi_Testis";
//	Volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "Volume";
	$fdata["GoodName"] = "Volume";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Volume");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Volume";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Volume";

	
	
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


	$tdataandrologi["Volume"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Volume";
//	Konsistensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "Konsistensi";
	$fdata["GoodName"] = "Konsistensi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Konsistensi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Konsistensi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Konsistensi";

	
	
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


	$tdataandrologi["Konsistensi"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Konsistensi";
//	Nyeri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "Nyeri";
	$fdata["GoodName"] = "Nyeri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Nyeri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Nyeri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nyeri";

	
	
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


	$tdataandrologi["Nyeri"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Nyeri";
//	VAS_DEFERENS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "VAS_DEFERENS";
	$fdata["GoodName"] = "VAS_DEFERENS";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","VAS_DEFERENS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "VAS_DEFERENS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAS_DEFERENS";

	
	
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


	$tdataandrologi["VAS_DEFERENS"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "VAS_DEFERENS";
//	FUNICULUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "FUNICULUS";
	$fdata["GoodName"] = "FUNICULUS";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","FUNICULUS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "FUNICULUS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FUNICULUS";

	
	
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


	$tdataandrologi["FUNICULUS"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "FUNICULUS";
//	EPIDIDYMIS_Ukuran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "EPIDIDYMIS_Ukuran";
	$fdata["GoodName"] = "EPIDIDYMIS_Ukuran";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","EPIDIDYMIS_Ukuran");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Ukuran";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EPIDIDYMIS_Ukuran";

	
	
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


	$tdataandrologi["EPIDIDYMIS_Ukuran"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "EPIDIDYMIS_Ukuran";
//	EPIDIDYMIS_Konsistensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "EPIDIDYMIS_Konsistensi";
	$fdata["GoodName"] = "EPIDIDYMIS_Konsistensi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","EPIDIDYMIS_Konsistensi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Konsistensi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EPIDIDYMIS_Konsistensi";

	
	
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


	$tdataandrologi["EPIDIDYMIS_Konsistensi"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "EPIDIDYMIS_Konsistensi";
//	EPIDIDYMIS_Kistik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "EPIDIDYMIS_Kistik";
	$fdata["GoodName"] = "EPIDIDYMIS_Kistik";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","EPIDIDYMIS_Kistik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Kistik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EPIDIDYMIS_Kistik";

	
	
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


	$tdataandrologi["EPIDIDYMIS_Kistik"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "EPIDIDYMIS_Kistik";
//	EPIDIDYMIS_Nyeri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "EPIDIDYMIS_Nyeri";
	$fdata["GoodName"] = "EPIDIDYMIS_Nyeri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","EPIDIDYMIS_Nyeri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Nyeri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EPIDIDYMIS_Nyeri";

	
	
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


	$tdataandrologi["EPIDIDYMIS_Nyeri"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "EPIDIDYMIS_Nyeri";
//	EPIDIDYMIS_Permukaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "EPIDIDYMIS_Permukaan";
	$fdata["GoodName"] = "EPIDIDYMIS_Permukaan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","EPIDIDYMIS_Permukaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Permukaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EPIDIDYMIS_Permukaan";

	
	
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


	$tdataandrologi["EPIDIDYMIS_Permukaan"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "EPIDIDYMIS_Permukaan";
//	VARIKOKEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "VARIKOKEL";
	$fdata["GoodName"] = "VARIKOKEL";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","VARIKOKEL");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "VARIKOKEL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VARIKOKEL";

	
	
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


	$tdataandrologi["VARIKOKEL"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "VARIKOKEL";
//	Prostat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Prostat";
	$fdata["GoodName"] = "Prostat";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Prostat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Prostat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prostat";

	
	
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


	$tdataandrologi["Prostat"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Prostat";
//	V_Seminalis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "V_Seminalis";
	$fdata["GoodName"] = "V_Seminalis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","V_Seminalis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "V_Seminalis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "V_Seminalis";

	
	
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


	$tdataandrologi["V_Seminalis"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "V_Seminalis";
//	lab_ke
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "lab_ke";
	$fdata["GoodName"] = "lab_ke";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","lab_ke");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lab_ke";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lab_ke";

	
	
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


	$tdataandrologi["lab_ke"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "lab_ke";
//	lab_tgl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "lab_tgl";
	$fdata["GoodName"] = "lab_tgl";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","lab_tgl");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lab_tgl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lab_tgl";

	
	
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


	$tdataandrologi["lab_tgl"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "lab_tgl";
//	no_reg_lab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "no_reg_lab";
	$fdata["GoodName"] = "no_reg_lab";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","no_reg_lab");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "no_reg_lab";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_reg_lab";

	
	
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


	$tdataandrologi["no_reg_lab"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "no_reg_lab";
//	kesan_lab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "kesan_lab";
	$fdata["GoodName"] = "kesan_lab";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","kesan_lab");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "kesan_lab";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kesan_lab";

	
	
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


	$tdataandrologi["kesan_lab"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "kesan_lab";
//	Diagnosis_Banding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "Diagnosis_Banding";
	$fdata["GoodName"] = "Diagnosis_Banding";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Diagnosis_Banding");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosis_Banding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosis_Banding";

	
	
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


	$tdataandrologi["Diagnosis_Banding"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Diagnosis_Banding";
//	Rencana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Rencana";
	$fdata["GoodName"] = "Rencana";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Rencana");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rencana";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rencana";

	
	
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


	$tdataandrologi["Rencana"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Rencana";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","id_pasien");
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


	$tdataandrologi["id_pasien"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","id_user");
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


	$tdataandrologi["id_user"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "id_user";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi","Nomor_Rm");
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


	$tdataandrologi["Nomor_Rm"] = $fdata;
		$tdataandrologi[".searchableFields"][] = "Nomor_Rm";


$tables_data["andrologi"]=&$tdataandrologi;
$field_labels["andrologi"] = &$fieldLabelsandrologi;
$fieldToolTips["andrologi"] = &$fieldToolTipsandrologi;
$placeHolders["andrologi"] = &$placeHoldersandrologi;
$page_titles["andrologi"] = &$pageTitlesandrologi;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["andrologi"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["andrologi"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["andrologi"][0] = $masterParams;
				$masterTablesData["andrologi"][0]["masterKeys"] = array();
	$masterTablesData["andrologi"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["andrologi"][0]["detailKeys"] = array();
	$masterTablesData["andrologi"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["andrologi"][1] = $masterParams;
				$masterTablesData["andrologi"][1]["masterKeys"] = array();
	$masterTablesData["andrologi"][1]["masterKeys"][]="id";
				$masterTablesData["andrologi"][1]["detailKeys"] = array();
	$masterTablesData["andrologi"][1]["detailKeys"][]="id_user";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_andrologi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_andrologi,  	lama_perkawinan_1,  	lama_perkawinan_2,  	lama_perkawinan_3,  	anak_perkawinan_1,  	anak_perkawinan_2,  	anak_perkawinan_3,  	Libido,  	Frekwensi_koitus,  	Dispareuni,  	Orgasmus,  	Reflux_Post_Coital,  	Ejakulasi_Dini,  	Ejakulasi_Nocturnal,  	Ejakulasi_Nyeri,  	Puber,  	Masturbasi,  	Koitus_pranikah,  	Lain_lain,  	Peny_Hub_Seksual,  	Hernia,  	Hidrokel,  	Trauma,  	Kelainan_bawaan,  	Penyakit_Paru_kronis,  	Penyakit_hidung_kronis,  	Tuberkulosa,  	Diabetes_mellitus,  	Gondongan_parotitis,  	Penyakit_Saraf,  	Panas_dlm_6_bln,  	Status_keluarga,  	Saudara_kandung_suami,  	Saudara_kandung_istri,  	Lingkungan_sosial,  	Pekerjaan,  	Keluarga,  	Rokok,  	Alkohol,  	Obat,  	`Celana ketat`,  	Bahan_kimia,  	KU,  	TB,  	CM,  	BB,  	KG,  	Tensi,  	Pertumbuhan_distribusi_rambut,  	Kumis,  	Jenggot,  	Mata,  	Hidung,  	Leher,  	Dada,  	ginecomastia,  	PERUT,  	INGUINAL,  	`kubitus (valganus / varus)`,  	`Rentangan tangan`,  	` Rambut axilla`,  	Cor,  	Hepar,  	Pulmo,  	Lien,  	Penis,  	Muara_Urethra,  	Skrotum,  	Pubis,  	Pola_Pubis,  	Interna_Kanan,  	Interna_Kiri,  	Posisi_Testis,  	Volume,  	Konsistensi,  	Nyeri,  	VAS_DEFERENS,  	FUNICULUS,  	EPIDIDYMIS_Ukuran,  	EPIDIDYMIS_Konsistensi,  	EPIDIDYMIS_Kistik,  	EPIDIDYMIS_Nyeri,  	EPIDIDYMIS_Permukaan,  	VARIKOKEL,  	Prostat,  	V_Seminalis,  	lab_ke,  	lab_tgl,  	no_reg_lab,  	kesan_lab,  	Diagnosis_Banding,  	Rencana,  	id_pasien,  	id_user,  	Nomor_Rm";
$proto0["m_strFrom"] = "FROM andrologi";
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
	"m_strName" => "id_andrologi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto6["m_sql"] = "id_andrologi";
$proto6["m_srcTableName"] = "andrologi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lama_perkawinan_1",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto8["m_sql"] = "lama_perkawinan_1";
$proto8["m_srcTableName"] = "andrologi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lama_perkawinan_2",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto10["m_sql"] = "lama_perkawinan_2";
$proto10["m_srcTableName"] = "andrologi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "lama_perkawinan_3",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto12["m_sql"] = "lama_perkawinan_3";
$proto12["m_srcTableName"] = "andrologi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "anak_perkawinan_1",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto14["m_sql"] = "anak_perkawinan_1";
$proto14["m_srcTableName"] = "andrologi";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "anak_perkawinan_2",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto16["m_sql"] = "anak_perkawinan_2";
$proto16["m_srcTableName"] = "andrologi";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "anak_perkawinan_3",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto18["m_sql"] = "anak_perkawinan_3";
$proto18["m_srcTableName"] = "andrologi";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Libido",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto20["m_sql"] = "Libido";
$proto20["m_srcTableName"] = "andrologi";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Frekwensi_koitus",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto22["m_sql"] = "Frekwensi_koitus";
$proto22["m_srcTableName"] = "andrologi";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Dispareuni",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto24["m_sql"] = "Dispareuni";
$proto24["m_srcTableName"] = "andrologi";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Orgasmus",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto26["m_sql"] = "Orgasmus";
$proto26["m_srcTableName"] = "andrologi";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Reflux_Post_Coital",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto28["m_sql"] = "Reflux_Post_Coital";
$proto28["m_srcTableName"] = "andrologi";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejakulasi_Dini",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto30["m_sql"] = "Ejakulasi_Dini";
$proto30["m_srcTableName"] = "andrologi";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejakulasi_Nocturnal",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto32["m_sql"] = "Ejakulasi_Nocturnal";
$proto32["m_srcTableName"] = "andrologi";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejakulasi_Nyeri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto34["m_sql"] = "Ejakulasi_Nyeri";
$proto34["m_srcTableName"] = "andrologi";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Puber",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto36["m_sql"] = "Puber";
$proto36["m_srcTableName"] = "andrologi";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Masturbasi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto38["m_sql"] = "Masturbasi";
$proto38["m_srcTableName"] = "andrologi";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Koitus_pranikah",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto40["m_sql"] = "Koitus_pranikah";
$proto40["m_srcTableName"] = "andrologi";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Lain_lain",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto42["m_sql"] = "Lain_lain";
$proto42["m_srcTableName"] = "andrologi";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Peny_Hub_Seksual",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto44["m_sql"] = "Peny_Hub_Seksual";
$proto44["m_srcTableName"] = "andrologi";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Hernia",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto46["m_sql"] = "Hernia";
$proto46["m_srcTableName"] = "andrologi";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Hidrokel",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto48["m_sql"] = "Hidrokel";
$proto48["m_srcTableName"] = "andrologi";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Trauma",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto50["m_sql"] = "Trauma";
$proto50["m_srcTableName"] = "andrologi";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Kelainan_bawaan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto52["m_sql"] = "Kelainan_bawaan";
$proto52["m_srcTableName"] = "andrologi";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Penyakit_Paru_kronis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto54["m_sql"] = "Penyakit_Paru_kronis";
$proto54["m_srcTableName"] = "andrologi";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Penyakit_hidung_kronis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto56["m_sql"] = "Penyakit_hidung_kronis";
$proto56["m_srcTableName"] = "andrologi";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Tuberkulosa",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto58["m_sql"] = "Tuberkulosa";
$proto58["m_srcTableName"] = "andrologi";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Diabetes_mellitus",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto60["m_sql"] = "Diabetes_mellitus";
$proto60["m_srcTableName"] = "andrologi";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Gondongan_parotitis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto62["m_sql"] = "Gondongan_parotitis";
$proto62["m_srcTableName"] = "andrologi";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Penyakit_Saraf",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto64["m_sql"] = "Penyakit_Saraf";
$proto64["m_srcTableName"] = "andrologi";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Panas_dlm_6_bln",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto66["m_sql"] = "Panas_dlm_6_bln";
$proto66["m_srcTableName"] = "andrologi";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_keluarga",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto68["m_sql"] = "Status_keluarga";
$proto68["m_srcTableName"] = "andrologi";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Saudara_kandung_suami",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto70["m_sql"] = "Saudara_kandung_suami";
$proto70["m_srcTableName"] = "andrologi";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Saudara_kandung_istri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto72["m_sql"] = "Saudara_kandung_istri";
$proto72["m_srcTableName"] = "andrologi";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Lingkungan_sosial",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto74["m_sql"] = "Lingkungan_sosial";
$proto74["m_srcTableName"] = "andrologi";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto76["m_sql"] = "Pekerjaan";
$proto76["m_srcTableName"] = "andrologi";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluarga",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto78["m_sql"] = "Keluarga";
$proto78["m_srcTableName"] = "andrologi";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Rokok",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto80["m_sql"] = "Rokok";
$proto80["m_srcTableName"] = "andrologi";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Alkohol",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto82["m_sql"] = "Alkohol";
$proto82["m_srcTableName"] = "andrologi";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Obat",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto84["m_sql"] = "Obat";
$proto84["m_srcTableName"] = "andrologi";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Celana ketat",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto86["m_sql"] = "`Celana ketat`";
$proto86["m_srcTableName"] = "andrologi";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Bahan_kimia",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto88["m_sql"] = "Bahan_kimia";
$proto88["m_srcTableName"] = "andrologi";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "KU",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto90["m_sql"] = "KU";
$proto90["m_srcTableName"] = "andrologi";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "TB",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto92["m_sql"] = "TB";
$proto92["m_srcTableName"] = "andrologi";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "CM",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto94["m_sql"] = "CM";
$proto94["m_srcTableName"] = "andrologi";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "BB",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto96["m_sql"] = "BB";
$proto96["m_srcTableName"] = "andrologi";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "KG",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto98["m_sql"] = "KG";
$proto98["m_srcTableName"] = "andrologi";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Tensi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto100["m_sql"] = "Tensi";
$proto100["m_srcTableName"] = "andrologi";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Pertumbuhan_distribusi_rambut",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto102["m_sql"] = "Pertumbuhan_distribusi_rambut";
$proto102["m_srcTableName"] = "andrologi";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Kumis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto104["m_sql"] = "Kumis";
$proto104["m_srcTableName"] = "andrologi";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenggot",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto106["m_sql"] = "Jenggot";
$proto106["m_srcTableName"] = "andrologi";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Mata",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto108["m_sql"] = "Mata";
$proto108["m_srcTableName"] = "andrologi";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Hidung",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto110["m_sql"] = "Hidung";
$proto110["m_srcTableName"] = "andrologi";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Leher",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto112["m_sql"] = "Leher";
$proto112["m_srcTableName"] = "andrologi";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Dada",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto114["m_sql"] = "Dada";
$proto114["m_srcTableName"] = "andrologi";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "ginecomastia",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto116["m_sql"] = "ginecomastia";
$proto116["m_srcTableName"] = "andrologi";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "PERUT",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto118["m_sql"] = "PERUT";
$proto118["m_srcTableName"] = "andrologi";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "INGUINAL",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto120["m_sql"] = "INGUINAL";
$proto120["m_srcTableName"] = "andrologi";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "kubitus (valganus / varus)",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto122["m_sql"] = "`kubitus (valganus / varus)`";
$proto122["m_srcTableName"] = "andrologi";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Rentangan tangan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto124["m_sql"] = "`Rentangan tangan`";
$proto124["m_srcTableName"] = "andrologi";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => " Rambut axilla",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto126["m_sql"] = "` Rambut axilla`";
$proto126["m_srcTableName"] = "andrologi";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Cor",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto128["m_sql"] = "Cor";
$proto128["m_srcTableName"] = "andrologi";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Hepar",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto130["m_sql"] = "Hepar";
$proto130["m_srcTableName"] = "andrologi";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Pulmo",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto132["m_sql"] = "Pulmo";
$proto132["m_srcTableName"] = "andrologi";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Lien",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto134["m_sql"] = "Lien";
$proto134["m_srcTableName"] = "andrologi";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Penis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto136["m_sql"] = "Penis";
$proto136["m_srcTableName"] = "andrologi";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Muara_Urethra",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto138["m_sql"] = "Muara_Urethra";
$proto138["m_srcTableName"] = "andrologi";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Skrotum",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto140["m_sql"] = "Skrotum";
$proto140["m_srcTableName"] = "andrologi";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Pubis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto142["m_sql"] = "Pubis";
$proto142["m_srcTableName"] = "andrologi";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Pola_Pubis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto144["m_sql"] = "Pola_Pubis";
$proto144["m_srcTableName"] = "andrologi";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Interna_Kanan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto146["m_sql"] = "Interna_Kanan";
$proto146["m_srcTableName"] = "andrologi";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Interna_Kiri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto148["m_sql"] = "Interna_Kiri";
$proto148["m_srcTableName"] = "andrologi";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Posisi_Testis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto150["m_sql"] = "Posisi_Testis";
$proto150["m_srcTableName"] = "andrologi";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Volume",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto152["m_sql"] = "Volume";
$proto152["m_srcTableName"] = "andrologi";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Konsistensi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto154["m_sql"] = "Konsistensi";
$proto154["m_srcTableName"] = "andrologi";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Nyeri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto156["m_sql"] = "Nyeri";
$proto156["m_srcTableName"] = "andrologi";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "VAS_DEFERENS",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto158["m_sql"] = "VAS_DEFERENS";
$proto158["m_srcTableName"] = "andrologi";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "FUNICULUS",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto160["m_sql"] = "FUNICULUS";
$proto160["m_srcTableName"] = "andrologi";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Ukuran",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto162["m_sql"] = "EPIDIDYMIS_Ukuran";
$proto162["m_srcTableName"] = "andrologi";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Konsistensi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto164["m_sql"] = "EPIDIDYMIS_Konsistensi";
$proto164["m_srcTableName"] = "andrologi";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Kistik",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto166["m_sql"] = "EPIDIDYMIS_Kistik";
$proto166["m_srcTableName"] = "andrologi";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Nyeri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto168["m_sql"] = "EPIDIDYMIS_Nyeri";
$proto168["m_srcTableName"] = "andrologi";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Permukaan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto170["m_sql"] = "EPIDIDYMIS_Permukaan";
$proto170["m_srcTableName"] = "andrologi";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIKOKEL",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto172["m_sql"] = "VARIKOKEL";
$proto172["m_srcTableName"] = "andrologi";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Prostat",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto174["m_sql"] = "Prostat";
$proto174["m_srcTableName"] = "andrologi";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "V_Seminalis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto176["m_sql"] = "V_Seminalis";
$proto176["m_srcTableName"] = "andrologi";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "lab_ke",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto178["m_sql"] = "lab_ke";
$proto178["m_srcTableName"] = "andrologi";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "lab_tgl",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto180["m_sql"] = "lab_tgl";
$proto180["m_srcTableName"] = "andrologi";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "no_reg_lab",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto182["m_sql"] = "no_reg_lab";
$proto182["m_srcTableName"] = "andrologi";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "kesan_lab",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto184["m_sql"] = "kesan_lab";
$proto184["m_srcTableName"] = "andrologi";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosis_Banding",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto186["m_sql"] = "Diagnosis_Banding";
$proto186["m_srcTableName"] = "andrologi";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Rencana",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto188["m_sql"] = "Rencana";
$proto188["m_srcTableName"] = "andrologi";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto190["m_sql"] = "id_pasien";
$proto190["m_srcTableName"] = "andrologi";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto192["m_sql"] = "id_user";
$proto192["m_srcTableName"] = "andrologi";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi"
));

$proto194["m_sql"] = "Nomor_Rm";
$proto194["m_srcTableName"] = "andrologi";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto196=array();
$proto196["m_link"] = "SQLL_MAIN";
			$proto197=array();
$proto197["m_strName"] = "andrologi";
$proto197["m_srcTableName"] = "andrologi";
$proto197["m_columns"] = array();
$proto197["m_columns"][] = "id_andrologi";
$proto197["m_columns"][] = "lama_perkawinan_1";
$proto197["m_columns"][] = "lama_perkawinan_2";
$proto197["m_columns"][] = "lama_perkawinan_3";
$proto197["m_columns"][] = "anak_perkawinan_1";
$proto197["m_columns"][] = "anak_perkawinan_2";
$proto197["m_columns"][] = "anak_perkawinan_3";
$proto197["m_columns"][] = "Libido";
$proto197["m_columns"][] = "Frekwensi_koitus";
$proto197["m_columns"][] = "Dispareuni";
$proto197["m_columns"][] = "Orgasmus";
$proto197["m_columns"][] = "Reflux_Post_Coital";
$proto197["m_columns"][] = "Ejakulasi_Dini";
$proto197["m_columns"][] = "Ejakulasi_Nocturnal";
$proto197["m_columns"][] = "Ejakulasi_Nyeri";
$proto197["m_columns"][] = "Puber";
$proto197["m_columns"][] = "Masturbasi";
$proto197["m_columns"][] = "Koitus_pranikah";
$proto197["m_columns"][] = "Lain_lain";
$proto197["m_columns"][] = "Peny_Hub_Seksual";
$proto197["m_columns"][] = "Hernia";
$proto197["m_columns"][] = "Hidrokel";
$proto197["m_columns"][] = "Trauma";
$proto197["m_columns"][] = "Kelainan_bawaan";
$proto197["m_columns"][] = "Penyakit_Paru_kronis";
$proto197["m_columns"][] = "Penyakit_hidung_kronis";
$proto197["m_columns"][] = "Tuberkulosa";
$proto197["m_columns"][] = "Diabetes_mellitus";
$proto197["m_columns"][] = "Gondongan_parotitis";
$proto197["m_columns"][] = "Penyakit_Saraf";
$proto197["m_columns"][] = "Panas_dlm_6_bln";
$proto197["m_columns"][] = "Status_keluarga";
$proto197["m_columns"][] = "Saudara_kandung_suami";
$proto197["m_columns"][] = "Saudara_kandung_istri";
$proto197["m_columns"][] = "Lingkungan_sosial";
$proto197["m_columns"][] = "Pekerjaan";
$proto197["m_columns"][] = "Keluarga";
$proto197["m_columns"][] = "Rokok";
$proto197["m_columns"][] = "Alkohol";
$proto197["m_columns"][] = "Obat";
$proto197["m_columns"][] = "Celana ketat";
$proto197["m_columns"][] = "Bahan_kimia";
$proto197["m_columns"][] = "KU";
$proto197["m_columns"][] = "TB";
$proto197["m_columns"][] = "CM";
$proto197["m_columns"][] = "BB";
$proto197["m_columns"][] = "KG";
$proto197["m_columns"][] = "Tensi";
$proto197["m_columns"][] = "Pertumbuhan_distribusi_rambut";
$proto197["m_columns"][] = "Kumis";
$proto197["m_columns"][] = "Jenggot";
$proto197["m_columns"][] = "Mata";
$proto197["m_columns"][] = "Hidung";
$proto197["m_columns"][] = "Leher";
$proto197["m_columns"][] = "Dada";
$proto197["m_columns"][] = "ginecomastia";
$proto197["m_columns"][] = "PERUT";
$proto197["m_columns"][] = "INGUINAL";
$proto197["m_columns"][] = "kubitus (valganus / varus)";
$proto197["m_columns"][] = "Rentangan tangan";
$proto197["m_columns"][] = " Rambut axilla";
$proto197["m_columns"][] = "Cor";
$proto197["m_columns"][] = "Hepar";
$proto197["m_columns"][] = "Pulmo";
$proto197["m_columns"][] = "Lien";
$proto197["m_columns"][] = "Penis";
$proto197["m_columns"][] = "Muara_Urethra";
$proto197["m_columns"][] = "Skrotum";
$proto197["m_columns"][] = "Pubis";
$proto197["m_columns"][] = "Pola_Pubis";
$proto197["m_columns"][] = "Interna_Kanan";
$proto197["m_columns"][] = "Interna_Kiri";
$proto197["m_columns"][] = "Posisi_Testis";
$proto197["m_columns"][] = "Volume";
$proto197["m_columns"][] = "Konsistensi";
$proto197["m_columns"][] = "Nyeri";
$proto197["m_columns"][] = "VAS_DEFERENS";
$proto197["m_columns"][] = "FUNICULUS";
$proto197["m_columns"][] = "EPIDIDYMIS_Ukuran";
$proto197["m_columns"][] = "EPIDIDYMIS_Konsistensi";
$proto197["m_columns"][] = "EPIDIDYMIS_Kistik";
$proto197["m_columns"][] = "EPIDIDYMIS_Nyeri";
$proto197["m_columns"][] = "EPIDIDYMIS_Permukaan";
$proto197["m_columns"][] = "VARIKOKEL";
$proto197["m_columns"][] = "Prostat";
$proto197["m_columns"][] = "V_Seminalis";
$proto197["m_columns"][] = "lab_ke";
$proto197["m_columns"][] = "lab_tgl";
$proto197["m_columns"][] = "no_reg_lab";
$proto197["m_columns"][] = "kesan_lab";
$proto197["m_columns"][] = "Diagnosis_Banding";
$proto197["m_columns"][] = "Rencana";
$proto197["m_columns"][] = "id_pasien";
$proto197["m_columns"][] = "id_user";
$proto197["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto197);

$proto196["m_table"] = $obj;
$proto196["m_sql"] = "andrologi";
$proto196["m_alias"] = "";
$proto196["m_srcTableName"] = "andrologi";
$proto198=array();
$proto198["m_sql"] = "";
$proto198["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto198["m_column"]=$obj;
$proto198["m_contained"] = array();
$proto198["m_strCase"] = "";
$proto198["m_havingmode"] = false;
$proto198["m_inBrackets"] = false;
$proto198["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto198);

$proto196["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto196);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="andrologi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_andrologi = createSqlQuery_andrologi();


	
		;

																																																																																															

$tdataandrologi[".sqlquery"] = $queryData_andrologi;



$tableEvents["andrologi"] = new eventsBase;
$tdataandrologi[".hasEvents"] = false;

?>