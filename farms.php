<?php

session_start();
include'header.php';
if (!isset($_SESSION['userid']))
{
	header('Location: index.php');
}
require 'db.inc.php';

$userid=$_SESSION['userid'];
$county=mysql_query("SELECT * FROM counties");
?>

<script>
    var geocoder;
    var markers = [];
      function initMap() {
           geocoder = new google.maps.Geocoder();
        var uluru = {lat: -1.392, lng: 36.8219};
         var farmmap = new google.maps.Map(document.getElementById('farm-map'), {
          zoom: 9,
          center:uluru,
          
        });
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
                 marker.addListener('click', function() {
                        map.setZoom(8);
                        map.setCenter(marker.getPosition());
                       // map.setMapTypeId('satellite');
                      });
        
                });
      
           
        },
        error: function () {
            alert('error');
            //your error code
        }
    }); 
 
      $("#myModal").on("shown.bs.modal", function(e) {
         // alert("yes");
      google.maps.event.trigger(farmmap, "resize");
      google.maps.event.addListenerOnce(farmmap, 'idle', codeAddress);
      return farmmap.setCenter(markerLatLng);
    });
         function codeAddress() {
    var county= $(".select2").val();
    
    // Define address to center map to
    var address = county+' '+'county,kenya';
    
    geocoder.geocode({
        'address': address
    }, function (results, status) {
        
        if (status === google.maps.GeocoderStatus.OK) {
            
            // Center map on location
            farmmap.setCenter(results[0].geometry.location);
            
              //Add marker on location
             
           if(jQuery.isEmptyObject(markers)===true) {
              //  alert("true");
              addMarker(results[0].geometry.location);
              
              
           }
           else{
                // alert("false");
                deleteMarkers();
                 addMarker(results[0].geometry.location);
           }
           
            
        } else {
            
            alert("Geocode was not successful for the following reason: " + status);
        }
    });
}
  function addMarker(location) {
     
        var marker = new google.maps.Marker({
          draggable: true,          
          position: location,
          map: farmmap,
          title: "Farm location"
        });
         if(jQuery.isEmptyObject(markers)===true) {
               
            } 
           google.maps.event.addListener(marker, 'dragend', function(event) {
                document.getElementById("lat").value = event.latLng.lat();
                document.getElementById("long").value = event.latLng.lng();
              });

              google.maps.event.addListener(farmmap, 'click', function(event) {
                document.getElementById("lat").value = event.latLng.lat();
                document.getElementById("long").value = event.latLng.lng();
                marker.setPosition(event.latLng);
              });
              
                markers.push(marker);
      }
        function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }
        function clearMarkers() {
        setMapOnAll(null);
      }
       function deleteMarkers() {
        clearMarkers();
        markers = [];
      }
  $('select').select2().on("change", function(e) {
         
          codeAddress();
        });
      }
     
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAlsOh8z_Yro19dvMo3twx22KrZNTNR6E&callback=initMap"
  async defer>
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

    
    <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
                <div class="pull-left box-tools">
                    <button type="button" class="btn btn-primary btn-default  pull-left" data-toggle="modal" id="create_field" data-target="#myModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-plus"></i> Add Farm</button>
               
              </div>
           

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Farms/Fields
              </h3>
            </div>
            <div class="box-body">
              <div id="map" style="height: 650px; width: 100%;"></div>
            </div>
          <!-- Modal -->
<div class="modal fade " id="myModal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: black" id="myModalLabel">Create Farm</h4>
      </div>
      <div class="modal-body">
          <form method="post" action="newfarm.php">
			<div class="form-group">
       
                                <label style="color:black" for="location">Name of farm</label>
				<input type="text" class="form-control" id="name" name="name">
                                <label style="color:black" for="location">County</label>
                                
                <div class="form-group">
              
                    <select id="select_county" class="form-control select2" style="width: 100%;z-index: 100">
                    <?php 
                    while ($farms3=mysql_fetch_assoc($county))
                        {
                           
                       echo " <option>$farms3[name]</option>";

                         }
                ?>
                 
                </select>
              </div>
          
<!--				<input type="text" class="form-control" id="name" name="name">-->
				
				<input type="text" class="form-control" id="long" name="long">
				
				<input type="text" class="form-control" id="lat" name="lat">
				<label style="color:black" for="latitude">Acres</label>
                                <input type="text" class="form-control" id="acres" name="acres"></br>
                                <label class="label-warning" for="latitude">Please choose the location of the farm on the map</label>
			</div>
			
		</form>
          <div id="farm-map" style="height: 250px; width: 100%;"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add farm</button>
      </div>
    </div>
  </div>
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
<!-- Select2 -->
<script src="../../plugins/select2/select2.full.min.js"></script>
<script> 

 

</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
<?php
include'footer.php';
?>
</body>
</html>
