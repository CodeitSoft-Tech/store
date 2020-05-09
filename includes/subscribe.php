<?php


	include("includes/db.php");
	
	if(isset($_POST['subscribe']))
	{
		$user_email = mysqli_real_escape_string($db, $_POST['user_email']);

		$sql = "INSERT INTO subscribe_tbl(email)VALUES('$user_email')";

		$query = mysqli_query($db, $sql);

		if(!$query)
		{
			die('Could not post data'.mysqli_error($db));
		}
		else
		{
			header('Location: index.php?Thanks for subscribing our newsletter');
			exit(); 
		}
	}



?>