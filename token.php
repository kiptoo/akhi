<?php
//put your API Key and Secret in these two variables.
$api_key = "sXWquNv2ExTEJMmV5LMdnVmNzPwo0v8O";
$api_secret = "2E52yfGFqei8htKd"; 
 
//When called this function will request an Access Token and then return just
//the token value. 
print_r(GetOAuthToken());
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
 
    $result = Curl_exec($ch);
    $result = json_decode($result);
    return $result;
}
?>