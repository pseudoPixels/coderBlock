<?php
		include("config.php");
		session_start();
		
		$sql="SELECT max(submissionTime) FROM contestproblemssubmission";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		echo $row[0];
?>