<?php 
	require_once('../classes/user.php'); 
	$userObj = new User;
	$users = $userObj->getUsers();

	$user = array();
	if (isset($_POST['login'])){
		$userData = array('email'=>$_POST["email"],'password'=>md5($_POST["password"]));

	    $user = $userObj->loginAdmin($userData);
	    $_SESSION["user"] = $user["data"][0];
	    // echo "<pre>"; print_r($_SESSION["user"]["first_name"]);die;
	}
?>