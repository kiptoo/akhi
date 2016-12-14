<?php
//start session
session_start();
if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';
$userid=$_SESSION['userid'];
error_reporting(E_ERROR | E_PARSE);
if ($_GET)
{
$userid=$_SESSION['userid'];
$start=$_GET['start'];
$end=$_GET['end'];


//explopde the variables
//$values = explode('/', $start);
//$start="$values[3]-$values[2]-$values[1]";
//echo $start;
//join
//explopde the variables
//$values = explode('/', $end);
//$end="$values[3]-$values[2]-$values[1]";
//echo $end;
//join
$fieldid="field$_GET[fieldid]";
//$fieldid= "field4"; 
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
?>while ($user3=mysql_fetch_array($user2))


<?php
//if the farmid is set, display the weather of that field today
if (isset($_GET['fieldid']))
{
    include("header.php"); 


// GET A TOKEN 
// First, you always need to generate a token. We built the GetOAuthToken 
// function (in header.php) to streamline that part


try{ 	//if there is a cURL problem and the API call can't execute at all, 
		//the function throws an exception which we can catch to fail gracefully.
		
	$access_token = GetOAuthToken($api_key,$api_secret); 

} catch(Exception $e){ 
	echo $e->getMessage(); // For this script we're just echoing the error and stopping the rest of the script. 
	exit();  			   // in your code you'll want to handle the error and recover appropriately.
} 



// MAKE API CALL 
// The next example gets the recent weather observations for the field location that you just created.
// Note we're creating the URL first, using the variables from the header.php file.
 
			
$observedWeatherURL = 'https://api.awhere.com/v2/weather/fields/'
						.$fieldid
						.'/observations/'
						.$start.','.$end;
echo $observedWeatherURL;
echo "yes";
try{ 

$observedWeatherResponse = makeAPICall('GET', 						//verb			 
									$observedWeatherURL,			//URL
									$access_token,					//Access Token
									$observedWeatherStatusCode,		//Status Code (returned from function)
									$observedWeatherResponseHeaders //We want to capture the response HTTP headers
									); 
} catch(Exception $e){ 
	echo $e->getMessage(); 
	exit();  			   
} 



if($observedWeatherStatusCode==200){  	// Code 200 means the request was successful
	
	echo '<p>You requested '.count($observedWeatherResponse->observations)." days of historical "
			."observed weather. The weather on "
			.date("F j, Y",strtotime($observedWeatherResponse->observations[0]->date))
			." was a high temperature of "
			.$observedWeatherResponse->observations[0]->temperatures->max."&deg;"
			.$observedWeatherResponse->observations[0]->temperatures->units
			." and a low of "
			.$observedWeatherResponse->observations[0]->temperatures->min."&deg;"
			.$observedWeatherResponse->observations[0]->temperatures->units
			."</p>"; 
			
	//echo '<p>Request:</p><pre>GET '.$observedWeatherURL.'</pre>'; 
	//echo '<p>Content-Range Header:</p>';
	
	// HTTP transactions return a lot of headers, but in this example we only want the Content-Range header
	// (the parseHTTPHeaders function returns just the headers you want)
	// This API returns a ranged result, which are paginated by default to 50 results per page. The 
	// Content-Range header shows which of the results are on this page (e.g., 1-10) and the total number
	// of results. It looks something like this: 
	// Content-Range: observations 0-5/5
	//echo "<pre>".parseHTTPHeaders($observedWeatherResponseHeaders,array('Content-Range'))."</pre>"; 
	//echo '<p>Response Body:</p>';
	//echo '<pre>'; 
	//echo stripslashes(json_encode($observedWeatherResponse,JSON_PRETTY_PRINT)); //Note: Stripslashes() is used just for prettier 
	//echo '</pre>'; 
         $data=json_encode($observedWeatherResponse);
         $result = json_decode($data,true);
        //  Scan through outer loop 
         ?>
           <!-- Content Wrapper. Contains page content -->
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
        foreach ($innerArray as $value) {
            if ($value['date']!=""){
            echo"<h4><u>Weather for $value[date]</u></h4>";
            //get the temperature
            echo"<p>";
            $x=0;
            foreach($value['temperatures'] as $temperature) {
                if ($x==0){
                    echo"Maximum Temperature: ";
                }
                if ($x==1){
                    echo"Minimum Temperature: ";
                }
                echo "$temperature ";
                
                $x++;
                }
                echo"</p>";                        

               
            
            //get the precipitation
                echo"<p>";
            $x=0;
            foreach($value['precipitation'] as $prec) {
                if ($x==0){
                    echo"Precipitation: ";
                }
                if ($x==1){
                    //echo"Minimum Temperature: ";
                }
                echo "$prec ";
                
                $x++;
                }
                echo"</p>";  
            
            //get the solar
               echo"<p>";
            $x=0;
                foreach($value['solar'] as $solar) {
                if ($x==0){
                    echo"Solar: ";
                }
                if ($x==1){
                    //echo"Minimum Temperature: ";
                }
                echo "$solar ";
                
                $x++;
                }
                echo"</p>";  
            //get the relative humidity
            echo"<p>";
            $x=0;
            foreach($value['relativeHumidity'] as $relativeHumidity) {
                if ($x==0){
                    echo"Relative Humidity: Max: ";
                }
                if ($x==1){
                    echo"min: ";
                }
                echo "$relativeHumidity ";
                
                $x++;
                }
                echo"</p>";            
            
            //get the wind
        }
        }
    }else{
        // one, two, three
        echo $innerArray;
    }
}
echo"</pre></small>";
        //output in the browser. Not needed normally.
	
	
} else { 							// If there is any other response code, there was a problem.
									// this code shows how to extract the two different error messages
									// You should not use the error messages themselves to drive behavior
									// (don't test them in if() or switch() statements)
									// use the status code for that. See developer.awhere.com/api/conventions 
									
	echo "<p>ERROR: ".$observedWeatherStatusCode." - ".$observedWeatherResponse->simpleMessage."<br>"; 
	echo $observedWeatherResponse->detailedMessage."</p>"; 
	
}
} ?>
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
