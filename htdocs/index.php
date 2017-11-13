<html>
	<head>
		<title>Vulnerable Blog</title>
		<link rel="stylesheet" type="text/css" href="main.css">
		
	</head>
	<body>
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a href="register.php">Register</a></li>
		  <li id="login"><a href="Login.php"><?php 
			// Check if user is logged in
			if (isset($_COOKIE['first_name'])) {
				// place the users name in the place of login
				echo $_COOKIE['first_name'];
			} else {
				echo "Login";
				} ?></a></li>
		</ul> 
		<h2> Posts <h2>
		<div id="main_div">
			
			<!-- Div to contain all blog posts -->
			
			<?php
			// query posts table and create a div of class post for each
			require("functions.php");

			display_posts();
			?>

		
		<form id="postform" action="add_post.php" method="POST">
			<textarea name="comment" form="postform" rows="5" cols="75">Enter your post</textarea> <br>
			<!-- If user logged in then use their name else display input field --><?php 
			if (isset($_COOKIE['first_name']) == null) {
				echo "Name: <input type='text' name='name'> <br>";
			} 
			?>
			<input type="submit" name="submit" value="Submit Post">
		</form>

		<!--Form to add a post -->
		</div>
		
	</body>
</html>