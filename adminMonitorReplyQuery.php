<?php
	session_start();
	include("config.php");
	date_default_timezone_set('Asia/Dhaka');
	$title=$_SESSION['contestName'];
	$querytopic=$_GET['queryTopic'];
	$teamID=$_GET['teamName'];
	$queryDescription=$_GET['queryDescription'];
	$sql="SELECT * FROM contestinfo WHERE contestName='$title'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$contestID=$row['contestId'];
	$sql="INSERT INTO adminquery VALUES('$contestID','$teamID','admin','$querytopic','$queryDescription',NOW())";
	$result=mysql_query($sql);
	echo 'Query replied successfully';
?>