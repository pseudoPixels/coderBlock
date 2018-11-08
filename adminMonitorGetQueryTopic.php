<?php
	session_start();
	include("config.php");
	date_default_timezone_set('Asia/Dhaka');
	$title=$_SESSION['contestName'];
	$sql="SELECT * FROM contestinfo WHERE contestName='$title'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$contestID=$row['contestId'];
	$sql="SELECT * FROM probleminfo WHERE contestID='$contestID'";
	$result=mysql_query($sql);
	echo '<option value="'.'GENERAL'.'">'.'GENERAL'.'</option>';
	while($row=mysql_fetch_array($result)){
		echo '<option value="'.$row['problemTitle'].'">'.$row['problemTitle'].'</option>';
	}
?>