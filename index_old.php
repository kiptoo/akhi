<?php
session_start();
require 'db.inc.php';
//if the session is set
if (isset($_SESSION['userid']))
{
	header('Location: home.php');
}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>AGRICULTURAL KNOWLEDGE & INFORMATION HUB (AKIH)</title>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
        <link rel="stylesheet" href="css/style.css">

    
  </head>

  <body>

    <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">Login</a></h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
		   <form method="post" action="login.php">
             <label name="email">Email</label>
             <input type="email" name="email" required/>
             <label name="password">Password</label>
             <input type="password" name="password" required />
             <input type="submit" value="Login" />
			</form>
           </fieldset>
        </div>
      </div>
    </div>
	
    </div>

		<h1 align="center">AGRICULTURAL KNOWLEDGE & INFORMATION HUB (AKIH)</h1>

 <div class="row">
  <div class="col-sm-6"><h3 align="center"><br/><br/><br/>This is an web and SMS based portal that contains information from all the stakeholders in the agriculture sector
i.e.: farmers, Extension services , Manufacturers , Buyers and distributors and gives notifications to subscribers.</h3></div>
  <div class="col-sm-6"><h1> Register</h1>
  
	 <form action="register.php" method="post">
	<div class="form-group">
    <label for="email">Full Name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="form-group">
    <label for="email">Telephone Number:</label>
    <input type="text" class="form-control" id="telephone" name="telephone" required>
  </div>
  <div class="form-group">
    <label for="county">Category:</label>
    <select class="form-control" id="category" name="category" required>
    <option value="farmer">Farmer</option>
    <option value="manufacturer">Manufacturer</option>
    <option value="buyer">Buyer/ Distributor</option>
  </select>
  </div>
  <div class="form-group">
    <label for="county">County:</label>
    <select class="form-control" id="countyid" name="countyid" required>
	<?php
		//get the county
		$counties="SELECT * FROM counties ORDER BY name";
		$counties2=mysql_query($counties);
		while ($counties3=mysql_fetch_array($counties2))
		{
			?><option value="<?php echo $counties3['countyid'];?>"><?php echo $counties3['name'];?></option><?php
		}
	?>
  </select>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
  
  
  
  </div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
  </body>
</html>
