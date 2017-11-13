<?php

$server = "localhost";
$username = "jamie";
$password = "pass_word";
$db_name = "vlun_blog";

$dbc = new mysqli($server, $username, $password, $db_name);

if ($dbc->connect_error){
	die("Connection failed: " . $conn->connect_error);
}



?>