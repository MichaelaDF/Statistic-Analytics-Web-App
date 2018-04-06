<!--
	View Analytics Page
	Written By: Michaela Day
	Monday, April 2, 2018
-->
<?php
	// Check user is logged in
	include "includes/include.loginCheck.php";

	include "includes/SQl/analytics.sql.php"; 
	$call= new analyticsCalls($access);
	
?>
<! DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Use bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<title>Michaela Day: View Analytics</title>
	
	<!--Navigation -->
	<?php include 'includes/include.nav.php'; ?>
	
	<!-- Google Charts -->
	<?php include 'includes/analytics.drawCharts.php'; ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md">
				<blockquote class="blockquote text-left">
					<br><h4>View Analytics</h4>
					<p class="mb-0">See your progress and how specific statistics may be impacting your performance.</p>
				</blockquote>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<!-- SR Section -->
				<br><h5>Skill Rating (SR)</h5>
				<p>User SR is used by Overwatch's matchmaker engine to calculate the user's overall skill and understanding of the game. It increases by winning competitive matches and decreases by loosing matches. </p>
			</div>
		</div>
		<div class="row">
			
			<!--Div that will hold the SR Tracker line chart-->
			<div class="col-md-5" id="sr_tracker" style="width:600; height:300">
			</div>
			
			<!--Div that will hold the SR Impact pie chart-->
			<div class="col-sm-4" id="sr_impact" style="width:300; height:300">
			</div>
			
			<div class="col-sm-3">
				<b>Remember!</b><br>
				<p>If you are over 3000SR you will begin to decay after a few days of not playing, be sure to play competitive often to keep your SR high!</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm"> <hr> </div>
		</div>
		<div class="row">
			<div class="col-sm">
				<!-- Win-Rate Section -->
				<br><h5>Win-Rate</h5>
				<p>Knowing your win-rate on different map types can help you identify your in-game strengths and areas for improvement.</p>
			</div>
		</div>
		<div class="row">
			
			<!--Div that will hold the Win/Loss pie chart-->
			<div class="col-sm-4" id="win_loss" style="width:400; height:300">
			</div>
			
			<!--Div that will hold the Win/Loss pie charts per map type -->
			<div class="col-sm-8">
				<table>
					<thead>
						<tr>
							<th scope="col">Assault</th>
							<th scope="col">Control</th>
							<th scope="col">Escort</th>
							<th scope="col">Hybrid</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><div id="assault"></div></td> <!-- Assault Win/Loss Chart -->
							<td><div id="control"></div></td> <!-- Control Win/Loss Chart -->
							<td><div id="escort"></div></td> <!-- Escort Win/Loss Chart -->
							<td><div id="hybrid"></div></td> <!-- Hybrid Win/Loss Chart -->
						</tr>
						<tr>
							<!-- Assault description -->
							<td><p><small>Attackers fight to capture a series of objectives while defenders try to hold them off until time runs out. </small></p></td> 
							<!-- Control description -->
							<td><p><small>Two teams fight to control a single objective for a set period of time; the first team to win two rounds wins.</small></p></td> 
							<!-- Escort description -->
							<td><p><small>Attackers escort a payload to a delivery point while defenders  try to keep the payload from reaching its destination before the time limit.</small></p></td> 
							<!-- Hybrid description -->
							<td><p><small>A hybrid of the Assault and Escort map types, attackers must capture the payload and escort it to its destination.</small></p></td> 
						</tr>
						<tr>
							<!-- Key points: assault -->
							<td><p><small><b>Key Skills for Victory:</b><ul>
								<li>Teamwork</li>
								<li>Ultimate Economy</li>
							</ul></small></p></td> 
							<!-- Key points: control -->
							<td><p><small><b>Key Skills for Victory:</b><ul>
								<li>Hero Swapping</li>
								<li>Survivability</li>
							</ul></small></p></td>
							<!-- Key points: escort -->
							<td><p><small><b>Key Skills for Victory:</b><ul>
								<li>Enemy Awareness</li>
								<li>Map Knowledge</li>
							</ul></small></p></td>
							<!-- Key points: assault -->
							<td><p><small><b>Key Skills for Victory:</b><ul>
								<li>Aggression</li>
								<li>Objective Focus</li>
							</ul></small></p></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<!-- Add Footer -->
<?php include "includes/include.footer.php" ?>

<!-- Enable Javascript -->
<?php include "includes/include.enableJS.js" ?>
</body>
</html>