<?php
require 'core.php';
require 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Note-Forgot Password</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<link rel="stylesheet" type="text/css" href="font-awesome.css">
</head>
<body>
   <div class="container">
          <div id="head">Forgot?</div>
   	 <form action="<?php echo $current_file; ?>" method="POST">
   	 	<div class="form-input">
   	 	 <input type="text" name="username" placeholder="Enter username ">
   	 	 </div>
   	 	 <div class="form-input">
   	 	 	<input type="password" name="password" placeholder="Enter new password">
   	 	 </div>
   	 	 <input type="submit" name="submit" value="Change Password" class="btn-change">
   	
   	 </form>
   </div>
</body>
</html>