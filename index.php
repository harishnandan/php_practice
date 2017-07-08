<?php
require_once 'core.php';
require_once 'connect.php';

if(loggedin()){
	 $username=getfield1('username');
	 
echo '<div class="header">Welcome <b><i>'.$username.'</i></b></div>';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
    <div class="logout"><a href="logout.php"><b>Log Out</b></a></div>
    <div class="clear"></div>
    <br>
<div class="old"> <strong>Your Notes</strong> </div>
</body>
</html>  

<?
$query="SELECT `users`.`id`,`data`.`title`,`data`.`note` FROM data,users WHERE users.`id`='".$_SESSION['user_id']."'  AND users.`id`=`data`.`id`";
	$query_run=mysql_query($query);
	
	if($query_run=mysql_query($query)){ 
     echo '<table align="center" border="1" cellpadding="10"><tr id="tr1"><td id="td3">ID </td><td id="td2">Title</td><td id="td4">Note</td></tr>';
	while($row=mysql_fetch_array($query_run)){
		
		echo '<tr><td id="td5">'.$row['id'].'</td> <td id="td1" >'.$row['title'].'</td> ' ;
		echo '<td id="td6">'.$row['note'].'</td><br>';
		echo '<td><a href="delete.php?title='.$row['title'].'">Delete</a></td></tr>';
	}
	echo '</table>';

   }

mysql_error();
?>
<br><a href="add.php"> ADD NEW NOTE </a>
<?php
}
else {
require 'login.php';

}

?>
