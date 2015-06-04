<?php
error_reporting(0);
include "db_details.php";
$con = mysql_connect($host, $user, $pass)or die("cannot connect"); 
mysql_select_db($db,$con)or die("cannot select DB");
session_start();
?>
