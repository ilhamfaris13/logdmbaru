<?php
			$optionsArray = array( 'master' => array( 'identitas_pasien' => array( 'preview' => true ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'od_spheris',
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
'fieldItems' => array( 'od_spheris' => array( 'integrated_edit_field' ),
'od_cylindris' => array( 'integrated_edit_field1' ),
'od_axis' => array( 'integrated_edit_field2' ),
'addisi_od' => array( 'integrated_edit_field3' ),
'os_spheris' => array( 'integrated_edit_field4' ),
'os_cylindris' => array( 'integrated_edit_field5' ),
'os_axis' => array( 'integrated_edit_field6' ),
'addis_os' => array( 'integrated_edit_field7' ),
'jarak_pupil' => array( 'integrated_edit_field8' ),
'id_pasien' => array( 'integrated_edit_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'master_info',
'section',
'integrated_edit_field9' ),
'section' => array( 'integrated_edit_field2',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field3',
'text',
'text2',
'integrated_edit_field7',
'integrated_edit_field8',
'text1',
'text3' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'master_info' => 'grid',
'section' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field2' => 'section',
'integrated_edit_field' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field3' => 'section',
'text' => 'section',
'text2' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field8' => 'section',
'text1' => 'section',
'text3' => 'section' ),
'itemLocations' => array( 'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'section' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c5' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c6' ),
'text' => array( 'location' => 'section',
'cellId' => 'c7' ),
'text2' => array( 'location' => 'section',
'cellId' => 'c8' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c9' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c10' ),
'text1' => array( 'location' => 'section',
'cellId' => 'c11' ),
'text3' => array( 'location' => 'section',
'cellId' => 'c12' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9' ),
'master_info' => array( 'master_info' ),
'section' => array( 'section' ),
'text' => array( 'text',
'text1',
'text2',
'text3' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info',
'section',
'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c7' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'text' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'text2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1,
2,
3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'text1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'text3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1,
2,
3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 1,
2,
3 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 5 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel' ),
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
'section',
'integrated_edit_field9' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c7' ),
array( 'cell' => 'c',
'colspan' => 1,
'rowspan' => 1 ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c1' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c6',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c11' ),
array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c12' ),
array( 'cell' => 'c9',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c13' ),
array( 'cell' => 'c10',
'colspan' => 3 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'text' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'text2' ) ),
'c9' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c11' => array( 'model' => 'c1',
'items' => array( 'text1' ) ),
'c12' => array( 'model' => 'c1',
'items' => array( 'text3' ) ),
'c13' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 4,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'integrated_edit_field' => array( 'field' => 'od_spheris',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'od_spheris',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field1' => array( 'field' => 'od_cylindris',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'od_cylindris',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field2' => array( 'field' => 'od_axis',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'od_axis',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field3' => array( 'field' => 'addisi_od',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'addisi_od',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field4' => array( 'field' => 'os_spheris',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'os_spheris',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field5' => array( 'field' => 'os_cylindris',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'os_cylindris',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field6' => array( 'field' => 'os_axis',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'os_axis',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field7' => array( 'field' => 'addis_os',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'addis_os',
'table' => 'resep_kacamata',
'type' => 3 ) ),
'integrated_edit_field8' => array( 'field' => 'jarak_pupil',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'id_pasien',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'identitas_pasien' => 'true' ) ),
'section' => array( 'type' => 'section',
'title' => array( 'text' => '',
'type' => 0 ),
'location' => 'section' ),
'text' => array( 'type' => 'text',
'label' => array( 'text' => 'OD',
'type' => 0 ),
'editedByRte' => false,
'bold' => true,
'font-size' => '20px' ),
'text1' => array( 'type' => 'text',
'label' => array( 'text' => 'OS',
'type' => 0 ),
'editedByRte' => false,
'bold' => true,
'font-size' => '20px' ),
'text2' => array( 'type' => 'text',
'label' => array( 'text' => 'ADDISI',
'type' => 0 ),
'editedByRte' => false,
'bold' => true,
'font-size' => '20px' ),
'text3' => array( 'type' => 'text',
'label' => array( 'text' => 'ADDISI',
'type' => 0 ),
'editedByRte' => false,
'bold' => true,
'font-size' => '20px' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>