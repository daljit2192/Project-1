<?php 
	require_once('../controllers/users.php'); 
	$userObj = new User;
	$recepies = $userObj->getRecepies();
	

	
?>