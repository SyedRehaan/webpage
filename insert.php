<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>

	<center>
	<br>
	<br>
	<br>
	<br>

		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "students");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO course VALUES ('$first_name', 
			'$last_name','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo ""; 

			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<br>
		
		<h1>Registration successfully.!<br>
				<br><br><br> Thanks for your interst our team will reach to soon.<br>
			Thank You</h1>
			<br>
			<a href="index.html" class="button"   >Back To Home Page</a>
			<style>
.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
	</center>
</body>

</html>
_