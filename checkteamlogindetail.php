<?php
	session_start();
    include("Config.php");
	$contestID=$_POST['login-contestID'];
	$teamID=$_POST['login-teamid'];
	$username=$_POST['login-username'];
	$password=$_POST['login-password'];
	
	$sql="SELECT * FROM contestteamlist WHERE contestID='$contestID'";
	$result=mysql_query($sql);
	$count=mysql_num_rows($result);
	
	if($count){
			
			
			$sql="SELECT * FROM teaminfo WHERE teamID='$teamID' AND teamPassword='$password' AND (memberid01='$username' OR memberid02='$username' OR memberid03='$username')";
			$result=mysql_query($sql);
			$count=mysql_num_rows($result);
			if($count){
				$_SESSION['teamID']=$teamID;
				$_SESSION['username']=$username;
				$_SESSION['contestID']=$contestID;
				header('Location: teamloginproblemselect.php');
			}
			else{
				header('Location: teamlogin.php?rejected=1');
				exit();
			}
				
	}
	else{
		header('Location: teamlogin.php?rejected=1');
		exit();
	}
	
?>