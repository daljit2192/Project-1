<?php 
include 'connect.php';
class Tiffen extends Connect{

	public $user = array('data' =>array() , 'error'=> '', 'success'=> '' );

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
	}
?>