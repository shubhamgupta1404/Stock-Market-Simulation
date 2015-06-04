<?php
error_reporting(0);
include "db_details.php";
// global $
// $con = mysql_connect($host, $user, $pass)or die("cannot connect".mysql_error()); 
// mysql_select_db($db,$con)or die("cannot select DB");
$con = mysql_connect('localhost','root','');
	if(!$db){
		die("connection fail, error 101 contact administrator");
	}
	$con_c=mysql_select_db("sms_t",$db);
	if(!con_c){
		die("connection failes, error 102 contact administrator");
	}
session_start();
?>
