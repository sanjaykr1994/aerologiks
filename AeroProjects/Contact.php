<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aerologiks";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Could Not Connect:".mysqli_connect_error());
}
else{
	
$name=test_input($_POST['name']);
$phone=test_input($_POST['phone']);
$email=test_input($_POST['email']);
$messages=test_input($_POST['messages']);

$sql =" INSERT INTO aerologiks(name,phone,email,messages)VALUES('$name','$phone','$email','$messages')";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(mysqli_query($conn,$sql)){
	echo "<script type='text/javascript'>alert('your data Submited Successfully');</script>";
}
	else{
		echo "Failed to insert";
	}

mysqli_close($conn);
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
//echo "<script type='text/javascript'>alert('it is working');</script>";	 

//header( "Location:http://localhost/AeroProjects/index.html");


?>