<?php
	session_start();
	include("config.php");
	date_default_timezone_set('Asia/Dhaka');
	$title=$_SESSION['contestName'];
	$sql="SELECT * FROM contestinfo WHERE contestName='$title'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$contestID=$row['contestId'];
	$sql="SELECT * FROM contestteamlist WHERE contestID='$contestID'";
	$result=mysql_query($sql);
	echo '<option value="'.'ALL'.'">'.'ALL'.'</option>';
	while($row=mysql_fetch_array($result)){
		$teamID=$row['teamID'];
		$sql2="SELECT * FROM teaminfo WHERE teamID='$teamID'";
		$result2=mysql_query($sql2);
		$row2=mysql_fetch_array($result2);
		$teamName=$row2['teamName'];
		echo '<option value="'.$teamID.'">'.$teamName.'</option>';
	}
?>