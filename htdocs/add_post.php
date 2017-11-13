<?php 

require("../database_connect.php");

// Insert post into DB
if ($_SERVER['REQUEST_METHOD'] == "POST") {

	echo print_r($_POST);

	$name = "";
	if (isset($_COOKIE['first_name'])){
		$name = $_COOKIE['first_name'];
	} else {
		$name = $_POST['name'];
	}

	$post_text = $_POST['comment'];

	$q = "INSERT INTO posts (post_text, name) VALUES ('$post_text', '$name')";

	if ($dbc->query($q) == TRUE){
		// redirect to home page
		require("functions.php");
		redirect_user();
	} else {
		echo "<p> Error adding post <p>";
	}

}
 


?>