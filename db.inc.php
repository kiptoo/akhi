<?php
if(!@mysql_connect('localhost','root','')||
!@ mysql_select_db('akih')){
     die('Error connecting to DB');
	 } else{
		// echo'connection successfull';
	 }

?>