<?php
$tdatajiwa1 = array();
$tdatajiwa1[".searchableFields"] = array();
$tdatajiwa1[".ShortName"] = "jiwa1";
$tdatajiwa1[".OwnerID"] = "";
$tdatajiwa1[".OriginalTable"] = "jiwa";


$tdatajiwa1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajiwa1[".originalPagesByType"] = $tdatajiwa1[".pagesByType"];
$tdatajiwa1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajiwa1[".originalPages"] = $tdatajiwa1[".pages"];
$tdatajiwa1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajiwa1[".originalDefaultPages"] = $tdatajiwa1[".defaultPages"];

//	field labels
$fieldLabelsjiwa1 = array();
$fieldToolTipsjiwa1 = array();
$pageTitlesjiwa1 = array();
$placeHoldersjiwa1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjiwa1["English"] = array();
	$fieldToolTipsjiwa1["English"] = array();
	$placeHoldersjiwa1["English"] = array();
	$pageTitlesjiwa1["English"] = array();
	$fieldLabelsjiwa1["English"]["id_Jiwa"] = "Id Jiwa";
	$fieldToolTipsjiwa1["English"]["id_Jiwa"] = "";
	$placeHoldersjiwa1["English"]["id_Jiwa"] = "";
	$fieldLabelsjiwa1["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipsjiwa1["English"]["Keluhan_Utama"] = "";
	$placeHoldersjiwa1["English"]["Keluhan_Utama"] = "";
	$fieldLabelsjiwa1["English"]["Anamnesis"] = "Anamnesis";
	$fieldToolTipsjiwa1["English"]["Anamnesis"] = "";
	$placeHoldersjiwa1["English"]["Anamnesis"] = "";
	$fieldLabelsjiwa1["English"]["Autoanamnesis"] = "Autoanamnesis";
	$fieldToolTipsjiwa1["English"]["Autoanamnesis"] = "";
	$placeHoldersjiwa1["English"]["Autoanamnesis"] = "";
	$fieldLabelsjiwa1["English"]["Alloanamnesis"] = "Alloanamnesis";
	$fieldToolTipsjiwa1["English"]["Alloanamnesis"] = "";
	$placeHoldersjiwa1["English"]["Alloanamnesis"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_gangguan_sekarang"] = "Riwayat Gangguan Sekarang";
	$fieldToolTipsjiwa1["English"]["Riwayat_gangguan_sekarang"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_gangguan_sekarang"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_gangguan_dahulu"] = "Riwayat Gangguan Dahulu";
	$fieldToolTipsjiwa1["English"]["Riwayat_gangguan_dahulu"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_gangguan_dahulu"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_gangguan_psikiatri"] = "Riwayat Gangguan Psikiatri";
	$fieldToolTipsjiwa1["English"]["Riwayat_gangguan_psikiatri"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_gangguan_psikiatri"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_gangguan_medis"] = "Riwayat Gangguan Medis";
	$fieldToolTipsjiwa1["English"]["Riwayat_gangguan_medis"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_gangguan_medis"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_penggunaan_zat_psikoaktif"] = "Riwayat Penggunaan Zat Psikoaktif";
	$fieldToolTipsjiwa1["English"]["Riwayat_penggunaan_zat_psikoaktif"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_penggunaan_zat_psikoaktif"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_prenatal_dan_perinatal"] = "Riwayat Prenatal Dan Perinatal";
	$fieldToolTipsjiwa1["English"]["Riwayat_prenatal_dan_perinatal"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_prenatal_dan_perinatal"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_masa_kanak_awal"] = "Riwayat Masa Kanak Awal";
	$fieldToolTipsjiwa1["English"]["Riwayat_masa_kanak_awal"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_masa_kanak_awal"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_masa_kanak_pertengahan"] = "Riwayat Masa Kanak Pertengahan";
	$fieldToolTipsjiwa1["English"]["Riwayat_masa_kanak_pertengahan"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_masa_kanak_pertengahan"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_masa_kanak_akhir_dan_remaja"] = "Riwayat Masa Kanak Akhir Dan Remaja";
	$fieldToolTipsjiwa1["English"]["Riwayat_masa_kanak_akhir_dan_remaja"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_masa_kanak_akhir_dan_remaja"] = "";
	$fieldLabelsjiwa1["English"]["Masa_Dewasa"] = "Masa Dewasa";
	$fieldToolTipsjiwa1["English"]["Masa_Dewasa"] = "";
	$placeHoldersjiwa1["English"]["Masa_Dewasa"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_pendidikan"] = "Riwayat Pendidikan";
	$fieldToolTipsjiwa1["English"]["Riwayat_pendidikan"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_pendidikan"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_pekerjaan"] = "Riwayat Pekerjaan";
	$fieldToolTipsjiwa1["English"]["Riwayat_pekerjaan"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_pekerjaan"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_pernikahan"] = "Riwayat Pernikahan";
	$fieldToolTipsjiwa1["English"]["Riwayat_pernikahan"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_pernikahan"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_Agama"] = "Riwayat Agama";
	$fieldToolTipsjiwa1["English"]["Riwayat_Agama"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_Agama"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_Psikoseksual"] = "Riwayat Psikoseksual";
	$fieldToolTipsjiwa1["English"]["Riwayat_Psikoseksual"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_Psikoseksual"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_aktivitas_sosial"] = "Riwayat Aktivitas Sosial";
	$fieldToolTipsjiwa1["English"]["Riwayat_aktivitas_sosial"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_aktivitas_sosial"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_hukum"] = "Riwayat Hukum";
	$fieldToolTipsjiwa1["English"]["Riwayat_hukum"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_hukum"] = "";
	$fieldLabelsjiwa1["English"]["Riwayat_keluarga"] = "Riwayat Keluarga";
	$fieldToolTipsjiwa1["English"]["Riwayat_keluarga"] = "";
	$placeHoldersjiwa1["English"]["Riwayat_keluarga"] = "";
	$fieldLabelsjiwa1["English"]["Genogram_keluarga"] = "Genogram Keluarga";
	$fieldToolTipsjiwa1["English"]["Genogram_keluarga"] = "";
	$placeHoldersjiwa1["English"]["Genogram_keluarga"] = "";
	$fieldLabelsjiwa1["English"]["Situasi_kehidupan_sekarang"] = "Situasi Kehidupan Sekarang";
	$fieldToolTipsjiwa1["English"]["Situasi_kehidupan_sekarang"] = "";
	$placeHoldersjiwa1["English"]["Situasi_kehidupan_sekarang"] = "";
	$fieldLabelsjiwa1["English"]["Persepsi_tentang_diri_dan_kehidupannya"] = "Persepsi Tentang Diri Dan Kehidupannya";
	$fieldToolTipsjiwa1["English"]["Persepsi_tentang_diri_dan_kehidupannya"] = "";
	$placeHoldersjiwa1["English"]["Persepsi_tentang_diri_dan_kehidupannya"] = "";
	$fieldLabelsjiwa1["English"]["Persepsi_keluarga_tentang_diri_pasien"] = "Persepsi Keluarga Tentang Diri Pasien";
	$fieldToolTipsjiwa1["English"]["Persepsi_keluarga_tentang_diri_pasien"] = "";
	$placeHoldersjiwa1["English"]["Persepsi_keluarga_tentang_diri_pasien"] = "";
	$fieldLabelsjiwa1["English"]["Fantasi"] = "Fantasi";
	$fieldToolTipsjiwa1["English"]["Fantasi"] = "";
	$placeHoldersjiwa1["English"]["Fantasi"] = "";
	$fieldLabelsjiwa1["English"]["Penampilan"] = "Penampilan";
	$fieldToolTipsjiwa1["English"]["Penampilan"] = "";
	$placeHoldersjiwa1["English"]["Penampilan"] = "";
	$fieldLabelsjiwa1["English"]["Perilaku_dan_aktivitas_psikomotor"] = "Perilaku Dan Aktivitas Psikomotor";
	$fieldToolTipsjiwa1["English"]["Perilaku_dan_aktivitas_psikomotor"] = "";
	$placeHoldersjiwa1["English"]["Perilaku_dan_aktivitas_psikomotor"] = "";
	$fieldLabelsjiwa1["English"]["Sikap_terhadap_pemeriksa"] = "Sikap Terhadap Pemeriksa";
	$fieldToolTipsjiwa1["English"]["Sikap_terhadap_pemeriksa"] = "";
	$placeHoldersjiwa1["English"]["Sikap_terhadap_pemeriksa"] = "";
	$fieldLabelsjiwa1["English"]["Irama"] = "Irama";
	$fieldToolTipsjiwa1["English"]["Irama"] = "";
	$placeHoldersjiwa1["English"]["Irama"] = "";
	$fieldLabelsjiwa1["English"]["Kecepatan_bicara"] = "Kecepatan Bicara";
	$fieldToolTipsjiwa1["English"]["Kecepatan_bicara"] = "";
	$placeHoldersjiwa1["English"]["Kecepatan_bicara"] = "";
	$fieldLabelsjiwa1["English"]["Volume"] = "Volume";
	$fieldToolTipsjiwa1["English"]["Volume"] = "";
	$placeHoldersjiwa1["English"]["Volume"] = "";
	$fieldLabelsjiwa1["English"]["Kelancaran"] = "Kelancaran";
	$fieldToolTipsjiwa1["English"]["Kelancaran"] = "";
	$placeHoldersjiwa1["English"]["Kelancaran"] = "";
	$fieldLabelsjiwa1["English"]["Mood"] = "Mood";
	$fieldToolTipsjiwa1["English"]["Mood"] = "";
	$placeHoldersjiwa1["English"]["Mood"] = "";
	$fieldLabelsjiwa1["English"]["Afek"] = "Afek";
	$fieldToolTipsjiwa1["English"]["Afek"] = "";
	$placeHoldersjiwa1["English"]["Afek"] = "";
	$fieldLabelsjiwa1["English"]["Keserasian"] = "Keserasian";
	$fieldToolTipsjiwa1["English"]["Keserasian"] = "";
	$placeHoldersjiwa1["English"]["Keserasian"] = "";
	$fieldLabelsjiwa1["English"]["Auditorik"] = "Auditorik";
	$fieldToolTipsjiwa1["English"]["Auditorik"] = "";
	$placeHoldersjiwa1["English"]["Auditorik"] = "";
	$fieldLabelsjiwa1["English"]["Visual"] = "Visual";
	$fieldToolTipsjiwa1["English"]["Visual"] = "";
	$placeHoldersjiwa1["English"]["Visual"] = "";
	$fieldLabelsjiwa1["English"]["Taktil"] = "Taktil";
	$fieldToolTipsjiwa1["English"]["Taktil"] = "";
	$placeHoldersjiwa1["English"]["Taktil"] = "";
	$fieldLabelsjiwa1["English"]["Olfaktorik"] = "Olfaktorik";
	$fieldToolTipsjiwa1["English"]["Olfaktorik"] = "";
	$placeHoldersjiwa1["English"]["Olfaktorik"] = "";
	$fieldLabelsjiwa1["English"]["Gustatorik"] = "Gustatorik";
	$fieldToolTipsjiwa1["English"]["Gustatorik"] = "";
	$placeHoldersjiwa1["English"]["Gustatorik"] = "";
	$fieldLabelsjiwa1["English"]["Ilusi"] = "Ilusi";
	$fieldToolTipsjiwa1["English"]["Ilusi"] = "";
	$placeHoldersjiwa1["English"]["Ilusi"] = "";
	$fieldLabelsjiwa1["English"]["Depersonalisasi"] = "Depersonalisasi";
	$fieldToolTipsjiwa1["English"]["Depersonalisasi"] = "";
	$placeHoldersjiwa1["English"]["Depersonalisasi"] = "";
	$fieldLabelsjiwa1["English"]["Derealisasi"] = "Derealisasi";
	$fieldToolTipsjiwa1["English"]["Derealisasi"] = "";
	$placeHoldersjiwa1["English"]["Derealisasi"] = "";
	$fieldLabelsjiwa1["English"]["Blocking"] = "Blocking";
	$fieldToolTipsjiwa1["English"]["Blocking"] = "";
	$placeHoldersjiwa1["English"]["Blocking"] = "";
	$fieldLabelsjiwa1["English"]["Assosiasi_Longgar"] = "Assosiasi Longgar";
	$fieldToolTipsjiwa1["English"]["Assosiasi_Longgar"] = "";
	$placeHoldersjiwa1["English"]["Assosiasi_Longgar"] = "";
	$fieldLabelsjiwa1["English"]["Inkoheren"] = "Inkoheren";
	$fieldToolTipsjiwa1["English"]["Inkoheren"] = "";
	$placeHoldersjiwa1["English"]["Inkoheren"] = "";
	$fieldLabelsjiwa1["English"]["Flight_of_Idea"] = "Flight Of Idea";
	$fieldToolTipsjiwa1["English"]["Flight_of_Idea"] = "";
	$placeHoldersjiwa1["English"]["Flight_of_Idea"] = "";
	$fieldLabelsjiwa1["English"]["Sirkumstansia"] = "Sirkumstansia";
	$fieldToolTipsjiwa1["English"]["Sirkumstansia"] = "";
	$placeHoldersjiwa1["English"]["Sirkumstansia"] = "";
	$fieldLabelsjiwa1["English"]["Tangensial"] = "Tangensial";
	$fieldToolTipsjiwa1["English"]["Tangensial"] = "";
	$placeHoldersjiwa1["English"]["Tangensial"] = "";
	$fieldLabelsjiwa1["English"]["Neologisme"] = "Neologisme";
	$fieldToolTipsjiwa1["English"]["Neologisme"] = "";
	$placeHoldersjiwa1["English"]["Neologisme"] = "";
	$fieldLabelsjiwa1["English"]["Word_Salad"] = "Word Salad";
	$fieldToolTipsjiwa1["English"]["Word_Salad"] = "";
	$placeHoldersjiwa1["English"]["Word_Salad"] = "";
	$fieldLabelsjiwa1["English"]["Hendaya_Berbahasa"] = "Hendaya Berbahasa";
	$fieldToolTipsjiwa1["English"]["Hendaya_Berbahasa"] = "";
	$placeHoldersjiwa1["English"]["Hendaya_Berbahasa"] = "";
	$fieldLabelsjiwa1["English"]["Produktivitas"] = "Produktivitas";
	$fieldToolTipsjiwa1["English"]["Produktivitas"] = "";
	$placeHoldersjiwa1["English"]["Produktivitas"] = "";
	$fieldLabelsjiwa1["English"]["Preokupasi"] = "Preokupasi";
	$fieldToolTipsjiwa1["English"]["Preokupasi"] = "";
	$placeHoldersjiwa1["English"]["Preokupasi"] = "";
	$fieldLabelsjiwa1["English"]["Waham_bizarre"] = "Waham Bizarre";
	$fieldToolTipsjiwa1["English"]["Waham_bizarre"] = "";
	$placeHoldersjiwa1["English"]["Waham_bizarre"] = "";
	$fieldLabelsjiwa1["English"]["Waham_sistemik"] = "Waham Sistemik";
	$fieldToolTipsjiwa1["English"]["Waham_sistemik"] = "";
	$placeHoldersjiwa1["English"]["Waham_sistemik"] = "";
	$fieldLabelsjiwa1["English"]["Waham_nihilistik"] = "Waham Nihilistik";
	$fieldToolTipsjiwa1["English"]["Waham_nihilistik"] = "";
	$placeHoldersjiwa1["English"]["Waham_nihilistik"] = "";
	$fieldLabelsjiwa1["English"]["Waham_paranoid"] = "Waham Paranoid";
	$fieldToolTipsjiwa1["English"]["Waham_paranoid"] = "";
	$placeHoldersjiwa1["English"]["Waham_paranoid"] = "";
	$fieldLabelsjiwa1["English"]["Waham_kebesaran"] = "Waham Kebesaran";
	$fieldToolTipsjiwa1["English"]["Waham_kebesaran"] = "";
	$placeHoldersjiwa1["English"]["Waham_kebesaran"] = "";
	$fieldLabelsjiwa1["English"]["Waham_kejaran"] = "Waham Kejaran";
	$fieldToolTipsjiwa1["English"]["Waham_kejaran"] = "";
	$placeHoldersjiwa1["English"]["Waham_kejaran"] = "";
	$fieldLabelsjiwa1["English"]["Waham_rujukan"] = "Waham Rujukan";
	$fieldToolTipsjiwa1["English"]["Waham_rujukan"] = "";
	$placeHoldersjiwa1["English"]["Waham_rujukan"] = "";
	$fieldLabelsjiwa1["English"]["Waham_dikendalikan"] = "Waham Dikendalikan";
	$fieldToolTipsjiwa1["English"]["Waham_dikendalikan"] = "";
	$placeHoldersjiwa1["English"]["Waham_dikendalikan"] = "";
	$fieldLabelsjiwa1["English"]["Thought_of_withdrawl"] = "Thought Of Withdrawl";
	$fieldToolTipsjiwa1["English"]["Thought_of_withdrawl"] = "";
	$placeHoldersjiwa1["English"]["Thought_of_withdrawl"] = "";
	$fieldLabelsjiwa1["English"]["Thought_of_insertion"] = "Thought Of Insertion";
	$fieldToolTipsjiwa1["English"]["Thought_of_insertion"] = "";
	$placeHoldersjiwa1["English"]["Thought_of_insertion"] = "";
	$fieldLabelsjiwa1["English"]["Thought_of_broadcasting"] = "Thought Of Broadcasting";
	$fieldToolTipsjiwa1["English"]["Thought_of_broadcasting"] = "";
	$placeHoldersjiwa1["English"]["Thought_of_broadcasting"] = "";
	$fieldLabelsjiwa1["English"]["Obsesi"] = "Obsesi";
	$fieldToolTipsjiwa1["English"]["Obsesi"] = "";
	$placeHoldersjiwa1["English"]["Obsesi"] = "";
	$fieldLabelsjiwa1["English"]["Kompulsif"] = "Kompulsif";
	$fieldToolTipsjiwa1["English"]["Kompulsif"] = "";
	$placeHoldersjiwa1["English"]["Kompulsif"] = "";
	$fieldLabelsjiwa1["English"]["Fobia"] = "Fobia";
	$fieldToolTipsjiwa1["English"]["Fobia"] = "";
	$placeHoldersjiwa1["English"]["Fobia"] = "";
	$fieldLabelsjiwa1["English"]["Gagasan_untuk_bunuh_diri"] = "Gagasan Untuk Bunuh Diri";
	$fieldToolTipsjiwa1["English"]["Gagasan_untuk_bunuh_diri"] = "";
	$placeHoldersjiwa1["English"]["Gagasan_untuk_bunuh_diri"] = "";
	$fieldLabelsjiwa1["English"]["Taraf_kesadaran_dan_kesiagaan"] = "Taraf Kesadaran Dan Kesiagaan";
	$fieldToolTipsjiwa1["English"]["Taraf_kesadaran_dan_kesiagaan"] = "";
	$placeHoldersjiwa1["English"]["Taraf_kesadaran_dan_kesiagaan"] = "";
	$fieldLabelsjiwa1["English"]["Orieantasi_Waktu"] = "Orieantasi Waktu";
	$fieldToolTipsjiwa1["English"]["Orieantasi_Waktu"] = "";
	$placeHoldersjiwa1["English"]["Orieantasi_Waktu"] = "";
	$fieldLabelsjiwa1["English"]["Orieantasi_Tempat"] = "Orieantasi Tempat";
	$fieldToolTipsjiwa1["English"]["Orieantasi_Tempat"] = "";
	$placeHoldersjiwa1["English"]["Orieantasi_Tempat"] = "";
	$fieldLabelsjiwa1["English"]["Orieantasi_Orang"] = "Orieantasi Orang";
	$fieldToolTipsjiwa1["English"]["Orieantasi_Orang"] = "";
	$placeHoldersjiwa1["English"]["Orieantasi_Orang"] = "";
	$fieldLabelsjiwa1["English"]["Daya_ingat_Jangka_panjang"] = "Daya Ingat Jangka Panjang";
	$fieldToolTipsjiwa1["English"]["Daya_ingat_Jangka_panjang"] = "";
	$placeHoldersjiwa1["English"]["Daya_ingat_Jangka_panjang"] = "";
	$fieldLabelsjiwa1["English"]["Daya_ingat_Jangka_sedang"] = "Daya Ingat Jangka Sedang";
	$fieldToolTipsjiwa1["English"]["Daya_ingat_Jangka_sedang"] = "";
	$placeHoldersjiwa1["English"]["Daya_ingat_Jangka_sedang"] = "";
	$fieldLabelsjiwa1["English"]["Daya_ingat_Jangka_pendek"] = "Daya Ingat Jangka Pendek";
	$fieldToolTipsjiwa1["English"]["Daya_ingat_Jangka_pendek"] = "";
	$placeHoldersjiwa1["English"]["Daya_ingat_Jangka_pendek"] = "";
	$fieldLabelsjiwa1["English"]["Daya_ingat_Jangka_segera"] = "Daya Ingat Jangka Segera";
	$fieldToolTipsjiwa1["English"]["Daya_ingat_Jangka_segera"] = "";
	$placeHoldersjiwa1["English"]["Daya_ingat_Jangka_segera"] = "";
	$fieldLabelsjiwa1["English"]["Konsentrasi_perhatian"] = "Konsentrasi Perhatian";
	$fieldToolTipsjiwa1["English"]["Konsentrasi_perhatian"] = "";
	$placeHoldersjiwa1["English"]["Konsentrasi_perhatian"] = "";
	$fieldLabelsjiwa1["English"]["Kemampuan_Membaca_Menulis"] = "Kemampuan Membaca Menulis";
	$fieldToolTipsjiwa1["English"]["Kemampuan_Membaca_Menulis"] = "";
	$placeHoldersjiwa1["English"]["Kemampuan_Membaca_Menulis"] = "";
	$fieldLabelsjiwa1["English"]["Kemampuan_visuospasial"] = "Kemampuan Visuospasial";
	$fieldToolTipsjiwa1["English"]["Kemampuan_visuospasial"] = "";
	$placeHoldersjiwa1["English"]["Kemampuan_visuospasial"] = "";
	$fieldLabelsjiwa1["English"]["Pikiran_abstrak"] = "Pikiran Abstrak";
	$fieldToolTipsjiwa1["English"]["Pikiran_abstrak"] = "";
	$placeHoldersjiwa1["English"]["Pikiran_abstrak"] = "";
	$fieldLabelsjiwa1["English"]["Inteligensia_dan_kemampuan_informasi"] = "Inteligensia Dan Kemampuan Informasi";
	$fieldToolTipsjiwa1["English"]["Inteligensia_dan_kemampuan_informasi"] = "";
	$placeHoldersjiwa1["English"]["Inteligensia_dan_kemampuan_informasi"] = "";
	$fieldLabelsjiwa1["English"]["Kemampuan_mengendalikan_impuls"] = "Kemampuan Mengendalikan Impuls";
	$fieldToolTipsjiwa1["English"]["Kemampuan_mengendalikan_impuls"] = "";
	$placeHoldersjiwa1["English"]["Kemampuan_mengendalikan_impuls"] = "";
	$fieldLabelsjiwa1["English"]["Daya_nilai_dan_tilikan"] = "Daya Nilai Dan Tilikan";
	$fieldToolTipsjiwa1["English"]["Daya_nilai_dan_tilikan"] = "";
	$placeHoldersjiwa1["English"]["Daya_nilai_dan_tilikan"] = "";
	$fieldLabelsjiwa1["English"]["Daya_nilai_sosial"] = "Daya Nilai Sosial";
	$fieldToolTipsjiwa1["English"]["Daya_nilai_sosial"] = "";
	$placeHoldersjiwa1["English"]["Daya_nilai_sosial"] = "";
	$fieldLabelsjiwa1["English"]["Uji_daya_nilai"] = "Uji Daya Nilai";
	$fieldToolTipsjiwa1["English"]["Uji_daya_nilai"] = "";
	$placeHoldersjiwa1["English"]["Uji_daya_nilai"] = "";
	$fieldLabelsjiwa1["English"]["Penilaian_Daya_Realita"] = "Penilaian Daya Realita";
	$fieldToolTipsjiwa1["English"]["Penilaian_Daya_Realita"] = "";
	$placeHoldersjiwa1["English"]["Penilaian_Daya_Realita"] = "";
	$fieldLabelsjiwa1["English"]["Tilikan"] = "Tilikan";
	$fieldToolTipsjiwa1["English"]["Tilikan"] = "";
	$placeHoldersjiwa1["English"]["Tilikan"] = "";
	$fieldLabelsjiwa1["English"]["Taraf_dipercaya"] = "Taraf Dipercaya";
	$fieldToolTipsjiwa1["English"]["Taraf_dipercaya"] = "";
	$placeHoldersjiwa1["English"]["Taraf_dipercaya"] = "";
	$fieldLabelsjiwa1["English"]["Keadaan_Umum"] = "Keadaan Umum";
	$fieldToolTipsjiwa1["English"]["Keadaan_Umum"] = "";
	$placeHoldersjiwa1["English"]["Keadaan_Umum"] = "";
	$fieldLabelsjiwa1["English"]["Kesadaran"] = "Kesadaran";
	$fieldToolTipsjiwa1["English"]["Kesadaran"] = "";
	$placeHoldersjiwa1["English"]["Kesadaran"] = "";
	$fieldLabelsjiwa1["English"]["Status_gizi"] = "Status Gizi";
	$fieldToolTipsjiwa1["English"]["Status_gizi"] = "";
	$placeHoldersjiwa1["English"]["Status_gizi"] = "";
	$fieldLabelsjiwa1["English"]["Tekanan_Darah"] = "Tekanan Darah";
	$fieldToolTipsjiwa1["English"]["Tekanan_Darah"] = "";
	$placeHoldersjiwa1["English"]["Tekanan_Darah"] = "";
	$fieldLabelsjiwa1["English"]["Frekuensi_Nadi"] = "Frekuensi Nadi";
	$fieldToolTipsjiwa1["English"]["Frekuensi_Nadi"] = "";
	$placeHoldersjiwa1["English"]["Frekuensi_Nadi"] = "";
	$fieldLabelsjiwa1["English"]["Frekuensi_Nafas"] = "Frekuensi Nafas";
	$fieldToolTipsjiwa1["English"]["Frekuensi_Nafas"] = "";
	$placeHoldersjiwa1["English"]["Frekuensi_Nafas"] = "";
	$fieldLabelsjiwa1["English"]["Suhu"] = "Suhu";
	$fieldToolTipsjiwa1["English"]["Suhu"] = "";
	$placeHoldersjiwa1["English"]["Suhu"] = "";
	$fieldLabelsjiwa1["English"]["Mata_dan_THT"] = "Mata Dan THT";
	$fieldToolTipsjiwa1["English"]["Mata_dan_THT"] = "";
	$placeHoldersjiwa1["English"]["Mata_dan_THT"] = "";
	$fieldLabelsjiwa1["English"]["Mulut_dan_Gigi"] = "Mulut Dan Gigi";
	$fieldToolTipsjiwa1["English"]["Mulut_dan_Gigi"] = "";
	$placeHoldersjiwa1["English"]["Mulut_dan_Gigi"] = "";
	$fieldLabelsjiwa1["English"]["Thorax"] = "Thorax";
	$fieldToolTipsjiwa1["English"]["Thorax"] = "";
	$placeHoldersjiwa1["English"]["Thorax"] = "";
	$fieldLabelsjiwa1["English"]["Abdomen"] = "Abdomen";
	$fieldToolTipsjiwa1["English"]["Abdomen"] = "";
	$placeHoldersjiwa1["English"]["Abdomen"] = "";
	$fieldLabelsjiwa1["English"]["Extremitas"] = "Extremitas";
	$fieldToolTipsjiwa1["English"]["Extremitas"] = "";
	$placeHoldersjiwa1["English"]["Extremitas"] = "";
	$fieldLabelsjiwa1["English"]["Tanda_rangsang_Meningeal"] = "Tanda Rangsang Meningeal";
	$fieldToolTipsjiwa1["English"]["Tanda_rangsang_Meningeal"] = "";
	$placeHoldersjiwa1["English"]["Tanda_rangsang_Meningeal"] = "";
	$fieldLabelsjiwa1["English"]["Motorik"] = "Motorik";
	$fieldToolTipsjiwa1["English"]["Motorik"] = "";
	$placeHoldersjiwa1["English"]["Motorik"] = "";
	$fieldLabelsjiwa1["English"]["Sensorik"] = "Sensorik";
	$fieldToolTipsjiwa1["English"]["Sensorik"] = "";
	$placeHoldersjiwa1["English"]["Sensorik"] = "";
	$fieldLabelsjiwa1["English"]["Diagnosis_Axis"] = "Diagnosis Axis";
	$fieldToolTipsjiwa1["English"]["Diagnosis_Axis"] = "";
	$placeHoldersjiwa1["English"]["Diagnosis_Axis"] = "";
	$fieldLabelsjiwa1["English"]["Organobiologi"] = "Organobiologi";
	$fieldToolTipsjiwa1["English"]["Organobiologi"] = "";
	$placeHoldersjiwa1["English"]["Organobiologi"] = "";
	$fieldLabelsjiwa1["English"]["Psikologi"] = "Psikologi";
	$fieldToolTipsjiwa1["English"]["Psikologi"] = "";
	$placeHoldersjiwa1["English"]["Psikologi"] = "";
	$fieldLabelsjiwa1["English"]["Lingkungan_dan_sosial_ekonomi"] = "Lingkungan Dan Sosial Ekonomi";
	$fieldToolTipsjiwa1["English"]["Lingkungan_dan_sosial_ekonomi"] = "";
	$placeHoldersjiwa1["English"]["Lingkungan_dan_sosial_ekonomi"] = "";
	$fieldLabelsjiwa1["English"]["Quo_ad_Vitam"] = "Quo Ad Vitam";
	$fieldToolTipsjiwa1["English"]["Quo_ad_Vitam"] = "";
	$placeHoldersjiwa1["English"]["Quo_ad_Vitam"] = "";
	$fieldLabelsjiwa1["English"]["Quo_ad_Fungsionam"] = "Quo Ad Fungsionam";
	$fieldToolTipsjiwa1["English"]["Quo_ad_Fungsionam"] = "";
	$placeHoldersjiwa1["English"]["Quo_ad_Fungsionam"] = "";
	$fieldLabelsjiwa1["English"]["Quo_ad_Sanationam"] = "Quo Ad Sanationam";
	$fieldToolTipsjiwa1["English"]["Quo_ad_Sanationam"] = "";
	$placeHoldersjiwa1["English"]["Quo_ad_Sanationam"] = "";
	$fieldLabelsjiwa1["English"]["Hal_hal_yang_mendukung"] = "Hal-hal Yang Mendukung";
	$fieldToolTipsjiwa1["English"]["Hal_hal_yang_mendukung"] = "";
	$placeHoldersjiwa1["English"]["Hal_hal_yang_mendukung"] = "";
	$fieldLabelsjiwa1["English"]["Hal_hal_yang_memberatkan"] = "Hal-hal Yang Memberatkan";
	$fieldToolTipsjiwa1["English"]["Hal_hal_yang_memberatkan"] = "";
	$placeHoldersjiwa1["English"]["Hal_hal_yang_memberatkan"] = "";
	$fieldLabelsjiwa1["English"]["Farmakologi"] = "Farmakologi";
	$fieldToolTipsjiwa1["English"]["Farmakologi"] = "";
	$placeHoldersjiwa1["English"]["Farmakologi"] = "";
	$fieldLabelsjiwa1["English"]["Non_Farmakologi"] = "Non Farmakologi";
	$fieldToolTipsjiwa1["English"]["Non_Farmakologi"] = "";
	$placeHoldersjiwa1["English"]["Non_Farmakologi"] = "";
	$fieldLabelsjiwa1["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsjiwa1["English"]["id_pasien"] = "";
	$placeHoldersjiwa1["English"]["id_pasien"] = "";
	$fieldLabelsjiwa1["English"]["id_user"] = "Id User";
	$fieldToolTipsjiwa1["English"]["id_user"] = "";
	$placeHoldersjiwa1["English"]["id_user"] = "";
	$fieldLabelsjiwa1["English"]["id_resep"] = "Id Resep";
	$fieldToolTipsjiwa1["English"]["id_resep"] = "";
	$placeHoldersjiwa1["English"]["id_resep"] = "";
	$fieldLabelsjiwa1["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipsjiwa1["English"]["Nomor_Rm"] = "";
	$placeHoldersjiwa1["English"]["Nomor_Rm"] = "";
	$fieldLabelsjiwa1["English"]["id"] = "Id";
	$fieldToolTipsjiwa1["English"]["id"] = "";
	$placeHoldersjiwa1["English"]["id"] = "";
	$fieldLabelsjiwa1["English"]["name"] = "Name";
	$fieldToolTipsjiwa1["English"]["name"] = "";
	$placeHoldersjiwa1["English"]["name"] = "";
	$fieldLabelsjiwa1["English"]["username"] = "Username";
	$fieldToolTipsjiwa1["English"]["username"] = "";
	$placeHoldersjiwa1["English"]["username"] = "";
	$fieldLabelsjiwa1["English"]["email"] = "Email";
	$fieldToolTipsjiwa1["English"]["email"] = "";
	$placeHoldersjiwa1["English"]["email"] = "";
	$fieldLabelsjiwa1["English"]["Id_Pasien1"] = "Id Pasien1";
	$fieldToolTipsjiwa1["English"]["Id_Pasien1"] = "";
	$placeHoldersjiwa1["English"]["Id_Pasien1"] = "";
	$fieldLabelsjiwa1["English"]["Nama"] = "Nama";
	$fieldToolTipsjiwa1["English"]["Nama"] = "";
	$placeHoldersjiwa1["English"]["Nama"] = "";
	$fieldLabelsjiwa1["English"]["Alamat"] = "Alamat";
	$fieldToolTipsjiwa1["English"]["Alamat"] = "";
	$placeHoldersjiwa1["English"]["Alamat"] = "";
	$fieldLabelsjiwa1["English"]["Umur"] = "Umur";
	$fieldToolTipsjiwa1["English"]["Umur"] = "";
	$placeHoldersjiwa1["English"]["Umur"] = "";
	$fieldLabelsjiwa1["English"]["Status_Perkawinan"] = "Status Perkawinan";
	$fieldToolTipsjiwa1["English"]["Status_Perkawinan"] = "";
	$placeHoldersjiwa1["English"]["Status_Perkawinan"] = "";
	$fieldLabelsjiwa1["English"]["Jenis_Kelamin"] = "Jenis Kelamin";
	$fieldToolTipsjiwa1["English"]["Jenis_Kelamin"] = "";
	$placeHoldersjiwa1["English"]["Jenis_Kelamin"] = "";
	$fieldLabelsjiwa1["English"]["Suku_Ras"] = "Suku Ras";
	$fieldToolTipsjiwa1["English"]["Suku_Ras"] = "";
	$placeHoldersjiwa1["English"]["Suku_Ras"] = "";
	$fieldLabelsjiwa1["English"]["Agama"] = "Agama";
	$fieldToolTipsjiwa1["English"]["Agama"] = "";
	$placeHoldersjiwa1["English"]["Agama"] = "";
	$fieldLabelsjiwa1["English"]["Kerja"] = "Kerja";
	$fieldToolTipsjiwa1["English"]["Kerja"] = "";
	$placeHoldersjiwa1["English"]["Kerja"] = "";
	$fieldLabelsjiwa1["English"]["Tanggal_MRS"] = "Tanggal MRS";
	$fieldToolTipsjiwa1["English"]["Tanggal_MRS"] = "";
	$placeHoldersjiwa1["English"]["Tanggal_MRS"] = "";
	if (count($fieldToolTipsjiwa1["English"]))
		$tdatajiwa1[".isUseToolTips"] = true;
}


	$tdatajiwa1[".NCSearch"] = true;



$tdatajiwa1[".shortTableName"] = "jiwa1";
$tdatajiwa1[".nSecOptions"] = 0;

$tdatajiwa1[".mainTableOwnerID"] = "";
$tdatajiwa1[".entityType"] = 1;
$tdatajiwa1[".connId"] = "newrm_at_localhost";


$tdatajiwa1[".strOriginalTableName"] = "jiwa";

	



$tdatajiwa1[".showAddInPopup"] = false;

$tdatajiwa1[".showEditInPopup"] = false;

$tdatajiwa1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajiwa1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajiwa1[".listAjax"] = false;
//	temporary
$tdatajiwa1[".listAjax"] = false;

	$tdatajiwa1[".audit"] = false;

	$tdatajiwa1[".locking"] = false;


$pages = $tdatajiwa1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajiwa1[".edit"] = true;
	$tdatajiwa1[".afterEditAction"] = 1;
	$tdatajiwa1[".closePopupAfterEdit"] = 1;
	$tdatajiwa1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajiwa1[".add"] = true;
$tdatajiwa1[".afterAddAction"] = 1;
$tdatajiwa1[".closePopupAfterAdd"] = 1;
$tdatajiwa1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajiwa1[".list"] = true;
}



$tdatajiwa1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajiwa1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajiwa1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajiwa1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajiwa1[".printFriendly"] = true;
}



$tdatajiwa1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajiwa1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajiwa1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajiwa1[".isUseAjaxSuggest"] = true;

$tdatajiwa1[".rowHighlite"] = true;





$tdatajiwa1[".ajaxCodeSnippetAdded"] = false;

$tdatajiwa1[".buttonsAdded"] = false;

$tdatajiwa1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajiwa1[".isUseTimeForSearch"] = false;


$tdatajiwa1[".badgeColor"] = "E67349";


$tdatajiwa1[".allSearchFields"] = array();
$tdatajiwa1[".filterFields"] = array();
$tdatajiwa1[".requiredSearchFields"] = array();

$tdatajiwa1[".googleLikeFields"] = array();
$tdatajiwa1[".googleLikeFields"][] = "id_Jiwa";
$tdatajiwa1[".googleLikeFields"][] = "Keluhan_Utama";
$tdatajiwa1[".googleLikeFields"][] = "Anamnesis";
$tdatajiwa1[".googleLikeFields"][] = "Autoanamnesis";
$tdatajiwa1[".googleLikeFields"][] = "Alloanamnesis";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_gangguan_sekarang";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_gangguan_dahulu";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_gangguan_psikiatri";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_gangguan_medis";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_penggunaan_zat_psikoaktif";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_prenatal_dan_perinatal";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_masa_kanak_awal";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_masa_kanak_pertengahan";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_masa_kanak_akhir_dan_remaja";
$tdatajiwa1[".googleLikeFields"][] = "Masa_Dewasa";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_pendidikan";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_pekerjaan";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_pernikahan";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_Agama";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_Psikoseksual";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_aktivitas_sosial";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_hukum";
$tdatajiwa1[".googleLikeFields"][] = "Riwayat_keluarga";
$tdatajiwa1[".googleLikeFields"][] = "Genogram_keluarga";
$tdatajiwa1[".googleLikeFields"][] = "Situasi_kehidupan_sekarang";
$tdatajiwa1[".googleLikeFields"][] = "Persepsi_tentang_diri_dan_kehidupannya";
$tdatajiwa1[".googleLikeFields"][] = "Persepsi_keluarga_tentang_diri_pasien";
$tdatajiwa1[".googleLikeFields"][] = "Fantasi";
$tdatajiwa1[".googleLikeFields"][] = "Penampilan";
$tdatajiwa1[".googleLikeFields"][] = "Perilaku_dan_aktivitas_psikomotor";
$tdatajiwa1[".googleLikeFields"][] = "Sikap_terhadap_pemeriksa";
$tdatajiwa1[".googleLikeFields"][] = "Irama";
$tdatajiwa1[".googleLikeFields"][] = "Kecepatan_bicara";
$tdatajiwa1[".googleLikeFields"][] = "Volume";
$tdatajiwa1[".googleLikeFields"][] = "Kelancaran";
$tdatajiwa1[".googleLikeFields"][] = "Mood";
$tdatajiwa1[".googleLikeFields"][] = "Afek";
$tdatajiwa1[".googleLikeFields"][] = "Keserasian";
$tdatajiwa1[".googleLikeFields"][] = "Auditorik";
$tdatajiwa1[".googleLikeFields"][] = "Visual";
$tdatajiwa1[".googleLikeFields"][] = "Taktil";
$tdatajiwa1[".googleLikeFields"][] = "Olfaktorik";
$tdatajiwa1[".googleLikeFields"][] = "Gustatorik";
$tdatajiwa1[".googleLikeFields"][] = "Ilusi";
$tdatajiwa1[".googleLikeFields"][] = "Depersonalisasi";
$tdatajiwa1[".googleLikeFields"][] = "Derealisasi";
$tdatajiwa1[".googleLikeFields"][] = "Blocking";
$tdatajiwa1[".googleLikeFields"][] = "Assosiasi_Longgar";
$tdatajiwa1[".googleLikeFields"][] = "Inkoheren";
$tdatajiwa1[".googleLikeFields"][] = "Flight_of_Idea";
$tdatajiwa1[".googleLikeFields"][] = "Sirkumstansia";
$tdatajiwa1[".googleLikeFields"][] = "Tangensial";
$tdatajiwa1[".googleLikeFields"][] = "Neologisme";
$tdatajiwa1[".googleLikeFields"][] = "Word_Salad";
$tdatajiwa1[".googleLikeFields"][] = "Hendaya_Berbahasa";
$tdatajiwa1[".googleLikeFields"][] = "Produktivitas";
$tdatajiwa1[".googleLikeFields"][] = "Preokupasi";
$tdatajiwa1[".googleLikeFields"][] = "Waham_bizarre";
$tdatajiwa1[".googleLikeFields"][] = "Waham_sistemik";
$tdatajiwa1[".googleLikeFields"][] = "Waham_nihilistik";
$tdatajiwa1[".googleLikeFields"][] = "Waham_paranoid";
$tdatajiwa1[".googleLikeFields"][] = "Waham_kebesaran";
$tdatajiwa1[".googleLikeFields"][] = "Waham_kejaran";
$tdatajiwa1[".googleLikeFields"][] = "Waham_rujukan";
$tdatajiwa1[".googleLikeFields"][] = "Waham_dikendalikan";
$tdatajiwa1[".googleLikeFields"][] = "Thought_of_withdrawl";
$tdatajiwa1[".googleLikeFields"][] = "Thought_of_insertion";
$tdatajiwa1[".googleLikeFields"][] = "Thought_of_broadcasting";
$tdatajiwa1[".googleLikeFields"][] = "Obsesi";
$tdatajiwa1[".googleLikeFields"][] = "Kompulsif";
$tdatajiwa1[".googleLikeFields"][] = "Fobia";
$tdatajiwa1[".googleLikeFields"][] = "Gagasan_untuk_bunuh_diri";
$tdatajiwa1[".googleLikeFields"][] = "Taraf_kesadaran_dan_kesiagaan";
$tdatajiwa1[".googleLikeFields"][] = "Orieantasi_Waktu";
$tdatajiwa1[".googleLikeFields"][] = "Orieantasi_Tempat";
$tdatajiwa1[".googleLikeFields"][] = "Orieantasi_Orang";
$tdatajiwa1[".googleLikeFields"][] = "Daya_ingat_Jangka_panjang";
$tdatajiwa1[".googleLikeFields"][] = "Daya_ingat_Jangka_sedang";
$tdatajiwa1[".googleLikeFields"][] = "Daya_ingat_Jangka_pendek";
$tdatajiwa1[".googleLikeFields"][] = "Daya_ingat_Jangka_segera";
$tdatajiwa1[".googleLikeFields"][] = "Konsentrasi_perhatian";
$tdatajiwa1[".googleLikeFields"][] = "Kemampuan_Membaca_Menulis";
$tdatajiwa1[".googleLikeFields"][] = "Kemampuan_visuospasial";
$tdatajiwa1[".googleLikeFields"][] = "Pikiran_abstrak";
$tdatajiwa1[".googleLikeFields"][] = "Inteligensia_dan_kemampuan_informasi";
$tdatajiwa1[".googleLikeFields"][] = "Kemampuan_mengendalikan_impuls";
$tdatajiwa1[".googleLikeFields"][] = "Daya_nilai_dan_tilikan";
$tdatajiwa1[".googleLikeFields"][] = "Daya_nilai_sosial";
$tdatajiwa1[".googleLikeFields"][] = "Uji_daya_nilai";
$tdatajiwa1[".googleLikeFields"][] = "Penilaian_Daya_Realita";
$tdatajiwa1[".googleLikeFields"][] = "Tilikan";
$tdatajiwa1[".googleLikeFields"][] = "Taraf_dipercaya";
$tdatajiwa1[".googleLikeFields"][] = "Keadaan_Umum";
$tdatajiwa1[".googleLikeFields"][] = "Kesadaran";
$tdatajiwa1[".googleLikeFields"][] = "Status_gizi";
$tdatajiwa1[".googleLikeFields"][] = "Tekanan_Darah";
$tdatajiwa1[".googleLikeFields"][] = "Frekuensi_Nadi";
$tdatajiwa1[".googleLikeFields"][] = "Frekuensi_Nafas";
$tdatajiwa1[".googleLikeFields"][] = "Suhu";
$tdatajiwa1[".googleLikeFields"][] = "Mata_dan_THT";
$tdatajiwa1[".googleLikeFields"][] = "Mulut_dan_Gigi";
$tdatajiwa1[".googleLikeFields"][] = "Thorax";
$tdatajiwa1[".googleLikeFields"][] = "Abdomen";
$tdatajiwa1[".googleLikeFields"][] = "Extremitas";
$tdatajiwa1[".googleLikeFields"][] = "Tanda_rangsang_Meningeal";
$tdatajiwa1[".googleLikeFields"][] = "Motorik";
$tdatajiwa1[".googleLikeFields"][] = "Sensorik";
$tdatajiwa1[".googleLikeFields"][] = "Diagnosis_Axis";
$tdatajiwa1[".googleLikeFields"][] = "Organobiologi";
$tdatajiwa1[".googleLikeFields"][] = "Psikologi";
$tdatajiwa1[".googleLikeFields"][] = "Lingkungan_dan_sosial_ekonomi";
$tdatajiwa1[".googleLikeFields"][] = "Quo_ad_Vitam";
$tdatajiwa1[".googleLikeFields"][] = "Quo_ad_Fungsionam";
$tdatajiwa1[".googleLikeFields"][] = "Quo_ad_Sanationam";
$tdatajiwa1[".googleLikeFields"][] = "Hal-hal_yang_mendukung";
$tdatajiwa1[".googleLikeFields"][] = "Hal-hal_yang_memberatkan";
$tdatajiwa1[".googleLikeFields"][] = "Farmakologi";
$tdatajiwa1[".googleLikeFields"][] = "Non_Farmakologi";
$tdatajiwa1[".googleLikeFields"][] = "id_pasien";
$tdatajiwa1[".googleLikeFields"][] = "id_user";
$tdatajiwa1[".googleLikeFields"][] = "id_resep";
$tdatajiwa1[".googleLikeFields"][] = "Nomor_Rm";
$tdatajiwa1[".googleLikeFields"][] = "id";
$tdatajiwa1[".googleLikeFields"][] = "name";
$tdatajiwa1[".googleLikeFields"][] = "username";
$tdatajiwa1[".googleLikeFields"][] = "email";
$tdatajiwa1[".googleLikeFields"][] = "Id_Pasien1";
$tdatajiwa1[".googleLikeFields"][] = "Nama";
$tdatajiwa1[".googleLikeFields"][] = "Alamat";
$tdatajiwa1[".googleLikeFields"][] = "Umur";
$tdatajiwa1[".googleLikeFields"][] = "Status_Perkawinan";
$tdatajiwa1[".googleLikeFields"][] = "Jenis Kelamin";
$tdatajiwa1[".googleLikeFields"][] = "Suku_Ras";
$tdatajiwa1[".googleLikeFields"][] = "Agama";
$tdatajiwa1[".googleLikeFields"][] = "Kerja";
$tdatajiwa1[".googleLikeFields"][] = "Tanggal_MRS";



$tdatajiwa1[".tableType"] = "list";

$tdatajiwa1[".printerPageOrientation"] = 0;
$tdatajiwa1[".nPrinterPageScale"] = 100;

$tdatajiwa1[".nPrinterSplitRecords"] = 40;

$tdatajiwa1[".geocodingEnabled"] = false;










$tdatajiwa1[".pageSize"] = 20;

$tdatajiwa1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajiwa1[".strOrderBy"] = $tstrOrderBy;

$tdatajiwa1[".orderindexes"] = array();


$tdatajiwa1[".sqlHead"] = "SELECT id_Jiwa,  	Keluhan_Utama,  	Anamnesis,  	Autoanamnesis,  	Alloanamnesis,  	Riwayat_gangguan_sekarang,  	Riwayat_gangguan_dahulu,  	Riwayat_gangguan_psikiatri,  	Riwayat_gangguan_medis,  	Riwayat_penggunaan_zat_psikoaktif,  	Riwayat_prenatal_dan_perinatal,  	Riwayat_masa_kanak_awal,  	Riwayat_masa_kanak_pertengahan,  	Riwayat_masa_kanak_akhir_dan_remaja,  	Masa_Dewasa,  	Riwayat_pendidikan,  	Riwayat_pekerjaan,  	Riwayat_pernikahan,  	Riwayat_Agama,  	Riwayat_Psikoseksual,  	Riwayat_aktivitas_sosial,  	Riwayat_hukum,  	Riwayat_keluarga,  	Genogram_keluarga,  	Situasi_kehidupan_sekarang,  	Persepsi_tentang_diri_dan_kehidupannya,  	Persepsi_keluarga_tentang_diri_pasien,  	Fantasi,  	Penampilan,  	Perilaku_dan_aktivitas_psikomotor,  	Sikap_terhadap_pemeriksa,  	Irama,  	Kecepatan_bicara,  	Volume,  	Kelancaran,  	Mood,  	Afek,  	Keserasian,  	Auditorik,  	Visual,  	Taktil,  	Olfaktorik,  	Gustatorik,  	Ilusi,  	Depersonalisasi,  	Derealisasi,  	Blocking,  	Assosiasi_Longgar,  	Inkoheren,  	Flight_of_Idea,  	Sirkumstansia,  	Tangensial,  	Neologisme,  	Word_Salad,  	Hendaya_Berbahasa,  	Produktivitas,  	Preokupasi,  	Waham_bizarre,  	Waham_sistemik,  	Waham_nihilistik,  	Waham_paranoid,  	Waham_kebesaran,  	Waham_kejaran,  	Waham_rujukan,  	Waham_dikendalikan,  	Thought_of_withdrawl,  	Thought_of_insertion,  	Thought_of_broadcasting,  	Obsesi,  	Kompulsif,  	Fobia,  	Gagasan_untuk_bunuh_diri,  	Taraf_kesadaran_dan_kesiagaan,  	Orieantasi_Waktu,  	Orieantasi_Tempat,  	Orieantasi_Orang,  	Daya_ingat_Jangka_panjang,  	Daya_ingat_Jangka_sedang,  	Daya_ingat_Jangka_pendek,  	Daya_ingat_Jangka_segera,  	Konsentrasi_perhatian,  	Kemampuan_Membaca_Menulis,  	Kemampuan_visuospasial,  	Pikiran_abstrak,  	Inteligensia_dan_kemampuan_informasi,  	Kemampuan_mengendalikan_impuls,  	Daya_nilai_dan_tilikan,  	Daya_nilai_sosial,  	Uji_daya_nilai,  	Penilaian_Daya_Realita,  	Tilikan,  	Taraf_dipercaya,  	Keadaan_Umum,  	Kesadaran,  	Status_gizi,  	Tekanan_Darah,  	Frekuensi_Nadi,  	Frekuensi_Nafas,  	Suhu,  	Mata_dan_THT,  	Mulut_dan_Gigi,  	Thorax,  	Abdomen,  	Extremitas,  	Tanda_rangsang_Meningeal,  	Motorik,  	Sensorik,  	Diagnosis_Axis,  	Organobiologi,  	Psikologi,  	Lingkungan_dan_sosial_ekonomi,  	Quo_ad_Vitam,  	Quo_ad_Fungsionam,  	Quo_ad_Sanationam,  	`Hal-hal_yang_mendukung`,  	`Hal-hal_yang_memberatkan`,  	Farmakologi,  	Non_Farmakologi,  	jiwa.id_pasien,  	id_user,  	id_resep,  	Nomor_Rm,  users.id,  users.name,  users.username,  users.email,  identitas_pasien.Id_Pasien AS Id_Pasien1,  identitas_pasien.Nama,  identitas_pasien.Alamat,  identitas_pasien.Umur,  identitas_pasien.Status_Perkawinan,  identitas_pasien.`Jenis Kelamin`,  identitas_pasien.Suku_Ras,  identitas_pasien.Agama,  identitas_pasien.Pekerjaan AS Kerja,  identitas_pasien.Tanggal_MRS";
$tdatajiwa1[".sqlFrom"] = "FROM jiwa   INNER JOIN identitas_pasien ON jiwa.id_pasien = identitas_pasien.Id_Pasien  INNER JOIN users ON jiwa.id_user = users.id";
$tdatajiwa1[".sqlWhereExpr"] = "";
$tdatajiwa1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajiwa1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajiwa1[".arrGroupsPerPage"] = $arrGPP;

$tdatajiwa1[".highlightSearchResults"] = true;

$tableKeysjiwa1 = array();
$tableKeysjiwa1[] = "id_Jiwa";
$tdatajiwa1[".Keys"] = $tableKeysjiwa1;


$tdatajiwa1[".hideMobileList"] = array();




//	id_Jiwa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Jiwa";
	$fdata["GoodName"] = "id_Jiwa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","id_Jiwa");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_Jiwa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_Jiwa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatajiwa1["id_Jiwa"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "id_Jiwa";
//	Keluhan_Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan_Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Keluhan_Utama");
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


	$tdatajiwa1["Keluhan_Utama"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Keluhan_Utama";
//	Anamnesis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Anamnesis";
	$fdata["GoodName"] = "Anamnesis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Anamnesis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Anamnesis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Anamnesis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Anamnesis"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Anamnesis";
//	Autoanamnesis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Autoanamnesis";
	$fdata["GoodName"] = "Autoanamnesis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Autoanamnesis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Autoanamnesis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Autoanamnesis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Autoanamnesis"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Autoanamnesis";
//	Alloanamnesis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Alloanamnesis";
	$fdata["GoodName"] = "Alloanamnesis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Alloanamnesis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Alloanamnesis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Alloanamnesis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Alloanamnesis"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Alloanamnesis";
//	Riwayat_gangguan_sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat_gangguan_sekarang";
	$fdata["GoodName"] = "Riwayat_gangguan_sekarang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_gangguan_sekarang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_gangguan_sekarang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_gangguan_sekarang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_gangguan_sekarang"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_gangguan_sekarang";
//	Riwayat_gangguan_dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat_gangguan_dahulu";
	$fdata["GoodName"] = "Riwayat_gangguan_dahulu";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_gangguan_dahulu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_gangguan_dahulu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_gangguan_dahulu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_gangguan_dahulu"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_gangguan_dahulu";
//	Riwayat_gangguan_psikiatri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat_gangguan_psikiatri";
	$fdata["GoodName"] = "Riwayat_gangguan_psikiatri";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_gangguan_psikiatri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_gangguan_psikiatri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_gangguan_psikiatri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_gangguan_psikiatri"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_gangguan_psikiatri";
//	Riwayat_gangguan_medis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat_gangguan_medis";
	$fdata["GoodName"] = "Riwayat_gangguan_medis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_gangguan_medis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_gangguan_medis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_gangguan_medis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_gangguan_medis"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_gangguan_medis";
//	Riwayat_penggunaan_zat_psikoaktif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat_penggunaan_zat_psikoaktif";
	$fdata["GoodName"] = "Riwayat_penggunaan_zat_psikoaktif";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_penggunaan_zat_psikoaktif");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_penggunaan_zat_psikoaktif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_penggunaan_zat_psikoaktif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_penggunaan_zat_psikoaktif"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_penggunaan_zat_psikoaktif";
//	Riwayat_prenatal_dan_perinatal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Riwayat_prenatal_dan_perinatal";
	$fdata["GoodName"] = "Riwayat_prenatal_dan_perinatal";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_prenatal_dan_perinatal");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_prenatal_dan_perinatal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_prenatal_dan_perinatal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_prenatal_dan_perinatal"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_prenatal_dan_perinatal";
//	Riwayat_masa_kanak_awal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Riwayat_masa_kanak_awal";
	$fdata["GoodName"] = "Riwayat_masa_kanak_awal";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_masa_kanak_awal");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_masa_kanak_awal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_masa_kanak_awal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_masa_kanak_awal"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_masa_kanak_awal";
//	Riwayat_masa_kanak_pertengahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Riwayat_masa_kanak_pertengahan";
	$fdata["GoodName"] = "Riwayat_masa_kanak_pertengahan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_masa_kanak_pertengahan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_masa_kanak_pertengahan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_masa_kanak_pertengahan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_masa_kanak_pertengahan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_masa_kanak_pertengahan";
//	Riwayat_masa_kanak_akhir_dan_remaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Riwayat_masa_kanak_akhir_dan_remaja";
	$fdata["GoodName"] = "Riwayat_masa_kanak_akhir_dan_remaja";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_masa_kanak_akhir_dan_remaja");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_masa_kanak_akhir_dan_remaja";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_masa_kanak_akhir_dan_remaja";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_masa_kanak_akhir_dan_remaja"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_masa_kanak_akhir_dan_remaja";
//	Masa_Dewasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Masa_Dewasa";
	$fdata["GoodName"] = "Masa_Dewasa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Masa_Dewasa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Masa_Dewasa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Masa_Dewasa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Masa_Dewasa"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Masa_Dewasa";
//	Riwayat_pendidikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Riwayat_pendidikan";
	$fdata["GoodName"] = "Riwayat_pendidikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_pendidikan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_pendidikan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_pendidikan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_pendidikan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_pendidikan";
//	Riwayat_pekerjaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Riwayat_pekerjaan";
	$fdata["GoodName"] = "Riwayat_pekerjaan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_pekerjaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_pekerjaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_pekerjaan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_pekerjaan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_pekerjaan";
//	Riwayat_pernikahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Riwayat_pernikahan";
	$fdata["GoodName"] = "Riwayat_pernikahan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_pernikahan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_pernikahan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_pernikahan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_pernikahan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_pernikahan";
//	Riwayat_Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Riwayat_Agama";
	$fdata["GoodName"] = "Riwayat_Agama";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_Agama");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Agama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Agama";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_Agama"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_Agama";
//	Riwayat_Psikoseksual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Riwayat_Psikoseksual";
	$fdata["GoodName"] = "Riwayat_Psikoseksual";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_Psikoseksual");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_Psikoseksual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_Psikoseksual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_Psikoseksual"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_Psikoseksual";
//	Riwayat_aktivitas_sosial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Riwayat_aktivitas_sosial";
	$fdata["GoodName"] = "Riwayat_aktivitas_sosial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_aktivitas_sosial");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_aktivitas_sosial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_aktivitas_sosial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_aktivitas_sosial"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_aktivitas_sosial";
//	Riwayat_hukum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Riwayat_hukum";
	$fdata["GoodName"] = "Riwayat_hukum";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_hukum");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_hukum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_hukum";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_hukum"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_hukum";
//	Riwayat_keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Riwayat_keluarga";
	$fdata["GoodName"] = "Riwayat_keluarga";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Riwayat_keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Riwayat_keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Riwayat_keluarga";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Riwayat_keluarga"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Riwayat_keluarga";
//	Genogram_keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Genogram_keluarga";
	$fdata["GoodName"] = "Genogram_keluarga";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Genogram_keluarga");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Genogram_keluarga";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Genogram_keluarga";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Genogram_keluarga"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Genogram_keluarga";
//	Situasi_kehidupan_sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Situasi_kehidupan_sekarang";
	$fdata["GoodName"] = "Situasi_kehidupan_sekarang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Situasi_kehidupan_sekarang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Situasi_kehidupan_sekarang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Situasi_kehidupan_sekarang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Situasi_kehidupan_sekarang"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Situasi_kehidupan_sekarang";
//	Persepsi_tentang_diri_dan_kehidupannya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Persepsi_tentang_diri_dan_kehidupannya";
	$fdata["GoodName"] = "Persepsi_tentang_diri_dan_kehidupannya";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Persepsi_tentang_diri_dan_kehidupannya");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Persepsi_tentang_diri_dan_kehidupannya";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Persepsi_tentang_diri_dan_kehidupannya";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Persepsi_tentang_diri_dan_kehidupannya"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Persepsi_tentang_diri_dan_kehidupannya";
//	Persepsi_keluarga_tentang_diri_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Persepsi_keluarga_tentang_diri_pasien";
	$fdata["GoodName"] = "Persepsi_keluarga_tentang_diri_pasien";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Persepsi_keluarga_tentang_diri_pasien");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Persepsi_keluarga_tentang_diri_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Persepsi_keluarga_tentang_diri_pasien";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Persepsi_keluarga_tentang_diri_pasien"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Persepsi_keluarga_tentang_diri_pasien";
//	Fantasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Fantasi";
	$fdata["GoodName"] = "Fantasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Fantasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Fantasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fantasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Fantasi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Fantasi";
//	Penampilan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Penampilan";
	$fdata["GoodName"] = "Penampilan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Penampilan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penampilan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penampilan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Penampilan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Penampilan";
//	Perilaku_dan_aktivitas_psikomotor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Perilaku_dan_aktivitas_psikomotor";
	$fdata["GoodName"] = "Perilaku_dan_aktivitas_psikomotor";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Perilaku_dan_aktivitas_psikomotor");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Perilaku_dan_aktivitas_psikomotor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Perilaku_dan_aktivitas_psikomotor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Perilaku_dan_aktivitas_psikomotor"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Perilaku_dan_aktivitas_psikomotor";
//	Sikap_terhadap_pemeriksa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Sikap_terhadap_pemeriksa";
	$fdata["GoodName"] = "Sikap_terhadap_pemeriksa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Sikap_terhadap_pemeriksa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sikap_terhadap_pemeriksa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sikap_terhadap_pemeriksa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Sikap_terhadap_pemeriksa"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Sikap_terhadap_pemeriksa";
//	Irama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Irama";
	$fdata["GoodName"] = "Irama";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Irama");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Irama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Irama";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Irama"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Irama";
//	Kecepatan_bicara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Kecepatan_bicara";
	$fdata["GoodName"] = "Kecepatan_bicara";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kecepatan_bicara");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kecepatan_bicara";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kecepatan_bicara";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Kecepatan_bicara"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kecepatan_bicara";
//	Volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Volume";
	$fdata["GoodName"] = "Volume";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Volume");
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


	$tdatajiwa1["Volume"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Volume";
//	Kelancaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Kelancaran";
	$fdata["GoodName"] = "Kelancaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kelancaran");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kelancaran";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kelancaran";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Kelancaran"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kelancaran";
//	Mood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Mood";
	$fdata["GoodName"] = "Mood";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Mood");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mood";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mood";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Mood"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Mood";
//	Afek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Afek";
	$fdata["GoodName"] = "Afek";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Afek");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Afek";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Afek";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Afek"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Afek";
//	Keserasian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Keserasian";
	$fdata["GoodName"] = "Keserasian";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Keserasian");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keserasian";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Keserasian";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Keserasian"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Keserasian";
//	Auditorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Auditorik";
	$fdata["GoodName"] = "Auditorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Auditorik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Auditorik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Auditorik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Auditorik"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Auditorik";
//	Visual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Visual";
	$fdata["GoodName"] = "Visual";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Visual");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Visual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Visual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Visual"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Visual";
//	Taktil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Taktil";
	$fdata["GoodName"] = "Taktil";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Taktil");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Taktil";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Taktil";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Taktil"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Taktil";
//	Olfaktorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Olfaktorik";
	$fdata["GoodName"] = "Olfaktorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Olfaktorik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Olfaktorik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Olfaktorik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Olfaktorik"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Olfaktorik";
//	Gustatorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Gustatorik";
	$fdata["GoodName"] = "Gustatorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Gustatorik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gustatorik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gustatorik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Gustatorik"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Gustatorik";
//	Ilusi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Ilusi";
	$fdata["GoodName"] = "Ilusi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Ilusi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Ilusi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ilusi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Ilusi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Ilusi";
//	Depersonalisasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Depersonalisasi";
	$fdata["GoodName"] = "Depersonalisasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Depersonalisasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Depersonalisasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Depersonalisasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Depersonalisasi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Depersonalisasi";
//	Derealisasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Derealisasi";
	$fdata["GoodName"] = "Derealisasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Derealisasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Derealisasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Derealisasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Derealisasi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Derealisasi";
//	Blocking
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Blocking";
	$fdata["GoodName"] = "Blocking";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Blocking");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Blocking";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Blocking";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Blocking"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Blocking";
//	Assosiasi_Longgar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Assosiasi_Longgar";
	$fdata["GoodName"] = "Assosiasi_Longgar";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Assosiasi_Longgar");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Assosiasi_Longgar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Assosiasi_Longgar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Assosiasi_Longgar"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Assosiasi_Longgar";
//	Inkoheren
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Inkoheren";
	$fdata["GoodName"] = "Inkoheren";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Inkoheren");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Inkoheren";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inkoheren";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Inkoheren"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Inkoheren";
//	Flight_of_Idea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Flight_of_Idea";
	$fdata["GoodName"] = "Flight_of_Idea";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Flight_of_Idea");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Flight_of_Idea";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Flight_of_Idea";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Flight_of_Idea"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Flight_of_Idea";
//	Sirkumstansia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Sirkumstansia";
	$fdata["GoodName"] = "Sirkumstansia";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Sirkumstansia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sirkumstansia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sirkumstansia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Sirkumstansia"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Sirkumstansia";
//	Tangensial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Tangensial";
	$fdata["GoodName"] = "Tangensial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Tangensial");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tangensial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tangensial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Tangensial"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Tangensial";
//	Neologisme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Neologisme";
	$fdata["GoodName"] = "Neologisme";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Neologisme");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Neologisme";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Neologisme";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Neologisme"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Neologisme";
//	Word_Salad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Word_Salad";
	$fdata["GoodName"] = "Word_Salad";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Word_Salad");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Word_Salad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Word_Salad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Word_Salad"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Word_Salad";
//	Hendaya_Berbahasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Hendaya_Berbahasa";
	$fdata["GoodName"] = "Hendaya_Berbahasa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Hendaya_Berbahasa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hendaya_Berbahasa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hendaya_Berbahasa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Hendaya_Berbahasa"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Hendaya_Berbahasa";
//	Produktivitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Produktivitas";
	$fdata["GoodName"] = "Produktivitas";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Produktivitas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Produktivitas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Produktivitas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Produktivitas"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Produktivitas";
//	Preokupasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Preokupasi";
	$fdata["GoodName"] = "Preokupasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Preokupasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Preokupasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Preokupasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Preokupasi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Preokupasi";
//	Waham_bizarre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Waham_bizarre";
	$fdata["GoodName"] = "Waham_bizarre";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_bizarre");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_bizarre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_bizarre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_bizarre"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_bizarre";
//	Waham_sistemik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Waham_sistemik";
	$fdata["GoodName"] = "Waham_sistemik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_sistemik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_sistemik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_sistemik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_sistemik"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_sistemik";
//	Waham_nihilistik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Waham_nihilistik";
	$fdata["GoodName"] = "Waham_nihilistik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_nihilistik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_nihilistik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_nihilistik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_nihilistik"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_nihilistik";
//	Waham_paranoid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Waham_paranoid";
	$fdata["GoodName"] = "Waham_paranoid";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_paranoid");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_paranoid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_paranoid";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_paranoid"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_paranoid";
//	Waham_kebesaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Waham_kebesaran";
	$fdata["GoodName"] = "Waham_kebesaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_kebesaran");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_kebesaran";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_kebesaran";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_kebesaran"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_kebesaran";
//	Waham_kejaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Waham_kejaran";
	$fdata["GoodName"] = "Waham_kejaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_kejaran");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_kejaran";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_kejaran";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_kejaran"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_kejaran";
//	Waham_rujukan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Waham_rujukan";
	$fdata["GoodName"] = "Waham_rujukan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_rujukan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_rujukan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_rujukan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_rujukan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_rujukan";
//	Waham_dikendalikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Waham_dikendalikan";
	$fdata["GoodName"] = "Waham_dikendalikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Waham_dikendalikan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Waham_dikendalikan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Waham_dikendalikan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Waham_dikendalikan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Waham_dikendalikan";
//	Thought_of_withdrawl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Thought_of_withdrawl";
	$fdata["GoodName"] = "Thought_of_withdrawl";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Thought_of_withdrawl");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Thought_of_withdrawl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Thought_of_withdrawl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Thought_of_withdrawl"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Thought_of_withdrawl";
//	Thought_of_insertion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Thought_of_insertion";
	$fdata["GoodName"] = "Thought_of_insertion";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Thought_of_insertion");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Thought_of_insertion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Thought_of_insertion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Thought_of_insertion"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Thought_of_insertion";
//	Thought_of_broadcasting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Thought_of_broadcasting";
	$fdata["GoodName"] = "Thought_of_broadcasting";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Thought_of_broadcasting");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Thought_of_broadcasting";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Thought_of_broadcasting";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Thought_of_broadcasting"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Thought_of_broadcasting";
//	Obsesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Obsesi";
	$fdata["GoodName"] = "Obsesi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Obsesi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Obsesi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Obsesi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Obsesi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Obsesi";
//	Kompulsif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Kompulsif";
	$fdata["GoodName"] = "Kompulsif";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kompulsif");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kompulsif";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kompulsif";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Kompulsif"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kompulsif";
//	Fobia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Fobia";
	$fdata["GoodName"] = "Fobia";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Fobia");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Fobia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fobia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Fobia"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Fobia";
//	Gagasan_untuk_bunuh_diri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "Gagasan_untuk_bunuh_diri";
	$fdata["GoodName"] = "Gagasan_untuk_bunuh_diri";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Gagasan_untuk_bunuh_diri");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Gagasan_untuk_bunuh_diri";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gagasan_untuk_bunuh_diri";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Gagasan_untuk_bunuh_diri"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Gagasan_untuk_bunuh_diri";
//	Taraf_kesadaran_dan_kesiagaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "Taraf_kesadaran_dan_kesiagaan";
	$fdata["GoodName"] = "Taraf_kesadaran_dan_kesiagaan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Taraf_kesadaran_dan_kesiagaan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Taraf_kesadaran_dan_kesiagaan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Taraf_kesadaran_dan_kesiagaan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Taraf_kesadaran_dan_kesiagaan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Taraf_kesadaran_dan_kesiagaan";
//	Orieantasi_Waktu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "Orieantasi_Waktu";
	$fdata["GoodName"] = "Orieantasi_Waktu";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Orieantasi_Waktu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Orieantasi_Waktu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Orieantasi_Waktu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Orieantasi_Waktu"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Orieantasi_Waktu";
//	Orieantasi_Tempat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "Orieantasi_Tempat";
	$fdata["GoodName"] = "Orieantasi_Tempat";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Orieantasi_Tempat");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Orieantasi_Tempat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Orieantasi_Tempat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Orieantasi_Tempat"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Orieantasi_Tempat";
//	Orieantasi_Orang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "Orieantasi_Orang";
	$fdata["GoodName"] = "Orieantasi_Orang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Orieantasi_Orang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Orieantasi_Orang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Orieantasi_Orang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Orieantasi_Orang"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Orieantasi_Orang";
//	Daya_ingat_Jangka_panjang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "Daya_ingat_Jangka_panjang";
	$fdata["GoodName"] = "Daya_ingat_Jangka_panjang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Daya_ingat_Jangka_panjang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daya_ingat_Jangka_panjang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daya_ingat_Jangka_panjang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Daya_ingat_Jangka_panjang"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Daya_ingat_Jangka_panjang";
//	Daya_ingat_Jangka_sedang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "Daya_ingat_Jangka_sedang";
	$fdata["GoodName"] = "Daya_ingat_Jangka_sedang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Daya_ingat_Jangka_sedang");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daya_ingat_Jangka_sedang";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daya_ingat_Jangka_sedang";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Daya_ingat_Jangka_sedang"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Daya_ingat_Jangka_sedang";
//	Daya_ingat_Jangka_pendek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "Daya_ingat_Jangka_pendek";
	$fdata["GoodName"] = "Daya_ingat_Jangka_pendek";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Daya_ingat_Jangka_pendek");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daya_ingat_Jangka_pendek";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daya_ingat_Jangka_pendek";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Daya_ingat_Jangka_pendek"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Daya_ingat_Jangka_pendek";
//	Daya_ingat_Jangka_segera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "Daya_ingat_Jangka_segera";
	$fdata["GoodName"] = "Daya_ingat_Jangka_segera";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Daya_ingat_Jangka_segera");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daya_ingat_Jangka_segera";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daya_ingat_Jangka_segera";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Daya_ingat_Jangka_segera"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Daya_ingat_Jangka_segera";
//	Konsentrasi_perhatian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "Konsentrasi_perhatian";
	$fdata["GoodName"] = "Konsentrasi_perhatian";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Konsentrasi_perhatian");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Konsentrasi_perhatian";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Konsentrasi_perhatian";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Konsentrasi_perhatian"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Konsentrasi_perhatian";
//	Kemampuan_Membaca_Menulis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "Kemampuan_Membaca_Menulis";
	$fdata["GoodName"] = "Kemampuan_Membaca_Menulis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kemampuan_Membaca_Menulis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kemampuan_Membaca_Menulis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kemampuan_Membaca_Menulis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Kemampuan_Membaca_Menulis"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kemampuan_Membaca_Menulis";
//	Kemampuan_visuospasial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "Kemampuan_visuospasial";
	$fdata["GoodName"] = "Kemampuan_visuospasial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kemampuan_visuospasial");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kemampuan_visuospasial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kemampuan_visuospasial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Kemampuan_visuospasial"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kemampuan_visuospasial";
//	Pikiran_abstrak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "Pikiran_abstrak";
	$fdata["GoodName"] = "Pikiran_abstrak";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Pikiran_abstrak");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Pikiran_abstrak";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pikiran_abstrak";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Pikiran_abstrak"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Pikiran_abstrak";
//	Inteligensia_dan_kemampuan_informasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Inteligensia_dan_kemampuan_informasi";
	$fdata["GoodName"] = "Inteligensia_dan_kemampuan_informasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Inteligensia_dan_kemampuan_informasi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Inteligensia_dan_kemampuan_informasi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Inteligensia_dan_kemampuan_informasi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Inteligensia_dan_kemampuan_informasi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Inteligensia_dan_kemampuan_informasi";
//	Kemampuan_mengendalikan_impuls
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "Kemampuan_mengendalikan_impuls";
	$fdata["GoodName"] = "Kemampuan_mengendalikan_impuls";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kemampuan_mengendalikan_impuls");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kemampuan_mengendalikan_impuls";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kemampuan_mengendalikan_impuls";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Kemampuan_mengendalikan_impuls"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kemampuan_mengendalikan_impuls";
//	Daya_nilai_dan_tilikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "Daya_nilai_dan_tilikan";
	$fdata["GoodName"] = "Daya_nilai_dan_tilikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Daya_nilai_dan_tilikan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daya_nilai_dan_tilikan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daya_nilai_dan_tilikan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Daya_nilai_dan_tilikan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Daya_nilai_dan_tilikan";
//	Daya_nilai_sosial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "Daya_nilai_sosial";
	$fdata["GoodName"] = "Daya_nilai_sosial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Daya_nilai_sosial");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Daya_nilai_sosial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Daya_nilai_sosial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Daya_nilai_sosial"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Daya_nilai_sosial";
//	Uji_daya_nilai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "Uji_daya_nilai";
	$fdata["GoodName"] = "Uji_daya_nilai";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Uji_daya_nilai");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Uji_daya_nilai";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Uji_daya_nilai";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Uji_daya_nilai"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Uji_daya_nilai";
//	Penilaian_Daya_Realita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "Penilaian_Daya_Realita";
	$fdata["GoodName"] = "Penilaian_Daya_Realita";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Penilaian_Daya_Realita");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Penilaian_Daya_Realita";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Penilaian_Daya_Realita";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Penilaian_Daya_Realita"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Penilaian_Daya_Realita";
//	Tilikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "Tilikan";
	$fdata["GoodName"] = "Tilikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Tilikan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tilikan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tilikan";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Tilikan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Tilikan";
//	Taraf_dipercaya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Taraf_dipercaya";
	$fdata["GoodName"] = "Taraf_dipercaya";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Taraf_dipercaya");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Taraf_dipercaya";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Taraf_dipercaya";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Taraf_dipercaya"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Taraf_dipercaya";
//	Keadaan_Umum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "Keadaan_Umum";
	$fdata["GoodName"] = "Keadaan_Umum";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Keadaan_Umum");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Keadaan_Umum";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Keadaan_Umum";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Keadaan_Umum"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Keadaan_Umum";
//	Kesadaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "Kesadaran";
	$fdata["GoodName"] = "Kesadaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kesadaran");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Kesadaran";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Kesadaran";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Kesadaran"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kesadaran";
//	Status_gizi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "Status_gizi";
	$fdata["GoodName"] = "Status_gizi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Status_gizi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Status_gizi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status_gizi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Status_gizi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Status_gizi";
//	Tekanan_Darah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "Tekanan_Darah";
	$fdata["GoodName"] = "Tekanan_Darah";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Tekanan_Darah");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tekanan_Darah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tekanan_Darah";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Tekanan_Darah"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Tekanan_Darah";
//	Frekuensi_Nadi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "Frekuensi_Nadi";
	$fdata["GoodName"] = "Frekuensi_Nadi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Frekuensi_Nadi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Frekuensi_Nadi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Frekuensi_Nadi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Frekuensi_Nadi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Frekuensi_Nadi";
//	Frekuensi_Nafas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Frekuensi_Nafas";
	$fdata["GoodName"] = "Frekuensi_Nafas";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Frekuensi_Nafas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Frekuensi_Nafas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Frekuensi_Nafas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Frekuensi_Nafas"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Frekuensi_Nafas";
//	Suhu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "Suhu";
	$fdata["GoodName"] = "Suhu";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Suhu");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Suhu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Suhu";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Suhu"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Suhu";
//	Mata_dan_THT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Mata_dan_THT";
	$fdata["GoodName"] = "Mata_dan_THT";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Mata_dan_THT");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mata_dan_THT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mata_dan_THT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Mata_dan_THT"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Mata_dan_THT";
//	Mulut_dan_Gigi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "Mulut_dan_Gigi";
	$fdata["GoodName"] = "Mulut_dan_Gigi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Mulut_dan_Gigi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Mulut_dan_Gigi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mulut_dan_Gigi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Mulut_dan_Gigi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Mulut_dan_Gigi";
//	Thorax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "Thorax";
	$fdata["GoodName"] = "Thorax";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Thorax");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Thorax";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Thorax";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Thorax"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Thorax";
//	Abdomen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Abdomen";
	$fdata["GoodName"] = "Abdomen";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Abdomen");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Abdomen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Abdomen";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Abdomen"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Abdomen";
//	Extremitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "Extremitas";
	$fdata["GoodName"] = "Extremitas";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Extremitas");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Extremitas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Extremitas";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Extremitas"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Extremitas";
//	Tanda_rangsang_Meningeal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "Tanda_rangsang_Meningeal";
	$fdata["GoodName"] = "Tanda_rangsang_Meningeal";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Tanda_rangsang_Meningeal");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Tanda_rangsang_Meningeal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tanda_rangsang_Meningeal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Tanda_rangsang_Meningeal"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Tanda_rangsang_Meningeal";
//	Motorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "Motorik";
	$fdata["GoodName"] = "Motorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Motorik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Motorik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Motorik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Motorik"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Motorik";
//	Sensorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "Sensorik";
	$fdata["GoodName"] = "Sensorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Sensorik");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sensorik";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sensorik";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Sensorik"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Sensorik";
//	Diagnosis_Axis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "Diagnosis_Axis";
	$fdata["GoodName"] = "Diagnosis_Axis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Diagnosis_Axis");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Diagnosis_Axis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Diagnosis_Axis";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatajiwa1["Diagnosis_Axis"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Diagnosis_Axis";
//	Organobiologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "Organobiologi";
	$fdata["GoodName"] = "Organobiologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Organobiologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Organobiologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Organobiologi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Organobiologi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Organobiologi";
//	Psikologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "Psikologi";
	$fdata["GoodName"] = "Psikologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Psikologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Psikologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Psikologi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Psikologi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Psikologi";
//	Lingkungan_dan_sosial_ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "Lingkungan_dan_sosial_ekonomi";
	$fdata["GoodName"] = "Lingkungan_dan_sosial_ekonomi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Lingkungan_dan_sosial_ekonomi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Lingkungan_dan_sosial_ekonomi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lingkungan_dan_sosial_ekonomi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Lingkungan_dan_sosial_ekonomi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Lingkungan_dan_sosial_ekonomi";
//	Quo_ad_Vitam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "Quo_ad_Vitam";
	$fdata["GoodName"] = "Quo_ad_Vitam";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Quo_ad_Vitam");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Quo_ad_Vitam";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quo_ad_Vitam";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Quo_ad_Vitam"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Quo_ad_Vitam";
//	Quo_ad_Fungsionam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "Quo_ad_Fungsionam";
	$fdata["GoodName"] = "Quo_ad_Fungsionam";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Quo_ad_Fungsionam");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Quo_ad_Fungsionam";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quo_ad_Fungsionam";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Quo_ad_Fungsionam"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Quo_ad_Fungsionam";
//	Quo_ad_Sanationam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "Quo_ad_Sanationam";
	$fdata["GoodName"] = "Quo_ad_Sanationam";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Quo_ad_Sanationam");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Quo_ad_Sanationam";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quo_ad_Sanationam";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Quo_ad_Sanationam"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Quo_ad_Sanationam";
//	Hal-hal_yang_mendukung
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "Hal-hal_yang_mendukung";
	$fdata["GoodName"] = "Hal_hal_yang_mendukung";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Hal_hal_yang_mendukung");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hal-hal_yang_mendukung";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Hal-hal_yang_mendukung`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Hal-hal_yang_mendukung"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Hal-hal_yang_mendukung";
//	Hal-hal_yang_memberatkan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "Hal-hal_yang_memberatkan";
	$fdata["GoodName"] = "Hal_hal_yang_memberatkan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Hal_hal_yang_memberatkan");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Hal-hal_yang_memberatkan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Hal-hal_yang_memberatkan`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Hal-hal_yang_memberatkan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Hal-hal_yang_memberatkan";
//	Farmakologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "Farmakologi";
	$fdata["GoodName"] = "Farmakologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Farmakologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Farmakologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Farmakologi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Farmakologi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Farmakologi";
//	Non_Farmakologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "Non_Farmakologi";
	$fdata["GoodName"] = "Non_Farmakologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Non_Farmakologi");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Non_Farmakologi";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Non_Farmakologi";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatajiwa1["Non_Farmakologi"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Non_Farmakologi";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","id_pasien");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_pasien";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jiwa.id_pasien";

	
	
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


	$tdatajiwa1["id_pasien"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","id_user");
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


	$tdatajiwa1["id_user"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "id_user";
//	id_resep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "id_resep";
	$fdata["GoodName"] = "id_resep";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","id_resep");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "id_resep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_resep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
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


	$tdatajiwa1["id_resep"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "id_resep";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa1","Nomor_Rm");
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


	$tdatajiwa1["Nomor_Rm"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Nomor_Rm";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 123;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("jiwa1","id");
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


	$tdatajiwa1["id"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 124;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("jiwa1","name");
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


	$tdatajiwa1["name"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "name";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 125;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("jiwa1","username");
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


	$tdatajiwa1["username"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "username";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 126;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("jiwa1","email");
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


	$tdatajiwa1["email"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "email";
//	Id_Pasien1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 127;
	$fdata["strName"] = "Id_Pasien1";
	$fdata["GoodName"] = "Id_Pasien1";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Id_Pasien1");
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


	$tdatajiwa1["Id_Pasien1"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Id_Pasien1";
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 128;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Nama");
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


	$tdatajiwa1["Nama"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Nama";
//	Alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 129;
	$fdata["strName"] = "Alamat";
	$fdata["GoodName"] = "Alamat";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Alamat");
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


	$tdatajiwa1["Alamat"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Alamat";
//	Umur
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 130;
	$fdata["strName"] = "Umur";
	$fdata["GoodName"] = "Umur";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Umur");
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


	$tdatajiwa1["Umur"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Umur";
//	Status_Perkawinan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 131;
	$fdata["strName"] = "Status_Perkawinan";
	$fdata["GoodName"] = "Status_Perkawinan";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Status_Perkawinan");
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


	$tdatajiwa1["Status_Perkawinan"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Status_Perkawinan";
//	Jenis Kelamin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 132;
	$fdata["strName"] = "Jenis Kelamin";
	$fdata["GoodName"] = "Jenis_Kelamin";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Jenis_Kelamin");
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


	$tdatajiwa1["Jenis Kelamin"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Jenis Kelamin";
//	Suku_Ras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 133;
	$fdata["strName"] = "Suku_Ras";
	$fdata["GoodName"] = "Suku_Ras";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Suku_Ras");
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


	$tdatajiwa1["Suku_Ras"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Suku_Ras";
//	Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 134;
	$fdata["strName"] = "Agama";
	$fdata["GoodName"] = "Agama";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Agama");
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


	$tdatajiwa1["Agama"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Agama";
//	Kerja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 135;
	$fdata["strName"] = "Kerja";
	$fdata["GoodName"] = "Kerja";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Kerja");
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


	$tdatajiwa1["Kerja"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Kerja";
//	Tanggal_MRS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 136;
	$fdata["strName"] = "Tanggal_MRS";
	$fdata["GoodName"] = "Tanggal_MRS";
	$fdata["ownerTable"] = "identitas_pasien";
	$fdata["Label"] = GetFieldLabel("jiwa1","Tanggal_MRS");
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


	$tdatajiwa1["Tanggal_MRS"] = $fdata;
		$tdatajiwa1[".searchableFields"][] = "Tanggal_MRS";


$tables_data["jiwa1"]=&$tdatajiwa1;
$field_labels["jiwa1"] = &$fieldLabelsjiwa1;
$fieldToolTips["jiwa1"] = &$fieldToolTipsjiwa1;
$placeHolders["jiwa1"] = &$placeHoldersjiwa1;
$page_titles["jiwa1"] = &$pageTitlesjiwa1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jiwa1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["jiwa1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_jiwa1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Jiwa,  	Keluhan_Utama,  	Anamnesis,  	Autoanamnesis,  	Alloanamnesis,  	Riwayat_gangguan_sekarang,  	Riwayat_gangguan_dahulu,  	Riwayat_gangguan_psikiatri,  	Riwayat_gangguan_medis,  	Riwayat_penggunaan_zat_psikoaktif,  	Riwayat_prenatal_dan_perinatal,  	Riwayat_masa_kanak_awal,  	Riwayat_masa_kanak_pertengahan,  	Riwayat_masa_kanak_akhir_dan_remaja,  	Masa_Dewasa,  	Riwayat_pendidikan,  	Riwayat_pekerjaan,  	Riwayat_pernikahan,  	Riwayat_Agama,  	Riwayat_Psikoseksual,  	Riwayat_aktivitas_sosial,  	Riwayat_hukum,  	Riwayat_keluarga,  	Genogram_keluarga,  	Situasi_kehidupan_sekarang,  	Persepsi_tentang_diri_dan_kehidupannya,  	Persepsi_keluarga_tentang_diri_pasien,  	Fantasi,  	Penampilan,  	Perilaku_dan_aktivitas_psikomotor,  	Sikap_terhadap_pemeriksa,  	Irama,  	Kecepatan_bicara,  	Volume,  	Kelancaran,  	Mood,  	Afek,  	Keserasian,  	Auditorik,  	Visual,  	Taktil,  	Olfaktorik,  	Gustatorik,  	Ilusi,  	Depersonalisasi,  	Derealisasi,  	Blocking,  	Assosiasi_Longgar,  	Inkoheren,  	Flight_of_Idea,  	Sirkumstansia,  	Tangensial,  	Neologisme,  	Word_Salad,  	Hendaya_Berbahasa,  	Produktivitas,  	Preokupasi,  	Waham_bizarre,  	Waham_sistemik,  	Waham_nihilistik,  	Waham_paranoid,  	Waham_kebesaran,  	Waham_kejaran,  	Waham_rujukan,  	Waham_dikendalikan,  	Thought_of_withdrawl,  	Thought_of_insertion,  	Thought_of_broadcasting,  	Obsesi,  	Kompulsif,  	Fobia,  	Gagasan_untuk_bunuh_diri,  	Taraf_kesadaran_dan_kesiagaan,  	Orieantasi_Waktu,  	Orieantasi_Tempat,  	Orieantasi_Orang,  	Daya_ingat_Jangka_panjang,  	Daya_ingat_Jangka_sedang,  	Daya_ingat_Jangka_pendek,  	Daya_ingat_Jangka_segera,  	Konsentrasi_perhatian,  	Kemampuan_Membaca_Menulis,  	Kemampuan_visuospasial,  	Pikiran_abstrak,  	Inteligensia_dan_kemampuan_informasi,  	Kemampuan_mengendalikan_impuls,  	Daya_nilai_dan_tilikan,  	Daya_nilai_sosial,  	Uji_daya_nilai,  	Penilaian_Daya_Realita,  	Tilikan,  	Taraf_dipercaya,  	Keadaan_Umum,  	Kesadaran,  	Status_gizi,  	Tekanan_Darah,  	Frekuensi_Nadi,  	Frekuensi_Nafas,  	Suhu,  	Mata_dan_THT,  	Mulut_dan_Gigi,  	Thorax,  	Abdomen,  	Extremitas,  	Tanda_rangsang_Meningeal,  	Motorik,  	Sensorik,  	Diagnosis_Axis,  	Organobiologi,  	Psikologi,  	Lingkungan_dan_sosial_ekonomi,  	Quo_ad_Vitam,  	Quo_ad_Fungsionam,  	Quo_ad_Sanationam,  	`Hal-hal_yang_mendukung`,  	`Hal-hal_yang_memberatkan`,  	Farmakologi,  	Non_Farmakologi,  	jiwa.id_pasien,  	id_user,  	id_resep,  	Nomor_Rm,  users.id,  users.name,  users.username,  users.email,  identitas_pasien.Id_Pasien AS Id_Pasien1,  identitas_pasien.Nama,  identitas_pasien.Alamat,  identitas_pasien.Umur,  identitas_pasien.Status_Perkawinan,  identitas_pasien.`Jenis Kelamin`,  identitas_pasien.Suku_Ras,  identitas_pasien.Agama,  identitas_pasien.Pekerjaan AS Kerja,  identitas_pasien.Tanggal_MRS";
$proto0["m_strFrom"] = "FROM jiwa   INNER JOIN identitas_pasien ON jiwa.id_pasien = identitas_pasien.Id_Pasien  INNER JOIN users ON jiwa.id_user = users.id";
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
	"m_strName" => "id_Jiwa",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto6["m_sql"] = "id_Jiwa";
$proto6["m_srcTableName"] = "jiwa1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Utama",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto8["m_sql"] = "Keluhan_Utama";
$proto8["m_srcTableName"] = "jiwa1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Anamnesis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto10["m_sql"] = "Anamnesis";
$proto10["m_srcTableName"] = "jiwa1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Autoanamnesis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto12["m_sql"] = "Autoanamnesis";
$proto12["m_srcTableName"] = "jiwa1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Alloanamnesis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto14["m_sql"] = "Alloanamnesis";
$proto14["m_srcTableName"] = "jiwa1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_sekarang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto16["m_sql"] = "Riwayat_gangguan_sekarang";
$proto16["m_srcTableName"] = "jiwa1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_dahulu",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto18["m_sql"] = "Riwayat_gangguan_dahulu";
$proto18["m_srcTableName"] = "jiwa1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_psikiatri",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto20["m_sql"] = "Riwayat_gangguan_psikiatri";
$proto20["m_srcTableName"] = "jiwa1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_medis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto22["m_sql"] = "Riwayat_gangguan_medis";
$proto22["m_srcTableName"] = "jiwa1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_penggunaan_zat_psikoaktif",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto24["m_sql"] = "Riwayat_penggunaan_zat_psikoaktif";
$proto24["m_srcTableName"] = "jiwa1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_prenatal_dan_perinatal",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto26["m_sql"] = "Riwayat_prenatal_dan_perinatal";
$proto26["m_srcTableName"] = "jiwa1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_masa_kanak_awal",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto28["m_sql"] = "Riwayat_masa_kanak_awal";
$proto28["m_srcTableName"] = "jiwa1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_masa_kanak_pertengahan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto30["m_sql"] = "Riwayat_masa_kanak_pertengahan";
$proto30["m_srcTableName"] = "jiwa1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_masa_kanak_akhir_dan_remaja",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto32["m_sql"] = "Riwayat_masa_kanak_akhir_dan_remaja";
$proto32["m_srcTableName"] = "jiwa1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Masa_Dewasa",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto34["m_sql"] = "Masa_Dewasa";
$proto34["m_srcTableName"] = "jiwa1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_pendidikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto36["m_sql"] = "Riwayat_pendidikan";
$proto36["m_srcTableName"] = "jiwa1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_pekerjaan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto38["m_sql"] = "Riwayat_pekerjaan";
$proto38["m_srcTableName"] = "jiwa1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_pernikahan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto40["m_sql"] = "Riwayat_pernikahan";
$proto40["m_srcTableName"] = "jiwa1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Agama",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto42["m_sql"] = "Riwayat_Agama";
$proto42["m_srcTableName"] = "jiwa1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Psikoseksual",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto44["m_sql"] = "Riwayat_Psikoseksual";
$proto44["m_srcTableName"] = "jiwa1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_aktivitas_sosial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto46["m_sql"] = "Riwayat_aktivitas_sosial";
$proto46["m_srcTableName"] = "jiwa1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_hukum",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto48["m_sql"] = "Riwayat_hukum";
$proto48["m_srcTableName"] = "jiwa1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_keluarga",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto50["m_sql"] = "Riwayat_keluarga";
$proto50["m_srcTableName"] = "jiwa1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Genogram_keluarga",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto52["m_sql"] = "Genogram_keluarga";
$proto52["m_srcTableName"] = "jiwa1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Situasi_kehidupan_sekarang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto54["m_sql"] = "Situasi_kehidupan_sekarang";
$proto54["m_srcTableName"] = "jiwa1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Persepsi_tentang_diri_dan_kehidupannya",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto56["m_sql"] = "Persepsi_tentang_diri_dan_kehidupannya";
$proto56["m_srcTableName"] = "jiwa1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Persepsi_keluarga_tentang_diri_pasien",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto58["m_sql"] = "Persepsi_keluarga_tentang_diri_pasien";
$proto58["m_srcTableName"] = "jiwa1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Fantasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto60["m_sql"] = "Fantasi";
$proto60["m_srcTableName"] = "jiwa1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Penampilan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto62["m_sql"] = "Penampilan";
$proto62["m_srcTableName"] = "jiwa1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Perilaku_dan_aktivitas_psikomotor",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto64["m_sql"] = "Perilaku_dan_aktivitas_psikomotor";
$proto64["m_srcTableName"] = "jiwa1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Sikap_terhadap_pemeriksa",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto66["m_sql"] = "Sikap_terhadap_pemeriksa";
$proto66["m_srcTableName"] = "jiwa1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Irama",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto68["m_sql"] = "Irama";
$proto68["m_srcTableName"] = "jiwa1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Kecepatan_bicara",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto70["m_sql"] = "Kecepatan_bicara";
$proto70["m_srcTableName"] = "jiwa1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Volume",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto72["m_sql"] = "Volume";
$proto72["m_srcTableName"] = "jiwa1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Kelancaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto74["m_sql"] = "Kelancaran";
$proto74["m_srcTableName"] = "jiwa1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Mood",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto76["m_sql"] = "Mood";
$proto76["m_srcTableName"] = "jiwa1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Afek",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto78["m_sql"] = "Afek";
$proto78["m_srcTableName"] = "jiwa1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Keserasian",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto80["m_sql"] = "Keserasian";
$proto80["m_srcTableName"] = "jiwa1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Auditorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto82["m_sql"] = "Auditorik";
$proto82["m_srcTableName"] = "jiwa1";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Visual",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto84["m_sql"] = "Visual";
$proto84["m_srcTableName"] = "jiwa1";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Taktil",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto86["m_sql"] = "Taktil";
$proto86["m_srcTableName"] = "jiwa1";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Olfaktorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto88["m_sql"] = "Olfaktorik";
$proto88["m_srcTableName"] = "jiwa1";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Gustatorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto90["m_sql"] = "Gustatorik";
$proto90["m_srcTableName"] = "jiwa1";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Ilusi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto92["m_sql"] = "Ilusi";
$proto92["m_srcTableName"] = "jiwa1";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Depersonalisasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto94["m_sql"] = "Depersonalisasi";
$proto94["m_srcTableName"] = "jiwa1";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Derealisasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto96["m_sql"] = "Derealisasi";
$proto96["m_srcTableName"] = "jiwa1";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Blocking",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto98["m_sql"] = "Blocking";
$proto98["m_srcTableName"] = "jiwa1";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Assosiasi_Longgar",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto100["m_sql"] = "Assosiasi_Longgar";
$proto100["m_srcTableName"] = "jiwa1";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Inkoheren",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto102["m_sql"] = "Inkoheren";
$proto102["m_srcTableName"] = "jiwa1";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Flight_of_Idea",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto104["m_sql"] = "Flight_of_Idea";
$proto104["m_srcTableName"] = "jiwa1";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Sirkumstansia",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto106["m_sql"] = "Sirkumstansia";
$proto106["m_srcTableName"] = "jiwa1";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Tangensial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto108["m_sql"] = "Tangensial";
$proto108["m_srcTableName"] = "jiwa1";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Neologisme",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto110["m_sql"] = "Neologisme";
$proto110["m_srcTableName"] = "jiwa1";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Word_Salad",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto112["m_sql"] = "Word_Salad";
$proto112["m_srcTableName"] = "jiwa1";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Hendaya_Berbahasa",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto114["m_sql"] = "Hendaya_Berbahasa";
$proto114["m_srcTableName"] = "jiwa1";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Produktivitas",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto116["m_sql"] = "Produktivitas";
$proto116["m_srcTableName"] = "jiwa1";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Preokupasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto118["m_sql"] = "Preokupasi";
$proto118["m_srcTableName"] = "jiwa1";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_bizarre",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto120["m_sql"] = "Waham_bizarre";
$proto120["m_srcTableName"] = "jiwa1";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_sistemik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto122["m_sql"] = "Waham_sistemik";
$proto122["m_srcTableName"] = "jiwa1";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_nihilistik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto124["m_sql"] = "Waham_nihilistik";
$proto124["m_srcTableName"] = "jiwa1";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_paranoid",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto126["m_sql"] = "Waham_paranoid";
$proto126["m_srcTableName"] = "jiwa1";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_kebesaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto128["m_sql"] = "Waham_kebesaran";
$proto128["m_srcTableName"] = "jiwa1";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_kejaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto130["m_sql"] = "Waham_kejaran";
$proto130["m_srcTableName"] = "jiwa1";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_rujukan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto132["m_sql"] = "Waham_rujukan";
$proto132["m_srcTableName"] = "jiwa1";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_dikendalikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto134["m_sql"] = "Waham_dikendalikan";
$proto134["m_srcTableName"] = "jiwa1";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Thought_of_withdrawl",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto136["m_sql"] = "Thought_of_withdrawl";
$proto136["m_srcTableName"] = "jiwa1";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Thought_of_insertion",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto138["m_sql"] = "Thought_of_insertion";
$proto138["m_srcTableName"] = "jiwa1";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Thought_of_broadcasting",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto140["m_sql"] = "Thought_of_broadcasting";
$proto140["m_srcTableName"] = "jiwa1";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Obsesi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto142["m_sql"] = "Obsesi";
$proto142["m_srcTableName"] = "jiwa1";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Kompulsif",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto144["m_sql"] = "Kompulsif";
$proto144["m_srcTableName"] = "jiwa1";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Fobia",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto146["m_sql"] = "Fobia";
$proto146["m_srcTableName"] = "jiwa1";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Gagasan_untuk_bunuh_diri",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto148["m_sql"] = "Gagasan_untuk_bunuh_diri";
$proto148["m_srcTableName"] = "jiwa1";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Taraf_kesadaran_dan_kesiagaan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto150["m_sql"] = "Taraf_kesadaran_dan_kesiagaan";
$proto150["m_srcTableName"] = "jiwa1";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Orieantasi_Waktu",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto152["m_sql"] = "Orieantasi_Waktu";
$proto152["m_srcTableName"] = "jiwa1";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Orieantasi_Tempat",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto154["m_sql"] = "Orieantasi_Tempat";
$proto154["m_srcTableName"] = "jiwa1";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Orieantasi_Orang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto156["m_sql"] = "Orieantasi_Orang";
$proto156["m_srcTableName"] = "jiwa1";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_panjang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto158["m_sql"] = "Daya_ingat_Jangka_panjang";
$proto158["m_srcTableName"] = "jiwa1";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_sedang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto160["m_sql"] = "Daya_ingat_Jangka_sedang";
$proto160["m_srcTableName"] = "jiwa1";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_pendek",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto162["m_sql"] = "Daya_ingat_Jangka_pendek";
$proto162["m_srcTableName"] = "jiwa1";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_segera",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto164["m_sql"] = "Daya_ingat_Jangka_segera";
$proto164["m_srcTableName"] = "jiwa1";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "Konsentrasi_perhatian",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto166["m_sql"] = "Konsentrasi_perhatian";
$proto166["m_srcTableName"] = "jiwa1";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "Kemampuan_Membaca_Menulis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto168["m_sql"] = "Kemampuan_Membaca_Menulis";
$proto168["m_srcTableName"] = "jiwa1";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "Kemampuan_visuospasial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto170["m_sql"] = "Kemampuan_visuospasial";
$proto170["m_srcTableName"] = "jiwa1";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "Pikiran_abstrak",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto172["m_sql"] = "Pikiran_abstrak";
$proto172["m_srcTableName"] = "jiwa1";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Inteligensia_dan_kemampuan_informasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto174["m_sql"] = "Inteligensia_dan_kemampuan_informasi";
$proto174["m_srcTableName"] = "jiwa1";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "Kemampuan_mengendalikan_impuls",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto176["m_sql"] = "Kemampuan_mengendalikan_impuls";
$proto176["m_srcTableName"] = "jiwa1";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_nilai_dan_tilikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto178["m_sql"] = "Daya_nilai_dan_tilikan";
$proto178["m_srcTableName"] = "jiwa1";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_nilai_sosial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto180["m_sql"] = "Daya_nilai_sosial";
$proto180["m_srcTableName"] = "jiwa1";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "Uji_daya_nilai",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto182["m_sql"] = "Uji_daya_nilai";
$proto182["m_srcTableName"] = "jiwa1";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "Penilaian_Daya_Realita",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto184["m_sql"] = "Penilaian_Daya_Realita";
$proto184["m_srcTableName"] = "jiwa1";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "Tilikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto186["m_sql"] = "Tilikan";
$proto186["m_srcTableName"] = "jiwa1";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Taraf_dipercaya",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto188["m_sql"] = "Taraf_dipercaya";
$proto188["m_srcTableName"] = "jiwa1";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "Keadaan_Umum",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto190["m_sql"] = "Keadaan_Umum";
$proto190["m_srcTableName"] = "jiwa1";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "Kesadaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto192["m_sql"] = "Kesadaran";
$proto192["m_srcTableName"] = "jiwa1";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_gizi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto194["m_sql"] = "Status_gizi";
$proto194["m_srcTableName"] = "jiwa1";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "Tekanan_Darah",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto196["m_sql"] = "Tekanan_Darah";
$proto196["m_srcTableName"] = "jiwa1";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "Frekuensi_Nadi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto198["m_sql"] = "Frekuensi_Nadi";
$proto198["m_srcTableName"] = "jiwa1";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Frekuensi_Nafas",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto200["m_sql"] = "Frekuensi_Nafas";
$proto200["m_srcTableName"] = "jiwa1";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "Suhu",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto202["m_sql"] = "Suhu";
$proto202["m_srcTableName"] = "jiwa1";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Mata_dan_THT",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto204["m_sql"] = "Mata_dan_THT";
$proto204["m_srcTableName"] = "jiwa1";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "Mulut_dan_Gigi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto206["m_sql"] = "Mulut_dan_Gigi";
$proto206["m_srcTableName"] = "jiwa1";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "Thorax",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto208["m_sql"] = "Thorax";
$proto208["m_srcTableName"] = "jiwa1";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "Abdomen",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto210["m_sql"] = "Abdomen";
$proto210["m_srcTableName"] = "jiwa1";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "Extremitas",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto212["m_sql"] = "Extremitas";
$proto212["m_srcTableName"] = "jiwa1";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanda_rangsang_Meningeal",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto214["m_sql"] = "Tanda_rangsang_Meningeal";
$proto214["m_srcTableName"] = "jiwa1";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "Motorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto216["m_sql"] = "Motorik";
$proto216["m_srcTableName"] = "jiwa1";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "Sensorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto218["m_sql"] = "Sensorik";
$proto218["m_srcTableName"] = "jiwa1";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosis_Axis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto220["m_sql"] = "Diagnosis_Axis";
$proto220["m_srcTableName"] = "jiwa1";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "Organobiologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto222["m_sql"] = "Organobiologi";
$proto222["m_srcTableName"] = "jiwa1";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "Psikologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto224["m_sql"] = "Psikologi";
$proto224["m_srcTableName"] = "jiwa1";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "Lingkungan_dan_sosial_ekonomi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto226["m_sql"] = "Lingkungan_dan_sosial_ekonomi";
$proto226["m_srcTableName"] = "jiwa1";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "Quo_ad_Vitam",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto228["m_sql"] = "Quo_ad_Vitam";
$proto228["m_srcTableName"] = "jiwa1";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "Quo_ad_Fungsionam",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto230["m_sql"] = "Quo_ad_Fungsionam";
$proto230["m_srcTableName"] = "jiwa1";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "Quo_ad_Sanationam",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto232["m_sql"] = "Quo_ad_Sanationam";
$proto232["m_srcTableName"] = "jiwa1";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "Hal-hal_yang_mendukung",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto234["m_sql"] = "`Hal-hal_yang_mendukung`";
$proto234["m_srcTableName"] = "jiwa1";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "Hal-hal_yang_memberatkan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto236["m_sql"] = "`Hal-hal_yang_memberatkan`";
$proto236["m_srcTableName"] = "jiwa1";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "Farmakologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto238["m_sql"] = "Farmakologi";
$proto238["m_srcTableName"] = "jiwa1";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "Non_Farmakologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto240["m_sql"] = "Non_Farmakologi";
$proto240["m_srcTableName"] = "jiwa1";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto242["m_sql"] = "jiwa.id_pasien";
$proto242["m_srcTableName"] = "jiwa1";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto244["m_sql"] = "id_user";
$proto244["m_srcTableName"] = "jiwa1";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "id_resep",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto246["m_sql"] = "id_resep";
$proto246["m_srcTableName"] = "jiwa1";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto248["m_sql"] = "Nomor_Rm";
$proto248["m_srcTableName"] = "jiwa1";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
						$proto250=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "jiwa1"
));

$proto250["m_sql"] = "users.id";
$proto250["m_srcTableName"] = "jiwa1";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "";
$obj = new SQLFieldListItem($proto250);

$proto0["m_fieldlist"][]=$obj;
						$proto252=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "users",
	"m_srcTableName" => "jiwa1"
));

$proto252["m_sql"] = "users.name";
$proto252["m_srcTableName"] = "jiwa1";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto0["m_fieldlist"][]=$obj;
						$proto254=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "users",
	"m_srcTableName" => "jiwa1"
));

$proto254["m_sql"] = "users.username";
$proto254["m_srcTableName"] = "jiwa1";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "";
$obj = new SQLFieldListItem($proto254);

$proto0["m_fieldlist"][]=$obj;
						$proto256=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "jiwa1"
));

$proto256["m_sql"] = "users.email";
$proto256["m_srcTableName"] = "jiwa1";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "";
$obj = new SQLFieldListItem($proto256);

$proto0["m_fieldlist"][]=$obj;
						$proto258=array();
			$obj = new SQLField(array(
	"m_strName" => "Id_Pasien",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto258["m_sql"] = "identitas_pasien.Id_Pasien";
$proto258["m_srcTableName"] = "jiwa1";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "Id_Pasien1";
$obj = new SQLFieldListItem($proto258);

$proto0["m_fieldlist"][]=$obj;
						$proto260=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto260["m_sql"] = "identitas_pasien.Nama";
$proto260["m_srcTableName"] = "jiwa1";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "";
$obj = new SQLFieldListItem($proto260);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$obj = new SQLField(array(
	"m_strName" => "Alamat",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto262["m_sql"] = "identitas_pasien.Alamat";
$proto262["m_srcTableName"] = "jiwa1";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto264=array();
			$obj = new SQLField(array(
	"m_strName" => "Umur",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto264["m_sql"] = "identitas_pasien.Umur";
$proto264["m_srcTableName"] = "jiwa1";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "";
$obj = new SQLFieldListItem($proto264);

$proto0["m_fieldlist"][]=$obj;
						$proto266=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_Perkawinan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto266["m_sql"] = "identitas_pasien.Status_Perkawinan";
$proto266["m_srcTableName"] = "jiwa1";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "";
$obj = new SQLFieldListItem($proto266);

$proto0["m_fieldlist"][]=$obj;
						$proto268=array();
			$obj = new SQLField(array(
	"m_strName" => "Jenis Kelamin",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto268["m_sql"] = "identitas_pasien.`Jenis Kelamin`";
$proto268["m_srcTableName"] = "jiwa1";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "";
$obj = new SQLFieldListItem($proto268);

$proto0["m_fieldlist"][]=$obj;
						$proto270=array();
			$obj = new SQLField(array(
	"m_strName" => "Suku_Ras",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto270["m_sql"] = "identitas_pasien.Suku_Ras";
$proto270["m_srcTableName"] = "jiwa1";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "";
$obj = new SQLFieldListItem($proto270);

$proto0["m_fieldlist"][]=$obj;
						$proto272=array();
			$obj = new SQLField(array(
	"m_strName" => "Agama",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto272["m_sql"] = "identitas_pasien.Agama";
$proto272["m_srcTableName"] = "jiwa1";
$proto272["m_expr"]=$obj;
$proto272["m_alias"] = "";
$obj = new SQLFieldListItem($proto272);

$proto0["m_fieldlist"][]=$obj;
						$proto274=array();
			$obj = new SQLField(array(
	"m_strName" => "Pekerjaan",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto274["m_sql"] = "identitas_pasien.Pekerjaan";
$proto274["m_srcTableName"] = "jiwa1";
$proto274["m_expr"]=$obj;
$proto274["m_alias"] = "Kerja";
$obj = new SQLFieldListItem($proto274);

$proto0["m_fieldlist"][]=$obj;
						$proto276=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanggal_MRS",
	"m_strTable" => "identitas_pasien",
	"m_srcTableName" => "jiwa1"
));

$proto276["m_sql"] = "identitas_pasien.Tanggal_MRS";
$proto276["m_srcTableName"] = "jiwa1";
$proto276["m_expr"]=$obj;
$proto276["m_alias"] = "";
$obj = new SQLFieldListItem($proto276);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto278=array();
$proto278["m_link"] = "SQLL_MAIN";
			$proto279=array();
$proto279["m_strName"] = "jiwa";
$proto279["m_srcTableName"] = "jiwa1";
$proto279["m_columns"] = array();
$proto279["m_columns"][] = "id_Jiwa";
$proto279["m_columns"][] = "Keluhan_Utama";
$proto279["m_columns"][] = "Anamnesis";
$proto279["m_columns"][] = "Autoanamnesis";
$proto279["m_columns"][] = "Alloanamnesis";
$proto279["m_columns"][] = "Riwayat_gangguan_sekarang";
$proto279["m_columns"][] = "Riwayat_gangguan_dahulu";
$proto279["m_columns"][] = "Riwayat_gangguan_psikiatri";
$proto279["m_columns"][] = "Riwayat_gangguan_medis";
$proto279["m_columns"][] = "Riwayat_penggunaan_zat_psikoaktif";
$proto279["m_columns"][] = "Riwayat_prenatal_dan_perinatal";
$proto279["m_columns"][] = "Riwayat_masa_kanak_awal";
$proto279["m_columns"][] = "Riwayat_masa_kanak_pertengahan";
$proto279["m_columns"][] = "Riwayat_masa_kanak_akhir_dan_remaja";
$proto279["m_columns"][] = "Masa_Dewasa";
$proto279["m_columns"][] = "Riwayat_pendidikan";
$proto279["m_columns"][] = "Riwayat_pekerjaan";
$proto279["m_columns"][] = "Riwayat_pernikahan";
$proto279["m_columns"][] = "Riwayat_Agama";
$proto279["m_columns"][] = "Riwayat_Psikoseksual";
$proto279["m_columns"][] = "Riwayat_aktivitas_sosial";
$proto279["m_columns"][] = "Riwayat_hukum";
$proto279["m_columns"][] = "Riwayat_keluarga";
$proto279["m_columns"][] = "Genogram_keluarga";
$proto279["m_columns"][] = "Situasi_kehidupan_sekarang";
$proto279["m_columns"][] = "Persepsi_tentang_diri_dan_kehidupannya";
$proto279["m_columns"][] = "Persepsi_keluarga_tentang_diri_pasien";
$proto279["m_columns"][] = "Fantasi";
$proto279["m_columns"][] = "Penampilan";
$proto279["m_columns"][] = "Perilaku_dan_aktivitas_psikomotor";
$proto279["m_columns"][] = "Sikap_terhadap_pemeriksa";
$proto279["m_columns"][] = "Irama";
$proto279["m_columns"][] = "Kecepatan_bicara";
$proto279["m_columns"][] = "Volume";
$proto279["m_columns"][] = "Kelancaran";
$proto279["m_columns"][] = "Mood";
$proto279["m_columns"][] = "Afek";
$proto279["m_columns"][] = "Keserasian";
$proto279["m_columns"][] = "Auditorik";
$proto279["m_columns"][] = "Visual";
$proto279["m_columns"][] = "Taktil";
$proto279["m_columns"][] = "Olfaktorik";
$proto279["m_columns"][] = "Gustatorik";
$proto279["m_columns"][] = "Ilusi";
$proto279["m_columns"][] = "Depersonalisasi";
$proto279["m_columns"][] = "Derealisasi";
$proto279["m_columns"][] = "Blocking";
$proto279["m_columns"][] = "Assosiasi_Longgar";
$proto279["m_columns"][] = "Inkoheren";
$proto279["m_columns"][] = "Flight_of_Idea";
$proto279["m_columns"][] = "Sirkumstansia";
$proto279["m_columns"][] = "Tangensial";
$proto279["m_columns"][] = "Neologisme";
$proto279["m_columns"][] = "Word_Salad";
$proto279["m_columns"][] = "Hendaya_Berbahasa";
$proto279["m_columns"][] = "Produktivitas";
$proto279["m_columns"][] = "Preokupasi";
$proto279["m_columns"][] = "Waham_bizarre";
$proto279["m_columns"][] = "Waham_sistemik";
$proto279["m_columns"][] = "Waham_nihilistik";
$proto279["m_columns"][] = "Waham_paranoid";
$proto279["m_columns"][] = "Waham_kebesaran";
$proto279["m_columns"][] = "Waham_kejaran";
$proto279["m_columns"][] = "Waham_rujukan";
$proto279["m_columns"][] = "Waham_dikendalikan";
$proto279["m_columns"][] = "Thought_of_withdrawl";
$proto279["m_columns"][] = "Thought_of_insertion";
$proto279["m_columns"][] = "Thought_of_broadcasting";
$proto279["m_columns"][] = "Obsesi";
$proto279["m_columns"][] = "Kompulsif";
$proto279["m_columns"][] = "Fobia";
$proto279["m_columns"][] = "Gagasan_untuk_bunuh_diri";
$proto279["m_columns"][] = "Taraf_kesadaran_dan_kesiagaan";
$proto279["m_columns"][] = "Orieantasi_Waktu";
$proto279["m_columns"][] = "Orieantasi_Tempat";
$proto279["m_columns"][] = "Orieantasi_Orang";
$proto279["m_columns"][] = "Daya_ingat_Jangka_panjang";
$proto279["m_columns"][] = "Daya_ingat_Jangka_sedang";
$proto279["m_columns"][] = "Daya_ingat_Jangka_pendek";
$proto279["m_columns"][] = "Daya_ingat_Jangka_segera";
$proto279["m_columns"][] = "Konsentrasi_perhatian";
$proto279["m_columns"][] = "Kemampuan_Membaca_Menulis";
$proto279["m_columns"][] = "Kemampuan_visuospasial";
$proto279["m_columns"][] = "Pikiran_abstrak";
$proto279["m_columns"][] = "Inteligensia_dan_kemampuan_informasi";
$proto279["m_columns"][] = "Kemampuan_mengendalikan_impuls";
$proto279["m_columns"][] = "Daya_nilai_dan_tilikan";
$proto279["m_columns"][] = "Daya_nilai_sosial";
$proto279["m_columns"][] = "Uji_daya_nilai";
$proto279["m_columns"][] = "Penilaian_Daya_Realita";
$proto279["m_columns"][] = "Tilikan";
$proto279["m_columns"][] = "Taraf_dipercaya";
$proto279["m_columns"][] = "Keadaan_Umum";
$proto279["m_columns"][] = "Kesadaran";
$proto279["m_columns"][] = "Status_gizi";
$proto279["m_columns"][] = "Tekanan_Darah";
$proto279["m_columns"][] = "Frekuensi_Nadi";
$proto279["m_columns"][] = "Frekuensi_Nafas";
$proto279["m_columns"][] = "Suhu";
$proto279["m_columns"][] = "Mata_dan_THT";
$proto279["m_columns"][] = "Mulut_dan_Gigi";
$proto279["m_columns"][] = "Thorax";
$proto279["m_columns"][] = "Abdomen";
$proto279["m_columns"][] = "Extremitas";
$proto279["m_columns"][] = "Tanda_rangsang_Meningeal";
$proto279["m_columns"][] = "Motorik";
$proto279["m_columns"][] = "Sensorik";
$proto279["m_columns"][] = "Diagnosis_Axis";
$proto279["m_columns"][] = "Organobiologi";
$proto279["m_columns"][] = "Psikologi";
$proto279["m_columns"][] = "Lingkungan_dan_sosial_ekonomi";
$proto279["m_columns"][] = "Quo_ad_Vitam";
$proto279["m_columns"][] = "Quo_ad_Fungsionam";
$proto279["m_columns"][] = "Quo_ad_Sanationam";
$proto279["m_columns"][] = "Hal-hal_yang_mendukung";
$proto279["m_columns"][] = "Hal-hal_yang_memberatkan";
$proto279["m_columns"][] = "Farmakologi";
$proto279["m_columns"][] = "Non_Farmakologi";
$proto279["m_columns"][] = "id_pasien";
$proto279["m_columns"][] = "id_user";
$proto279["m_columns"][] = "id_resep";
$proto279["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto279);

$proto278["m_table"] = $obj;
$proto278["m_sql"] = "jiwa";
$proto278["m_alias"] = "";
$proto278["m_srcTableName"] = "jiwa1";
$proto280=array();
$proto280["m_sql"] = "";
$proto280["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto280["m_column"]=$obj;
$proto280["m_contained"] = array();
$proto280["m_strCase"] = "";
$proto280["m_havingmode"] = false;
$proto280["m_inBrackets"] = false;
$proto280["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto280);

$proto278["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto278);

$proto0["m_fromlist"][]=$obj;
												$proto282=array();
$proto282["m_link"] = "SQLL_INNERJOIN";
			$proto283=array();
$proto283["m_strName"] = "identitas_pasien";
$proto283["m_srcTableName"] = "jiwa1";
$proto283["m_columns"] = array();
$proto283["m_columns"][] = "Id_Pasien";
$proto283["m_columns"][] = "Nama";
$proto283["m_columns"][] = "Alamat";
$proto283["m_columns"][] = "Umur";
$proto283["m_columns"][] = "Status_Perkawinan";
$proto283["m_columns"][] = "Jenis Kelamin";
$proto283["m_columns"][] = "Suku_Ras";
$proto283["m_columns"][] = "Agama";
$proto283["m_columns"][] = "Pekerjaan";
$proto283["m_columns"][] = "Tanggal_MRS";
$obj = new SQLTable($proto283);

$proto282["m_table"] = $obj;
$proto282["m_sql"] = "INNER JOIN identitas_pasien ON jiwa.id_pasien = identitas_pasien.Id_Pasien";
$proto282["m_alias"] = "";
$proto282["m_srcTableName"] = "jiwa1";
$proto284=array();
$proto284["m_sql"] = "jiwa.id_pasien = identitas_pasien.Id_Pasien";
$proto284["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto284["m_column"]=$obj;
$proto284["m_contained"] = array();
$proto284["m_strCase"] = "= identitas_pasien.Id_Pasien";
$proto284["m_havingmode"] = false;
$proto284["m_inBrackets"] = false;
$proto284["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto284);

$proto282["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto282);

$proto0["m_fromlist"][]=$obj;
												$proto286=array();
$proto286["m_link"] = "SQLL_INNERJOIN";
			$proto287=array();
$proto287["m_strName"] = "users";
$proto287["m_srcTableName"] = "jiwa1";
$proto287["m_columns"] = array();
$proto287["m_columns"][] = "id";
$proto287["m_columns"][] = "name";
$proto287["m_columns"][] = "username";
$proto287["m_columns"][] = "email";
$proto287["m_columns"][] = "email_verified_at";
$proto287["m_columns"][] = "password";
$proto287["m_columns"][] = "two_factor_secret";
$proto287["m_columns"][] = "two_factor_recovery_codes";
$proto287["m_columns"][] = "level";
$proto287["m_columns"][] = "remember_token";
$proto287["m_columns"][] = "profile_photo_path";
$proto287["m_columns"][] = "created_at";
$proto287["m_columns"][] = "updated_at";
$obj = new SQLTable($proto287);

$proto286["m_table"] = $obj;
$proto286["m_sql"] = "INNER JOIN users ON jiwa.id_user = users.id";
$proto286["m_alias"] = "";
$proto286["m_srcTableName"] = "jiwa1";
$proto288=array();
$proto288["m_sql"] = "jiwa.id_user = users.id";
$proto288["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa1"
));

$proto288["m_column"]=$obj;
$proto288["m_contained"] = array();
$proto288["m_strCase"] = "= users.id";
$proto288["m_havingmode"] = false;
$proto288["m_inBrackets"] = false;
$proto288["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto288);

$proto286["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto286);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="jiwa1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jiwa1 = createSqlQuery_jiwa1();


	
		;

																																																																																																																																								

$tdatajiwa1[".sqlquery"] = $queryData_jiwa1;



$tableEvents["jiwa1"] = new eventsBase;
$tdatajiwa1[".hasEvents"] = false;

?>