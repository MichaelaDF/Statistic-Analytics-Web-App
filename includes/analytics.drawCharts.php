<!--
	Google Charts scripts for Analytics Page referencing Google Charts Documentation
	Written by: Michaela Day 
	Wednesday, April 4 2018
-->

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    var data;
    var chart;

    // Load the Visualization API
    google.charts.load('current', {'packages':['corechart', 'line']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawLogScales);

	//Create SR Tracker Line Graph for div id "sr_tracker"
	function drawLogScales() {
		try {
			var data = new google.visualization.DataTable();
			data.addColumn('string', 'X');
			data.addColumn('number', 'SR');
			data.addRows([ 
			  <?php $call->srTracker($access); ?>
			]);

			var options = {
				'title': 'SR Tracker',
				'titleTextStyle': { color: '#2d2d2d', fontSize: 16, bold: true },
				'hAxis': { title: 'Date', logScale: true },
				'vAxis': { title: 'SR', logScale: false },
				'legend': { position: 'none'},
				'colors': ['#4885ed'] 
			};

			var chart = new google.visualization.LineChart(document.getElementById('sr_tracker'));
			chart.draw(data, options);
		}
		catch(error) {
			document.getElementById('sr_tracker').innerHTML = "Error encountered, could not build chart: " + error.message;
		}
      }
		    
	
	// Create SR Impact Pie Chart for div id "sr_impact"
	google.charts.setOnLoadCallback(drawSrImpactChart);
    function drawSrImpactChart() {
		try {
			// Create data table.
			data = new google.visualization.DataTable();
			data.addColumn('string', 'Cause');
			data.addColumn('number', 'Change');
			data.addRows([
				<?php echo "['Wins (+ve)', ";
					$call->sumChange($access,'Win');
					echo "], "; 
					echo "['Losses (-ve)', "; 
					$call->sumChange($access,'Loss');
					echo "], "; 
					echo "['Decay (-ve)', "; 
					$call->sumDecay($access);
					echo "], ";
				?>
			]);

			// Set chart options
			var options = {'title':'SR Impacts',
						   'width':400,
						   'height':300,
						   'pieHole': 0.6,
						   'slices': [{color: '#3cba54'}, {color: '#db3236'}, {color: '#7544a0'}],
						   'pieSliceText': "none",
						   'legend': { position: 'none'	},
						   'titleTextStyle': { colour: '#2d2d2d', fontSize: 16, bold: true },
		   };

			// Instantiate and draw chart, passing in options.
			chart = new google.visualization.PieChart(document.getElementById('sr_impact'));
			chart.draw(data, options);
		}
		catch(error) {
			document.getElementById('sr_impact').innerHTML = "Error encountered, could not build chart: " + error.message;
		}
	}

	// Create Win/Loss Pie Chart for div id "win_loss"
	google.charts.setOnLoadCallback(drawWinLossChart);   
   function drawWinLossChart() {
		try {
			// Create data table.
			data = new google.visualization.DataTable();
			data.addColumn('string', 'Result');
			data.addColumn('number', 'Count');
			data.addRows([
				<?php echo "['Wins', ";
					$call->countResult($access,'Win');
					echo "], "; 
					echo "['Losses', "; 
					$call->countResult($access,'Loss');
					echo "], "; 
					echo "['Draws', "; 
					$call->countResult($access,'Draw');
					echo "], ";
				?>
			]);

			// Set chart options
			var options = {'title':'Total Win-Rate',
						   'width':400,
						   'height':300,
						   'pieHole': 0.6,
						   'slices': [{color: '#3cba54'}, {color: '#db3236'}, {}],
						   'pieSliceText': "none",
						   'titleTextStyle': { colour: '#2d2d2d', fontSize: 16, bold: true },
		   };

			// Instantiate and draw chart, passing in options.
			chart = new google.visualization.PieChart(document.getElementById('win_loss'));
			chart.draw(data, options);
		}
		catch(error) {
			document.getElementById('win_loss').innerHTML = "Error encountered, could not build chart: " + error.message;
		}
    }
	
//**********************************************************************
	/* Begin creating charts for Map Win/Loss Table */
	/* Win/Loss Map: Assault */
	// Create Win/Loss Pie Chart for div id "assault"
	google.charts.setOnLoadCallback(drawWinLossAssaultChart);   
	function drawWinLossAssaultChart() {
		try {
			data = new google.visualization.DataTable();
			data.addColumn('string', 'Result');
			data.addColumn('number', 'Count');
			data.addRows([
				<?php echo "['Wins', ";
					$call->assaultMap($access, 'Win');
					echo "], "; 
					echo "['Losses', "; 
					$call->assaultMap($access, 'Loss');
					echo "], "; 
					echo "['Draws', "; 
					$call->assaultMap($access, 'Draw');
					echo "], ";
				?>
			]);

			var options = {'width':150,
						   'height':150,
						   'pieHole': 0.6,
						   'slices': [{color: '#3cba54'}, {color: '#db3236'}, {}],
						   'pieSliceText': "none",
						   'legend': {position: 'none'},
						   };

			chart = new google.visualization.PieChart(document.getElementById('assault'));
			chart.draw(data, options);
		}
		catch(error) {
			document.getElementById('assault').innerHTML = "Error encountered, could not build chart: " + error.message;
		}
    }
	
	/* Win/Loss Map: Control */
	// Create Win/Loss Pie Chart for div id "control"
	google.charts.setOnLoadCallback(drawWinLossControlChart);   
	function drawWinLossControlChart() {
		try {
			data = new google.visualization.DataTable();
			data.addColumn('string', 'Result');
			data.addColumn('number', 'Count');
			data.addRows([
				<?php echo "['Wins', ";
					$call->controlMap($access, 'Win');
					echo "], "; 
					echo "['Losses', "; 
					$call->controlMap($access, 'Loss');
					echo "], "; 
					echo "['Draws', "; 
					$call->controlMap($access, 'Draw');
					echo "], ";
				?>
			]);

			var options = {'width':150,
						   'height':150,
						   'pieHole': 0.6,
						   'slices': [{color: '#3cba54'}, {color: '#db3236'}, {}],
						   'pieSliceText': "none",
						   'legend': {position: 'none'},
						   };

			chart = new google.visualization.PieChart(document.getElementById('control'));
			chart.draw(data, options);
		}
		catch(error) {
			document.getElementById('control').innerHTML = "Error encountered, could not build chart: " + error.message;
		}
    }
	
	/* Win/Loss Map: Escort */
	// Create Win/Loss Pie Chart for div id "escort"
	google.charts.setOnLoadCallback(drawWinLossEscortChart);   
	function drawWinLossEscortChart() {
		try {
			data = new google.visualization.DataTable();
			data.addColumn('string', 'Result');
			data.addColumn('number', 'Count');
			data.addRows([
				<?php echo "['Wins', ";
					$call->escortMap($access, 'Win');
					echo "], "; 
					echo "['Losses', "; 
					$call->escortMap($access, 'Loss');
					echo "], "; 
					echo "['Draws', "; 
					$call->escortMap($access, 'Draw');
					echo "], ";
				?>
			]);

			var options = {'width':150,
						   'height':150,
						   'pieHole': 0.6,
						   'slices': [{color: '#3cba54'}, {color: '#db3236'}, {}],
						   'pieSliceText': "none",
						   'legend': {position: 'none'},
						   };

			chart = new google.visualization.PieChart(document.getElementById('escort'));
			chart.draw(data, options);
		}
		catch(error) {
			document.getElementById('escort').innerHTML = "Error encountered, could not build chart: " + error.message;
		}
    }
	
	/* Win/Loss Map: Hybrid */
	// Create Win/Loss Pie Chart for div id "hyrbid"
	google.charts.setOnLoadCallback(drawWinLossHybridChart);   
	function drawWinLossHybridChart() {
		try {
			data = new google.visualization.DataTable();
			data.addColumn('string', 'Result');
			data.addColumn('number', 'Count');
			data.addRows([
				<?php echo "['Wins', ";
					$call->hybridMap($access, 'Win');
					echo "], "; 
					echo "['Losses', "; 
					$call->hybridMap($access, 'Loss');
					echo "], "; 
					echo "['Draws', "; 
					$call->hybridMap($access, 'Draw');
					echo "], ";
				?>
			]);

			var options = {'width':150,
						   'height':150,
						   'pieHole': 0.6,
						   'slices': [{color: '#3cba54'}, {color: '#db3236'}, {}],
						   'pieSliceText': "none",
						   'legend': {position: 'none'},
						   };

			chart = new google.visualization.PieChart(document.getElementById('hybrid'));
			chart.draw(data, options);
		}
		catch(error) {
			document.getElementById('hybrid').innerHTML = "Error encountered, could not build chart: " + error.message;
		}
    }
</script>


