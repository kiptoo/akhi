<?php
session_start();
ob_start();
require('db.inc.php');
require('header.php');
//get the variables

$name=$_POST['name'];
$longitude=$_POST['long'];
$latitude=$_POST['lat'];
$acres=$_POST['acres'];
$farmid=$_SESSION['userid'];

echo $latitude;
$insert="INSERT INTO fields(farmid, longitude, latitude, name, acres) 
	VALUES ('$farmid','$longitude','$latitude','$name','$acres')";
	mysql_query($insert);


//get the fieldid
$field="SELECT * FROM fields WHERE farmid='$farmid'";
$field2=mysql_query($field);
while ($field3=mysql_fetch_array($field2))
	{
		$fieldid=$field3['fieldid'];
	}
$fieldid="field$fieldid";
echo $fieldid;
$new_field_id=$fieldid;
$new_field_name=$name;





try{ 	//if there is a cURL problem and the API call can't execute at all, 
		//the function throws an exception which we can catch to fail gracefully.
		
	$access_token = GetOAuthToken($api_key,$api_secret); 
         echo $access_token;
} catch(Exception $e){ 
	echo $e->getMessage(); // For this script we're just echoing the error and stopping the rest of the script. 
	exit();  			   // in your code you'll want to handle the error and recover appropriately.
} 

echo "<p>Access Token = $access_token</p>"; 


// MAKE API CALL 
// Next we'll create a field. Change the variables at the top of the 
// script to customize the field (or create more than one). 

echo "<hr><h1>Create a Field</h1>"; 


// For this example we're creating an associative array with the key-value pairs used in the payload. 
// When we make the call we'll used json_encode() to turn it into a JSON-formatted string the API requires.

$newFieldBody = array(	"id"=>$new_field_id,
			  			"name"=>$new_field_name,
			  			"farmId"=>$new_field_farm_id,
			  			"centerPoint"=>array("latitude"=>$new_field_latitude,
								   			 "longitude"=>$new_field_longitude),
			  			"acres"=>$new_field_acres); 
			

try{ 

$newFieldResponse = makeAPICall('POST', 								  //Use POST to create
								'https://api.awhere.com/v2/fields',		  //URL
								$access_token,							  //Access Token
								$newFieldStatusCode,					  //Status Code (returned from function)
								$newFieldResponseHeaders,				  //We want to capture the response HTTP headers
								json_encode($newFieldBody),  			  //Send the body as a json-formatted string
								array("Content-Type: application/json")   //The API requires an additional header to describe the payload.
								 ); 
} catch(Exception $e){ 
	echo $e->getMessage(); 
	exit();  			   
} 


if($newFieldStatusCode==201){  	// Code 201 means the Create was successful
	
	echo '<p>A new field was created.</p>'; 
	echo "<p>Request:</p><pre>POST https://api.awhere.com/v2/fields\n\n".json_encode($newFieldBody,JSON_PRETTY_PRINT)."</pre>"; 
	echo '<p>Location Header (shows the URI of the new object):</p>';
	
	// Anytime you create a new object, we return a Location header with the URL of where
	// you can get that object. You could save this value or use it in your next GET call 
	// to retreive the thing you created. As a matter of convenience, though, our APIs
	// also return the object you created with this request. So it's a matter of preference
	// for your code/architecture. 
	echo "<pre>".parseHTTPHeaders($newFieldResponseHeaders,array('Location'))."</pre>"; 
	echo '<p>Response Body: (as a matter of convenience we send back the data that was created)</p>';
	echo '<pre>'; 
	echo stripslashes(json_encode($newFieldResponse,JSON_PRETTY_PRINT)); 	//Note: Stripslashes() is used just for prettier 
	echo '</pre>'; 															//output in the browser. Not needed normally.
	
	
	//To show the newly created field we'll just repeate the Get Fields List call: 


	try{ 

	$fieldsListResponse = makeAPICall('GET', 								//verb
									  'https://api.awhere.com/v2/fields',	//URL
									  $access_token,						//Access Token
									  $fieldsListStatusCode,				//Status Code (returned from function)
									  $fieldsListResponseHeaders			//We want to capture the response HTTP headers
									 ); 
	} catch(Exception $e){ 
		echo $e->getMessage(); 
		exit();  			   
	} 

	echo '<p>Get Fields List with Newly Created Field</p>';
	if($fieldsListStatusCode==200){  
		echo '<pre>'; 
		echo stripslashes(json_encode($fieldsListResponse,JSON_PRETTY_PRINT)); 	
		echo '</pre>';
	} else { 
		echo "<p>ERROR: ".$fieldsListStatusCode." - ".$fieldsListResponse->simpleMessage."<br>"; 
		echo $fieldsListResponse->detailedMessage."</p>"; 
	}

			
												
} else if($newFieldStatusCode==409){	// Code 409 means conflict - we use it when you try to create a duplicate object
										// To run this code several times and create more than one field, you'll need to 
										// change the variables in header.php. 

	echo "<p>A field with ID $new_field_id already exists in your account, so it could not be created again.</p>"; 

} else { 							// If there is any other response code, there was a problem.
									// this code shows how to extract the two different error messages
									// You should not use the error messages themselves to drive behavior
									// (don't test them in if() or switch() statements)
									// use the status code for that. See developer.awhere.com/api/conventions 
	
	echo "<p>ERROR: ".$newFieldStatusCode." - ".$newFieldResponse->simpleMessage."<br>"; 
	echo $newFieldResponse->detailedMessage."</p>"; 

}


//sdet the session for a new farm
$_SESSION['newfarm']="yes";

//header to the home page
//header('Location: home.php');
?>