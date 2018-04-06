<!--
	Configure Database Adapter to Query Database
	Written By: Michaela Day
	Sunday, April 1 2018
-->
<?php
	
class dataAccess {

	public function query($sql){
	
	/* Connect to MySQL Database via MySQLi (Object-Oriented) */
	include ("protected/access.php");
	
	$connect= new mysqli($servername, $username, $password, $dbname);
	if($connect->connect_error) {
		die("Failed to Connect: " . $connect->connect_error);
	}
	
	/* Query */
	//$sql= "SELECT `map` FROM `match` WHERE `result`='Win' GROUP BY `map` ORDER BY COUNT(`result`) DESC LIMIT 3;";
	$data= $connect->query($sql);
	
	
	/* Output Data */
	if(!$data) { trigger_error ("Invalid Query: " . $connect->error); }
	else {return $data; }
	
	/* Close Connection */
	$data->close();
	$connect->close();
	}
	
}
?>