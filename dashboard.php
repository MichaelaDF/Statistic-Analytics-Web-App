<!--
	Main Home Page
	Written By: Michaela Day
	Friday, March 30 2018
-->
<?php 
	// Check user is logged in
	include "includes/include.loginCheck.php";
	
	include "includes/SQl/home.sql.php"; 
	$call= new homeCalls($access);

?>
<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Use bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<title>Michaela Day: Statistic Analytics Home</title>
	
	<!--Navigation -->
	<?php include 'includes/include.nav.php'; ?>
	
	<!-- Google Charts -->
	<?php include 'includes/dashboard.drawCharts.php'; ?>
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<blockquote class="blockquote text-left">
					<!-- Echo username of user -->
					<br><h4> Welcome <?php echo $_SESSION["username"]; ?>,</h4>
					<p class="mb-0">Here is a quick overview of your statistics.</p>
				</blockquote>
				<hr>
			</div>
		</div>
		
		<div class="row">
			
			<!--User Statistics Panel Start-->
			<div class="col-3"> 
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">User Statistics</h5>
					</div>
					<div class="card-body">
						<img class="card-img img-thumbnail" src="https://pre00.deviantart.net/afb7/th/pre/i/2017/004/0/4/overwatch___pachimari__player_icon__by_yoshinoyoshie-dau7187.png" alt="Player icon">
						
						<p class="card-text"><dl class="row">
							<dt class="col-sm-5">Current Rating</dt> <dd class="col-sm-7"><?php $call->currentRating($access); ?> SR</dd>
							<dt class="col-sm-5">Career High</dt> <dd class="col-sm-7"><?php $call->careerHigh($access); ?> SR</dd>
							<dt class="col-sm-5">Wins</dt> <dd class="col-sm-7"><?php $call->winCount($access); ?></dd>
							<dt class="col-sm-5">Losses</dt> <dd class="col-sm-7"><?php $call->lossCount($access); ?></dd>
							<dt class="col-sm-5">Draws</dt> <dd class="col-sm-7"><?php $call->drawCount($access); ?></dd>
							<dt class="col-sm-5">Favourite Hero</dt> <dd class="col-sm-7"><?php $call->favHero($access); ?></dd>
							<dt class="col-sm-5">Best Maps</dt> <dd class="col-sm-7"><?php $call->bestMaps($access); ?></dd>
						</dl></p>
						
					</div>
				</div>
			</div>
			<!--User Statistics Panel End-->
			
			<!--Main Column -->
			<div class="col-9"> 
				
				<!--Session Highlight Start-->
				<h5>Your most recent Competitive Sessions:</h5> 
				<table class="table table-sm table-striped table-dark">
					<thead>
						<tr>
							<th scope="col">Result</th>
							<th scope="col">Map</th>
							<th scope="col">Heroes Played</th>
							<th scope="col">Match Quality</th>
							<th scope="col">SR Change</th>
							<th scope="col">Final SR</th>
						</tr>
					</thead>
					<tbody>	<?php $call->recentSessions($access); ?> </tbody>
				</table>
				<!-- Button triggers modal
				Functionlity incomplete :( 
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#addSession"><h6>Add a new session +</h6></button>
				include includes/include.modal.php;
				-->
				<a class="btn btn-secondary"  href="sessions.php"><h6>See more sessions ></h6></a>
				<br></br>
				<hr>
				<!--Session Highlight End-->
				
				<!--Analytic Highlight Start-->
				<h5>Analytics:</h5> 
				<div class="row">
					<div class="col-sm" id="sr_tracker" style="width:600; height:300">
						<!--Div that will hold the SR Tracker line chart-->
					</div>
					<div class="col-sm" id="win_loss" style="width:400; height:300">
						<!--Div that will hold the Win/Loss pie chart -->
					</div>
				</div>
				<br><a class="btn btn-secondary" href="analytics.php"><h6>See more analytics ></h6></a><br></br>
				<!-- Analytic Highlight End -->
			</div>
		</div>
	</div>

<!-- Add footer -->
<?php include "includes/include.footer.php"; ?>

<!-- Enable Javascript -->
<?php include "includes/include.enableJS.js" ?>
</body>
</html>