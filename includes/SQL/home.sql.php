<!--
	SQL Queries to Pull Data for Home Page
	Written By: Michaela Day
	Friday, March 30 2018
-->
<?php 
 
 /* Create gateway to database adapter */
 include "\dataAccess/config.php";
 $access= new dataAccess;
 
 class homeCalls {
 
	/* SQL Calls for User Statistics Panel */

	/* Current Rating */
	function currentRating($access) {
		$sql="SELECT `sr` FROM `match` ORDER BY `index` DESC LIMIT 1;";
		$data= $access->query($sql);
		if($data->num_rows > 0) {
			while ($row=$data->fetch_assoc()) {
				echo $row["sr"];
			}
		}
		else { echo "No SR recorded."; }
	}
	
	/* Career High */
	function careerHigh($access) {
		$sql="SELECT `sr` FROM `match` ORDER BY `sr` DESC LIMIT 1;";
		$data= $access->query($sql);
		if($data->num_rows > 0) {
			while ($row=$data->fetch_assoc()) {
				echo $row["sr"];
			}
		}
		else { echo "No SR recorded."; }
	}
	
	/* Win Count */
	function winCount($access) {
		$sql="SELECT COUNT(`result`) FROM `match` WHERE `result`='Win';";
		$data= $access->query($sql);
		if ($data->num_rows > 0 ) {
			while ($row=$data->fetch_assoc()) {
				echo $row["COUNT(`result`)"];
			}
		}
		else { echo "No game data recorded."; }
	}
	
	/* Loss Count */
	function lossCount($access) {
		$sql="SELECT COUNT(`result`) FROM `match` WHERE `result`='Loss';";
		$data= $access->query($sql);
		if ($data->num_rows > 0 ) {
			while ($row=$data->fetch_assoc()) {
				echo $row["COUNT(`result`)"];
			}
		}
		else { echo "No game data recorded."; }
	}
	
	/* Draw Count */
	function drawCount($access) {
		$sql="SELECT COUNT(`result`) FROM `match` WHERE `result`='Draw';";
		$data= $access->query($sql);
		if ($data->num_rows > 0 ) {
			while ($row=$data->fetch_assoc()) {
				echo $row["COUNT(`result`)"];
			}
		}
		else { echo "No game data recorded."; }
	}
	
	/* Favourite Hero */
	function favHero($access) {
		$sql="SELECT `heroes`, COUNT(`result`) FROM `match` GROUP BY `heroes` ORDER BY COUNT(`result`) DESC LIMIT 1;";
		$data= $access->query($sql);
		if($data->num_rows > 0) {
			while ($row=$data->fetch_assoc()) {
				echo $row["heroes"] . " (" . $row["COUNT(`result`)"] . " games)";
			}
		}
		else { echo "No hero data recorded."; }
	}
	
	/* Best Maps */
	function bestMaps($access) {
		$sql="SELECT `map` FROM `match` WHERE `result`='Win' GROUP BY `map` ORDER BY COUNT(`result`) DESC LIMIT 3;";
		$data= $access->query($sql);
		if($data->num_rows > 0) {
			$count=1;
			while ($row=$data->fetch_assoc()) {
				echo $count . ". " . $row["map"] . "<br>";
				$count++;
			}
		}
		else { echo "No map data recorded."; }
	}
	
	/* SQL Calls for Session Highlights */
	/* Populate Session Highlights Table*/
	function recentSessions($access) {
		$sql="SELECT `result`, `map`, `heroes`, `quality`, `sr change`, `sr` FROM `match` WHERE `map`!='' ORDER BY `date` DESC LIMIT 5;";
		$data=$access->query($sql);
		if($data->num_rows > 0) {
			while ($row=$data->fetch_assoc()) {
				echo "<tr><th scope='row'>" . $row["result"] . "</th><td>" . $row["map"] . "</td><td>" . $row["heroes"] . "</td><td>" . $row["quality"] . "</td><td>" . $row["sr change"] . "</td><td>" . $row["sr"] . "</td></tr>";
			}
		}
		else { echo "<tr><th scope='row'> No game data recorded. </th></tr>"; }
	}
	
	/* SQL Calls for Analytic Highlights */
	
	/* Return first SR of each day */
	// For SR Tracker Line Chart
	function srTracker($access) {
		$sql= "SELECT `date`, `sr` FROM `match` WHERE `sr`!=0 GROUP BY `date`;";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo "['" . $row["date"] . "', " . $row["sr"] . "],";
		}
	}
	
	/* Return count of specified session result*/
	// For Win/Loss Pie Chart
	function countResult($access, $outcome) {
		$sql= "SELECT COUNT(`result`) FROM `match` WHERE `result`='" . $outcome . "';";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo $row["COUNT(`result`)"];
		}
	}
}
?>