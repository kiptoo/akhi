
 <?php
require 'db.inc.php';

$userid=$_GET['userid'];

 $farms=mysql_query("SELECT * FROM fields WHERE farmid='$userid'");
  $array = mysql_fetch_assoc($farms);  
  

  print_r($array);
  ?>
