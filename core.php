<?php
ob_start();
session_start();

$current_file=$_SERVER['SCRIPT_NAME'];

//$http_referer=$_SERVER['HTTP_REFERER'];

function loggedin(){
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	}
	else {
		return false;
	}
}

function getfield1($field1){
	$query="SELECT `$field1` FROM `users` WHERE `users`.`id`='".$_SESSION['user_id']."' ";
	if($query_run=mysql_query($query)){
	return $query_result=mysql_result($query_run,0,$field1);
	}
}

?>