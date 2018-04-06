<!--
	Google Charts scripts for Dashboard Page referencing Google Charts Documentation
	Written by: Michaela Day 
	Thursday, April 5 2018
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
</script>