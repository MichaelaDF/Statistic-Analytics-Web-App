<!--
	View Sessions Page
	Written By: Michaela Day
	Monday, April 2, 2018
-->
<?php 
	// Check user is logged in
	include "includes/include.loginCheck.php";
	
	include "includes/SQL/sessions.sql.php"; 
	$call= new sessionCalls($access);
?>

<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Use bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<title>Michaela Day: View Sessions</title>
	
	<!--Navigation -->
	<?php include 'includes/include.nav.php'; ?>
	
	<!-- Javascript -->
	<?php include 'includes/session.tablepick.js'; ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg">
				<blockquote class="blockquote text-left">
					<br><h4>View Sessions</h4>
					<p class="mb-0">View your statistics from specific matches.</p><br>
				</blockquote>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p>Choose a category to see previous sessions from that parameter.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<form>
					<select class="custom-select" name="season" onchange="showData(this.value)">
						<option selected value="allSeasons">Competitive Season</option>
						<option value="season6">Season 6</option>
						<option value="season7">Season 7</option>
						<option value="season8">Season 8</option>
						<option value="season9">Season 9</option>
					</select>
				</form>
			</div>
			<div class="col">
				<form>
					<select class="custom-select" name="heroType" onchange="showData(this.value)">
						<option selected value="allSeasons">Hero Type</option>
						<option value="supportHero">Support</option>
						<option value="tankHero">Tank</option>
						<option value="dpsHero">DPS</option>
					</select>
				</form>
			</div>
			<div class="col">
				<form>
					<select class="custom-select" name="mapType" onchange="showData(this.value)">
						<option selected value="allSeasons">Map Type</option>
						<option value="assaultMap">Assault</option>
						<option value="controlMap">Control</option>
						<option value="escortMap">Escort</option>
						<option value="hybridMap">Hybrid</option>
					</select>
				</form>
			</div>
		</div>
		<div class="row">
			<!-- JS adds table here -->
			<div class="col-md" id="tableHere">
				<?php $call->allSessions($access); ?>
			</div>
		</div>
	</div>

<!-- Add footer -->
<?php include "includes/include.footer.php"; ?>
	
<!-- Enable Javascript -->
<?php include "includes/include.enableJS.js" ?>
</body>
</html>