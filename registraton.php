<!DOCTYPE html>
<html lang="en">
<head>
	<title>Students Registration</title>
</head>
<body>
	<center>
		<h1>Please Fill Your Details in Form</h1>
		<form action="insert.php" method="post">
			
<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>

			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

			<input type="submit" value="Submit" class="button">
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
		</form>
	</center>
</body>
</html>
