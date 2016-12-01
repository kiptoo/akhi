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
$farms=mysql_query("SELECT * FROM fields WHERE farmid='$userid'");
?>
<script>


</script>
<style>

        
        .bigdrop.select2-container .select2-results {max-height: 300px;}
        .bigdrop .select2-results {max-height: 300px;}
      
    
</style>
<script>
    //maps
    var geocoder;
    var markers = [];
      function initMap() {
           geocoder = new google.maps.Geocoder();
        var uluru = {lat: -1.392, lng: 36.8219};
         var farmmap = new google.maps.Map(document.getElementById('farm-map'), {
          zoom: 9,
          center:uluru
          
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
               document.getElementById("lat").value =results[0].geometry.location.lat();
                document.getElementById("long").value = results[0].geometry.location.lng();
              
           }
           else{
                // alert("false");
                deleteMarkers();
                 addMarker(results[0].geometry.location);
                   document.getElementById("lat").value =results[0].geometry.location.lat();
                document.getElementById("long").value = results[0].geometry.location.lng();
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
      
      //begin selectors
  $('select').select2().on("change", function(e) {
         
          codeAddress();
        });
      }
      
 $(".js-data-example-ajax").select2({

    ajax: {
      url: 'https://api.github.com/search/repositories',
      dataType: 'json',
      quietMillis: 100,
      data: function(term) {
        return {
          q: term.term
        };
      },
      processResults: function(data) {
        return {
          results: $.map(data.items, function(item, index) {
            return {
              'id': item.id,
              'text': item.name
            };
          })
        };
      }
    }
  });
     //end of selectors
     
    
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAlsOh8z_Yro19dvMo3twx22KrZNTNR6E&callback=initMap"
  async defer>
</script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

    <select class="js-data-example-ajax">
  <option value="3620194" selected="selected">select2/select2</option>
</select>
    <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
<!--                <div class="pull-left box-tools">
                    <button type="button" class="btn btn-primary btn-default  pull-left" data-toggle="modal" id="create_field" data-target="#myModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-plus"></i> Add Farm</button>
               
              </div>-->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-primary btn-default  pull-right" data-toggle="modal" id="create_field" data-target="#plantingModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-plus"></i> Add Planting</button>
               
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
           <button type="submit" class="btn btn-primary">Add farm</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
       
    </div>
  </div>
</div>
                  <!-- Modal -->
<div class="modal fade " id="plantingModal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: black" id="myModalLabel">Create Farm</h4>
      </div>
      <div class="modal-body">
          <form method="post" action="newplanting.php">
			<div class="form-group">
       
                               
                                <label style="color:black" for="location">Choose Farm</label>
                                
                <div class="form-group">
              
                    <select id="select_county" name="fieldid"  class="form-control select2" style="width: 100%;z-index: 100">
                    <?php 
                    while ($farm=mysql_fetch_assoc($farms))
                        {
                           
                       echo " <option>$farm[name]</option>";

                         }
                ?>
                 
                </select>
              </div>
          
         
            <div class="form-group">
                <label style="color:black" for="crop">Choose Crop</label>
                    <div class="form-group">
        <label for="s2id_autogen6_search" class="select2-offscreen"></label>  
        <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder=""> 
                    </div> 
                <ul class="select2-results" role="listbox" id="select2-results-6"><li class="select2-no-results">Please enter 3 or more characters</li></ul>
                
            </div>
            <div class="form-group">
                <label style="color:black" for="date">Planting Date</label>
                <input type="date" class="form-control" id="plantingdate" name="plantingdate" required>
            </div>
            <div class="form-group">
                <label style="color:black" for="start">Yield Amount</label>
                <input type="text" class="form-control" id="ammount" name="ammount" required>
            </div>
            <div class="form-group">
                <label style="color:black" for="start">Yield units</label>
                <input type="text" class="form-control" id="units" name="units" required>
            </div>
            <div class="form-group">
                <label style="color:black" for="start">Harvest Date</label>
                <input type="date" class="form-control" id="hdate" name="harvestdate" required>
            </div>
           
           
        
                        </div>
			
		
          
      </div>
        
      <div class="modal-footer">
           <input type="submit" class="btn btn-default" value="Add Planting"/>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
        </form>
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
