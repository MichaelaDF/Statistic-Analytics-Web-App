<!--
	SQL Queries to Pull Data for Analytics Page
	Written By: Michaela Day
	Wednesday, April 3 2018
-->
<?php

	/* Create gateway to database adapter */
	include "\dataAccess/config.php";
	$access= new dataAccess;

class analyticsCalls {
	
	/* Return first SR of each day */
	// For SR Tracker Line Chart
	function srTracker($access) {
		$sql= "SELECT `date`, `sr` FROM `match` WHERE `sr`!=0 GROUP BY `date`;";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo "['" . $row["date"] . "', " . $row["sr"] . "],";
		}
	}
	
	/* Return sum of SR Change based upon result*/
	// For SR Impact Chart
	function sumChange($access, $outcome) {
		$sql= "SELECT SUM(`sr change`) FROM `match` WHERE `result`='" . $outcome . "';";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo abs($row["SUM(`sr change`)"]);
		}
	}
	
	/* Return sum of SR Change based upon decay*/
	// For SR Impact Chart
	function sumDecay($access) {
		$sql= "SELECT SUM(`sr change`) FROM `match` WHERE `notes`='Decay';";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo abs($row["SUM(`sr change`)"]);
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
	
	/* Map Type Selection Calls*/
	/* Assault Selection */
	function assaultMap($access, $outcome) {
		$sql="SELECT COUNT(`result`) FROM `match` WHERE  `result`='" . $outcome . "' AND (`map` LIKE 'Hanamura' OR `map` LIKE 'Horizon Lunar Colony' OR `map` LIKE 'Temple of Anubis' OR `map` LIKE 'Volskaya Industries');";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo $row["COUNT(`result`)"];
		}
	}
	
	/* Control Selection */
	function controlMap($access, $outcome) {
		$sql="SELECT COUNT(`result`) FROM `match` WHERE  `result`='" . $outcome . "' AND (`map` LIKE 'Illios' OR `map` LIKE 'Lijiang Tower' OR `map` LIKE 'Nepal' OR `map` LIKE 'Oasis');";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo $row["COUNT(`result`)"];
		}
	}
	
	/* Escort Selection */
	function escortMap($access, $outcome) {
		$sql="SELECT COUNT(`result`) FROM `match` WHERE  `result`='" . $outcome . "' AND (`map` LIKE 'Dorado' OR `map` LIKE 'Junkertown' OR `map` LIKE 'Route 66' OR `map` LIKE 'Watchpoint Gibraltar');";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo $row["COUNT(`result`)"];
		}
	}
	
	/* Hybrid Selection */
	function hybridMap($access, $outcome) {
		$trouble= "King''s Row";
		$sql="SELECT COUNT(`result`) FROM `match` WHERE  `result`='" . $outcome . "' AND (`map` LIKE 'Blizzard World' OR `map` LIKE 'Eichenwalde' OR `map` LIKE 'Hollywood' OR `map` LIKE '" . $trouble . "' OR `map` LIKE 'Numbani');";
		$data=$access->query($sql);
		while ($row=$data->fetch_assoc()) {
			echo $row["COUNT(`result`)"];
		}
	}
}
?>