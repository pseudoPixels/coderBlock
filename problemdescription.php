<?php
	include("config.php");
	
	$str = $_GET['q'];
	$sql="SELECT * FROM probleminfo WHERE problemID='$str'";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	
	echo '<h1 style ="font-family:arial;color:#000000" align="center">';echo $row["problemTitle"]; echo '</h1><hr>';
	
	echo '<br><br>';
   echo '<span style="color:#FF0000;font-size:20px;">Time Limit : '; echo $row["problemTimeLimit"].' seconds.</span><br/><br/>';
   
   echo '<h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Problem</h3>';
   
   echo '<p style="color:#000000;font-family:sans serif; font-size:18px;">'; echo $row["probDesc"]; echo '</p>';
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Input</h3>';
   echo '<p style="color:#000000;font-family:sans serif; font-size:18px;">'; echo $row["theInput"].'</p>';
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">The Output</h3>';
   echo '<p style="color:#000000;font-family:sans serif; font-size:18px;">'; echo $row["theOutput"].'</p>';
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Input</h3>';
   echo '<pre><span style="color:#000000;font-family:sans serif; font-size:18px;">'; echo $row["sampleInput"].'</span></pre>';
   
   
   echo '<br><br><h3 style="color:#0066CC;font-family:comic sans ms; font-size:30px;">Sample Output</h3>';
   echo '<pre><span style="color:#000000;font-family:sans serif; font-size:18px;">'; echo $row["sampleOutput"].'</span></pre>';

   
?>