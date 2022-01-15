<?php 
require_once "databasehelper.php";
$con = OpenCon();

	//The injectioncode:
	//thief'; INSERT INTO userCredentials (userName, loginpassword) VALUES ('thief','sesam'); SELECT * FROM userCredentials WHERE username = 'thief

    $username = $_POST['username'];
    $password = $_POST['password'];
	
	$sql = "SELECT * FROM userCredentials WHERE username = '{$username}'";
	$sql2 ="INSERT INTO userCredentials (userName, loginpassword) VALUES ('thief','sesam');";
	//if(strlen($username)<15){
	
	var_dump($sql);

	$result = $con->query($sql);
	//}else{
		//$errorMessage = "Username war ungültig<br>";echo($errorMessage);
	//}
	
	
/*	//useless code for testing:
	if ($con->query($sql2) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $con->error;
}
	*/
	
	
	
	//validate username:
	if (!$result){$errorMessage = "Username war ungültig<br>";echo($errorMessage);}
	
	//fetch result:
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc(); 
	} else {
		//echo "0 results";
	}
	
	
	//validate password:
	if($password!=NULL&&$password == $row["loginpassword"]){
		echo("You are now logged in! Congratulations!");
	}else{
		echo("Wrong password. Try again!");
	}

CloseCon($con);
?>