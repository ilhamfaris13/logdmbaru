<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'id',
'od_spheris',
'od_cylindris',
'od_axis',
'addisi_od',
'os_spheris',
'os_cylindris',
'os_axis',
'addis_os',
'jarak_pupil',
'id_pasien' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id' => array( 'import_field' ),
'od_spheris' => array( 'import_field1' ),
'od_cylindris' => array( 'import_field2' ),
'od_axis' => array( 'import_field3' ),
'addisi_od' => array( 'import_field4' ),
'os_spheris' => array( 'import_field5' ),
'os_cylindris' => array( 'import_field6' ),
'os_axis' => array( 'import_field7' ),
'addis_os' => array( 'import_field8' ),
'jarak_pupil' => array( 'import_field9' ),
'id_pasien' => array( 'import_field10' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10' ) ),
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
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'od_spheris',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'od_cylindris',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'od_axis',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'addisi_od',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'os_spheris',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'os_cylindris',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'os_axis',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'addis_os',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'jarak_pupil',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'id_pasien',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>