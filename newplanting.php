<?php
session_start();
ob_start();
require('db.inc.php');
//require('header.php');
//get the variables
$crop_id=$_POST['cropid'];
$field_id=$_POST['fieldid'];
$planting_date=$_POST['plantingdate'];
$yield_amount=$_POST['amount'];
$yield_units=$_POST['units'];
$harvest_date=$_POST['harvestdate'];

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

//$data['cropid']=$_POST['cropid'];
//$data['fieldid']=$_POST['fieldid'];
//        $data['plantingdate']=$_POST['plantingdate'];
//        $data['amount']=$_POST['amount'];
//        $data['units']=$_POST['units'];
//        $data['harvestdate']=$_POST['harvestdate'];
       // $data['cropid']

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




// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['cropid']))
        {
        $errors['cropid'] = 'Please Choose Crop.';
        }

        if (empty($_POST['fieldid'])) {
            $errors['fieldid'] = 'Please Choose a field';
        }

        if (empty($_POST['plantingdate'])) {
            $errors['plantingdate'] = 'Please Choose a planting date.';
        }

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = $errors;
                // return all our data to an AJAX call
            echo json_encode($data);
    } else {

                    //echo $latitude;
                   


//                    //get the fieldid
//                    $field="SELECT * FROM fields WHERE farmid='$farmid'";
//                    $field2=mysql_query($field);
//                    while ($field3=mysql_fetch_array($field2))
//                            {
//                                    $fieldid=$field3['fieldid'];
//                            }
//                    $fieldid="field$fieldid";
//                   
//                    $new_field_id=$fieldid;
//                    $new_field_name=$name;




	//if there is a cURL problem and the API call can't execute at all, 
                                    //the function throws an exception which we can catch to fail gracefully.

                            $access_token = GetOAuthToken($api_key,$api_secret); 
                            
                            

                    // MAKE API CALL 
                    // Next we'll create a field. Change the variables at the top of the 
                    // script to customize the field (or create more than one). 



                    // For this example we're creating an associative array with the key-value pairs used in the payload. 
                    // When we make the call we'll used json_encode() to turn it into a JSON-formatted string the API requires.

$newFieldBody = array(	"crop"=>$crop_id,
			  			"plantingDate"=>$planting_date,
			  			
			  			"yield"=>array("amount"=>$yield_amount,
								   			"units"=>$yield_units),
			  			
                                                "harvestDate"=>$harvest_date); 
			


                    

$newFieldResponse = makeAPICall('POST', 								  //Use POST to create
								'https://api.awhere.com/v2/agronomics/fields/field'.$field_id.'/plantings',		  //URL
								$access_token,							  //Access Token
								$newFieldStatusCode,					  //Status Code (returned from function)
								$newFieldResponseHeaders,				  //We want to capture the response HTTP headers
								json_encode($newFieldBody),  			  //Send the body as a json-formatted string
								array("Content-Type: application/json")   //The API requires an additional header to describe the payload.
								 ); 
                    
                             if($newFieldStatusCode==201){  	// Code 201 means the Create was successful

                            $insert="INSERT INTO plantings(plantingid,fieldid, cropid,plantingdate,yieldamount,yieldunit,harvestdate) 
                            VALUES ($newFieldResponse->id,'$field_id','$crop_id','$planting_date','$yield_amount','$yield_units','$harvest_date')";
                           // mysql_query($insert);
                            if ( mysql_query($insert) === TRUE) {
                                    //echo "New record created successfully";
                                      $data['success'] = true;
                                                            $data['message'] = json_encode($newFieldResponse);
                                } else {
                                    echo "Error: " . $insert . "<br>" ;
                                    }
                            //echo stripslashes(json_encode($newFieldResponse,JSON_PRETTY_PRINT)); 	//Note: Stripslashes() is used just for prettier 
                         

                            //To show the newly created field we'll just repeate the Get Fields List call: 


                        
                               //     echo json_encode($data);



                    } else if($newFieldStatusCode==409){	// Code 409 means conflict - we use it when you try to create a duplicate object
                                                                                                    // To run this code several times and create more than one field, you'll need to 
                                   $data['success'] = false;
                            $data['message'] = "A field with ID $new_field_id already exists in your account";                                                                 // change the variables in header.php. 

                          // echo json_encode($data);

                    } else { 		
                        
                        $data['success'] = false;
                            $data['message'] = $newFieldResponse->detailedMessage;                                                          
                         // echo json_encode($data);
                    }

                   
                    //sdet the session for a new farm
                    $_SESSION['newfarm']="yes";
                    // return all our data to an AJAX call
                        //echo json_encode($data);
                    //header to the home page
                    //header('Location: home.php');
                   


           
                  

                     echo json_encode($data);

                            
                        }

    
    

