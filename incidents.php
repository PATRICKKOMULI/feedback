<?php include_once 'header.php';?>

    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>System Settings</h5>
          <div class="buttons"><a href="incident.php" class="btn btn-mini btn-success"><i class="icon-refresh"></i> Add incident</a></div>
        </div>

        <br /><br />
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="alert-info">
          <tr>
            <th>Name</th>
            <th>Incident related to</th>
            <th>Ward/ Dept</th>
            <th>Location</th>
            <th>Description</th>
            <th>Actions and outcome</th>
            <th>Contributing factors</th>
            <th>Prevention</th>
            <th>Senior notified</th>
            <th>Documented incident</th>
            <th>Additional Details</th>
            <th>Reporter</th>
            <th>Witness</th>            
          </tr>
        </thead>
        <tbody>
          <?php include 'incidentfetch.php' ?>
        </tbody>
      </table>
    </div>



        <?php include_once 'footer.php';?>