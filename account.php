<?php
//start session
session_start();
if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';
include'header.php';
$userid=$_SESSION['userid'];
?>
<html>
	<head>
		 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="jquery-1.9.0.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
 
<!-- Contain the script binding the form submit event -->
<script src="scripts.js"></script>

<?php
if (!isset($_SESSION['newfarm']))
{
	?> <?php
}
?>
	<head>
	
	<body>

        <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        My Account
        <small>About Me.</small>
      </h1>
        
   
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
    
    <div class="box box-solid bg-white-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
         ?><i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Farms/Fields
              </h3>
            </div>
            <div class="box-body">
  <?php
  //the details of the user
$user="SELECT * FROM user WHERE userid='$userid'";
$user2=mysql_query($user);
while ($user3=mysql_fetch_array($user2))
{
	echo"<p>Full name: $user3[name]</p>";
        echo"<p>Email Address: $user3[email]</p>";
        echo"<p>Telephone: $user3[telephone]</p>";
        echo"<p>Category: $user3[category]</p>";
        //get the county
        $thecounty="SELECT * FROM counties WHERE countyid='$user3[countyid]'";
        $thecounty2=mysql_query($thecounty);
        while ($thecounty3=mysql_fetch_array($thecounty2))
        {
            echo   "<p> County: $thecounty3[name]</p>";
        }
}

?>
  </div>
       <section class="content-header">
      <h1>
        Update my Account
        <small>My Details.</small>
      </h1>
        
   
    </section>
     <form method="post" action="editaccount.php">
         
  <div class="form-group">
    <label for="email">Full Name:</label>
    <input type="email" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
    <div class="form-group">
    <label for="email">Telephone:</label>
    <input type="email" class="form-control" id="telephone" name="telephone">
  </div>
    <button type="submit" class="btn btn-default">Submit</button>
     </form>
	<body>
</html>
