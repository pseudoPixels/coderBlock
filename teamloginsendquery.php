<?php
	include('Config.php');
	session_start();
	date_default_timezone_set('Asia/Dhaka');
	$contestID=$_SESSION['contestID'];
	$teamID=$_SESSION['teamID'];
	$time=date("Y-m-d H:i:s");
	
	if(isSet($_GET['topic']) && isSet($_GET['desc'])){ 
						
		$topic=$_GET['topic'];
		$sql2="SELECT * FROM probleminfo WHERE problemid='$topic'";
		$result2=mysql_query($sql2);
		$row2=mysql_fetch_array($result2);
		$count2=mysql_num_rows($result2);
		if($count2){
			$topic=$row2['problemTitle'];
		}
		
		
		$desc=$_GET['desc'];
						
		$sql="INSERT INTO adminquery VALUES('".$contestID."',"."'admin','".$teamID."','".$topic."','".$desc."','".$time."')";
		mysql_query($sql);
	}
						
?>