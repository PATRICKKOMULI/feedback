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
          <h5>Incidents</h5>
          <div class="buttons"><a href="incidents.php" class="btn btn-mini btn-success"><i class="icon-add"></i>Add incident</a></div>
        </div>

		<hr style="border-top:1px dotted #000;"/>
		<form id="form-wizard" class="form-horizontal" method="post" action="incidentsubmit.php">
					<div id="form-wizard-1" class="step">
						<div class="control-group">
							<label for="name" class="control-label">Name</label>
							<div class="controls">
								<input id="name" type="text" name="name" />
							</div>
						</div>
						<div class="control-group">
							<label for="incident" class="control-label">Incident related to</label>
							<div class="controls">
								<select name="incident" id="">
									<option value="inpatient">Inpatient</option>
									<option value="outpatient">Outpatient</option>
									<option value="attendant">Attendant</option>
									<option value="staff">Staff</option>
									<option value="equipment">Equipment/property</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="ward" class="control-label">Ward/Dept</label>
							<div class="controls">
								<input id="ward" type="text" name="ward" />
							</div>
						</div>
						<div class="control-group">
							<label for="location" class="control-label">Exact location</label>
							<div class="controls">
								<input id="location" type="text" name="location" />
							</div>
						</div>
						<div class="control-group">
							<label for="description" class="control-label">Description of what happened</label>
							<div class="controls">
								<textarea name="description" id="description"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="actions" class="control-label">Immediate actions and outcome</label>
							<div class="controls">
								<textarea name="actions" id="actions"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="factors" class="control-label">Contributing factors</label>
							<div class="controls">
								<textarea name="factors" id="factors"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="prevention" class="control-label">How could it have been prevented</label>
							<div class="controls">
								<textarea name="prevention" id="prevention"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="notification" class="control-label">Senior staff/Manager notified?</label>
							<div class="controls">
								<select name="notification" id="notification">
									<option value="yes">Yes</option>
									<option value="no">No</option>
									<option value="not">Not Applicable</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="documentation" class="control-label">Has the incident been documented in the patient's
								medical record?</label>
							<div class="controls">
								<select name="documentation" id="">
									<option value="yes">Yes</option>
									<option value="no">No</option>
									<option value="not">Not Applicable</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label for="additionalDetails" class="control-label">Please provide additional details on the
								outcome</label>
							<div class="controls">
								<textarea name="additionalDetails" id="additionalDetails"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label for="reporter" class="control-label">Reported By</label>
							<div class="controls">
								<input id="reporter" type="text" name="reporter" />
							</div>
						</div>
						<div class="control-group">
							<label for="witness" class="control-label">Witness</label>
							<div class="controls">
								<input id="witness" type="text" name="witness" />
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

