<?php
			$optionsArray = array( 'totals' => array( 'Id_Rencana_Permulaan' => array( 'totalsType' => '' ),
'Daftar_Permasalahan' => array( 'totalsType' => '' ),
'Pemeriksaan_Diagnostik' => array( 'totalsType' => '' ),
'Monitoring' => array( 'totalsType' => '' ),
'Terapi' => array( 'totalsType' => '' ),
'Edukasi' => array( 'totalsType' => '' ),
'id_mata' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Id_Rencana_Permulaan',
'Daftar_Permasalahan',
'Pemeriksaan_Diagnostik',
'Monitoring',
'Terapi',
'Edukasi',
'id_mata' ),
'exportFields' => array( 'Id_Rencana_Permulaan',
'Daftar_Permasalahan',
'Pemeriksaan_Diagnostik',
'Monitoring',
'Terapi',
'Edukasi',
'id_mata' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Id_Rencana_Permulaan' => array( 'export_field' ),
'Daftar_Permasalahan' => array( 'export_field1' ),
'Pemeriksaan_Diagnostik' => array( 'export_field2' ),
'Monitoring' => array( 'export_field3' ),
'Terapi' => array( 'export_field4' ),
'Edukasi' => array( 'export_field5' ),
'id_mata' => array( 'export_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'Id_Rencana_Permulaan',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Daftar_Permasalahan',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'Pemeriksaan_Diagnostik',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'Monitoring',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'Terapi',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'Edukasi',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'id_mata',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>