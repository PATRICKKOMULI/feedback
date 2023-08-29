<!DOCTYPE html>
<html lang="en">
<head>
<title>Nakasero Feedback</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
</head>
<body>

<!--Header-part-->
<header>
<div class="header">
  <h3>Nakasero Hospital</h3>
</div>
<!--close-Header-part--> 



<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="" ><a title="" href="reset-password.php"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
    <li class=" dropdown" id="settings_menu"><a href="#" data-toggle="dropdown" data-target="#settings_menu" class="dropdown-toggle"><i class="icon icon-cog"></i> <span class="text">Settings</span> </span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="department.php">Departments</a></li>
        <li><a class="sInbox" title="" href="complaintmgt.php">complaint Types</a></li>
        <li><a class="sOutbox" title="" href="complementmgt.php">Complement Types</a></li>
        <li><a class="sOutbox" title="" href="register.php">Users</a></li>
        <li><a class="sTrash" title="" href="settings.php">System settings</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
</header>


<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-Header-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a><ul>
    <li class="active"><a href="dashboard.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="charts.php"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="widgets.php"><i class="icon icon-inbox"></i> <span>Statistics</span></a> </li>
    <li><a href="tables.php"><i class="icon icon-th"></i> <span>To Do List</span></a></li>
    
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div class="container-fluid">
   	<div class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="Dashboard.php"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li> <a href="data.php"> <i class="icon-book"></i> Feedback</a> </li>
          <li> <a href="Complaints.php"> <i class="icon-web"></i> Complaints </a> </li>
          <li> <a href="complement.php"> <i class="icon-like"></i> Complements </a> </li>
          <li> <a href="incidents.php"> <i class="icon-calendar"></i> Manage Incidents </a> </li>
          <li> <a href="reports.php"> <i class="icon-people"></i>Reports </a> </li>
          
        </ul>
   </div>
   