<?php
//start session
session_start();
if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';
error_reporting(E_ERROR | E_PARSE);
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


  <?php
  //the details of the user
$user="SELECT * FROM user WHERE userid='$_SESSION[userid]'";
$user2=mysql_query($user);
while ($user3=mysql_fetch_array($user2))
{
	/////////////////////////
}
?>

<?php
//if the farmid is set, display the weather of that field today
if (isset($_GET['fieldid']))
{
    include("header.php"); 


// GET A TOKEN 
// First, you always need to generate a token. We built the GetOAuthToken 
// function (in header.php) to streamline that part

//echo "<h1>Get Access Token</h1>"; 

try{ 	//if there is a cURL problem and the API call can't execute at all, 
		//the function throws an exception which we can catch to fail gracefully.
		
	$access_token = GetOAuthToken($api_key,$api_secret); 

} catch(Exception $e){ 
	echo $e->getMessage(); // For this script we're just echoing the error and stopping the rest of the script. 
	exit();  			   // in your code you'll want to handle the error and recover appropriately.
} 

//echo "<p>Access Token = $access_token</p>"; 


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
	//echo '<p>Request:</p><pre>GET '.$forecastURL.'</pre>'; 
	//echo '<p>Content-Range Header:</p>';
	
	// HTTP transactions return a lot of headers, but in this example we only want the Content-Range header
	// (the parseHTTPHeaders function returns just the headers you want)
	// This API returns a ranged result, which are paginated by default to 50 results per page. The 
	// Content-Range header shows which of the results are on this page (e.g., 1-10) and the total number
	// of results. It looks something like this: 
	// Content-Range: observations 0-5/5
	//echo "<pre>".parseHTTPHeaders($forecastResponseHeaders,array('Content-Range'))."</pre>"; 
	//echo '<p>Response Body:</p>';
	//echo '<pre>'; 
	//echo stripslashes(json_encode($forecastResponse,JSON_PRETTY_PRINT)); //Note: Stripslashes() is used just for prettier 
	//echo '</pre>'; 														 //output in the browser. Not needed normally.
	
        
        
        $data=json_encode($forecastResponse);
         $result = json_decode($data,true);
         ?>
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Past Weather Patterns
        <small>Past reported weather.</small>
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
            <div class="box-body"><?php
foreach ($result as $innerArray) {
    //  Check type
    if (is_array($innerArray)){
        //  Scan through inner loop
        $x=0;
        foreach ($innerArray as $value) {
            if ($value['date']!=""){
            echo"<h4><u>Forecast for $value[date]</u></h4>";
            //get the temperature
            echo"<p>";
            
            foreach($value['forecast'] as $forecast) {
                
                    echo"Start time: $forecast[startTime]<br/>";
                
                    echo"End time: $forecast[endTime]<br/>";
                    
                    echo"Condition: $forecast[conditionsText]<br/>";
                    
                    $x=0;
            foreach($forecast['temperatures'] as $temperature) {
                if ($x==0){
                    echo"Maximum Temperature: ";
                }
                if ($x==1){
                    echo"Minimum Temperature: ";
                }
                echo "$temperature ";
                
                $x++;
                }
                echo"<br/>";       
                
                //get the precipitation
                
            $x=0;
            foreach($forecast['precipitation'] as $prec) {
                if ($x==0){
                    echo"Precipitation: ";
                }
                if ($x==1){
                    //echo"Minimum Temperature: ";
                }
                echo "$prec ";
                
                $x++;
                }
                echo"<br/>";  
                
             $x=0;
            foreach($forecast['precipitation'] as $prec) {
                if ($x==0){
                    echo"Precipitation Chance: ";
                }
                if ($x==1){
                    echo"Ammount ";
                }
                echo "$prec ";
                
                $x++;
                }
                echo"<br/>";
                $x=0;
                foreach($forecast['sky'] as $solar) {
                if ($x==0){
                    echo"Cloud Cover: ";
                }
                if ($x==1){
                    echo"Sunshine ";
                }
                echo "$solar ";
                
                $x++;
                }
                echo"<br/>";
                
                
               $x=0;
            foreach($forecast['solar'] as $solar) {
                if ($x==0){
                    echo"Solar: : ";
                }
                if ($x==1){
                    //echo"Sunshine ";
                }
                echo "$solar ";
                
                $x++;
                }
                echo"<br/>";
                $x=0;
                foreach($forecast['relativeHumidity'] as $rel) {
                if ($x==0){
                    echo"Relative Humidity Average : ";
                }
                if ($x==1){
                    echo"Min: ";
                }
                if ($x==2){
                    echo"Max: ";
                }
                echo "$rel ";
                
                $x++;
                }
                echo"<br/>";
                
                $x=0;
                foreach($forecast['wind'] as $wind) {
                if ($x==0){
                    echo"Wind Average : ";
                }
                if ($x==1){
                    echo"Min: ";
                }
                if ($x==2){
                    echo"Max: ";
                }
                echo "$wind ";
                
                $x++;
                }
                echo"<br/>";
                
                $x=0;
                foreach($forecast['relativeHumidity'] as $rel) {
                if ($x==0){
                    echo"Dew Point : ";
                }
                if ($x==1){
                    //echo"Min: ";
                }
                
                echo "$rel ";
                
                $x++;
                }
                echo"<br/>";
                
                
                }
                
            
            }
        }echo "</p>";
    }
}
                }
               
     
       else { 							// If there is any other response code, there was a problem.
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
          
          </div>
          <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
     
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Agriinfo</a>.</strong> All rights reserved.
  </footer>



<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<?php
include'footer.php';
?>
</body>
</html>
