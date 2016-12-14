<?php

//include the database
require'db.inc.php';

  $sender = $_GET['sender'];
  $message = $_GET['msgdata'];
  $str = ltrim($sender, '+');
echo $message;

  //trim the last # in the message
  $message=rtrim($message, "#");

  if ($sender!='') {
     #
     # Save incoming messages
     #
     $fp = fopen("receivelog.txt","a");
     fputs($fp,"$sender $message\n");
     fclose($fp);

     //if there is the name register in the array

       if ((strpos($message, 'Register') !== false) || (strpos($message, 'register') !== false) || (strpos($message, 'REGISTER') !== false))
		{
     	 $farmer = explode("*", $message);
		 $name=$farmer['2'];
		 $county=$farmer['3'];
		 $password=$farmer['4'];
		 
     	 //get the countyid
		 $thecounty="SELECT * FROM counties WHERE name LIKE '$county'"
		 $thecounty2=""
		 while ($thecounty3=mysql_fetch_array($thecounty2))
		 {
			 
			 $countyid=$thecounty3['countyid'];
		 }
			 
		 
     	 //insert into the database
     	 $insert="INSERT INTO user(name,telephone,countyid,password)VALUES('$name','$telephone','$countyid','$password')";
	mysql_query($insert) or trigger_error(mysql_error()." in ".$insert);
     	 
     	 //the response text
     	 $responsetext="Congratulations. You have successfully registered for AgriInfo. To register a farm send the details of the farm in the format *farm*name*county*location#";
		}
		
		else if ((strpos($message, 'Farm') !== false) || (strpos($message, 'farm') !== false) || (strpos($message, 'FARM') !== false))
		{
     	 $farm = explode("*", $message);
		 $name=$farmer['2'];
		 $county=$farmer['3'];
		 $password=$farmer['4'];
		 
     	 //get the countyid
		 $thecounty="SELECT * FROM USER where telephone='$sender'"
		 $thecounty2=""
		 while ($thecounty3=mysql_fetch_array($thecounty2))
		 {
			 
			 $countyid=$thecounty3['countyid'];
		 }
			 
		 
     	 //insert into the database
     	 $insert="INSERT INTO user(name,telephone,countyid,password)VALUES('$name','$telephone','$countyid','$password')";
	mysql_query($insert) or trigger_error(mysql_error()." in ".$insert);
     	 
     	 //the response text
     	 $responsetext="Congratulations. You have successfully registered for AgriInfo. To register a farm send the details of the farm in the format *farm*name*county*location#";
		}
		
     
      
     
     #
     # Return a response SMS message
     #
     echo "{SMS:TEXT}{}{}{".$sender."}{".$responsetext."}";
  } else {
     echo "The PHP script is ready for accepting messages";
  }

?>