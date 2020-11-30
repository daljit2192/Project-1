<?php 
include 'connect.php';
class User extends Connect{

	public $recepie = array('data' =>array() , 'error'=> '','success'=>'', 'status'=>false );
	public $user = array('data' =>array() , 'error'=> '','success'=>'', 'status'=>false );
	public $recepies = array('data' =>array() , 'error'=> '', 'success'=>'', 'status'=>false );
	public $foodRecepies = array('data' =>array() , 'error'=> '', 'success'=>'', 'status'=>false );
	public $food_types = array('data' =>array() , 'error'=> '', 'success'=>'', 'status'=>false );
	public $sldierImages = array('data' =>array() , 'error'=> '', 'success'=>'', 'status'=>false );

	function addUser($user_data){
		if(strlen($user_data["first_name"]) != 0 && strlen($user_data["last_name"]) != 0 && strlen($user_data["email"]) != 0 && strlen($user_data["password"]) != 0 ){
			if($this->checkExistingUser($user_data)){
				if($user_data["password"] == $user_data["confirm_password"]){
					$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('".$user_data["first_name"]."','".$user_data["last_name"]."','".$user_data["email"]."','".$user_data["password"]."');";
			        if ($this->conn->query($sql) === TRUE) {
			            $sql = "SELECT * FROM users WHERE id = ".$this->conn->insert_id;
			            $result = $this->conn->query($sql); 
			            $row = $result->fetch_assoc();
			            array_push($this->user['data'],$row);
			            $this->user['status'] = true;
			            $this->user['success'] = "User added sucessfully";

			        } else {
			        	$this->user['status'] = false;
			            $this->user['error'] = "Error: " . $sql . "<br>" . $this->conn->error;
			        }
			    } else {
			    	$this->user['status'] = false;
			        $this->user['error'] = "Please match password and confirm password.";	
			    }	
			} else {
				$this->user['status'] = false;
		        $this->user['error'] = "Email already exists, please choose another.";
			}
		} else {
			$this->user['error'] = "Please provide required field.";
		}
        return $this->user;
	}

	function loginUser($user_data){
		if($user_data["email"]!=="" || $user_data["password"]!==""){
			$sql = "SELECT * FROM users WHERE email = '".$user_data["email"]."' and password = '".$user_data["password"]."';";
	        $result = $this->conn->query($sql); 
	        $row = $result->fetch_assoc();

	        if(mysqli_affected_rows($this->conn)!== 0){
		        array_push($this->user['data'],$row);
		        $this->user['status'] = true;
	        } else {
	        	$this->user['error'] = "Credentials didn't match, please try again.";
	        	$this->user['status'] = false;
	        }
		} else{
			$this->user['error'] = "Please fill in credentials to login.";
			$this->user['status'] = false;
		}
		return $this->user;
	}

	function checkExistingUser($user_data){
		$sql = "SELECT * FROM users WHERE email = '".$user_data["email"]."';";
        $result = $this->conn->query($sql); 
        $row = $result->fetch_assoc();
        if(mysqli_affected_rows($this->conn)!== 0){
	        return false;
        } else {
        	return true;
        }		
	} 

	function getRecepies(){
		$sql = "SELECT * FROM recepie WHERE user_id = '".$_SESSION["user"]["id"]."';";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                array_push($this->recepies['data'],$row);
            }
		} 
		return $this->recepies;		
	}

	function getFoodRecepies($foodTypeId){
		$sql = "SELECT * FROM recepie WHERE food_type_id = '".$foodTypeId."';";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                array_push($this->foodRecepies['data'],$row);
            }
		} 
		return $this->foodRecepies;		
	}

	function addRecepie($recepieData){
		if(strlen($recepieData["name"]) != 0 && strlen($recepieData["description"]) != 0 && strlen($recepieData["food_type_id"]) != 0 ){
			if($recepieData["image_name"]['size'] != 0 ){
				$imageData = $this->uploadRecepieImage($recepieData); 
	            if($imageData['status']){
	            	$sql = "INSERT INTO recepie (name, description, user_id, image_name, image_path, food_type_id) VALUES ('".$recepieData["name"]."','".$recepieData["description"]."','".$recepieData["user_id"]."','".$recepieData["image_name"]['name']."','".$imageData["image_path"]."','".$recepieData["food_type_id"]."')";
			        if ($this->conn->query($sql) === TRUE) {
			            $sql = "SELECT * FROM recepie WHERE id = ".$this->conn->insert_id;
			            $result = $this->conn->query($sql); 
			            $row = $result->fetch_assoc();
			            array_push($this->recepie['data'],$row);
			            $this->recepie['status'] = true;
			            $this->recepie['success'] = "Recepie added sucessfully";
			        } else {
			        	$this->recepie['status'] = false;
			            $this->recepie['error'] = "Error: " . $sql . "<br>" . $this->conn->error;
			        }
	            } else {
	            }
    		}
		} else {
			$this->recepie['error'] = "Please provide required field.";
		}
        return $this->recepie;
	}

	function uploadRecepieImage($recepieData){
		$target_path = '../images/recepies/';
		$target_file = $target_path . basename($recepieData["image_name"]["name"]);
		if (!file_exists($target_path)) {
            mkdir($target_path, 777, true);
        } 
        if (move_uploaded_file($recepieData["image_name"]["tmp_name"], $target_file)){
			return array('image_path'=>$target_path, 'status'=>true);
	    } else {
	        return array('image_path'=>$target_path, 'status'=>false);
	    }
	}

	function getFoodTypes(){
		$sql = "SELECT * FROM food_type;";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                array_push($this->food_types['data'],$row);
            }
		}
		return $this->food_types;		
	}
	
	function getSliderImages(){
		$sql = "SELECT * FROM slider;";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                array_push($this->sldierImages['data'],$row);
            }
		}
		return $this->sldierImages;		
	}

	function deleteRecepie($recepieID){
		$sql = "delete from recepie where id=".$recepieID.";";
        if ($this->conn->query($sql) === TRUE) {
            $this->countries['status'] = true;
        } else {
            $this->countries['status'] = false;
        }
	} 

	function getSingleRecepie($id){
		$sql = "SELECT * FROM recepie WHERE id = ".$id;
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;	
	}
	
	function updateRating($id, $rating){
		$sql = "UPDATE recepie set rating = ".$rating." WHERE id = ".$id;
        $result = $this->conn->query($sql);
	}

	function updateRecepie($recepieData){

		if(strlen($recepieData["name"]) != 0 && strlen($recepieData["description"]) != 0 && strlen($recepieData["food_type_id"]) != 0 ){
			// $imageData = array();
			if($recepieData["image_name"]["error"] == 0){
	            $imageData = $this->uploadRecepieImage($recepieData); 
			}
			$sql = "update recepie set name = '".$recepieData['name']."', food_type_id = '".$recepieData['food_type_id']."', description = '".$recepieData['description']."', user_id = ".$recepieData['user_id'].", image_name='".$recepieData["image_name"]['name']."', image_path = '".$imageData['image_path']."' where id = ".$recepieData['id'].";";
	        if ($this->conn->query($sql) === TRUE) {
	        	
	            $this->states['success'] = "Recepie Updated successfully";

	        } else {
	            $this->states['error'] = "Error: " . $sql . "<br>" . $this->conn->error;
	        }
		} else {
			$this->states['error'] = "Please provide required fields";
		}
        return $this->states;
	}
	
}
?>