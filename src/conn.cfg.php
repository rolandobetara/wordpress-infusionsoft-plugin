<?php

	$options = get_option("api_setting");	
	$appsname = $options['appsname'];
	$api_key = $options['api_key'];
	
	$connInfo = array('connectionName:' . $appsname . ':i:' . $api_key . ':This is the connection for ' . $appsname . '.infusionsoft.com');

?>