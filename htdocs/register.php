<?php

require("../database_connect.php");
require("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST"){

	$un = $_POST['username'];
	$fn = $_POST['first_name'];
	$ln = $_POST['last_name'];
	$pass = $_POST['pass'];
	$con_pass = $_POST['confirm_pass'];

	// check passwords are equal
	if ($pass == $con_pass){

		$q = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$fn', '$ln', '$un', SHA1('$pass')";

		if ($dbc->query($q) == TRUE){

			// rediect user to login page
			echo "You have successfully registered, you can now login here: ";
			echo "<input type='button' value='login' onClick='document.location.href=localhost/login.php'>";
		}

	} else {
		echo "<b> Passwords are not equal </b>";
	}

}
?>
<html>
	<head> 
		<title>Register</title>
	</head>
	<body>
	<form action="register.php" method ="post">
		<fieldset>
			<!-- TODO check username isn't already taken -->
			Username: <input type="text" name="username" required> <br>
			First Name: <input type="text" name="first_name" required> <br>
			Last Name: <input type="text" name="last_name" required> <br>
			Password: <input type="password" name="pass" required> <br>
			Confirm Password: <input type="password" name="confirm_pass" required> <br>
			<input type="submit" name="submit" value="Register"> <br>
		</fieldset>
	</form>
	</body>

</html>