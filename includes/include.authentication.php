<!--
	Authentication for Login Page
	Written By: Michaela Day
	Tuesday, April 3 2018
	
	Assumptions:
	- user will use only latin characters when creating a password
-->
<?php

/* Define variables and set to null */
$username="";
$userCheck=FALSE;
$usernameHelp="";
$userlength="";

$password="";
$passCheck=FALSE;
$passwordHelp="";
$passlength="";


/* Check if form has been submitted, if so check values */
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$username=$_POST["username"];
	$password=$_POST["password"];
	
	//checks if a username was entered
	if(empty($username)) { 
		$usernameHelp= "Please enter a valid username."; 
	}
	//check username meets requirements
	else { 
		//clean against hackers
		$username= trim($username);
		$username= stripslashes($username);
		$username= htmlspecialchars($username);
		//check length requirement
		$userlength= strlen($username);
		if (($userlength >= 3) && ($userlength <= 10)) {
			//check against filed usernames
			$fileContents= file_get_contents("dataAccess/protected/usernames.txt");
			$goodNames= explode(",", $fileContents);
			if(in_array($username, $goodNames)) {
				$userCheck= TRUE;
			}
			else { $usernameHelp= "Username [" . $username . "] must be registered by site admin.";}
		}
		else { $usernameHelp= "Username must be 3-10 characters in length. (Current length: " . $userlength . ")  <br>";}
	}
	
	//checks if a password was entered
	if(empty($password)) {
		$passwordHelp= "Please enter a valid password.";
	}
	else {
		//clean against hackers
		$password= trim($password);
		$password= stripslashes($password);
		$password= htmlspecialchars($password);
		//check length requirement
		$passlength= strlen($password);
		if (($passlength >= 8) && ($passlength <= 12)) {
			//check for at least one capital letter
			if(preg_match('/[A-Z]+/', $password)) {
				//check for at least one lower case letter
				if(preg_match('/[a-z]+/', $password)) {
					//check for at least one of (%#*&!@)
					if(preg_match('/[%#*&!@]+/', $password)) {
						//check for 4+ consecutive letters
						if(preg_match('/[A-Za-z][A-Za-z][A-Za-z][A-Za-z]+/', $password)) {
							$passwordHelp= "Passwords cannot have more than 3 letters together.";
						}
						else { 
							$passCheck=TRUE;
							//If username and password meet conditions, save username and redirect to home page
							if($userCheck==TRUE && $passCheck==TRUE) {
								$_SESSION["username"]= $username;
								header("Location: dashboard.php");
							}
						}
					}
					else { $passwordHelp= "Password must contain at least one of the following characters: %#*&!@"; }
				}
				else { $passwordHelp= "Password must contain at least 1 lower case letter."; }
			}
			else { $passwordHelp= "Password must contain a capital letter."; }
		}
		else { $passwordHelp= "Password must be 8-12 characters in length. (Current length: " . $passlength . ") <br>"; }
	}
}


/* Display username/password alert */
function accessAlert($feedback) {
	if($feedback!=="") { 
		echo '<div class="alert alert-danger" role="alert">';
		echo $feedback;
		echo '</div>';
	}
}
?>