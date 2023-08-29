<?php include_once 'header.php';?>

    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title"><span class="icon"><i class="icon-tasks"></i></span>
          <h5>Department Settings</h5>
          <div class="buttons"><a href="#" class="btn btn-mini btn-success"><i class="icon-refresh"></i> Update stats</a></div>
        </div>
        <div class="wrapper">
        <h2>Please fill this form to create a new Department.</h2>
        
        <form action="" method="post">
            <div class="form-group">
                <label>Department Name</label>
                <input type="text" name="deptname" class="form-control ">
                
            </div>    
            <div class="form-group">
            <label>Department Description</label>
                <input type="text" name="deptname" class="form-control ">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
                
            </div>
            
        </form>
    </div>



        <?php include_once 'footer.php';?>