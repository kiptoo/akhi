<?php
include'db.inc.php';
session_start();

//if the session is set
if (isset($_SESSION['userid']))
{
	header('Location: home.php');
}
//get the variables from the previous page

$name=$_POST['name'];
$email=$_POST['email'];
$telephone=$_POST['telephone'];
$category=$_POST['category'];
$countyid=$_POST['countyid'];
$password=$_POST['password'];

//check if the telephone or email is taken
$check="SELECT * FROM user WHERE email='$email' OR telephone='$telephone'";
$check2=mysql_query($check);
$check3=mysql_num_rows($check2);

if ($check3>0)
{
	//set the session for message
	$_SESSION['message']="The email or telephone number you have entered is already in use. Please try another one.";
	//redirect back to the index page
	header('Location: index.php');
}
else
{
	//insert the details into the database
	$insert="INSERT INTO user(name, email,telephone,category, countyid, password) 
	VALUES ('$name','$email','$telephone','$category','$countyid','$password')";
	mysql_query($insert);
	
	//get the userid
	$userid="SELECT * FROM user WHERE email='$email' OR telephone='$telephone'";
	$userid2=mysql_query($userid);
	while ($userid3=mysql_fetch_array($userid2))
	{
		//set the session for userid
		$_SESSION['userid']=$userid3['userid'];
	}
	
	
	//redirect to the homepage
		header('Location: home.php');
}
?>