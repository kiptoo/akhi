<?php
//start session
session_start();
if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';

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
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="logo.png" height="40"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="#">My Account</a></li>
      <li><a href="fields.php">Fields and Planting</a></li>
      <li><a href="weather.php">Weather</a></li>
      <li><a href="forecast.php">Forecast</a></li>
      <li><a href="agronomics.php">Agronomics</a></li>
      <li><a href="models.php">Models</a></li>
      <li><a href="help.php">Help</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>

 <div class="row">
     <div class="col-sm-12"><h1>My Account</h1>
  <?php
  //the details of the user
$user="SELECT * FROM user WHERE userid='$userid'";
$user2=mysql_query($user);
while ($user3=mysql_fetch_array($user2))
{
	echo"<h3>Full name: $user3[name]</h3>";
        echo"<h3>Email Address: $user3[email]</h3>";
        echo"<h3>Telephone: $user3[telephone]</h3>";
        echo"<h3>Category: $user3[category]</h3>";
        //get the county
        $thecounty="SELECT * FROM counties WHERE countyid='$user3[countyid]'";
        $thecounty2=mysql_query($thecounty);
        while ($thecounty3=mysql_fetch_array($thecounty2))
        {
            echo   "<h3> County: $thecounty3[name]</h3>";
        }
}

?>
  </div>
     <h1>Update Account Details</h1>
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