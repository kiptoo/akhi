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
      <li class="active"><a href="#">Fields and Planting</a></li>
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
  <div class="col-sm-12"><h3>Fields and Plantings</h3>
<?php
  //get the farms
  $farms="SELECT * FROM fields WHERE farmid='$userid'";
  $farms2=mysql_query($farms);
  while ($farms3=mysql_fetch_array($farms2))
  {
  echo "<h3>$farms3[name]</h3>";
  ?>
  <a href="#" data-toggle="modal" data-target="#<?php echo "$farms3[fieldid]";?>">Add Planting</a>
  <a href="#" data-toggle="modal" data-target="#<?php echo "planting$farms3[fieldid]";?>">View Plantings</a>
  
  <!-- Modal -->
<div id="<?php echo "$farms3[fieldid]";?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Planting</h4>
      </div>
      <div class="modal-body">
        <p>Enter the planting details for this field</p>
        <form method="GET" action="weather.php">
            
            <form method="post" action="newplanting">
            <div class="form-group">
                <label for="crop">Crop:</label>
                <input type="text" class="form-control" id="date" name="crop">
            </div>
            <div class="form-group">
                <label for="date">Planting Date:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="start">Yield Amount:</label>
                <input type="text" class="form-control" id="yield" name="yield">
            </div>
            <div class="form-group">
                <label for="start">Yield units:</label>
                <input type="text" class="form-control" id="yunits" name="yunits">
            </div>
            <div class="form-group">
                <label for="start">Projected Harvest Date:</label>
                <input type="date" class="form-control" id="end" name="projectd_date">
            </div>
            <div class="form-group">
                <label for="start">Yield Amount:</label>
                <input type="text" class="form-control" id="projected ammount" name="projected_ammount">
            </div>
            <div class="form-group">
                <label for="start">Yield Units:</label>
                <input type="date" class="form-control" id="unit" name="unit">
            </div>
            <div class="form-group">
                <label for="start">Harvest Date:</label>
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
   //get the plantings in this field
   
  }
  ?>
  </div>

</div>
            
  
</div>
	<body>
</html>