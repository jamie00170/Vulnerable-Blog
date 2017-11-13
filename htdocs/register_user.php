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

		$q = "INSERT INTO users (first_name, last_name, username, password) VALUES ('$fn', '$ln', '$un', '$pass')";

	} else {
		echo "<b> Passwords are not equal </b>";
	}

	

}

// rediect user to login page

?>