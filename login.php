<?php
session_start();
ob_start();
//if the session is set go to the index page
if(isset($_SESSION['adminid']))
{
	//header("Location:admin.php");
}

//connect to the database
include 'db.inc.php';
//Get the variables
$email=$_POST["email"];
$password=$_POST["password"];

//check if the username and password is correct
$check="SELECT * FROM user WHERE email='$email' AND password='$password'";
$check2=mysql_query($check);
$result=mysql_num_rows($check2);
echo $email;
echo $password;

//if taken, go back to the start page with information
if ($result==0)
{
	$_SESSION['wronglogin']="yes";
	header("Location:index.php");
}
else
{
	//set the session for user
	$thesession2=mysql_query($check);
	while ($result=mysql_fetch_array($thesession2))
	{
		$_SESSION['userid']=$result['userid'];
		echo "yes";
	
	}
	echo $_SESSION['userid'];
	//set the session for the new account
	//redirect to the home page
	header("Location:home.php");

}