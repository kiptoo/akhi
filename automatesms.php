<?php

	//put your API Key and Secret in these two variables.
	$api_key = "0hjAKXdBYKFlQ9pITkubnQnlW8rke3ey";
	$api_secret = "wiB8rI3gBlC0lz4F"; 
 
	//When called this function will request an Access Token and then return just
	//the token value. 
	function GetOAuthToken(){ 
    global $api_key,$api_secret;  
 
    $ch = curl_init("http://api.awhere.com/oauth/token");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                "Content-Type: application/x-www-form-urlencoded",
                                                "Authorization: Basic ".base64_encode($api_key.":".$api_secret)
                                            ));
 
    $result = CurlExecute($ch); 
    $result = json_decode($result);
    return $result->access_token;
}
	
	
	//get all the users
	$user="SELECT * FROM user";
	$user2=mysql_query($user);
	while ($user3=mysql_fetch_array($user2))
	{
	
		//get all the fields of each user
		$field="SELECT * FROM fields WHERE userid='$user3[userid]";
		$field2=mysql_query($field);
		while ($field3=mysql_fetch_array($field2))
		{
			//////////////////////////////////////////////////////////////////
			//get the weather for that field
			// Define variables
			$verb = "GET"; 
			$host = "https://api.awhere.com"; 
			$uri  = "/v2/fields/$field3[fieldid]/forecasts"; 
 
			$access_token = "" //You'll need to follow the example above to get an access token.
 
			$http_headers = array("Authorization: Bearer ".$access_token); 
 
 
			// Set up the cURL request
			$curl = curl_init($host.$uri);
			curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $verb);
			curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HEADER, true);                           
 
 
			// Normally you should not use these cURL options. They disable the SSL Cert 
			// verification. But many local development environments are not built with
			// the standard chain authority certificates, and so cannot verify the Cert.
			// If you have troubles making cURL requests, you can uncomment the next two
			// lines, but don't put them into production. 
 
			// curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
			// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
 
 
 
			// This fires the cURL request
			$response = curl_exec($curl);
 
 
			if($response === false){
				// if the curl_exec() fails for reason, it means it could not even reach the aWhere server
				// and the function returns FALSE 
				echo 'cURL Transport Error (HTTP request failed): '.curl_error($curl); 
				die(); 
			}
			else { 
				// curl_getinfo() returns information about the HTTP transaction, used
				// mainly here for getting the status code. 
				$info = curl_getinfo($curl);
				$httpStatusCode = $info['http_code']; 
 
				//The cURL settings above will include the HTTP headers in the response
				//This next command explodes the headers into one variable and the actual API response in another
				list($responseHeaders, $responseBody) = explode("\r\n\r\n", $response, 2); 
 
				//Finally, we use json_decode to transform the API response into a native PHP object.
				$result = json_decode($responseBody); 
			} 
			curl_close($curl);
			/////////////////////////////////////////////////////////////////////////////////
			
			//Put the result in an organized manner then to the $message variable
			$message=""
			//send message to mobilesasa
	
			$phonenumber=$_GET['phonenumber'];
			$message=$_GET['message'];
			$username = "Elisha+Aywak";
			$apikey = "5facf905b841ea45";
			$senderId = "MOBILESASA";
			$phoneNumber = "$phonenum";//only one phone number allowed
			$message = urlencode("$message");

			$formatedURL = 'http://mobilesasa.com/sendsms.php?user='.$username.'&apikey='.$apikey.'&sender='.$senderId.'&message='.$message.'&phonenumber='.$phoneNumber;
			echo $formatedURL;
			$results = file_get_contents($formatedURL);
			if($results !=  false)//if request reached server
			{
				$values = explode('|', $results);

				if($values[0] === '1701')//if request is successful
				{
					$phonenumber = $values[1];
					$messageId = $values[2];
					$cost = $values[3];

					echo $phonenumber.",".$messageId.",".$cost."<br/>";
				}
				else//if it fails for some reason
				{
					$reason = $values[1];
					echo $reason;
				}
			}
			else
			{
				echo "Server not reachable";
			}
			header ('location:index.php');
	}
?>