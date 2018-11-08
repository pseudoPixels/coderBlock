<?php
		session_start();
		include('Config.php');
		date_default_timezone_set('Asia/Dhaka');
		$sql = "SELECT * FROM  contestinfo";
		$result = mysql_query($sql);
		$i=0;
		while($row=mysql_fetch_array($result)) {
			$contestID = $row['contestId'];
			$compTitle = $row["contestName"];
			$compNotice = $row["descForUsers"];
			$compDate = $row["contestDate"];
			$compDuration = $row["Duration"];
			$compProbs = $row["numberOfProblems"];
			$compCat = $row["contestType"];
			
			$date1 = date("Y-m-d H:i:s", time()-3600); 
			$secVal = strtotime($date1) - strtotime($compDate);
			
			if($secVal >= 0 && $secVal < $compDuration){
				
				$i++;
				echo '<input type="button" class="mybutton2" value="'.$compTitle.'" onclick="loadcontest(this.value);refreshQueryTopic();refreshTeamlist();">';
				
				$contestDate=$compDate;
				$contestDuration=$compDuration;
				$dateTimeObj = new DateTime($contestDate);
				$add = '+'.$contestDuration.' seconds';
				$dateTimeObj->modify($add);
				
				$date1 = new DateTime("now");
				
				echo '<span style="font-family:arial;color:#000000"><b>'.$date1->diff($dateTimeObj)->format("%d days, %h hours and %i minutes remaining..").'</b></span></br>';
				 
				
			}
		}
		if($i==0){
			echo '<span style="font-family:arial;color:#000000;">Sorry no running contest</span>';
		}
?>