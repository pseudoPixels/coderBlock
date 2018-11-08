<?php
	include('Config.php');
	$member01 = $_GET['userName'];
    $teamID = $_GET['teamID'];
	$teamPassword = $_GET['teamPassword'];
	
	$sql="SELECT * FROM teaminfo WHERE teamID='$teamID' AND (memberId01='$member01' OR memberId02='$member01' OR memberId03='$member01')";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	if($count){
		echo 'Team join failed...</br>Username already registered in this team';
	}
	
	else{
		$sql="SELECT * FROM teaminfo WHERE teamID='$teamID' AND teamPassword='$teamPassword'";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		if($count){
			$row=mysql_fetch_array($result);
			$num_of_members=$row['numberOfTeamMembers'];
			$num_of_members+=1;
			$str="memberId0".$num_of_members;
			$insSQL = "UPDATE teaminfo SET numberOfTeamMembers='$num_of_members',$str='$member01' WHERE teamID='$teamID'";
			$res = mysql_query($insSQL);
			echo 'Joined to team: '.$row['teamName'].' successfully!!!';
		}
		else{
			echo 'Wrong Password';
		}
	}
?>
