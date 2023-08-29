<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php include_once 'header.php';?>

<div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>Client's Feedback</h5>
          <div class="buttons"><a href="#" class="btn btn-mini btn-success"><i class="icon-refresh"></i> Update stats</a></div>
        </div>

		<hr style="border-top:1px dotted #000;"/>
		<form class="form-inline" method="POST" action="">
			</form>
		<br /><br />
		<div class="table-responsive">	
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Waiting</th>
						<th>Quality</th>
						<th>Atmosphere</th>
						<th>Experience</th>
						<th>Scale</th>
						<th>Recommendation</th>
					</tr>
				</thead>
				<tbody>
					<?php include'range.php'?>	
				</tbody>
			</table>
		</div>	
	</div>
</body>
<?php include_once 'footer.php';?>
</html>