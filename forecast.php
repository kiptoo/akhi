<?php
//start session
session_start();
if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';
$userid=$_SESSION['userid'];
if ($_GET)
{
$userid=$_SESSION['userid'];
$start=$_GET['start'];
$end=$_GET['end'];
//$fieldid=$_GET['fieldid'];
$fieldid="field$_GET[fieldid]";
}
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
      <li class="active"><a href="#">Forecasts</a></li>
      <li><a href="agronomics.php">Agronomics</a></li>
      <li><a href="models.php">Models</a></li>
      <li><a href="help.php">Help</a></li>
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
  <div class="col-sm-12"><h3>Forecasts</h3>
<?php
//if the farmid is set, display the weather of that field today
if (isset($_GET['fieldid']))
{
    include("header.php"); 


// GET A TOKEN 
// First, you always need to generate a token. We built the GetOAuthToken 
// function (in header.php) to streamline that part

echo "<h1>Get Access Token</h1>"; 

try{ 	//if there is a cURL problem and the API call can't execute at all, 
		//the function throws an exception which we can catch to fail gracefully.
		
	$access_token = GetOAuthToken($api_key,$api_secret); 

} catch(Exception $e){ 
	echo $e->getMessage(); // For this script we're just echoing the error and stopping the rest of the script. 
	exit();  			   // in your code you'll want to handle the error and recover appropriately.
} 

echo "<p>Access Token = $access_token</p>"; 


// MAKE API CALL 
// This example gets the forecast for the field location that you just created.
// Forecasts work similarly to observed weather, except that each day of data has its own "forecast" 
// object with anything from the hourly to the daily forecast, depending on what you ask for. 
// In this example we'll ask for the daily forecast.
// Note we're creating the URL first, using the variables from the header.php file.


echo "<hr><h1>Get Forecast</h1>"; 
		
			
$forecastURL = 'https://api.awhere.com/v2/weather/fields/'
						.$fieldid
						.'/forecasts/'
						.$start.','.$end
						."?blockSize=24"; //requesting that the forecast block be 24-hours long (daily)
										  //options are 1 (default), 2, 3, 4, 6, 8, 12, 24

try{ 

$forecastResponse = makeAPICall('GET', 								 
									$forecastURL,	
									$access_token,						
									$forecastStatusCode,
									$forecastResponseHeaders); 
} catch(Exception $e){ 
	echo $e->getMessage(); 
	exit();  			   
} 



if($forecastStatusCode==200){  	// Code 200 means the request was successful
	
	echo '<p>You requested '.count($forecastResponse->forecasts)." days of forecast."
			."The forecasted weather on "
			.date("F j, Y",strtotime($forecastResponse->forecasts[0]->date))
			." is a high temperature of "
			.$forecastResponse->forecasts[0]->forecast[0]->temperatures->max."&deg;" //because we requested daily data we know there is only one child of "forecast"
			.$forecastResponse->forecasts[0]->forecast[0]->temperatures->units
			." and a low of "
			.$forecastResponse->forecasts[0]->forecast[0]->temperatures->min."&deg;"
			.$forecastResponse->forecasts[0]->forecast[0]->temperatures->units
			."</p>"; 
	echo '<p>Request:</p><pre>GET '.$forecastURL.'</pre>'; 
	echo '<p>Content-Range Header:</p>';
	
	// HTTP transactions return a lot of headers, but in this example we only want the Content-Range header
	// (the parseHTTPHeaders function returns just the headers you want)
	// This API returns a ranged result, which are paginated by default to 50 results per page. The 
	// Content-Range header shows which of the results are on this page (e.g., 1-10) and the total number
	// of results. It looks something like this: 
	// Content-Range: observations 0-5/5
	echo "<pre>".parseHTTPHeaders($forecastResponseHeaders,array('Content-Range'))."</pre>"; 
	echo '<p>Response Body:</p>';
	echo '<pre>'; 
	echo stripslashes(json_encode($forecastResponse,JSON_PRETTY_PRINT)); //Note: Stripslashes() is used just for prettier 
	echo '</pre>'; 														 //output in the browser. Not needed normally.
	
	
} else { 							// If there is any other response code, there was a problem.
									// this code shows how to extract the two different error messages
									// You should not use the error messages themselves to drive behavior
									// (don't test them in if() or switch() statements)
									// use the status code for that. See developer.awhere.com/api/conventions 
									
	echo "<p>ERROR: ".$forecastStatusCode." - ".$forecastResponse->simpleMessage."<br>"; 
	echo $forecastResponse->detailedMessage."</p>"; 
	
}

}
 else {
    echo "<h3> Select a farm to view the forecasts </h3>";
    
      //get the farms
  $farms="SELECT * FROM fields WHERE farmid='$userid'";
  $farms2=mysql_query($farms);
  while ($farms3=mysql_fetch_array($farms2))
  {
  echo "<h3>$farms3[name]</h3>";
  ?>
  <a href="#" data-toggle="modal" data-target="#<?php echo "$farms3[fieldid]";?>">View forecasts</a>

  
  <!-- Modal -->
<div id="<?php echo "$farms3[fieldid]";?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View Weather</h4>
      </div>
      <div class="modal-body">
        <p>Enter the start and end date</p>
        <form method="GET" action="forecast.php">
            
            
            <div class="form-group">
                <label for="start">Start Date:</label>
                <input type="date" class="form-control" id="start" name="start">
            </div>
            <div class="form-group">
                <label for="start">End Date:</label>
                <input type="date" class="form-control" id="end" name="end">
            </div>
            <input type="hidden" name="fieldid" value="<?php echo "$farms3[fieldid]";?>"/>
            <input type="submit" class="btn btn-default" value="View"/>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
 <?php 
 
  }
 }  
?>
</div>
	<body>
</html>