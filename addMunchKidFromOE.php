<?php
require_once('Includes/db.php');
session_start();
$loggedIn = false;
if (array_key_exists("user", $_SESSION)) {
    $loggedIn = true;
    // $f_name_parent = munchKitDB::getInstance()->get_user_name_by_email($_SESSION['user']);
    // echo $f_name_parent;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$allergies= '';
		foreach($_POST['allergies'] as $allergy){
		 	$allergies .= $allergy. ',';
		}
		munchKitDB::getInstance()->insert_munchkid($_POST['userID'], $_POST['f_name'], $_POST['dietType'], $allergies); 
		
		$dest = 'Location: '. $_POST['refURL'];
		header($dest);
        exit;	
}


?>