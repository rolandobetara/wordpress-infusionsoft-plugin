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
					     '_Lbs' => $arr['Lbs']
					    );

		$conID = $app->dsAdd("Contact", $arrData);

		if (!is_wp_error($conID )):
	   		 echo 'Successfully Added!';
		else :
	    	echo 'ERROR!: ' . $conID->get_error_message();
		endif;
	else: 
	    echo "Connection Failed";

	endif;

?>

