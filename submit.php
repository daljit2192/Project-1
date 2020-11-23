<?php 
	include 'classes/user.php'; 
	$userObj = new User;
	    
	if (isset($_POST['register'])){
		$userData = array('first_name'=>$_POST["first_name"], 'last_name'=>$_POST["last_name"], 'email'=>$_POST["email"], 'address'=>$_POST["address"], 'postal_code'=>$_POST["postal_code"], 'phone_number'=>$_POST["phone_number"], 'user_type'=>2, 'password'=>md5($_POST["password"]));
	    $user = $userObj->addUser($userData);
	    // echo "<pre>"; print_r($user); die;
	}
?>