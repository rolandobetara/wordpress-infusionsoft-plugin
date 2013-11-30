<?php

	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	require_once(dirname(dirname(__FILE__)) . "/src/isdk.php");
	
	$app = new iSDK;
	$arr = $_POST;

	if ($app->cfgCon("connectionName")):

		$delID = $arr['id'];
		$delete = $app->dsDelete('Contact', $delID);
		
		echo $delete;
	else: 
	    echo "Connection Failed";
	endif;

?>