<?php 
    include './controllers/users.php'; 

    $userObj = new User;
    $foodtypes = $userObj->getFoodTypes();
    $sliderImages = $userObj->getSliderImages();
    // echo "<pre>"; print_r($sliderImages); die;
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
        if($user['status'] == true){
            header("Location: login.php");
        } 
    }

    if (isset($_POST['login'])){
        $userData = array('email'=>$_POST["email"], 'password'=>md5($_POST["password"]));
        $user = $userObj->loginUser($userData);
        if($user['status'] == true){
            $_SESSION["user"] = $user['data'][0];
            header("Location: index.php");
        } 
    }

    if (isset($_GET['foodtypeid'])){
        
        $foodRecepies = $userObj->getFoodRecepies($_GET['foodtypeid']);

    }

    if (isset($_GET['recid'])){
        
        $foodRecepie = $userObj->getSingleRecepie($_GET['recid']);
         
    }

    if (isset($_GET['recid']) && isset($_GET['rating'])){
        
        // echo json_encode(array("id"=>$_GET['recid'], "rating"=>$_GET['rating'])); 
        $userObj->updateRating($_GET['recid'], $_GET['rating']);
         
    }

    
?>