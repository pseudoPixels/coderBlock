<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "iutcoderblock";


/*
$mysql_hostname = "mysql.1freehosting.com";
$mysql_user = "u766062228_root";
$mysql_password = "104404";
$mysql_database = "u766062228_testdb";
*/
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
?>