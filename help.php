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
      <li><a href="forecast.php">Forecasts</a></li>
      <li><a href="agronomics.php">Agronomics</a></li>
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
      <p>This is a web and SMS based system that assists farmers to get information on weather forecasts, past weather patterns and argonomics. it then delivers this information through a web portal and SMS</p>
      <hr/>
      <h4>Creating an Account</h4>
      <p>To create an account, simply visit our website and fill in the form at the homepage. If your credentials are correct, you will be successful and you will be able to gain access to the system.</p>
      <p>Alternatively, you can send an SMS in the format"*farmer*county*location#" to our number and you will be prompted on what to do next.</p>
      <hr/>
      <h4>Adding fields</h4>
      <p>To add a new field,go to the homepage, Select the create a new field button. Put the name of the field and select the location of the field from the map provided. You would have successfully created the field and there is ni restriction on the number of fields you can create.</p>
      <hr/>
      <h4>Creating Plantings</h4>
      <p>To create a planting, select the field from the homepage or from the plantings tab. Click on the create a new planting link and fill in the form that is displayed.</p>
      <hr/>
      <h4>Viewing past weather patterns</h4>
      <p>To view past weather patterns, click on the weather tab and then select the farm from the list. Put the start and end date then click view. A page containing the weather information that you requested will be displayed if they are of valid format.</p>
      <p>you can also view past weather patterns by visiting the homepage, looking for the field name and select view past weather patterns. You will be prompted to enter the start and end date.</p>
      <hr/>
      <h4>Viewing weather projections</h4>
       <p>To view weather forecasts, click on the forecast tab and then select the farm from the list. Put the start and end date then click view. A page containing the weather information that you requested will be displayed if they are of valid format.</p>
      <p>you can also view projections by visiting the homepage, looking for the field name and select view weather forecasts. You will be prompted to enter the start and end date.</p>
      <hr/>
      <h4>Viewing agronomics</h4>
       <p>To view agronomics, click on the agronomics tab and then select the farm from the list. Put the start and end date then click view. A page containing the weather information that you requested will be displayed if they are of valid format.</p>
      <p>you can also view projections by visiting the homepage, looking for the field name and select view agronomics. You will be prompted to enter the start and end date.</p>
      
</div>
	<body>
</html>