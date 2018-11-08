<?php
	include("config.php");
	
	$str = $_GET['q'];
	$sql="SELECT * FROM probleminfo WHERE problemtitle='$str'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$str="icb".$row[0];
	$str .= ".txt";
	$filename = getcwd ();
	$filename .= "\\problems\\".$str;
	$filename = file_get_contents($filename, true);
	
	echo $filename;
?>