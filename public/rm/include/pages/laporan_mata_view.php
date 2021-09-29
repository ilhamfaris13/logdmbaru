<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'catatan_kemajuan' => array( 'displayPreview' => 1 ),
'daftar_masalah' => array( 'displayPreview' => 1 ),
'rencana_permulaan' => array( 'displayPreview' => 1 ) ),
'master' => array( 'identitas_pasien' => array( 'preview' => true ),
'users' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'Komplikasi',
'Prognosis',
'Terapi',
'Diagnosa_Diagnosa_Banding',
'Penunjang_Lain',
'Cover_Uncover_Test_Kanan',
'Cover_Test_Kanan',
'Hirschberg_Test_Kanan',
'Schirmer_Test_Kanan',
'Sensibilitas_Kornea_Kanan',
'Fluorescein_Test_Kanan',
'Ishihara_Test_Kanan',
'Lapang_Pandang_Kanan',
'Cover_Uncover_Test_Kiri',
'Cover_Test_Kiri',
'Hirschberg_Test_Kiri',
'Schirmer_Test_Kiri',
'Sensibilitas_Kornea_Kiri',
'Fluorescein_Tes_Kiri',
'Ishihara_Test_Kiri',
'Lapang_Pandang_Kiri',
'Segment_Posterior_Kanan',
'Tekanan_Intra_Okuler_Kanan',
'Segment_Posterior_Kiri',
'Tekanan_Intra_Okuler_Kiri',
'Lensa_Kanan',
'Iris_Kanan',
'Pupil_Kanan',
'COA_Kanan',
'Cornea_Kanan',
'Conjunctiva_Kanan',
'Lensa_Kiri',
'Iris_Kiri',
'Pupil_Kiri',
'COA_Kiri',
'Cornea_Kiri',
'Conjunctiva_Kiri',
'Palpebra_Kanan',
'Gerakan_Bola_Mata_Kanan',
'Posisi_Bola_Mata_Kanan',
'Addisi_OS_Kanan',
'Refraksi_OS_Kanan',
'Visus_OS_Kanan',
'Palpebra_Kiri',
'Gerakan_Bola_Mata_Kiri',
'Posisi_Bola_Mata_Kiri',
'Addisi_OD_Kiri',
'Refraksi_OD_Kiri',
'Visus_OD_Kiri',
'Riwayat_Kebiasaan',
'Riwayat_Alergi',
'Riwayat_Penyakit_Dahulu',
'Keluhan_Tambahan',
'Riwayat_Sosio_Ekonomi',
'Riwayat_Pengobatan',
'Riwayat_Penyakit_Keluarga',
'Riwayat_Penyakit_Sekarang',
'Keluhan_Utama',
'Nomor_Rm' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Komplikasi' => array( 'integrated_edit_field60' ),
'Prognosis' => array( 'integrated_edit_field59' ),
'Terapi' => array( 'integrated_edit_field58' ),
'Diagnosa_Diagnosa_Banding' => array( 'integrated_edit_field57' ),
'Penunjang_Lain' => array( 'integrated_edit_field53' ),
'Cover_Uncover_Test_Kanan' => array( 'integrated_edit_field52' ),
'Cover_Test_Kanan' => array( 'integrated_edit_field50' ),
'Hirschberg_Test_Kanan' => array( 'integrated_edit_field48' ),
'Schirmer_Test_Kanan' => array( 'integrated_edit_field46' ),
'Sensibilitas_Kornea_Kanan' => array( 'integrated_edit_field44' ),
'Fluorescein_Test_Kanan' => array( 'integrated_edit_field42' ),
'Ishihara_Test_Kanan' => array( 'integrated_edit_field40' ),
'Lapang_Pandang_Kanan' => array( 'integrated_edit_field38' ),
'Cover_Uncover_Test_Kiri' => array( 'integrated_edit_field51' ),
'Cover_Test_Kiri' => array( 'integrated_edit_field49' ),
'Hirschberg_Test_Kiri' => array( 'integrated_edit_field47' ),
'Schirmer_Test_Kiri' => array( 'integrated_edit_field45' ),
'Sensibilitas_Kornea_Kiri' => array( 'integrated_edit_field43' ),
'Fluorescein_Tes_Kiri' => array( 'integrated_edit_field41' ),
'Ishihara_Test_Kiri' => array( 'integrated_edit_field39' ),
'Lapang_Pandang_Kiri' => array( 'integrated_edit_field37' ),
'Segment_Posterior_Kanan' => array( 'integrated_edit_field36' ),
'Tekanan_Intra_Okuler_Kanan' => array( 'integrated_edit_field34' ),
'Segment_Posterior_Kiri' => array( 'integrated_edit_field35' ),
'Tekanan_Intra_Okuler_Kiri' => array( 'integrated_edit_field33' ),
'Lensa_Kanan' => array( 'integrated_edit_field32' ),
'Iris_Kanan' => array( 'integrated_edit_field30' ),
'Pupil_Kanan' => array( 'integrated_edit_field28' ),
'COA_Kanan' => array( 'integrated_edit_field26' ),
'Cornea_Kanan' => array( 'integrated_edit_field24' ),
'Conjunctiva_Kanan' => array( 'integrated_edit_field22' ),
'Lensa_Kiri' => array( 'integrated_edit_field31' ),
'Iris_Kiri' => array( 'integrated_edit_field29' ),
'Pupil_Kiri' => array( 'integrated_edit_field27' ),
'COA_Kiri' => array( 'integrated_edit_field25' ),
'Cornea_Kiri' => array( 'integrated_edit_field23' ),
'Conjunctiva_Kiri' => array( 'integrated_edit_field21' ),
'Palpebra_Kanan' => array( 'integrated_edit_field20' ),
'Gerakan_Bola_Mata_Kanan' => array( 'integrated_edit_field18' ),
'Posisi_Bola_Mata_Kanan' => array( 'integrated_edit_field16' ),
'Addisi_OS_Kanan' => array( 'integrated_edit_field14' ),
'Refraksi_OS_Kanan' => array( 'integrated_edit_field12' ),
'Visus_OS_Kanan' => array( 'integrated_edit_field10' ),
'Palpebra_Kiri' => array( 'integrated_edit_field19' ),
'Gerakan_Bola_Mata_Kiri' => array( 'integrated_edit_field17' ),
'Posisi_Bola_Mata_Kiri' => array( 'integrated_edit_field15' ),
'Addisi_OD_Kiri' => array( 'integrated_edit_field13' ),
'Refraksi_OD_Kiri' => array( 'integrated_edit_field11' ),
'Visus_OD_Kiri' => array( 'integrated_edit_field9' ),
'Riwayat_Kebiasaan' => array( 'integrated_edit_field7' ),
'Riwayat_Alergi' => array( 'integrated_edit_field5' ),
'Riwayat_Penyakit_Dahulu' => array( 'integrated_edit_field3' ),
'Keluhan_Tambahan' => array( 'integrated_edit_field1' ),
'Riwayat_Sosio_Ekonomi' => array( 'integrated_edit_field8' ),
'Riwayat_Pengobatan' => array( 'integrated_edit_field6' ),
'Riwayat_Penyakit_Keluarga' => array( 'integrated_edit_field4' ),
'Riwayat_Penyakit_Sekarang' => array( 'integrated_edit_field2' ),
'Keluhan_Utama' => array( 'integrated_edit_field' ),
'Nomor_Rm' => array( 'integrated_edit_field54' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'master_info',
'integrated_edit_field54',
'tabs',
'details_preview',
'details_preview1',
'details_preview2' ),
'section' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field7' ),
'section1' => array( 'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field17',
'integrated_edit_field19',
'integrated_edit_field10',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field16',
'integrated_edit_field18',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field23',
'integrated_edit_field25',
'integrated_edit_field27',
'integrated_edit_field29',
'integrated_edit_field31',
'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field30',
'integrated_edit_field32',
'integrated_edit_field33',
'integrated_edit_field35',
'integrated_edit_field34',
'integrated_edit_field36' ),
'section2' => array( 'integrated_edit_field37',
'integrated_edit_field39',
'integrated_edit_field41',
'integrated_edit_field43',
'integrated_edit_field45',
'integrated_edit_field47',
'integrated_edit_field49',
'integrated_edit_field51',
'integrated_edit_field38',
'integrated_edit_field40',
'integrated_edit_field42',
'integrated_edit_field44',
'integrated_edit_field46',
'integrated_edit_field48',
'integrated_edit_field50',
'integrated_edit_field52',
'integrated_edit_field53' ),
'section6' => array( 'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'master_info' => 'grid',
'integrated_edit_field54' => 'grid',
'tabs' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'details_preview2' => 'grid',
'integrated_edit_field' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field8' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field3' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field9' => 'section1',
'integrated_edit_field11' => 'section1',
'integrated_edit_field13' => 'section1',
'integrated_edit_field15' => 'section1',
'integrated_edit_field17' => 'section1',
'integrated_edit_field19' => 'section1',
'integrated_edit_field10' => 'section1',
'integrated_edit_field12' => 'section1',
'integrated_edit_field14' => 'section1',
'integrated_edit_field16' => 'section1',
'integrated_edit_field18' => 'section1',
'integrated_edit_field20' => 'section1',
'integrated_edit_field21' => 'section1',
'integrated_edit_field23' => 'section1',
'integrated_edit_field25' => 'section1',
'integrated_edit_field27' => 'section1',
'integrated_edit_field29' => 'section1',
'integrated_edit_field31' => 'section1',
'integrated_edit_field22' => 'section1',
'integrated_edit_field24' => 'section1',
'integrated_edit_field26' => 'section1',
'integrated_edit_field28' => 'section1',
'integrated_edit_field30' => 'section1',
'integrated_edit_field32' => 'section1',
'integrated_edit_field33' => 'section1',
'integrated_edit_field35' => 'section1',
'integrated_edit_field34' => 'section1',
'integrated_edit_field36' => 'section1',
'integrated_edit_field37' => 'section2',
'integrated_edit_field39' => 'section2',
'integrated_edit_field41' => 'section2',
'integrated_edit_field43' => 'section2',
'integrated_edit_field45' => 'section2',
'integrated_edit_field47' => 'section2',
'integrated_edit_field49' => 'section2',
'integrated_edit_field51' => 'section2',
'integrated_edit_field38' => 'section2',
'integrated_edit_field40' => 'section2',
'integrated_edit_field42' => 'section2',
'integrated_edit_field44' => 'section2',
'integrated_edit_field46' => 'section2',
'integrated_edit_field48' => 'section2',
'integrated_edit_field50' => 'section2',
'integrated_edit_field52' => 'section2',
'integrated_edit_field53' => 'section2',
'integrated_edit_field57' => 'section6',
'integrated_edit_field58' => 'section6',
'integrated_edit_field59' => 'section6',
'integrated_edit_field60' => 'section6' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field54' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'tabs' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'details_preview2' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field9' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field11' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field13' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field15' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field17' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field19' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field10' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field12' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field14' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field16' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field18' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field20' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field21' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field23' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field25' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field27' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field29' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field31' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field22' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field24' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field26' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field28' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field30' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field32' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field33' => array( 'location' => 'section1',
'cellId' => 'c6' ),
'integrated_edit_field35' => array( 'location' => 'section1',
'cellId' => 'c6' ),
'integrated_edit_field34' => array( 'location' => 'section1',
'cellId' => 'c7' ),
'integrated_edit_field36' => array( 'location' => 'section1',
'cellId' => 'c7' ),
'integrated_edit_field37' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field39' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field41' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field43' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field45' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field47' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field49' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field51' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'integrated_edit_field38' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field40' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field42' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field44' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field46' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field48' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field50' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field52' => array( 'location' => 'section2',
'cellId' => 'c' ),
'integrated_edit_field53' => array( 'location' => 'section2',
'cellId' => 'c2' ),
'integrated_edit_field57' => array( 'location' => 'section6',
'cellId' => 'c1' ),
'integrated_edit_field58' => array( 'location' => 'section6',
'cellId' => 'c1' ),
'integrated_edit_field59' => array( 'location' => 'section6',
'cellId' => 'c1' ),
'integrated_edit_field60' => array( 'location' => 'section6',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field60',
'integrated_edit_field59',
'integrated_edit_field58',
'integrated_edit_field57',
'integrated_edit_field53',
'integrated_edit_field52',
'integrated_edit_field50',
'integrated_edit_field48',
'integrated_edit_field46',
'integrated_edit_field44',
'integrated_edit_field42',
'integrated_edit_field40',
'integrated_edit_field38',
'integrated_edit_field51',
'integrated_edit_field49',
'integrated_edit_field47',
'integrated_edit_field45',
'integrated_edit_field43',
'integrated_edit_field41',
'integrated_edit_field39',
'integrated_edit_field37',
'integrated_edit_field36',
'integrated_edit_field34',
'integrated_edit_field35',
'integrated_edit_field33',
'integrated_edit_field32',
'integrated_edit_field30',
'integrated_edit_field28',
'integrated_edit_field26',
'integrated_edit_field24',
'integrated_edit_field22',
'integrated_edit_field31',
'integrated_edit_field29',
'integrated_edit_field27',
'integrated_edit_field25',
'integrated_edit_field23',
'integrated_edit_field21',
'integrated_edit_field20',
'integrated_edit_field18',
'integrated_edit_field16',
'integrated_edit_field14',
'integrated_edit_field12',
'integrated_edit_field10',
'integrated_edit_field19',
'integrated_edit_field17',
'integrated_edit_field15',
'integrated_edit_field13',
'integrated_edit_field11',
'integrated_edit_field9',
'integrated_edit_field7',
'integrated_edit_field5',
'integrated_edit_field3',
'integrated_edit_field1',
'integrated_edit_field8',
'integrated_edit_field6',
'integrated_edit_field4',
'integrated_edit_field2',
'integrated_edit_field',
'integrated_edit_field54' ),
'tabs' => array( 'tabs' ),
'view_pdf' => array( 'view_pdf' ),
'details_preview' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'master_info' => array( 'master_info' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'integrated_edit_field54',
'tabs',
'details_preview',
'details_preview1',
'details_preview2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 1 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field17',
'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field16',
'integrated_edit_field18',
'integrated_edit_field20' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field21',
'integrated_edit_field23',
'integrated_edit_field25',
'integrated_edit_field27',
'integrated_edit_field29',
'integrated_edit_field31' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field30',
'integrated_edit_field32' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field33',
'integrated_edit_field35' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field34',
'integrated_edit_field36' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field37',
'integrated_edit_field39',
'integrated_edit_field41',
'integrated_edit_field43',
'integrated_edit_field45',
'integrated_edit_field47',
'integrated_edit_field49',
'integrated_edit_field51' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field38',
'integrated_edit_field40',
'integrated_edit_field42',
'integrated_edit_field44',
'integrated_edit_field46',
'integrated_edit_field48',
'integrated_edit_field50',
'integrated_edit_field52' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field53' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 2 ),
'section6' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'master_info',
'integrated_edit_field54',
'tabs',
'details_preview',
'details_preview1',
'details_preview2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field7' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 2,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field13',
'integrated_edit_field15',
'integrated_edit_field17',
'integrated_edit_field19' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10',
'integrated_edit_field12',
'integrated_edit_field14',
'integrated_edit_field16',
'integrated_edit_field18',
'integrated_edit_field20' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c1',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field21',
'integrated_edit_field23',
'integrated_edit_field25',
'integrated_edit_field27',
'integrated_edit_field29',
'integrated_edit_field31' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field22',
'integrated_edit_field24',
'integrated_edit_field26',
'integrated_edit_field28',
'integrated_edit_field30',
'integrated_edit_field32' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field33',
'integrated_edit_field35' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field34',
'integrated_edit_field36' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 2,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 3 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field37',
'integrated_edit_field39',
'integrated_edit_field41',
'integrated_edit_field43',
'integrated_edit_field45',
'integrated_edit_field47',
'integrated_edit_field49',
'integrated_edit_field51' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field38',
'integrated_edit_field40',
'integrated_edit_field42',
'integrated_edit_field44',
'integrated_edit_field46',
'integrated_edit_field48',
'integrated_edit_field50',
'integrated_edit_field52' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field53' ) ),
'c4' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 2,
'inlineLabels' => false,
'separateLabels' => false ),
'section6' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field57',
'integrated_edit_field58',
'integrated_edit_field59',
'integrated_edit_field60' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit',
'view_pdf' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field60' => array( 'field' => 'Komplikasi',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field59' => array( 'field' => 'Prognosis',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field58' => array( 'field' => 'Terapi',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field57' => array( 'field' => 'Diagnosa_Diagnosa_Banding',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field53' => array( 'field' => 'Penunjang_Lain',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field52' => array( 'field' => 'Cover_Uncover_Test_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field50' => array( 'field' => 'Cover_Test_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field48' => array( 'field' => 'Hirschberg_Test_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field46' => array( 'field' => 'Schirmer_Test_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field44' => array( 'field' => 'Sensibilitas_Kornea_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field42' => array( 'field' => 'Fluorescein_Test_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field40' => array( 'field' => 'Ishihara_Test_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field38' => array( 'field' => 'Lapang_Pandang_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field51' => array( 'field' => 'Cover_Uncover_Test_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field49' => array( 'field' => 'Cover_Test_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field47' => array( 'field' => 'Hirschberg_Test_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field45' => array( 'field' => 'Schirmer_Test_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field43' => array( 'field' => 'Sensibilitas_Kornea_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field41' => array( 'field' => 'Fluorescein_Tes_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field39' => array( 'field' => 'Ishihara_Test_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field37' => array( 'field' => 'Lapang_Pandang_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field36' => array( 'field' => 'Segment_Posterior_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field34' => array( 'field' => 'Tekanan_Intra_Okuler_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field35' => array( 'field' => 'Segment_Posterior_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field33' => array( 'field' => 'Tekanan_Intra_Okuler_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field32' => array( 'field' => 'Lensa_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field30' => array( 'field' => 'Iris_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field28' => array( 'field' => 'Pupil_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field26' => array( 'field' => 'COA_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field24' => array( 'field' => 'Cornea_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field22' => array( 'field' => 'Conjunctiva_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field31' => array( 'field' => 'Lensa_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field29' => array( 'field' => 'Iris_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field27' => array( 'field' => 'Pupil_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field25' => array( 'field' => 'COA_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field23' => array( 'field' => 'Cornea_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field21' => array( 'field' => 'Conjunctiva_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field20' => array( 'field' => 'Palpebra_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'Gerakan_Bola_Mata_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'Posisi_Bola_Mata_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'Addisi_OS_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'Refraksi_OS_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'Visus_OS_Kanan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'Palpebra_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field17' => array( 'field' => 'Gerakan_Bola_Mata_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'Posisi_Bola_Mata_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'Addisi_OD_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'Refraksi_OD_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'Visus_OD_Kiri',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'Riwayat_Kebiasaan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'Riwayat_Alergi',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'Riwayat_Penyakit_Dahulu',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'Keluhan_Tambahan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'Riwayat_Sosio_Ekonomi',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'Riwayat_Pengobatan',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'Riwayat_Penyakit_Keluarga',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'Riwayat_Penyakit_Sekarang',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field' => array( 'field' => 'Keluhan_Utama',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Anamnesa',
'type' => 0 ),
array( 'text' => 'Pemeriksaan Mata',
'type' => 0 ),
array( 'text' => 'Pemeriksaan Lain',
'type' => 0 ),
array( 'text' => 'Diagnosa Banding',
'type' => 0 ) ),
'locations' => array( 'section',
'section1',
'section2',
'section6' ) ),
'view_pdf' => array( 'type' => 'view_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'daftar_masalah',
'items' => array(  ),
'popup' => false ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'catatan_kemajuan',
'items' => array(  ),
'popup' => false ),
'details_preview2' => array( 'type' => 'details_preview',
'table' => 'rencana_permulaan',
'items' => array(  ),
'popup' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'identitas_pasien' => 'true' ) ),
'integrated_edit_field54' => array( 'field' => 'Nomor_Rm',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>