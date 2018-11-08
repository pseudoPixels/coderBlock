<?php
	include('Config.php');
	$member01 = $_GET['userName'];
    $teamID = $_GET['teamID'];
	$teamPassword = $_GET['teamPassword'];
	$contestID= $_GET['contestID'];
	//echo $member01.$teamID.$teamPassword.$contestID;
	
	$sql="SELECT * FROM teaminfo WHERE teamID='$teamID' AND teamPassword='$teamPassword' AND (memberId01='$member01' OR memberId02='$member01' OR memberId03='$member01')";
	$result = mysql_query($sql);
	$count = mysql_num_rows($result);
	
	if($count){
		$sql="SELECT * FROM contestteamlist WHERE contestID='$contestID' AND teamID='$teamID'";
		$result = mysql_query($sql);
		$count = mysql_num_rows($result);
		if($count){
			echo 'Team already registered';
		}
		else{
			$sql="INSERT INTO contestteamlist VALUES('$contestID','$teamID')";
			$result = mysql_query($sql);
			echo "Team registered successfully...Thank you for your participation";
		}
		
	}
	
	else{
		echo "Team registration failed";
	}
?>
