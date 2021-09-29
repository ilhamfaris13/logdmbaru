<?php
$tdataandrologi1 = array();
$tdataandrologi1[".searchableFields"] = array();
$tdataandrologi1[".ShortName"] = "andrologi1";
$tdataandrologi1[".OwnerID"] = "";
$tdataandrologi1[".OriginalTable"] = "andrologi";


$tdataandrologi1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataandrologi1[".originalPagesByType"] = $tdataandrologi1[".pagesByType"];
$tdataandrologi1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataandrologi1[".originalPages"] = $tdataandrologi1[".pages"];
$tdataandrologi1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataandrologi1[".originalDefaultPages"] = $tdataandrologi1[".defaultPages"];

//	field labels
$fieldLabelsandrologi1 = array();
$fieldToolTipsandrologi1 = array();
$pageTitlesandrologi1 = array();
$placeHoldersandrologi1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsandrologi1["English"] = array();
	$fieldToolTipsandrologi1["English"] = array();
	$placeHoldersandrologi1["English"] = array();
	$pageTitlesandrologi1["English"] = array();
	$fieldLabelsandrologi1["English"]["id_andrologi"] = "Id Andrologi";
	$fieldToolTipsandrologi1["English"]["id_andrologi"] = "";
	$placeHoldersandrologi1["English"]["id_andrologi"] = "";
	$fieldLabelsandrologi1["English"]["lama_perkawinan_1"] = "Lama Perkawinan 1";
	$fieldToolTipsandrologi1["English"]["lama_perkawinan_1"] = "";
	$placeHoldersandrologi1["English"]["lama_perkawinan_1"] = "";
	$fieldLabelsandrologi1["English"]["lama_perkawinan_2"] = "Lama Perkawinan 2";
	$fieldToolTipsandrologi1["English"]["lama_perkawinan_2"] = "";
	$placeHoldersandrologi1["English"]["lama_perkawinan_2"] = "";
	$fieldLabelsandrologi1["English"]["lama_perkawinan_3"] = "Lama Perkawinan 3";
	$fieldToolTipsandrologi1["English"]["lama_perkawinan_3"] = "";
	$placeHoldersandrologi1["English"]["lama_perkawinan_3"] = "";
	$fieldLabelsandrologi1["English"]["anak_perkawinan_1"] = "Anak Perkawinan 1";
	$fieldToolTipsandrologi1["English"]["anak_perkawinan_1"] = "";
	$placeHoldersandrologi1["English"]["anak_perkawinan_1"] = "";
	$fieldLabelsandrologi1["English"]["anak_perkawinan_2"] = "Anak Perkawinan 2";
	$fieldToolTipsandrologi1["English"]["anak_perkawinan_2"] = "";
	$placeHoldersandrologi1["English"]["anak_perkawinan_2"] = "";
	$fieldLabelsandrologi1["English"]["anak_perkawinan_3"] = "Anak Perkawinan 3";
	$fieldToolTipsandrologi1["English"]["anak_perkawinan_3"] = "";
	$placeHoldersandrologi1["English"]["anak_perkawinan_3"] = "";
	$fieldLabelsandrologi1["English"]["Libido"] = "Libido";
	$fieldToolTipsandrologi1["English"]["Libido"] = "";
	$placeHoldersandrologi1["English"]["Libido"] = "";
	$fieldLabelsandrologi1["English"]["Frekwensi_koitus"] = "Frekwensi Koitus";
	$fieldToolTipsandrologi1["English"]["Frekwensi_koitus"] = "";
	$placeHoldersandrologi1["English"]["Frekwensi_koitus"] = "";
	$fieldLabelsandrologi1["English"]["Dispareuni"] = "Dispareuni";
	$fieldToolTipsandrologi1["English"]["Dispareuni"] = "";
	$placeHoldersandrologi1["English"]["Dispareuni"] = "";
	$fieldLabelsandrologi1["English"]["Orgasmus"] = "Orgasmus";
	$fieldToolTipsandrologi1["English"]["Orgasmus"] = "";
	$placeHoldersandrologi1["English"]["Orgasmus"] = "";
	$fieldLabelsandrologi1["English"]["Reflux_Post_Coital"] = "Reflux Post Coital";
	$fieldToolTipsandrologi1["English"]["Reflux_Post_Coital"] = "";
	$placeHoldersandrologi1["English"]["Reflux_Post_Coital"] = "";
	$fieldLabelsandrologi1["English"]["Ejakulasi_Dini"] = "Ejakulasi Dini";
	$fieldToolTipsandrologi1["English"]["Ejakulasi_Dini"] = "";
	$placeHoldersandrologi1["English"]["Ejakulasi_Dini"] = "";
	$fieldLabelsandrologi1["English"]["Ejakulasi_Nocturnal"] = "Ejakulasi Nocturnal";
	$fieldToolTipsandrologi1["English"]["Ejakulasi_Nocturnal"] = "";
	$placeHoldersandrologi1["English"]["Ejakulasi_Nocturnal"] = "";
	$fieldLabelsandrologi1["English"]["Ejakulasi_Nyeri"] = "Ejakulasi Nyeri";
	$fieldToolTipsandrologi1["English"]["Ejakulasi_Nyeri"] = "";
	$placeHoldersandrologi1["English"]["Ejakulasi_Nyeri"] = "";
	$fieldLabelsandrologi1["English"]["Puber"] = "Puber";
	$fieldToolTipsandrologi1["English"]["Puber"] = "";
	$placeHoldersandrologi1["English"]["Puber"] = "";
	$fieldLabelsandrologi1["English"]["Masturbasi"] = "Masturbasi";
	$fieldToolTipsandrologi1["English"]["Masturbasi"] = "";
	$placeHoldersandrologi1["English"]["Masturbasi"] = "";
	$fieldLabelsandrologi1["English"]["Koitus_pranikah"] = "Koitus Pranikah";
	$fieldToolTipsandrologi1["English"]["Koitus_pranikah"] = "";
	$placeHoldersandrologi1["English"]["Koitus_pranikah"] = "";
	$fieldLabelsandrologi1["English"]["Lain_lain"] = "Lain Lain";
	$fieldToolTipsandrologi1["English"]["Lain_lain"] = "";
	$placeHoldersandrologi1["English"]["Lain_lain"] = "";
	$fieldLabelsandrologi1["English"]["Peny_Hub_Seksual"] = "Peny Hub Seksual";
	$fieldToolTipsandrologi1["English"]["Peny_Hub_Seksual"] = "";
	$placeHoldersandrologi1["English"]["Peny_Hub_Seksual"] = "";
	$fieldLabelsandrologi1["English"]["Hernia"] = "Hernia";
	$fieldToolTipsandrologi1["English"]["Hernia"] = "";
	$placeHoldersandrologi1["English"]["Hernia"] = "";
	$fieldLabelsandrologi1["English"]["Hidrokel"] = "Hidrokel";
	$fieldToolTipsandrologi1["English"]["Hidrokel"] = "";
	$placeHoldersandrologi1["English"]["Hidrokel"] = "";
	$fieldLabelsandrologi1["English"]["Trauma"] = "Trauma";
	$fieldToolTipsandrologi1["English"]["Trauma"] = "";
	$placeHoldersandrologi1["English"]["Trauma"] = "";
	$fieldLabelsandrologi1["English"]["Kelainan_bawaan"] = "Kelainan Bawaan";
	$fieldToolTipsandrologi1["English"]["Kelainan_bawaan"] = "";
	$placeHoldersandrologi1["English"]["Kelainan_bawaan"] = "";
	$fieldLabelsandrologi1["English"]["Penyakit_Paru_kronis"] = "Penyakit Paru Kronis";
	$fieldToolTipsandrologi1["English"]["Penyakit_Paru_kronis"] = "";
	$placeHoldersandrologi1["English"]["Penyakit_Paru_kronis"] = "";
	$fieldLabelsandrologi1["English"]["Penyakit_hidung_kronis"] = "Penyakit Hidung Kronis";
	$fieldToolTipsandrologi1["English"]["Penyakit_hidung_kronis"] = "";
	$placeHoldersandrologi1["English"]["Penyakit_hidung_kronis"] = "";
	$fieldLabelsandrologi1["English"]["Tuberkulosa"] = "Tuberkulosa";
	$fieldToolTipsandrologi1["English"]["Tuberkulosa"] = "";
	$placeHoldersandrologi1["English"]["Tuberkulosa"] = "";
	$fieldLabelsandrologi1["English"]["Diabetes_mellitus"] = "Diabetes Mellitus";
	$fieldToolTipsandrologi1["English"]["Diabetes_mellitus"] = "";
	$placeHoldersandrologi1["English"]["Diabetes_mellitus"] = "";
	$fieldLabelsandrologi1["English"]["Gondongan_parotitis"] = "Gondongan Parotitis";
	$fieldToolTipsandrologi1["English"]["Gondongan_parotitis"] = "";
	$placeHoldersandrologi1["English"]["Gondongan_parotitis"] = "";
	$fieldLabelsandrologi1["English"]["Penyakit_Saraf"] = "Penyakit Saraf";
	$fieldToolTipsandrologi1["English"]["Penyakit_Saraf"] = "";
	$placeHoldersandrologi1["English"]["Penyakit_Saraf"] = "";
	$fieldLabelsandrologi1["English"]["Panas_dlm_6_bln"] = "Panas Dlm 6 Bln";
	$fieldToolTipsandrologi1["English"]["Panas_dlm_6_bln"] = "";
	$placeHoldersandrologi1["English"]["Panas_dlm_6_bln"] = "";
	$fieldLabelsandrologi1["English"]["Status_keluarga"] = "Status Keluarga";
	$fieldToolTipsandrologi1["English"]["Status_keluarga"] = "";
	$placeHoldersandrologi1["English"]["Status_keluarga"] = "";
	$fieldLabelsandrologi1["English"]["Saudara_kandung_suami"] = "Saudara Kandung Suami";
	$fieldToolTipsandrologi1["English"]["Saudara_kandung_suami"] = "";
	$placeHoldersandrologi1["English"]["Saudara_kandung_suami"] = "";
	$fieldLabelsandrologi1["English"]["Saudara_kandung_istri"] = "Saudara Kandung Istri";
	$fieldToolTipsandrologi1["English"]["Saudara_kandung_istri"] = "";
	$placeHoldersandrologi1["English"]["Saudara_kandung_istri"] = "";
	$fieldLabelsandrologi1["English"]["Lingkungan_sosial"] = "Lingkungan Sosial";
	$fieldToolTipsandrologi1["English"]["Lingkungan_sosial"] = "";
	$placeHoldersandrologi1["English"]["Lingkungan_sosial"] = "";
	$fieldLabelsandrologi1["English"]["Pekerjaan"] = "Pekerjaan";
	$fieldToolTipsandrologi1["English"]["Pekerjaan"] = "";
	$placeHoldersandrologi1["English"]["Pekerjaan"] = "";
	$fieldLabelsandrologi1["English"]["Keluarga"] = "Keluarga";
	$fieldToolTipsandrologi1["English"]["Keluarga"] = "";
	$placeHoldersandrologi1["English"]["Keluarga"] = "";
	$fieldLabelsandrologi1["English"]["Rokok"] = "Rokok";
	$fieldToolTipsandrologi1["English"]["Rokok"] = "";
	$placeHoldersandrologi1["English"]["Rokok"] = "";
	$fieldLabelsandrologi1["English"]["Alkohol"] = "Alkohol";
	$fieldToolTipsandrologi1["English"]["Alkohol"] = "";
	$placeHoldersandrologi1["English"]["Alkohol"] = "";
	$fieldLabelsandrologi1["English"]["Obat"] = "Obat";
	$fieldToolTipsandrologi1["English"]["Obat"] = "";
	$placeHoldersandrologi1["English"]["Obat"] = "";
	$fieldLabelsandrologi1["English"]["Celana_ketat"] = "Celana Ketat";
	$fieldToolTipsandrologi1["English"]["Celana_ketat"] = "";
	$placeHoldersandrologi1["English"]["Celana_ketat"] = "";
	$fieldLabelsandrologi1["English"]["Bahan_kimia"] = "Bahan Kimia";
	$fieldToolTipsandrologi1["English"]["Bahan_kimia"] = "";
	$placeHoldersandrologi1["English"]["Bahan_kimia"] = "";
	$fieldLabelsandrologi1["English"]["KU"] = "KU";
	$fieldToolTipsandrologi1["English"]["KU"] = "";
	$placeHoldersandrologi1["English"]["KU"] = "";
	$fieldLabelsandrologi1["English"]["TB"] = "TB";
	$fieldToolTipsandrologi1["English"]["TB"] = "";
	$placeHoldersandrologi1["English"]["TB"] = "";
	$fieldLabelsandrologi1["English"]["CM"] = "CM";
	$fieldToolTipsandrologi1["English"]["CM"] = "";
	$placeHoldersandrologi1["English"]["CM"] = "";
	$fieldLabelsandrologi1["English"]["BB"] = "BB";
	$fieldToolTipsandrologi1["English"]["BB"] = "";
	$placeHoldersandrologi1["English"]["BB"] = "";
	$fieldLabelsandrologi1["English"]["KG"] = "KG";
	$fieldToolTipsandrologi1["English"]["KG"] = "";
	$placeHoldersandrologi1["English"]["KG"] = "";
	$fieldLabelsandrologi1["English"]["Tensi"] = "Tensi";
	$fieldToolTipsandrologi1["English"]["Tensi"] = "";
	$placeHoldersandrologi1["English"]["Tensi"] = "";
	$fieldLabelsandrologi1["English"]["Pertumbuhan_distribusi_rambut"] = "Pertumbuhan Distribusi Rambut";
	$fieldToolTipsandrologi1["English"]["Pertumbuhan_distribusi_rambut"] = "";
	$placeHoldersandrologi1["English"]["Pertumbuhan_distribusi_rambut"] = "";
	$fieldLabelsandrologi1["English"]["Kumis"] = "Kumis";
	$fieldToolTipsandrologi1["English"]["Kumis"] = "";
	$placeHoldersandrologi1["English"]["Kumis"] = "";
	$fieldLabelsandrologi1["English"]["Jenggot"] = "Jenggot";
	$fieldToolTipsandrologi1["English"]["Jenggot"] = "";
	$placeHoldersandrologi1["English"]["Jenggot"] = "";
	$fieldLabelsandrologi1["English"]["Mata"] = "Mata";
	$fieldToolTipsandrologi1["English"]["Mata"] = "";
	$placeHoldersandrologi1["English"]["Mata"] = "";
	$fieldLabelsandrologi1["English"]["Hidung"] = "Hidung";
	$fieldToolTipsandrologi1["English"]["Hidung"] = "";
	$placeHoldersandrologi1["English"]["Hidung"] = "";
	$fieldLabelsandrologi1["English"]["Leher"] = "Leher";
	$fieldToolTipsandrologi1["English"]["Leher"] = "";
	$placeHoldersandrologi1["English"]["Leher"] = "";
	$fieldLabelsandrologi1["English"]["Dada"] = "Dada";
	$fieldToolTipsandrologi1["English"]["Dada"] = "";
	$placeHoldersandrologi1["English"]["Dada"] = "";
	$fieldLabelsandrologi1["English"]["ginecomastia"] = "Ginecomastia";
	$fieldToolTipsandrologi1["English"]["ginecomastia"] = "";
	$placeHoldersandrologi1["English"]["ginecomastia"] = "";
	$fieldLabelsandrologi1["English"]["PERUT"] = "PERUT";
	$fieldToolTipsandrologi1["English"]["PERUT"] = "";
	$placeHoldersandrologi1["English"]["PERUT"] = "";
	$fieldLabelsandrologi1["English"]["INGUINAL"] = "INGUINAL";
	$fieldToolTipsandrologi1["English"]["INGUINAL"] = "";
	$placeHoldersandrologi1["English"]["INGUINAL"] = "";
	$fieldLabelsandrologi1["English"]["kubitus__valganus___varus_"] = "kubitus (valganus / varus)";
	$fieldToolTipsandrologi1["English"]["kubitus__valganus___varus_"] = "";
	$placeHoldersandrologi1["English"]["kubitus__valganus___varus_"] = "";
	$fieldLabelsandrologi1["English"]["Rentangan_tangan"] = "Rentangan Tangan";
	$fieldToolTipsandrologi1["English"]["Rentangan_tangan"] = "";
	$placeHoldersandrologi1["English"]["Rentangan_tangan"] = "";
	$fieldLabelsandrologi1["English"]["_Rambut_axilla"] = "Rambut Axilla";
	$fieldToolTipsandrologi1["English"]["_Rambut_axilla"] = "";
	$placeHoldersandrologi1["English"]["_Rambut_axilla"] = "";
	$fieldLabelsandrologi1["English"]["Cor"] = "Cor";
	$fieldToolTipsandrologi1["English"]["Cor"] = "";
	$placeHoldersandrologi1["English"]["Cor"] = "";
	$fieldLabelsandrologi1["English"]["Hepar"] = "Hepar";
	$fieldToolTipsandrologi1["English"]["Hepar"] = "";
	$placeHoldersandrologi1["English"]["Hepar"] = "";
	$fieldLabelsandrologi1["English"]["Pulmo"] = "Pulmo";
	$fieldToolTipsandrologi1["English"]["Pulmo"] = "";
	$placeHoldersandrologi1["English"]["Pulmo"] = "";
	$fieldLabelsandrologi1["English"]["Lien"] = "Lien";
	$fieldToolTipsandrologi1["English"]["Lien"] = "";
	$placeHoldersandrologi1["English"]["Lien"] = "";
	$fieldLabelsandrologi1["English"]["Penis"] = "Penis";
	$fieldToolTipsandrologi1["English"]["Penis"] = "";
	$placeHoldersandrologi1["English"]["Penis"] = "";
	$fieldLabelsandrologi1["English"]["Muara_Urethra"] = "Muara Urethra";
	$fieldToolTipsandrologi1["English"]["Muara_Urethra"] = "";
	$placeHoldersandrologi1["English"]["Muara_Urethra"] = "";
	$fieldLabelsandrologi1["English"]["Skrotum"] = "Skrotum";
	$fieldToolTipsandrologi1["English"]["Skrotum"] = "";
	$placeHoldersandrologi1["English"]["Skrotum"] = "";
	$fieldLabelsandrologi1["English"]["Pubis"] = "Pubis";
	$fieldToolTipsandrologi1["English"]["Pubis"] = "";
	$placeHoldersandrologi1["English"]["Pubis"] = "";
	$fieldLabelsandrologi1["English"]["Pola_Pubis"] = "Pola Pubis";
	$fieldToolTipsandrologi1["English"]["Pola_Pubis"] = "";
	$placeHoldersandrologi1["English"]["Pola_Pubis"] = "";
	$fieldLabelsandrologi1["English"]["Interna_Kanan"] = "Interna Kanan";
	$fieldToolTipsandrologi1["English"]["Interna_Kanan"] = "";
	$placeHoldersandrologi1["English"]["Interna_Kanan"] = "";
	$fieldLabelsandrologi1["English"]["Interna_Kiri"] = "Interna Kiri";
	$fieldToolTipsandrologi1["English"]["Interna_Kiri"] = "";
	$placeHoldersandrologi1["English"]["Interna_Kiri"] = "";
	$fieldLabelsandrologi1["English"]["Posisi_Testis"] = "Posisi Testis";
	$fieldToolTipsandrologi1["English"]["Posisi_Testis"] = "";
	$placeHoldersandrologi1["English"]["Posisi_Testis"] = "";
	$fieldLabelsandrologi1["English"]["Volume"] = "Volume";
	$fieldToolTipsandrologi1["English"]["Volume"] = "";
	$placeHoldersandrologi1["English"]["Volume"] = "";
	$fieldLabelsandrologi1["English"]["Konsistensi"] = "Konsistensi";
	$fieldToolTipsandrologi1["English"]["Konsistensi"] = "";
	$placeHoldersandrologi1["English"]["Konsistensi"] = "";
	$fieldLabelsandrologi1["English"]["Nyeri"] = "Nyeri";
	$fieldToolTipsandrologi1["English"]["Nyeri"] = "";
	$placeHoldersandrologi1["English"]["Nyeri"] = "";
	$fieldLabelsandrologi1["English"]["VAS_DEFERENS"] = "VAS DEFERENS";
	$fieldToolTipsandrologi1["English"]["VAS_DEFERENS"] = "";
	$placeHoldersandrologi1["English"]["VAS_DEFERENS"] = "";
	$fieldLabelsandrologi1["English"]["FUNICULUS"] = "FUNICULUS";
	$fieldToolTipsandrologi1["English"]["FUNICULUS"] = "";
	$placeHoldersandrologi1["English"]["FUNICULUS"] = "";
	$fieldLabelsandrologi1["English"]["EPIDIDYMIS_Ukuran"] = "EPIDIDYMIS Ukuran";
	$fieldToolTipsandrologi1["English"]["EPIDIDYMIS_Ukuran"] = "";
	$placeHoldersandrologi1["English"]["EPIDIDYMIS_Ukuran"] = "";
	$fieldLabelsandrologi1["English"]["EPIDIDYMIS_Konsistensi"] = "EPIDIDYMIS Konsistensi";
	$fieldToolTipsandrologi1["English"]["EPIDIDYMIS_Konsistensi"] = "";
	$placeHoldersandrologi1["English"]["EPIDIDYMIS_Konsistensi"] = "";
	$fieldLabelsandrologi1["English"]["EPIDIDYMIS_Kistik"] = "EPIDIDYMIS Kistik";
	$fieldToolTipsandrologi1["English"]["EPIDIDYMIS_Kistik"] = "";
	$placeHoldersandrologi1["English"]["EPIDIDYMIS_Kistik"] = "";
	$fieldLabelsandrologi1["English"]["EPIDIDYMIS_Nyeri"] = "EPIDIDYMIS Nyeri";
	$fieldToolTipsandrologi1["English"]["EPIDIDYMIS_Nyeri"] = "";
	$placeHoldersandrologi1["English"]["EPIDIDYMIS_Nyeri"] = "";
	$fieldLabelsandrologi1["English"]["EPIDIDYMIS_Permukaan"] = "EPIDIDYMIS Permukaan";
	$fieldToolTipsandrologi1["English"]["EPIDIDYMIS_Permukaan"] = "";
	$placeHoldersandrologi1["English"]["EPIDIDYMIS_Permukaan"] = "";
	$fieldLabelsandrologi1["English"]["VARIKOKEL"] = "VARIKOKEL";
	$fieldToolTipsandrologi1["English"]["VARIKOKEL"] = "";
	$placeHoldersandrologi1["English"]["VARIKOKEL"] = "";
	$fieldLabelsandrologi1["English"]["Prostat"] = "Prostat";
	$fieldToolTipsandrologi1["English"]["Prostat"] = "";
	$placeHoldersandrologi1["English"]["Prostat"] = "";
	$fieldLabelsandrologi1["English"]["V_Seminalis"] = "V Seminalis";
	$fieldToolTipsandrologi1["English"]["V_Seminalis"] = "";
	$placeHoldersandrologi1["English"]["V_Seminalis"] = "";
	$fieldLabelsandrologi1["English"]["lab_ke"] = "Lab Ke";
	$fieldToolTipsandrologi1["English"]["lab_ke"] = "";
	$placeHoldersandrologi1["English"]["lab_ke"] = "";
	$fieldLabelsandrologi1["English"]["lab_tgl"] = "Lab Tgl";
	$fieldToolTipsandrologi1["English"]["lab_tgl"] = "";
	$placeHoldersandrologi1["English"]["lab_tgl"] = "";
	$fieldLabelsandrologi1["English"]["no_reg_lab"] = "No Reg Lab";
	$fieldToolTipsandrologi1["English"]["no_reg_lab"] = "";
	$placeHoldersandrologi1["English"]["no_reg_lab"] = "";
	$fieldLabelsandrologi1["English"]["kesan_lab"] = "Kesan Lab";
	$fieldToolTipsandrologi1["English"]["kesan_lab"] = "";
	$placeHoldersandrologi1["English"]["kesan_lab"] = "";
	$fieldLabelsandrologi1["English"]["Diagnosis_Banding"] = "Diagnosis Banding";
	$fieldToolTipsandrologi1["English"]["Diagnosis_Banding"] = "";
	$placeHoldersandrologi1["English"]["Diagnosis_Banding"] = "";
	$fieldLabelsandrologi1["English"]["Rencana"] = "Rencana";
	$fieldToolTipsandrologi1["English"]["Rencana"] = "";
	$placeHoldersandrologi1["English"]["Rencana"] = "";
	$fieldLabelsandrologi1["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsandrologi1["English"]["id_pasien"] = "";
	$placeHoldersandrologi1["English"]["id_pasien"] = "";
	$fieldLabelsandrologi1["English"]["id_user"] = "Id User";
	$fieldToolTipsandrologi1["English"]["id_user"] = "";
	$placeHoldersandrologi1["English"]["id_user"] = "";
	$fieldLabelsandrologi1["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipsandrologi1["English"]["Nomor_Rm"] = "";
	$placeHoldersandrologi1["English"]["Nomor_Rm"] = "";
	$fieldLabelsandrologi1["English"]["id"] = "Id";
	$fieldToolTipsandrologi1["English"]["id"] = "";
	$placeHoldersandrologi1["English"]["id"] = "";
	$fieldLabelsandrologi1["English"]["name"] = "Name";
	$fieldToolTipsandrologi1["English"]["name"] = "";
	$placeHoldersandrologi1["English"]["name"] = "";
	$fieldLabelsandrologi1["English"]["username"] = "Username";
	$fieldToolTipsandrologi1["English"]["username"] = "";
	$placeHoldersandrologi1["English"]["username"] = "";
	$fieldLabelsandrologi1["English"]["email"] = "Email";
	$fieldToolTipsandrologi1["English"]["email"] = "";
	$placeHoldersandrologi1["English"]["email"] = "";
	$fieldLabelsandrologi1["English"]["email_verified_at"] = "Email Verified At";
	$fieldToolTipsandrologi1["English"]["email_verified_at"] = "";
	$placeHoldersandrologi1["English"]["email_verified_at"] = "";
	$fieldLabelsandrologi1["English"]["password"] = "Password";
	$fieldToolTipsandrologi1["English"]["password"] = "";
	$placeHoldersandrologi1["English"]["password"] = "";
	$fieldLabelsandrologi1["English"]["two_factor_secret"] = "Two Factor Secret";
	$fieldToolTipsandrologi1["English"]["two_factor_secret"] = "";
	$placeHoldersandrologi1["English"]["two_factor_secret"] = "";
	$fieldLabelsandrologi1["English"]["two_factor_recovery_codes"] = "Two Factor Recovery Codes";
	$fieldToolTipsandrologi1["English"]["two_factor_recovery_codes"] = "";
	$placeHoldersandrologi1["English"]["two_factor_recovery_codes"] = "";
	$fieldLabelsandrologi1["English"]["level"] = "Level";
	$fieldToolTipsandrologi1["English"]["level"] = "";
	$placeHoldersandrologi1["English"]["level"] = "";
	$fieldLabelsandrologi1["English"]["remember_token"] = "Remember Token";
	$fieldToolTipsandrologi1["English"]["remember_token"] = "";
	$placeHoldersandrologi1["English"]["remember_token"] = "";
	$fieldLabelsandrologi1["English"]["profile_photo_path"] = "Profile Photo Path";
	$fieldToolTipsandrologi1["English"]["profile_photo_path"] = "";
	$placeHoldersandrologi1["English"]["profile_photo_path"] = "";
	$fieldLabelsandrologi1["English"]["created_at"] = "Created At";
	$fieldToolTipsandrologi1["English"]["created_at"] = "";
	$placeHoldersandrologi1["English"]["created_at"] = "";
	$fieldLabelsandrologi1["English"]["updated_at"] = "Updated At";
	$fieldToolTipsandrologi1["English"]["updated_at"] = "";
	$placeHoldersandrologi1["English"]["updated_at"] = "";
	$fieldLabelsandrologi1["English"]["Id_Pasien1"] = "Id Pasien1";
	$fieldToolTipsandrologi1["English"]["Id_Pasien1"] = "";
	$placeHoldersandrologi1["English"]["Id_Pasien1"] = "";
	$fieldLabelsandrologi1["English"]["Nama"] = "Nama";
	$fieldToolTipsandrologi1["English"]["Nama"] = "";
	$placeHoldersandrologi1["English"]["Nama"] = "";
	$fieldLabelsandrologi1["English"]["Alamat"] = "Alamat";
	$fieldToolTipsandrologi1["English"]["Alamat"] = "";
	$placeHoldersandrologi1["English"]["Alamat"] = "";
	$fieldLabelsandrologi1["English"]["Umur"] = "Umur";
	$fieldToolTipsandrologi1["English"]["Umur"] = "";
	$placeHoldersandrologi1["English"]["Umur"] = "";
	$fieldLabelsandrologi1["English"]["Status_Perkawinan"] = "Status Perkawinan";
	$fieldToolTipsandrologi1["English"]["Status_Perkawinan"] = "";
	$placeHoldersandrologi1["English"]["Status_Perkawinan"] = "";
	$fieldLabelsandrologi1["English"]["Jenis_Kelamin"] = "Jenis Kelamin";
	$fieldToolTipsandrologi1["English"]["Jenis_Kelamin"] = "";
	$placeHoldersandrologi1["English"]["Jenis_Kelamin"] = "";
	$fieldLabelsandrologi1["English"]["Suku_Ras"] = "Suku Ras";
	$fieldToolTipsandrologi1["English"]["Suku_Ras"] = "";
	$placeHoldersandrologi1["English"]["Suku_Ras"] = "";
	$fieldLabelsandrologi1["English"]["Agama"] = "Agama";
	$fieldToolTipsandrologi1["English"]["Agama"] = "";
	$placeHoldersandrologi1["English"]["Agama"] = "";
	$fieldLabelsandrologi1["English"]["Kerja"] = "Kerja";
	$fieldToolTipsandrologi1["English"]["Kerja"] = "";
	$placeHoldersandrologi1["English"]["Kerja"] = "";
	$fieldLabelsandrologi1["English"]["Tanggal_MRS"] = "Tanggal MRS";
	$fieldToolTipsandrologi1["English"]["Tanggal_MRS"] = "";
	$placeHoldersandrologi1["English"]["Tanggal_MRS"] = "";
	if (count($fieldToolTipsandrologi1["English"]))
		$tdataandrologi1[".isUseToolTips"] = true;
}


	$tdataandrologi1[".NCSearch"] = true;



$tdataandrologi1[".shortTableName"] = "andrologi1";
$tdataandrologi1[".nSecOptions"] = 0;

$tdataandrologi1[".mainTableOwnerID"] = "";
$tdataandrologi1[".entityType"] = 1;
$tdataandrologi1[".connId"] = "newrm_at_localhost";


$tdataandrologi1[".strOriginalTableName"] = "andrologi";

	



$tdataandrologi1[".showAddInPopup"] = false;

$tdataandrologi1[".showEditInPopup"] = false;

$tdataandrologi1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataandrologi1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataandrologi1[".listAjax"] = false;
//	temporary
$tdataandrologi1[".listAjax"] = false;

	$tdataandrologi1[".audit"] = false;

	$tdataandrologi1[".locking"] = false;


$pages = $tdataandrologi1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataandrologi1[".edit"] = true;
	$tdataandrologi1[".afterEditAction"] = 1;
	$tdataandrologi1[".closePopupAfterEdit"] = 1;
	$tdataandrologi1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataandrologi1[".add"] = true;
$tdataandrologi1[".afterAddAction"] = 1;
$tdataandrologi1[".closePopupAfterAdd"] = 1;
$tdataandrologi1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataandrologi1[".list"] = true;
}



$tdataandrologi1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataandrologi1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataandrologi1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataandrologi1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataandrologi1[".printFriendly"] = true;
}



$tdataandrologi1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataandrologi1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataandrologi1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataandrologi1[".isUseAjaxSuggest"] = true;

$tdataandrologi1[".rowHighlite"] = true;





$tdataandrologi1[".ajaxCodeSnippetAdded"] = false;

$tdataandrologi1[".buttonsAdded"] = false;

$tdataandrologi1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataandrologi1[".isUseTimeForSearch"] = false;


$tdataandrologi1[".badgeColor"] = "2F4F4F";


$tdataandrologi1[".allSearchFields"] = array();
$tdataandrologi1[".filterFields"] = array();
$tdataandrologi1[".requiredSearchFields"] = array();

$tdataandrologi1[".googleLikeFields"] = array();
$tdataandrologi1[".googleLikeFields"][] = "id_andrologi";
$tdataandrologi1[".googleLikeFields"][] = "lama_perkawinan_1";
$tdataandrologi1[".googleLikeFields"][] = "lama_perkawinan_2";
$tdataandrologi1[".googleLikeFields"][] = "lama_perkawinan_3";
$tdataandrologi1[".googleLikeFields"][] = "anak_perkawinan_1";
$tdataandrologi1[".googleLikeFields"][] = "anak_perkawinan_2";
$tdataandrologi1[".googleLikeFields"][] = "anak_perkawinan_3";
$tdataandrologi1[".googleLikeFields"][] = "Libido";
$tdataandrologi1[".googleLikeFields"][] = "Frekwensi_koitus";
$tdataandrologi1[".googleLikeFields"][] = "Dispareuni";
$tdataandrologi1[".googleLikeFields"][] = "Orgasmus";
$tdataandrologi1[".googleLikeFields"][] = "Reflux_Post_Coital";
$tdataandrologi1[".googleLikeFields"][] = "Ejakulasi_Dini";
$tdataandrologi1[".googleLikeFields"][] = "Ejakulasi_Nocturnal";
$tdataandrologi1[".googleLikeFields"][] = "Ejakulasi_Nyeri";
$tdataandrologi1[".googleLikeFields"][] = "Puber";
$tdataandrologi1[".googleLikeFields"][] = "Masturbasi";
$tdataandrologi1[".googleLikeFields"][] = "Koitus_pranikah";
$tdataandrologi1[".googleLikeFields"][] = "Lain_lain";
$tdataandrologi1[".googleLikeFields"][] = "Peny_Hub_Seksual";
$tdataandrologi1[".googleLikeFields"][] = "Hernia";
$tdataandrologi1[".googleLikeFields"][] = "Hidrokel";
$tdataandrologi1[".googleLikeFields"][] = "Trauma";
$tdataandrologi1[".googleLikeFields"][] = "Kelainan_bawaan";
$tdataandrologi1[".googleLikeFields"][] = "Penyakit_Paru_kronis";
$tdataandrologi1[".googleLikeFields"][] = "Penyakit_hidung_kronis";
$tdataandrologi1[".googleLikeFields"][] = "Tuberkulosa";
$tdataandrologi1[".googleLikeFields"][] = "Diabetes_mellitus";
$tdataandrologi1[".googleLikeFields"][] = "Gondongan_parotitis";
$tdataandrologi1[".googleLikeFields"][] = "Penyakit_Saraf";
$tdataandrologi1[".googleLikeFields"][] = "Panas_dlm_6_bln";
$tdataandrologi1[".googleLikeFields"][] = "Status_keluarga";
$tdataandrologi1[".googleLikeFields"][] = "Saudara_kandung_suami";
$tdataandrologi1[".googleLikeFields"][] = "Saudara_kandung_istri";
$tdataandrologi1[".googleLikeFields"][] = "Lingkungan_sosial";
$tdataandrologi1[".googleLikeFields"][] = "Pekerjaan";
$tdataandrologi1[".googleLikeFields"][] = "Keluarga";
$tdataandrologi1[".googleLikeFields"][] = "Rokok";
$tdataandrologi1[".googleLikeFields"][] = "Alkohol";
$tdataandrologi1[".googleLikeFields"][] = "Obat";
$tdataandrologi1[".googleLikeFields"][] = "Celana ketat";
$tdataandrologi1[".googleLikeFields"][] = "Bahan_kimia";
$tdataandrologi1[".googleLikeFields"][] = "KU";
$tdataandrologi1[".googleLikeFields"][] = "TB";
$tdataandrologi1[".googleLikeFields"][] = "CM";
$tdataandrologi1[".googleLikeFields"][] = "BB";
$tdataandrologi1[".googleLikeFields"][] = "KG";
$tdataandrologi1[".googleLikeFields"][] = "Tensi";
$tdataandrologi1[".googleLikeFields"][] = "Pertumbuhan_distribusi_rambut";
$tdataandrologi1[".googleLikeFields"][] = "Kumis";
$tdataandrologi1[".googleLikeFields"][] = "Jenggot";
$tdataandrologi1[".googleLikeFields"][] = "Mata";
$tdataandrologi1[".googleLikeFields"][] = "Hidung";
$tdataandrologi1[".googleLikeFields"][] = "Leher";
$tdataandrologi1[".googleLikeFields"][] = "Dada";
$tdataandrologi1[".googleLikeFields"][] = "ginecomastia";
$tdataandrologi1[".googleLikeFields"][] = "PERUT";
$tdataandrologi1[".googleLikeFields"][] = "INGUINAL";
$tdataandrologi1[".googleLikeFields"][] = "kubitus (valganus / varus)";
$tdataandrologi1[".googleLikeFields"][] = "Rentangan tangan";
$tdataandrologi1[".googleLikeFields"][] = " Rambut axilla";
$tdataandrologi1[".googleLikeFields"][] = "Cor";
$tdataandrologi1[".googleLikeFields"][] = "Hepar";
$tdataandrologi1[".googleLikeFields"][] = "Pulmo";
$tdataandrologi1[".googleLikeFields"][] = "Lien";
$tdataandrologi1[".googleLikeFields"][] = "Penis";
$tdataandrologi1[".googleLikeFields"][] = "Muara_Urethra";
$tdataandrologi1[".googleLikeFields"][] = "Skrotum";
$tdataandrologi1[".googleLikeFields"][] = "Pubis";
$tdataandrologi1[".googleLikeFields"][] = "Pola_Pubis";
$tdataandrologi1[".googleLikeFields"][] = "Interna_Kanan";
$tdataandrologi1[".googleLikeFields"][] = "Interna_Kiri";
$tdataandrologi1[".googleLikeFields"][] = "Posisi_Testis";
$tdataandrologi1[".googleLikeFields"][] = "Volume";
$tdataandrologi1[".googleLikeFields"][] = "Konsistensi";
$tdataandrologi1[".googleLikeFields"][] = "Nyeri";
$tdataandrologi1[".googleLikeFields"][] = "VAS_DEFERENS";
$tdataandrologi1[".googleLikeFields"][] = "FUNICULUS";
$tdataandrologi1[".googleLikeFields"][] = "EPIDIDYMIS_Ukuran";
$tdataandrologi1[".googleLikeFields"][] = "EPIDIDYMIS_Konsistensi";
$tdataandrologi1[".googleLikeFields"][] = "EPIDIDYMIS_Kistik";
$tdataandrologi1[".googleLikeFields"][] = "EPIDIDYMIS_Nyeri";
$tdataandrologi1[".googleLikeFields"][] = "EPIDIDYMIS_Permukaan";
$tdataandrologi1[".googleLikeFields"][] = "VARIKOKEL";
$tdataandrologi1[".googleLikeFields"][] = "Prostat";
$tdataandrologi1[".googleLikeFields"][] = "V_Seminalis";
$tdataandrologi1[".googleLikeFields"][] = "lab_ke";
$tdataandrologi1[".googleLikeFields"][] = "lab_tgl";
$tdataandrologi1[".googleLikeFields"][] = "no_reg_lab";
$tdataandrologi1[".googleLikeFields"][] = "kesan_lab";
$tdataandrologi1[".googleLikeFields"][] = "Diagnosis_Banding";
$tdataandrologi1[".googleLikeFields"][] = "Rencana";
$tdataandrologi1[".googleLikeFields"][] = "id_pasien";
$tdataandrologi1[".googleLikeFields"][] = "id_user";
$tdataandrologi1[".googleLikeFields"][] = "Nomor_Rm";
$tdataandrologi1[".googleLikeFields"][] = "id";
$tdataandrologi1[".googleLikeFields"][] = "name";
$tdataandrologi1[".googleLikeFields"][] = "username";
$tdataandrologi1[".googleLikeFields"][] = "email";
$tdataandrologi1[".googleLikeFields"][] = "email_verified_at";
$tdataandrologi1[".googleLikeFields"][] = "password";
$tdataandrologi1[".googleLikeFields"][] = "two_factor_secret";
$tdataandrologi1[".googleLikeFields"][] = "two_factor_recovery_codes";
$tdataandrologi1[".googleLikeFields"][] = "level";
$tdataandrologi1[".googleLikeFields"][] = "remember_token";
$tdataandrologi1[".googleLikeFields"][] = "profile_photo_path";
$tdataandrologi1[".googleLikeFields"][] = "created_at";
$tdataandrologi1[".googleLikeFields"][] = "updated_at";
$tdataandrologi1[".googleLikeFields"][] = "Id_Pasien1";
$tdataandrologi1[".googleLikeFields"][] = "Nama";
$tdataandrologi1[".googleLikeFields"][] = "Alamat";
$tdataandrologi1[".googleLikeFields"][] = "Umur";
$tdataandrologi1[".googleLikeFields"][] = "Status_Perkawinan";
$tdataandrologi1[".googleLikeFields"][] = "Jenis Kelamin";
$tdataandrologi1[".googleLikeFields"][] = "Suku_Ras";
$tdataandrologi1[".googleLikeFields"][] = "Agama";
$tdataandrologi1[".googleLikeFields"][] = "Kerja";
$tdataandrologi1[".googleLikeFields"][] = "Tanggal_MRS";



$tdataandrologi1[".tableType"] = "list";

$tdataandrologi1[".printerPageOrientation"] = 0;
$tdataandrologi1[".nPrinterPageScale"] = 100;

$tdataandrologi1[".nPrinterSplitRecords"] = 40;

$tdataandrologi1[".geocodingEnabled"] = false;










$tdataandrologi1[".pageSize"] = 20;

$tdataandrologi1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataandrologi1[".strOrderBy"] = $tstrOrderBy;

$tdataandrologi1[".orderindexes"] = array();


$tdataandrologi1[".sqlHead"] = "SELECT andrologi.*,  u.*,  p.Id_Pasien AS Id_Pasien1,  p.Nama,  p.Alamat,  p.Umur,  p.Status_Perkawinan,  p.`Jenis Kelamin`,  p.Suku_Ras,  p.Agama,  p.Pekerjaan AS Kerja,  p.Tanggal_MRS";
$tdataandrologi1[".sqlFrom"] = "FROM andrologi   JOIN identitas_pasien AS p ON andrologi.id_pasien = p.Id_Pasien  JOIN users AS u ON andrologi.Id_User = u.id";
$tdataandrologi1[".sqlWhereExpr"] = "";
$tdataandrologi1[".sqlTail"] = "";

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
$tdataandrologi1[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataandrologi1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataandrologi1[".arrGroupsPerPage"] = $arrGPP;

$tdataandrologi1[".highlightSearchResults"] = true;

$tableKeysandrologi1 = array();
$tableKeysandrologi1[] = "id_andrologi";
$tdataandrologi1[".Keys"] = $tableKeysandrologi1;


$tdataandrologi1[".hideMobileList"] = array();




//	id_andrologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_andrologi";
	$fdata["GoodName"] = "id_andrologi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","id_andrologi");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_andrologi";

	
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


	$tdataandrologi1["id_andrologi"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "id_andrologi";
//	lama_perkawinan_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lama_perkawinan_1";
	$fdata["GoodName"] = "lama_perkawinan_1";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","lama_perkawinan_1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lama_perkawinan_1";

	
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


	$tdataandrologi1["lama_perkawinan_1"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "lama_perkawinan_1";
//	lama_perkawinan_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "lama_perkawinan_2";
	$fdata["GoodName"] = "lama_perkawinan_2";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","lama_perkawinan_2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lama_perkawinan_2";

	
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


	$tdataandrologi1["lama_perkawinan_2"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "lama_perkawinan_2";
//	lama_perkawinan_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "lama_perkawinan_3";
	$fdata["GoodName"] = "lama_perkawinan_3";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","lama_perkawinan_3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lama_perkawinan_3";

	
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


	$tdataandrologi1["lama_perkawinan_3"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "lama_perkawinan_3";
//	anak_perkawinan_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "anak_perkawinan_1";
	$fdata["GoodName"] = "anak_perkawinan_1";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","anak_perkawinan_1");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "anak_perkawinan_1";

	
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


	$tdataandrologi1["anak_perkawinan_1"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "anak_perkawinan_1";
//	anak_perkawinan_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "anak_perkawinan_2";
	$fdata["GoodName"] = "anak_perkawinan_2";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","anak_perkawinan_2");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "anak_perkawinan_2";

	
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


	$tdataandrologi1["anak_perkawinan_2"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "anak_perkawinan_2";
//	anak_perkawinan_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "anak_perkawinan_3";
	$fdata["GoodName"] = "anak_perkawinan_3";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","anak_perkawinan_3");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "anak_perkawinan_3";

	
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


	$tdataandrologi1["anak_perkawinan_3"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "anak_perkawinan_3";
//	Libido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Libido";
	$fdata["GoodName"] = "Libido";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Libido");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Libido";

	
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


	$tdataandrologi1["Libido"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Libido";
//	Frekwensi_koitus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Frekwensi_koitus";
	$fdata["GoodName"] = "Frekwensi_koitus";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Frekwensi_koitus");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Frekwensi_koitus";

	
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


	$tdataandrologi1["Frekwensi_koitus"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Frekwensi_koitus";
//	Dispareuni
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Dispareuni";
	$fdata["GoodName"] = "Dispareuni";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Dispareuni");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Dispareuni";

	
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


	$tdataandrologi1["Dispareuni"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Dispareuni";
//	Orgasmus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Orgasmus";
	$fdata["GoodName"] = "Orgasmus";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Orgasmus");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Orgasmus";

	
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


	$tdataandrologi1["Orgasmus"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Orgasmus";
//	Reflux_Post_Coital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Reflux_Post_Coital";
	$fdata["GoodName"] = "Reflux_Post_Coital";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Reflux_Post_Coital");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Reflux_Post_Coital";

	
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


	$tdataandrologi1["Reflux_Post_Coital"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Reflux_Post_Coital";
//	Ejakulasi_Dini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Ejakulasi_Dini";
	$fdata["GoodName"] = "Ejakulasi_Dini";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Ejakulasi_Dini");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ejakulasi_Dini";

	
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


	$tdataandrologi1["Ejakulasi_Dini"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Ejakulasi_Dini";
//	Ejakulasi_Nocturnal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Ejakulasi_Nocturnal";
	$fdata["GoodName"] = "Ejakulasi_Nocturnal";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Ejakulasi_Nocturnal");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ejakulasi_Nocturnal";

	
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


	$tdataandrologi1["Ejakulasi_Nocturnal"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Ejakulasi_Nocturnal";
//	Ejakulasi_Nyeri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Ejakulasi_Nyeri";
	$fdata["GoodName"] = "Ejakulasi_Nyeri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Ejakulasi_Nyeri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ejakulasi_Nyeri";

	
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


	$tdataandrologi1["Ejakulasi_Nyeri"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Ejakulasi_Nyeri";
//	Puber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Puber";
	$fdata["GoodName"] = "Puber";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Puber");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Puber";

	
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


	$tdataandrologi1["Puber"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Puber";
//	Masturbasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Masturbasi";
	$fdata["GoodName"] = "Masturbasi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Masturbasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Masturbasi";

	
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


	$tdataandrologi1["Masturbasi"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Masturbasi";
//	Koitus_pranikah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Koitus_pranikah";
	$fdata["GoodName"] = "Koitus_pranikah";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Koitus_pranikah");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Koitus_pranikah";

	
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


	$tdataandrologi1["Koitus_pranikah"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Koitus_pranikah";
//	Lain_lain
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Lain_lain";
	$fdata["GoodName"] = "Lain_lain";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Lain_lain");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lain_lain";

	
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


	$tdataandrologi1["Lain_lain"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Lain_lain";
//	Peny_Hub_Seksual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Peny_Hub_Seksual";
	$fdata["GoodName"] = "Peny_Hub_Seksual";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Peny_Hub_Seksual");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Peny_Hub_Seksual";

	
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


	$tdataandrologi1["Peny_Hub_Seksual"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Peny_Hub_Seksual";
//	Hernia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Hernia";
	$fdata["GoodName"] = "Hernia";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Hernia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hernia";

	
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


	$tdataandrologi1["Hernia"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Hernia";
//	Hidrokel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Hidrokel";
	$fdata["GoodName"] = "Hidrokel";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Hidrokel");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hidrokel";

	
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


	$tdataandrologi1["Hidrokel"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Hidrokel";
//	Trauma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Trauma";
	$fdata["GoodName"] = "Trauma";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Trauma");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Trauma";

	
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


	$tdataandrologi1["Trauma"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Trauma";
//	Kelainan_bawaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Kelainan_bawaan";
	$fdata["GoodName"] = "Kelainan_bawaan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Kelainan_bawaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kelainan_bawaan";

	
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


	$tdataandrologi1["Kelainan_bawaan"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Kelainan_bawaan";
//	Penyakit_Paru_kronis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Penyakit_Paru_kronis";
	$fdata["GoodName"] = "Penyakit_Paru_kronis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Penyakit_Paru_kronis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penyakit_Paru_kronis";

	
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


	$tdataandrologi1["Penyakit_Paru_kronis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Penyakit_Paru_kronis";
//	Penyakit_hidung_kronis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Penyakit_hidung_kronis";
	$fdata["GoodName"] = "Penyakit_hidung_kronis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Penyakit_hidung_kronis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penyakit_hidung_kronis";

	
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


	$tdataandrologi1["Penyakit_hidung_kronis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Penyakit_hidung_kronis";
//	Tuberkulosa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Tuberkulosa";
	$fdata["GoodName"] = "Tuberkulosa";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Tuberkulosa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tuberkulosa";

	
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


	$tdataandrologi1["Tuberkulosa"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Tuberkulosa";
//	Diabetes_mellitus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Diabetes_mellitus";
	$fdata["GoodName"] = "Diabetes_mellitus";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Diabetes_mellitus");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diabetes_mellitus";

	
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


	$tdataandrologi1["Diabetes_mellitus"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Diabetes_mellitus";
//	Gondongan_parotitis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Gondongan_parotitis";
	$fdata["GoodName"] = "Gondongan_parotitis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Gondongan_parotitis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gondongan_parotitis";

	
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


	$tdataandrologi1["Gondongan_parotitis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Gondongan_parotitis";
//	Penyakit_Saraf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Penyakit_Saraf";
	$fdata["GoodName"] = "Penyakit_Saraf";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Penyakit_Saraf");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penyakit_Saraf";

	
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


	$tdataandrologi1["Penyakit_Saraf"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Penyakit_Saraf";
//	Panas_dlm_6_bln
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Panas_dlm_6_bln";
	$fdata["GoodName"] = "Panas_dlm_6_bln";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Panas_dlm_6_bln");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Panas_dlm_6_bln";

	
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


	$tdataandrologi1["Panas_dlm_6_bln"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Panas_dlm_6_bln";
//	Status_keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Status_keluarga";
	$fdata["GoodName"] = "Status_keluarga";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Status_keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Status_keluarga";

	
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


	$tdataandrologi1["Status_keluarga"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Status_keluarga";
//	Saudara_kandung_suami
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Saudara_kandung_suami";
	$fdata["GoodName"] = "Saudara_kandung_suami";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Saudara_kandung_suami");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Saudara_kandung_suami";

	
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


	$tdataandrologi1["Saudara_kandung_suami"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Saudara_kandung_suami";
//	Saudara_kandung_istri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Saudara_kandung_istri";
	$fdata["GoodName"] = "Saudara_kandung_istri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Saudara_kandung_istri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Saudara_kandung_istri";

	
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


	$tdataandrologi1["Saudara_kandung_istri"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Saudara_kandung_istri";
//	Lingkungan_sosial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Lingkungan_sosial";
	$fdata["GoodName"] = "Lingkungan_sosial";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Lingkungan_sosial");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lingkungan_sosial";

	
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


	$tdataandrologi1["Lingkungan_sosial"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Lingkungan_sosial";
//	Pekerjaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Pekerjaan";
	$fdata["GoodName"] = "Pekerjaan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Pekerjaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pekerjaan";

	
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


	$tdataandrologi1["Pekerjaan"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Pekerjaan";
//	Keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Keluarga";
	$fdata["GoodName"] = "Keluarga";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keluarga";

	
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


	$tdataandrologi1["Keluarga"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Keluarga";
//	Rokok
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Rokok";
	$fdata["GoodName"] = "Rokok";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Rokok");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rokok";

	
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


	$tdataandrologi1["Rokok"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Rokok";
//	Alkohol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Alkohol";
	$fdata["GoodName"] = "Alkohol";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Alkohol");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Alkohol";

	
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


	$tdataandrologi1["Alkohol"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Alkohol";
//	Obat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Obat";
	$fdata["GoodName"] = "Obat";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Obat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Obat";

	
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


	$tdataandrologi1["Obat"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Obat";
//	Celana ketat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Celana ketat";
	$fdata["GoodName"] = "Celana_ketat";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Celana_ketat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Celana ketat";

	
		$fdata["FullName"] = "Celana ketat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["Celana ketat"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Celana ketat";
//	Bahan_kimia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Bahan_kimia";
	$fdata["GoodName"] = "Bahan_kimia";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Bahan_kimia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Bahan_kimia";

	
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


	$tdataandrologi1["Bahan_kimia"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Bahan_kimia";
//	KU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "KU";
	$fdata["GoodName"] = "KU";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","KU");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "KU";

	
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


	$tdataandrologi1["KU"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "KU";
//	TB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "TB";
	$fdata["GoodName"] = "TB";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","TB");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "TB";

	
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


	$tdataandrologi1["TB"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "TB";
//	CM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "CM";
	$fdata["GoodName"] = "CM";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","CM");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "CM";

	
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


	$tdataandrologi1["CM"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "CM";
//	BB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "BB";
	$fdata["GoodName"] = "BB";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","BB");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "BB";

	
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


	$tdataandrologi1["BB"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "BB";
//	KG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "KG";
	$fdata["GoodName"] = "KG";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","KG");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "KG";

	
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


	$tdataandrologi1["KG"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "KG";
//	Tensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Tensi";
	$fdata["GoodName"] = "Tensi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Tensi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tensi";

	
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


	$tdataandrologi1["Tensi"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Tensi";
//	Pertumbuhan_distribusi_rambut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Pertumbuhan_distribusi_rambut";
	$fdata["GoodName"] = "Pertumbuhan_distribusi_rambut";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Pertumbuhan_distribusi_rambut");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pertumbuhan_distribusi_rambut";

	
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


	$tdataandrologi1["Pertumbuhan_distribusi_rambut"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Pertumbuhan_distribusi_rambut";
//	Kumis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Kumis";
	$fdata["GoodName"] = "Kumis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Kumis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kumis";

	
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


	$tdataandrologi1["Kumis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Kumis";
//	Jenggot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Jenggot";
	$fdata["GoodName"] = "Jenggot";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Jenggot");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Jenggot";

	
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


	$tdataandrologi1["Jenggot"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Jenggot";
//	Mata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Mata";
	$fdata["GoodName"] = "Mata";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Mata");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mata";

	
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


	$tdataandrologi1["Mata"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Mata";
//	Hidung
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Hidung";
	$fdata["GoodName"] = "Hidung";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Hidung");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hidung";

	
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


	$tdataandrologi1["Hidung"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Hidung";
//	Leher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Leher";
	$fdata["GoodName"] = "Leher";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Leher");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Leher";

	
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


	$tdataandrologi1["Leher"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Leher";
//	Dada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Dada";
	$fdata["GoodName"] = "Dada";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Dada");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Dada";

	
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


	$tdataandrologi1["Dada"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Dada";
//	ginecomastia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "ginecomastia";
	$fdata["GoodName"] = "ginecomastia";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","ginecomastia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "ginecomastia";

	
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


	$tdataandrologi1["ginecomastia"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "ginecomastia";
//	PERUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "PERUT";
	$fdata["GoodName"] = "PERUT";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","PERUT");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "PERUT";

	
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


	$tdataandrologi1["PERUT"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "PERUT";
//	INGUINAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "INGUINAL";
	$fdata["GoodName"] = "INGUINAL";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","INGUINAL");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "INGUINAL";

	
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


	$tdataandrologi1["INGUINAL"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "INGUINAL";
//	kubitus (valganus / varus)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "kubitus (valganus / varus)";
	$fdata["GoodName"] = "kubitus__valganus___varus_";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","kubitus__valganus___varus_");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "kubitus (valganus / varus)";

	
		$fdata["FullName"] = "kubitus (valganus / varus)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["kubitus (valganus / varus)"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "kubitus (valganus / varus)";
//	Rentangan tangan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Rentangan tangan";
	$fdata["GoodName"] = "Rentangan_tangan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Rentangan_tangan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rentangan tangan";

	
		$fdata["FullName"] = "Rentangan tangan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["Rentangan tangan"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Rentangan tangan";
//	 Rambut axilla
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = " Rambut axilla";
	$fdata["GoodName"] = "_Rambut_axilla";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","_Rambut_axilla");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = " Rambut axilla";

	
		$fdata["FullName"] = " Rambut axilla";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1[" Rambut axilla"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = " Rambut axilla";
//	Cor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Cor";
	$fdata["GoodName"] = "Cor";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Cor");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Cor";

	
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


	$tdataandrologi1["Cor"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Cor";
//	Hepar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Hepar";
	$fdata["GoodName"] = "Hepar";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Hepar");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hepar";

	
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


	$tdataandrologi1["Hepar"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Hepar";
//	Pulmo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Pulmo";
	$fdata["GoodName"] = "Pulmo";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Pulmo");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pulmo";

	
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


	$tdataandrologi1["Pulmo"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Pulmo";
//	Lien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Lien";
	$fdata["GoodName"] = "Lien";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Lien");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lien";

	
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


	$tdataandrologi1["Lien"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Lien";
//	Penis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Penis";
	$fdata["GoodName"] = "Penis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Penis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penis";

	
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


	$tdataandrologi1["Penis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Penis";
//	Muara_Urethra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Muara_Urethra";
	$fdata["GoodName"] = "Muara_Urethra";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Muara_Urethra");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Muara_Urethra";

	
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


	$tdataandrologi1["Muara_Urethra"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Muara_Urethra";
//	Skrotum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Skrotum";
	$fdata["GoodName"] = "Skrotum";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Skrotum");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Skrotum";

	
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


	$tdataandrologi1["Skrotum"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Skrotum";
//	Pubis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Pubis";
	$fdata["GoodName"] = "Pubis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Pubis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pubis";

	
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


	$tdataandrologi1["Pubis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Pubis";
//	Pola_Pubis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Pola_Pubis";
	$fdata["GoodName"] = "Pola_Pubis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Pola_Pubis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pola_Pubis";

	
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


	$tdataandrologi1["Pola_Pubis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Pola_Pubis";
//	Interna_Kanan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Interna_Kanan";
	$fdata["GoodName"] = "Interna_Kanan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Interna_Kanan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Interna_Kanan";

	
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


	$tdataandrologi1["Interna_Kanan"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Interna_Kanan";
//	Interna_Kiri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "Interna_Kiri";
	$fdata["GoodName"] = "Interna_Kiri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Interna_Kiri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Interna_Kiri";

	
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


	$tdataandrologi1["Interna_Kiri"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Interna_Kiri";
//	Posisi_Testis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "Posisi_Testis";
	$fdata["GoodName"] = "Posisi_Testis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Posisi_Testis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Posisi_Testis";

	
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


	$tdataandrologi1["Posisi_Testis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Posisi_Testis";
//	Volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "Volume";
	$fdata["GoodName"] = "Volume";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Volume");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Volume";

	
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


	$tdataandrologi1["Volume"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Volume";
//	Konsistensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "Konsistensi";
	$fdata["GoodName"] = "Konsistensi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Konsistensi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Konsistensi";

	
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


	$tdataandrologi1["Konsistensi"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Konsistensi";
//	Nyeri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "Nyeri";
	$fdata["GoodName"] = "Nyeri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Nyeri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Nyeri";

	
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


	$tdataandrologi1["Nyeri"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Nyeri";
//	VAS_DEFERENS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "VAS_DEFERENS";
	$fdata["GoodName"] = "VAS_DEFERENS";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","VAS_DEFERENS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "VAS_DEFERENS";

	
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


	$tdataandrologi1["VAS_DEFERENS"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "VAS_DEFERENS";
//	FUNICULUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "FUNICULUS";
	$fdata["GoodName"] = "FUNICULUS";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","FUNICULUS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "FUNICULUS";

	
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


	$tdataandrologi1["FUNICULUS"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "FUNICULUS";
//	EPIDIDYMIS_Ukuran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "EPIDIDYMIS_Ukuran";
	$fdata["GoodName"] = "EPIDIDYMIS_Ukuran";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","EPIDIDYMIS_Ukuran");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Ukuran";

	
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


	$tdataandrologi1["EPIDIDYMIS_Ukuran"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "EPIDIDYMIS_Ukuran";
//	EPIDIDYMIS_Konsistensi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "EPIDIDYMIS_Konsistensi";
	$fdata["GoodName"] = "EPIDIDYMIS_Konsistensi";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","EPIDIDYMIS_Konsistensi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Konsistensi";

	
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


	$tdataandrologi1["EPIDIDYMIS_Konsistensi"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "EPIDIDYMIS_Konsistensi";
//	EPIDIDYMIS_Kistik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "EPIDIDYMIS_Kistik";
	$fdata["GoodName"] = "EPIDIDYMIS_Kistik";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","EPIDIDYMIS_Kistik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Kistik";

	
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


	$tdataandrologi1["EPIDIDYMIS_Kistik"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "EPIDIDYMIS_Kistik";
//	EPIDIDYMIS_Nyeri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "EPIDIDYMIS_Nyeri";
	$fdata["GoodName"] = "EPIDIDYMIS_Nyeri";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","EPIDIDYMIS_Nyeri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Nyeri";

	
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


	$tdataandrologi1["EPIDIDYMIS_Nyeri"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "EPIDIDYMIS_Nyeri";
//	EPIDIDYMIS_Permukaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "EPIDIDYMIS_Permukaan";
	$fdata["GoodName"] = "EPIDIDYMIS_Permukaan";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","EPIDIDYMIS_Permukaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "EPIDIDYMIS_Permukaan";

	
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


	$tdataandrologi1["EPIDIDYMIS_Permukaan"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "EPIDIDYMIS_Permukaan";
//	VARIKOKEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "VARIKOKEL";
	$fdata["GoodName"] = "VARIKOKEL";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","VARIKOKEL");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "VARIKOKEL";

	
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


	$tdataandrologi1["VARIKOKEL"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "VARIKOKEL";
//	Prostat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Prostat";
	$fdata["GoodName"] = "Prostat";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Prostat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Prostat";

	
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


	$tdataandrologi1["Prostat"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Prostat";
//	V_Seminalis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "V_Seminalis";
	$fdata["GoodName"] = "V_Seminalis";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","V_Seminalis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "V_Seminalis";

	
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


	$tdataandrologi1["V_Seminalis"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "V_Seminalis";
//	lab_ke
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "lab_ke";
	$fdata["GoodName"] = "lab_ke";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","lab_ke");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lab_ke";

	
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


	$tdataandrologi1["lab_ke"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "lab_ke";
//	lab_tgl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "lab_tgl";
	$fdata["GoodName"] = "lab_tgl";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","lab_tgl");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "lab_tgl";

	
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


	$tdataandrologi1["lab_tgl"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "lab_tgl";
//	no_reg_lab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "no_reg_lab";
	$fdata["GoodName"] = "no_reg_lab";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","no_reg_lab");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "no_reg_lab";

	
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


	$tdataandrologi1["no_reg_lab"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "no_reg_lab";
//	kesan_lab
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "kesan_lab";
	$fdata["GoodName"] = "kesan_lab";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","kesan_lab");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "kesan_lab";

	
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


	$tdataandrologi1["kesan_lab"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "kesan_lab";
//	Diagnosis_Banding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "Diagnosis_Banding";
	$fdata["GoodName"] = "Diagnosis_Banding";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Diagnosis_Banding");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosis_Banding";

	
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


	$tdataandrologi1["Diagnosis_Banding"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Diagnosis_Banding";
//	Rencana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Rencana";
	$fdata["GoodName"] = "Rencana";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Rencana");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Rencana";

	
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


	$tdataandrologi1["Rencana"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Rencana";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","id_pasien");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
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


	$tdataandrologi1["id_pasien"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","id_user");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_user";

	
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


	$tdataandrologi1["id_user"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "id_user";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "andrologi";
	$fdata["Label"] = GetFieldLabel("andrologi1","Nomor_Rm");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nomor_Rm";

	
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


	$tdataandrologi1["Nomor_Rm"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Nomor_Rm";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["id"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","name");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "name";

	
		$fdata["FullName"] = "name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["name"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "name";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

	
		$fdata["FullName"] = "username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["username"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["email"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "email";
//	email_verified_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "email_verified_at";
	$fdata["GoodName"] = "email_verified_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","email_verified_at");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "email_verified_at";

	
		$fdata["FullName"] = "email_verified_at";

	
	
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


	$tdataandrologi1["email_verified_at"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "email_verified_at";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

	
		$fdata["FullName"] = "password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["password"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "password";
//	two_factor_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "two_factor_secret";
	$fdata["GoodName"] = "two_factor_secret";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","two_factor_secret");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "two_factor_secret";

	
		$fdata["FullName"] = "two_factor_secret";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["two_factor_secret"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "two_factor_secret";
//	two_factor_recovery_codes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "two_factor_recovery_codes";
	$fdata["GoodName"] = "two_factor_recovery_codes";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","two_factor_recovery_codes");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "two_factor_recovery_codes";

	
		$fdata["FullName"] = "two_factor_recovery_codes";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["two_factor_recovery_codes"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "two_factor_recovery_codes";
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","level");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "level";

	
		$fdata["FullName"] = "level";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["level"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "level";
//	remember_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "remember_token";
	$fdata["GoodName"] = "remember_token";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","remember_token");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "remember_token";

	
		$fdata["FullName"] = "remember_token";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["remember_token"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "remember_token";
//	profile_photo_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "profile_photo_path";
	$fdata["GoodName"] = "profile_photo_path";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","profile_photo_path");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "profile_photo_path";

	
		$fdata["FullName"] = "profile_photo_path";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdataandrologi1["profile_photo_path"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "profile_photo_path";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "created_at";

	
		$fdata["FullName"] = "created_at";

	
	
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


	$tdataandrologi1["created_at"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("andrologi1","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "updated_at";

	
		$fdata["FullName"] = "updated_at";

	
	
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


	$tdataandrologi1["updated_at"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "updated_at";
//	Id_Pasien1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "Id_Pasien1";
	$fdata["GoodName"] = "Id_Pasien1";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Id_Pasien1");
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


	$tdataandrologi1["Id_Pasien1"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Id_Pasien1";
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Nama");
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


	$tdataandrologi1["Nama"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Nama";
//	Alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "Alamat";
	$fdata["GoodName"] = "Alamat";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Alamat");
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


	$tdataandrologi1["Alamat"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Alamat";
//	Umur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "Umur";
	$fdata["GoodName"] = "Umur";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Umur");
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


	$tdataandrologi1["Umur"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Umur";
//	Status_Perkawinan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "Status_Perkawinan";
	$fdata["GoodName"] = "Status_Perkawinan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Status_Perkawinan");
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


	$tdataandrologi1["Status_Perkawinan"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Status_Perkawinan";
//	Jenis Kelamin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "Jenis Kelamin";
	$fdata["GoodName"] = "Jenis_Kelamin";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Jenis_Kelamin");
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


	$tdataandrologi1["Jenis Kelamin"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Jenis Kelamin";
//	Suku_Ras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "Suku_Ras";
	$fdata["GoodName"] = "Suku_Ras";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Suku_Ras");
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


	$tdataandrologi1["Suku_Ras"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Suku_Ras";
//	Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "Agama";
	$fdata["GoodName"] = "Agama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Agama");
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


	$tdataandrologi1["Agama"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Agama";
//	Kerja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "Kerja";
	$fdata["GoodName"] = "Kerja";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Kerja");
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


	$tdataandrologi1["Kerja"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Kerja";
//	Tanggal_MRS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "Tanggal_MRS";
	$fdata["GoodName"] = "Tanggal_MRS";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("andrologi1","Tanggal_MRS");
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


	$tdataandrologi1["Tanggal_MRS"] = $fdata;
		$tdataandrologi1[".searchableFields"][] = "Tanggal_MRS";


$tables_data["andrologi1"]=&$tdataandrologi1;
$field_labels["andrologi1"] = &$fieldLabelsandrologi1;
$fieldToolTips["andrologi1"] = &$fieldToolTipsandrologi1;
$placeHolders["andrologi1"] = &$placeHoldersandrologi1;
$page_titles["andrologi1"] = &$pageTitlesandrologi1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["andrologi1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["andrologi1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_andrologi1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "andrologi.*,  u.*,  p.Id_Pasien AS Id_Pasien1,  p.Nama,  p.Alamat,  p.Umur,  p.Status_Perkawinan,  p.`Jenis Kelamin`,  p.Suku_Ras,  p.Agama,  p.Pekerjaan AS Kerja,  p.Tanggal_MRS";
$proto0["m_strFrom"] = "FROM andrologi   JOIN identitas_pasien AS p ON andrologi.id_pasien = p.Id_Pasien  JOIN users AS u ON andrologi.Id_User = u.id";
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
	"m_srcTableName" => "andrologi1"
));

$proto6["m_sql"] = "";
$proto6["m_srcTableName"] = "andrologi1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "lama_perkawinan_1",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto8["m_sql"] = "";
$proto8["m_srcTableName"] = "andrologi1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "lama_perkawinan_2",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto10["m_sql"] = "";
$proto10["m_srcTableName"] = "andrologi1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "lama_perkawinan_3",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto12["m_sql"] = "";
$proto12["m_srcTableName"] = "andrologi1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "anak_perkawinan_1",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto14["m_sql"] = "";
$proto14["m_srcTableName"] = "andrologi1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "anak_perkawinan_2",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto16["m_sql"] = "";
$proto16["m_srcTableName"] = "andrologi1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "anak_perkawinan_3",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto18["m_sql"] = "";
$proto18["m_srcTableName"] = "andrologi1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Libido",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto20["m_sql"] = "";
$proto20["m_srcTableName"] = "andrologi1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Frekwensi_koitus",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto22["m_sql"] = "";
$proto22["m_srcTableName"] = "andrologi1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Dispareuni",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto24["m_sql"] = "";
$proto24["m_srcTableName"] = "andrologi1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Orgasmus",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto26["m_sql"] = "";
$proto26["m_srcTableName"] = "andrologi1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Reflux_Post_Coital",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto28["m_sql"] = "";
$proto28["m_srcTableName"] = "andrologi1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejakulasi_Dini",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto30["m_sql"] = "";
$proto30["m_srcTableName"] = "andrologi1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejakulasi_Nocturnal",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto32["m_sql"] = "";
$proto32["m_srcTableName"] = "andrologi1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Ejakulasi_Nyeri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto34["m_sql"] = "";
$proto34["m_srcTableName"] = "andrologi1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Puber",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto36["m_sql"] = "";
$proto36["m_srcTableName"] = "andrologi1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Masturbasi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto38["m_sql"] = "";
$proto38["m_srcTableName"] = "andrologi1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Koitus_pranikah",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto40["m_sql"] = "";
$proto40["m_srcTableName"] = "andrologi1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Lain_lain",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto42["m_sql"] = "";
$proto42["m_srcTableName"] = "andrologi1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Peny_Hub_Seksual",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto44["m_sql"] = "";
$proto44["m_srcTableName"] = "andrologi1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Hernia",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto46["m_sql"] = "";
$proto46["m_srcTableName"] = "andrologi1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Hidrokel",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto48["m_sql"] = "";
$proto48["m_srcTableName"] = "andrologi1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Trauma",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto50["m_sql"] = "";
$proto50["m_srcTableName"] = "andrologi1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Kelainan_bawaan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto52["m_sql"] = "";
$proto52["m_srcTableName"] = "andrologi1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Penyakit_Paru_kronis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto54["m_sql"] = "";
$proto54["m_srcTableName"] = "andrologi1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Penyakit_hidung_kronis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto56["m_sql"] = "";
$proto56["m_srcTableName"] = "andrologi1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Tuberkulosa",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto58["m_sql"] = "";
$proto58["m_srcTableName"] = "andrologi1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Diabetes_mellitus",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto60["m_sql"] = "";
$proto60["m_srcTableName"] = "andrologi1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Gondongan_parotitis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto62["m_sql"] = "";
$proto62["m_srcTableName"] = "andrologi1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Penyakit_Saraf",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto64["m_sql"] = "";
$proto64["m_srcTableName"] = "andrologi1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Panas_dlm_6_bln",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto66["m_sql"] = "";
$proto66["m_srcTableName"] = "andrologi1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_keluarga",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto68["m_sql"] = "";
$proto68["m_srcTableName"] = "andrologi1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Saudara_kandung_suami",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto70["m_sql"] = "";
$proto70["m_srcTableName"] = "andrologi1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Saudara_kandung_istri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto72["m_sql"] = "";
$proto72["m_srcTableName"] = "andrologi1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Lingkungan_sosial",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto74["m_sql"] = "";
$proto74["m_srcTableName"] = "andrologi1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto76["m_sql"] = "";
$proto76["m_srcTableName"] = "andrologi1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluarga",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto78["m_sql"] = "";
$proto78["m_srcTableName"] = "andrologi1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Rokok",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto80["m_sql"] = "";
$proto80["m_srcTableName"] = "andrologi1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Alkohol",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto82["m_sql"] = "";
$proto82["m_srcTableName"] = "andrologi1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Obat",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto84["m_sql"] = "";
$proto84["m_srcTableName"] = "andrologi1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Celana ketat",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto86["m_sql"] = "";
$proto86["m_srcTableName"] = "andrologi1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Bahan_kimia",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto88["m_sql"] = "";
$proto88["m_srcTableName"] = "andrologi1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "KU",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto90["m_sql"] = "";
$proto90["m_srcTableName"] = "andrologi1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "TB",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto92["m_sql"] = "";
$proto92["m_srcTableName"] = "andrologi1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "CM",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto94["m_sql"] = "";
$proto94["m_srcTableName"] = "andrologi1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "BB",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto96["m_sql"] = "";
$proto96["m_srcTableName"] = "andrologi1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "KG",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto98["m_sql"] = "";
$proto98["m_srcTableName"] = "andrologi1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Tensi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto100["m_sql"] = "";
$proto100["m_srcTableName"] = "andrologi1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Pertumbuhan_distribusi_rambut",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto102["m_sql"] = "";
$proto102["m_srcTableName"] = "andrologi1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Kumis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto104["m_sql"] = "";
$proto104["m_srcTableName"] = "andrologi1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenggot",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto106["m_sql"] = "";
$proto106["m_srcTableName"] = "andrologi1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Mata",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto108["m_sql"] = "";
$proto108["m_srcTableName"] = "andrologi1";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Hidung",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto110["m_sql"] = "";
$proto110["m_srcTableName"] = "andrologi1";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Leher",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto112["m_sql"] = "";
$proto112["m_srcTableName"] = "andrologi1";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Dada",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto114["m_sql"] = "";
$proto114["m_srcTableName"] = "andrologi1";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "ginecomastia",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto116["m_sql"] = "";
$proto116["m_srcTableName"] = "andrologi1";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "PERUT",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto118["m_sql"] = "";
$proto118["m_srcTableName"] = "andrologi1";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "INGUINAL",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto120["m_sql"] = "";
$proto120["m_srcTableName"] = "andrologi1";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "kubitus (valganus / varus)",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto122["m_sql"] = "";
$proto122["m_srcTableName"] = "andrologi1";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Rentangan tangan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto124["m_sql"] = "";
$proto124["m_srcTableName"] = "andrologi1";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => " Rambut axilla",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto126["m_sql"] = "";
$proto126["m_srcTableName"] = "andrologi1";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Cor",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto128["m_sql"] = "";
$proto128["m_srcTableName"] = "andrologi1";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Hepar",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto130["m_sql"] = "";
$proto130["m_srcTableName"] = "andrologi1";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Pulmo",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto132["m_sql"] = "";
$proto132["m_srcTableName"] = "andrologi1";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Lien",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto134["m_sql"] = "";
$proto134["m_srcTableName"] = "andrologi1";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Penis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto136["m_sql"] = "";
$proto136["m_srcTableName"] = "andrologi1";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Muara_Urethra",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto138["m_sql"] = "";
$proto138["m_srcTableName"] = "andrologi1";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Skrotum",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto140["m_sql"] = "";
$proto140["m_srcTableName"] = "andrologi1";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Pubis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto142["m_sql"] = "";
$proto142["m_srcTableName"] = "andrologi1";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Pola_Pubis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto144["m_sql"] = "";
$proto144["m_srcTableName"] = "andrologi1";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Interna_Kanan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto146["m_sql"] = "";
$proto146["m_srcTableName"] = "andrologi1";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Interna_Kiri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto148["m_sql"] = "";
$proto148["m_srcTableName"] = "andrologi1";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Posisi_Testis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto150["m_sql"] = "";
$proto150["m_srcTableName"] = "andrologi1";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Volume",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto152["m_sql"] = "";
$proto152["m_srcTableName"] = "andrologi1";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Konsistensi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto154["m_sql"] = "";
$proto154["m_srcTableName"] = "andrologi1";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Nyeri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto156["m_sql"] = "";
$proto156["m_srcTableName"] = "andrologi1";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "VAS_DEFERENS",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto158["m_sql"] = "";
$proto158["m_srcTableName"] = "andrologi1";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "FUNICULUS",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto160["m_sql"] = "";
$proto160["m_srcTableName"] = "andrologi1";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Ukuran",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto162["m_sql"] = "";
$proto162["m_srcTableName"] = "andrologi1";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Konsistensi",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto164["m_sql"] = "";
$proto164["m_srcTableName"] = "andrologi1";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Kistik",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto166["m_sql"] = "";
$proto166["m_srcTableName"] = "andrologi1";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Nyeri",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto168["m_sql"] = "";
$proto168["m_srcTableName"] = "andrologi1";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "EPIDIDYMIS_Permukaan",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto170["m_sql"] = "";
$proto170["m_srcTableName"] = "andrologi1";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "VARIKOKEL",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto172["m_sql"] = "";
$proto172["m_srcTableName"] = "andrologi1";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Prostat",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto174["m_sql"] = "";
$proto174["m_srcTableName"] = "andrologi1";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "V_Seminalis",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto176["m_sql"] = "";
$proto176["m_srcTableName"] = "andrologi1";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "lab_ke",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto178["m_sql"] = "";
$proto178["m_srcTableName"] = "andrologi1";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "lab_tgl",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto180["m_sql"] = "";
$proto180["m_srcTableName"] = "andrologi1";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "no_reg_lab",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto182["m_sql"] = "";
$proto182["m_srcTableName"] = "andrologi1";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "kesan_lab",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto184["m_sql"] = "";
$proto184["m_srcTableName"] = "andrologi1";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosis_Banding",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto186["m_sql"] = "";
$proto186["m_srcTableName"] = "andrologi1";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Rencana",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto188["m_sql"] = "";
$proto188["m_srcTableName"] = "andrologi1";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto190["m_sql"] = "";
$proto190["m_srcTableName"] = "andrologi1";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto192["m_sql"] = "";
$proto192["m_srcTableName"] = "andrologi1";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto194["m_sql"] = "";
$proto194["m_srcTableName"] = "andrologi1";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto196["m_sql"] = "";
$proto196["m_srcTableName"] = "andrologi1";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto198["m_sql"] = "";
$proto198["m_srcTableName"] = "andrologi1";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto200["m_sql"] = "";
$proto200["m_srcTableName"] = "andrologi1";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto202["m_sql"] = "";
$proto202["m_srcTableName"] = "andrologi1";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "email_verified_at",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto204["m_sql"] = "";
$proto204["m_srcTableName"] = "andrologi1";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto206["m_sql"] = "";
$proto206["m_srcTableName"] = "andrologi1";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "two_factor_secret",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto208["m_sql"] = "";
$proto208["m_srcTableName"] = "andrologi1";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "two_factor_recovery_codes",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto210["m_sql"] = "";
$proto210["m_srcTableName"] = "andrologi1";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto212["m_sql"] = "";
$proto212["m_srcTableName"] = "andrologi1";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "remember_token",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto214["m_sql"] = "";
$proto214["m_srcTableName"] = "andrologi1";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "profile_photo_path",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto216["m_sql"] = "";
$proto216["m_srcTableName"] = "andrologi1";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto218["m_sql"] = "";
$proto218["m_srcTableName"] = "andrologi1";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "u",
	"m_srcTableName" => "andrologi1"
));

$proto220["m_sql"] = "";
$proto220["m_srcTableName"] = "andrologi1";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Pasien",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto222["m_sql"] = "p.Id_Pasien";
$proto222["m_srcTableName"] = "andrologi1";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "Id_Pasien1";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto224["m_sql"] = "p.Nama";
$proto224["m_srcTableName"] = "andrologi1";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "Alamat",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto226["m_sql"] = "p.Alamat";
$proto226["m_srcTableName"] = "andrologi1";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "Umur",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto228["m_sql"] = "p.Umur";
$proto228["m_srcTableName"] = "andrologi1";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_Perkawinan",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto230["m_sql"] = "p.Status_Perkawinan";
$proto230["m_srcTableName"] = "andrologi1";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis Kelamin",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto232["m_sql"] = "p.`Jenis Kelamin`";
$proto232["m_srcTableName"] = "andrologi1";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "Suku_Ras",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto234["m_sql"] = "p.Suku_Ras";
$proto234["m_srcTableName"] = "andrologi1";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "Agama",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto236["m_sql"] = "p.Agama";
$proto236["m_srcTableName"] = "andrologi1";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto238["m_sql"] = "p.Pekerjaan";
$proto238["m_srcTableName"] = "andrologi1";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "Kerja";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal_MRS",
	"m_strTable" => "p",
	"m_srcTableName" => "andrologi1"
));

$proto240["m_sql"] = "p.Tanggal_MRS";
$proto240["m_srcTableName"] = "andrologi1";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto242=array();
$proto242["m_link"] = "SQLL_MAIN";
			$proto243=array();
$proto243["m_strName"] = "andrologi";
$proto243["m_srcTableName"] = "andrologi1";
$proto243["m_columns"] = array();
$proto243["m_columns"][] = "id_andrologi";
$proto243["m_columns"][] = "lama_perkawinan_1";
$proto243["m_columns"][] = "lama_perkawinan_2";
$proto243["m_columns"][] = "lama_perkawinan_3";
$proto243["m_columns"][] = "anak_perkawinan_1";
$proto243["m_columns"][] = "anak_perkawinan_2";
$proto243["m_columns"][] = "anak_perkawinan_3";
$proto243["m_columns"][] = "Libido";
$proto243["m_columns"][] = "Frekwensi_koitus";
$proto243["m_columns"][] = "Dispareuni";
$proto243["m_columns"][] = "Orgasmus";
$proto243["m_columns"][] = "Reflux_Post_Coital";
$proto243["m_columns"][] = "Ejakulasi_Dini";
$proto243["m_columns"][] = "Ejakulasi_Nocturnal";
$proto243["m_columns"][] = "Ejakulasi_Nyeri";
$proto243["m_columns"][] = "Puber";
$proto243["m_columns"][] = "Masturbasi";
$proto243["m_columns"][] = "Koitus_pranikah";
$proto243["m_columns"][] = "Lain_lain";
$proto243["m_columns"][] = "Peny_Hub_Seksual";
$proto243["m_columns"][] = "Hernia";
$proto243["m_columns"][] = "Hidrokel";
$proto243["m_columns"][] = "Trauma";
$proto243["m_columns"][] = "Kelainan_bawaan";
$proto243["m_columns"][] = "Penyakit_Paru_kronis";
$proto243["m_columns"][] = "Penyakit_hidung_kronis";
$proto243["m_columns"][] = "Tuberkulosa";
$proto243["m_columns"][] = "Diabetes_mellitus";
$proto243["m_columns"][] = "Gondongan_parotitis";
$proto243["m_columns"][] = "Penyakit_Saraf";
$proto243["m_columns"][] = "Panas_dlm_6_bln";
$proto243["m_columns"][] = "Status_keluarga";
$proto243["m_columns"][] = "Saudara_kandung_suami";
$proto243["m_columns"][] = "Saudara_kandung_istri";
$proto243["m_columns"][] = "Lingkungan_sosial";
$proto243["m_columns"][] = "Pekerjaan";
$proto243["m_columns"][] = "Keluarga";
$proto243["m_columns"][] = "Rokok";
$proto243["m_columns"][] = "Alkohol";
$proto243["m_columns"][] = "Obat";
$proto243["m_columns"][] = "Celana ketat";
$proto243["m_columns"][] = "Bahan_kimia";
$proto243["m_columns"][] = "KU";
$proto243["m_columns"][] = "TB";
$proto243["m_columns"][] = "CM";
$proto243["m_columns"][] = "BB";
$proto243["m_columns"][] = "KG";
$proto243["m_columns"][] = "Tensi";
$proto243["m_columns"][] = "Pertumbuhan_distribusi_rambut";
$proto243["m_columns"][] = "Kumis";
$proto243["m_columns"][] = "Jenggot";
$proto243["m_columns"][] = "Mata";
$proto243["m_columns"][] = "Hidung";
$proto243["m_columns"][] = "Leher";
$proto243["m_columns"][] = "Dada";
$proto243["m_columns"][] = "ginecomastia";
$proto243["m_columns"][] = "PERUT";
$proto243["m_columns"][] = "INGUINAL";
$proto243["m_columns"][] = "kubitus (valganus / varus)";
$proto243["m_columns"][] = "Rentangan tangan";
$proto243["m_columns"][] = " Rambut axilla";
$proto243["m_columns"][] = "Cor";
$proto243["m_columns"][] = "Hepar";
$proto243["m_columns"][] = "Pulmo";
$proto243["m_columns"][] = "Lien";
$proto243["m_columns"][] = "Penis";
$proto243["m_columns"][] = "Muara_Urethra";
$proto243["m_columns"][] = "Skrotum";
$proto243["m_columns"][] = "Pubis";
$proto243["m_columns"][] = "Pola_Pubis";
$proto243["m_columns"][] = "Interna_Kanan";
$proto243["m_columns"][] = "Interna_Kiri";
$proto243["m_columns"][] = "Posisi_Testis";
$proto243["m_columns"][] = "Volume";
$proto243["m_columns"][] = "Konsistensi";
$proto243["m_columns"][] = "Nyeri";
$proto243["m_columns"][] = "VAS_DEFERENS";
$proto243["m_columns"][] = "FUNICULUS";
$proto243["m_columns"][] = "EPIDIDYMIS_Ukuran";
$proto243["m_columns"][] = "EPIDIDYMIS_Konsistensi";
$proto243["m_columns"][] = "EPIDIDYMIS_Kistik";
$proto243["m_columns"][] = "EPIDIDYMIS_Nyeri";
$proto243["m_columns"][] = "EPIDIDYMIS_Permukaan";
$proto243["m_columns"][] = "VARIKOKEL";
$proto243["m_columns"][] = "Prostat";
$proto243["m_columns"][] = "V_Seminalis";
$proto243["m_columns"][] = "lab_ke";
$proto243["m_columns"][] = "lab_tgl";
$proto243["m_columns"][] = "no_reg_lab";
$proto243["m_columns"][] = "kesan_lab";
$proto243["m_columns"][] = "Diagnosis_Banding";
$proto243["m_columns"][] = "Rencana";
$proto243["m_columns"][] = "id_pasien";
$proto243["m_columns"][] = "id_user";
$proto243["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto243);

$proto242["m_table"] = $obj;
$proto242["m_sql"] = "andrologi";
$proto242["m_alias"] = "";
$proto242["m_srcTableName"] = "andrologi1";
$proto244=array();
$proto244["m_sql"] = "";
$proto244["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto244["m_column"]=$obj;
$proto244["m_contained"] = array();
$proto244["m_strCase"] = "";
$proto244["m_havingmode"] = false;
$proto244["m_inBrackets"] = false;
$proto244["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto244);

$proto242["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto242);

$proto0["m_fromlist"][]=$obj;
												$proto246=array();
$proto246["m_link"] = "SQLL_INNERJOIN";
			$proto247=array();
$proto247["m_strName"] = "identitas_pasien";
$proto247["m_srcTableName"] = "andrologi1";
$proto247["m_columns"] = array();
$proto247["m_columns"][] = "Id_Pasien";
$proto247["m_columns"][] = "Nama";
$proto247["m_columns"][] = "Alamat";
$proto247["m_columns"][] = "Umur";
$proto247["m_columns"][] = "Status_Perkawinan";
$proto247["m_columns"][] = "Jenis Kelamin";
$proto247["m_columns"][] = "Suku_Ras";
$proto247["m_columns"][] = "Agama";
$proto247["m_columns"][] = "Pekerjaan";
$proto247["m_columns"][] = "Tanggal_MRS";
$obj = new SQLTable($proto247);

$proto246["m_table"] = $obj;
$proto246["m_sql"] = "JOIN identitas_pasien AS p ON andrologi.id_pasien = p.Id_Pasien";
$proto246["m_alias"] = "p";
$proto246["m_srcTableName"] = "andrologi1";
$proto248=array();
$proto248["m_sql"] = "andrologi.id_pasien = p.Id_Pasien";
$proto248["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto248["m_column"]=$obj;
$proto248["m_contained"] = array();
$proto248["m_strCase"] = "= p.Id_Pasien";
$proto248["m_havingmode"] = false;
$proto248["m_inBrackets"] = false;
$proto248["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto248);

$proto246["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto246);

$proto0["m_fromlist"][]=$obj;
												$proto250=array();
$proto250["m_link"] = "SQLL_INNERJOIN";
			$proto251=array();
$proto251["m_strName"] = "users";
$proto251["m_srcTableName"] = "andrologi1";
$proto251["m_columns"] = array();
$proto251["m_columns"][] = "id";
$proto251["m_columns"][] = "name";
$proto251["m_columns"][] = "username";
$proto251["m_columns"][] = "email";
$proto251["m_columns"][] = "email_verified_at";
$proto251["m_columns"][] = "password";
$proto251["m_columns"][] = "two_factor_secret";
$proto251["m_columns"][] = "two_factor_recovery_codes";
$proto251["m_columns"][] = "level";
$proto251["m_columns"][] = "remember_token";
$proto251["m_columns"][] = "profile_photo_path";
$proto251["m_columns"][] = "created_at";
$proto251["m_columns"][] = "updated_at";
$obj = new SQLTable($proto251);

$proto250["m_table"] = $obj;
$proto250["m_sql"] = "JOIN users AS u ON andrologi.Id_User = u.id";
$proto250["m_alias"] = "u";
$proto250["m_srcTableName"] = "andrologi1";
$proto252=array();
$proto252["m_sql"] = "andrologi.Id_User = u.id";
$proto252["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "andrologi",
	"m_srcTableName" => "andrologi1"
));

$proto252["m_column"]=$obj;
$proto252["m_contained"] = array();
$proto252["m_strCase"] = "= u.id";
$proto252["m_havingmode"] = false;
$proto252["m_inBrackets"] = false;
$proto252["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto252);

$proto250["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto250);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="andrologi1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_andrologi1 = createSqlQuery_andrologi1();


	
		;

																																																																																																																						

$tdataandrologi1[".sqlquery"] = $queryData_andrologi1;



$tableEvents["andrologi1"] = new eventsBase;
$tdataandrologi1[".hasEvents"] = false;

?>