<?php
require_once('Includes/db.php');
session_start();
$loggedIn = false;
if (array_key_exists("user", $_SESSION)) {
    $loggedIn = true;   
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$i = 0;
	$num = (int)$_POST['numOrders'];
	
	while($i <= $num){

		if(null == munchKitDB::getInstance()->get_order_by_idMunchKid($_POST['idMunchKid_'.$i])) {
			munchKitDB::getInstance()->insert_order($_POST['idMunchKid_'.$i], $_POST['mealPlan_'.$i]); 
			// echo '<script type="text/javascript">alert("' . 'INSERTED' . '")</script>';
		}
		else{
			munchKitDB::getInstance()->update_order($_POST['idMunchKid_'.$i], $_POST['mealPlan_'.$i]);
			// echo '<script type="text/javascript">alert("' . 'UPDATED' . '")</script>';
		}
		$i++;	
	}
 		
}
header('Location: confirmation.php');
exit;

?>
