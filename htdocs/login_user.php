<?php

require("../database_connect.php");
require("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {

	$un = $_POST['username'];
	$pass = $_POST['password']; 

	$q = "SELECT username, first_name
		  FROM users
		  WHERE username = '$un' AND password = SHA1('$pass')";

	$res = $dbc->query($q);

	if ($res->num_rows == 1) {
		$row = $res->fetch_assoc();

		setcookie('username', $row['username']);
		setcookie('first_name', $row['first_name']);
		echo $row['username'] . " has logged in successfulyy";

		// redirect logged in user to home page
		redirect_user();
	} else {
		echo "username and password combination don't match any on the system";
	}

	$dbc->close();
}

?>