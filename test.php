<?php

require('header.php');

$kip=GetOAuthToken($api_key,$api_secret);
print_r($kip);
?>