<?php
	include('config.php');
	$username=$_GET['username'];
	$sql="SELECT * FROM userinfo WHERE userName='$username'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	if($count){
		echo '0';
	}
	else{
		echo '1';
	}
?>	
	