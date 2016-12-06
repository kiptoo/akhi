
 <?php
require 'db.inc.php';
//include("header.php"); 

$userid=$_GET['userid'];

$farms=mysql_query("SELECT * FROM fields WHERE farmid='$userid'");
   
  $info= array();
 while ($farms3=mysql_fetch_assoc($farms))
  {
      array_push($info,$farms3);
 // echo "<h3>$farms3[name]</h3>";
 
  }
  echo json_encode($info);
 
