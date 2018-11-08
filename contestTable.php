

<html>
	</br>
	</br>
	</br>
	<table  border="4" style="width:600px;">
				<tr>
					<td>Team ID</td>
					<td>Team Name</td>
					<td>Submitted/Accepted</td>
					<td>Points</td>
					<td>Rank</td>
				</tr>



<?php
	include("config.php");
	$sql = 'SELECT teamID,contestId,points,rank FROM teamrecordinacontest';
	$retval = mysql_query($sql);
	while($row = mysql_fetch_array($retval, MYSQL_NUM))
	{
		echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>";	
	}
?>

	</table>
</html>