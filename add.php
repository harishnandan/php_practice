<?php
include 'core.php';
include 'connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Note</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h3>Add New Note:</h3>
    <form action="add.php" method="POST" id="usrform">
<strong>Title:</strong>
<br>
<input type="text" name="title" id="T4" placeholder="Enter Title" required="true" oninvalid="this.setCustomValidity('Please enter title')"
           oninput="setCustomValidity('')">
           <br><br>
           <strong>Note:</strong><br>
<textarea rows="4" cols="50" name="note" form="usrform" required="true" oninvalid="this.setCustomValidity('Note cannot be empty')"
           oninput="setCustomValidity('')"> </textarea><br><br>
           <input type="submit" value="submit" name="submit" id="b1"><br>
</form>

<hr>
</body>
</html>

<?php

if(isset($_POST['title'])&&isset($_POST['note'])) {
	$title=$_POST['title'];
$note=$_POST['note'];
	 	$query="INSERT INTO data VALUES('".$_SESSION['user_id']."','".mysql_real_escape_string($title)."','".mysql_real_escape_string($note)."')";
	 	if($query_run=mysql_query($query)){
	 		header('Location:index.php');
	 	}
	 }
?>