<!--
	SQL Queries to Pull Data for Sessions Page
	Written By: Michaela Day
	Monday, April 2 2018
-->
<?php

	/* Create gateway to database adapter */
	include "\dataAccess/config.php";
	$access= new dataAccess;
	
class sessionCalls {

	/* Build table head */
	function tableHead() {
		echo '<table class="table table-striped table-dark">';
		echo '<thead><tr>';
			echo '<th scope="col">Date</th>';
			echo '<th scope="col">Weekday</th>';
			echo '<th scope="col">Time</th>';
			echo '<th scope="col">Result</th>';
			echo '<th scope="col">Map</th>';
			echo '<th scope="col">SR Change</th>';
			echo '<th scope="col">Final SR</th>';
			echo '<th scope="col">Heroes Played</th>';
			echo '<th scope="col">Match Quality</th>';
			echo '<th scope="col">Communication</th>';
			echo '<th scope="col">Notes</th>';
		echo '</tr></thead>';
		echo '<tbody>';
	}
	
	/* Populate Session Table based on given SQL */
	function summonSessions($access, $sql) {
		$data=$access->query($sql);
		$this->tableHead();
		if($data->num_rows > 0) {
			while ($row=$data->fetch_assoc()) {
				if($row["map"]!=="King's Row") {
					echo "<tr><td>" . $row["date"] . "</td><td>" . $row["weekday"]. "</td><td>" . $row["time"] . "</td><td>" . $row["result"] . "</td><td>" . $row["map"] . "</td><td>" . $row["sr change"] . "</td><td>" . $row["sr"] ."</td><td>" . $row["heroes"] . "</td><td>" . $row["quality"] . "</td><td>" . $row["communication"] . "</td><td>" . $row["notes"] . "</td></tr>";
				}
				else {
					echo "<tr><td>" . $row["date"] . "</td><td>" . $row["weekday"]. "</td><td>" . $row["time"] . "</td><td>" . $row["result"] . "</td><td>" . "Kings Row" . "</td><td>" . $row["sr change"] . "</td><td>" . $row["sr"] ."</td><td>" . $row["heroes"] . "</td><td>" . $row["quality"] . "</td><td>" . $row["communication"] . "</td><td>" . $row["notes"] . "</td></tr>";
				}
			}
		}
		else {
			echo "<tr><th scope='row'> No game data recorded. </th></tr>"; 
		}
		echo '</tbody></table>';
	}
	
	/* All matches SQL */
	function allSessions($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE `map`!='' ORDER BY `date` ASC;";
		$this->summonSessions($access, $sql);
	}
	
	/*Season Selection*/
	/* Season 6 SQL */
	function season6($access) {		
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE `date`>='2017-09-01' AND `date`<='2017-10-28'  ORDER BY `date` ASC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Season 7 SQL */
	function season7($access) {		
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE `date`>='2017-11-01' AND `date`<='2017-12-29'  ORDER BY `date` ASC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Season 8 SQL */
	function season8($access) {		
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE `date`>='2018-01-01' AND `date`<='2018-02-25'  ORDER BY `date` ASC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Season 9 SQL */
	function season9($access) {		
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE `date`>='2018-02-28' AND `date`<='2018-04-28'  ORDER BY `date` ASC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Hero Type Selection */
	/* Support Heroes*/
	function selectSupport($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE  `heroes` LIKE '%Ana%' OR `heroes` LIKE '%Brigitte%' OR `heroes` LIKE '%Lucio%' OR `heroes` LIKE '%Mercy%' OR `heroes` LIKE '%Moira%' OR `heroes` LIKE '%Symmetra%' OR `heroes` LIKE '%Zenyatta%' ORDER BY `date` DESC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Tank Selection */
	function selectTank($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE  `heroes` LIKE '%D.Va%' OR `heroes` LIKE '%Orisa%' OR `heroes` LIKE '%Reinhardt%' OR `heroes` LIKE '%Roadhog%' OR `heroes` LIKE '%Winston%' OR `heroes` LIKE '%Zarya%' ORDER BY `date` DESC;";
		$this->summonSessions($access, $sql);
	}
	
	/* DPS Selection*/
	function selectDPS($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE  `heroes` LIKE '%Bastion%' OR `heroes` LIKE '%Doomfist%' OR `heroes` LIKE '%Genji%' OR `heroes` LIKE '%Hanzo%' OR `heroes` LIKE '%Junkrat%' OR `heroes` LIKE '%McCree%' OR `heroes` LIKE '%Mei%' OR `heroes` LIKE '%Pharah%' OR `heroes` LIKE '%Reaper%' OR `heroes` LIKE '%Soldier:76%' OR `heroes` LIKE '%Sombra%' OR `heroes` LIKE '%Torbjorn%' OR `heroes` LIKE '%Tracer%' OR `heroes` LIKE '%Widowmaker%' ORDER BY `date` DESC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Map Type Selection */
	/* Assault Selection */
	function assaultMap($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE  `map` LIKE 'Hanamura' OR `map` LIKE 'Horizon Lunar Colony' OR `map` LIKE 'Temple of Anubis' OR `map` LIKE 'Volskaya Industries' ORDER BY `date` DESC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Control Selection */
	function controlMap($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE  `map` LIKE 'Illios' OR `map` LIKE 'Lijiang Tower' OR `map` LIKE 'Nepal' OR `map` LIKE 'Oasis' ORDER BY `date` DESC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Escort Selection */
	function escortMap($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE  `map` LIKE 'Dorado' OR `map` LIKE 'Junkertown' OR `map` LIKE 'Route 66' OR `map` LIKE 'Watchpoint Gibraltar' ORDER BY `date` DESC;";
		$this->summonSessions($access, $sql);
	}
	
	/* Hybrid Selection */
	function hybridMap($access) {
		$sql="SELECT `date`, `weekday`, `time`, `result`, `map`, `sr change`, `sr`, `heroes`, `quality`, `communication`, `notes` FROM `match` WHERE  `map` LIKE 'Blizzard World' OR `map` LIKE 'Eichenwalde' OR `map` LIKE 'Hollywood'  OR `map` LIKE 'Numbani' ORDER BY `date` DESC;";
		$this->summonSessions($access, $sql);
	}
}
?>