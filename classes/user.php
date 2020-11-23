<?php 
include './connect.php';
class User extends Connect{

	public $user = array('data' =>array() , 'error'=> '', 'success'=> '' );
	public $users = array('data' =>array() , 'error'=> '', 'success'=> '' );

	function addUser($user_data){

		if($user_data["first_name"]!== "" || $user_data["last_name"]!== "" || $user_data["email"]!== "" || $user_data["address"]!== "" || $user_data["postal_code"]!== "" || $user_data["phone_number"]!== "" ){
			//query to insert data
			$sql = "INSERT INTO users (first_name, last_name, email, address, postal_code, phone_number, password, user_type) VALUES ('".$user_data["first_name"]."','".$user_data["last_name"]."','".$user_data["email"]."','".$user_data["address"]."','".$user_data["postal_code"]."','".$user_data["phone_number"]."','".$user_data["password"]."',".$user_data["user_type"].");";
			
	        if ($this->conn->query($sql) === TRUE) {
	            $sql = "SELECT * FROM users WHERE id = ".$this->conn->insert_id;
	            $result = $this->conn->query($sql); 
	            $row = $result->fetch_assoc();
	            array_push($this->user['data'],$row);
	            $this->countries['success'] = "User added sucessfully";

	        } else {
	            $this->countries['error'] = "Error: " . $sql . "<br>" . $this->conn->error;
	        }
		} else {
			$this->user['error'] = "Please provide required field.";
		}
        return $this->user;
	}

	function loginAdmin($user_data){
		
		if($user_data["email"]!=="" || $user_data["password"]!==""){
			$sql = "SELECT * FROM users WHERE email = '".$user_data["email"]."' and password = '".$user_data["password"]."';";
	        $result = $this->conn->query($sql); 
	        $row = $result->fetch_assoc();

	        if(mysqli_affected_rows($this->conn)!== 0){
		        array_push($this->user['data'],$row);
		        $this->user['success'] = "Login suucessfull. ";
	        } else {
	        	$this->user['error'] = "Credentials didn't match, please try again.";
	        }
		} else{
			$this->user['error'] = "Please fill in credentials to login.";
		}
		return $this->user;
	} 

	function getUsers(){
	
		$sql = "SELECT * FROM users where user_type = 2;";
        $result = $this->conn->query($sql); 
        
		if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {
    			array_push($this->users['data'],$row);
  			}
        } else {
        	$this->users['error'] = "No user found";
        }
		return $this->users;
	}
}

	
?>