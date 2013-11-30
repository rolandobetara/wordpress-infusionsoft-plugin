<?php

	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	require_once(dirname(dirname(__FILE__)) . "/src/isdk.php");
	
	$app = new iSDK;
	$arr = $_POST;

	if ($app->cfgCon("connectionName")):

		$returnFields = array('Id','FirstName','LastName','Email', '_Lbstolose', '_Lbs');
		$query = array('FirstName' => $arr['in_search']);
		$contacts = $app->dsQuery("Contact",10, 0, $query, $returnFields);
		$json = json_encode($contacts);
		echo $json;
		
	else: 
	    echo "Connection Failed";
	endif;

?>