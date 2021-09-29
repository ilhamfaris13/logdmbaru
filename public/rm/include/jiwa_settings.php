<?php
$tdatajiwa = array();
$tdatajiwa[".searchableFields"] = array();
$tdatajiwa[".ShortName"] = "jiwa";
$tdatajiwa[".OwnerID"] = "";
$tdatajiwa[".OriginalTable"] = "jiwa";


$tdatajiwa[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatajiwa[".originalPagesByType"] = $tdatajiwa[".pagesByType"];
$tdatajiwa[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatajiwa[".originalPages"] = $tdatajiwa[".pages"];
$tdatajiwa[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatajiwa[".originalDefaultPages"] = $tdatajiwa[".defaultPages"];

//	field labels
$fieldLabelsjiwa = array();
$fieldToolTipsjiwa = array();
$pageTitlesjiwa = array();
$placeHoldersjiwa = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjiwa["English"] = array();
	$fieldToolTipsjiwa["English"] = array();
	$placeHoldersjiwa["English"] = array();
	$pageTitlesjiwa["English"] = array();
	$fieldLabelsjiwa["English"]["id_Jiwa"] = "Id Jiwa";
	$fieldToolTipsjiwa["English"]["id_Jiwa"] = "";
	$placeHoldersjiwa["English"]["id_Jiwa"] = "";
	$fieldLabelsjiwa["English"]["Keluhan_Utama"] = "Keluhan Utama";
	$fieldToolTipsjiwa["English"]["Keluhan_Utama"] = "";
	$placeHoldersjiwa["English"]["Keluhan_Utama"] = "";
	$fieldLabelsjiwa["English"]["Anamnesis"] = "Anamnesis";
	$fieldToolTipsjiwa["English"]["Anamnesis"] = "";
	$placeHoldersjiwa["English"]["Anamnesis"] = "";
	$fieldLabelsjiwa["English"]["Autoanamnesis"] = "Autoanamnesis";
	$fieldToolTipsjiwa["English"]["Autoanamnesis"] = "";
	$placeHoldersjiwa["English"]["Autoanamnesis"] = "";
	$fieldLabelsjiwa["English"]["Alloanamnesis"] = "Alloanamnesis";
	$fieldToolTipsjiwa["English"]["Alloanamnesis"] = "";
	$placeHoldersjiwa["English"]["Alloanamnesis"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_gangguan_sekarang"] = "Riwayat Gangguan Sekarang";
	$fieldToolTipsjiwa["English"]["Riwayat_gangguan_sekarang"] = "";
	$placeHoldersjiwa["English"]["Riwayat_gangguan_sekarang"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_gangguan_dahulu"] = "Riwayat Gangguan Dahulu";
	$fieldToolTipsjiwa["English"]["Riwayat_gangguan_dahulu"] = "";
	$placeHoldersjiwa["English"]["Riwayat_gangguan_dahulu"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_gangguan_psikiatri"] = "Riwayat Gangguan Psikiatri";
	$fieldToolTipsjiwa["English"]["Riwayat_gangguan_psikiatri"] = "";
	$placeHoldersjiwa["English"]["Riwayat_gangguan_psikiatri"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_gangguan_medis"] = "Riwayat Gangguan Medis";
	$fieldToolTipsjiwa["English"]["Riwayat_gangguan_medis"] = "";
	$placeHoldersjiwa["English"]["Riwayat_gangguan_medis"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_penggunaan_zat_psikoaktif"] = "Riwayat Penggunaan Zat Psikoaktif";
	$fieldToolTipsjiwa["English"]["Riwayat_penggunaan_zat_psikoaktif"] = "";
	$placeHoldersjiwa["English"]["Riwayat_penggunaan_zat_psikoaktif"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_prenatal_dan_perinatal"] = "Riwayat Prenatal Dan Perinatal";
	$fieldToolTipsjiwa["English"]["Riwayat_prenatal_dan_perinatal"] = "";
	$placeHoldersjiwa["English"]["Riwayat_prenatal_dan_perinatal"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_masa_kanak_awal"] = "Riwayat Masa Kanak Awal";
	$fieldToolTipsjiwa["English"]["Riwayat_masa_kanak_awal"] = "";
	$placeHoldersjiwa["English"]["Riwayat_masa_kanak_awal"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_masa_kanak_pertengahan"] = "Riwayat Masa Kanak Pertengahan";
	$fieldToolTipsjiwa["English"]["Riwayat_masa_kanak_pertengahan"] = "";
	$placeHoldersjiwa["English"]["Riwayat_masa_kanak_pertengahan"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_masa_kanak_akhir_dan_remaja"] = "Riwayat Masa Kanak Akhir Dan Remaja";
	$fieldToolTipsjiwa["English"]["Riwayat_masa_kanak_akhir_dan_remaja"] = "";
	$placeHoldersjiwa["English"]["Riwayat_masa_kanak_akhir_dan_remaja"] = "";
	$fieldLabelsjiwa["English"]["Masa_Dewasa"] = "Masa Dewasa";
	$fieldToolTipsjiwa["English"]["Masa_Dewasa"] = "";
	$placeHoldersjiwa["English"]["Masa_Dewasa"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_pendidikan"] = "Riwayat Pendidikan";
	$fieldToolTipsjiwa["English"]["Riwayat_pendidikan"] = "";
	$placeHoldersjiwa["English"]["Riwayat_pendidikan"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_pekerjaan"] = "Riwayat Pekerjaan";
	$fieldToolTipsjiwa["English"]["Riwayat_pekerjaan"] = "";
	$placeHoldersjiwa["English"]["Riwayat_pekerjaan"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_pernikahan"] = "Riwayat Pernikahan";
	$fieldToolTipsjiwa["English"]["Riwayat_pernikahan"] = "";
	$placeHoldersjiwa["English"]["Riwayat_pernikahan"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_Agama"] = "Riwayat Agama";
	$fieldToolTipsjiwa["English"]["Riwayat_Agama"] = "";
	$placeHoldersjiwa["English"]["Riwayat_Agama"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_Psikoseksual"] = "Riwayat Psikoseksual";
	$fieldToolTipsjiwa["English"]["Riwayat_Psikoseksual"] = "";
	$placeHoldersjiwa["English"]["Riwayat_Psikoseksual"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_aktivitas_sosial"] = "Riwayat Aktivitas Sosial";
	$fieldToolTipsjiwa["English"]["Riwayat_aktivitas_sosial"] = "";
	$placeHoldersjiwa["English"]["Riwayat_aktivitas_sosial"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_hukum"] = "Riwayat Hukum";
	$fieldToolTipsjiwa["English"]["Riwayat_hukum"] = "";
	$placeHoldersjiwa["English"]["Riwayat_hukum"] = "";
	$fieldLabelsjiwa["English"]["Riwayat_keluarga"] = "Riwayat Keluarga";
	$fieldToolTipsjiwa["English"]["Riwayat_keluarga"] = "";
	$placeHoldersjiwa["English"]["Riwayat_keluarga"] = "";
	$fieldLabelsjiwa["English"]["Genogram_keluarga"] = "Genogram Keluarga";
	$fieldToolTipsjiwa["English"]["Genogram_keluarga"] = "";
	$placeHoldersjiwa["English"]["Genogram_keluarga"] = "";
	$fieldLabelsjiwa["English"]["Situasi_kehidupan_sekarang"] = "Situasi Kehidupan Sekarang";
	$fieldToolTipsjiwa["English"]["Situasi_kehidupan_sekarang"] = "";
	$placeHoldersjiwa["English"]["Situasi_kehidupan_sekarang"] = "";
	$fieldLabelsjiwa["English"]["Persepsi_tentang_diri_dan_kehidupannya"] = "Persepsi Tentang Diri Dan Kehidupannya";
	$fieldToolTipsjiwa["English"]["Persepsi_tentang_diri_dan_kehidupannya"] = "";
	$placeHoldersjiwa["English"]["Persepsi_tentang_diri_dan_kehidupannya"] = "";
	$fieldLabelsjiwa["English"]["Persepsi_keluarga_tentang_diri_pasien"] = "Persepsi Keluarga Tentang Diri Pasien";
	$fieldToolTipsjiwa["English"]["Persepsi_keluarga_tentang_diri_pasien"] = "";
	$placeHoldersjiwa["English"]["Persepsi_keluarga_tentang_diri_pasien"] = "";
	$fieldLabelsjiwa["English"]["Fantasi"] = "Fantasi";
	$fieldToolTipsjiwa["English"]["Fantasi"] = "";
	$placeHoldersjiwa["English"]["Fantasi"] = "";
	$fieldLabelsjiwa["English"]["Penampilan"] = "Penampilan";
	$fieldToolTipsjiwa["English"]["Penampilan"] = "";
	$placeHoldersjiwa["English"]["Penampilan"] = "";
	$fieldLabelsjiwa["English"]["Perilaku_dan_aktivitas_psikomotor"] = "Perilaku Dan Aktivitas Psikomotor";
	$fieldToolTipsjiwa["English"]["Perilaku_dan_aktivitas_psikomotor"] = "";
	$placeHoldersjiwa["English"]["Perilaku_dan_aktivitas_psikomotor"] = "";
	$fieldLabelsjiwa["English"]["Sikap_terhadap_pemeriksa"] = "Sikap Terhadap Pemeriksa";
	$fieldToolTipsjiwa["English"]["Sikap_terhadap_pemeriksa"] = "";
	$placeHoldersjiwa["English"]["Sikap_terhadap_pemeriksa"] = "";
	$fieldLabelsjiwa["English"]["Irama"] = "Irama";
	$fieldToolTipsjiwa["English"]["Irama"] = "";
	$placeHoldersjiwa["English"]["Irama"] = "";
	$fieldLabelsjiwa["English"]["Kecepatan_bicara"] = "Kecepatan Bicara";
	$fieldToolTipsjiwa["English"]["Kecepatan_bicara"] = "";
	$placeHoldersjiwa["English"]["Kecepatan_bicara"] = "";
	$fieldLabelsjiwa["English"]["Volume"] = "Volume";
	$fieldToolTipsjiwa["English"]["Volume"] = "";
	$placeHoldersjiwa["English"]["Volume"] = "";
	$fieldLabelsjiwa["English"]["Kelancaran"] = "Kelancaran";
	$fieldToolTipsjiwa["English"]["Kelancaran"] = "";
	$placeHoldersjiwa["English"]["Kelancaran"] = "";
	$fieldLabelsjiwa["English"]["Mood"] = "Mood";
	$fieldToolTipsjiwa["English"]["Mood"] = "";
	$placeHoldersjiwa["English"]["Mood"] = "";
	$fieldLabelsjiwa["English"]["Afek"] = "Afek";
	$fieldToolTipsjiwa["English"]["Afek"] = "";
	$placeHoldersjiwa["English"]["Afek"] = "";
	$fieldLabelsjiwa["English"]["Keserasian"] = "Keserasian";
	$fieldToolTipsjiwa["English"]["Keserasian"] = "";
	$placeHoldersjiwa["English"]["Keserasian"] = "";
	$fieldLabelsjiwa["English"]["Auditorik"] = "Auditorik";
	$fieldToolTipsjiwa["English"]["Auditorik"] = "";
	$placeHoldersjiwa["English"]["Auditorik"] = "";
	$fieldLabelsjiwa["English"]["Visual"] = "Visual";
	$fieldToolTipsjiwa["English"]["Visual"] = "";
	$placeHoldersjiwa["English"]["Visual"] = "";
	$fieldLabelsjiwa["English"]["Taktil"] = "Taktil";
	$fieldToolTipsjiwa["English"]["Taktil"] = "";
	$placeHoldersjiwa["English"]["Taktil"] = "";
	$fieldLabelsjiwa["English"]["Olfaktorik"] = "Olfaktorik";
	$fieldToolTipsjiwa["English"]["Olfaktorik"] = "";
	$placeHoldersjiwa["English"]["Olfaktorik"] = "";
	$fieldLabelsjiwa["English"]["Gustatorik"] = "Gustatorik";
	$fieldToolTipsjiwa["English"]["Gustatorik"] = "";
	$placeHoldersjiwa["English"]["Gustatorik"] = "";
	$fieldLabelsjiwa["English"]["Ilusi"] = "Ilusi";
	$fieldToolTipsjiwa["English"]["Ilusi"] = "";
	$placeHoldersjiwa["English"]["Ilusi"] = "";
	$fieldLabelsjiwa["English"]["Depersonalisasi"] = "Depersonalisasi";
	$fieldToolTipsjiwa["English"]["Depersonalisasi"] = "";
	$placeHoldersjiwa["English"]["Depersonalisasi"] = "";
	$fieldLabelsjiwa["English"]["Derealisasi"] = "Derealisasi";
	$fieldToolTipsjiwa["English"]["Derealisasi"] = "";
	$placeHoldersjiwa["English"]["Derealisasi"] = "";
	$fieldLabelsjiwa["English"]["Blocking"] = "Blocking";
	$fieldToolTipsjiwa["English"]["Blocking"] = "";
	$placeHoldersjiwa["English"]["Blocking"] = "";
	$fieldLabelsjiwa["English"]["Assosiasi_Longgar"] = "Assosiasi Longgar";
	$fieldToolTipsjiwa["English"]["Assosiasi_Longgar"] = "";
	$placeHoldersjiwa["English"]["Assosiasi_Longgar"] = "";
	$fieldLabelsjiwa["English"]["Inkoheren"] = "Inkoheren";
	$fieldToolTipsjiwa["English"]["Inkoheren"] = "";
	$placeHoldersjiwa["English"]["Inkoheren"] = "";
	$fieldLabelsjiwa["English"]["Flight_of_Idea"] = "Flight Of Idea";
	$fieldToolTipsjiwa["English"]["Flight_of_Idea"] = "";
	$placeHoldersjiwa["English"]["Flight_of_Idea"] = "";
	$fieldLabelsjiwa["English"]["Sirkumstansia"] = "Sirkumstansia";
	$fieldToolTipsjiwa["English"]["Sirkumstansia"] = "";
	$placeHoldersjiwa["English"]["Sirkumstansia"] = "";
	$fieldLabelsjiwa["English"]["Tangensial"] = "Tangensial";
	$fieldToolTipsjiwa["English"]["Tangensial"] = "";
	$placeHoldersjiwa["English"]["Tangensial"] = "";
	$fieldLabelsjiwa["English"]["Neologisme"] = "Neologisme";
	$fieldToolTipsjiwa["English"]["Neologisme"] = "";
	$placeHoldersjiwa["English"]["Neologisme"] = "";
	$fieldLabelsjiwa["English"]["Word_Salad"] = "Word Salad";
	$fieldToolTipsjiwa["English"]["Word_Salad"] = "";
	$placeHoldersjiwa["English"]["Word_Salad"] = "";
	$fieldLabelsjiwa["English"]["Hendaya_Berbahasa"] = "Hendaya Berbahasa";
	$fieldToolTipsjiwa["English"]["Hendaya_Berbahasa"] = "";
	$placeHoldersjiwa["English"]["Hendaya_Berbahasa"] = "";
	$fieldLabelsjiwa["English"]["Produktivitas"] = "Produktivitas";
	$fieldToolTipsjiwa["English"]["Produktivitas"] = "";
	$placeHoldersjiwa["English"]["Produktivitas"] = "";
	$fieldLabelsjiwa["English"]["Preokupasi"] = "Preokupasi";
	$fieldToolTipsjiwa["English"]["Preokupasi"] = "";
	$placeHoldersjiwa["English"]["Preokupasi"] = "";
	$fieldLabelsjiwa["English"]["Waham_bizarre"] = "Waham Bizarre";
	$fieldToolTipsjiwa["English"]["Waham_bizarre"] = "";
	$placeHoldersjiwa["English"]["Waham_bizarre"] = "";
	$fieldLabelsjiwa["English"]["Waham_sistemik"] = "Waham Sistemik";
	$fieldToolTipsjiwa["English"]["Waham_sistemik"] = "";
	$placeHoldersjiwa["English"]["Waham_sistemik"] = "";
	$fieldLabelsjiwa["English"]["Waham_nihilistik"] = "Waham Nihilistik";
	$fieldToolTipsjiwa["English"]["Waham_nihilistik"] = "";
	$placeHoldersjiwa["English"]["Waham_nihilistik"] = "";
	$fieldLabelsjiwa["English"]["Waham_paranoid"] = "Waham Paranoid";
	$fieldToolTipsjiwa["English"]["Waham_paranoid"] = "";
	$placeHoldersjiwa["English"]["Waham_paranoid"] = "";
	$fieldLabelsjiwa["English"]["Waham_kebesaran"] = "Waham Kebesaran";
	$fieldToolTipsjiwa["English"]["Waham_kebesaran"] = "";
	$placeHoldersjiwa["English"]["Waham_kebesaran"] = "";
	$fieldLabelsjiwa["English"]["Waham_kejaran"] = "Waham Kejaran";
	$fieldToolTipsjiwa["English"]["Waham_kejaran"] = "";
	$placeHoldersjiwa["English"]["Waham_kejaran"] = "";
	$fieldLabelsjiwa["English"]["Waham_rujukan"] = "Waham Rujukan";
	$fieldToolTipsjiwa["English"]["Waham_rujukan"] = "";
	$placeHoldersjiwa["English"]["Waham_rujukan"] = "";
	$fieldLabelsjiwa["English"]["Waham_dikendalikan"] = "Waham Dikendalikan";
	$fieldToolTipsjiwa["English"]["Waham_dikendalikan"] = "";
	$placeHoldersjiwa["English"]["Waham_dikendalikan"] = "";
	$fieldLabelsjiwa["English"]["Thought_of_withdrawl"] = "Thought Of Withdrawl";
	$fieldToolTipsjiwa["English"]["Thought_of_withdrawl"] = "";
	$placeHoldersjiwa["English"]["Thought_of_withdrawl"] = "";
	$fieldLabelsjiwa["English"]["Thought_of_insertion"] = "Thought Of Insertion";
	$fieldToolTipsjiwa["English"]["Thought_of_insertion"] = "";
	$placeHoldersjiwa["English"]["Thought_of_insertion"] = "";
	$fieldLabelsjiwa["English"]["Thought_of_broadcasting"] = "Thought Of Broadcasting";
	$fieldToolTipsjiwa["English"]["Thought_of_broadcasting"] = "";
	$placeHoldersjiwa["English"]["Thought_of_broadcasting"] = "";
	$fieldLabelsjiwa["English"]["Obsesi"] = "Obsesi";
	$fieldToolTipsjiwa["English"]["Obsesi"] = "";
	$placeHoldersjiwa["English"]["Obsesi"] = "";
	$fieldLabelsjiwa["English"]["Kompulsif"] = "Kompulsif";
	$fieldToolTipsjiwa["English"]["Kompulsif"] = "";
	$placeHoldersjiwa["English"]["Kompulsif"] = "";
	$fieldLabelsjiwa["English"]["Fobia"] = "Fobia";
	$fieldToolTipsjiwa["English"]["Fobia"] = "";
	$placeHoldersjiwa["English"]["Fobia"] = "";
	$fieldLabelsjiwa["English"]["Gagasan_untuk_bunuh_diri"] = "Gagasan Untuk Bunuh Diri";
	$fieldToolTipsjiwa["English"]["Gagasan_untuk_bunuh_diri"] = "";
	$placeHoldersjiwa["English"]["Gagasan_untuk_bunuh_diri"] = "";
	$fieldLabelsjiwa["English"]["Taraf_kesadaran_dan_kesiagaan"] = "Taraf Kesadaran Dan Kesiagaan";
	$fieldToolTipsjiwa["English"]["Taraf_kesadaran_dan_kesiagaan"] = "";
	$placeHoldersjiwa["English"]["Taraf_kesadaran_dan_kesiagaan"] = "";
	$fieldLabelsjiwa["English"]["Orieantasi_Waktu"] = "Orieantasi Waktu";
	$fieldToolTipsjiwa["English"]["Orieantasi_Waktu"] = "";
	$placeHoldersjiwa["English"]["Orieantasi_Waktu"] = "";
	$fieldLabelsjiwa["English"]["Orieantasi_Tempat"] = "Orieantasi Tempat";
	$fieldToolTipsjiwa["English"]["Orieantasi_Tempat"] = "";
	$placeHoldersjiwa["English"]["Orieantasi_Tempat"] = "";
	$fieldLabelsjiwa["English"]["Orieantasi_Orang"] = "Orieantasi Orang";
	$fieldToolTipsjiwa["English"]["Orieantasi_Orang"] = "";
	$placeHoldersjiwa["English"]["Orieantasi_Orang"] = "";
	$fieldLabelsjiwa["English"]["Daya_ingat_Jangka_panjang"] = "Daya Ingat Jangka Panjang";
	$fieldToolTipsjiwa["English"]["Daya_ingat_Jangka_panjang"] = "";
	$placeHoldersjiwa["English"]["Daya_ingat_Jangka_panjang"] = "";
	$fieldLabelsjiwa["English"]["Daya_ingat_Jangka_sedang"] = "Daya Ingat Jangka Sedang";
	$fieldToolTipsjiwa["English"]["Daya_ingat_Jangka_sedang"] = "";
	$placeHoldersjiwa["English"]["Daya_ingat_Jangka_sedang"] = "";
	$fieldLabelsjiwa["English"]["Daya_ingat_Jangka_pendek"] = "Daya Ingat Jangka Pendek";
	$fieldToolTipsjiwa["English"]["Daya_ingat_Jangka_pendek"] = "";
	$placeHoldersjiwa["English"]["Daya_ingat_Jangka_pendek"] = "";
	$fieldLabelsjiwa["English"]["Daya_ingat_Jangka_segera"] = "Daya Ingat Jangka Segera";
	$fieldToolTipsjiwa["English"]["Daya_ingat_Jangka_segera"] = "";
	$placeHoldersjiwa["English"]["Daya_ingat_Jangka_segera"] = "";
	$fieldLabelsjiwa["English"]["Konsentrasi_perhatian"] = "Konsentrasi Perhatian";
	$fieldToolTipsjiwa["English"]["Konsentrasi_perhatian"] = "";
	$placeHoldersjiwa["English"]["Konsentrasi_perhatian"] = "";
	$fieldLabelsjiwa["English"]["Kemampuan_Membaca_Menulis"] = "Kemampuan Membaca Menulis";
	$fieldToolTipsjiwa["English"]["Kemampuan_Membaca_Menulis"] = "";
	$placeHoldersjiwa["English"]["Kemampuan_Membaca_Menulis"] = "";
	$fieldLabelsjiwa["English"]["Kemampuan_visuospasial"] = "Kemampuan Visuospasial";
	$fieldToolTipsjiwa["English"]["Kemampuan_visuospasial"] = "";
	$placeHoldersjiwa["English"]["Kemampuan_visuospasial"] = "";
	$fieldLabelsjiwa["English"]["Pikiran_abstrak"] = "Pikiran Abstrak";
	$fieldToolTipsjiwa["English"]["Pikiran_abstrak"] = "";
	$placeHoldersjiwa["English"]["Pikiran_abstrak"] = "";
	$fieldLabelsjiwa["English"]["Inteligensia_dan_kemampuan_informasi"] = "Inteligensia Dan Kemampuan Informasi";
	$fieldToolTipsjiwa["English"]["Inteligensia_dan_kemampuan_informasi"] = "";
	$placeHoldersjiwa["English"]["Inteligensia_dan_kemampuan_informasi"] = "";
	$fieldLabelsjiwa["English"]["Kemampuan_mengendalikan_impuls"] = "Kemampuan Mengendalikan Impuls";
	$fieldToolTipsjiwa["English"]["Kemampuan_mengendalikan_impuls"] = "";
	$placeHoldersjiwa["English"]["Kemampuan_mengendalikan_impuls"] = "";
	$fieldLabelsjiwa["English"]["Daya_nilai_dan_tilikan"] = "Daya Nilai Dan Tilikan";
	$fieldToolTipsjiwa["English"]["Daya_nilai_dan_tilikan"] = "";
	$placeHoldersjiwa["English"]["Daya_nilai_dan_tilikan"] = "";
	$fieldLabelsjiwa["English"]["Daya_nilai_sosial"] = "Daya Nilai Sosial";
	$fieldToolTipsjiwa["English"]["Daya_nilai_sosial"] = "";
	$placeHoldersjiwa["English"]["Daya_nilai_sosial"] = "";
	$fieldLabelsjiwa["English"]["Uji_daya_nilai"] = "Uji Daya Nilai";
	$fieldToolTipsjiwa["English"]["Uji_daya_nilai"] = "";
	$placeHoldersjiwa["English"]["Uji_daya_nilai"] = "";
	$fieldLabelsjiwa["English"]["Penilaian_Daya_Realita"] = "Penilaian Daya Realita";
	$fieldToolTipsjiwa["English"]["Penilaian_Daya_Realita"] = "";
	$placeHoldersjiwa["English"]["Penilaian_Daya_Realita"] = "";
	$fieldLabelsjiwa["English"]["Tilikan"] = "Tilikan";
	$fieldToolTipsjiwa["English"]["Tilikan"] = "";
	$placeHoldersjiwa["English"]["Tilikan"] = "";
	$fieldLabelsjiwa["English"]["Taraf_dipercaya"] = "Taraf Dipercaya";
	$fieldToolTipsjiwa["English"]["Taraf_dipercaya"] = "";
	$placeHoldersjiwa["English"]["Taraf_dipercaya"] = "";
	$fieldLabelsjiwa["English"]["Keadaan_Umum"] = "Keadaan Umum";
	$fieldToolTipsjiwa["English"]["Keadaan_Umum"] = "";
	$placeHoldersjiwa["English"]["Keadaan_Umum"] = "";
	$fieldLabelsjiwa["English"]["Kesadaran"] = "Kesadaran";
	$fieldToolTipsjiwa["English"]["Kesadaran"] = "";
	$placeHoldersjiwa["English"]["Kesadaran"] = "";
	$fieldLabelsjiwa["English"]["Status_gizi"] = "Status Gizi";
	$fieldToolTipsjiwa["English"]["Status_gizi"] = "";
	$placeHoldersjiwa["English"]["Status_gizi"] = "";
	$fieldLabelsjiwa["English"]["Tekanan_Darah"] = "Tekanan Darah";
	$fieldToolTipsjiwa["English"]["Tekanan_Darah"] = "";
	$placeHoldersjiwa["English"]["Tekanan_Darah"] = "";
	$fieldLabelsjiwa["English"]["Frekuensi_Nadi"] = "Frekuensi Nadi";
	$fieldToolTipsjiwa["English"]["Frekuensi_Nadi"] = "";
	$placeHoldersjiwa["English"]["Frekuensi_Nadi"] = "";
	$fieldLabelsjiwa["English"]["Frekuensi_Nafas"] = "Frekuensi Nafas";
	$fieldToolTipsjiwa["English"]["Frekuensi_Nafas"] = "";
	$placeHoldersjiwa["English"]["Frekuensi_Nafas"] = "";
	$fieldLabelsjiwa["English"]["Suhu"] = "Suhu";
	$fieldToolTipsjiwa["English"]["Suhu"] = "";
	$placeHoldersjiwa["English"]["Suhu"] = "";
	$fieldLabelsjiwa["English"]["Mata_dan_THT"] = "Mata Dan THT";
	$fieldToolTipsjiwa["English"]["Mata_dan_THT"] = "";
	$placeHoldersjiwa["English"]["Mata_dan_THT"] = "";
	$fieldLabelsjiwa["English"]["Mulut_dan_Gigi"] = "Mulut Dan Gigi";
	$fieldToolTipsjiwa["English"]["Mulut_dan_Gigi"] = "";
	$placeHoldersjiwa["English"]["Mulut_dan_Gigi"] = "";
	$fieldLabelsjiwa["English"]["Thorax"] = "Thorax";
	$fieldToolTipsjiwa["English"]["Thorax"] = "";
	$placeHoldersjiwa["English"]["Thorax"] = "";
	$fieldLabelsjiwa["English"]["Abdomen"] = "Abdomen";
	$fieldToolTipsjiwa["English"]["Abdomen"] = "";
	$placeHoldersjiwa["English"]["Abdomen"] = "";
	$fieldLabelsjiwa["English"]["Extremitas"] = "Extremitas";
	$fieldToolTipsjiwa["English"]["Extremitas"] = "";
	$placeHoldersjiwa["English"]["Extremitas"] = "";
	$fieldLabelsjiwa["English"]["Tanda_rangsang_Meningeal"] = "Tanda Rangsang Meningeal";
	$fieldToolTipsjiwa["English"]["Tanda_rangsang_Meningeal"] = "";
	$placeHoldersjiwa["English"]["Tanda_rangsang_Meningeal"] = "";
	$fieldLabelsjiwa["English"]["Motorik"] = "Motorik";
	$fieldToolTipsjiwa["English"]["Motorik"] = "";
	$placeHoldersjiwa["English"]["Motorik"] = "";
	$fieldLabelsjiwa["English"]["Sensorik"] = "Sensorik";
	$fieldToolTipsjiwa["English"]["Sensorik"] = "";
	$placeHoldersjiwa["English"]["Sensorik"] = "";
	$fieldLabelsjiwa["English"]["Diagnosis_Axis"] = "Diagnosis Axis";
	$fieldToolTipsjiwa["English"]["Diagnosis_Axis"] = "";
	$placeHoldersjiwa["English"]["Diagnosis_Axis"] = "";
	$fieldLabelsjiwa["English"]["Organobiologi"] = "Organobiologi";
	$fieldToolTipsjiwa["English"]["Organobiologi"] = "";
	$placeHoldersjiwa["English"]["Organobiologi"] = "";
	$fieldLabelsjiwa["English"]["Psikologi"] = "Psikologi";
	$fieldToolTipsjiwa["English"]["Psikologi"] = "";
	$placeHoldersjiwa["English"]["Psikologi"] = "";
	$fieldLabelsjiwa["English"]["Lingkungan_dan_sosial_ekonomi"] = "Lingkungan Dan Sosial Ekonomi";
	$fieldToolTipsjiwa["English"]["Lingkungan_dan_sosial_ekonomi"] = "";
	$placeHoldersjiwa["English"]["Lingkungan_dan_sosial_ekonomi"] = "";
	$fieldLabelsjiwa["English"]["Quo_ad_Vitam"] = "Quo Ad Vitam";
	$fieldToolTipsjiwa["English"]["Quo_ad_Vitam"] = "";
	$placeHoldersjiwa["English"]["Quo_ad_Vitam"] = "";
	$fieldLabelsjiwa["English"]["Quo_ad_Fungsionam"] = "Quo Ad Fungsionam";
	$fieldToolTipsjiwa["English"]["Quo_ad_Fungsionam"] = "";
	$placeHoldersjiwa["English"]["Quo_ad_Fungsionam"] = "";
	$fieldLabelsjiwa["English"]["Quo_ad_Sanationam"] = "Quo Ad Sanationam";
	$fieldToolTipsjiwa["English"]["Quo_ad_Sanationam"] = "";
	$placeHoldersjiwa["English"]["Quo_ad_Sanationam"] = "";
	$fieldLabelsjiwa["English"]["Hal_hal_yang_mendukung"] = "Hal-hal Yang Mendukung";
	$fieldToolTipsjiwa["English"]["Hal_hal_yang_mendukung"] = "";
	$placeHoldersjiwa["English"]["Hal_hal_yang_mendukung"] = "";
	$fieldLabelsjiwa["English"]["Hal_hal_yang_memberatkan"] = "Hal-hal Yang Memberatkan";
	$fieldToolTipsjiwa["English"]["Hal_hal_yang_memberatkan"] = "";
	$placeHoldersjiwa["English"]["Hal_hal_yang_memberatkan"] = "";
	$fieldLabelsjiwa["English"]["Farmakologi"] = "Farmakologi";
	$fieldToolTipsjiwa["English"]["Farmakologi"] = "";
	$placeHoldersjiwa["English"]["Farmakologi"] = "";
	$fieldLabelsjiwa["English"]["Non_Farmakologi"] = "Non Farmakologi";
	$fieldToolTipsjiwa["English"]["Non_Farmakologi"] = "";
	$placeHoldersjiwa["English"]["Non_Farmakologi"] = "";
	$fieldLabelsjiwa["English"]["id_pasien"] = "Id Pasien";
	$fieldToolTipsjiwa["English"]["id_pasien"] = "";
	$placeHoldersjiwa["English"]["id_pasien"] = "";
	$fieldLabelsjiwa["English"]["id_user"] = "Id User";
	$fieldToolTipsjiwa["English"]["id_user"] = "";
	$placeHoldersjiwa["English"]["id_user"] = "";
	$fieldLabelsjiwa["English"]["id_resep"] = "Id Resep";
	$fieldToolTipsjiwa["English"]["id_resep"] = "";
	$placeHoldersjiwa["English"]["id_resep"] = "";
	$fieldLabelsjiwa["English"]["Nomor_Rm"] = "Nomor Rm";
	$fieldToolTipsjiwa["English"]["Nomor_Rm"] = "";
	$placeHoldersjiwa["English"]["Nomor_Rm"] = "";
	if (count($fieldToolTipsjiwa["English"]))
		$tdatajiwa[".isUseToolTips"] = true;
}


	$tdatajiwa[".NCSearch"] = true;



$tdatajiwa[".shortTableName"] = "jiwa";
$tdatajiwa[".nSecOptions"] = 0;

$tdatajiwa[".mainTableOwnerID"] = "";
$tdatajiwa[".entityType"] = 0;
$tdatajiwa[".connId"] = "newrm_at_localhost";


$tdatajiwa[".strOriginalTableName"] = "jiwa";

	



$tdatajiwa[".showAddInPopup"] = false;

$tdatajiwa[".showEditInPopup"] = false;

$tdatajiwa[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajiwa[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajiwa[".listAjax"] = false;
//	temporary
$tdatajiwa[".listAjax"] = false;

	$tdatajiwa[".audit"] = false;

	$tdatajiwa[".locking"] = false;


$pages = $tdatajiwa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatajiwa[".edit"] = true;
	$tdatajiwa[".afterEditAction"] = 1;
	$tdatajiwa[".closePopupAfterEdit"] = 1;
	$tdatajiwa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatajiwa[".add"] = true;
$tdatajiwa[".afterAddAction"] = 1;
$tdatajiwa[".closePopupAfterAdd"] = 1;
$tdatajiwa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatajiwa[".list"] = true;
}



$tdatajiwa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatajiwa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatajiwa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatajiwa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatajiwa[".printFriendly"] = true;
}



$tdatajiwa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatajiwa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatajiwa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatajiwa[".isUseAjaxSuggest"] = true;

$tdatajiwa[".rowHighlite"] = true;





$tdatajiwa[".ajaxCodeSnippetAdded"] = false;

$tdatajiwa[".buttonsAdded"] = false;

$tdatajiwa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajiwa[".isUseTimeForSearch"] = false;


$tdatajiwa[".badgeColor"] = "e8926f";


$tdatajiwa[".allSearchFields"] = array();
$tdatajiwa[".filterFields"] = array();
$tdatajiwa[".requiredSearchFields"] = array();

$tdatajiwa[".googleLikeFields"] = array();
$tdatajiwa[".googleLikeFields"][] = "id_Jiwa";
$tdatajiwa[".googleLikeFields"][] = "Keluhan_Utama";
$tdatajiwa[".googleLikeFields"][] = "Anamnesis";
$tdatajiwa[".googleLikeFields"][] = "Autoanamnesis";
$tdatajiwa[".googleLikeFields"][] = "Alloanamnesis";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_gangguan_sekarang";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_gangguan_dahulu";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_gangguan_psikiatri";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_gangguan_medis";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_penggunaan_zat_psikoaktif";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_prenatal_dan_perinatal";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_masa_kanak_awal";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_masa_kanak_pertengahan";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_masa_kanak_akhir_dan_remaja";
$tdatajiwa[".googleLikeFields"][] = "Masa_Dewasa";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_pendidikan";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_pekerjaan";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_pernikahan";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_Agama";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_Psikoseksual";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_aktivitas_sosial";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_hukum";
$tdatajiwa[".googleLikeFields"][] = "Riwayat_keluarga";
$tdatajiwa[".googleLikeFields"][] = "Genogram_keluarga";
$tdatajiwa[".googleLikeFields"][] = "Situasi_kehidupan_sekarang";
$tdatajiwa[".googleLikeFields"][] = "Persepsi_tentang_diri_dan_kehidupannya";
$tdatajiwa[".googleLikeFields"][] = "Persepsi_keluarga_tentang_diri_pasien";
$tdatajiwa[".googleLikeFields"][] = "Fantasi";
$tdatajiwa[".googleLikeFields"][] = "Penampilan";
$tdatajiwa[".googleLikeFields"][] = "Perilaku_dan_aktivitas_psikomotor";
$tdatajiwa[".googleLikeFields"][] = "Sikap_terhadap_pemeriksa";
$tdatajiwa[".googleLikeFields"][] = "Irama";
$tdatajiwa[".googleLikeFields"][] = "Kecepatan_bicara";
$tdatajiwa[".googleLikeFields"][] = "Volume";
$tdatajiwa[".googleLikeFields"][] = "Kelancaran";
$tdatajiwa[".googleLikeFields"][] = "Mood";
$tdatajiwa[".googleLikeFields"][] = "Afek";
$tdatajiwa[".googleLikeFields"][] = "Keserasian";
$tdatajiwa[".googleLikeFields"][] = "Auditorik";
$tdatajiwa[".googleLikeFields"][] = "Visual";
$tdatajiwa[".googleLikeFields"][] = "Taktil";
$tdatajiwa[".googleLikeFields"][] = "Olfaktorik";
$tdatajiwa[".googleLikeFields"][] = "Gustatorik";
$tdatajiwa[".googleLikeFields"][] = "Ilusi";
$tdatajiwa[".googleLikeFields"][] = "Depersonalisasi";
$tdatajiwa[".googleLikeFields"][] = "Derealisasi";
$tdatajiwa[".googleLikeFields"][] = "Blocking";
$tdatajiwa[".googleLikeFields"][] = "Assosiasi_Longgar";
$tdatajiwa[".googleLikeFields"][] = "Inkoheren";
$tdatajiwa[".googleLikeFields"][] = "Flight_of_Idea";
$tdatajiwa[".googleLikeFields"][] = "Sirkumstansia";
$tdatajiwa[".googleLikeFields"][] = "Tangensial";
$tdatajiwa[".googleLikeFields"][] = "Neologisme";
$tdatajiwa[".googleLikeFields"][] = "Word_Salad";
$tdatajiwa[".googleLikeFields"][] = "Hendaya_Berbahasa";
$tdatajiwa[".googleLikeFields"][] = "Produktivitas";
$tdatajiwa[".googleLikeFields"][] = "Preokupasi";
$tdatajiwa[".googleLikeFields"][] = "Waham_bizarre";
$tdatajiwa[".googleLikeFields"][] = "Waham_sistemik";
$tdatajiwa[".googleLikeFields"][] = "Waham_nihilistik";
$tdatajiwa[".googleLikeFields"][] = "Waham_paranoid";
$tdatajiwa[".googleLikeFields"][] = "Waham_kebesaran";
$tdatajiwa[".googleLikeFields"][] = "Waham_kejaran";
$tdatajiwa[".googleLikeFields"][] = "Waham_rujukan";
$tdatajiwa[".googleLikeFields"][] = "Waham_dikendalikan";
$tdatajiwa[".googleLikeFields"][] = "Thought_of_withdrawl";
$tdatajiwa[".googleLikeFields"][] = "Thought_of_insertion";
$tdatajiwa[".googleLikeFields"][] = "Thought_of_broadcasting";
$tdatajiwa[".googleLikeFields"][] = "Obsesi";
$tdatajiwa[".googleLikeFields"][] = "Kompulsif";
$tdatajiwa[".googleLikeFields"][] = "Fobia";
$tdatajiwa[".googleLikeFields"][] = "Gagasan_untuk_bunuh_diri";
$tdatajiwa[".googleLikeFields"][] = "Taraf_kesadaran_dan_kesiagaan";
$tdatajiwa[".googleLikeFields"][] = "Orieantasi_Waktu";
$tdatajiwa[".googleLikeFields"][] = "Orieantasi_Tempat";
$tdatajiwa[".googleLikeFields"][] = "Orieantasi_Orang";
$tdatajiwa[".googleLikeFields"][] = "Daya_ingat_Jangka_panjang";
$tdatajiwa[".googleLikeFields"][] = "Daya_ingat_Jangka_sedang";
$tdatajiwa[".googleLikeFields"][] = "Daya_ingat_Jangka_pendek";
$tdatajiwa[".googleLikeFields"][] = "Daya_ingat_Jangka_segera";
$tdatajiwa[".googleLikeFields"][] = "Konsentrasi_perhatian";
$tdatajiwa[".googleLikeFields"][] = "Kemampuan_Membaca_Menulis";
$tdatajiwa[".googleLikeFields"][] = "Kemampuan_visuospasial";
$tdatajiwa[".googleLikeFields"][] = "Pikiran_abstrak";
$tdatajiwa[".googleLikeFields"][] = "Inteligensia_dan_kemampuan_informasi";
$tdatajiwa[".googleLikeFields"][] = "Kemampuan_mengendalikan_impuls";
$tdatajiwa[".googleLikeFields"][] = "Daya_nilai_dan_tilikan";
$tdatajiwa[".googleLikeFields"][] = "Daya_nilai_sosial";
$tdatajiwa[".googleLikeFields"][] = "Uji_daya_nilai";
$tdatajiwa[".googleLikeFields"][] = "Penilaian_Daya_Realita";
$tdatajiwa[".googleLikeFields"][] = "Tilikan";
$tdatajiwa[".googleLikeFields"][] = "Taraf_dipercaya";
$tdatajiwa[".googleLikeFields"][] = "Keadaan_Umum";
$tdatajiwa[".googleLikeFields"][] = "Kesadaran";
$tdatajiwa[".googleLikeFields"][] = "Status_gizi";
$tdatajiwa[".googleLikeFields"][] = "Tekanan_Darah";
$tdatajiwa[".googleLikeFields"][] = "Frekuensi_Nadi";
$tdatajiwa[".googleLikeFields"][] = "Frekuensi_Nafas";
$tdatajiwa[".googleLikeFields"][] = "Suhu";
$tdatajiwa[".googleLikeFields"][] = "Mata_dan_THT";
$tdatajiwa[".googleLikeFields"][] = "Mulut_dan_Gigi";
$tdatajiwa[".googleLikeFields"][] = "Thorax";
$tdatajiwa[".googleLikeFields"][] = "Abdomen";
$tdatajiwa[".googleLikeFields"][] = "Extremitas";
$tdatajiwa[".googleLikeFields"][] = "Tanda_rangsang_Meningeal";
$tdatajiwa[".googleLikeFields"][] = "Motorik";
$tdatajiwa[".googleLikeFields"][] = "Sensorik";
$tdatajiwa[".googleLikeFields"][] = "Diagnosis_Axis";
$tdatajiwa[".googleLikeFields"][] = "Organobiologi";
$tdatajiwa[".googleLikeFields"][] = "Psikologi";
$tdatajiwa[".googleLikeFields"][] = "Lingkungan_dan_sosial_ekonomi";
$tdatajiwa[".googleLikeFields"][] = "Quo_ad_Vitam";
$tdatajiwa[".googleLikeFields"][] = "Quo_ad_Fungsionam";
$tdatajiwa[".googleLikeFields"][] = "Quo_ad_Sanationam";
$tdatajiwa[".googleLikeFields"][] = "Hal-hal_yang_mendukung";
$tdatajiwa[".googleLikeFields"][] = "Hal-hal_yang_memberatkan";
$tdatajiwa[".googleLikeFields"][] = "Farmakologi";
$tdatajiwa[".googleLikeFields"][] = "Non_Farmakologi";
$tdatajiwa[".googleLikeFields"][] = "id_pasien";
$tdatajiwa[".googleLikeFields"][] = "id_user";
$tdatajiwa[".googleLikeFields"][] = "id_resep";
$tdatajiwa[".googleLikeFields"][] = "Nomor_Rm";



$tdatajiwa[".tableType"] = "list";

$tdatajiwa[".printerPageOrientation"] = 0;
$tdatajiwa[".nPrinterPageScale"] = 100;

$tdatajiwa[".nPrinterSplitRecords"] = 40;

$tdatajiwa[".geocodingEnabled"] = false;










$tdatajiwa[".pageSize"] = 20;

$tdatajiwa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajiwa[".strOrderBy"] = $tstrOrderBy;

$tdatajiwa[".orderindexes"] = array();


$tdatajiwa[".sqlHead"] = "SELECT id_Jiwa,  	Keluhan_Utama,  	Anamnesis,  	Autoanamnesis,  	Alloanamnesis,  	Riwayat_gangguan_sekarang,  	Riwayat_gangguan_dahulu,  	Riwayat_gangguan_psikiatri,  	Riwayat_gangguan_medis,  	Riwayat_penggunaan_zat_psikoaktif,  	Riwayat_prenatal_dan_perinatal,  	Riwayat_masa_kanak_awal,  	Riwayat_masa_kanak_pertengahan,  	Riwayat_masa_kanak_akhir_dan_remaja,  	Masa_Dewasa,  	Riwayat_pendidikan,  	Riwayat_pekerjaan,  	Riwayat_pernikahan,  	Riwayat_Agama,  	Riwayat_Psikoseksual,  	Riwayat_aktivitas_sosial,  	Riwayat_hukum,  	Riwayat_keluarga,  	Genogram_keluarga,  	Situasi_kehidupan_sekarang,  	Persepsi_tentang_diri_dan_kehidupannya,  	Persepsi_keluarga_tentang_diri_pasien,  	Fantasi,  	Penampilan,  	Perilaku_dan_aktivitas_psikomotor,  	Sikap_terhadap_pemeriksa,  	Irama,  	Kecepatan_bicara,  	Volume,  	Kelancaran,  	Mood,  	Afek,  	Keserasian,  	Auditorik,  	Visual,  	Taktil,  	Olfaktorik,  	Gustatorik,  	Ilusi,  	Depersonalisasi,  	Derealisasi,  	Blocking,  	Assosiasi_Longgar,  	Inkoheren,  	Flight_of_Idea,  	Sirkumstansia,  	Tangensial,  	Neologisme,  	Word_Salad,  	Hendaya_Berbahasa,  	Produktivitas,  	Preokupasi,  	Waham_bizarre,  	Waham_sistemik,  	Waham_nihilistik,  	Waham_paranoid,  	Waham_kebesaran,  	Waham_kejaran,  	Waham_rujukan,  	Waham_dikendalikan,  	Thought_of_withdrawl,  	Thought_of_insertion,  	Thought_of_broadcasting,  	Obsesi,  	Kompulsif,  	Fobia,  	Gagasan_untuk_bunuh_diri,  	Taraf_kesadaran_dan_kesiagaan,  	Orieantasi_Waktu,  	Orieantasi_Tempat,  	Orieantasi_Orang,  	Daya_ingat_Jangka_panjang,  	Daya_ingat_Jangka_sedang,  	Daya_ingat_Jangka_pendek,  	Daya_ingat_Jangka_segera,  	Konsentrasi_perhatian,  	Kemampuan_Membaca_Menulis,  	Kemampuan_visuospasial,  	Pikiran_abstrak,  	Inteligensia_dan_kemampuan_informasi,  	Kemampuan_mengendalikan_impuls,  	Daya_nilai_dan_tilikan,  	Daya_nilai_sosial,  	Uji_daya_nilai,  	Penilaian_Daya_Realita,  	Tilikan,  	Taraf_dipercaya,  	Keadaan_Umum,  	Kesadaran,  	Status_gizi,  	Tekanan_Darah,  	Frekuensi_Nadi,  	Frekuensi_Nafas,  	Suhu,  	Mata_dan_THT,  	Mulut_dan_Gigi,  	Thorax,  	Abdomen,  	Extremitas,  	Tanda_rangsang_Meningeal,  	Motorik,  	Sensorik,  	Diagnosis_Axis,  	Organobiologi,  	Psikologi,  	Lingkungan_dan_sosial_ekonomi,  	Quo_ad_Vitam,  	Quo_ad_Fungsionam,  	Quo_ad_Sanationam,  	`Hal-hal_yang_mendukung`,  	`Hal-hal_yang_memberatkan`,  	Farmakologi,  	Non_Farmakologi,  	id_pasien,  	id_user,  	id_resep,  	Nomor_Rm";
$tdatajiwa[".sqlFrom"] = "FROM jiwa";
$tdatajiwa[".sqlWhereExpr"] = "";
$tdatajiwa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajiwa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajiwa[".arrGroupsPerPage"] = $arrGPP;

$tdatajiwa[".highlightSearchResults"] = true;

$tableKeysjiwa = array();
$tableKeysjiwa[] = "id_Jiwa";
$tdatajiwa[".Keys"] = $tableKeysjiwa;


$tdatajiwa[".hideMobileList"] = array();




//	id_Jiwa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_Jiwa";
	$fdata["GoodName"] = "id_Jiwa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","id_Jiwa");
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


	$tdatajiwa["id_Jiwa"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "id_Jiwa";
//	Keluhan_Utama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Keluhan_Utama";
	$fdata["GoodName"] = "Keluhan_Utama";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Keluhan_Utama");
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


	$tdatajiwa["Keluhan_Utama"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Keluhan_Utama";
//	Anamnesis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Anamnesis";
	$fdata["GoodName"] = "Anamnesis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Anamnesis");
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


	$tdatajiwa["Anamnesis"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Anamnesis";
//	Autoanamnesis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Autoanamnesis";
	$fdata["GoodName"] = "Autoanamnesis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Autoanamnesis");
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


	$tdatajiwa["Autoanamnesis"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Autoanamnesis";
//	Alloanamnesis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Alloanamnesis";
	$fdata["GoodName"] = "Alloanamnesis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Alloanamnesis");
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


	$tdatajiwa["Alloanamnesis"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Alloanamnesis";
//	Riwayat_gangguan_sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Riwayat_gangguan_sekarang";
	$fdata["GoodName"] = "Riwayat_gangguan_sekarang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_gangguan_sekarang");
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


	$tdatajiwa["Riwayat_gangguan_sekarang"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_gangguan_sekarang";
//	Riwayat_gangguan_dahulu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Riwayat_gangguan_dahulu";
	$fdata["GoodName"] = "Riwayat_gangguan_dahulu";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_gangguan_dahulu");
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


	$tdatajiwa["Riwayat_gangguan_dahulu"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_gangguan_dahulu";
//	Riwayat_gangguan_psikiatri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Riwayat_gangguan_psikiatri";
	$fdata["GoodName"] = "Riwayat_gangguan_psikiatri";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_gangguan_psikiatri");
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


	$tdatajiwa["Riwayat_gangguan_psikiatri"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_gangguan_psikiatri";
//	Riwayat_gangguan_medis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Riwayat_gangguan_medis";
	$fdata["GoodName"] = "Riwayat_gangguan_medis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_gangguan_medis");
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


	$tdatajiwa["Riwayat_gangguan_medis"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_gangguan_medis";
//	Riwayat_penggunaan_zat_psikoaktif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Riwayat_penggunaan_zat_psikoaktif";
	$fdata["GoodName"] = "Riwayat_penggunaan_zat_psikoaktif";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_penggunaan_zat_psikoaktif");
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


	$tdatajiwa["Riwayat_penggunaan_zat_psikoaktif"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_penggunaan_zat_psikoaktif";
//	Riwayat_prenatal_dan_perinatal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Riwayat_prenatal_dan_perinatal";
	$fdata["GoodName"] = "Riwayat_prenatal_dan_perinatal";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_prenatal_dan_perinatal");
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


	$tdatajiwa["Riwayat_prenatal_dan_perinatal"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_prenatal_dan_perinatal";
//	Riwayat_masa_kanak_awal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Riwayat_masa_kanak_awal";
	$fdata["GoodName"] = "Riwayat_masa_kanak_awal";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_masa_kanak_awal");
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


	$tdatajiwa["Riwayat_masa_kanak_awal"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_masa_kanak_awal";
//	Riwayat_masa_kanak_pertengahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Riwayat_masa_kanak_pertengahan";
	$fdata["GoodName"] = "Riwayat_masa_kanak_pertengahan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_masa_kanak_pertengahan");
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


	$tdatajiwa["Riwayat_masa_kanak_pertengahan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_masa_kanak_pertengahan";
//	Riwayat_masa_kanak_akhir_dan_remaja
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Riwayat_masa_kanak_akhir_dan_remaja";
	$fdata["GoodName"] = "Riwayat_masa_kanak_akhir_dan_remaja";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_masa_kanak_akhir_dan_remaja");
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


	$tdatajiwa["Riwayat_masa_kanak_akhir_dan_remaja"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_masa_kanak_akhir_dan_remaja";
//	Masa_Dewasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Masa_Dewasa";
	$fdata["GoodName"] = "Masa_Dewasa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Masa_Dewasa");
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


	$tdatajiwa["Masa_Dewasa"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Masa_Dewasa";
//	Riwayat_pendidikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Riwayat_pendidikan";
	$fdata["GoodName"] = "Riwayat_pendidikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_pendidikan");
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


	$tdatajiwa["Riwayat_pendidikan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_pendidikan";
//	Riwayat_pekerjaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Riwayat_pekerjaan";
	$fdata["GoodName"] = "Riwayat_pekerjaan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_pekerjaan");
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


	$tdatajiwa["Riwayat_pekerjaan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_pekerjaan";
//	Riwayat_pernikahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Riwayat_pernikahan";
	$fdata["GoodName"] = "Riwayat_pernikahan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_pernikahan");
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


	$tdatajiwa["Riwayat_pernikahan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_pernikahan";
//	Riwayat_Agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Riwayat_Agama";
	$fdata["GoodName"] = "Riwayat_Agama";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_Agama");
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


	$tdatajiwa["Riwayat_Agama"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_Agama";
//	Riwayat_Psikoseksual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Riwayat_Psikoseksual";
	$fdata["GoodName"] = "Riwayat_Psikoseksual";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_Psikoseksual");
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


	$tdatajiwa["Riwayat_Psikoseksual"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_Psikoseksual";
//	Riwayat_aktivitas_sosial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Riwayat_aktivitas_sosial";
	$fdata["GoodName"] = "Riwayat_aktivitas_sosial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_aktivitas_sosial");
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


	$tdatajiwa["Riwayat_aktivitas_sosial"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_aktivitas_sosial";
//	Riwayat_hukum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Riwayat_hukum";
	$fdata["GoodName"] = "Riwayat_hukum";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_hukum");
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


	$tdatajiwa["Riwayat_hukum"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_hukum";
//	Riwayat_keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Riwayat_keluarga";
	$fdata["GoodName"] = "Riwayat_keluarga";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Riwayat_keluarga");
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


	$tdatajiwa["Riwayat_keluarga"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Riwayat_keluarga";
//	Genogram_keluarga
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Genogram_keluarga";
	$fdata["GoodName"] = "Genogram_keluarga";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Genogram_keluarga");
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


	$tdatajiwa["Genogram_keluarga"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Genogram_keluarga";
//	Situasi_kehidupan_sekarang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Situasi_kehidupan_sekarang";
	$fdata["GoodName"] = "Situasi_kehidupan_sekarang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Situasi_kehidupan_sekarang");
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


	$tdatajiwa["Situasi_kehidupan_sekarang"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Situasi_kehidupan_sekarang";
//	Persepsi_tentang_diri_dan_kehidupannya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Persepsi_tentang_diri_dan_kehidupannya";
	$fdata["GoodName"] = "Persepsi_tentang_diri_dan_kehidupannya";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Persepsi_tentang_diri_dan_kehidupannya");
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


	$tdatajiwa["Persepsi_tentang_diri_dan_kehidupannya"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Persepsi_tentang_diri_dan_kehidupannya";
//	Persepsi_keluarga_tentang_diri_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Persepsi_keluarga_tentang_diri_pasien";
	$fdata["GoodName"] = "Persepsi_keluarga_tentang_diri_pasien";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Persepsi_keluarga_tentang_diri_pasien");
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


	$tdatajiwa["Persepsi_keluarga_tentang_diri_pasien"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Persepsi_keluarga_tentang_diri_pasien";
//	Fantasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Fantasi";
	$fdata["GoodName"] = "Fantasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Fantasi");
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


	$tdatajiwa["Fantasi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Fantasi";
//	Penampilan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Penampilan";
	$fdata["GoodName"] = "Penampilan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Penampilan");
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


	$tdatajiwa["Penampilan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Penampilan";
//	Perilaku_dan_aktivitas_psikomotor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Perilaku_dan_aktivitas_psikomotor";
	$fdata["GoodName"] = "Perilaku_dan_aktivitas_psikomotor";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Perilaku_dan_aktivitas_psikomotor");
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


	$tdatajiwa["Perilaku_dan_aktivitas_psikomotor"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Perilaku_dan_aktivitas_psikomotor";
//	Sikap_terhadap_pemeriksa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Sikap_terhadap_pemeriksa";
	$fdata["GoodName"] = "Sikap_terhadap_pemeriksa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Sikap_terhadap_pemeriksa");
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


	$tdatajiwa["Sikap_terhadap_pemeriksa"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Sikap_terhadap_pemeriksa";
//	Irama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Irama";
	$fdata["GoodName"] = "Irama";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Irama");
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


	$tdatajiwa["Irama"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Irama";
//	Kecepatan_bicara
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Kecepatan_bicara";
	$fdata["GoodName"] = "Kecepatan_bicara";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Kecepatan_bicara");
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


	$tdatajiwa["Kecepatan_bicara"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Kecepatan_bicara";
//	Volume
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Volume";
	$fdata["GoodName"] = "Volume";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Volume");
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


	$tdatajiwa["Volume"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Volume";
//	Kelancaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Kelancaran";
	$fdata["GoodName"] = "Kelancaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Kelancaran");
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


	$tdatajiwa["Kelancaran"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Kelancaran";
//	Mood
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Mood";
	$fdata["GoodName"] = "Mood";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Mood");
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


	$tdatajiwa["Mood"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Mood";
//	Afek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Afek";
	$fdata["GoodName"] = "Afek";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Afek");
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


	$tdatajiwa["Afek"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Afek";
//	Keserasian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Keserasian";
	$fdata["GoodName"] = "Keserasian";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Keserasian");
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


	$tdatajiwa["Keserasian"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Keserasian";
//	Auditorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Auditorik";
	$fdata["GoodName"] = "Auditorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Auditorik");
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


	$tdatajiwa["Auditorik"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Auditorik";
//	Visual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Visual";
	$fdata["GoodName"] = "Visual";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Visual");
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


	$tdatajiwa["Visual"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Visual";
//	Taktil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Taktil";
	$fdata["GoodName"] = "Taktil";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Taktil");
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


	$tdatajiwa["Taktil"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Taktil";
//	Olfaktorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Olfaktorik";
	$fdata["GoodName"] = "Olfaktorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Olfaktorik");
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


	$tdatajiwa["Olfaktorik"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Olfaktorik";
//	Gustatorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Gustatorik";
	$fdata["GoodName"] = "Gustatorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Gustatorik");
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


	$tdatajiwa["Gustatorik"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Gustatorik";
//	Ilusi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Ilusi";
	$fdata["GoodName"] = "Ilusi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Ilusi");
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


	$tdatajiwa["Ilusi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Ilusi";
//	Depersonalisasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Depersonalisasi";
	$fdata["GoodName"] = "Depersonalisasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Depersonalisasi");
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


	$tdatajiwa["Depersonalisasi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Depersonalisasi";
//	Derealisasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Derealisasi";
	$fdata["GoodName"] = "Derealisasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Derealisasi");
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


	$tdatajiwa["Derealisasi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Derealisasi";
//	Blocking
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Blocking";
	$fdata["GoodName"] = "Blocking";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Blocking");
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


	$tdatajiwa["Blocking"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Blocking";
//	Assosiasi_Longgar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Assosiasi_Longgar";
	$fdata["GoodName"] = "Assosiasi_Longgar";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Assosiasi_Longgar");
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


	$tdatajiwa["Assosiasi_Longgar"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Assosiasi_Longgar";
//	Inkoheren
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "Inkoheren";
	$fdata["GoodName"] = "Inkoheren";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Inkoheren");
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


	$tdatajiwa["Inkoheren"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Inkoheren";
//	Flight_of_Idea
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "Flight_of_Idea";
	$fdata["GoodName"] = "Flight_of_Idea";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Flight_of_Idea");
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


	$tdatajiwa["Flight_of_Idea"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Flight_of_Idea";
//	Sirkumstansia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "Sirkumstansia";
	$fdata["GoodName"] = "Sirkumstansia";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Sirkumstansia");
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


	$tdatajiwa["Sirkumstansia"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Sirkumstansia";
//	Tangensial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "Tangensial";
	$fdata["GoodName"] = "Tangensial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Tangensial");
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


	$tdatajiwa["Tangensial"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Tangensial";
//	Neologisme
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "Neologisme";
	$fdata["GoodName"] = "Neologisme";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Neologisme");
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


	$tdatajiwa["Neologisme"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Neologisme";
//	Word_Salad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "Word_Salad";
	$fdata["GoodName"] = "Word_Salad";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Word_Salad");
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


	$tdatajiwa["Word_Salad"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Word_Salad";
//	Hendaya_Berbahasa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "Hendaya_Berbahasa";
	$fdata["GoodName"] = "Hendaya_Berbahasa";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Hendaya_Berbahasa");
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


	$tdatajiwa["Hendaya_Berbahasa"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Hendaya_Berbahasa";
//	Produktivitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "Produktivitas";
	$fdata["GoodName"] = "Produktivitas";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Produktivitas");
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


	$tdatajiwa["Produktivitas"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Produktivitas";
//	Preokupasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "Preokupasi";
	$fdata["GoodName"] = "Preokupasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Preokupasi");
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


	$tdatajiwa["Preokupasi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Preokupasi";
//	Waham_bizarre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "Waham_bizarre";
	$fdata["GoodName"] = "Waham_bizarre";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_bizarre");
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


	$tdatajiwa["Waham_bizarre"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_bizarre";
//	Waham_sistemik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "Waham_sistemik";
	$fdata["GoodName"] = "Waham_sistemik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_sistemik");
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


	$tdatajiwa["Waham_sistemik"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_sistemik";
//	Waham_nihilistik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "Waham_nihilistik";
	$fdata["GoodName"] = "Waham_nihilistik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_nihilistik");
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


	$tdatajiwa["Waham_nihilistik"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_nihilistik";
//	Waham_paranoid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "Waham_paranoid";
	$fdata["GoodName"] = "Waham_paranoid";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_paranoid");
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


	$tdatajiwa["Waham_paranoid"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_paranoid";
//	Waham_kebesaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "Waham_kebesaran";
	$fdata["GoodName"] = "Waham_kebesaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_kebesaran");
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


	$tdatajiwa["Waham_kebesaran"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_kebesaran";
//	Waham_kejaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "Waham_kejaran";
	$fdata["GoodName"] = "Waham_kejaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_kejaran");
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


	$tdatajiwa["Waham_kejaran"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_kejaran";
//	Waham_rujukan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "Waham_rujukan";
	$fdata["GoodName"] = "Waham_rujukan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_rujukan");
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


	$tdatajiwa["Waham_rujukan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_rujukan";
//	Waham_dikendalikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "Waham_dikendalikan";
	$fdata["GoodName"] = "Waham_dikendalikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Waham_dikendalikan");
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


	$tdatajiwa["Waham_dikendalikan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Waham_dikendalikan";
//	Thought_of_withdrawl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "Thought_of_withdrawl";
	$fdata["GoodName"] = "Thought_of_withdrawl";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Thought_of_withdrawl");
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


	$tdatajiwa["Thought_of_withdrawl"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Thought_of_withdrawl";
//	Thought_of_insertion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "Thought_of_insertion";
	$fdata["GoodName"] = "Thought_of_insertion";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Thought_of_insertion");
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


	$tdatajiwa["Thought_of_insertion"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Thought_of_insertion";
//	Thought_of_broadcasting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "Thought_of_broadcasting";
	$fdata["GoodName"] = "Thought_of_broadcasting";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Thought_of_broadcasting");
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


	$tdatajiwa["Thought_of_broadcasting"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Thought_of_broadcasting";
//	Obsesi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "Obsesi";
	$fdata["GoodName"] = "Obsesi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Obsesi");
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


	$tdatajiwa["Obsesi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Obsesi";
//	Kompulsif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "Kompulsif";
	$fdata["GoodName"] = "Kompulsif";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Kompulsif");
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


	$tdatajiwa["Kompulsif"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Kompulsif";
//	Fobia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "Fobia";
	$fdata["GoodName"] = "Fobia";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Fobia");
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


	$tdatajiwa["Fobia"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Fobia";
//	Gagasan_untuk_bunuh_diri
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "Gagasan_untuk_bunuh_diri";
	$fdata["GoodName"] = "Gagasan_untuk_bunuh_diri";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Gagasan_untuk_bunuh_diri");
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


	$tdatajiwa["Gagasan_untuk_bunuh_diri"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Gagasan_untuk_bunuh_diri";
//	Taraf_kesadaran_dan_kesiagaan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "Taraf_kesadaran_dan_kesiagaan";
	$fdata["GoodName"] = "Taraf_kesadaran_dan_kesiagaan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Taraf_kesadaran_dan_kesiagaan");
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


	$tdatajiwa["Taraf_kesadaran_dan_kesiagaan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Taraf_kesadaran_dan_kesiagaan";
//	Orieantasi_Waktu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "Orieantasi_Waktu";
	$fdata["GoodName"] = "Orieantasi_Waktu";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Orieantasi_Waktu");
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


	$tdatajiwa["Orieantasi_Waktu"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Orieantasi_Waktu";
//	Orieantasi_Tempat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "Orieantasi_Tempat";
	$fdata["GoodName"] = "Orieantasi_Tempat";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Orieantasi_Tempat");
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


	$tdatajiwa["Orieantasi_Tempat"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Orieantasi_Tempat";
//	Orieantasi_Orang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "Orieantasi_Orang";
	$fdata["GoodName"] = "Orieantasi_Orang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Orieantasi_Orang");
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


	$tdatajiwa["Orieantasi_Orang"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Orieantasi_Orang";
//	Daya_ingat_Jangka_panjang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "Daya_ingat_Jangka_panjang";
	$fdata["GoodName"] = "Daya_ingat_Jangka_panjang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Daya_ingat_Jangka_panjang");
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


	$tdatajiwa["Daya_ingat_Jangka_panjang"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Daya_ingat_Jangka_panjang";
//	Daya_ingat_Jangka_sedang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "Daya_ingat_Jangka_sedang";
	$fdata["GoodName"] = "Daya_ingat_Jangka_sedang";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Daya_ingat_Jangka_sedang");
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


	$tdatajiwa["Daya_ingat_Jangka_sedang"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Daya_ingat_Jangka_sedang";
//	Daya_ingat_Jangka_pendek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "Daya_ingat_Jangka_pendek";
	$fdata["GoodName"] = "Daya_ingat_Jangka_pendek";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Daya_ingat_Jangka_pendek");
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


	$tdatajiwa["Daya_ingat_Jangka_pendek"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Daya_ingat_Jangka_pendek";
//	Daya_ingat_Jangka_segera
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "Daya_ingat_Jangka_segera";
	$fdata["GoodName"] = "Daya_ingat_Jangka_segera";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Daya_ingat_Jangka_segera");
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


	$tdatajiwa["Daya_ingat_Jangka_segera"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Daya_ingat_Jangka_segera";
//	Konsentrasi_perhatian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "Konsentrasi_perhatian";
	$fdata["GoodName"] = "Konsentrasi_perhatian";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Konsentrasi_perhatian");
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


	$tdatajiwa["Konsentrasi_perhatian"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Konsentrasi_perhatian";
//	Kemampuan_Membaca_Menulis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "Kemampuan_Membaca_Menulis";
	$fdata["GoodName"] = "Kemampuan_Membaca_Menulis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Kemampuan_Membaca_Menulis");
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


	$tdatajiwa["Kemampuan_Membaca_Menulis"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Kemampuan_Membaca_Menulis";
//	Kemampuan_visuospasial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "Kemampuan_visuospasial";
	$fdata["GoodName"] = "Kemampuan_visuospasial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Kemampuan_visuospasial");
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


	$tdatajiwa["Kemampuan_visuospasial"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Kemampuan_visuospasial";
//	Pikiran_abstrak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "Pikiran_abstrak";
	$fdata["GoodName"] = "Pikiran_abstrak";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Pikiran_abstrak");
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


	$tdatajiwa["Pikiran_abstrak"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Pikiran_abstrak";
//	Inteligensia_dan_kemampuan_informasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "Inteligensia_dan_kemampuan_informasi";
	$fdata["GoodName"] = "Inteligensia_dan_kemampuan_informasi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Inteligensia_dan_kemampuan_informasi");
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


	$tdatajiwa["Inteligensia_dan_kemampuan_informasi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Inteligensia_dan_kemampuan_informasi";
//	Kemampuan_mengendalikan_impuls
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "Kemampuan_mengendalikan_impuls";
	$fdata["GoodName"] = "Kemampuan_mengendalikan_impuls";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Kemampuan_mengendalikan_impuls");
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


	$tdatajiwa["Kemampuan_mengendalikan_impuls"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Kemampuan_mengendalikan_impuls";
//	Daya_nilai_dan_tilikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "Daya_nilai_dan_tilikan";
	$fdata["GoodName"] = "Daya_nilai_dan_tilikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Daya_nilai_dan_tilikan");
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


	$tdatajiwa["Daya_nilai_dan_tilikan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Daya_nilai_dan_tilikan";
//	Daya_nilai_sosial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "Daya_nilai_sosial";
	$fdata["GoodName"] = "Daya_nilai_sosial";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Daya_nilai_sosial");
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


	$tdatajiwa["Daya_nilai_sosial"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Daya_nilai_sosial";
//	Uji_daya_nilai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "Uji_daya_nilai";
	$fdata["GoodName"] = "Uji_daya_nilai";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Uji_daya_nilai");
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


	$tdatajiwa["Uji_daya_nilai"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Uji_daya_nilai";
//	Penilaian_Daya_Realita
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "Penilaian_Daya_Realita";
	$fdata["GoodName"] = "Penilaian_Daya_Realita";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Penilaian_Daya_Realita");
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


	$tdatajiwa["Penilaian_Daya_Realita"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Penilaian_Daya_Realita";
//	Tilikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "Tilikan";
	$fdata["GoodName"] = "Tilikan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Tilikan");
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


	$tdatajiwa["Tilikan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Tilikan";
//	Taraf_dipercaya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "Taraf_dipercaya";
	$fdata["GoodName"] = "Taraf_dipercaya";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Taraf_dipercaya");
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


	$tdatajiwa["Taraf_dipercaya"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Taraf_dipercaya";
//	Keadaan_Umum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "Keadaan_Umum";
	$fdata["GoodName"] = "Keadaan_Umum";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Keadaan_Umum");
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


	$tdatajiwa["Keadaan_Umum"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Keadaan_Umum";
//	Kesadaran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "Kesadaran";
	$fdata["GoodName"] = "Kesadaran";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Kesadaran");
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


	$tdatajiwa["Kesadaran"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Kesadaran";
//	Status_gizi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "Status_gizi";
	$fdata["GoodName"] = "Status_gizi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Status_gizi");
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


	$tdatajiwa["Status_gizi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Status_gizi";
//	Tekanan_Darah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "Tekanan_Darah";
	$fdata["GoodName"] = "Tekanan_Darah";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Tekanan_Darah");
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


	$tdatajiwa["Tekanan_Darah"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Tekanan_Darah";
//	Frekuensi_Nadi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "Frekuensi_Nadi";
	$fdata["GoodName"] = "Frekuensi_Nadi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Frekuensi_Nadi");
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


	$tdatajiwa["Frekuensi_Nadi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Frekuensi_Nadi";
//	Frekuensi_Nafas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "Frekuensi_Nafas";
	$fdata["GoodName"] = "Frekuensi_Nafas";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Frekuensi_Nafas");
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


	$tdatajiwa["Frekuensi_Nafas"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Frekuensi_Nafas";
//	Suhu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "Suhu";
	$fdata["GoodName"] = "Suhu";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Suhu");
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


	$tdatajiwa["Suhu"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Suhu";
//	Mata_dan_THT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "Mata_dan_THT";
	$fdata["GoodName"] = "Mata_dan_THT";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Mata_dan_THT");
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


	$tdatajiwa["Mata_dan_THT"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Mata_dan_THT";
//	Mulut_dan_Gigi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "Mulut_dan_Gigi";
	$fdata["GoodName"] = "Mulut_dan_Gigi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Mulut_dan_Gigi");
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


	$tdatajiwa["Mulut_dan_Gigi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Mulut_dan_Gigi";
//	Thorax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "Thorax";
	$fdata["GoodName"] = "Thorax";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Thorax");
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


	$tdatajiwa["Thorax"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Thorax";
//	Abdomen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "Abdomen";
	$fdata["GoodName"] = "Abdomen";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Abdomen");
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


	$tdatajiwa["Abdomen"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Abdomen";
//	Extremitas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "Extremitas";
	$fdata["GoodName"] = "Extremitas";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Extremitas");
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


	$tdatajiwa["Extremitas"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Extremitas";
//	Tanda_rangsang_Meningeal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "Tanda_rangsang_Meningeal";
	$fdata["GoodName"] = "Tanda_rangsang_Meningeal";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Tanda_rangsang_Meningeal");
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


	$tdatajiwa["Tanda_rangsang_Meningeal"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Tanda_rangsang_Meningeal";
//	Motorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "Motorik";
	$fdata["GoodName"] = "Motorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Motorik");
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


	$tdatajiwa["Motorik"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Motorik";
//	Sensorik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "Sensorik";
	$fdata["GoodName"] = "Sensorik";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Sensorik");
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


	$tdatajiwa["Sensorik"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Sensorik";
//	Diagnosis_Axis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "Diagnosis_Axis";
	$fdata["GoodName"] = "Diagnosis_Axis";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Diagnosis_Axis");
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


	$tdatajiwa["Diagnosis_Axis"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Diagnosis_Axis";
//	Organobiologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "Organobiologi";
	$fdata["GoodName"] = "Organobiologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Organobiologi");
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


	$tdatajiwa["Organobiologi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Organobiologi";
//	Psikologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "Psikologi";
	$fdata["GoodName"] = "Psikologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Psikologi");
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


	$tdatajiwa["Psikologi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Psikologi";
//	Lingkungan_dan_sosial_ekonomi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "Lingkungan_dan_sosial_ekonomi";
	$fdata["GoodName"] = "Lingkungan_dan_sosial_ekonomi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Lingkungan_dan_sosial_ekonomi");
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


	$tdatajiwa["Lingkungan_dan_sosial_ekonomi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Lingkungan_dan_sosial_ekonomi";
//	Quo_ad_Vitam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "Quo_ad_Vitam";
	$fdata["GoodName"] = "Quo_ad_Vitam";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Quo_ad_Vitam");
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


	$tdatajiwa["Quo_ad_Vitam"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Quo_ad_Vitam";
//	Quo_ad_Fungsionam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "Quo_ad_Fungsionam";
	$fdata["GoodName"] = "Quo_ad_Fungsionam";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Quo_ad_Fungsionam");
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


	$tdatajiwa["Quo_ad_Fungsionam"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Quo_ad_Fungsionam";
//	Quo_ad_Sanationam
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "Quo_ad_Sanationam";
	$fdata["GoodName"] = "Quo_ad_Sanationam";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Quo_ad_Sanationam");
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


	$tdatajiwa["Quo_ad_Sanationam"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Quo_ad_Sanationam";
//	Hal-hal_yang_mendukung
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "Hal-hal_yang_mendukung";
	$fdata["GoodName"] = "Hal_hal_yang_mendukung";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Hal_hal_yang_mendukung");
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


	$tdatajiwa["Hal-hal_yang_mendukung"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Hal-hal_yang_mendukung";
//	Hal-hal_yang_memberatkan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "Hal-hal_yang_memberatkan";
	$fdata["GoodName"] = "Hal_hal_yang_memberatkan";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Hal_hal_yang_memberatkan");
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


	$tdatajiwa["Hal-hal_yang_memberatkan"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Hal-hal_yang_memberatkan";
//	Farmakologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "Farmakologi";
	$fdata["GoodName"] = "Farmakologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Farmakologi");
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


	$tdatajiwa["Farmakologi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Farmakologi";
//	Non_Farmakologi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "Non_Farmakologi";
	$fdata["GoodName"] = "Non_Farmakologi";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Non_Farmakologi");
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


	$tdatajiwa["Non_Farmakologi"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Non_Farmakologi";
//	id_pasien
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "id_pasien";
	$fdata["GoodName"] = "id_pasien";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","id_pasien");
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


	$tdatajiwa["id_pasien"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "id_pasien";
//	id_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "id_user";
	$fdata["GoodName"] = "id_user";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","id_user");
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


	$tdatajiwa["id_user"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "id_user";
//	id_resep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "id_resep";
	$fdata["GoodName"] = "id_resep";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","id_resep");
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


	$tdatajiwa["id_resep"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "id_resep";
//	Nomor_Rm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "Nomor_Rm";
	$fdata["GoodName"] = "Nomor_Rm";
	$fdata["ownerTable"] = "jiwa";
	$fdata["Label"] = GetFieldLabel("jiwa","Nomor_Rm");
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


	$tdatajiwa["Nomor_Rm"] = $fdata;
		$tdatajiwa[".searchableFields"][] = "Nomor_Rm";


$tables_data["jiwa"]=&$tdatajiwa;
$field_labels["jiwa"] = &$fieldLabelsjiwa;
$fieldToolTips["jiwa"] = &$fieldToolTipsjiwa;
$placeHolders["jiwa"] = &$placeHoldersjiwa;
$page_titles["jiwa"] = &$pageTitlesjiwa;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jiwa"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["jiwa"] = array();



	
				$strOriginalDetailsTable="identitas_pasien";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="identitas_pasien";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "identitas_pasien";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["jiwa"][0] = $masterParams;
				$masterTablesData["jiwa"][0]["masterKeys"] = array();
	$masterTablesData["jiwa"][0]["masterKeys"][]="Id_Pasien";
				$masterTablesData["jiwa"][0]["detailKeys"] = array();
	$masterTablesData["jiwa"][0]["detailKeys"][]="id_pasien";
		
	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["jiwa"][1] = $masterParams;
				$masterTablesData["jiwa"][1]["masterKeys"] = array();
	$masterTablesData["jiwa"][1]["masterKeys"][]="id";
				$masterTablesData["jiwa"][1]["detailKeys"] = array();
	$masterTablesData["jiwa"][1]["detailKeys"][]="id_user";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_jiwa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_Jiwa,  	Keluhan_Utama,  	Anamnesis,  	Autoanamnesis,  	Alloanamnesis,  	Riwayat_gangguan_sekarang,  	Riwayat_gangguan_dahulu,  	Riwayat_gangguan_psikiatri,  	Riwayat_gangguan_medis,  	Riwayat_penggunaan_zat_psikoaktif,  	Riwayat_prenatal_dan_perinatal,  	Riwayat_masa_kanak_awal,  	Riwayat_masa_kanak_pertengahan,  	Riwayat_masa_kanak_akhir_dan_remaja,  	Masa_Dewasa,  	Riwayat_pendidikan,  	Riwayat_pekerjaan,  	Riwayat_pernikahan,  	Riwayat_Agama,  	Riwayat_Psikoseksual,  	Riwayat_aktivitas_sosial,  	Riwayat_hukum,  	Riwayat_keluarga,  	Genogram_keluarga,  	Situasi_kehidupan_sekarang,  	Persepsi_tentang_diri_dan_kehidupannya,  	Persepsi_keluarga_tentang_diri_pasien,  	Fantasi,  	Penampilan,  	Perilaku_dan_aktivitas_psikomotor,  	Sikap_terhadap_pemeriksa,  	Irama,  	Kecepatan_bicara,  	Volume,  	Kelancaran,  	Mood,  	Afek,  	Keserasian,  	Auditorik,  	Visual,  	Taktil,  	Olfaktorik,  	Gustatorik,  	Ilusi,  	Depersonalisasi,  	Derealisasi,  	Blocking,  	Assosiasi_Longgar,  	Inkoheren,  	Flight_of_Idea,  	Sirkumstansia,  	Tangensial,  	Neologisme,  	Word_Salad,  	Hendaya_Berbahasa,  	Produktivitas,  	Preokupasi,  	Waham_bizarre,  	Waham_sistemik,  	Waham_nihilistik,  	Waham_paranoid,  	Waham_kebesaran,  	Waham_kejaran,  	Waham_rujukan,  	Waham_dikendalikan,  	Thought_of_withdrawl,  	Thought_of_insertion,  	Thought_of_broadcasting,  	Obsesi,  	Kompulsif,  	Fobia,  	Gagasan_untuk_bunuh_diri,  	Taraf_kesadaran_dan_kesiagaan,  	Orieantasi_Waktu,  	Orieantasi_Tempat,  	Orieantasi_Orang,  	Daya_ingat_Jangka_panjang,  	Daya_ingat_Jangka_sedang,  	Daya_ingat_Jangka_pendek,  	Daya_ingat_Jangka_segera,  	Konsentrasi_perhatian,  	Kemampuan_Membaca_Menulis,  	Kemampuan_visuospasial,  	Pikiran_abstrak,  	Inteligensia_dan_kemampuan_informasi,  	Kemampuan_mengendalikan_impuls,  	Daya_nilai_dan_tilikan,  	Daya_nilai_sosial,  	Uji_daya_nilai,  	Penilaian_Daya_Realita,  	Tilikan,  	Taraf_dipercaya,  	Keadaan_Umum,  	Kesadaran,  	Status_gizi,  	Tekanan_Darah,  	Frekuensi_Nadi,  	Frekuensi_Nafas,  	Suhu,  	Mata_dan_THT,  	Mulut_dan_Gigi,  	Thorax,  	Abdomen,  	Extremitas,  	Tanda_rangsang_Meningeal,  	Motorik,  	Sensorik,  	Diagnosis_Axis,  	Organobiologi,  	Psikologi,  	Lingkungan_dan_sosial_ekonomi,  	Quo_ad_Vitam,  	Quo_ad_Fungsionam,  	Quo_ad_Sanationam,  	`Hal-hal_yang_mendukung`,  	`Hal-hal_yang_memberatkan`,  	Farmakologi,  	Non_Farmakologi,  	id_pasien,  	id_user,  	id_resep,  	Nomor_Rm";
$proto0["m_strFrom"] = "FROM jiwa";
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
	"m_srcTableName" => "jiwa"
));

$proto6["m_sql"] = "id_Jiwa";
$proto6["m_srcTableName"] = "jiwa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Keluhan_Utama",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto8["m_sql"] = "Keluhan_Utama";
$proto8["m_srcTableName"] = "jiwa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Anamnesis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto10["m_sql"] = "Anamnesis";
$proto10["m_srcTableName"] = "jiwa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Autoanamnesis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto12["m_sql"] = "Autoanamnesis";
$proto12["m_srcTableName"] = "jiwa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Alloanamnesis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto14["m_sql"] = "Alloanamnesis";
$proto14["m_srcTableName"] = "jiwa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_sekarang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto16["m_sql"] = "Riwayat_gangguan_sekarang";
$proto16["m_srcTableName"] = "jiwa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_dahulu",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto18["m_sql"] = "Riwayat_gangguan_dahulu";
$proto18["m_srcTableName"] = "jiwa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_psikiatri",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto20["m_sql"] = "Riwayat_gangguan_psikiatri";
$proto20["m_srcTableName"] = "jiwa";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_gangguan_medis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto22["m_sql"] = "Riwayat_gangguan_medis";
$proto22["m_srcTableName"] = "jiwa";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_penggunaan_zat_psikoaktif",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto24["m_sql"] = "Riwayat_penggunaan_zat_psikoaktif";
$proto24["m_srcTableName"] = "jiwa";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_prenatal_dan_perinatal",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto26["m_sql"] = "Riwayat_prenatal_dan_perinatal";
$proto26["m_srcTableName"] = "jiwa";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_masa_kanak_awal",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto28["m_sql"] = "Riwayat_masa_kanak_awal";
$proto28["m_srcTableName"] = "jiwa";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_masa_kanak_pertengahan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto30["m_sql"] = "Riwayat_masa_kanak_pertengahan";
$proto30["m_srcTableName"] = "jiwa";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_masa_kanak_akhir_dan_remaja",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto32["m_sql"] = "Riwayat_masa_kanak_akhir_dan_remaja";
$proto32["m_srcTableName"] = "jiwa";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Masa_Dewasa",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto34["m_sql"] = "Masa_Dewasa";
$proto34["m_srcTableName"] = "jiwa";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_pendidikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto36["m_sql"] = "Riwayat_pendidikan";
$proto36["m_srcTableName"] = "jiwa";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_pekerjaan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto38["m_sql"] = "Riwayat_pekerjaan";
$proto38["m_srcTableName"] = "jiwa";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_pernikahan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto40["m_sql"] = "Riwayat_pernikahan";
$proto40["m_srcTableName"] = "jiwa";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Agama",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto42["m_sql"] = "Riwayat_Agama";
$proto42["m_srcTableName"] = "jiwa";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_Psikoseksual",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto44["m_sql"] = "Riwayat_Psikoseksual";
$proto44["m_srcTableName"] = "jiwa";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_aktivitas_sosial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto46["m_sql"] = "Riwayat_aktivitas_sosial";
$proto46["m_srcTableName"] = "jiwa";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_hukum",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto48["m_sql"] = "Riwayat_hukum";
$proto48["m_srcTableName"] = "jiwa";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Riwayat_keluarga",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto50["m_sql"] = "Riwayat_keluarga";
$proto50["m_srcTableName"] = "jiwa";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Genogram_keluarga",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto52["m_sql"] = "Genogram_keluarga";
$proto52["m_srcTableName"] = "jiwa";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Situasi_kehidupan_sekarang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto54["m_sql"] = "Situasi_kehidupan_sekarang";
$proto54["m_srcTableName"] = "jiwa";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Persepsi_tentang_diri_dan_kehidupannya",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto56["m_sql"] = "Persepsi_tentang_diri_dan_kehidupannya";
$proto56["m_srcTableName"] = "jiwa";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Persepsi_keluarga_tentang_diri_pasien",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto58["m_sql"] = "Persepsi_keluarga_tentang_diri_pasien";
$proto58["m_srcTableName"] = "jiwa";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Fantasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto60["m_sql"] = "Fantasi";
$proto60["m_srcTableName"] = "jiwa";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Penampilan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto62["m_sql"] = "Penampilan";
$proto62["m_srcTableName"] = "jiwa";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Perilaku_dan_aktivitas_psikomotor",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto64["m_sql"] = "Perilaku_dan_aktivitas_psikomotor";
$proto64["m_srcTableName"] = "jiwa";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Sikap_terhadap_pemeriksa",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto66["m_sql"] = "Sikap_terhadap_pemeriksa";
$proto66["m_srcTableName"] = "jiwa";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Irama",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto68["m_sql"] = "Irama";
$proto68["m_srcTableName"] = "jiwa";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Kecepatan_bicara",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto70["m_sql"] = "Kecepatan_bicara";
$proto70["m_srcTableName"] = "jiwa";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Volume",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto72["m_sql"] = "Volume";
$proto72["m_srcTableName"] = "jiwa";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Kelancaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto74["m_sql"] = "Kelancaran";
$proto74["m_srcTableName"] = "jiwa";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Mood",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto76["m_sql"] = "Mood";
$proto76["m_srcTableName"] = "jiwa";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Afek",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto78["m_sql"] = "Afek";
$proto78["m_srcTableName"] = "jiwa";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Keserasian",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto80["m_sql"] = "Keserasian";
$proto80["m_srcTableName"] = "jiwa";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Auditorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto82["m_sql"] = "Auditorik";
$proto82["m_srcTableName"] = "jiwa";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Visual",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto84["m_sql"] = "Visual";
$proto84["m_srcTableName"] = "jiwa";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Taktil",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto86["m_sql"] = "Taktil";
$proto86["m_srcTableName"] = "jiwa";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Olfaktorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto88["m_sql"] = "Olfaktorik";
$proto88["m_srcTableName"] = "jiwa";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Gustatorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto90["m_sql"] = "Gustatorik";
$proto90["m_srcTableName"] = "jiwa";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Ilusi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto92["m_sql"] = "Ilusi";
$proto92["m_srcTableName"] = "jiwa";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Depersonalisasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto94["m_sql"] = "Depersonalisasi";
$proto94["m_srcTableName"] = "jiwa";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Derealisasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto96["m_sql"] = "Derealisasi";
$proto96["m_srcTableName"] = "jiwa";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Blocking",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto98["m_sql"] = "Blocking";
$proto98["m_srcTableName"] = "jiwa";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Assosiasi_Longgar",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto100["m_sql"] = "Assosiasi_Longgar";
$proto100["m_srcTableName"] = "jiwa";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "Inkoheren",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto102["m_sql"] = "Inkoheren";
$proto102["m_srcTableName"] = "jiwa";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "Flight_of_Idea",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto104["m_sql"] = "Flight_of_Idea";
$proto104["m_srcTableName"] = "jiwa";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "Sirkumstansia",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto106["m_sql"] = "Sirkumstansia";
$proto106["m_srcTableName"] = "jiwa";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "Tangensial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto108["m_sql"] = "Tangensial";
$proto108["m_srcTableName"] = "jiwa";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "Neologisme",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto110["m_sql"] = "Neologisme";
$proto110["m_srcTableName"] = "jiwa";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "Word_Salad",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto112["m_sql"] = "Word_Salad";
$proto112["m_srcTableName"] = "jiwa";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "Hendaya_Berbahasa",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto114["m_sql"] = "Hendaya_Berbahasa";
$proto114["m_srcTableName"] = "jiwa";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "Produktivitas",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto116["m_sql"] = "Produktivitas";
$proto116["m_srcTableName"] = "jiwa";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "Preokupasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto118["m_sql"] = "Preokupasi";
$proto118["m_srcTableName"] = "jiwa";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_bizarre",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto120["m_sql"] = "Waham_bizarre";
$proto120["m_srcTableName"] = "jiwa";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_sistemik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto122["m_sql"] = "Waham_sistemik";
$proto122["m_srcTableName"] = "jiwa";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_nihilistik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto124["m_sql"] = "Waham_nihilistik";
$proto124["m_srcTableName"] = "jiwa";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_paranoid",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto126["m_sql"] = "Waham_paranoid";
$proto126["m_srcTableName"] = "jiwa";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_kebesaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto128["m_sql"] = "Waham_kebesaran";
$proto128["m_srcTableName"] = "jiwa";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_kejaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto130["m_sql"] = "Waham_kejaran";
$proto130["m_srcTableName"] = "jiwa";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_rujukan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto132["m_sql"] = "Waham_rujukan";
$proto132["m_srcTableName"] = "jiwa";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "Waham_dikendalikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto134["m_sql"] = "Waham_dikendalikan";
$proto134["m_srcTableName"] = "jiwa";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "Thought_of_withdrawl",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto136["m_sql"] = "Thought_of_withdrawl";
$proto136["m_srcTableName"] = "jiwa";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "Thought_of_insertion",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto138["m_sql"] = "Thought_of_insertion";
$proto138["m_srcTableName"] = "jiwa";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "Thought_of_broadcasting",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto140["m_sql"] = "Thought_of_broadcasting";
$proto140["m_srcTableName"] = "jiwa";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "Obsesi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto142["m_sql"] = "Obsesi";
$proto142["m_srcTableName"] = "jiwa";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "Kompulsif",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto144["m_sql"] = "Kompulsif";
$proto144["m_srcTableName"] = "jiwa";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "Fobia",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto146["m_sql"] = "Fobia";
$proto146["m_srcTableName"] = "jiwa";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "Gagasan_untuk_bunuh_diri",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto148["m_sql"] = "Gagasan_untuk_bunuh_diri";
$proto148["m_srcTableName"] = "jiwa";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "Taraf_kesadaran_dan_kesiagaan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto150["m_sql"] = "Taraf_kesadaran_dan_kesiagaan";
$proto150["m_srcTableName"] = "jiwa";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "Orieantasi_Waktu",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto152["m_sql"] = "Orieantasi_Waktu";
$proto152["m_srcTableName"] = "jiwa";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "Orieantasi_Tempat",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto154["m_sql"] = "Orieantasi_Tempat";
$proto154["m_srcTableName"] = "jiwa";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "Orieantasi_Orang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto156["m_sql"] = "Orieantasi_Orang";
$proto156["m_srcTableName"] = "jiwa";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_panjang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto158["m_sql"] = "Daya_ingat_Jangka_panjang";
$proto158["m_srcTableName"] = "jiwa";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_sedang",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto160["m_sql"] = "Daya_ingat_Jangka_sedang";
$proto160["m_srcTableName"] = "jiwa";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_pendek",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto162["m_sql"] = "Daya_ingat_Jangka_pendek";
$proto162["m_srcTableName"] = "jiwa";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_ingat_Jangka_segera",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto164["m_sql"] = "Daya_ingat_Jangka_segera";
$proto164["m_srcTableName"] = "jiwa";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "Konsentrasi_perhatian",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto166["m_sql"] = "Konsentrasi_perhatian";
$proto166["m_srcTableName"] = "jiwa";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "Kemampuan_Membaca_Menulis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto168["m_sql"] = "Kemampuan_Membaca_Menulis";
$proto168["m_srcTableName"] = "jiwa";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "Kemampuan_visuospasial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto170["m_sql"] = "Kemampuan_visuospasial";
$proto170["m_srcTableName"] = "jiwa";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "Pikiran_abstrak",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto172["m_sql"] = "Pikiran_abstrak";
$proto172["m_srcTableName"] = "jiwa";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "Inteligensia_dan_kemampuan_informasi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto174["m_sql"] = "Inteligensia_dan_kemampuan_informasi";
$proto174["m_srcTableName"] = "jiwa";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "Kemampuan_mengendalikan_impuls",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto176["m_sql"] = "Kemampuan_mengendalikan_impuls";
$proto176["m_srcTableName"] = "jiwa";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_nilai_dan_tilikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto178["m_sql"] = "Daya_nilai_dan_tilikan";
$proto178["m_srcTableName"] = "jiwa";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "Daya_nilai_sosial",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto180["m_sql"] = "Daya_nilai_sosial";
$proto180["m_srcTableName"] = "jiwa";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "Uji_daya_nilai",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto182["m_sql"] = "Uji_daya_nilai";
$proto182["m_srcTableName"] = "jiwa";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "Penilaian_Daya_Realita",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto184["m_sql"] = "Penilaian_Daya_Realita";
$proto184["m_srcTableName"] = "jiwa";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "Tilikan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto186["m_sql"] = "Tilikan";
$proto186["m_srcTableName"] = "jiwa";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "Taraf_dipercaya",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto188["m_sql"] = "Taraf_dipercaya";
$proto188["m_srcTableName"] = "jiwa";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "Keadaan_Umum",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto190["m_sql"] = "Keadaan_Umum";
$proto190["m_srcTableName"] = "jiwa";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "Kesadaran",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto192["m_sql"] = "Kesadaran";
$proto192["m_srcTableName"] = "jiwa";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "Status_gizi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto194["m_sql"] = "Status_gizi";
$proto194["m_srcTableName"] = "jiwa";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "Tekanan_Darah",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto196["m_sql"] = "Tekanan_Darah";
$proto196["m_srcTableName"] = "jiwa";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "Frekuensi_Nadi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto198["m_sql"] = "Frekuensi_Nadi";
$proto198["m_srcTableName"] = "jiwa";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "Frekuensi_Nafas",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto200["m_sql"] = "Frekuensi_Nafas";
$proto200["m_srcTableName"] = "jiwa";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "Suhu",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto202["m_sql"] = "Suhu";
$proto202["m_srcTableName"] = "jiwa";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "Mata_dan_THT",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto204["m_sql"] = "Mata_dan_THT";
$proto204["m_srcTableName"] = "jiwa";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
						$proto206=array();
			$obj = new SQLField(array(
	"m_strName" => "Mulut_dan_Gigi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto206["m_sql"] = "Mulut_dan_Gigi";
$proto206["m_srcTableName"] = "jiwa";
$proto206["m_expr"]=$obj;
$proto206["m_alias"] = "";
$obj = new SQLFieldListItem($proto206);

$proto0["m_fieldlist"][]=$obj;
						$proto208=array();
			$obj = new SQLField(array(
	"m_strName" => "Thorax",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto208["m_sql"] = "Thorax";
$proto208["m_srcTableName"] = "jiwa";
$proto208["m_expr"]=$obj;
$proto208["m_alias"] = "";
$obj = new SQLFieldListItem($proto208);

$proto0["m_fieldlist"][]=$obj;
						$proto210=array();
			$obj = new SQLField(array(
	"m_strName" => "Abdomen",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto210["m_sql"] = "Abdomen";
$proto210["m_srcTableName"] = "jiwa";
$proto210["m_expr"]=$obj;
$proto210["m_alias"] = "";
$obj = new SQLFieldListItem($proto210);

$proto0["m_fieldlist"][]=$obj;
						$proto212=array();
			$obj = new SQLField(array(
	"m_strName" => "Extremitas",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto212["m_sql"] = "Extremitas";
$proto212["m_srcTableName"] = "jiwa";
$proto212["m_expr"]=$obj;
$proto212["m_alias"] = "";
$obj = new SQLFieldListItem($proto212);

$proto0["m_fieldlist"][]=$obj;
						$proto214=array();
			$obj = new SQLField(array(
	"m_strName" => "Tanda_rangsang_Meningeal",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto214["m_sql"] = "Tanda_rangsang_Meningeal";
$proto214["m_srcTableName"] = "jiwa";
$proto214["m_expr"]=$obj;
$proto214["m_alias"] = "";
$obj = new SQLFieldListItem($proto214);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "Motorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto216["m_sql"] = "Motorik";
$proto216["m_srcTableName"] = "jiwa";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "Sensorik",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto218["m_sql"] = "Sensorik";
$proto218["m_srcTableName"] = "jiwa";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "Diagnosis_Axis",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto220["m_sql"] = "Diagnosis_Axis";
$proto220["m_srcTableName"] = "jiwa";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "Organobiologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto222["m_sql"] = "Organobiologi";
$proto222["m_srcTableName"] = "jiwa";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "Psikologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto224["m_sql"] = "Psikologi";
$proto224["m_srcTableName"] = "jiwa";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "Lingkungan_dan_sosial_ekonomi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto226["m_sql"] = "Lingkungan_dan_sosial_ekonomi";
$proto226["m_srcTableName"] = "jiwa";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "Quo_ad_Vitam",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto228["m_sql"] = "Quo_ad_Vitam";
$proto228["m_srcTableName"] = "jiwa";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "Quo_ad_Fungsionam",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto230["m_sql"] = "Quo_ad_Fungsionam";
$proto230["m_srcTableName"] = "jiwa";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "Quo_ad_Sanationam",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto232["m_sql"] = "Quo_ad_Sanationam";
$proto232["m_srcTableName"] = "jiwa";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "Hal-hal_yang_mendukung",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto234["m_sql"] = "`Hal-hal_yang_mendukung`";
$proto234["m_srcTableName"] = "jiwa";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "Hal-hal_yang_memberatkan",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto236["m_sql"] = "`Hal-hal_yang_memberatkan`";
$proto236["m_srcTableName"] = "jiwa";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "Farmakologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto238["m_sql"] = "Farmakologi";
$proto238["m_srcTableName"] = "jiwa";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "Non_Farmakologi",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto240["m_sql"] = "Non_Farmakologi";
$proto240["m_srcTableName"] = "jiwa";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "id_pasien",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto242["m_sql"] = "id_pasien";
$proto242["m_srcTableName"] = "jiwa";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "id_user",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto244["m_sql"] = "id_user";
$proto244["m_srcTableName"] = "jiwa";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "id_resep",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto246["m_sql"] = "id_resep";
$proto246["m_srcTableName"] = "jiwa";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "Nomor_Rm",
	"m_strTable" => "jiwa",
	"m_srcTableName" => "jiwa"
));

$proto248["m_sql"] = "Nomor_Rm";
$proto248["m_srcTableName"] = "jiwa";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto250=array();
$proto250["m_link"] = "SQLL_MAIN";
			$proto251=array();
$proto251["m_strName"] = "jiwa";
$proto251["m_srcTableName"] = "jiwa";
$proto251["m_columns"] = array();
$proto251["m_columns"][] = "id_Jiwa";
$proto251["m_columns"][] = "Keluhan_Utama";
$proto251["m_columns"][] = "Anamnesis";
$proto251["m_columns"][] = "Autoanamnesis";
$proto251["m_columns"][] = "Alloanamnesis";
$proto251["m_columns"][] = "Riwayat_gangguan_sekarang";
$proto251["m_columns"][] = "Riwayat_gangguan_dahulu";
$proto251["m_columns"][] = "Riwayat_gangguan_psikiatri";
$proto251["m_columns"][] = "Riwayat_gangguan_medis";
$proto251["m_columns"][] = "Riwayat_penggunaan_zat_psikoaktif";
$proto251["m_columns"][] = "Riwayat_prenatal_dan_perinatal";
$proto251["m_columns"][] = "Riwayat_masa_kanak_awal";
$proto251["m_columns"][] = "Riwayat_masa_kanak_pertengahan";
$proto251["m_columns"][] = "Riwayat_masa_kanak_akhir_dan_remaja";
$proto251["m_columns"][] = "Masa_Dewasa";
$proto251["m_columns"][] = "Riwayat_pendidikan";
$proto251["m_columns"][] = "Riwayat_pekerjaan";
$proto251["m_columns"][] = "Riwayat_pernikahan";
$proto251["m_columns"][] = "Riwayat_Agama";
$proto251["m_columns"][] = "Riwayat_Psikoseksual";
$proto251["m_columns"][] = "Riwayat_aktivitas_sosial";
$proto251["m_columns"][] = "Riwayat_hukum";
$proto251["m_columns"][] = "Riwayat_keluarga";
$proto251["m_columns"][] = "Genogram_keluarga";
$proto251["m_columns"][] = "Situasi_kehidupan_sekarang";
$proto251["m_columns"][] = "Persepsi_tentang_diri_dan_kehidupannya";
$proto251["m_columns"][] = "Persepsi_keluarga_tentang_diri_pasien";
$proto251["m_columns"][] = "Fantasi";
$proto251["m_columns"][] = "Penampilan";
$proto251["m_columns"][] = "Perilaku_dan_aktivitas_psikomotor";
$proto251["m_columns"][] = "Sikap_terhadap_pemeriksa";
$proto251["m_columns"][] = "Irama";
$proto251["m_columns"][] = "Kecepatan_bicara";
$proto251["m_columns"][] = "Volume";
$proto251["m_columns"][] = "Kelancaran";
$proto251["m_columns"][] = "Mood";
$proto251["m_columns"][] = "Afek";
$proto251["m_columns"][] = "Keserasian";
$proto251["m_columns"][] = "Auditorik";
$proto251["m_columns"][] = "Visual";
$proto251["m_columns"][] = "Taktil";
$proto251["m_columns"][] = "Olfaktorik";
$proto251["m_columns"][] = "Gustatorik";
$proto251["m_columns"][] = "Ilusi";
$proto251["m_columns"][] = "Depersonalisasi";
$proto251["m_columns"][] = "Derealisasi";
$proto251["m_columns"][] = "Blocking";
$proto251["m_columns"][] = "Assosiasi_Longgar";
$proto251["m_columns"][] = "Inkoheren";
$proto251["m_columns"][] = "Flight_of_Idea";
$proto251["m_columns"][] = "Sirkumstansia";
$proto251["m_columns"][] = "Tangensial";
$proto251["m_columns"][] = "Neologisme";
$proto251["m_columns"][] = "Word_Salad";
$proto251["m_columns"][] = "Hendaya_Berbahasa";
$proto251["m_columns"][] = "Produktivitas";
$proto251["m_columns"][] = "Preokupasi";
$proto251["m_columns"][] = "Waham_bizarre";
$proto251["m_columns"][] = "Waham_sistemik";
$proto251["m_columns"][] = "Waham_nihilistik";
$proto251["m_columns"][] = "Waham_paranoid";
$proto251["m_columns"][] = "Waham_kebesaran";
$proto251["m_columns"][] = "Waham_kejaran";
$proto251["m_columns"][] = "Waham_rujukan";
$proto251["m_columns"][] = "Waham_dikendalikan";
$proto251["m_columns"][] = "Thought_of_withdrawl";
$proto251["m_columns"][] = "Thought_of_insertion";
$proto251["m_columns"][] = "Thought_of_broadcasting";
$proto251["m_columns"][] = "Obsesi";
$proto251["m_columns"][] = "Kompulsif";
$proto251["m_columns"][] = "Fobia";
$proto251["m_columns"][] = "Gagasan_untuk_bunuh_diri";
$proto251["m_columns"][] = "Taraf_kesadaran_dan_kesiagaan";
$proto251["m_columns"][] = "Orieantasi_Waktu";
$proto251["m_columns"][] = "Orieantasi_Tempat";
$proto251["m_columns"][] = "Orieantasi_Orang";
$proto251["m_columns"][] = "Daya_ingat_Jangka_panjang";
$proto251["m_columns"][] = "Daya_ingat_Jangka_sedang";
$proto251["m_columns"][] = "Daya_ingat_Jangka_pendek";
$proto251["m_columns"][] = "Daya_ingat_Jangka_segera";
$proto251["m_columns"][] = "Konsentrasi_perhatian";
$proto251["m_columns"][] = "Kemampuan_Membaca_Menulis";
$proto251["m_columns"][] = "Kemampuan_visuospasial";
$proto251["m_columns"][] = "Pikiran_abstrak";
$proto251["m_columns"][] = "Inteligensia_dan_kemampuan_informasi";
$proto251["m_columns"][] = "Kemampuan_mengendalikan_impuls";
$proto251["m_columns"][] = "Daya_nilai_dan_tilikan";
$proto251["m_columns"][] = "Daya_nilai_sosial";
$proto251["m_columns"][] = "Uji_daya_nilai";
$proto251["m_columns"][] = "Penilaian_Daya_Realita";
$proto251["m_columns"][] = "Tilikan";
$proto251["m_columns"][] = "Taraf_dipercaya";
$proto251["m_columns"][] = "Keadaan_Umum";
$proto251["m_columns"][] = "Kesadaran";
$proto251["m_columns"][] = "Status_gizi";
$proto251["m_columns"][] = "Tekanan_Darah";
$proto251["m_columns"][] = "Frekuensi_Nadi";
$proto251["m_columns"][] = "Frekuensi_Nafas";
$proto251["m_columns"][] = "Suhu";
$proto251["m_columns"][] = "Mata_dan_THT";
$proto251["m_columns"][] = "Mulut_dan_Gigi";
$proto251["m_columns"][] = "Thorax";
$proto251["m_columns"][] = "Abdomen";
$proto251["m_columns"][] = "Extremitas";
$proto251["m_columns"][] = "Tanda_rangsang_Meningeal";
$proto251["m_columns"][] = "Motorik";
$proto251["m_columns"][] = "Sensorik";
$proto251["m_columns"][] = "Diagnosis_Axis";
$proto251["m_columns"][] = "Organobiologi";
$proto251["m_columns"][] = "Psikologi";
$proto251["m_columns"][] = "Lingkungan_dan_sosial_ekonomi";
$proto251["m_columns"][] = "Quo_ad_Vitam";
$proto251["m_columns"][] = "Quo_ad_Fungsionam";
$proto251["m_columns"][] = "Quo_ad_Sanationam";
$proto251["m_columns"][] = "Hal-hal_yang_mendukung";
$proto251["m_columns"][] = "Hal-hal_yang_memberatkan";
$proto251["m_columns"][] = "Farmakologi";
$proto251["m_columns"][] = "Non_Farmakologi";
$proto251["m_columns"][] = "id_pasien";
$proto251["m_columns"][] = "id_user";
$proto251["m_columns"][] = "id_resep";
$proto251["m_columns"][] = "Nomor_Rm";
$obj = new SQLTable($proto251);

$proto250["m_table"] = $obj;
$proto250["m_sql"] = "jiwa";
$proto250["m_alias"] = "";
$proto250["m_srcTableName"] = "jiwa";
$proto252=array();
$proto252["m_sql"] = "";
$proto252["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto252["m_column"]=$obj;
$proto252["m_contained"] = array();
$proto252["m_strCase"] = "";
$proto252["m_havingmode"] = false;
$proto252["m_inBrackets"] = false;
$proto252["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto252);

$proto250["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto250);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="jiwa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jiwa = createSqlQuery_jiwa();


	
		;

																																																																																																																										

$tdatajiwa[".sqlquery"] = $queryData_jiwa;



$tableEvents["jiwa"] = new eventsBase;
$tdatajiwa[".hasEvents"] = false;

?>