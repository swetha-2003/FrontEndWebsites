<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "signup");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$mobile = $_REQUEST['mobile'];
		$password = $_REQUEST['password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO users VALUES ('$name',
			'$email','$mobile','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.</h3>";
				

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);




    
		?>
	</center>
</body>

</html>

