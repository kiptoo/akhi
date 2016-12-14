<?php

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

?>