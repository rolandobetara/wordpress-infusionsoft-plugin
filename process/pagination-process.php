<?php

	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	require_once(dirname(dirname(__FILE__)) . "/src/isdk.php");
	
	$app = new iSDK;
	$arr = $_POST;
	$page = $arr['pagedata'] - 1;

	if ($app->cfgCon("connectionName")):

		$returnFields = array('Id','FirstName','LastName','Email', '_Lbstolose', '_Lbs');
		$query = array('Id' => '%');
		$contacts = $app->dsQueryOrderBy("Contact", 20, $page, $query, $returnFields, 'Id');
		
		foreach ($contacts as $key => $value) {
	    ?>
            <tr>
              <th><?php echo $value['Id']; ?></th>
              <th><?php echo $value['FirstName']; ?></th>
              <th><?php echo $value['LastName']; ?></th>
              <th><?php echo $value['Email']; ?></th>
              <th><?php echo $value['_Lbstolose']; ?></th>
              <th><?php echo $value['_Lbs']; ?></th>
            </tr>
        <?php  
        }
	else: 
	    echo "Connection Failed";
	endif;

?>