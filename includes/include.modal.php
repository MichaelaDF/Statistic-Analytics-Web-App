<!--
	Add Session Modal - incomplete
	Written By: Michaela Day
	Thursday, APril 5 2018
-->
<div class="modal fade" id="addSession" tabindex="-1" role="dialog" aria-labelledby="addSessionModal" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addSessionModal">Add a new session</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<!-- Begin modal form -->
				<form action= "" method="post">
					<div class="form-row">
						<div class="form-group col">
							<label for="date">Date</label>
							<input type="date" class="form-control" id="date" name="date" placeholder="yyyy-mm-dd" value="">
						</div>
						<div class="form-group col">
							<label for="weekday">Weekday</label>
							<select class="custom-select" id="weekday" name="weekday">
								<option selected value="Sunday">Sunday</option>
								<option value="Monday">Monday</option>
								<option value="Tuesday">Tuesday</option>
								<option value="Wednesday">Wednesday</option>
								<option value="Thursday">Thursday</option>
								<option value="Friday">Friday</option>
								<option value="Satrurday">Saturday</option>
							</select>
						</div>
						<div class="form-group col">
							<label for="inTime">Time</label>
							<input type="text" class="form-control" id="time" name="time" placeholder="00:00 AM" value="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col">
							<label for="result">Result</label>
							<select class="custom-select" id="result" name="result">
								<option selected value="Win">Win</option>
								<option value="Loss">Loss</option>
								<option value="Draw">Draw</option>
							</select>
						</div>
						<div class="form-group col">
							<label for="map">Map</label>
							<select class="custom-select" id="map" name="map">
								<option selected value="Blizzard World">Blizzard World</option>
								<option value="Dorado">Dorado</option>
								<option value="Eichenwalde">Eichenwalde</option>
								<option value="Hanamura">Hanamura</option>
								<option value="Hollywood">Hollywood</option>
								<option value="Horizon Lunar Colony">Horizon Lunar Colony</option>
								<option value="Illios">Illios</option>
								<option value="Junkertown">Junkertown</option>
								<option value="King''s Row">King's Row</option>
								<option value="Lijiang Tower">Lijiang Tower</option>
								<option value="Nepal">Nepal</option>
								<option value="Numbani">Numbani</option>
								<option value="Oasis">Oasis</option>
								<option value="Route 66">Route 66</option>
								<option value="Temple of Anubis">Temple of Anubis</option>
								<option value="Volskaya Industries">Volskaya Industries</option>
								<option value="Watchpoint Gibraltar">Watchpoint Gibraltar</option>
							</select>
						</div>
					</div>
				</form>
				<!-- End modal form -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-success">Add</button>
			</div>
		</div>
	</div>
</div>