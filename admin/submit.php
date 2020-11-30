<?php 
	require_once('../controllers/users.php'); 
	$recepie = array();
	$userObj = new User;

	$recepies = $userObj->getRecepies();
	$foodTypes = $userObj->getFoodTypes();
	// echo "<pre>"; print_r($foodTypes["data"]); die;
	if (isset($_POST['submit_recepie'])){
        $recepieData = array('name'=>$_POST["name"], 'description'=>$_POST["description"], 'user_id'=>$_SESSION["user"]["id"], 'image_name'=>$_FILES["recepie_image"], 'food_type_id'=>$_POST["food_type_id"]);

        $recepie = $userObj->addRecepie($recepieData);
        if($recepie["status"]){
        	header( "refresh:1;url=receipies.php" );
        }
    }

    if (isset($_GET['rec'])){
        $recepie = $userObj->getSingleRecepie($_GET['rec']);
    }

    if(isset($_POST["update_recepie"])){
        if($_FILES['recepie_image']['error']==0){
        	$path =  $_POST["recepie_image_path_hidden"].$_POST["recepie_image_name_hidden"];
        	unlink($path);
        }
        $recepie = array();
        $recepieData = array('id'=>$_POST['id'],'name'=>$_POST['name'], 'description'=>$_POST["description"], 'user_id'=>$_SESSION['user']['id'],'food_type_id'=> $_POST["food_type_id"], 'image_name'=>$_FILES['recepie_image']); 

        $userObj->updateRecepie($recepieData);
        header("Location:editReceipie.php?rec=".$_POST["id"]);
    }

    if(isset($_POST["delete_recepie"])){
        $userObj->deleteRecepie($_POST["recepie_id_hidden"]);
        header( "refresh:1;url=receipies.php" );
    }
?>