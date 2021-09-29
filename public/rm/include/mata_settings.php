<?php
$tdatamata = array();
$tdatamata[".searchableFields"] = array();
$tdatamata[".ShortName"] = "mata";
$tdatamata[".OwnerID"] = "";
$tdatamata[".OriginalTable"] = "mata";


$tdatamata[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamata[".originalPagesByType"] = $tdatamata[".pagesByType"];
$tdatamata[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamata[".originalPages"] = $tdatamata[".pages"];
$tdatamata[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamata[".originalDefaultPages"] = $tdatamata[".defaultPages"];

//	field labels
$fieldLabelsmata = array();
$fieldToolTipsmata = array();
$pageTitlesmata = array();
$placeHoldersmata = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmata["English"] = array();
	$fieldToolTipsmata["English"] = array();
	$placeHoldersmata["English"] = array();
	$pageTitlesmata["English"] = array();
	$fieldLabelsmata["English"]["Id_Mata"] = "Id Mata";
	$fieldToolTipsmata["English"]["Id_Mata"] = "";
	$placeHoldersmata["English"]["Id_Mata"] = "";
	$fieldLabelsmata["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipsmata["English"]["Keluhan_Utama"] = "";
	$placeHoldersmata["English"]["Keluhan_Utama"] = "";
	$fieldLabelsmata["English"]["Keluhan_Tambahan"] = "Keluhan Tambahan";
	$fieldToolTipsmata["English"]["Keluhan_Tambahan"] = "";
	$placeHoldersmata["English"]["Keluhan_Tambahan"] = "";
	$fieldLabelsmata["English"]["Riwayat_Penyakit_Sekarang"] = "Riwayat Penyakit Sekarang";
	$fieldToolTipsmata["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$placeHoldersmata["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$fieldLabelsmata["English"]["Riwayat_Penyakit_Dahulu"] = "Riwayat Penyakit Dahulu";
	$fieldToolTipsmata["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$placeHoldersmata["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$fieldLabelsmata["English"]["Riwayat_Penyakit_Keluarga"] = "Riwayat Penyakit Keluarga";
	$fieldToolTipsmata["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$placeHoldersmata["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$fieldLabelsmata["English"]["Riwayat_Alergi"] = "Riwayat Alergi";
	$fieldToolTipsmata["English"]["Riwayat_Alergi"] = "";
	$placeHoldersmata["English"]["Riwayat_Alergi"] = "";
	$fieldLabelsmata["English"]["Riwayat_Pengobatan"] = "Riwayat Pengobatan";
	$fieldToolTipsmata["English"]["Riwayat_Pengobatan"] = "";
	$placeHoldersmata["English"]["Riwayat_Pengobatan"] = "";
	$fieldLabelsmata["English"]["Riwayat_Kebiasaan"] = "Riwayat Kebiasaan";
	$fieldToolTipsmata["English"]["Riwayat_Kebiasaan"] = "";
	$placeHoldersmata["English"]["Riwayat_Kebiasaan"] = "";
	$fieldLabelsmata["English"]["Riwayat_Sosio_Ekonomi"] = "Riwayat Sosio Ekonomi";
	$fieldToolTipsmata["English"]["Riwayat_Sosio_Ekonomi"] = "";
	$placeHoldersmata["English"]["Riwayat_Sosio_Ekonomi"] = "";
	$fieldLabelsmata["English"]["Visus_OD_Kiri"] = "Visus OD Kiri";
	$fieldToolTipsmata["English"]["Visus_OD_Kiri"] = "";
	$placeHoldersmata["English"]["Visus_OD_Kiri"] = "";
	$fieldLabelsmata["English"]["Visus_OS_Kanan"] = "Visus OS Kanan";
	$fieldToolTipsmata["English"]["Visus_OS_Kanan"] = "";
	$placeHoldersmata["English"]["Visus_OS_Kanan"] = "";
	$fieldLabelsmata["English"]["Refraksi_OD_Kiri"] = "Refraksi OD Kiri";
	$fieldToolTipsmata["English"]["Refraksi_OD_Kiri"] = "";
	$placeHoldersmata["English"]["Refraksi_OD_Kiri"] = "";
	$fieldLabelsmata["English"]["Refraksi_OS_Kanan"] = "Refraksi OS Kanan";
	$fieldToolTipsmata["English"]["Refraksi_OS_Kanan"] = "";
	$placeHoldersmata["English"]["Refraksi_OS_Kanan"] = "";
	$fieldLabelsmata["English"]["Addisi_OD_Kiri"] = "Addisi OD Kiri";
	$fieldToolTipsmata["English"]["Addisi_OD_Kiri"] = "";
	$placeHoldersmata["English"]["Addisi_OD_Kiri"] = "";
	$fieldLabelsmata["English"]["Addisi_OS_Kanan"] = "Addisi OS Kanan";
	$fieldToolTipsmata["English"]["Addisi_OS_Kanan"] = "";
	$placeHoldersmata["English"]["Addisi_OS_Kanan"] = "";
	$fieldLabelsmata["English"]["Posisi_Bola_Mata_Kiri"] = "Posisi Bola Mata Kiri";
	$fieldToolTipsmata["English"]["Posisi_Bola_Mata_Kiri"] = "";
	$placeHoldersmata["English"]["Posisi_Bola_Mata_Kiri"] = "";
	$fieldLabelsmata["English"]["Posisi_Bola_Mata_Kanan"] = "Posisi Bola Mata Kanan";
	$fieldToolTipsmata["English"]["Posisi_Bola_Mata_Kanan"] = "";
	$placeHoldersmata["English"]["Posisi_Bola_Mata_Kanan"] = "";
	$fieldLabelsmata["English"]["Gerakan_Bola_Mata_Kiri"] = "Gerakan Bola Mata Kiri";
	$fieldToolTipsmata["English"]["Gerakan_Bola_Mata_Kiri"] = "";
	$placeHoldersmata["English"]["Gerakan_Bola_Mata_Kiri"] = "";
	$fieldLabelsmata["English"]["Gerakan_Bola_Mata_Kanan"] = "Gerakan Bola Mata Kanan";
	$fieldToolTipsmata["English"]["Gerakan_Bola_Mata_Kanan"] = "";
	$placeHoldersmata["English"]["Gerakan_Bola_Mata_Kanan"] = "";
	$fieldLabelsmata["English"]["Palpebra_Kiri"] = "Palpebra Kiri";
	$fieldToolTipsmata["English"]["Palpebra_Kiri"] = "";
	$placeHoldersmata["English"]["Palpebra_Kiri"] = "";
	$fieldLabelsmata["English"]["Palpebra_Kanan"] = "Palpebra Kanan";
	$fieldToolTipsmata["English"]["Palpebra_Kanan"] = "";
	$placeHoldersmata["English"]["Palpebra_Kanan"] = "";
	$fieldLabelsmata["English"]["Conjunctiva_Kiri"] = "Conjunctiva Kiri";
	$fieldToolTipsmata["English"]["Conjunctiva_Kiri"] = "";
	$placeHoldersmata["English"]["Conjunctiva_Kiri"] = "";
	$fieldLabelsmata["English"]["Conjunctiva_Kanan"] = "Conjunctiva Kanan";
	$fieldToolTipsmata["English"]["Conjunctiva_Kanan"] = "";
	$placeHoldersmata["English"]["Conjunctiva_Kanan"] = "";
	$fieldLabelsmata["English"]["Cornea_Kiri"] = "Cornea Kiri";
	$fieldToolTipsmata["English"]["Cornea_Kiri"] = "";
	$placeHoldersmata["English"]["Cornea_Kiri"] = "";
	$fieldLabelsmata["English"]["Cornea_Kanan"] = "Cornea Kanan";
	$fieldToolTipsmata["English"]["Cornea_Kanan"] = "";
	$placeHoldersmata["English"]["Cornea_Kanan"] = "";
	$fieldLabelsmata["English"]["COA_Kiri"] = "COA Kiri";
	$fieldToolTipsmata["English"]["COA_Kiri"] = "";
	$placeHoldersmata["English"]["COA_Kiri"] = "";
	$fieldLabelsmata["English"]["COA_Kanan"] = "COA Kanan";
	$fieldToolTipsmata["English"]["COA_Kanan"] = "";
	$placeHoldersmata["English"]["COA_Kanan"] = "";
	$fieldLabelsmata["English"]["Pupil_Kiri"] = "Pupil Kiri";
	$fieldToolTipsmata["English"]["Pupil_Kiri"] = "";
	$placeHoldersmata["English"]["Pupil_Kiri"] = "";
	$fieldLabelsmata["English"]["Pupil_Kanan"] = "Pupil Kanan";
	$fieldToolTipsmata["English"]["Pupil_Kanan"] = "";
	$placeHoldersmata["English"]["Pupil_Kanan"] = "";
	$fieldLabelsmata["English"]["Iris_Kiri"] = "Iris Kiri";
	$fieldToolTipsmata["English"]["Iris_Kiri"] = "";
	$placeHoldersmata["English"]["Iris_Kiri"] = "";
	$fieldLabelsmata["English"]["Iris_Kanan"] = "Iris Kanan";
	$fieldToolTipsmata["English"]["Iris_Kanan"] = "";
	$placeHoldersmata["English"]["Iris_Kanan"] = "";
	$fieldLabelsmata["English"]["Lensa_Kiri"] = "Lensa Kiri";
	$fieldToolTipsmata["English"]["Lensa_Kiri"] = "";
	$placeHoldersmata["English"]["Lensa_Kiri"] = "";
	$fieldLabelsmata["English"]["Lensa_Kanan"] = "Lensa Kanan";
	$fieldToolTipsmata["English"]["Lensa_Kanan"] = "";
	$placeHoldersmata["English"]["Lensa_Kanan"] = "";
	$fieldLabelsmata["English"]["Tekanan_Intra_Okuler_Kiri"] = "Tekanan Intra Okuler Kiri";
	$fieldToolTipsmata["English"]["Tekanan_Intra_Okuler_Kiri"] = "";
	$placeHoldersmata["English"]["Tekanan_Intra_Okuler_Kiri"] = "";
	$fieldLabelsmata["English"]["Tekanan_Intra_Okuler_Kanan"] = "Tekanan Intra Okuler Kanan";
	$fieldToolTipsmata["English"]["Tekanan_Intra_Okuler_Kanan"] = "";
	$placeHoldersmata["English"]["Tekanan_Intra_Okuler_Kanan"] = "";
	$fieldLabelsmata["English"]["Segment_Posterior_Kiri"] = "Segment Posterior Kiri";
	$fieldToolTipsmata["English"]["Segment_Posterior_Kiri"] = "";
	$placeHoldersmata["English"]["Segment_Posterior_Kiri"] = "";
	$fieldLabelsmata["English"]["Segment_Posterior_Kanan"] = "Segment Posterior Kanan";
	$fieldToolTipsmata["English"]["Segment_Posterior_Kanan"] = "";
	$placeHoldersmata["English"]["Segment_Posterior_Kanan"] = "";
	$fieldLabelsmata["English"]["Lapang_Pandang_Kiri"] = "Lapang Pandang Kiri";
	$fieldToolTipsmata["English"]["Lapang_Pandang_Kiri"] = "";
	$placeHoldersmata["English"]["Lapang_Pandang_Kiri"] = "";
	$fieldLabelsmata["English"]["Lapang_Pandang_Kanan"] = "Lapang Pandang Kanan";
	$fieldToolTipsmata["English"]["Lapang_Pandang_Kanan"] = "";
	$placeHoldersmata["English"]["Lapang_Pandang_Kanan"] = "";
	$fieldLabelsmata["English"]["Ishihara_Test_Kiri"] = "Ishihara Test Kiri";
	$fieldToolTipsmata["English"]["Ishihara_Test_Kiri"] = "";
	$placeHoldersmata["English"]["Ishihara_Test_Kiri"] = "";
	$fieldLabelsmata["English"]["Ishihara_Test_Kanan"] = "Ishihara Test Kanan";
	$fieldToolTipsmata["English"]["Ishihara_Test_Kanan"] = "";
	$placeHoldersmata["English"]["Ishihara_Test_Kanan"] = "";
	$fieldLabelsmata["English"]["Fluorescein_Tes_Kiri"] = "Fluorescein Tes Kiri";
	$fieldToolTipsmata["English"]["Fluorescein_Tes_Kiri"] = "";
	$placeHoldersmata["English"]["Fluorescein_Tes_Kiri"] = "";
	$fieldLabelsmata["English"]["Fluorescein_Test_Kanan"] = "Fluorescein Test Kanan";
	$fieldToolTipsmata["English"]["Fluorescein_Test_Kanan"] = "";
	$placeHoldersmata["English"]["Fluorescein_Test_Kanan"] = "";
	$fieldLabelsmata["English"]["Sensibilitas_Kornea_Kiri"] = "Sensibilitas Kornea Kiri";
	$fieldToolTipsmata["English"]["Sensibilitas_Kornea_Kiri"] = "";
	$placeHoldersmata["English"]["Sensibilitas_Kornea_Kiri"] = "";
	$fieldLabelsmata["English"]["Sensibilitas_Kornea_Kanan"] = "Sensibilitas Kornea Kanan";
	$fieldToolTipsmata["English"]["Sensibilitas_Kornea_Kanan"] = "";
	$placeHoldersmata["English"]["Sensibilitas_Kornea_Kanan"] = "";
	$fieldLabelsmata["English"]["Schirmer_Test_Kiri"] = "Schirmer Test Kiri";
	$fieldToolTipsmata["English"]["Schirmer_Test_Kiri"] = "";
	$placeHoldersmata["English"]["Schirmer_Test_Kiri"] = "";
	$fieldLabelsmata["English"]["Schirmer_Test_Kanan"] = "Schirmer Test Kanan";
	$fieldToolTipsmata["English"]["Schirmer_Test_Kanan"] = "";
	$placeHoldersmata["English"]["Schirmer_Test_Kanan"] = "";
	$fieldLabelsmata["English"]["Hirschberg_Test_Kiri"] = "Hirschberg Test Kiri";
	$fieldToolTipsmata["English"]["Hirschberg_Test_Kiri"] = "";
	$placeHoldersmata["English"]["Hirschberg_Test_Kiri"] = "";
	$fieldLabelsmata["English"]["Hirschberg_Test_Kanan"] = "Hirschberg Test Kanan";
	$fieldToolTipsmata["English"]["Hirschberg_Test_Kanan"] = "";
	$placeHoldersmata["English"]["Hirschberg_Test_Kanan"] = "";
	$fieldLabelsmata["English"]["Cover_Test_Kiri"] = "Cover Test Kiri";
	$fieldToolTipsmata["English"]["Cover_Test_Kiri"] = "";
	$placeHoldersmata["English"]["Cover_Test_Kiri"] = "";
	$fieldLabelsmata["English"]["Cover_Test_Kanan"] = "Cover Test Kanan";
	$fieldToolTipsmata["English"]["Cover_Test_Kanan"] = "";
	$placeHoldersmata["English"]["Cover_Test_Kanan"] = "";
	$fieldLabelsmata["English"]["Cover_Uncover_Test_Kiri"] = "Cover Uncover Test Kiri";
	$fieldToolTipsmata["English"]["Cover_Uncover_Test_Kiri"] = "";
	$placeHoldersmata["English"]["Cover_Uncover_Test_Kiri"] = "";
	$fieldLabelsmata["English"]["Cover_Uncover_Test_Kanan"] = "Cover Uncover Test Kanan";
	$fieldToolTipsmata["English"]["Cover_Uncover_Test_Kanan"] = "";
	$placeHoldersmata["English"]["Cover_Uncover_Test_Kanan"] = "";
	$fieldLabelsmata["English"]["Penunjang_Lain"] = "Penunjang Lain";
	$fieldToolTipsmata["English"]["Penunjang_Lain"] = "";
	$placeHoldersmata["English"]["Penunjang_Lain"] = "";
	$fieldLabelsmata["English"]["Daftar_Masalah"] = "Daftar Masalah";
	$fieldToolTipsmata["English"]["Daftar_Masalah"] = "";
	$placeHoldersmata["English"]["Daftar_Masalah"] = "";
	$fieldLabelsmata["English"]["Rencana_Permulaan"] = "Rencana Permulaan";
	$fieldToolTipsmata["English"]["Rencana_Permulaan"] = "";
	$placeHoldersmata["English"]["Rencana_Permulaan"] = "";
	$fieldLabelsmata["English"]["Catatan_Kemajuan"] = "Catatan Kemajuan";
	$fieldToolTipsmata["English"]["Catatan_Kemajuan"] = "";
	$placeHoldersmata["English"]["Catatan_Kemajuan"] = "";
	$fieldLabelsmata["English"]["Diagnosa_Diagnosa_Banding"] = "Diagnosa Banding";
	$fieldToolTipsmata["English"]["Diagnosa_Diagnosa_Banding"] = "";
	$placeHoldersmata["English"]["Diagnosa_Diagnosa_Banding"] = "";
	$fieldLabelsmata["English"]["Terapi"] = "Terapi";
	$fieldToolTipsmata["English"]["Terapi"] = "";
	$placeHoldersmata["English"]["Terapi"] = "";
	$fieldLabelsmata["English"]["Prognosis"] = "Prognosis";
	$fieldToolTipsmata["English"]["Prognosis"] = "";
	$placeHoldersmata["English"]["Prognosis"] = "";
	$fieldLabelsmata["English"]["Komplikasi"] = "Komplikasi";
	$fieldToolTipsmata["English"]["Komplikasi"] = "";
	$placeHoldersmata["English"]["Komplikasi"] = "";
	$fieldLabelsmata["English"]["Id_User"] = "Nama DM";
	$fieldToolTipsmata["English"]["Id_User"] = "";
	$placeHoldersmata["English"]["Id_User"] = "";
	$fieldLabelsmata["English"]["id_pasien"] = "";
	$fieldToolTipsmata["English"]["id_pasien"] = "";
	$placeHoldersmata["English"]["id_pasien"] = "";
	$fieldLabelsmata["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipsmata["English"]["Nomor_Rm"] = "";
	$placeHoldersmata["English"]["Nomor_Rm"] = "";
	if (count($fieldToolTipsmata["English"]))
		$tdatamata[".isUseToolTips"] = true;
}


	$tdatamata[".NCSearch"] = true;



$tdatamata[".shortTableName"] = "mata";
$tdatamata[".nSecOptions"] = 0;

$tdatamata[".mainTableOwnerID"] = "";
$tdatamata[".entityType"] = 0;
$tdatamata[".connId"] = "newrm_at_localhost";


$tdatamata[".strOriginalTableName"] = "mata";

	



$tdatamata[".showAddInPopup"] = false;

$tdatamata[".showEditInPopup"] = false;

$tdatamata[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamata[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamata[".listAjax"] = false;
//	temporary
$tdatamata[".listAjax"] = false;

	$tdatamata[".audit"] = false;

	$tdatamata[".locking"] = false;


$pages = $tdatamata[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamata[".edit"] = true;
	$tdatamata[".afterEditAction"] = 1;
	$tdatamata[".closePopupAfterEdit"] = 1;
	$tdatamata[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamata[".add"] = true;
$tdatamata[".afterAddAction"] = 1;
$tdatamata[".closePopupAfterAdd"] = 1;
$tdatamata[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamata[".list"] = true;
}



$tdatamata[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamata[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamata[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamata[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamata[".printFriendly"] = true;
}



$tdatamata[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamata[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamata[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamata[".isUseAjaxSuggest"] = true;

$tdatamata[".rowHighlite"] = true;





$tdatamata[".ajaxCodeSnippetAdded"] = false;

$tdatamata[".buttonsAdded"] = false;

$tdatamata[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamata[".isUseTimeForSearch"] = false;


$tdatamata[".badgeColor"] = "bc8f8f";


$tdatamata[".allSearchFields"] = array();
$tdatamata[".filterFields"] = array();
$tdatamata[".requiredSearchFields"] = array();

$tdatamata[".googleLikeFields"] = array();
$tdatamata[".googleLikeFields"][] = "Id_Mata";
$tdatamata[".googleLikeFields"][] = "Keluhan_Utama";
$tdatamata[".googleLikeFields"][] = "Keluhan_Tambahan";
$tdatamata[".googleLikeFields"][] = "Riwayat_Penyakit_Sekarang";
$tdatamata[".googleLikeFields"][] = "Riwayat_Penyakit_Dahulu";
$tdatamata[".googleLikeFields"][] = "Riwayat_Penyakit_Keluarga";
$tdatamata[".googleLikeFields"][] = "Riwayat_Alergi";
$tdatamata[".googleLikeFields"][] = "Riwayat_Pengobatan";
$tdatamata[".googleLikeFields"][] = "Riwayat_Kebiasaan";
$tdatamata[".googleLikeFields"][] = "Riwayat_Sosio_Ekonomi";
$tdatamata[".googleLikeFields"][] = "Visus_OD_Kiri";
$tdatamata[".googleLikeFields"][] = "Visus_OS_Kanan";
$tdatamata[".googleLikeFields"][] = "Refraksi_OD_Kiri";
$tdatamata[".googleLikeFields"][] = "Refraksi_OS_Kanan";
$tdatamata[".googleLikeFields"][] = "Addisi_OD_Kiri";
$tdatamata[".googleLikeFields"][] = "Addisi_OS_Kanan";
$tdatamata[".googleLikeFields"][] = "Posisi_Bola_Mata_Kiri";
$tdatamata[".googleLikeFields"][] = "Posisi_Bola_Mata_Kanan";
$tdatamata[".googleLikeFields"][] = "Gerakan_Bola_Mata_Kiri";
$tdatamata[".googleLikeFields"][] = "Gerakan_Bola_Mata_Kanan";
$tdatamata[".googleLikeFields"][] = "Palpebra_Kiri";
$tdatamata[".googleLikeFields"][] = "Palpebra_Kanan";
$tdatamata[".googleLikeFields"][] = "Conjunctiva_Kiri";
$tdatamata[".googleLikeFields"][] = "Conjunctiva_Kanan";
$tdatamata[".googleLikeFields"][] = "Cornea_Kiri";
$tdatamata[".googleLikeFields"][] = "Cornea_Kanan";
$tdatamata[".googleLikeFields"][] = "COA_Kiri";
$tdatamata[".googleLikeFields"][] = "COA_Kanan";
$tdatamata[".googleLikeFields"][] = "Pupil_Kiri";
$tdatamata[".googleLikeFields"][] = "Pupil_Kanan";
$tdatamata[".googleLikeFields"][] = "Iris_Kiri";
$tdatamata[".googleLikeFields"][] = "Iris_Kanan";
$tdatamata[".googleLikeFields"][] = "Lensa_Kiri";
$tdatamata[".googleLikeFields"][] = "Lensa_Kanan";
$tdatamata[".googleLikeFields"][] = "Tekanan_Intra_Okuler_Kiri";
$tdatamata[".googleLikeFields"][] = "Tekanan_Intra_Okuler_Kanan";
$tdatamata[".googleLikeFields"][] = "Segment_Posterior_Kiri";
$tdatamata[".googleLikeFields"][] = "Segment_Posterior_Kanan";
$tdatamata[".googleLikeFields"][] = "Lapang_Pandang_Kiri";
$tdatamata[".googleLikeFields"][] = "Lapang_Pandang_Kanan";
$tdatamata[".googleLikeFields"][] = "Ishihara_Test_Kiri";
$tdatamata[".googleLikeFields"][] = "Ishihara_Test_Kanan";
$tdatamata[".googleLikeFields"][] = "Fluorescein_Tes_Kiri";
$tdatamata[".googleLikeFields"][] = "Fluorescein_Test_Kanan";
$tdatamata[".googleLikeFields"][] = "Sensibilitas_Kornea_Kiri";
$tdatamata[".googleLikeFields"][] = "Sensibilitas_Kornea_Kanan";
$tdatamata[".googleLikeFields"][] = "Schirmer_Test_Kiri";
$tdatamata[".googleLikeFields"][] = "Schirmer_Test_Kanan";
$tdatamata[".googleLikeFields"][] = "Hirschberg_Test_Kiri";
$tdatamata[".googleLikeFields"][] = "Hirschberg_Test_Kanan";
$tdatamata[".googleLikeFields"][] = "Cover_Test_Kiri";
$tdatamata[".googleLikeFields"][] = "Cover_Test_Kanan";
$tdatamata[".googleLikeFields"][] = "Cover_Uncover_Test_Kiri";
$tdatamata[".googleLikeFields"][] = "Cover_Uncover_Test_Kanan";
$tdatamata[".googleLikeFields"][] = "Penunjang_Lain";
$tdatamata[".googleLikeFields"][] = "Daftar_Masalah";
$tdatamata[".googleLikeFields"][] = "Rencana_Permulaan";
$tdatamata[".googleLikeFields"][] = "Catatan_Kemajuan";
$tdatamata[".googleLikeFields"][] = "Diagnosa_Diagnosa_Banding";
$tdatamata[".googleLikeFields"][] = "Terapi";
$tdatamata[".googleLikeFields"][] = "Prognosis";
$tdatamata[".googleLikeFields"][] = "Komplikasi";
$tdatamata[".googleLikeFields"][] = "Id_User";
$tdatamata[".googleLikeFields"][] = "id_pasien";
$tdatamata[".googleLikeFields"][] = "Nomor_Rm";



$tdatamata[".tableType"] = "list";

$tdatamata[".printerPageOrientation"] = 0;
$tdatamata[".nPrinterPageScale"] = 100;

$tdatamata[".nPrinterSplitRecords"] = 40;

$tdatamata[".geocodingEnabled"] = false;










$tdatamata[".pageSize"] = 20;

$tdatamata[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamata[".strOrderBy"] = $tstrOrderBy;

$tdatamata[".orderindexes"] = array();


$tdatamata[".sqlHead"] = "SELECT Id_Mata,  	Keluhan_Utama,  	Keluhan_Tambahan,  	Riwayat_Penyakit_Sekarang,  	Riwayat_Penyakit_Dahulu,  	Riwayat_Penyakit_Keluarga,  	Riwayat_Alergi,  	Riwayat_Pengobatan,  	Riwayat_Kebiasaan,  	Riwayat_Sosio_Ekonomi,  	Visus_OD_Kiri,  	Visus_OS_Kanan,  	Refraksi_OD_Kiri,  	Refraksi_OS_Kanan,  	Addisi_OD_Kiri,  	Addisi_OS_Kanan,  	Posisi_Bola_Mata_Kiri,  	Posisi_Bola_Mata_Kanan,  	Gerakan_Bola_Mata_Kiri,  	Gerakan_Bola_Mata_Kanan,  	Palpebra_Kiri,  	Palpebra_Kanan,  	Conjunctiva_Kiri,  	Conjunctiva_Kanan,  	Cornea_Kiri,  	Cornea_Kanan,  	COA_Kiri,  	COA_Kanan,  	Pupil_Kiri,  	Pupil_Kanan,  	Iris_Kiri,  	Iris_Kanan,  	Lensa_Kiri,  	Lensa_Kanan,  	Tekanan_Intra_Okuler_Kiri,  	Tekanan_Intra_Okuler_Kanan,  	Segment_Posterior_Kiri,  	Segment_Posterior_Kanan,  	Lapang_Pandang_Kiri,  	Lapang_Pandang_Kanan,  	Ishihara_Test_Kiri,  	Ishihara_Test_Kanan,  	Fluorescein_Tes_Kiri,  	Fluorescein_Test_Kanan,  	Sensibilitas_Kornea_Kiri,  	Sensibilitas_Kornea_Kanan,  	Schirmer_Test_Kiri,  	Schirmer_Test_Kanan,  	Hirschberg_Test_Kiri,  	Hirschberg_Test_Kanan,  	Cover_Test_Kiri,  	Cover_Test_Kanan,  	Cover_Uncover_Test_Kiri,  	Cover_Uncover_Test_Kanan,  	Penunjang_Lain,  	Daftar_Masalah,  	Rencana_Permulaan,  	Catatan_Kemajuan,  	Diagnosa_Diagnosa_Banding,  	Terapi,  	Prognosis,  	Komplikasi,  	Id_User,  	id_pasien,  	Nomor_Rm";
$tdatamata[".sqlFrom"] = "FROM mata";
$tdatamata[".sqlWhereExpr"] = "";
$tdatamata[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatamata[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamata[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamata[".arrGroupsPerPage"] = $arrGPP;

$tdatamata[".highlightSearchResults"] = true;

$tableKeysmata = array();
$tableKeysmata[] = "Id_Mata";
$tdatamata[".Keys"] = $tableKeysmata;


$tdatamata[".hideMobileList"] = array();




//	Id_Mata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Mata";
	$fdata["GoodName"] = "Id_Mata";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Id_Mata");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Mata";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_Mata";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Id_Mata"] = $fdata;
		$tdatamata[".searchableFields"][] = "Id_Mata";
//	Keluhan_Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan_Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Keluhan_Utama");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=225";

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


	$tdatamata["Keluhan_Utama"] = $fdata;
		$tdatamata[".searchableFields"][] = "Keluhan_Utama";
//	Keluhan_Tambahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Keluhan_Tambahan";
	$fdata["GoodName"] = "Keluhan_Tambahan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Keluhan_Tambahan");
	$fdata["FieldType"] = 200;

	
	
	
			

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=225";

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


	$tdatamata["Keluhan_Tambahan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Keluhan_Tambahan";
//	Riwayat_Penyakit_Sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["GoodName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Riwayat_Penyakit_Sekarang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Penyakit_Sekarang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Penyakit_Sekarang";

	
	
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


	$tdatamata["Riwayat_Penyakit_Sekarang"] = $fdata;
		$tdatamata[".searchableFields"][] = "Riwayat_Penyakit_Sekarang";
//	Riwayat_Penyakit_Dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["GoodName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Riwayat_Penyakit_Dahulu");
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


	$tdatamata["Riwayat_Penyakit_Dahulu"] = $fdata;
		$tdatamata[".searchableFields"][] = "Riwayat_Penyakit_Dahulu";
//	Riwayat_Penyakit_Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["GoodName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Riwayat_Penyakit_Keluarga");
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


	$tdatamata["Riwayat_Penyakit_Keluarga"] = $fdata;
		$tdatamata[".searchableFields"][] = "Riwayat_Penyakit_Keluarga";
//	Riwayat_Alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat_Alergi";
	$fdata["GoodName"] = "Riwayat_Alergi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Riwayat_Alergi");
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


	$tdatamata["Riwayat_Alergi"] = $fdata;
		$tdatamata[".searchableFields"][] = "Riwayat_Alergi";
//	Riwayat_Pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat_Pengobatan";
	$fdata["GoodName"] = "Riwayat_Pengobatan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Riwayat_Pengobatan");
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


	$tdatamata["Riwayat_Pengobatan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Riwayat_Pengobatan";
//	Riwayat_Kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat_Kebiasaan";
	$fdata["GoodName"] = "Riwayat_Kebiasaan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Riwayat_Kebiasaan");
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


	$tdatamata["Riwayat_Kebiasaan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Riwayat_Kebiasaan";
//	Riwayat_Sosio_Ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat_Sosio_Ekonomi";
	$fdata["GoodName"] = "Riwayat_Sosio_Ekonomi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Riwayat_Sosio_Ekonomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Sosio_Ekonomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Sosio_Ekonomi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Riwayat_Sosio_Ekonomi"] = $fdata;
		$tdatamata[".searchableFields"][] = "Riwayat_Sosio_Ekonomi";
//	Visus_OD_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Visus_OD_Kiri";
	$fdata["GoodName"] = "Visus_OD_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Visus_OD_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Visus_OD_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Visus_OD_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Visus_OD_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Visus_OD_Kiri";
//	Visus_OS_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Visus_OS_Kanan";
	$fdata["GoodName"] = "Visus_OS_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Visus_OS_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Visus_OS_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Visus_OS_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Visus_OS_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Visus_OS_Kanan";
//	Refraksi_OD_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Refraksi_OD_Kiri";
	$fdata["GoodName"] = "Refraksi_OD_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Refraksi_OD_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Refraksi_OD_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Refraksi_OD_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Refraksi_OD_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Refraksi_OD_Kiri";
//	Refraksi_OS_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Refraksi_OS_Kanan";
	$fdata["GoodName"] = "Refraksi_OS_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Refraksi_OS_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Refraksi_OS_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Refraksi_OS_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Refraksi_OS_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Refraksi_OS_Kanan";
//	Addisi_OD_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Addisi_OD_Kiri";
	$fdata["GoodName"] = "Addisi_OD_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Addisi_OD_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Addisi_OD_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Addisi_OD_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Addisi_OD_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Addisi_OD_Kiri";
//	Addisi_OS_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Addisi_OS_Kanan";
	$fdata["GoodName"] = "Addisi_OS_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Addisi_OS_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Addisi_OS_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Addisi_OS_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Addisi_OS_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Addisi_OS_Kanan";
//	Posisi_Bola_Mata_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Posisi_Bola_Mata_Kiri";
	$fdata["GoodName"] = "Posisi_Bola_Mata_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Posisi_Bola_Mata_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Posisi_Bola_Mata_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Posisi_Bola_Mata_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Posisi_Bola_Mata_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Posisi_Bola_Mata_Kiri";
//	Posisi_Bola_Mata_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Posisi_Bola_Mata_Kanan";
	$fdata["GoodName"] = "Posisi_Bola_Mata_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Posisi_Bola_Mata_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Posisi_Bola_Mata_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Posisi_Bola_Mata_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Posisi_Bola_Mata_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Posisi_Bola_Mata_Kanan";
//	Gerakan_Bola_Mata_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Gerakan_Bola_Mata_Kiri";
	$fdata["GoodName"] = "Gerakan_Bola_Mata_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Gerakan_Bola_Mata_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gerakan_Bola_Mata_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gerakan_Bola_Mata_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Gerakan_Bola_Mata_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Gerakan_Bola_Mata_Kiri";
//	Gerakan_Bola_Mata_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Gerakan_Bola_Mata_Kanan";
	$fdata["GoodName"] = "Gerakan_Bola_Mata_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Gerakan_Bola_Mata_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gerakan_Bola_Mata_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gerakan_Bola_Mata_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Gerakan_Bola_Mata_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Gerakan_Bola_Mata_Kanan";
//	Palpebra_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Palpebra_Kiri";
	$fdata["GoodName"] = "Palpebra_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Palpebra_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Palpebra_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Palpebra_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Palpebra_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Palpebra_Kiri";
//	Palpebra_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Palpebra_Kanan";
	$fdata["GoodName"] = "Palpebra_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Palpebra_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Palpebra_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Palpebra_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Palpebra_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Palpebra_Kanan";
//	Conjunctiva_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Conjunctiva_Kiri";
	$fdata["GoodName"] = "Conjunctiva_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Conjunctiva_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Conjunctiva_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Conjunctiva_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Conjunctiva_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Conjunctiva_Kiri";
//	Conjunctiva_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Conjunctiva_Kanan";
	$fdata["GoodName"] = "Conjunctiva_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Conjunctiva_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Conjunctiva_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Conjunctiva_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Conjunctiva_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Conjunctiva_Kanan";
//	Cornea_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Cornea_Kiri";
	$fdata["GoodName"] = "Cornea_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Cornea_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cornea_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cornea_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Cornea_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Cornea_Kiri";
//	Cornea_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Cornea_Kanan";
	$fdata["GoodName"] = "Cornea_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Cornea_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cornea_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cornea_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Cornea_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Cornea_Kanan";
//	COA_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "COA_Kiri";
	$fdata["GoodName"] = "COA_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","COA_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "COA_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COA_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["COA_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "COA_Kiri";
//	COA_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "COA_Kanan";
	$fdata["GoodName"] = "COA_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","COA_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "COA_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COA_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["COA_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "COA_Kanan";
//	Pupil_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Pupil_Kiri";
	$fdata["GoodName"] = "Pupil_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Pupil_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pupil_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pupil_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Pupil_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Pupil_Kiri";
//	Pupil_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Pupil_Kanan";
	$fdata["GoodName"] = "Pupil_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Pupil_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pupil_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pupil_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Pupil_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Pupil_Kanan";
//	Iris_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Iris_Kiri";
	$fdata["GoodName"] = "Iris_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Iris_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Iris_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Iris_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Iris_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Iris_Kiri";
//	Iris_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Iris_Kanan";
	$fdata["GoodName"] = "Iris_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Iris_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Iris_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Iris_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Iris_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Iris_Kanan";
//	Lensa_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Lensa_Kiri";
	$fdata["GoodName"] = "Lensa_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Lensa_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lensa_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lensa_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Lensa_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Lensa_Kiri";
//	Lensa_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Lensa_Kanan";
	$fdata["GoodName"] = "Lensa_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Lensa_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lensa_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lensa_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdatamata["Lensa_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Lensa_Kanan";
//	Tekanan_Intra_Okuler_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Tekanan_Intra_Okuler_Kiri";
	$fdata["GoodName"] = "Tekanan_Intra_Okuler_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Tekanan_Intra_Okuler_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tekanan_Intra_Okuler_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tekanan_Intra_Okuler_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Tekanan_Intra_Okuler_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Tekanan_Intra_Okuler_Kiri";
//	Tekanan_Intra_Okuler_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Tekanan_Intra_Okuler_Kanan";
	$fdata["GoodName"] = "Tekanan_Intra_Okuler_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Tekanan_Intra_Okuler_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tekanan_Intra_Okuler_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tekanan_Intra_Okuler_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Tekanan_Intra_Okuler_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Tekanan_Intra_Okuler_Kanan";
//	Segment_Posterior_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Segment_Posterior_Kiri";
	$fdata["GoodName"] = "Segment_Posterior_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Segment_Posterior_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Segment_Posterior_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Segment_Posterior_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Segment_Posterior_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Segment_Posterior_Kiri";
//	Segment_Posterior_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Segment_Posterior_Kanan";
	$fdata["GoodName"] = "Segment_Posterior_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Segment_Posterior_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Segment_Posterior_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Segment_Posterior_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Segment_Posterior_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Segment_Posterior_Kanan";
//	Lapang_Pandang_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Lapang_Pandang_Kiri";
	$fdata["GoodName"] = "Lapang_Pandang_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Lapang_Pandang_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lapang_Pandang_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lapang_Pandang_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Lapang_Pandang_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Lapang_Pandang_Kiri";
//	Lapang_Pandang_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Lapang_Pandang_Kanan";
	$fdata["GoodName"] = "Lapang_Pandang_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Lapang_Pandang_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lapang_Pandang_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lapang_Pandang_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Lapang_Pandang_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Lapang_Pandang_Kanan";
//	Ishihara_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Ishihara_Test_Kiri";
	$fdata["GoodName"] = "Ishihara_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Ishihara_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ishihara_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ishihara_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Ishihara_Test_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Ishihara_Test_Kiri";
//	Ishihara_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Ishihara_Test_Kanan";
	$fdata["GoodName"] = "Ishihara_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Ishihara_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ishihara_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ishihara_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Ishihara_Test_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Ishihara_Test_Kanan";
//	Fluorescein_Tes_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Fluorescein_Tes_Kiri";
	$fdata["GoodName"] = "Fluorescein_Tes_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Fluorescein_Tes_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Fluorescein_Tes_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fluorescein_Tes_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Fluorescein_Tes_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Fluorescein_Tes_Kiri";
//	Fluorescein_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Fluorescein_Test_Kanan";
	$fdata["GoodName"] = "Fluorescein_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Fluorescein_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Fluorescein_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fluorescein_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Fluorescein_Test_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Fluorescein_Test_Kanan";
//	Sensibilitas_Kornea_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Sensibilitas_Kornea_Kiri";
	$fdata["GoodName"] = "Sensibilitas_Kornea_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Sensibilitas_Kornea_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sensibilitas_Kornea_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sensibilitas_Kornea_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Sensibilitas_Kornea_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Sensibilitas_Kornea_Kiri";
//	Sensibilitas_Kornea_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Sensibilitas_Kornea_Kanan";
	$fdata["GoodName"] = "Sensibilitas_Kornea_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Sensibilitas_Kornea_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sensibilitas_Kornea_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sensibilitas_Kornea_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Sensibilitas_Kornea_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Sensibilitas_Kornea_Kanan";
//	Schirmer_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Schirmer_Test_Kiri";
	$fdata["GoodName"] = "Schirmer_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Schirmer_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Schirmer_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Schirmer_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Schirmer_Test_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Schirmer_Test_Kiri";
//	Schirmer_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Schirmer_Test_Kanan";
	$fdata["GoodName"] = "Schirmer_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Schirmer_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Schirmer_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Schirmer_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Schirmer_Test_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Schirmer_Test_Kanan";
//	Hirschberg_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Hirschberg_Test_Kiri";
	$fdata["GoodName"] = "Hirschberg_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Hirschberg_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hirschberg_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hirschberg_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Hirschberg_Test_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Hirschberg_Test_Kiri";
//	Hirschberg_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Hirschberg_Test_Kanan";
	$fdata["GoodName"] = "Hirschberg_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Hirschberg_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hirschberg_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hirschberg_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Hirschberg_Test_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Hirschberg_Test_Kanan";
//	Cover_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Cover_Test_Kiri";
	$fdata["GoodName"] = "Cover_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Cover_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cover_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Cover_Test_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Cover_Test_Kiri";
//	Cover_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Cover_Test_Kanan";
	$fdata["GoodName"] = "Cover_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Cover_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cover_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Cover_Test_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Cover_Test_Kanan";
//	Cover_Uncover_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Cover_Uncover_Test_Kiri";
	$fdata["GoodName"] = "Cover_Uncover_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Cover_Uncover_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Uncover_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cover_Uncover_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Cover_Uncover_Test_Kiri"] = $fdata;
		$tdatamata[".searchableFields"][] = "Cover_Uncover_Test_Kiri";
//	Cover_Uncover_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Cover_Uncover_Test_Kanan";
	$fdata["GoodName"] = "Cover_Uncover_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Cover_Uncover_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Uncover_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cover_Uncover_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Cover_Uncover_Test_Kanan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Cover_Uncover_Test_Kanan";
//	Penunjang_Lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Penunjang_Lain";
	$fdata["GoodName"] = "Penunjang_Lain";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Penunjang_Lain");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penunjang_Lain";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penunjang_Lain";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Penunjang_Lain"] = $fdata;
		$tdatamata[".searchableFields"][] = "Penunjang_Lain";
//	Daftar_Masalah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Daftar_Masalah";
	$fdata["GoodName"] = "Daftar_Masalah";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Daftar_Masalah");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daftar_Masalah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daftar_Masalah";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Daftar_Masalah"] = $fdata;
		$tdatamata[".searchableFields"][] = "Daftar_Masalah";
//	Rencana_Permulaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Rencana_Permulaan";
	$fdata["GoodName"] = "Rencana_Permulaan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Rencana_Permulaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rencana_Permulaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rencana_Permulaan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Rencana_Permulaan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Rencana_Permulaan";
//	Catatan_Kemajuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Catatan_Kemajuan";
	$fdata["GoodName"] = "Catatan_Kemajuan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Catatan_Kemajuan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Catatan_Kemajuan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Catatan_Kemajuan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Catatan_Kemajuan"] = $fdata;
		$tdatamata[".searchableFields"][] = "Catatan_Kemajuan";
//	Diagnosa_Diagnosa_Banding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Diagnosa_Diagnosa_Banding";
	$fdata["GoodName"] = "Diagnosa_Diagnosa_Banding";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Diagnosa_Diagnosa_Banding");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Diagnosa_Diagnosa_Banding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosa_Diagnosa_Banding";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Diagnosa_Diagnosa_Banding"] = $fdata;
		$tdatamata[".searchableFields"][] = "Diagnosa_Diagnosa_Banding";
//	Terapi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Terapi";
	$fdata["GoodName"] = "Terapi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Terapi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Terapi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Terapi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Terapi"] = $fdata;
		$tdatamata[".searchableFields"][] = "Terapi";
//	Prognosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Prognosis";
	$fdata["GoodName"] = "Prognosis";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Prognosis");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Prognosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prognosis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Prognosis"] = $fdata;
		$tdatamata[".searchableFields"][] = "Prognosis";
//	Komplikasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Komplikasi";
	$fdata["GoodName"] = "Komplikasi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Komplikasi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Komplikasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Komplikasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatamata["Komplikasi"] = $fdata;
		$tdatamata[".searchableFields"][] = "Komplikasi";
//	Id_User
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Id_User";
	$fdata["GoodName"] = "Id_User";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Id_User");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "Id_User";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id_User";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
	$edata["LookupTable"] = "users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

				$edata["LookupWhere"] = "id = ':session.id_user'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamata["Id_User"] = $fdata;
		$tdatamata[".searchableFields"][] = "Id_User";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","id_pasien");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_pasien";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatamata["id_pasien"] = $fdata;
		$tdatamata[".searchableFields"][] = "id_pasien";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("mata","Nomor_Rm");
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


	$tdatamata["Nomor_Rm"] = $fdata;
		$tdatamata[".searchableFields"][] = "Nomor_Rm";


$tables_data["mata"]=&$tdatamata;
$field_labels["mata"] = &$fieldLabelsmata;
$fieldToolTips["mata"] = &$fieldToolTipsmata;
$placeHolders["mata"] = &$placeHoldersmata;
$page_titles["mata"] = &$pageTitlesmata;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mata"] = array();
//	catatan_kemajuan
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="catatan_kemajuan";
		$detailsParam["dOriginalTable"] = "catatan_kemajuan";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "catatan_kemajuan";
	$detailsParam["dCaptionTable"] = GetTableCaption("catatan_kemajuan");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["mata"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mata"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mata"][$dIndex]["masterKeys"][]="Id_Mata";

				$detailsTablesData["mata"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mata"][$dIndex]["detailKeys"][]="id_mata";
//	daftar_masalah
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="daftar_masalah";
		$detailsParam["dOriginalTable"] = "daftar_masalah";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "daftar_masalah";
	$detailsParam["dCaptionTable"] = GetTableCaption("daftar_masalah");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["mata"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mata"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mata"][$dIndex]["masterKeys"][]="Id_Mata";

				$detailsTablesData["mata"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mata"][$dIndex]["detailKeys"][]="id_mata";
//	rencana_permulaan
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="rencana_permulaan";
		$detailsParam["dOriginalTable"] = "rencana_permulaan";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "rencana_permulaan";
	$detailsParam["dCaptionTable"] = GetTableCaption("rencana_permulaan");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["mata"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mata"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mata"][$dIndex]["masterKeys"][]="Id_Mata";

				$detailsTablesData["mata"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mata"][$dIndex]["detailKeys"][]="id_mata";

// tables which are master tables for current table (detail)
$masterTablesData["mata"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["mata"][0] = $masterParams;
				$masterTablesData["mata"][0]["masterKeys"] = array();
	$masterTablesData["mata"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["mata"][0]["detailKeys"] = array();
	$masterTablesData["mata"][0]["detailKeys"][]="id_pasien";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mata()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id_Mata,  	Keluhan_Utama,  	Keluhan_Tambahan,  	Riwayat_Penyakit_Sekarang,  	Riwayat_Penyakit_Dahulu,  	Riwayat_Penyakit_Keluarga,  	Riwayat_Alergi,  	Riwayat_Pengobatan,  	Riwayat_Kebiasaan,  	Riwayat_Sosio_Ekonomi,  	Visus_OD_Kiri,  	Visus_OS_Kanan,  	Refraksi_OD_Kiri,  	Refraksi_OS_Kanan,  	Addisi_OD_Kiri,  	Addisi_OS_Kanan,  	Posisi_Bola_Mata_Kiri,  	Posisi_Bola_Mata_Kanan,  	Gerakan_Bola_Mata_Kiri,  	Gerakan_Bola_Mata_Kanan,  	Palpebra_Kiri,  	Palpebra_Kanan,  	Conjunctiva_Kiri,  	Conjunctiva_Kanan,  	Cornea_Kiri,  	Cornea_Kanan,  	COA_Kiri,  	COA_Kanan,  	Pupil_Kiri,  	Pupil_Kanan,  	Iris_Kiri,  	Iris_Kanan,  	Lensa_Kiri,  	Lensa_Kanan,  	Tekanan_Intra_Okuler_Kiri,  	Tekanan_Intra_Okuler_Kanan,  	Segment_Posterior_Kiri,  	Segment_Posterior_Kanan,  	Lapang_Pandang_Kiri,  	Lapang_Pandang_Kanan,  	Ishihara_Test_Kiri,  	Ishihara_Test_Kanan,  	Fluorescein_Tes_Kiri,  	Fluorescein_Test_Kanan,  	Sensibilitas_Kornea_Kiri,  	Sensibilitas_Kornea_Kanan,  	Schirmer_Test_Kiri,  	Schirmer_Test_Kanan,  	Hirschberg_Test_Kiri,  	Hirschberg_Test_Kanan,  	Cover_Test_Kiri,  	Cover_Test_Kanan,  	Cover_Uncover_Test_Kiri,  	Cover_Uncover_Test_Kanan,  	Penunjang_Lain,  	Daftar_Masalah,  	Rencana_Permulaan,  	Catatan_Kemajuan,  	Diagnosa_Diagnosa_Banding,  	Terapi,  	Prognosis,  	Komplikasi,  	Id_User,  	id_pasien,  	Nomor_Rm";
$proto0["m_strFrom"] = "FROM mata";
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
	"m_strName" => "Id_Mata",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto6["m_sql"] = "Id_Mata";
$proto6["m_srcTableName"] = "mata";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Utama",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto8["m_sql"] = "Keluhan_Utama";
$proto8["m_srcTableName"] = "mata";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Tambahan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto10["m_sql"] = "Keluhan_Tambahan";
$proto10["m_srcTableName"] = "mata";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Sekarang",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto12["m_sql"] = "Riwayat_Penyakit_Sekarang";
$proto12["m_srcTableName"] = "mata";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Dahulu",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto14["m_sql"] = "Riwayat_Penyakit_Dahulu";
$proto14["m_srcTableName"] = "mata";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Keluarga",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto16["m_sql"] = "Riwayat_Penyakit_Keluarga";
$proto16["m_srcTableName"] = "mata";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Alergi",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto18["m_sql"] = "Riwayat_Alergi";
$proto18["m_srcTableName"] = "mata";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Pengobatan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto20["m_sql"] = "Riwayat_Pengobatan";
$proto20["m_srcTableName"] = "mata";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Kebiasaan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto22["m_sql"] = "Riwayat_Kebiasaan";
$proto22["m_srcTableName"] = "mata";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Sosio_Ekonomi",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto24["m_sql"] = "Riwayat_Sosio_Ekonomi";
$proto24["m_srcTableName"] = "mata";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Visus_OD_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto26["m_sql"] = "Visus_OD_Kiri";
$proto26["m_srcTableName"] = "mata";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Visus_OS_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto28["m_sql"] = "Visus_OS_Kanan";
$proto28["m_srcTableName"] = "mata";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Refraksi_OD_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto30["m_sql"] = "Refraksi_OD_Kiri";
$proto30["m_srcTableName"] = "mata";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Refraksi_OS_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto32["m_sql"] = "Refraksi_OS_Kanan";
$proto32["m_srcTableName"] = "mata";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Addisi_OD_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto34["m_sql"] = "Addisi_OD_Kiri";
$proto34["m_srcTableName"] = "mata";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Addisi_OS_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto36["m_sql"] = "Addisi_OS_Kanan";
$proto36["m_srcTableName"] = "mata";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Posisi_Bola_Mata_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto38["m_sql"] = "Posisi_Bola_Mata_Kiri";
$proto38["m_srcTableName"] = "mata";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Posisi_Bola_Mata_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto40["m_sql"] = "Posisi_Bola_Mata_Kanan";
$proto40["m_srcTableName"] = "mata";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Gerakan_Bola_Mata_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto42["m_sql"] = "Gerakan_Bola_Mata_Kiri";
$proto42["m_srcTableName"] = "mata";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Gerakan_Bola_Mata_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto44["m_sql"] = "Gerakan_Bola_Mata_Kanan";
$proto44["m_srcTableName"] = "mata";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Palpebra_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto46["m_sql"] = "Palpebra_Kiri";
$proto46["m_srcTableName"] = "mata";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Palpebra_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto48["m_sql"] = "Palpebra_Kanan";
$proto48["m_srcTableName"] = "mata";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Conjunctiva_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto50["m_sql"] = "Conjunctiva_Kiri";
$proto50["m_srcTableName"] = "mata";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Conjunctiva_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto52["m_sql"] = "Conjunctiva_Kanan";
$proto52["m_srcTableName"] = "mata";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Cornea_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto54["m_sql"] = "Cornea_Kiri";
$proto54["m_srcTableName"] = "mata";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Cornea_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto56["m_sql"] = "Cornea_Kanan";
$proto56["m_srcTableName"] = "mata";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "COA_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto58["m_sql"] = "COA_Kiri";
$proto58["m_srcTableName"] = "mata";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "COA_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto60["m_sql"] = "COA_Kanan";
$proto60["m_srcTableName"] = "mata";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Pupil_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto62["m_sql"] = "Pupil_Kiri";
$proto62["m_srcTableName"] = "mata";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Pupil_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto64["m_sql"] = "Pupil_Kanan";
$proto64["m_srcTableName"] = "mata";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Iris_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto66["m_sql"] = "Iris_Kiri";
$proto66["m_srcTableName"] = "mata";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Iris_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto68["m_sql"] = "Iris_Kanan";
$proto68["m_srcTableName"] = "mata";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Lensa_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto70["m_sql"] = "Lensa_Kiri";
$proto70["m_srcTableName"] = "mata";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Lensa_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto72["m_sql"] = "Lensa_Kanan";
$proto72["m_srcTableName"] = "mata";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Tekanan_Intra_Okuler_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto74["m_sql"] = "Tekanan_Intra_Okuler_Kiri";
$proto74["m_srcTableName"] = "mata";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Tekanan_Intra_Okuler_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto76["m_sql"] = "Tekanan_Intra_Okuler_Kanan";
$proto76["m_srcTableName"] = "mata";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Segment_Posterior_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto78["m_sql"] = "Segment_Posterior_Kiri";
$proto78["m_srcTableName"] = "mata";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Segment_Posterior_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto80["m_sql"] = "Segment_Posterior_Kanan";
$proto80["m_srcTableName"] = "mata";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Lapang_Pandang_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto82["m_sql"] = "Lapang_Pandang_Kiri";
$proto82["m_srcTableName"] = "mata";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Lapang_Pandang_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto84["m_sql"] = "Lapang_Pandang_Kanan";
$proto84["m_srcTableName"] = "mata";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Ishihara_Test_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto86["m_sql"] = "Ishihara_Test_Kiri";
$proto86["m_srcTableName"] = "mata";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Ishihara_Test_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto88["m_sql"] = "Ishihara_Test_Kanan";
$proto88["m_srcTableName"] = "mata";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Fluorescein_Tes_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto90["m_sql"] = "Fluorescein_Tes_Kiri";
$proto90["m_srcTableName"] = "mata";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Fluorescein_Test_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto92["m_sql"] = "Fluorescein_Test_Kanan";
$proto92["m_srcTableName"] = "mata";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Sensibilitas_Kornea_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto94["m_sql"] = "Sensibilitas_Kornea_Kiri";
$proto94["m_srcTableName"] = "mata";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Sensibilitas_Kornea_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto96["m_sql"] = "Sensibilitas_Kornea_Kanan";
$proto96["m_srcTableName"] = "mata";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Schirmer_Test_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto98["m_sql"] = "Schirmer_Test_Kiri";
$proto98["m_srcTableName"] = "mata";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Schirmer_Test_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto100["m_sql"] = "Schirmer_Test_Kanan";
$proto100["m_srcTableName"] = "mata";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Hirschberg_Test_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto102["m_sql"] = "Hirschberg_Test_Kiri";
$proto102["m_srcTableName"] = "mata";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Hirschberg_Test_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto104["m_sql"] = "Hirschberg_Test_Kanan";
$proto104["m_srcTableName"] = "mata";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Test_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto106["m_sql"] = "Cover_Test_Kiri";
$proto106["m_srcTableName"] = "mata";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Test_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto108["m_sql"] = "Cover_Test_Kanan";
$proto108["m_srcTableName"] = "mata";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Uncover_Test_Kiri",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto110["m_sql"] = "Cover_Uncover_Test_Kiri";
$proto110["m_srcTableName"] = "mata";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Uncover_Test_Kanan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto112["m_sql"] = "Cover_Uncover_Test_Kanan";
$proto112["m_srcTableName"] = "mata";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Penunjang_Lain",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto114["m_sql"] = "Penunjang_Lain";
$proto114["m_srcTableName"] = "mata";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Daftar_Masalah",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto116["m_sql"] = "Daftar_Masalah";
$proto116["m_srcTableName"] = "mata";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Rencana_Permulaan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto118["m_sql"] = "Rencana_Permulaan";
$proto118["m_srcTableName"] = "mata";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan_Kemajuan",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto120["m_sql"] = "Catatan_Kemajuan";
$proto120["m_srcTableName"] = "mata";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa_Diagnosa_Banding",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto122["m_sql"] = "Diagnosa_Diagnosa_Banding";
$proto122["m_srcTableName"] = "mata";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Terapi",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto124["m_sql"] = "Terapi";
$proto124["m_srcTableName"] = "mata";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Prognosis",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto126["m_sql"] = "Prognosis";
$proto126["m_srcTableName"] = "mata";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Komplikasi",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto128["m_sql"] = "Komplikasi";
$proto128["m_srcTableName"] = "mata";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_User",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto130["m_sql"] = "Id_User";
$proto130["m_srcTableName"] = "mata";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto132["m_sql"] = "id_pasien";
$proto132["m_srcTableName"] = "mata";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "mata",
	"m_srcTableName" => "mata"
));

$proto134["m_sql"] = "Nomor_Rm";
$proto134["m_srcTableName"] = "mata";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto136=array();
$proto136["m_link"] = "SQLL_MAIN";
			$proto137=array();
$proto137["m_strName"] = "mata";
$proto137["m_srcTableName"] = "mata";
$proto137["m_columns"] = array();
$proto137["m_columns"][] = "Id_Mata";
$proto137["m_columns"][] = "Keluhan_Utama";
$proto137["m_columns"][] = "Keluhan_Tambahan";
$proto137["m_columns"][] = "Riwayat_Penyakit_Sekarang";
$proto137["m_columns"][] = "Riwayat_Penyakit_Dahulu";
$proto137["m_columns"][] = "Riwayat_Penyakit_Keluarga";
$proto137["m_columns"][] = "Riwayat_Alergi";
$proto137["m_columns"][] = "Riwayat_Pengobatan";
$proto137["m_columns"][] = "Riwayat_Kebiasaan";
$proto137["m_columns"][] = "Riwayat_Sosio_Ekonomi";
$proto137["m_columns"][] = "Visus_OD_Kiri";
$proto137["m_columns"][] = "Visus_OS_Kanan";
$proto137["m_columns"][] = "Refraksi_OD_Kiri";
$proto137["m_columns"][] = "Refraksi_OS_Kanan";
$proto137["m_columns"][] = "Addisi_OD_Kiri";
$proto137["m_columns"][] = "Addisi_OS_Kanan";
$proto137["m_columns"][] = "Posisi_Bola_Mata_Kiri";
$proto137["m_columns"][] = "Posisi_Bola_Mata_Kanan";
$proto137["m_columns"][] = "Gerakan_Bola_Mata_Kiri";
$proto137["m_columns"][] = "Gerakan_Bola_Mata_Kanan";
$proto137["m_columns"][] = "Palpebra_Kiri";
$proto137["m_columns"][] = "Palpebra_Kanan";
$proto137["m_columns"][] = "Conjunctiva_Kiri";
$proto137["m_columns"][] = "Conjunctiva_Kanan";
$proto137["m_columns"][] = "Cornea_Kiri";
$proto137["m_columns"][] = "Cornea_Kanan";
$proto137["m_columns"][] = "COA_Kiri";
$proto137["m_columns"][] = "COA_Kanan";
$proto137["m_columns"][] = "Pupil_Kiri";
$proto137["m_columns"][] = "Pupil_Kanan";
$proto137["m_columns"][] = "Iris_Kiri";
$proto137["m_columns"][] = "Iris_Kanan";
$proto137["m_columns"][] = "Lensa_Kiri";
$proto137["m_columns"][] = "Lensa_Kanan";
$proto137["m_columns"][] = "Tekanan_Intra_Okuler_Kiri";
$proto137["m_columns"][] = "Tekanan_Intra_Okuler_Kanan";
$proto137["m_columns"][] = "Segment_Posterior_Kiri";
$proto137["m_columns"][] = "Segment_Posterior_Kanan";
$proto137["m_columns"][] = "Lapang_Pandang_Kiri";
$proto137["m_columns"][] = "Lapang_Pandang_Kanan";
$proto137["m_columns"][] = "Ishihara_Test_Kiri";
$proto137["m_columns"][] = "Ishihara_Test_Kanan";
$proto137["m_columns"][] = "Fluorescein_Tes_Kiri";
$proto137["m_columns"][] = "Fluorescein_Test_Kanan";
$proto137["m_columns"][] = "Sensibilitas_Kornea_Kiri";
$proto137["m_columns"][] = "Sensibilitas_Kornea_Kanan";
$proto137["m_columns"][] = "Schirmer_Test_Kiri";
$proto137["m_columns"][] = "Schirmer_Test_Kanan";
$proto137["m_columns"][] = "Hirschberg_Test_Kiri";
$proto137["m_columns"][] = "Hirschberg_Test_Kanan";
$proto137["m_columns"][] = "Cover_Test_Kiri";
$proto137["m_columns"][] = "Cover_Test_Kanan";
$proto137["m_columns"][] = "Cover_Uncover_Test_Kiri";
$proto137["m_columns"][] = "Cover_Uncover_Test_Kanan";
$proto137["m_columns"][] = "Penunjang_Lain";
$proto137["m_columns"][] = "Daftar_Masalah";
$proto137["m_columns"][] = "Rencana_Permulaan";
$proto137["m_columns"][] = "Catatan_Kemajuan";
$proto137["m_columns"][] = "Diagnosa_Diagnosa_Banding";
$proto137["m_columns"][] = "Terapi";
$proto137["m_columns"][] = "Prognosis";
$proto137["m_columns"][] = "Komplikasi";
$proto137["m_columns"][] = "Id_User";
$proto137["m_columns"][] = "id_pasien";
$proto137["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto137);

$proto136["m_table"] = $obj;
$proto136["m_sql"] = "mata";
$proto136["m_alias"] = "";
$proto136["m_srcTableName"] = "mata";
$proto138=array();
$proto138["m_sql"] = "";
$proto138["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto138["m_column"]=$obj;
$proto138["m_contained"] = array();
$proto138["m_strCase"] = "";
$proto138["m_havingmode"] = false;
$proto138["m_inBrackets"] = false;
$proto138["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto138);

$proto136["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto136);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mata";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mata = createSqlQuery_mata();


	
		;

																																																																	

$tdatamata[".sqlquery"] = $queryData_mata;



include_once(getabspath("include/mata_events.php"));
$tableEvents["mata"] = new eventclass_mata;
$tdatamata[".hasEvents"] = true;

?>