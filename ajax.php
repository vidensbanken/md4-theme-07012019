<?php

add_action( 'wp_ajax_hentWidgetNavn', 'hentWidgetNavn' );
function hentWidgetNavn($afdeling) {
	$svar = [];
	$sidebar = get_option('sidebars_widgets');
	$svar['venstre'] = $sidebar['widget_area_venstre'];
	$svar['hoejre'] = $sidebar['widget_area_hoejre'];
	$svar = json_encode($svar);
	wp_die($svar);
}

add_action( 'wp_ajax_opdaterSidebar', 'opdaterSidebar' );
function opdaterSidebar($afdeling) {
	$venstre = $_POST['venstre'];
	$hoejre = $_POST['hoejre'];
	$sidebar = [];
	foreach ($venstre as $key => $value) {
		$sidebar['widget_area_venstre'][$key] = $value;
	}

	foreach ($hoejre as $key => $value) {
		$sidebar['widget_area_hoejre'][$key] = $value;
	}


	update_option('sidebars_widgets', $sidebar);
	$svar = json_encode($sidebar);
	wp_die($svar);
}

?>
