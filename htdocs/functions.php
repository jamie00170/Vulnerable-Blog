<?php
	function redirect_user($page = 'index.php') {

		// URL is http:// plus host plus current directory 
		$url = "http://" . $_SERVER['HTTP_HOST'] . "/" . $page;

		// redirect
		header("Location: $url");
		exit();
	}


	function display_posts() {
		require("../database_connect.php");

			$q = "SELECT post_text, name 
				  FROM posts";

			if ($result = $dbc->query($q)) {


				$posts_array = $result->fetch_all(MYSQLI_ASSOC);
				

				// for each post in database
				for ($i=0; $i < count($posts_array) ; $i++) { 
					// create post div
					echo "<div class='post'> <p> " . $posts_array[$i]['post_text'] . " </p> <p> Posted by " . $posts_array[$i]['name'] . " </p> </div>";
				}

			}
	}

?>