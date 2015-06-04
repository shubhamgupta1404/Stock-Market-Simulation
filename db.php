<?php
include "admin/off.php";
include "db1.php";
include "admin/config.php";
if (!(isset($_SESSION['username']))) header('location: ./');
?>
