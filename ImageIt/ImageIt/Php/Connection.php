<?php
$mysql_hostname = "us-cdbr-azure-northcentral-b.cloudapp.net";
$mysql_user ="badc94459f90b9";
$mysql_password ="1688e8b3";
$mysql_database= "ImageIt";
$prefix = "";
$connection = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect to database");
mysql_select_db($mysql_database, $connection) or die("Could not select the database");

?>