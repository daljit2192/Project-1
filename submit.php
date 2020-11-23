<?php 
    include './controllers/users.php'; 
    $userObj = new User;
    $user = array();        
    if (isset($_POST['signup'])){
        $userData = array(
            'first_name'=>$_POST["first_name"], 
            'last_name'=>$_POST["last_name"], 
            'email'=>$_POST["email"], 
            'password'=>md5($_POST["password"]), 
            'confirm_password'=>md5($_POST["confirm_password"])
            );
        $user = $userObj->addUser($userData);
        // echo "<pre>"; print_r($user); die;
        if($user['status'] == true){
            header("Location: login.php");
        } 
    }

    if (isset($_POST['login'])){
        $userData = array('email'=>$_POST["email"], 'password'=>md5($_POST["password"]));
        $user = $userObj->loginUser($userData);
        
            $_SESSION["user"] = $user['data'][0];
        // if($user['status'] == true){
        //     // echo "<pre>"; print_r($_SESSION["loggedInUser"]); die;
        //     // header("Location: index.php");
        // } else {
        //     // echo $user['error'];
        // }
    }
?>