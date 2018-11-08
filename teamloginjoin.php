<?php
	session_start();
    include("Config.php");
	$contestID=$_GET['contestID'];
	$teamID=$_POST['teamID'];
	$username=$_SESSION['userName'];
	$password=$_POST['teamPassword'];
	
	
			
			
			$sql="SELECT * FROM teaminfo WHERE teamID='$teamID' AND teamPassword='$password' AND (memberid01='$username' OR memberid02='$username' OR memberid03='$username')";
			$result=mysql_query($sql);
			$count=mysql_num_rows($result);
			if($count){
				$_SESSION['teamID']=$teamID;
				$_SESSION['username']=$username;
				$_SESSION['contestID']=$contestID;
				header('Location: teamSubmit.php');
			}
			else{
				header('Location: joinRunningContest.php');
				exit();
			}
				
	
?>