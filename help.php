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
      <li><a href="account.php">My Account</a></li>
      <li><a href="fields.php">Fields and Planting</a></li>
      <li><a href="weather.php">Weather</a></li>
      <li><a href="forecast.php">Weather</a></li>
      <li><a href="agronomics.php">Agronomics</a></li>
      <li><a href="models.php">Models</a></li>
      <li class="active"><a href="#">Help</a></li>
      <li><a href="logout.php">Log Out</a></li>
    </ul>
  </div>
</nav>

 <div class="row">
  <div class="col-sm-3">
  <?php
  //the details of the user
$user="SELECT * FROM user WHERE userid='$_SESSION[userid]'";
$user2=mysql_query($user);
while ($user3=mysql_fetch_array($user2))
{
	/////////////////////////
}
?>
  </div>
  <div class="col-sm-12"><h3>Help and support</h3>
      <h4>About Agriinfo</h4>
      <h4>Creating an Account</h4>
      <h4>Adding fields</h4>
      <h4>Creating Plantings</h4>
      <h4>Viewing past weather patterns</h4>
      <h4>Viewing weather projections</h4>
      
      
</div>
	<body>
</html>