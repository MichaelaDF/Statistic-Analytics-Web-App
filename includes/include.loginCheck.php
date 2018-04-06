<!--
	Check that the user is logged in before displaying page
	Written by: Michaela Day
	Thursday, April 5 2018
-->
<?php
	session_start();
	
	if($_SESSION["username"]=="") {
		header("Location: index.php");
	}

?>