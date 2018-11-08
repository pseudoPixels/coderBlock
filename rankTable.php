<?php
	session_start();
	date_default_timezone_set('Asia/Dhaka');
?>

		<tr>

		<?php
			include("config.php");
			
			
			
			echo "<td><b>Rank</b></td><td><b>TeamID</b></td><td><b>TeamName</b></td>";
			
			
			$teamname=$_GET['t'];
			$contestname=$_GET['c'];
			$sql="SELECT * FROM probleminfo WHERE contestID='$contestname'";
			$result=mysql_query($sql);
			$num_of_problems=mysql_num_rows($result);
			$i=0;
			while($row=mysql_fetch_array($result)){
					
					$problemID[$i]=$row['problemId'];
					$problemname[$i]=$row['problemTitle'];
					echo "<td><b>$problemname[$i]</b></td>";
					$i++;
					
			}
			echo "<td><b>Total(Accepted/Submitted)</b></td><td><b>Points</b></td>";
			
			
			
	
		?>

		</tr>
		<?php
			
			
			
			$teamlistID[$i]=array();
			$teamlistName[$i]=array();
			$sql1="SELECT * FROM contestteamlist WHERE contestID='$contestname'";
			$result1=mysql_query($sql1);
			$num_of_teams=mysql_num_rows($result1);
			$i=0;
			while($row1=mysql_fetch_array($result1)){
				$teamlistID[$i]=$row1['teamID'];
				$sql4="SELECT * FROM teaminfo WHERE teamID='$teamlistID[$i]'";
				$result4=mysql_query($sql4);
				$row4=mysql_fetch_array($result4);
				$teamlistName[$i]=$row4['teamName'];
				$i++;						
			}
			$m_by_n_array=array(array());
			$m_by_n_array = array_fill(0, 500, array_fill(0, 500, 0));
			$teamPoints=array();
			$teamRuntime=array();
			$teamPoints=array_fill(0, 500, 0);
			$teamRuntime=array_fill(0, 500, 0);
			$Accepted=array_fill(0, 500, array_fill(0, 500, 0));
			$submitted=array_fill(0, 500, array_fill(0, 500, 0));
			$totalAccepted=array_fill(0, 500, 0);
			$totalSubmitted=array_fill(0, 500, 0);
			
			for($i=0;$i<$num_of_teams;$i++){
				for($j=0;$j<$num_of_problems;$j++){
					$sql2="SELECT * FROM contestproblemssubmission WHERE contestID='$contestname' AND teamID='$teamlistID[$i]' AND problemID='$problemID[$j]' AND verdict='Accepted'";
					$result2=mysql_query($sql2);
					$temprow=mysql_fetch_array($result2);
					$time=$temprow['submissionTime'];
					
					$total_accepted=mysql_num_rows($result2);
					
					$sql3="SELECT * FROM contestproblemssubmission WHERE contestID='$contestname' AND problemID='$problemID[$j]' AND teamID='$teamlistID[$i]'";
					$result3=mysql_query($sql3);
					$total_submitted=mysql_num_rows($result3);
					$submitted[$i][$j]=$total_submitted;
					$totalSubmitted[$i]+=$total_submitted;
					
					
					
					if($total_accepted){
						$dur_time=strtotime($time)-strtotime($_SESSION['contestDate']);
						$dur_time=intval($dur_time/60);
						$teamPoints[$i]+=$dur_time;
						
						$row2=mysql_fetch_array($result2);
						$teamRuntime[$i]+=$row2['runtime'];
						$Accepted[$i][$j]=1;
						$totalAccepted[$i]+=1;
						
						
						
						
						$teamPoints[$i]+=20*$total_submitted;
						
					}
					
					
					
					
				}
			}
			for($i=$num_of_teams-1;$i>=0;$i--){
				for($j=0;$j<$i;$j++){
					if($totalAccepted[$j]<$totalAccepted[$i]){
					
						$temp=$teamlistID[$j];
						$teamlistID[$j]=$teamlistID[$i];
						$teamlistID[$i]=$temp;
						$temp=$teamlistName[$j];
						$teamlistName[$j]=$teamlistName[$i];
						$teamlistName[$i]=$temp;
						$temp=$teamPoints[$j];
						$teamPoints[$j]=$teamPoints[$i];
						$teamPoints[$i]=$temp;
						$temp=$teamRuntime[$j];
						$teamRuntime[$j]=$teamRuntime[$i];
						$teamRuntime[$i]=$temp;
						$temp=$Accepted[$j];
						$Accepted[$j]=$Accepted[$i];
						$Accepted[$i]=$temp;
						$temp=$submitted[$j];
						$submitted[$j]=$submitted[$i];
						$submitted[$i]=$temp;
						
						$temp=$totalAccepted[$j];
						$totalAccepted[$j]=$totalAccepted[$i];
						$totalAccepted[$i]=$temp;
						
					}
				}
			}
			
			for($i=$num_of_teams-1;$i>=0;$i--){
				for($j=0;$j<$i;$j++){
					if($totalAccepted[$j]==$totalAccepted[$i] && $teamPoints[$j]>$teamPoints[$i]){
						$temp=$teamlistID[$j];
						$teamlistID[$j]=$teamlistID[$i];
						$teamlistID[$i]=$temp;
						$temp=$teamlistName[$j];
						$teamlistName[$j]=$teamlistName[$i];
						$teamlistName[$i]=$temp;
						$temp=$teamPoints[$j];
						$teamPoints[$j]=$teamPoints[$i];
						$teamPoints[$i]=$temp;
						$temp=$teamRuntime[$j];
						$teamRuntime[$j]=$teamRuntime[$i];
						$teamRuntime[$i]=$temp;
						$temp=$Accepted[$j];
						$Accepted[$j]=$Accepted[$i];
						$Accepted[$i]=$temp;
						$temp=$submitted[$j];
						$submitted[$j]=$submitted[$i];
						$submitted[$i]=$temp;
						
					}
				}
			}
			
			
			
			
			
			
			
			for($i=0;$i<$num_of_teams;$i++){
				echo "<tr><td>".($i+1)."</td><td>$teamlistID[$i]</td><td>$teamlistName[$i]</td>";
				for($j=0;$j<$num_of_problems;$j++){
					if($Accepted[$i][$j]){
						echo "<td>".$Accepted[$i][$j]."/";
					}
					else{
						echo "<td>-/";
					}
					if($submitted[$i][$j]){
						echo $submitted[$i][$j]."</td>";
					}
					else{
						echo "-</td>";
					}
					
				}
				echo "<td>$totalAccepted[$i]/$totalSubmitted[$i]</td><td>$teamPoints[$i]</td></tr>";
			}
			
		
			
		?>
		
		
	