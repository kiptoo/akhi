<?php

session_start();
include'header.php';
if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';

$userid=$_SESSION['userid'];
function get_fields($userid) {
   $farms=mysql_query("SELECT * FROM fields WHERE farmid='$userid'");
   $num_rows = mysql_num_rows($farms);
   
   echo $num_rows;
}

 

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
                          infowindow.setContent("kip");
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
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
        
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
                <h3 id="fields"><?php get_fields($userid) ?></h3>

              <p>FIELDS</p>
            </div>
            <div class="icon">
              <i class="ion ion-clipboard"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    <div class="box box-solid bg-light-blue-gradient">
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
              <div id="map" style="height: 650px; width: 100%;"></div>
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
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
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
