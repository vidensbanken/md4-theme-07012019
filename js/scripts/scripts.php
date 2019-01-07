<?php

add_action('wp_ajax_sendsms', 'sendsms');
function sendsms() {
	$nummer = $_POST['nummer'];
	$tekst = $_POST['tekst'];
	$res = wp_remote_get( 'https://suresms.com/Script/GlobalSendSMS.aspx?login=Info-Desk&password=storpap&to=+45' . $nummer . '&from=Vidensbank&Text=' . $tekst );	
	wp_die($res);
}

?>