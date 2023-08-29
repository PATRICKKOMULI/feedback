<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }
?>

<?php include_once 'header.php';?>

<div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>Complements</h5>
          <div class="buttons"><a href="complement.php" class="btn btn-mini btn-success"><i class="icon-add"></i>Add complement</a></div>
        </div>

		<hr style="border-top:1px dotted #000;"/>
		<form id="form-wizard" class="form-horizontal" method="post" action="complementsubmit.php">
					<div id="form-wizard-1" class="step">
						<div class="control-group">
							<label for="date" class="control-label">Date</label>
							<div class="controls">
								<input id="date" type="date" name="date" />
							</div>
						</div>
						<div class="control-group">
							<label for="doctors" class="control-label">Doctors</label>
							<div class="controls">
								<textarea name="doctors" id="doctors"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="admission" class="control-label">Admission</label>
							<div class="controls">
								<textarea name="admission" id="admission"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="nursing" class="control-label">Nursing</label>
							<div class="controls">
								<textarea name="nursing" id="nursing"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="medical" class="control-label">Medical</label>
							<div class="controls">
								<textarea name="medical" id="medical"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="communication" class="control-label">Communication</label>
							<div class="controls">
								<textarea name="communication" id="communication"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="painManagement" class="control-label">Pain Management</label>
							<div class="controls">
								<textarea name="painManagement" id="painManagement"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="cafeteria" class="control-label">Cafeteria</label>
							<div class="controls">
								<textarea name="cafeteria" id="cafeteria"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="cleanliness" class="control-label">Cleanliness</label>
							<div class="controls">
								<textarea name="cleanliness" id="cleanliness"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="security" class="control-label">Doctors</label>
							<div class="controls">
								<textarea name="security" id="security"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="billing" class="control-label">Billing</label>
							<div class="controls">
								<textarea name="billing" id="billing"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="patientBeds" class="control-label">Patient Beds</label>
							<div class="controls">
								<textarea name="patientBeds" id="patientBeds"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="noiseLevels" class="control-label">Doctors</label>
							<div class="controls">
								<textarea name="noiseLevels" id="noiseLevels"></textarea>
							</div>
						</div>
                        <div class="control-group">
							<label for="roomAmbiance" class="control-label">Room Ambiance</label>
							<div class="controls">
								<textarea name="roomAmbiance" id="roomAmbiance"></textarea>
							</div>
						</div>
                        <div class="control-group">
							<label for="amenities" class="control-label">Amenities</label>
							<div class="controls">
								<textarea name="amenities" id="amenities"></textarea>
							</div>
						</div>
                        <div class="control-group">
							<label for="discharge" class="control-label">Doctors</label>
							<div class="controls">
								<textarea name="discharge" id="discharge"></textarea>
							</div>
						</div>
					</div>

					<div class="form-actions">

						<input id="next" class="btn btn-primary" type="submit" value="Submit" />
						<div id="status"></div>
					</div>
					<div id="submitted"></div>
				</form>
		
	</div>
</body>
<?php include_once 'footer.php';?>
</html>

