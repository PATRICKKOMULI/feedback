<?php include_once 'header.php'; ?>

<div class="row-fluid">
  <div class="widget-box">
    <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
      <h5>Complaints</h5>
      <div class="buttons"><a href="complaintform.php" class="btn btn-mini btn-success"><i class="icon-refresh"></i> Add complaint</a></div>
    </div>

    <hr style="border-top:1px dotted #000;" />
    
    <br /><br />
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="alert-info">
          <tr>
            <th>Date</th>
            <th>Doctors</th>
            <th>Admission TAT</th>
            <th>Nursing</th>
            <th>Medical Outcome</th>
            <th>Communication</th>
            <th>Pain Management</th>
            <th>Cafeteria</th>
            <th>Cleanliness</th>
            <th>Security</th>
            <th>Billing</th>
            <th>Patient Beds</th>
            <th>Noise Levels</th>
            <th>Room Ambiance</th>
            <th>Amenities</th>
            <th>Discharge TAT</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'complaintfetch.php' ?>
        </tbody>
      </table>
    </div>



    <?php include_once 'footer.php'; ?>