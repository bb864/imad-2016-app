<?php
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$name =  pg_escape_string($_POST['name']);
		$email =  pg_escape_string($_POST['e-mail']);
		$message =  pg_escape_string($_POST['message']);
		
		$query = "INSERT INTO contacts
		(Name, Email, Message)
		VALUES
		('" . $name . "', '" . $email . "', '" . $message . "')";
		$result = pg_query($query); 
        if (!$result) { 
            $errormessage = pg_last_error(); 
            echo "Error with query: " . $errormessage; 
            exit(); 
        } 
        echo "Thank-you for your message. We will get back to you as soon as possible. Go back to website <a href='ui/index.html'>here</a>" 
        pg_close(); 
	}
?>