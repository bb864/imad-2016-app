<?php
	require_once("ui/connection.php");
	if(isset($_POST['submit'])){
		$email = pg_escape_string($_POST['e-mail']);
		$password = pg_escape_string($_POST['password']);
		$query = "SELECT Email, Password FROM persons WHERE Email='{$email}' and Password='{$password}'";
		$result = pg_query($query);
		$num = pg_num_rows($result);
		if ($num == 0) // that is if no records found in database
			header('location: ui/error.php');
		else{
			$row = pg_fetch_result($result);
			session_start();
			$_SESSION['email']=$row['Email'];
			header('location: ui/index.html');	
		}
	}
?>