<!--file data.php -->
<?php
	include 'connectDB.php';
	// get name and password passed from client
	$username = $_POST['username'];
	$password = $_POST['password'];
	$conn = OpenCon();
	// sleep for 10 seconds to slow server response down
	sleep(3);
	
	// write back the password concatenated to end of the name
	$sql = "SELECT * FROM plant_the_tree WHERE NAME LIKE '$username'";
	$result = $conn->query($sql);

	if($result->num_rows>0) {
		while($row = $result->fetch_assoc()) {
			if($pwd==$row["password"]){
				echo "<p>Login successful!</p>";
				//echo "<p>Pick up address is: <span><strong></strong></span></p>";
				header("Location: index.php");
			}
			else {
				echo "<p>Wrong username or wrong password!</p>";
			}
		}
	}
	else {
		echo "<p>Please Sign Up First </p>";
	}
?>
