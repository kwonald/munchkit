<?php
require_once('Includes/db.php');
session_start();
$loggedIn = false;
if (array_key_exists("user", $_SESSION)) {
    $loggedIn = true;   
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$i = 1;
	$num = (int)$_POST['numOrders'];
	while($i <= $num){
		// THIS HAS TO BE UPDATED TO REFLECT HOW MANY WEEKS, $_POST['PERIOD_$I'] WILL GIVE THE VALUES OF WEEKS. THIS MUST BE DONE IN DB.PHP AND IN THIS FILE AS WELL
		if($_POST['period_'.$i] != NULL){
			munchKitDB::getInstance()->suspend_order($_POST['idMunchKid_'.$i]);
		}
		
		$i++;	
	}
 		
}
header('Location: profile-page.php');
exit;


?>