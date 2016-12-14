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



// GET A TOKEN 
// First, you always need to generate a token. We built the GetOAuthToken 
// function (in header.php) to streamline that part
$crop=$_GET['crop'];

try{ 	//if there is a cURL problem and the API call can't execute at all, 
		//the function throws an exception which we can catch to fail gracefully.
		
	$access_token = GetOAuthToken($api_key,$api_secret); 

} catch(Exception $e){ 
	echo $e->getMessage(); // For this script we're just echoing the error and stopping the rest of the script. 
	exit();  			   // in your code you'll want to handle the error and recover appropriately.
} 





try{ 
    if ($crop==" "){
        $fieldsListResponse = makeAPICall('GET', 								//verb
								  'https://api.awhere.com/v2/agronomics/crops',	//URL
								  $access_token,						//Access Token
								  $fieldsListStatusCode,				//Status Code (returned from function)
								  $fieldsListResponseHeaders			//We want to capture the response HTTP headers
								 ); 
    }
 else {
    $fieldsListResponse = makeAPICall('GET', 								//verb
								  'https://api.awhere.com/v2/agronomics/crops?crop='.$crop.'',	//URL
								  $access_token,						//Access Token
								  $fieldsListStatusCode,				//Status Code (returned from function)
								  $fieldsListResponseHeaders			//We want to capture the response HTTP headers
								 ); 
}
        

if($fieldsListStatusCode==200){  	// Code 200 means the request was successful
    
    echo  json_encode($fieldsListResponse);
	
//	echo '<p>There are '.count($fieldsListResponse->fields)." field locations in the current page of results.</p>"; 
//	echo '<p>Request:</p><pre>GET https://api.awhere.com/v2/fields</pre>'; 
//	echo '<p>Content-Range Header (shows pagination and total results):</p>';
//	
//	// HTTP transactions return a lot of headers, but in this example we only want the Content-Range header
//	// (the parseHTTPHeaders function returns just the headers you want)
//	// This API returns a ranged result, which are paginated by default to 50 results per page. The 
//	// Content-Range header shows which of the results are on this page (e.g., 1-10) and the total number
//	// of results. It looks something like this: 
//	// Content-Range: fields 0-5/5
//	echo "<pre>".parseHTTPHeaders($fieldsListResponseHeaders,array('Content-Range'))."</pre>"; 
//	
//	echo '<p>Response Body:</p>';
//	echo '<pre>'; 
//	echo stripslashes(json_encode($fieldsListResponse,JSON_PRETTY_PRINT)); 	//Note: Stripslashes() is used just for prettier 
//	echo '</pre>'; 															//output in the browser. Not needed normally.
	
	
} else { 							// If there is any other response code, there was a problem.
	echo  "false";
        
	
}

} catch(Exception $e){ 
	echo $e->getMessage(); 
	exit();  			   
} 



