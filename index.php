<!--
	Login Page
	Written By: Michaela Day
	Monday, April 2, 2018
-->
<?php
	session_start();
	
	/* Include authentication */
	include "includes/include.authentication.php";
	

?>
<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Use bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<title>Michaela Day: Login</title>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<blockquote class="blockquote text-left">
					<br><h4> Welcome to Statistic Analytics! </h4>
					<p class="mb-0">This website has been designed and developed by Michaela Day in response to a coding challenge from ATB. To continue to the home page please login using the form below.</p>
				</blockquote>
			</div>
		</div>
		
		<!-- Begin login form -->
		<div class="row">
			<div class="col-sm">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="row">
						<div class="col">
							<!-- Username input -->
							<div class="col">
								<label for="usernameInput">Username</label>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<input type="text" class="form-control" id="usernameInput" name="username" placeholder="username" value="<?php echo $username ?>">
							<small id="usernameHelp" class="form-text text-muted"> Usernames must: <ul><li>have 3-10 characters</li><li>be part of a list of registered names</li></ul></small>
						</div>
						<!-- Username alert -->
						<div class="col-sm-4">
							<?php accessAlert($usernameHelp) ?>
						</div>
					</div>

					<div class="row">
						<!-- Password input -->
						<div class="col">
							<br><label for="passwordInput">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<input type="password" class="form-control" id="passwordInput" name="password" placeholder="password" value="<?php echo $password ?>">
							<small id="passwordHelp" class="form-text text-muted">Password must: <ul><li>be 8-12 characters in length</li><li>have a capital letter</li><li>have a lowercase letter</li><li>contain one of the following characters: %#*&!@</li><li>not have more than 3 letters together</li></ul> </small>
						</div>
						<!-- Password alert -->
						<div class="col-sm-4">
							<?php accessAlert($passwordHelp); ?>
						</div>
					</div>
					<!-- Submit button -->
					<button type="submit" value="post" class="btn btn-success">Login</button>
				</form>
				<!-- End login form -->
		</div>
	</div>

<!-- Enable Javascript -->
<?php include "includes/include.enableJS.js" ?>

</body>
</html>