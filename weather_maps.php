<?php

session_start();

if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';

$userid=$_SESSION['userid'];
function get_fields($userid) {
   $farms=mysql_query("SELECT * FROM fields WHERE farmid='$userid'");
   $num_rows = mysql_num_rows($farms);
   while ($farms3=mysql_fetch_array($farms))
   {
       $username=$farms3['userame'];
   }
   echo $num_rows;
}

include'header.php'; 

?>

<script>
      function initMap() {
        var uluru = {lat: -1.392, lng: 36.8219};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: uluru
        });
   var infowindow = new google.maps.InfoWindow();
 $.ajax({
        url: 'ajax_fields.php',
        type: 'GET',
        data: { userid: '<?php echo $userid?>'} ,
        contentType: 'application/json; charset=utf-8',
        success: function (response) {
            
        //  alert(response);
          data = $.parseJSON(response);
                $.each(data, function(i, item) {
                   // alert(item.latitude);
                    
                    var marker = new google.maps.Marker({
                    position:new google.maps.LatLng(item.longitude,item.latitude),
                    map: map
                  });
                  google.maps.event.addListener(marker, 'click', (function(marker,i) {
                        return function() {
                          infowindow.setContent('<p style="color:black">'+item.name+'</p>');
                          infowindow.open(map, marker);
                        };
                      })(marker, item));
        
                });
      
           
        },
        error: function () {
            alert('error');
            //your error code
        }
    }); 
 
      
        
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAlsOh8z_Yro19dvMo3twx22KrZNTNR6E&region=KE&callback=initMap"
  async defer>
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1Past Weather Patterns>
        Weather Maps
        <small>Select a farm and select the date to view the weather map.</small>
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

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Farms/Fields
              </h3>
            </div>
            <div class="box-body">
              <?php
              //get the fields from the database
              $plantings="SELECT * FROM fields WHERE farmid='$userid'";
              $plantings2=mysql_query($plantings);
              while ($farms3=mysql_fetch_array($plantings2))
              //A link to view the plantings
              {
                  ?> <a href="weather_maps2.php?farmid=<?php echo "$farms3[fieldid]";?>"><?php echo "$farms3[name]";?></a><br/>

 <?php
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
