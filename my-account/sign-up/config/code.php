<?php include '../../../config/constants.php';?>

<?php
$action=$_POST['action'];

switch ($action){
	case 'password_reset_successful':
		$page=$action;
		require_once('page-content.php');
	break;
}
?>

