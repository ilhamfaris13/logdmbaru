<?php
$tdatalaporan_mata = array();
$tdatalaporan_mata[".searchableFields"] = array();
$tdatalaporan_mata[".ShortName"] = "laporan_mata";
$tdatalaporan_mata[".OwnerID"] = "";
$tdatalaporan_mata[".OriginalTable"] = "mata";


$tdatalaporan_mata[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalaporan_mata[".originalPagesByType"] = $tdatalaporan_mata[".pagesByType"];
$tdatalaporan_mata[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalaporan_mata[".originalPages"] = $tdatalaporan_mata[".pages"];
$tdatalaporan_mata[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalaporan_mata[".originalDefaultPages"] = $tdatalaporan_mata[".defaultPages"];

//	field labels
$fieldLabelslaporan_mata = array();
$fieldToolTipslaporan_mata = array();
$pageTitleslaporan_mata = array();
$placeHolderslaporan_mata = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslaporan_mata["English"] = array();
	$fieldToolTipslaporan_mata["English"] = array();
	$placeHolderslaporan_mata["English"] = array();
	$pageTitleslaporan_mata["English"] = array();
	$fieldLabelslaporan_mata["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipslaporan_mata["English"]["Keluhan_Utama"] = "";
	$placeHolderslaporan_mata["English"]["Keluhan_Utama"] = "";
	$fieldLabelslaporan_mata["English"]["Keluhan_Tambahan"] = "Keluhan Tambahan";
	$fieldToolTipslaporan_mata["English"]["Keluhan_Tambahan"] = "";
	$placeHolderslaporan_mata["English"]["Keluhan_Tambahan"] = "";
	$fieldLabelslaporan_mata["English"]["Riwayat_Penyakit_Sekarang"] = "Riwayat Penyakit Sekarang";
	$fieldToolTipslaporan_mata["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$placeHolderslaporan_mata["English"]["Riwayat_Penyakit_Sekarang"] = "";
	$fieldLabelslaporan_mata["English"]["Riwayat_Penyakit_Dahulu"] = "Riwayat Penyakit Dahulu";
	$fieldToolTipslaporan_mata["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$placeHolderslaporan_mata["English"]["Riwayat_Penyakit_Dahulu"] = "";
	$fieldLabelslaporan_mata["English"]["Riwayat_Penyakit_Keluarga"] = "Riwayat Penyakit Keluarga";
	$fieldToolTipslaporan_mata["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$placeHolderslaporan_mata["English"]["Riwayat_Penyakit_Keluarga"] = "";
	$fieldLabelslaporan_mata["English"]["Riwayat_Alergi"] = "Riwayat Alergi";
	$fieldToolTipslaporan_mata["English"]["Riwayat_Alergi"] = "";
	$placeHolderslaporan_mata["English"]["Riwayat_Alergi"] = "";
	$fieldLabelslaporan_mata["English"]["Riwayat_Pengobatan"] = "Riwayat Pengobatan";
	$fieldToolTipslaporan_mata["English"]["Riwayat_Pengobatan"] = "";
	$placeHolderslaporan_mata["English"]["Riwayat_Pengobatan"] = "";
	$fieldLabelslaporan_mata["English"]["Riwayat_Kebiasaan"] = "Riwayat Kebiasaan";
	$fieldToolTipslaporan_mata["English"]["Riwayat_Kebiasaan"] = "";
	$placeHolderslaporan_mata["English"]["Riwayat_Kebiasaan"] = "";
	$fieldLabelslaporan_mata["English"]["Riwayat_Sosio_Ekonomi"] = "Riwayat Sosio Ekonomi";
	$fieldToolTipslaporan_mata["English"]["Riwayat_Sosio_Ekonomi"] = "";
	$placeHolderslaporan_mata["English"]["Riwayat_Sosio_Ekonomi"] = "";
	$fieldLabelslaporan_mata["English"]["Visus_OD_Kiri"] = "Visus OD Kiri";
	$fieldToolTipslaporan_mata["English"]["Visus_OD_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Visus_OD_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Visus_OS_Kanan"] = "Visus OS Kanan";
	$fieldToolTipslaporan_mata["English"]["Visus_OS_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Visus_OS_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Refraksi_OD_Kiri"] = "Refraksi OD Kiri";
	$fieldToolTipslaporan_mata["English"]["Refraksi_OD_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Refraksi_OD_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Refraksi_OS_Kanan"] = "Refraksi OS Kanan";
	$fieldToolTipslaporan_mata["English"]["Refraksi_OS_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Refraksi_OS_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Addisi_OD_Kiri"] = "Addisi OD Kiri";
	$fieldToolTipslaporan_mata["English"]["Addisi_OD_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Addisi_OD_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Addisi_OS_Kanan"] = "Addisi OS Kanan";
	$fieldToolTipslaporan_mata["English"]["Addisi_OS_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Addisi_OS_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Posisi_Bola_Mata_Kiri"] = "Posisi Bola Mata Kiri";
	$fieldToolTipslaporan_mata["English"]["Posisi_Bola_Mata_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Posisi_Bola_Mata_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Posisi_Bola_Mata_Kanan"] = "Posisi Bola Mata Kanan";
	$fieldToolTipslaporan_mata["English"]["Posisi_Bola_Mata_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Posisi_Bola_Mata_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Gerakan_Bola_Mata_Kiri"] = "Gerakan Bola Mata Kiri";
	$fieldToolTipslaporan_mata["English"]["Gerakan_Bola_Mata_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Gerakan_Bola_Mata_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Gerakan_Bola_Mata_Kanan"] = "Gerakan Bola Mata Kanan";
	$fieldToolTipslaporan_mata["English"]["Gerakan_Bola_Mata_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Gerakan_Bola_Mata_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Palpebra_Kiri"] = "Palpebra Kiri";
	$fieldToolTipslaporan_mata["English"]["Palpebra_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Palpebra_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Palpebra_Kanan"] = "Palpebra Kanan";
	$fieldToolTipslaporan_mata["English"]["Palpebra_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Palpebra_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Conjunctiva_Kiri"] = "Conjunctiva Kiri";
	$fieldToolTipslaporan_mata["English"]["Conjunctiva_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Conjunctiva_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Conjunctiva_Kanan"] = "Conjunctiva Kanan";
	$fieldToolTipslaporan_mata["English"]["Conjunctiva_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Conjunctiva_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Cornea_Kiri"] = "Cornea Kiri";
	$fieldToolTipslaporan_mata["English"]["Cornea_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Cornea_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Cornea_Kanan"] = "Cornea Kanan";
	$fieldToolTipslaporan_mata["English"]["Cornea_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Cornea_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["COA_Kiri"] = "COA Kiri";
	$fieldToolTipslaporan_mata["English"]["COA_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["COA_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["COA_Kanan"] = "COA Kanan";
	$fieldToolTipslaporan_mata["English"]["COA_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["COA_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Pupil_Kiri"] = "Pupil Kiri";
	$fieldToolTipslaporan_mata["English"]["Pupil_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Pupil_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Pupil_Kanan"] = "Pupil Kanan";
	$fieldToolTipslaporan_mata["English"]["Pupil_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Pupil_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Iris_Kiri"] = "Iris Kiri";
	$fieldToolTipslaporan_mata["English"]["Iris_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Iris_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Iris_Kanan"] = "Iris Kanan";
	$fieldToolTipslaporan_mata["English"]["Iris_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Iris_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Lensa_Kiri"] = "Lensa Kiri";
	$fieldToolTipslaporan_mata["English"]["Lensa_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Lensa_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Lensa_Kanan"] = "Lensa Kanan";
	$fieldToolTipslaporan_mata["English"]["Lensa_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Lensa_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Tekanan_Intra_Okuler_Kiri"] = "Tekanan Intra Okuler Kiri";
	$fieldToolTipslaporan_mata["English"]["Tekanan_Intra_Okuler_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Tekanan_Intra_Okuler_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Tekanan_Intra_Okuler_Kanan"] = "Tekanan Intra Okuler Kanan";
	$fieldToolTipslaporan_mata["English"]["Tekanan_Intra_Okuler_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Tekanan_Intra_Okuler_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Segment_Posterior_Kiri"] = "Segment Posterior Kiri";
	$fieldToolTipslaporan_mata["English"]["Segment_Posterior_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Segment_Posterior_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Segment_Posterior_Kanan"] = "Segment Posterior Kanan";
	$fieldToolTipslaporan_mata["English"]["Segment_Posterior_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Segment_Posterior_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Lapang_Pandang_Kiri"] = "Lapang Pandang Kiri";
	$fieldToolTipslaporan_mata["English"]["Lapang_Pandang_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Lapang_Pandang_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Lapang_Pandang_Kanan"] = "Lapang Pandang Kanan";
	$fieldToolTipslaporan_mata["English"]["Lapang_Pandang_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Lapang_Pandang_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Ishihara_Test_Kiri"] = "Ishihara Test Kiri";
	$fieldToolTipslaporan_mata["English"]["Ishihara_Test_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Ishihara_Test_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Ishihara_Test_Kanan"] = "Ishihara Test Kanan";
	$fieldToolTipslaporan_mata["English"]["Ishihara_Test_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Ishihara_Test_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Fluorescein_Tes_Kiri"] = "Fluorescein Tes Kiri";
	$fieldToolTipslaporan_mata["English"]["Fluorescein_Tes_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Fluorescein_Tes_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Fluorescein_Test_Kanan"] = "Fluorescein Test Kanan";
	$fieldToolTipslaporan_mata["English"]["Fluorescein_Test_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Fluorescein_Test_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Sensibilitas_Kornea_Kiri"] = "Sensibilitas Kornea Kiri";
	$fieldToolTipslaporan_mata["English"]["Sensibilitas_Kornea_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Sensibilitas_Kornea_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Sensibilitas_Kornea_Kanan"] = "Sensibilitas Kornea Kanan";
	$fieldToolTipslaporan_mata["English"]["Sensibilitas_Kornea_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Sensibilitas_Kornea_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Schirmer_Test_Kiri"] = "Schirmer Test Kiri";
	$fieldToolTipslaporan_mata["English"]["Schirmer_Test_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Schirmer_Test_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Schirmer_Test_Kanan"] = "Schirmer Test Kanan";
	$fieldToolTipslaporan_mata["English"]["Schirmer_Test_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Schirmer_Test_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Hirschberg_Test_Kiri"] = "Hirschberg Test Kiri";
	$fieldToolTipslaporan_mata["English"]["Hirschberg_Test_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Hirschberg_Test_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Hirschberg_Test_Kanan"] = "Hirschberg Test Kanan";
	$fieldToolTipslaporan_mata["English"]["Hirschberg_Test_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Hirschberg_Test_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Cover_Test_Kiri"] = "Cover Test Kiri";
	$fieldToolTipslaporan_mata["English"]["Cover_Test_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Cover_Test_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Cover_Test_Kanan"] = "Cover Test Kanan";
	$fieldToolTipslaporan_mata["English"]["Cover_Test_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Cover_Test_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Cover_Uncover_Test_Kiri"] = "Cover Uncover Test Kiri";
	$fieldToolTipslaporan_mata["English"]["Cover_Uncover_Test_Kiri"] = "";
	$placeHolderslaporan_mata["English"]["Cover_Uncover_Test_Kiri"] = "";
	$fieldLabelslaporan_mata["English"]["Cover_Uncover_Test_Kanan"] = "Cover Uncover Test Kanan";
	$fieldToolTipslaporan_mata["English"]["Cover_Uncover_Test_Kanan"] = "";
	$placeHolderslaporan_mata["English"]["Cover_Uncover_Test_Kanan"] = "";
	$fieldLabelslaporan_mata["English"]["Penunjang_Lain"] = "Penunjang Lain";
	$fieldToolTipslaporan_mata["English"]["Penunjang_Lain"] = "";
	$placeHolderslaporan_mata["English"]["Penunjang_Lain"] = "";
	$fieldLabelslaporan_mata["English"]["Daftar_Masalah"] = "Daftar Masalah";
	$fieldToolTipslaporan_mata["English"]["Daftar_Masalah"] = "";
	$placeHolderslaporan_mata["English"]["Daftar_Masalah"] = "";
	$fieldLabelslaporan_mata["English"]["Rencana_Permulaan"] = "Rencana Permulaan";
	$fieldToolTipslaporan_mata["English"]["Rencana_Permulaan"] = "";
	$placeHolderslaporan_mata["English"]["Rencana_Permulaan"] = "";
	$fieldLabelslaporan_mata["English"]["Catatan_Kemajuan"] = "Catatan Kemajuan";
	$fieldToolTipslaporan_mata["English"]["Catatan_Kemajuan"] = "";
	$placeHolderslaporan_mata["English"]["Catatan_Kemajuan"] = "";
	$fieldLabelslaporan_mata["English"]["Diagnosa_Diagnosa_Banding"] = "Diagnosa Banding";
	$fieldToolTipslaporan_mata["English"]["Diagnosa_Diagnosa_Banding"] = "";
	$placeHolderslaporan_mata["English"]["Diagnosa_Diagnosa_Banding"] = "";
	$fieldLabelslaporan_mata["English"]["Terapi"] = "Terapi";
	$fieldToolTipslaporan_mata["English"]["Terapi"] = "";
	$placeHolderslaporan_mata["English"]["Terapi"] = "";
	$fieldLabelslaporan_mata["English"]["Prognosis"] = "Prognosis";
	$fieldToolTipslaporan_mata["English"]["Prognosis"] = "";
	$placeHolderslaporan_mata["English"]["Prognosis"] = "";
	$fieldLabelslaporan_mata["English"]["Komplikasi"] = "Komplikasi";
	$fieldToolTipslaporan_mata["English"]["Komplikasi"] = "";
	$placeHolderslaporan_mata["English"]["Komplikasi"] = "";
	$fieldLabelslaporan_mata["English"]["Id_User"] = "Nama DM";
	$fieldToolTipslaporan_mata["English"]["Id_User"] = "";
	$placeHolderslaporan_mata["English"]["Id_User"] = "";
	$fieldLabelslaporan_mata["English"]["Id_Pasien"] = "";
	$fieldToolTipslaporan_mata["English"]["Id_Pasien"] = "";
	$placeHolderslaporan_mata["English"]["Id_Pasien"] = "";
	$fieldLabelslaporan_mata["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipslaporan_mata["English"]["Nomor_Rm"] = "";
	$placeHolderslaporan_mata["English"]["Nomor_Rm"] = "";
	$fieldLabelslaporan_mata["English"]["Nama"] = "Nama";
	$fieldToolTipslaporan_mata["English"]["Nama"] = "";
	$placeHolderslaporan_mata["English"]["Nama"] = "";
	$fieldLabelslaporan_mata["English"]["Alamat"] = "Alamat";
	$fieldToolTipslaporan_mata["English"]["Alamat"] = "";
	$placeHolderslaporan_mata["English"]["Alamat"] = "";
	$fieldLabelslaporan_mata["English"]["Umur"] = "Umur";
	$fieldToolTipslaporan_mata["English"]["Umur"] = "";
	$placeHolderslaporan_mata["English"]["Umur"] = "";
	$fieldLabelslaporan_mata["English"]["Status_Perkawinan"] = "Status Perkawinan";
	$fieldToolTipslaporan_mata["English"]["Status_Perkawinan"] = "";
	$placeHolderslaporan_mata["English"]["Status_Perkawinan"] = "";
	$fieldLabelslaporan_mata["English"]["Jenis_Kelamin"] = "Jenis Kelamin";
	$fieldToolTipslaporan_mata["English"]["Jenis_Kelamin"] = "";
	$placeHolderslaporan_mata["English"]["Jenis_Kelamin"] = "";
	$fieldLabelslaporan_mata["English"]["Suku_Ras"] = "Suku Ras";
	$fieldToolTipslaporan_mata["English"]["Suku_Ras"] = "";
	$placeHolderslaporan_mata["English"]["Suku_Ras"] = "";
	$fieldLabelslaporan_mata["English"]["Agama"] = "Agama";
	$fieldToolTipslaporan_mata["English"]["Agama"] = "";
	$placeHolderslaporan_mata["English"]["Agama"] = "";
	$fieldLabelslaporan_mata["English"]["Pekerjaan"] = "Pekerjaan";
	$fieldToolTipslaporan_mata["English"]["Pekerjaan"] = "";
	$placeHolderslaporan_mata["English"]["Pekerjaan"] = "";
	$fieldLabelslaporan_mata["English"]["Tanggal_MRS"] = "Tanggal MRS";
	$fieldToolTipslaporan_mata["English"]["Tanggal_MRS"] = "";
	$placeHolderslaporan_mata["English"]["Tanggal_MRS"] = "";
	$fieldLabelslaporan_mata["English"]["name"] = "Name";
	$fieldToolTipslaporan_mata["English"]["name"] = "";
	$placeHolderslaporan_mata["English"]["name"] = "";
	$fieldLabelslaporan_mata["English"]["Id_Mata"] = "Id Mata";
	$fieldToolTipslaporan_mata["English"]["Id_Mata"] = "";
	$placeHolderslaporan_mata["English"]["Id_Mata"] = "";
	$fieldLabelslaporan_mata["English"]["id_pasien1"] = "Id Pasien1";
	$fieldToolTipslaporan_mata["English"]["id_pasien1"] = "";
	$placeHolderslaporan_mata["English"]["id_pasien1"] = "";
	$fieldLabelslaporan_mata["English"]["id"] = "Id";
	$fieldToolTipslaporan_mata["English"]["id"] = "";
	$placeHolderslaporan_mata["English"]["id"] = "";
	$fieldLabelslaporan_mata["English"]["username"] = "Username";
	$fieldToolTipslaporan_mata["English"]["username"] = "";
	$placeHolderslaporan_mata["English"]["username"] = "";
	$fieldLabelslaporan_mata["English"]["email"] = "Email";
	$fieldToolTipslaporan_mata["English"]["email"] = "";
	$placeHolderslaporan_mata["English"]["email"] = "";
	$fieldLabelslaporan_mata["English"]["email_verified_at"] = "Email Verified At";
	$fieldToolTipslaporan_mata["English"]["email_verified_at"] = "";
	$placeHolderslaporan_mata["English"]["email_verified_at"] = "";
	$fieldLabelslaporan_mata["English"]["password"] = "Password";
	$fieldToolTipslaporan_mata["English"]["password"] = "";
	$placeHolderslaporan_mata["English"]["password"] = "";
	$fieldLabelslaporan_mata["English"]["two_factor_secret"] = "Two Factor Secret";
	$fieldToolTipslaporan_mata["English"]["two_factor_secret"] = "";
	$placeHolderslaporan_mata["English"]["two_factor_secret"] = "";
	$fieldLabelslaporan_mata["English"]["two_factor_recovery_codes"] = "Two Factor Recovery Codes";
	$fieldToolTipslaporan_mata["English"]["two_factor_recovery_codes"] = "";
	$placeHolderslaporan_mata["English"]["two_factor_recovery_codes"] = "";
	$fieldLabelslaporan_mata["English"]["level"] = "Level";
	$fieldToolTipslaporan_mata["English"]["level"] = "";
	$placeHolderslaporan_mata["English"]["level"] = "";
	$fieldLabelslaporan_mata["English"]["remember_token"] = "Remember Token";
	$fieldToolTipslaporan_mata["English"]["remember_token"] = "";
	$placeHolderslaporan_mata["English"]["remember_token"] = "";
	$fieldLabelslaporan_mata["English"]["profile_photo_path"] = "Profile Photo Path";
	$fieldToolTipslaporan_mata["English"]["profile_photo_path"] = "";
	$placeHolderslaporan_mata["English"]["profile_photo_path"] = "";
	$fieldLabelslaporan_mata["English"]["created_at"] = "Created At";
	$fieldToolTipslaporan_mata["English"]["created_at"] = "";
	$placeHolderslaporan_mata["English"]["created_at"] = "";
	$fieldLabelslaporan_mata["English"]["updated_at"] = "Updated At";
	$fieldToolTipslaporan_mata["English"]["updated_at"] = "";
	$placeHolderslaporan_mata["English"]["updated_at"] = "";
	if (count($fieldToolTipslaporan_mata["English"]))
		$tdatalaporan_mata[".isUseToolTips"] = true;
}


	$tdatalaporan_mata[".NCSearch"] = true;



$tdatalaporan_mata[".shortTableName"] = "laporan_mata";
$tdatalaporan_mata[".nSecOptions"] = 0;

$tdatalaporan_mata[".mainTableOwnerID"] = "";
$tdatalaporan_mata[".entityType"] = 1;
$tdatalaporan_mata[".connId"] = "newrm_at_localhost";


$tdatalaporan_mata[".strOriginalTableName"] = "mata";

	



$tdatalaporan_mata[".showAddInPopup"] = false;

$tdatalaporan_mata[".showEditInPopup"] = false;

$tdatalaporan_mata[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalaporan_mata[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalaporan_mata[".listAjax"] = false;
//	temporary
$tdatalaporan_mata[".listAjax"] = false;

	$tdatalaporan_mata[".audit"] = false;

	$tdatalaporan_mata[".locking"] = false;


$pages = $tdatalaporan_mata[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalaporan_mata[".edit"] = true;
	$tdatalaporan_mata[".afterEditAction"] = 1;
	$tdatalaporan_mata[".closePopupAfterEdit"] = 1;
	$tdatalaporan_mata[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalaporan_mata[".add"] = true;
$tdatalaporan_mata[".afterAddAction"] = 1;
$tdatalaporan_mata[".closePopupAfterAdd"] = 1;
$tdatalaporan_mata[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalaporan_mata[".list"] = true;
}



$tdatalaporan_mata[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalaporan_mata[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalaporan_mata[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalaporan_mata[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalaporan_mata[".printFriendly"] = true;
}



$tdatalaporan_mata[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalaporan_mata[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalaporan_mata[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalaporan_mata[".isUseAjaxSuggest"] = true;

$tdatalaporan_mata[".rowHighlite"] = true;





$tdatalaporan_mata[".ajaxCodeSnippetAdded"] = false;

$tdatalaporan_mata[".buttonsAdded"] = false;

$tdatalaporan_mata[".addPageEvents"] = true;

// use timepicker for search panel
$tdatalaporan_mata[".isUseTimeForSearch"] = false;


$tdatalaporan_mata[".badgeColor"] = "DC143C";


$tdatalaporan_mata[".allSearchFields"] = array();
$tdatalaporan_mata[".filterFields"] = array();
$tdatalaporan_mata[".requiredSearchFields"] = array();

$tdatalaporan_mata[".googleLikeFields"] = array();
$tdatalaporan_mata[".googleLikeFields"][] = "Id_Mata";
$tdatalaporan_mata[".googleLikeFields"][] = "Keluhan_Utama";
$tdatalaporan_mata[".googleLikeFields"][] = "Keluhan_Tambahan";
$tdatalaporan_mata[".googleLikeFields"][] = "Riwayat_Penyakit_Sekarang";
$tdatalaporan_mata[".googleLikeFields"][] = "Riwayat_Penyakit_Dahulu";
$tdatalaporan_mata[".googleLikeFields"][] = "Riwayat_Penyakit_Keluarga";
$tdatalaporan_mata[".googleLikeFields"][] = "Riwayat_Alergi";
$tdatalaporan_mata[".googleLikeFields"][] = "Riwayat_Pengobatan";
$tdatalaporan_mata[".googleLikeFields"][] = "Riwayat_Kebiasaan";
$tdatalaporan_mata[".googleLikeFields"][] = "Riwayat_Sosio_Ekonomi";
$tdatalaporan_mata[".googleLikeFields"][] = "Visus_OD_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Visus_OS_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Refraksi_OD_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Refraksi_OS_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Addisi_OD_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Addisi_OS_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Posisi_Bola_Mata_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Posisi_Bola_Mata_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Gerakan_Bola_Mata_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Gerakan_Bola_Mata_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Palpebra_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Palpebra_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Conjunctiva_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Conjunctiva_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Cornea_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Cornea_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "COA_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "COA_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Pupil_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Pupil_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Iris_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Iris_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Lensa_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Lensa_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Tekanan_Intra_Okuler_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Tekanan_Intra_Okuler_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Segment_Posterior_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Segment_Posterior_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Lapang_Pandang_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Lapang_Pandang_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Ishihara_Test_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Ishihara_Test_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Fluorescein_Tes_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Fluorescein_Test_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Sensibilitas_Kornea_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Sensibilitas_Kornea_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Schirmer_Test_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Schirmer_Test_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Hirschberg_Test_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Hirschberg_Test_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Cover_Test_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Cover_Test_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Cover_Uncover_Test_Kiri";
$tdatalaporan_mata[".googleLikeFields"][] = "Cover_Uncover_Test_Kanan";
$tdatalaporan_mata[".googleLikeFields"][] = "Penunjang_Lain";
$tdatalaporan_mata[".googleLikeFields"][] = "Daftar_Masalah";
$tdatalaporan_mata[".googleLikeFields"][] = "Rencana_Permulaan";
$tdatalaporan_mata[".googleLikeFields"][] = "Catatan_Kemajuan";
$tdatalaporan_mata[".googleLikeFields"][] = "Diagnosa_Diagnosa_Banding";
$tdatalaporan_mata[".googleLikeFields"][] = "Terapi";
$tdatalaporan_mata[".googleLikeFields"][] = "Prognosis";
$tdatalaporan_mata[".googleLikeFields"][] = "Komplikasi";
$tdatalaporan_mata[".googleLikeFields"][] = "Id_User";
$tdatalaporan_mata[".googleLikeFields"][] = "Nomor_Rm";
$tdatalaporan_mata[".googleLikeFields"][] = "Id_Pasien";
$tdatalaporan_mata[".googleLikeFields"][] = "Nama";
$tdatalaporan_mata[".googleLikeFields"][] = "Alamat";
$tdatalaporan_mata[".googleLikeFields"][] = "Umur";
$tdatalaporan_mata[".googleLikeFields"][] = "Status_Perkawinan";
$tdatalaporan_mata[".googleLikeFields"][] = "Jenis Kelamin";
$tdatalaporan_mata[".googleLikeFields"][] = "Suku_Ras";
$tdatalaporan_mata[".googleLikeFields"][] = "Agama";
$tdatalaporan_mata[".googleLikeFields"][] = "Pekerjaan";
$tdatalaporan_mata[".googleLikeFields"][] = "Tanggal_MRS";
$tdatalaporan_mata[".googleLikeFields"][] = "id_pasien1";
$tdatalaporan_mata[".googleLikeFields"][] = "id";
$tdatalaporan_mata[".googleLikeFields"][] = "name";
$tdatalaporan_mata[".googleLikeFields"][] = "username";
$tdatalaporan_mata[".googleLikeFields"][] = "email";
$tdatalaporan_mata[".googleLikeFields"][] = "email_verified_at";
$tdatalaporan_mata[".googleLikeFields"][] = "password";
$tdatalaporan_mata[".googleLikeFields"][] = "two_factor_secret";
$tdatalaporan_mata[".googleLikeFields"][] = "two_factor_recovery_codes";
$tdatalaporan_mata[".googleLikeFields"][] = "level";
$tdatalaporan_mata[".googleLikeFields"][] = "remember_token";
$tdatalaporan_mata[".googleLikeFields"][] = "profile_photo_path";
$tdatalaporan_mata[".googleLikeFields"][] = "created_at";
$tdatalaporan_mata[".googleLikeFields"][] = "updated_at";



$tdatalaporan_mata[".tableType"] = "list";

$tdatalaporan_mata[".printerPageOrientation"] = 0;
$tdatalaporan_mata[".nPrinterPageScale"] = 100;

$tdatalaporan_mata[".nPrinterSplitRecords"] = 40;

$tdatalaporan_mata[".geocodingEnabled"] = false;










$tdatalaporan_mata[".pageSize"] = 20;

$tdatalaporan_mata[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalaporan_mata[".strOrderBy"] = $tstrOrderBy;

$tdatalaporan_mata[".orderindexes"] = array();


$tdatalaporan_mata[".sqlHead"] = "SELECT m.Id_Mata,  m.Keluhan_Utama,  m.Keluhan_Tambahan,  m.Riwayat_Penyakit_Sekarang,  m.Riwayat_Penyakit_Dahulu,  m.Riwayat_Penyakit_Keluarga,  m.Riwayat_Alergi,  m.Riwayat_Pengobatan,  m.Riwayat_Kebiasaan,  m.Riwayat_Sosio_Ekonomi,  m.Visus_OD_Kiri,  m.Visus_OS_Kanan,  m.Refraksi_OD_Kiri,  m.Refraksi_OS_Kanan,  m.Addisi_OD_Kiri,  m.Addisi_OS_Kanan,  m.Posisi_Bola_Mata_Kiri,  m.Posisi_Bola_Mata_Kanan,  m.Gerakan_Bola_Mata_Kiri,  m.Gerakan_Bola_Mata_Kanan,  m.Palpebra_Kiri,  m.Palpebra_Kanan,  m.Conjunctiva_Kiri,  m.Conjunctiva_Kanan,  m.Cornea_Kiri,  m.Cornea_Kanan,  m.COA_Kiri,  m.COA_Kanan,  m.Pupil_Kiri,  m.Pupil_Kanan,  m.Iris_Kiri,  m.Iris_Kanan,  m.Lensa_Kiri,  m.Lensa_Kanan,  m.Tekanan_Intra_Okuler_Kiri,  m.Tekanan_Intra_Okuler_Kanan,  m.Segment_Posterior_Kiri,  m.Segment_Posterior_Kanan,  m.Lapang_Pandang_Kiri,  m.Lapang_Pandang_Kanan,  m.Ishihara_Test_Kiri,  m.Ishihara_Test_Kanan,  m.Fluorescein_Tes_Kiri,  m.Fluorescein_Test_Kanan,  m.Sensibilitas_Kornea_Kiri,  m.Sensibilitas_Kornea_Kanan,  m.Schirmer_Test_Kiri,  m.Schirmer_Test_Kanan,  m.Hirschberg_Test_Kiri,  m.Hirschberg_Test_Kanan,  m.Cover_Test_Kiri,  m.Cover_Test_Kanan,  m.Cover_Uncover_Test_Kiri,  m.Cover_Uncover_Test_Kanan,  m.Penunjang_Lain,  m.Daftar_Masalah,  m.Rencana_Permulaan,  m.Catatan_Kemajuan,  m.Diagnosa_Diagnosa_Banding,  m.Terapi,  m.Prognosis,  m.Komplikasi,  m.Id_User,  m.Nomor_Rm,  p.Id_Pasien,  p.Nama,  p.Alamat,  p.Umur,  p.Status_Perkawinan,  p.`Jenis Kelamin`,  p.Suku_Ras,  p.Agama,  p.Pekerjaan,  p.Tanggal_MRS,  m.id_pasien AS id_pasien1,  u.id,  u.name,  u.username,  u.email,  u.email_verified_at,  u.password,  u.two_factor_secret,  u.two_factor_recovery_codes,  u.`level`,  u.remember_token,  u.profile_photo_path,  u.created_at,  u.updated_at";
$tdatalaporan_mata[".sqlFrom"] = "FROM mata AS m  INNER JOIN identitas_pasien AS p ON m.id_pasien = p.Id_Pasien  INNER JOIN users AS u ON m.Id_User = u.id";
$tdatalaporan_mata[".sqlWhereExpr"] = "";
$tdatalaporan_mata[".sqlTail"] = "";

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
$tdatalaporan_mata[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalaporan_mata[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalaporan_mata[".arrGroupsPerPage"] = $arrGPP;

$tdatalaporan_mata[".highlightSearchResults"] = true;

$tableKeyslaporan_mata = array();
$tableKeyslaporan_mata[] = "Id_Mata";
$tdatalaporan_mata[".Keys"] = $tableKeyslaporan_mata;


$tdatalaporan_mata[".hideMobileList"] = array();




//	Id_Mata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id_Mata";
	$fdata["GoodName"] = "Id_Mata";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Id_Mata");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Mata";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Id_Mata";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Id_Mata"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Id_Mata";
//	Keluhan_Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan_Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Keluhan_Utama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Keluhan_Utama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Keluhan_Utama";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Keluhan_Utama"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Keluhan_Utama";
//	Keluhan_Tambahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Keluhan_Tambahan";
	$fdata["GoodName"] = "Keluhan_Tambahan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Keluhan_Tambahan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Keluhan_Tambahan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Keluhan_Tambahan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Keluhan_Tambahan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Keluhan_Tambahan";
//	Riwayat_Penyakit_Sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["GoodName"] = "Riwayat_Penyakit_Sekarang";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Riwayat_Penyakit_Sekarang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Penyakit_Sekarang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Riwayat_Penyakit_Sekarang";

	
	
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


	$tdatalaporan_mata["Riwayat_Penyakit_Sekarang"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Riwayat_Penyakit_Sekarang";
//	Riwayat_Penyakit_Dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["GoodName"] = "Riwayat_Penyakit_Dahulu";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Riwayat_Penyakit_Dahulu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Penyakit_Dahulu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Riwayat_Penyakit_Dahulu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Riwayat_Penyakit_Dahulu"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Riwayat_Penyakit_Dahulu";
//	Riwayat_Penyakit_Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["GoodName"] = "Riwayat_Penyakit_Keluarga";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Riwayat_Penyakit_Keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Penyakit_Keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Riwayat_Penyakit_Keluarga";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Riwayat_Penyakit_Keluarga"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Riwayat_Penyakit_Keluarga";
//	Riwayat_Alergi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat_Alergi";
	$fdata["GoodName"] = "Riwayat_Alergi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Riwayat_Alergi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Alergi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Riwayat_Alergi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Riwayat_Alergi"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Riwayat_Alergi";
//	Riwayat_Pengobatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat_Pengobatan";
	$fdata["GoodName"] = "Riwayat_Pengobatan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Riwayat_Pengobatan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Pengobatan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Riwayat_Pengobatan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Riwayat_Pengobatan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Riwayat_Pengobatan";
//	Riwayat_Kebiasaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat_Kebiasaan";
	$fdata["GoodName"] = "Riwayat_Kebiasaan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Riwayat_Kebiasaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Kebiasaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Riwayat_Kebiasaan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Riwayat_Kebiasaan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Riwayat_Kebiasaan";
//	Riwayat_Sosio_Ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat_Sosio_Ekonomi";
	$fdata["GoodName"] = "Riwayat_Sosio_Ekonomi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Riwayat_Sosio_Ekonomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Sosio_Ekonomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Riwayat_Sosio_Ekonomi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Riwayat_Sosio_Ekonomi"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Riwayat_Sosio_Ekonomi";
//	Visus_OD_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Visus_OD_Kiri";
	$fdata["GoodName"] = "Visus_OD_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Visus_OD_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Visus_OD_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Visus_OD_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Visus_OD_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Visus_OD_Kiri";
//	Visus_OS_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Visus_OS_Kanan";
	$fdata["GoodName"] = "Visus_OS_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Visus_OS_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Visus_OS_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Visus_OS_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Visus_OS_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Visus_OS_Kanan";
//	Refraksi_OD_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Refraksi_OD_Kiri";
	$fdata["GoodName"] = "Refraksi_OD_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Refraksi_OD_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Refraksi_OD_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Refraksi_OD_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Refraksi_OD_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Refraksi_OD_Kiri";
//	Refraksi_OS_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Refraksi_OS_Kanan";
	$fdata["GoodName"] = "Refraksi_OS_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Refraksi_OS_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Refraksi_OS_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Refraksi_OS_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Refraksi_OS_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Refraksi_OS_Kanan";
//	Addisi_OD_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Addisi_OD_Kiri";
	$fdata["GoodName"] = "Addisi_OD_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Addisi_OD_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Addisi_OD_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Addisi_OD_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Addisi_OD_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Addisi_OD_Kiri";
//	Addisi_OS_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Addisi_OS_Kanan";
	$fdata["GoodName"] = "Addisi_OS_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Addisi_OS_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Addisi_OS_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Addisi_OS_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Addisi_OS_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Addisi_OS_Kanan";
//	Posisi_Bola_Mata_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Posisi_Bola_Mata_Kiri";
	$fdata["GoodName"] = "Posisi_Bola_Mata_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Posisi_Bola_Mata_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Posisi_Bola_Mata_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Posisi_Bola_Mata_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Posisi_Bola_Mata_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Posisi_Bola_Mata_Kiri";
//	Posisi_Bola_Mata_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Posisi_Bola_Mata_Kanan";
	$fdata["GoodName"] = "Posisi_Bola_Mata_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Posisi_Bola_Mata_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Posisi_Bola_Mata_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Posisi_Bola_Mata_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Posisi_Bola_Mata_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Posisi_Bola_Mata_Kanan";
//	Gerakan_Bola_Mata_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Gerakan_Bola_Mata_Kiri";
	$fdata["GoodName"] = "Gerakan_Bola_Mata_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Gerakan_Bola_Mata_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gerakan_Bola_Mata_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Gerakan_Bola_Mata_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Gerakan_Bola_Mata_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Gerakan_Bola_Mata_Kiri";
//	Gerakan_Bola_Mata_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Gerakan_Bola_Mata_Kanan";
	$fdata["GoodName"] = "Gerakan_Bola_Mata_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Gerakan_Bola_Mata_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gerakan_Bola_Mata_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Gerakan_Bola_Mata_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Gerakan_Bola_Mata_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Gerakan_Bola_Mata_Kanan";
//	Palpebra_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Palpebra_Kiri";
	$fdata["GoodName"] = "Palpebra_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Palpebra_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Palpebra_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Palpebra_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Palpebra_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Palpebra_Kiri";
//	Palpebra_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Palpebra_Kanan";
	$fdata["GoodName"] = "Palpebra_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Palpebra_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Palpebra_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Palpebra_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Palpebra_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Palpebra_Kanan";
//	Conjunctiva_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Conjunctiva_Kiri";
	$fdata["GoodName"] = "Conjunctiva_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Conjunctiva_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Conjunctiva_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Conjunctiva_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Conjunctiva_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Conjunctiva_Kiri";
//	Conjunctiva_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Conjunctiva_Kanan";
	$fdata["GoodName"] = "Conjunctiva_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Conjunctiva_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Conjunctiva_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Conjunctiva_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Conjunctiva_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Conjunctiva_Kanan";
//	Cornea_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Cornea_Kiri";
	$fdata["GoodName"] = "Cornea_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Cornea_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cornea_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Cornea_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Cornea_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Cornea_Kiri";
//	Cornea_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Cornea_Kanan";
	$fdata["GoodName"] = "Cornea_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Cornea_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cornea_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Cornea_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Cornea_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Cornea_Kanan";
//	COA_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "COA_Kiri";
	$fdata["GoodName"] = "COA_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","COA_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "COA_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.COA_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["COA_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "COA_Kiri";
//	COA_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "COA_Kanan";
	$fdata["GoodName"] = "COA_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","COA_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "COA_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.COA_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["COA_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "COA_Kanan";
//	Pupil_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Pupil_Kiri";
	$fdata["GoodName"] = "Pupil_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Pupil_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pupil_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Pupil_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Pupil_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Pupil_Kiri";
//	Pupil_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Pupil_Kanan";
	$fdata["GoodName"] = "Pupil_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Pupil_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pupil_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Pupil_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Pupil_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Pupil_Kanan";
//	Iris_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Iris_Kiri";
	$fdata["GoodName"] = "Iris_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Iris_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Iris_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Iris_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Iris_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Iris_Kiri";
//	Iris_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Iris_Kanan";
	$fdata["GoodName"] = "Iris_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Iris_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Iris_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Iris_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Iris_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Iris_Kanan";
//	Lensa_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Lensa_Kiri";
	$fdata["GoodName"] = "Lensa_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Lensa_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lensa_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Lensa_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Lensa_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Lensa_Kiri";
//	Lensa_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Lensa_Kanan";
	$fdata["GoodName"] = "Lensa_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Lensa_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lensa_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Lensa_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Lensa_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Lensa_Kanan";
//	Tekanan_Intra_Okuler_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Tekanan_Intra_Okuler_Kiri";
	$fdata["GoodName"] = "Tekanan_Intra_Okuler_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Tekanan_Intra_Okuler_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tekanan_Intra_Okuler_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Tekanan_Intra_Okuler_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Tekanan_Intra_Okuler_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Tekanan_Intra_Okuler_Kiri";
//	Tekanan_Intra_Okuler_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Tekanan_Intra_Okuler_Kanan";
	$fdata["GoodName"] = "Tekanan_Intra_Okuler_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Tekanan_Intra_Okuler_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tekanan_Intra_Okuler_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Tekanan_Intra_Okuler_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Tekanan_Intra_Okuler_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Tekanan_Intra_Okuler_Kanan";
//	Segment_Posterior_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Segment_Posterior_Kiri";
	$fdata["GoodName"] = "Segment_Posterior_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Segment_Posterior_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Segment_Posterior_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Segment_Posterior_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Segment_Posterior_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Segment_Posterior_Kiri";
//	Segment_Posterior_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Segment_Posterior_Kanan";
	$fdata["GoodName"] = "Segment_Posterior_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Segment_Posterior_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Segment_Posterior_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Segment_Posterior_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Segment_Posterior_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Segment_Posterior_Kanan";
//	Lapang_Pandang_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Lapang_Pandang_Kiri";
	$fdata["GoodName"] = "Lapang_Pandang_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Lapang_Pandang_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lapang_Pandang_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Lapang_Pandang_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Lapang_Pandang_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Lapang_Pandang_Kiri";
//	Lapang_Pandang_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Lapang_Pandang_Kanan";
	$fdata["GoodName"] = "Lapang_Pandang_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Lapang_Pandang_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lapang_Pandang_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Lapang_Pandang_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Lapang_Pandang_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Lapang_Pandang_Kanan";
//	Ishihara_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Ishihara_Test_Kiri";
	$fdata["GoodName"] = "Ishihara_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Ishihara_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ishihara_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Ishihara_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Ishihara_Test_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Ishihara_Test_Kiri";
//	Ishihara_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Ishihara_Test_Kanan";
	$fdata["GoodName"] = "Ishihara_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Ishihara_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ishihara_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Ishihara_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Ishihara_Test_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Ishihara_Test_Kanan";
//	Fluorescein_Tes_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Fluorescein_Tes_Kiri";
	$fdata["GoodName"] = "Fluorescein_Tes_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Fluorescein_Tes_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Fluorescein_Tes_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Fluorescein_Tes_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Fluorescein_Tes_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Fluorescein_Tes_Kiri";
//	Fluorescein_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Fluorescein_Test_Kanan";
	$fdata["GoodName"] = "Fluorescein_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Fluorescein_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Fluorescein_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Fluorescein_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Fluorescein_Test_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Fluorescein_Test_Kanan";
//	Sensibilitas_Kornea_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Sensibilitas_Kornea_Kiri";
	$fdata["GoodName"] = "Sensibilitas_Kornea_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Sensibilitas_Kornea_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sensibilitas_Kornea_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Sensibilitas_Kornea_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Sensibilitas_Kornea_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Sensibilitas_Kornea_Kiri";
//	Sensibilitas_Kornea_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Sensibilitas_Kornea_Kanan";
	$fdata["GoodName"] = "Sensibilitas_Kornea_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Sensibilitas_Kornea_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sensibilitas_Kornea_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Sensibilitas_Kornea_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Sensibilitas_Kornea_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Sensibilitas_Kornea_Kanan";
//	Schirmer_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Schirmer_Test_Kiri";
	$fdata["GoodName"] = "Schirmer_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Schirmer_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Schirmer_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Schirmer_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Schirmer_Test_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Schirmer_Test_Kiri";
//	Schirmer_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Schirmer_Test_Kanan";
	$fdata["GoodName"] = "Schirmer_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Schirmer_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Schirmer_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Schirmer_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Schirmer_Test_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Schirmer_Test_Kanan";
//	Hirschberg_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Hirschberg_Test_Kiri";
	$fdata["GoodName"] = "Hirschberg_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Hirschberg_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hirschberg_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Hirschberg_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Hirschberg_Test_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Hirschberg_Test_Kiri";
//	Hirschberg_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Hirschberg_Test_Kanan";
	$fdata["GoodName"] = "Hirschberg_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Hirschberg_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hirschberg_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Hirschberg_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Hirschberg_Test_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Hirschberg_Test_Kanan";
//	Cover_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Cover_Test_Kiri";
	$fdata["GoodName"] = "Cover_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Cover_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Cover_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Cover_Test_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Cover_Test_Kiri";
//	Cover_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Cover_Test_Kanan";
	$fdata["GoodName"] = "Cover_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Cover_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Cover_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Cover_Test_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Cover_Test_Kanan";
//	Cover_Uncover_Test_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Cover_Uncover_Test_Kiri";
	$fdata["GoodName"] = "Cover_Uncover_Test_Kiri";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Cover_Uncover_Test_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Uncover_Test_Kiri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Cover_Uncover_Test_Kiri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Cover_Uncover_Test_Kiri"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Cover_Uncover_Test_Kiri";
//	Cover_Uncover_Test_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Cover_Uncover_Test_Kanan";
	$fdata["GoodName"] = "Cover_Uncover_Test_Kanan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Cover_Uncover_Test_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cover_Uncover_Test_Kanan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Cover_Uncover_Test_Kanan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Cover_Uncover_Test_Kanan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Cover_Uncover_Test_Kanan";
//	Penunjang_Lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Penunjang_Lain";
	$fdata["GoodName"] = "Penunjang_Lain";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Penunjang_Lain");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penunjang_Lain";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Penunjang_Lain";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Penunjang_Lain"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Penunjang_Lain";
//	Daftar_Masalah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Daftar_Masalah";
	$fdata["GoodName"] = "Daftar_Masalah";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Daftar_Masalah");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daftar_Masalah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Daftar_Masalah";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Daftar_Masalah"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Daftar_Masalah";
//	Rencana_Permulaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Rencana_Permulaan";
	$fdata["GoodName"] = "Rencana_Permulaan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Rencana_Permulaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rencana_Permulaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Rencana_Permulaan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Rencana_Permulaan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Rencana_Permulaan";
//	Catatan_Kemajuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Catatan_Kemajuan";
	$fdata["GoodName"] = "Catatan_Kemajuan";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Catatan_Kemajuan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Catatan_Kemajuan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Catatan_Kemajuan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Catatan_Kemajuan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Catatan_Kemajuan";
//	Diagnosa_Diagnosa_Banding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Diagnosa_Diagnosa_Banding";
	$fdata["GoodName"] = "Diagnosa_Diagnosa_Banding";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Diagnosa_Diagnosa_Banding");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Diagnosa_Diagnosa_Banding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Diagnosa_Diagnosa_Banding";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Diagnosa_Diagnosa_Banding"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Diagnosa_Diagnosa_Banding";
//	Terapi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Terapi";
	$fdata["GoodName"] = "Terapi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Terapi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Terapi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Terapi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Terapi"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Terapi";
//	Prognosis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Prognosis";
	$fdata["GoodName"] = "Prognosis";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Prognosis");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Prognosis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Prognosis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Prognosis"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Prognosis";
//	Komplikasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Komplikasi";
	$fdata["GoodName"] = "Komplikasi";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Komplikasi");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Komplikasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Komplikasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Komplikasi"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Komplikasi";
//	Id_User
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Id_User";
	$fdata["GoodName"] = "Id_User";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Id_User");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "Id_User";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Id_User";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Id_User"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Id_User";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Nomor_Rm");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nomor_Rm";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.Nomor_Rm";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Nomor_Rm"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Nomor_Rm";
//	Id_Pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Id_Pasien";
	$fdata["GoodName"] = "Id_Pasien";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Id_Pasien");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id_Pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Id_Pasien";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Id_Pasien"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Id_Pasien";
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Nama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Nama";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Nama"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Nama";
//	Alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Alamat";
	$fdata["GoodName"] = "Alamat";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Alamat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Alamat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Alamat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Alamat"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Alamat";
//	Umur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Umur";
	$fdata["GoodName"] = "Umur";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Umur");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Umur";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Umur";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Umur"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Umur";
//	Status_Perkawinan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Status_Perkawinan";
	$fdata["GoodName"] = "Status_Perkawinan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Status_Perkawinan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Status_Perkawinan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Status_Perkawinan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Status_Perkawinan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Status_Perkawinan";
//	Jenis Kelamin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Jenis Kelamin";
	$fdata["GoodName"] = "Jenis_Kelamin";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Jenis_Kelamin");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Jenis Kelamin";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.`Jenis Kelamin`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Jenis Kelamin"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Jenis Kelamin";
//	Suku_Ras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Suku_Ras";
	$fdata["GoodName"] = "Suku_Ras";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Suku_Ras");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Suku_Ras";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Suku_Ras";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Suku_Ras"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Suku_Ras";
//	Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "Agama";
	$fdata["GoodName"] = "Agama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Agama");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Agama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Agama";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Agama"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Agama";
//	Pekerjaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "Pekerjaan";
	$fdata["GoodName"] = "Pekerjaan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Pekerjaan");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Pekerjaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Pekerjaan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["Pekerjaan"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Pekerjaan";
//	Tanggal_MRS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "Tanggal_MRS";
	$fdata["GoodName"] = "Tanggal_MRS";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("laporan_mata","Tanggal_MRS");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Tanggal_MRS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.Tanggal_MRS";

	
	
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


	$tdatalaporan_mata["Tanggal_MRS"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "Tanggal_MRS";
//	id_pasien1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "id_pasien1";
	$fdata["GoodName"] = "id_pasien1";
	$fdata["ownerTable"] = "mata";
	$fdata["Label"] = GetFieldLabel("laporan_mata","id_pasien1");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m.id_pasien";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["id_pasien1"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "id_pasien1";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["id"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["name"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "name";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["username"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["email"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "email";
//	email_verified_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "email_verified_at";
	$fdata["GoodName"] = "email_verified_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","email_verified_at");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "email_verified_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.email_verified_at";

	
	
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


	$tdatalaporan_mata["email_verified_at"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "email_verified_at";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["password"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "password";
//	two_factor_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "two_factor_secret";
	$fdata["GoodName"] = "two_factor_secret";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","two_factor_secret");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "two_factor_secret";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.two_factor_secret";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["two_factor_secret"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "two_factor_secret";
//	two_factor_recovery_codes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "two_factor_recovery_codes";
	$fdata["GoodName"] = "two_factor_recovery_codes";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","two_factor_recovery_codes");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "two_factor_recovery_codes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.two_factor_recovery_codes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["two_factor_recovery_codes"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "two_factor_recovery_codes";
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","level");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "level";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.`level`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["level"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "level";
//	remember_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "remember_token";
	$fdata["GoodName"] = "remember_token";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","remember_token");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "remember_token";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.remember_token";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["remember_token"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "remember_token";
//	profile_photo_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "profile_photo_path";
	$fdata["GoodName"] = "profile_photo_path";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","profile_photo_path");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "profile_photo_path";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.profile_photo_path";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatalaporan_mata["profile_photo_path"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "profile_photo_path";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.created_at";

	
	
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


	$tdatalaporan_mata["created_at"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("laporan_mata","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "u.updated_at";

	
	
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


	$tdatalaporan_mata["updated_at"] = $fdata;
		$tdatalaporan_mata[".searchableFields"][] = "updated_at";


$tables_data["laporan_mata"]=&$tdatalaporan_mata;
$field_labels["laporan_mata"] = &$fieldLabelslaporan_mata;
$fieldToolTips["laporan_mata"] = &$fieldToolTipslaporan_mata;
$placeHolders["laporan_mata"] = &$placeHolderslaporan_mata;
$page_titles["laporan_mata"] = &$pageTitleslaporan_mata;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["laporan_mata"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["laporan_mata"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["laporan_mata"][0] = $masterParams;
				$masterTablesData["laporan_mata"][0]["masterKeys"] = array();
	$masterTablesData["laporan_mata"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["laporan_mata"][0]["detailKeys"] = array();
	$masterTablesData["laporan_mata"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["laporan_mata"][1] = $masterParams;
				$masterTablesData["laporan_mata"][1]["masterKeys"] = array();
	$masterTablesData["laporan_mata"][1]["masterKeys"][]="id";
				$masterTablesData["laporan_mata"][1]["detailKeys"] = array();
	$masterTablesData["laporan_mata"][1]["detailKeys"][]="Id_User";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_laporan_mata()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m.Id_Mata,  m.Keluhan_Utama,  m.Keluhan_Tambahan,  m.Riwayat_Penyakit_Sekarang,  m.Riwayat_Penyakit_Dahulu,  m.Riwayat_Penyakit_Keluarga,  m.Riwayat_Alergi,  m.Riwayat_Pengobatan,  m.Riwayat_Kebiasaan,  m.Riwayat_Sosio_Ekonomi,  m.Visus_OD_Kiri,  m.Visus_OS_Kanan,  m.Refraksi_OD_Kiri,  m.Refraksi_OS_Kanan,  m.Addisi_OD_Kiri,  m.Addisi_OS_Kanan,  m.Posisi_Bola_Mata_Kiri,  m.Posisi_Bola_Mata_Kanan,  m.Gerakan_Bola_Mata_Kiri,  m.Gerakan_Bola_Mata_Kanan,  m.Palpebra_Kiri,  m.Palpebra_Kanan,  m.Conjunctiva_Kiri,  m.Conjunctiva_Kanan,  m.Cornea_Kiri,  m.Cornea_Kanan,  m.COA_Kiri,  m.COA_Kanan,  m.Pupil_Kiri,  m.Pupil_Kanan,  m.Iris_Kiri,  m.Iris_Kanan,  m.Lensa_Kiri,  m.Lensa_Kanan,  m.Tekanan_Intra_Okuler_Kiri,  m.Tekanan_Intra_Okuler_Kanan,  m.Segment_Posterior_Kiri,  m.Segment_Posterior_Kanan,  m.Lapang_Pandang_Kiri,  m.Lapang_Pandang_Kanan,  m.Ishihara_Test_Kiri,  m.Ishihara_Test_Kanan,  m.Fluorescein_Tes_Kiri,  m.Fluorescein_Test_Kanan,  m.Sensibilitas_Kornea_Kiri,  m.Sensibilitas_Kornea_Kanan,  m.Schirmer_Test_Kiri,  m.Schirmer_Test_Kanan,  m.Hirschberg_Test_Kiri,  m.Hirschberg_Test_Kanan,  m.Cover_Test_Kiri,  m.Cover_Test_Kanan,  m.Cover_Uncover_Test_Kiri,  m.Cover_Uncover_Test_Kanan,  m.Penunjang_Lain,  m.Daftar_Masalah,  m.Rencana_Permulaan,  m.Catatan_Kemajuan,  m.Diagnosa_Diagnosa_Banding,  m.Terapi,  m.Prognosis,  m.Komplikasi,  m.Id_User,  m.Nomor_Rm,  p.Id_Pasien,  p.Nama,  p.Alamat,  p.Umur,  p.Status_Perkawinan,  p.`Jenis Kelamin`,  p.Suku_Ras,  p.Agama,  p.Pekerjaan,  p.Tanggal_MRS,  m.id_pasien AS id_pasien1,  u.id,  u.name,  u.username,  u.email,  u.email_verified_at,  u.password,  u.two_factor_secret,  u.two_factor_recovery_codes,  u.`level`,  u.remember_token,  u.profile_photo_path,  u.created_at,  u.updated_at";
$proto0["m_strFrom"] = "FROM mata AS m  INNER JOIN identitas_pasien AS p ON m.id_pasien = p.Id_Pasien  INNER JOIN users AS u ON m.Id_User = u.id";
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
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto6["m_sql"] = "m.Id_Mata";
$proto6["m_srcTableName"] = "laporan_mata";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Utama",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto8["m_sql"] = "m.Keluhan_Utama";
$proto8["m_srcTableName"] = "laporan_mata";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Tambahan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto10["m_sql"] = "m.Keluhan_Tambahan";
$proto10["m_srcTableName"] = "laporan_mata";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Sekarang",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto12["m_sql"] = "m.Riwayat_Penyakit_Sekarang";
$proto12["m_srcTableName"] = "laporan_mata";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Dahulu",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto14["m_sql"] = "m.Riwayat_Penyakit_Dahulu";
$proto14["m_srcTableName"] = "laporan_mata";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Penyakit_Keluarga",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto16["m_sql"] = "m.Riwayat_Penyakit_Keluarga";
$proto16["m_srcTableName"] = "laporan_mata";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Alergi",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto18["m_sql"] = "m.Riwayat_Alergi";
$proto18["m_srcTableName"] = "laporan_mata";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Pengobatan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto20["m_sql"] = "m.Riwayat_Pengobatan";
$proto20["m_srcTableName"] = "laporan_mata";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Kebiasaan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto22["m_sql"] = "m.Riwayat_Kebiasaan";
$proto22["m_srcTableName"] = "laporan_mata";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Sosio_Ekonomi",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto24["m_sql"] = "m.Riwayat_Sosio_Ekonomi";
$proto24["m_srcTableName"] = "laporan_mata";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Visus_OD_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto26["m_sql"] = "m.Visus_OD_Kiri";
$proto26["m_srcTableName"] = "laporan_mata";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Visus_OS_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto28["m_sql"] = "m.Visus_OS_Kanan";
$proto28["m_srcTableName"] = "laporan_mata";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Refraksi_OD_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto30["m_sql"] = "m.Refraksi_OD_Kiri";
$proto30["m_srcTableName"] = "laporan_mata";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Refraksi_OS_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto32["m_sql"] = "m.Refraksi_OS_Kanan";
$proto32["m_srcTableName"] = "laporan_mata";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Addisi_OD_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto34["m_sql"] = "m.Addisi_OD_Kiri";
$proto34["m_srcTableName"] = "laporan_mata";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Addisi_OS_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto36["m_sql"] = "m.Addisi_OS_Kanan";
$proto36["m_srcTableName"] = "laporan_mata";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Posisi_Bola_Mata_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto38["m_sql"] = "m.Posisi_Bola_Mata_Kiri";
$proto38["m_srcTableName"] = "laporan_mata";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Posisi_Bola_Mata_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto40["m_sql"] = "m.Posisi_Bola_Mata_Kanan";
$proto40["m_srcTableName"] = "laporan_mata";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Gerakan_Bola_Mata_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto42["m_sql"] = "m.Gerakan_Bola_Mata_Kiri";
$proto42["m_srcTableName"] = "laporan_mata";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Gerakan_Bola_Mata_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto44["m_sql"] = "m.Gerakan_Bola_Mata_Kanan";
$proto44["m_srcTableName"] = "laporan_mata";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Palpebra_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto46["m_sql"] = "m.Palpebra_Kiri";
$proto46["m_srcTableName"] = "laporan_mata";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Palpebra_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto48["m_sql"] = "m.Palpebra_Kanan";
$proto48["m_srcTableName"] = "laporan_mata";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Conjunctiva_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto50["m_sql"] = "m.Conjunctiva_Kiri";
$proto50["m_srcTableName"] = "laporan_mata";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Conjunctiva_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto52["m_sql"] = "m.Conjunctiva_Kanan";
$proto52["m_srcTableName"] = "laporan_mata";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Cornea_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto54["m_sql"] = "m.Cornea_Kiri";
$proto54["m_srcTableName"] = "laporan_mata";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Cornea_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto56["m_sql"] = "m.Cornea_Kanan";
$proto56["m_srcTableName"] = "laporan_mata";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "COA_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto58["m_sql"] = "m.COA_Kiri";
$proto58["m_srcTableName"] = "laporan_mata";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "COA_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto60["m_sql"] = "m.COA_Kanan";
$proto60["m_srcTableName"] = "laporan_mata";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Pupil_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto62["m_sql"] = "m.Pupil_Kiri";
$proto62["m_srcTableName"] = "laporan_mata";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Pupil_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto64["m_sql"] = "m.Pupil_Kanan";
$proto64["m_srcTableName"] = "laporan_mata";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Iris_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto66["m_sql"] = "m.Iris_Kiri";
$proto66["m_srcTableName"] = "laporan_mata";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Iris_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto68["m_sql"] = "m.Iris_Kanan";
$proto68["m_srcTableName"] = "laporan_mata";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Lensa_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto70["m_sql"] = "m.Lensa_Kiri";
$proto70["m_srcTableName"] = "laporan_mata";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Lensa_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto72["m_sql"] = "m.Lensa_Kanan";
$proto72["m_srcTableName"] = "laporan_mata";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Tekanan_Intra_Okuler_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto74["m_sql"] = "m.Tekanan_Intra_Okuler_Kiri";
$proto74["m_srcTableName"] = "laporan_mata";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Tekanan_Intra_Okuler_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto76["m_sql"] = "m.Tekanan_Intra_Okuler_Kanan";
$proto76["m_srcTableName"] = "laporan_mata";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Segment_Posterior_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto78["m_sql"] = "m.Segment_Posterior_Kiri";
$proto78["m_srcTableName"] = "laporan_mata";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Segment_Posterior_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto80["m_sql"] = "m.Segment_Posterior_Kanan";
$proto80["m_srcTableName"] = "laporan_mata";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Lapang_Pandang_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto82["m_sql"] = "m.Lapang_Pandang_Kiri";
$proto82["m_srcTableName"] = "laporan_mata";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Lapang_Pandang_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto84["m_sql"] = "m.Lapang_Pandang_Kanan";
$proto84["m_srcTableName"] = "laporan_mata";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Ishihara_Test_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto86["m_sql"] = "m.Ishihara_Test_Kiri";
$proto86["m_srcTableName"] = "laporan_mata";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Ishihara_Test_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto88["m_sql"] = "m.Ishihara_Test_Kanan";
$proto88["m_srcTableName"] = "laporan_mata";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Fluorescein_Tes_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto90["m_sql"] = "m.Fluorescein_Tes_Kiri";
$proto90["m_srcTableName"] = "laporan_mata";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Fluorescein_Test_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto92["m_sql"] = "m.Fluorescein_Test_Kanan";
$proto92["m_srcTableName"] = "laporan_mata";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Sensibilitas_Kornea_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto94["m_sql"] = "m.Sensibilitas_Kornea_Kiri";
$proto94["m_srcTableName"] = "laporan_mata";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Sensibilitas_Kornea_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto96["m_sql"] = "m.Sensibilitas_Kornea_Kanan";
$proto96["m_srcTableName"] = "laporan_mata";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Schirmer_Test_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto98["m_sql"] = "m.Schirmer_Test_Kiri";
$proto98["m_srcTableName"] = "laporan_mata";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Schirmer_Test_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto100["m_sql"] = "m.Schirmer_Test_Kanan";
$proto100["m_srcTableName"] = "laporan_mata";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Hirschberg_Test_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto102["m_sql"] = "m.Hirschberg_Test_Kiri";
$proto102["m_srcTableName"] = "laporan_mata";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Hirschberg_Test_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto104["m_sql"] = "m.Hirschberg_Test_Kanan";
$proto104["m_srcTableName"] = "laporan_mata";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Test_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto106["m_sql"] = "m.Cover_Test_Kiri";
$proto106["m_srcTableName"] = "laporan_mata";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Test_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto108["m_sql"] = "m.Cover_Test_Kanan";
$proto108["m_srcTableName"] = "laporan_mata";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Uncover_Test_Kiri",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto110["m_sql"] = "m.Cover_Uncover_Test_Kiri";
$proto110["m_srcTableName"] = "laporan_mata";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Cover_Uncover_Test_Kanan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto112["m_sql"] = "m.Cover_Uncover_Test_Kanan";
$proto112["m_srcTableName"] = "laporan_mata";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Penunjang_Lain",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto114["m_sql"] = "m.Penunjang_Lain";
$proto114["m_srcTableName"] = "laporan_mata";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Daftar_Masalah",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto116["m_sql"] = "m.Daftar_Masalah";
$proto116["m_srcTableName"] = "laporan_mata";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Rencana_Permulaan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto118["m_sql"] = "m.Rencana_Permulaan";
$proto118["m_srcTableName"] = "laporan_mata";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Catatan_Kemajuan",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto120["m_sql"] = "m.Catatan_Kemajuan";
$proto120["m_srcTableName"] = "laporan_mata";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosa_Diagnosa_Banding",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto122["m_sql"] = "m.Diagnosa_Diagnosa_Banding";
$proto122["m_srcTableName"] = "laporan_mata";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Terapi",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto124["m_sql"] = "m.Terapi";
$proto124["m_srcTableName"] = "laporan_mata";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Prognosis",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto126["m_sql"] = "m.Prognosis";
$proto126["m_srcTableName"] = "laporan_mata";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Komplikasi",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto128["m_sql"] = "m.Komplikasi";
$proto128["m_srcTableName"] = "laporan_mata";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_User",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto130["m_sql"] = "m.Id_User";
$proto130["m_srcTableName"] = "laporan_mata";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto132["m_sql"] = "m.Nomor_Rm";
$proto132["m_srcTableName"] = "laporan_mata";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Pasien",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto134["m_sql"] = "p.Id_Pasien";
$proto134["m_srcTableName"] = "laporan_mata";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto136["m_sql"] = "p.Nama";
$proto136["m_srcTableName"] = "laporan_mata";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Alamat",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto138["m_sql"] = "p.Alamat";
$proto138["m_srcTableName"] = "laporan_mata";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Umur",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto140["m_sql"] = "p.Umur";
$proto140["m_srcTableName"] = "laporan_mata";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_Perkawinan",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto142["m_sql"] = "p.Status_Perkawinan";
$proto142["m_srcTableName"] = "laporan_mata";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis Kelamin",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto144["m_sql"] = "p.`Jenis Kelamin`";
$proto144["m_srcTableName"] = "laporan_mata";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Suku_Ras",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto146["m_sql"] = "p.Suku_Ras";
$proto146["m_srcTableName"] = "laporan_mata";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Agama",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto148["m_sql"] = "p.Agama";
$proto148["m_srcTableName"] = "laporan_mata";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto150["m_sql"] = "p.Pekerjaan";
$proto150["m_srcTableName"] = "laporan_mata";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal_MRS",
	"m_strTable" => "p",
	"m_srcTableName" => "laporan_mata"
));

$proto152["m_sql"] = "p.Tanggal_MRS";
$proto152["m_srcTableName"] = "laporan_mata";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto154["m_sql"] = "m.id_pasien";
$proto154["m_srcTableName"] = "laporan_mata";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "id_pasien1";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto156["m_sql"] = "u.id";
$proto156["m_srcTableName"] = "laporan_mata";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto158["m_sql"] = "u.name";
$proto158["m_srcTableName"] = "laporan_mata";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto160["m_sql"] = "u.username";
$proto160["m_srcTableName"] = "laporan_mata";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto162["m_sql"] = "u.email";
$proto162["m_srcTableName"] = "laporan_mata";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "email_verified_at",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto164["m_sql"] = "u.email_verified_at";
$proto164["m_srcTableName"] = "laporan_mata";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto166["m_sql"] = "u.password";
$proto166["m_srcTableName"] = "laporan_mata";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "two_factor_secret",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto168["m_sql"] = "u.two_factor_secret";
$proto168["m_srcTableName"] = "laporan_mata";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "two_factor_recovery_codes",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto170["m_sql"] = "u.two_factor_recovery_codes";
$proto170["m_srcTableName"] = "laporan_mata";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto172["m_sql"] = "u.`level`";
$proto172["m_srcTableName"] = "laporan_mata";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "remember_token",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto174["m_sql"] = "u.remember_token";
$proto174["m_srcTableName"] = "laporan_mata";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "profile_photo_path",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto176["m_sql"] = "u.profile_photo_path";
$proto176["m_srcTableName"] = "laporan_mata";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto178["m_sql"] = "u.created_at";
$proto178["m_srcTableName"] = "laporan_mata";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "u",
	"m_srcTableName" => "laporan_mata"
));

$proto180["m_sql"] = "u.updated_at";
$proto180["m_srcTableName"] = "laporan_mata";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto182=array();
$proto182["m_link"] = "SQLL_MAIN";
			$proto183=array();
$proto183["m_strName"] = "mata";
$proto183["m_srcTableName"] = "laporan_mata";
$proto183["m_columns"] = array();
$proto183["m_columns"][] = "Id_Mata";
$proto183["m_columns"][] = "Keluhan_Utama";
$proto183["m_columns"][] = "Keluhan_Tambahan";
$proto183["m_columns"][] = "Riwayat_Penyakit_Sekarang";
$proto183["m_columns"][] = "Riwayat_Penyakit_Dahulu";
$proto183["m_columns"][] = "Riwayat_Penyakit_Keluarga";
$proto183["m_columns"][] = "Riwayat_Alergi";
$proto183["m_columns"][] = "Riwayat_Pengobatan";
$proto183["m_columns"][] = "Riwayat_Kebiasaan";
$proto183["m_columns"][] = "Riwayat_Sosio_Ekonomi";
$proto183["m_columns"][] = "Visus_OD_Kiri";
$proto183["m_columns"][] = "Visus_OS_Kanan";
$proto183["m_columns"][] = "Refraksi_OD_Kiri";
$proto183["m_columns"][] = "Refraksi_OS_Kanan";
$proto183["m_columns"][] = "Addisi_OD_Kiri";
$proto183["m_columns"][] = "Addisi_OS_Kanan";
$proto183["m_columns"][] = "Posisi_Bola_Mata_Kiri";
$proto183["m_columns"][] = "Posisi_Bola_Mata_Kanan";
$proto183["m_columns"][] = "Gerakan_Bola_Mata_Kiri";
$proto183["m_columns"][] = "Gerakan_Bola_Mata_Kanan";
$proto183["m_columns"][] = "Palpebra_Kiri";
$proto183["m_columns"][] = "Palpebra_Kanan";
$proto183["m_columns"][] = "Conjunctiva_Kiri";
$proto183["m_columns"][] = "Conjunctiva_Kanan";
$proto183["m_columns"][] = "Cornea_Kiri";
$proto183["m_columns"][] = "Cornea_Kanan";
$proto183["m_columns"][] = "COA_Kiri";
$proto183["m_columns"][] = "COA_Kanan";
$proto183["m_columns"][] = "Pupil_Kiri";
$proto183["m_columns"][] = "Pupil_Kanan";
$proto183["m_columns"][] = "Iris_Kiri";
$proto183["m_columns"][] = "Iris_Kanan";
$proto183["m_columns"][] = "Lensa_Kiri";
$proto183["m_columns"][] = "Lensa_Kanan";
$proto183["m_columns"][] = "Tekanan_Intra_Okuler_Kiri";
$proto183["m_columns"][] = "Tekanan_Intra_Okuler_Kanan";
$proto183["m_columns"][] = "Segment_Posterior_Kiri";
$proto183["m_columns"][] = "Segment_Posterior_Kanan";
$proto183["m_columns"][] = "Lapang_Pandang_Kiri";
$proto183["m_columns"][] = "Lapang_Pandang_Kanan";
$proto183["m_columns"][] = "Ishihara_Test_Kiri";
$proto183["m_columns"][] = "Ishihara_Test_Kanan";
$proto183["m_columns"][] = "Fluorescein_Tes_Kiri";
$proto183["m_columns"][] = "Fluorescein_Test_Kanan";
$proto183["m_columns"][] = "Sensibilitas_Kornea_Kiri";
$proto183["m_columns"][] = "Sensibilitas_Kornea_Kanan";
$proto183["m_columns"][] = "Schirmer_Test_Kiri";
$proto183["m_columns"][] = "Schirmer_Test_Kanan";
$proto183["m_columns"][] = "Hirschberg_Test_Kiri";
$proto183["m_columns"][] = "Hirschberg_Test_Kanan";
$proto183["m_columns"][] = "Cover_Test_Kiri";
$proto183["m_columns"][] = "Cover_Test_Kanan";
$proto183["m_columns"][] = "Cover_Uncover_Test_Kiri";
$proto183["m_columns"][] = "Cover_Uncover_Test_Kanan";
$proto183["m_columns"][] = "Penunjang_Lain";
$proto183["m_columns"][] = "Daftar_Masalah";
$proto183["m_columns"][] = "Rencana_Permulaan";
$proto183["m_columns"][] = "Catatan_Kemajuan";
$proto183["m_columns"][] = "Diagnosa_Diagnosa_Banding";
$proto183["m_columns"][] = "Terapi";
$proto183["m_columns"][] = "Prognosis";
$proto183["m_columns"][] = "Komplikasi";
$proto183["m_columns"][] = "Id_User";
$proto183["m_columns"][] = "id_pasien";
$proto183["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto183);

$proto182["m_table"] = $obj;
$proto182["m_sql"] = "mata AS m";
$proto182["m_alias"] = "m";
$proto182["m_srcTableName"] = "laporan_mata";
$proto184=array();
$proto184["m_sql"] = "";
$proto184["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto184["m_column"]=$obj;
$proto184["m_contained"] = array();
$proto184["m_strCase"] = "";
$proto184["m_havingmode"] = false;
$proto184["m_inBrackets"] = false;
$proto184["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto184);

$proto182["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto182);

$proto0["m_fromlist"][]=$obj;
												$proto186=array();
$proto186["m_link"] = "SQLL_INNERJOIN";
			$proto187=array();
$proto187["m_strName"] = "identitas_pasien";
$proto187["m_srcTableName"] = "laporan_mata";
$proto187["m_columns"] = array();
$proto187["m_columns"][] = "Id_Pasien";
$proto187["m_columns"][] = "Nama";
$proto187["m_columns"][] = "Alamat";
$proto187["m_columns"][] = "Umur";
$proto187["m_columns"][] = "Status_Perkawinan";
$proto187["m_columns"][] = "Jenis Kelamin";
$proto187["m_columns"][] = "Suku_Ras";
$proto187["m_columns"][] = "Agama";
$proto187["m_columns"][] = "Pekerjaan";
$proto187["m_columns"][] = "Tanggal_MRS";
$obj = new SQLTable($proto187);

$proto186["m_table"] = $obj;
$proto186["m_sql"] = "INNER JOIN identitas_pasien AS p ON m.id_pasien = p.Id_Pasien";
$proto186["m_alias"] = "p";
$proto186["m_srcTableName"] = "laporan_mata";
$proto188=array();
$proto188["m_sql"] = "m.id_pasien = p.Id_Pasien";
$proto188["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto188["m_column"]=$obj;
$proto188["m_contained"] = array();
$proto188["m_strCase"] = "= p.Id_Pasien";
$proto188["m_havingmode"] = false;
$proto188["m_inBrackets"] = false;
$proto188["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto188);

$proto186["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto186);

$proto0["m_fromlist"][]=$obj;
												$proto190=array();
$proto190["m_link"] = "SQLL_INNERJOIN";
			$proto191=array();
$proto191["m_strName"] = "users";
$proto191["m_srcTableName"] = "laporan_mata";
$proto191["m_columns"] = array();
$proto191["m_columns"][] = "id";
$proto191["m_columns"][] = "name";
$proto191["m_columns"][] = "username";
$proto191["m_columns"][] = "email";
$proto191["m_columns"][] = "email_verified_at";
$proto191["m_columns"][] = "password";
$proto191["m_columns"][] = "two_factor_secret";
$proto191["m_columns"][] = "two_factor_recovery_codes";
$proto191["m_columns"][] = "level";
$proto191["m_columns"][] = "remember_token";
$proto191["m_columns"][] = "profile_photo_path";
$proto191["m_columns"][] = "created_at";
$proto191["m_columns"][] = "updated_at";
$obj = new SQLTable($proto191);

$proto190["m_table"] = $obj;
$proto190["m_sql"] = "INNER JOIN users AS u ON m.Id_User = u.id";
$proto190["m_alias"] = "u";
$proto190["m_srcTableName"] = "laporan_mata";
$proto192=array();
$proto192["m_sql"] = "m.Id_User = u.id";
$proto192["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Id_User",
	"m_strTable" => "m",
	"m_srcTableName" => "laporan_mata"
));

$proto192["m_column"]=$obj;
$proto192["m_contained"] = array();
$proto192["m_strCase"] = "= u.id";
$proto192["m_havingmode"] = false;
$proto192["m_inBrackets"] = false;
$proto192["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto192);

$proto190["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto190);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="laporan_mata";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_laporan_mata = createSqlQuery_laporan_mata();


	
		;

																																																																																								

$tdatalaporan_mata[".sqlquery"] = $queryData_laporan_mata;



include_once(getabspath("include/laporan_mata_events.php"));
$tableEvents["laporan_mata"] = new eventclass_laporan_mata;
$tdatalaporan_mata[".hasEvents"] = true;

?>