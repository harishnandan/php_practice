<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database
include 'core.php';
include('connect.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['title']))

{

// get id value

$title = $_GET['title'];



// delete the entry

$query="DELETE FROM `data` WHERE `title`='".$title."'";
$result = mysql_query($query);





// redirect back to the view page

header("Location: index.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{
	

header("Location: index.php");

}



?>