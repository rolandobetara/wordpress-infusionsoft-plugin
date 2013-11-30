<?php

	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	require_once(dirname(dirname(__FILE__)) . "/src/isdk.php");
	
	$app = new iSDK;
	$arr = $_POST;

	if ($app->cfgCon("connectionName")):
		$arrData = array('FirstName' => $arr['fname'],
					 'LastName'  => $arr['lname'],
					 'Email'     => $arr['email'],
					 '_Lbstolose'=> $arr['Lbstolose'],
					 '_Lbs' 	 => $arr['Lbs']
					);
		$ID = $arr['id'];
		$update = $app->dsUpdate("Contact", $ID, $arrData);
		$json = json_encode($update);
		echo $json;
	else: 
	    echo "Connection Failed";
	endif;

?>