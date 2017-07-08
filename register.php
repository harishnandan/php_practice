<?php
require 'core.php';
require 'connect.php';

if(!loggedin()){
     if(isset($_POST['username']) && isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])){

     $fullname=$_POST['fullname'];
     $username=$_POST['username'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $password_again=$_POST['re_password'];

      $query="SELECT `username` FROM `users` WHERE `username`='$username'";
      mysql_error();
    $query_run=mysql_query($query);

     if(mysql_num_rows($query_run)==1){
      echo 'The username '.$username.' exists';
    }
      else{
   
      $query="INSERT INTO users VALUES('','".mysql_real_escape_string($fullname)."','".mysql_real_escape_string($username)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($password)."')";
        
      
     if($query_run=mysql_query($query)){
        
         header('Location: register_success.php');
      }
    }
     }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Note-Register</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="font-awesome.css">
   <script src="register.js"></script>
</head>
<body>
   <div class="container">
   <img src="images/user2.png">
   	 <form action="<?php echo $current_file; ?>" method="POST" onsubmit="return validate()">
       <div class="form-input">
          <input type="text" name="fullname" placeholder="Enter your name" id="T1" required="true"  oninvalid="this.setCustomValidity('Please enter your name')"
           oninput="setCustomValidity('')"><span id="S1"></span>
          </div>
   	 	<div class="form-input">
   	 	 <input type="text" name="username" placeholder="Enter username " id="T3" required="true"  oninvalid="this.setCustomValidity('Please enter username')"
           oninput="setCustomValidity('')"><span id="S3"></span>
   	 	 </div>
          <div class="form-input">
          <input type="text" name="email" placeholder="abc@xyz.com" id="T6" required="true"  oninvalid="this.setCustomValidity('Please enter mail')"
           oninput="setCustomValidity('')"><span id="S6"></span>
          </div>
   	 	 <div class="form-input">
   	 	 	<input type="password" name="password" placeholder="Enter password" id="T4" required="true"  oninvalid="this.setCustomValidity('Please enter password')"
           oninput="setCustomValidity('')"><span id="S4"></span>
   	 	 </div>
          <div class="form-input">
          <input type="password" name="re_password" placeholder="Confirm password" id="T5" required="true"  oninvalid="this.setCustomValidity('Please confirm password')"
           oninput="setCustomValidity('')"><span id="S5"></span>
          </div>
   	 	 <input type="submit" name="submit" value="Register" class="btn-register">
   	 	 <div id="login"><br><a href="index.php">Already a member? <strong>Login</strong>.</a></div>
   	 </form>
   </div>
</body>
</html>

<?php
}
else if (loggedin()){
   echo 'You\'re already logged in and registered.'; 
}
?>