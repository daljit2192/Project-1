<?php 
include 'connect.php';
class User extends Connect{

	public $recepie = array('data' =>array() , 'error'=> '','success'=>'', 'status'=>false );
	public $recepies = array('data' =>array() , 'error'=> '', 'success'=>'', 'status'=>false );

	function addUser($user_data){
		// echo "contorller called";die;

		if(strlen($user_data["first_name"]) != 0 && strlen($user_data["last_name"]) != 0 && strlen($user_data["email"]) != 0 && strlen($user_data["password"]) != 0 ){
			// echo strlen($user_data["email"])." hhhhh"; die;
			//query to insert data
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
			// echo $sql; die;
	        $result = $this->conn->query($sql); 
	        $row = $result->fetch_assoc();

	        if(mysqli_affected_rows($this->conn)!== 0){
		        array_push($this->user['data'],$row);
		        $this->user['status'] = true;
	        } else {
	        	$this->user['error'] = "Credentials didn't match, please try again.";
	        }
		} else{
			$this->user['error'] = "Please fill in credentials to login.";
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
		// echo $sql; die;
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                array_push($this->recepies['data'],$row);
            }

		} 
		 return $this->recepies;		
	} 
	
}
?>