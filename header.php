<!DOCTYPE html>
<html>
<head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AGRINFO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
   <!-- Date Picker -->
   <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

 
 
  <!-- FastClick -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <!-- Select2 -->
<script src="plugins/select2/select2.min.js"></script>
<!--<script src="plugins/jQueryUI/jquery-ui.min.js"></script>-->
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
       <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle">-->
      <span class="logo-lg"><b>AGRINFO</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">
                  
                  <?php
                  //get the username
                  $theuser="SELECT * FROM user WHERE userid='$_SESSION[userid]'";
                  $theuser2=mysql_query($theuser);
                  while ($theuser3=mysql_fetch_array($theuser2))
                  //display it
                  {
                      echo $theuser3['name'];
                      $thename=$theuser3['name'];
                  
                  
                  ?>
              </span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 <?php echo $thename; ?>
                 
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="account.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
                  <?php } ?>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="account.php" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $thename; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
          <li class="active"><a href="dashboard.php"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
           <li class="header">SET UP</li>
          
       
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="farms.php"><i class="fa fa-map-marker"></i> <span>Fields</span></a></li>
        <li><a href="plantings.php"><i class="fa fa-plus"></i> <span>Plantings</span></a></li>
        <li class="header">WEATHER</li>
          <li><a href="weather.php"><i class="fa fa-clock-o"></i> <span>Past Conditions</span></a></li>
           <li><a href="forecasts.php"><i class="fa fa-bookmark-o"></i> <span>Forecasts</span></a></li>
             <li><a href="weather_maps.php"><i class="fa fa-map-marker"></i> <span>Weather Maps</span></a></li>
             
         <li class="header">AGRONOMICS</li>
         <li><a href="agronomics.php"><i class="fa fa-link"></i> <span>Values & Accumulations</span></a></li>
         <li><a href="orms.php"><i class="fa fa-link"></i> <span>Norms</span></a></li>
         
         
          <li class="header">MODELS</li>
          <li><a href="models.php"><i class="fa fa-link"></i> <span>Get Models</span></a></li>
          
            <li class="header">REPORTS</li>
            
          <li class="header">HELP AND SUPPORT</li>
          <li><a href="help.php"><i class="fa fa-link"></i> <span>Get Help</span></a></li>
            
<!--        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Weather</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Daily Observations</a></li>
            <li><a href="#">Forecasts</a></li>
             <li><a href="#">Current Conditions</a></li>
              <li><a href="#">Weather Maps</a></li>
          </ul>
        </li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
<?php

/* **************************************************************************
 * First let's set up some test variables. You'll need to put your API Key 
 * and Secret (also called Consumer Key and Secret) in the first two variables. 
 * If you don't have your credentials yet, follow the steps at 
 * developer.awhere.com/api/get-started
 * **************************************************************************
 */

$api_key 		= "fLNjnYsj014pIDyqAtySaZJ1jF6WbBJN";
$api_secret 	= "NiotSoT66krmrllc";


// These variables are used for creating data later in the sample script. 

$new_field_id 			;
$new_field_name 		; 
$new_field_farm_id 		= 'F-1234-14-B'; 
$new_field_latitude 	= 39.8282;
$new_field_longitude 	= -98.5795; 
$new_field_acres 		= 120; 

$observed_weather_start = "2016-07-24";
$observed_weather_end = "2016-07-31"; 

$forecast_weather_start = date("Y-m-d"); 
$forecast_weather_end = date("Y-m-d",strtotime("+ 3 days")); 




/* **************************************************************************
 * These next two functions are used to streamline the actual work of 
 * making an API call in PHP. Review makeAPICall() to see how to configure
 * cURL commands in PHP. This approach is compatible with all recent versions 
 * of PHP and doesn't require any special libraries.
 * **************************************************************************
 */

// MAKE API CALL
// Configures and uses cURL to open an HTTP transaction with the URL provided 
// and then converts the response to a PHP object. 
// If there is a problem with cURL and the API call can't execute, this function
// throws an Exception
//
// Function Parameters: 
// $verb = GET | POST | PATCH | PUT | DELETE
// $url = fully qualified URL (including domain)
// $token = the previously generated OAuth Access Token (see below) 
// $responseStatusCode = a variable to return the HTTP Status Code in
// $body = a payload to send with POST, PATCH, and PUT calls 
// $headers = an array of additional headers (you don't need to include Authorization here)

function makeAPICall($verb,$url,$token,&$responseStatusCode=null,&$responseHeaders=null,$body=null,$headers=null){ 
	
	if($headers!==null){ 
		$headers[] = "Authorization: Bearer $token"; 
	} else { 
		$headers = array("Authorization: Bearer $token"); 
	} 
	
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $verb);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true);

	if(($verb=='POST' || $verb=='PUT' || $verb=='PATCH') && !is_null($body))
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
											
	// Normally you should not use these cURL options. They disable the SSL Cert 
	// verification. But many local development environments are not built with
	// the standard chain authority certificates, and so cannot verify the Cert.
	// If you have troubles making cURL requests, you can uncomment the next two
	// lines, but don't put them into production. 
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
	$response = curl_exec($ch);
	if($response === false){
		throw new Exception('cURL Transport Error (HTTP request failed): '.curl_error($ch));
		$responseStatusCode = false; 
	} else { 
		$info = curl_getinfo($ch);
		$responseStatusCode = $info['http_code']; 
		list($responseHeaders, $body) = explode("\r\n\r\n", $response, 2); 
		$result = json_decode($body); 
	}	
	curl_close($ch);
	
	return $result;
} 

// GET OAUTH TOKEN 
// Uses the Token API to retrieve an access token. 
// Note: the token will expire after an hour. This API returns an 'expires_in' property
//       with the number of seconds until it expires, but that is not captured in this example. 
//       API calls with an expired token also return 401 Unauthorized HTTP error. 
// If there is a problem with cURL and the API call can't execute, this function
// throws an Exception
//
// Function Parameters: 
// $api_key = the API Key 
// $api_secret = your specific API Secret

function GetOAuthToken($api_key,$api_secret){ 
	
	$ch = curl_init("https://api.awhere.com/oauth/token");
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
												"Content-Type: application/x-www-form-urlencoded",
												"Authorization: Basic ".base64_encode($api_key.":".$api_secret)
											));


	// Normally you should not use these cURL options. They disable the SSL Cert 
	// verification. But many local development environments are not built with
	// the standard chain authority certificates, and so cannot verify the Cert.
	// If you have troubles making cURL requests, you can uncomment the next two
	// lines, but don't put them into production. 
	 curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
	$response = curl_exec($ch);
	if($response === false){
		throw new Exception('cURL Transport Error (HTTP request failed): '.curl_error($ch));
		$responseStatusCode = false; 
	} else { 
		$info = curl_getinfo($ch);
		$responseStatusCode = $info['http_code']; 
		$result = json_decode($response); 
	}	
	curl_close($ch);
	
	return $result->access_token;
}


// Parse HTTP Headers
// This function takes the raw HTTP response headers and parses them to return
// just the ones that are relevant or wanted. 
//
// Function Parameters:
// $raw = the raw string headers
// $desired = array of header names that you want returned. 
// $returnType = 'string' | 'array'

function parseHTTPHeaders($raw,$desired,$returnType = 'string'){ 
	$listed = explode("\n",$raw); 
	$parsed = array(); 
	$return = array(); 
	foreach($listed as $line){ 
		if(substr($line,0,4)=='HTTP') continue; 
		list($key,$value) = explode(': ',$line); 
		$parsed[$key] = $value; 
	} 
	
	foreach($desired as $header){ 
		$return[$header] = (array_key_exists($header,$parsed))?$parsed[$header]:null; 
	} 
	
	if($returnType=='array'){ 
		return $return; 
	} else { 
		$output = ''; 
		foreach($return as $header=>$value){ 
			$output.=$header.': '.$value."\n"; 
		} 
		return trim($output); 
	} 
	
} 


