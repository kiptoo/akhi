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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASp_3eeyBCPGfCl1XAlmPCSOCgF7ebjqI&callback=gmap"></script>
<script type="text/javascript"> 
  var map;
        function initialize() {
            var myLatlng = new google.maps.LatLng(24.18061975930,79.36565089010);
            var myOptions = {
                zoom:7,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(document.getElementById("gmap"), myOptions);
            // marker refers to a global variable
            marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });

            google.maps.event.addListener(map, "click", function(event) {
                // get lat/lon of click
                var clickLat = event.latLng.lat();
                var clickLon = event.latLng.lng();

                // show in input box
                document.getElementById("lat").value = clickLat.toFixed(5);
                document.getElementById("lon").value = clickLon.toFixed(5);

                  var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(clickLat,clickLon),
                        map: map
                     });
            });
    }   

    window.onload = function () { initialize() };
</script>

 
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
      <li class="active"><a href="#">Home</a></li>
      <li><a href="account.php">My Account</a></li>
      <li><a href="fields.php">Fields and Planting</a></li>
      <li><a href="forecast.php">Forecasts</a></li>
      <li><a href="weather.php">Weather</a></li>
      <li><a href="agronomics.php">Agronomics</a></li>
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
	echo "<h3>Welcome $user3[name]</h3>";
}
?>
  </div>
  <div class="col-sm-8"><h3>My Farms</h3>
  <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#newfarm">Register a new farm</button>

<!-- Modal -->
<div id="newfarm" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register a new farm</h4>
      </div>
      <div class="modal-body">
         <form method="post" action="newfarm.php">
			<div class="form-group">
				<label for="location">Name of farm:</label>
				<input type="text" class="form-control" id="name" name="name">
				<label for="longitude">Longitude:</label>
				<input type="text" class="form-control" id="long" name="long">
				<label for="latitude">Latitude:</label>
				<input type="text" class="form-control" id="lat" name="lat">
				<label for="latitude">Acres:</label>
				<input type="text" class="form-control" id="acres" name="acres">
			</div>
			<button type="submit" class="btn btn-default">Add farm</button>
		</form>
          <div id="gmap"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  
 <br/><hr/>
  <?php
  //get the farms
  $farms="SELECT * FROM fields WHERE farmid='$userid'";
  $farms2=mysql_query($farms);
  while ($farms3=mysql_fetch_array($farms2))
  {
  echo "<h3>$farms3[name]</h3>";
  ?>
 <a href="fields.php?fieldid=<?php echo "$farms3[fieldid]";?>">Add Planting</a> | <a href="#" data-toggle="modal" data-target="#<?php echo "$farms3[fieldid]";?>">View  past weather patterns</a> | <a href="agronomics.php?fieldid=<?php echo "$farms3[fieldid]";?>">View Agronomics</a> |
  <a href="models.php?fieldid=<?php echo "$farms3[fieldid]";?>">View Models</a>
 
  
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
        <form method="GET" action="weather.php">
            
            
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
  
  
  
  
  
  
  
  
  
  
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASp_3eeyBCPGfCl1XAlmPCSOCgF7ebjqI&callback=<?php echo "function$farms3[fieldid]";?>"></script>
 <script>   
   function <?php echo "function$farms3[fieldid]";?>() {
   var map = new google.maps.Map(document.getElementById('<?php echo "farm$farms3[fieldid]";?>'), {
    zoom: 2,
    center: {
      lat: parseFloat('<?php echo $farms3['latitude'];?>'),
      lng: parseFloat('<?php echo $farms3['longitude'];?>')
    }
  });

  marker = new google.maps.Marker({
    map: map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: {
      lat: parseFloat('<?php echo $farms3['longitude'];?>'),
      lng: parseFloat('<?php echo $farms3['latitude'];?>')
    }
  });
  marker.addListener('click', toggleBounce);
}
google.maps.event.addDomListener(window, "load", <?php echo "function$farms3[fieldid]";?>);   
  </script>
  
  <style>
      #<?php echo "farm$farms3[fieldid]";?> {
  height: 100%;
  width: 100%;
  margin: 0px;
  padding: 0px
}
      
      
  </style>
  <div id="<?php echo "farm$farms3[fieldid]";?>"></div>
   <?php
  }
  ?>
  </div>

</div>
            
            
	<body>
</html>