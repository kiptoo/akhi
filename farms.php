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
$(document).ready(function() {
 


    
  });

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
  $('#select_county').select2().on("change", function(e) {
         
          codeAddress();
        });
        
         $('#select_farm').select2().on("change", function(e) {
         
         
        });  
        
        function formatcrop (crop) {
         
      if (crop.loading) return crop.text;
     var markup = " <div class='box box-widget widget-user-2'>"+
              "<div class='widget-user-header bg-yellow'>"+            
              "<h3 class='widget-user-username'>"+crop.id+"</h3>"+
              "<h5 class=2'widget-user-desc'>"+crop.variety+"</h5>"+"</div>"+
            
           " <div class='box-footer no-padding'>"+
              "<ul class='nav nav-stacked'>"+
               " <li><a href='#'>Crop Name<span class='pull-right badge bg-blue'>"+crop.name+"</span></a></li>"+
                "<li><a href='#'>Variety<span class='pull-right badge bg-aqua'>" + crop.variety+ "</span></a></li>"+
               " <li><a href='#'>Type<span class='pull-right badge bg-green'>" + crop.type+ "</span></a></li>"+
                "<li><a href='#'>isdefaultCrop<span class='pull-right badge bg-red'>" + crop.isDefaultForCrop +"</span></a></li>"+
             " </ul>"+
            "</div>"+
         " </div>";
//      var markup = "<div class='select2-result-repository clearfix'>" +
//        "<div class='select2-result-repository__meta'>" +
//          "<div class='select2-result-repository__title'>" + crop.id + "</div>";
//
//   
//
//      markup += "<div class='select2-result-repository__statistics'>" +
//        "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> isDefaultCrop :" + crop.isDefaultForCrop +
//+ "</div>" +
//        "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> Variety: " + crop.variety+ "</div>" +
//        "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> Crop Name: " + crop.name+ "</div>" +
//      "</div>" +
//      "</div></div>";

      return markup;
    }

  function formatcropSelection (crop) {
    return crop.name || crop.text;
  }

   $(".js-data-example-ajax").select2({
        ajax: {
          url: "http://agrinfo/crops",
          dataType: 'json',
          delay: 250,
          data: function (params) {
              console.log(params);
            return {
              crop: params.term // search term
             
            };
          },
          processResults: function (data) {
      
              console.log(data);
            return {
              results: data.crops
             
            };
          },
          cache: true
        },
       escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
      minimumInputLength: 1,
      templateResult: formatcrop, // omitted for brevity, see the source of this page
       templateSelection: formatcropSelection // omitted for brevity, see the source of this page
      });
 
            
        $('#farmform').submit(function(e) {
             
            
             $('.form-group').removeClass('has-error'); // remove the error class
             $('.help-block').remove(); // remove the error text

            // get the form data
                // there are many ways to get this data using jQuery (you can use the class or id also)
                var formData = {
                    'name'   : $('input[name=name]').val(),
                    'long'   : $('input[name=long]').val(),
                    'lat'    : $('input[name=lat]').val(),
                    'acres'  : $('input[name=acres]').val()
                };

                // process the form
                $.ajax({
                    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url         : 'newfarm.php', // the url where we want to POST
                    data        : formData, // our data object
                    dataType    : 'json', // what type of data do we expect back from the server
                   encode          : true
                
                })
                    // using the done promise callback
                    .done(function(data) {
                     
                        // log data to the console so we can see
                        console.log(data); 
                          // here we will handle errors and validation messages
        if ( ! data.success) {
         
            // handle errors for name ---------------
            if (data.errors.name) {
                $('#name-group').addClass('has-error'); // add the error class to show red input
                $('#name-group').append('<div class="help-block">' + data.errors.name + '</div>'); // add the actual error message under our input
            }

            // handle errors for email ---------------
            if (data.errors.location) {
                $('#location-group').addClass('has-error'); // add the error class to show red input
                $('#location-group').append('<div class="help-block">' + data.errors.location + '</div>'); // add the actual error message under our input
            }

            // handle errors for superhero alias ---------------
         

        } else {

            // ALL GOOD! just show the success message!
            $('#farmform').append('<div class="alert alert-success">' + data.message + '</div>');

            // usually after form submission, you'll want to redirect
            // window.location = '/thank-you'; // redirect a user to another page
            alert(' success creating farm'); // for now we'll just alert the user

        }

                        // here we will handle errors and validation messages
                    });

                // stop the form from submitting the normal way and refreshing the page
                e.preventDefault();
         });
         
            $('#plantingform').submit(function(e) {
             
             $('.form-group').removeClass('has-error'); // remove the error class
             $('.help-block').remove(); // remove the error text
       // alert($('input[name=harvestdate]').val());
//   
            
            // get the form data
                // there are many ways to get this data using jQuery (you can use the class or id also)
                var formplantingData = {
                    'cropid'   : $('select[name=cropid]').val(),
                    'fieldid'   : $('select[name=fieldid]').val(),
                    'plantingdate'    : $('input[name=plantingdate]').val(),
                    'amount'  : $('input[name=amount]').val(),
                    'units'  : $('input[name=units]').val(),
                    'harvestdate'  : $('input[name=harvestdate]').val()
                };
  
                // process the form
                $.ajax({
                    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                    url         : 'newplanting.php', // the url where we want to POST
                    data        : formplantingData, // our data object
                    dataType    : 'json', // what type of data do we expect back from the server
                   encode          : true
                
                })
                    // using the done promise callback
                    .done(function(data) {
                     
                        // log data to the console so we can see
                        console.log(data); 
                          // here we will handle errors and validation messages
        if ( ! data.success) {
         
            // handle errors for name ---------------
            if (data.errors.cropid) {
                $('#cropid-group').addClass('has-error'); // add the error class to show red input
                $('#cropid-group').append('<div class="help-block">' + data.errors.cropid + '</div>'); // add the actual error message under our input
            }

            // handle errors for email ---------------
            if (data.errors.plantingdate) {
                $('#plantingdate-group').addClass('has-error'); // add the error class to show red input
                $('#plantingdate-group').append('<div class="help-block">' + data.errors.plantingdate+ '</div>'); // add the actual error message under our input
            }

            // handle errors for superhero alias ---------------
         

        } else {

            // ALL GOOD! just show the success message!
            $('#plantingform').append('<div class="alert alert-success">Success creating Planting </div>');

            // usually after form submission, you'll want to redirect
            // window.location = '/thank-you'; // redirect a user to another page
            alert('success crating planting'); // for now we'll just alert the user

        }

                        // here we will handle errors and validation messages
                    });

                // stop the form from submitting the normal way and refreshing the page
                e.preventDefault();
         });
          $('#create_planting').click(function(e){
             // alert();
               $('#farmform').removeClass('alert-success'); // remove the error class
               $('#farmform').removeClass('alert');
          });
          $('#farmstable').DataTable(
//                  {
//              "processing": true,
//               "serverSide": true,
//               "ajax": "ajax_fields.php"
//
//          }
                  );
         
      }
   
 
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
     
  
    <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
<!--                <div class="pull-left box-tools">
                    <button type="button" class="btn btn-primary btn-default  pull-left" data-toggle="modal" id="create_field" data-target="#myModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-plus"></i> Add Farm</button>
               
              </div>-->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-primary btn-default  pull-right" data-toggle="modal" id="create_farm" data-target="#myModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-map-marker"></i> Add Farm</button>
                    <button type="button" class="btn btn-primary btn-default  pull-right" data-toggle="modal" id="create_planting" data-target="#plantingModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-plus"></i> Add Planting</button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
           

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Farms Map
              </h3>
            </div>
            <div class="box-body">
              <div id="map" style="height: 650px; width: 100%;"></div>
            </div>
    </div>
          <!-- Modal -->
<div class="modal fade " id="myModal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: black" id="myModalLabel">Create Farm</h4>
      </div>
        <form id="farmform"method="post" >
      <div class="modal-body">
          
                      <div id="name-group"class="form-group">
       
                                <label style="color:black" for="location">Name of farm</label>
				<input type="text" class="form-control" id="name" name="name">
                       </div>               
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
          
                      
				
				<input type="hidden" class="form-control" id="long" name="long">
				
				<input type="hidden" class="form-control" id="lat" name="lat">
                       
                                <div id="acre-group"class="form-group">
				<label style="color:black" for="latitude">Acres</label>
                                <input type="text" class="form-control" id="acres" name="acres">
                                </div>       
                                </br>
                     <div id="location-group"class="form-group">
                                <label class="label-warning" for="latitude">Please choose the location of the farm on the map</label>
			</div>        
                        
			
		 
          <div id="farm-map" style="height: 250px; width: 100%;"></div>
      </div>
      <div class="modal-footer">
           <button type="submit" class="btn btn-primary">Add farm</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
      </div>
       </form> 
    </div>
  </div>
</div>
                  <!-- Modal -->
<div class="modal fade " id="plantingModal" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="color: black" id="myModalLabel">Create Planting</h4>
      </div>
        <form id="plantingform"method="post" >
      <div class="modal-body">
         
			<div class="form-group">
       
                               
                                <label style="color:black" for="location">Choose Farm</label>
                                
                <div class="form-group">
              
                    <select id="select_farm" name="fieldid"  class="form-control select2" style="width: 100%;z-index: 100">
                    <?php 
                    while ($farm=mysql_fetch_assoc($farms))
                        {
                           
                       echo " <option value='$farm[fieldid]'>$farm[name]</option>";

                         }
                ?>
                 
                </select>
              </div>
          
         
           <div class="form-group" id="cropid-group">
                <label style="color:black" for="crop">Choose Crop</label>
                <select id="cropid" name="cropid" class="js-data-example-ajax" style="width:100%" > 
               </select>
            </div>
                                <div class="form-group" id="plantingdate-group">
                <label style="color:black" for="date">Planting Date</label>
                <input type="date" class="form-control" id="plantingdate" name="plantingdate" >
            </div>
            <div class="form-group">
                <label style="color:black" for="start">Yield Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" >
            </div>
            <div class="form-group">
                <label style="color:black" for="start">Yield units</label>
                <input type="text" class="form-control" id="units" name="units" >
            </div>
            <div class="form-group">
                <label style="color:black" for="start">Harvest Date</label>
                <input type="date" class="form-control" id="hdate" name="harvestdate" >
            </div>
            
           
     
	   		
		
          
      </div>
        
      <div class="modal-footer">
          <button type="submit" class="btn btn-primary" value="Add Planting"/>Add planting</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
      </div>
     </form>
    </div>
  </div>
</div>
          </div>
          <!-- /.box -->
          
          
          <!--box data bales-->
          
          <div class="box" style="margin-top: 30px">
            <div class="box-header">
<!--                <div class="pull-left box-tools">
                    <button type="button" class="btn btn-primary btn-default  pull-left" data-toggle="modal" id="create_field" data-target="#myModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-plus"></i> Add Farm</button>
               
              </div>-->
                <div class="pull-right box-tools">
<!--                    <button type="button" class="btn btn-primary btn-default  pull-right" data-toggle="modal" id="create_farm" data-target="#myModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-map-marker"></i> Add Farm</button>
                    <button type="button" class="btn btn-primary btn-default  pull-right" data-toggle="modal" id="create_planting" data-target="#plantingModal" data-backdrop="static" data-keyboard="false" title="Create Field">
                  <i class="fa fa-plus"></i> Add Planting</button>-->
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
           

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Farms/Fields and Plantings
              </h3>
            </div>
            <div class="box-body">
                <div id="datatables" style="height: 650px; width: 100%;">
      <table id="farmstable" class="display " cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Field name</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>farmer</th>
                <th>Acres</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                 <th>Field name</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>farmer</th>
                <th>Acres</th>
            </tr>
        </tfoot>
    </table>

                    
                </div>
            </div>
              
          </div>
          
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




<?php
include'footer.php';
?>
</body>
</html>
