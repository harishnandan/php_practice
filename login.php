<?php
require_once 'core.php';
require_once 'connect.php';

if(isset($_POST['username'])&&isset($_POST['password'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	if(!empty($username) && !empty($password)){
	$query="SELECT `id`, `fullname`, `username`, `email`, `password` FROM `users` WHERE username='$username' AND password='$password'";
		if($query_run=mysql_query($query)){
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==0) {
				echo '<script language="javascript">';
				echo 'alert("Invalid username or password")';
				echo '</script>';
			}
			else if($query_num_rows==1){
				$user_id=mysql_result($query_run, 0,'id');
				$_SESSION['user_id']=$user_id;
				header('Location:index.php');
			}
		}

		else{
			echo mysql_error();
			echo '<script language="javascript">';
			echo 'alert("Query unsuccessful")';
			echo '</script>';
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert("Please log in full details")';
		echo '</script>';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Note-Log In</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome.css">
</head>
<body>
   <div class="container">
   <img src="images/user2.png">
   	 <form action="<?php echo $current_file; ?>" method="POST">
   	 	<div class="form-input">
   	 	 <input type="text" name="username" placeholder="Enter username ">
   	 	 </div>
   	 	 <div class="form-input">
   	 	 	<input type="password" name="password" placeholder="Enter password">
   	 	 </div>
   	 	 
   	 	 <input type="submit" name="submit" value="Log In" class="btn-login">
   	 	 <div id="register"><br><a href="register.php">Not a member? <strong>Register</strong>.</a></div>
   	 </form>
   </div>
</body>
</html> 