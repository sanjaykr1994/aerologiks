<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aerologiks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php  include 'links.php' ?> 
</head>
<body>
<a href="logout.php" class="btn btn-danger">  Logout</a>

<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5">WelCome Mr. / Mrs.     
			<?php echo $_SESSION['user']?></div>

  				<table class="table">
  				<thead>
    			<tr>
    	    		<th>S.No</th>
    	    		<th>Name</th>
        			<th>Phone Number</th>
        			<th>Email</th>
        			<th>Messages</th>
      			</tr>
    			</thead>
    	
    			<tbody>
     			<?php
     			 $sql = "SELECT * FROM aerologiks";
    			$result = $conn->query($sql);

    			if ($result->num_rows > 0) {
    				// output data of each row
   				 	while($row = $result->fetch_assoc()) {
        				echo "<tr><td>". $row["id"]."</td><td>". $row["name"]."</td><td>". $row["phone"]. "</td><td>". $row["email"]."</td><td>". $row["Messages"]."</td><tr>";
    					}
					}
					else {
    						echo "<tr><td>No result found</td></tr>";
						}
 			?>	
 			</tbody>
		</div>
</body>
</html>

