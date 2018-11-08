<?php
	include('Config.php');
	$contestID=$_GET['contestID'];
	$member01 = $_GET['userName'];
    $teamName = $_GET['teamName'];
	$teamPassword = $_GET['teamPassword'];
	$numberOfMembers = 1;
	
	$sql="SELECT * FROM teaminfo WHERE teamName='$teamName'";
	$result = mysql_query($sql);
	//$row=mysql_fetch_array($result);
	$count = mysql_num_rows($result);
	
	if($count){
		echo 'Team creation failed...</br>Team already exists';
	}
	
	else{
	
	
		$insSQL = "INSERT INTO teaminfo(teamName, teamPassword, numberOfTeamMembers, memberId01) VALUES('$teamName', '$teamPassword', '$numberOfMembers', '$member01')";
		$res = mysql_query($insSQL);
		$lastAutoincreamentValue = mysql_insert_id();
		$sql = "INSERT INTO contestteamlist VALUES('$contestID','$lastAutoincreamentValue')";
		
		mysql_query($sql);

		echo 'Team Created Successfully<br/>';
		echo 'Your team Name = '. $teamName .'<br/>';
		echo 'Your team ID = '. $lastAutoincreamentValue.'<br/>';
		
		echo 'You will require this team ID when you login next time in the team.<br/>';
	}
?>
