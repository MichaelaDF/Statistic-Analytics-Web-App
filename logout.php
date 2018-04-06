<!--
	Ends session and returns user to login page
	Written By: Michaela Day
	Wednesday, April 4 2018
-->
<?php
	session_start();
	
	//clear session variables
	session_unset();
	
	//close session
	session_destroy();
	
	//return user to login page
	header("Location: index.php");
?>