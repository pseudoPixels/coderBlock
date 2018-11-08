	
	<h1 style="font-size:45px;font-family:arial;color:#000000;">Running Contests</h1><hr>

	<?php
		include('Config.php');
		date_default_timezone_set('Asia/Dhaka');
		$sql = "SELECT * FROM  contestinfo";
		$result = mysql_query($sql);
		$myCounter = 0;
		while($row=mysql_fetch_array($result)) {
		
		
		$compTitle = $row["contestName"];
		$compNotice = $row["descForUsers"];
		$compDate = $row["contestDate"];
		$compDuration = $row["Duration"];
		$compProbs = $row["numberOfProblems"];
		$compCat = $row["contestType"];
	
	
	
	    
	    $date1 = date("Y-m-d H:i:s",time()-3600); 
	    $secVal = strtotime($date1) - strtotime($compDate);
	
		if($secVal >= 0 && $secVal < $compDuration){
			$myCounter += 1;
	        $contestID = $row["contestId"];
	        echo "<span style='font-family:arial; font-size:15pt;color:#000000;'>".$myCounter.". <a href='joinRunningContest.php?id="."$contestID' target='_blank'"."><span style='color:#000000;'>$compTitle</span></a><br/><br/>";
	
	
		}
	
	}
	if($myCounter==0)echo '<span style="font-family:comic sans ms; font-size:15pt;color:33CC00;">'.'No Competition is Running Currently.'.'</span><br>';
  

	?>

	
	<br/>
	<br/>
	
	
	<h1 style="font-family:arial;color:#000000">Coming Contests</h1><hr>
	<?php

		echo '<span style="font-family:arial; font-size:15px;color:red;">'.'To take part in any of the following coming competitions you must register your team , before the contest begins. Click on the contest that you want to register in .'.'</span><br/><br/>';
		date_default_timezone_set('Asia/Dhaka');
		$sql = "SELECT * FROM  contestinfo";
		$result = mysql_query($sql);
		$myCounter = 0;
		while($row=mysql_fetch_array($result)){
			$compTitle = $row["contestName"];
			$compNotice = $row["descForUsers"];
			$compDate = $row["contestDate"];
			$compDuration = $row["Duration"];
			$compProbs = $row["numberOfProblems"];
			$compCat = $row["contestType"];
	
			$date1 = date("Y-m-d H:i:s",time()-3600); 
			$secVal = strtotime($date1) - strtotime($compDate);
		
			if($secVal < 0){
				$myCompDate =  new DateTime($compDate);
				$myCurrentDate = new DateTime($date1);
		  
				$interval = $myCurrentDate->diff($myCompDate);
		  
				$myCounter += 1;
				$contestID = $row["contestId"];
	
				echo "<span style='font-family:arial; font-size:15pt;color:#000000;'>".$myCounter.". <a href='regContest.php?id="."$contestID' "."><span style='color:#000000;'>$compTitle</span></a><br/>";
				
				
				echo '<span style="font-family:arial; font-size:12pt;color:#000000;">'. 'Only '.'</span>'.'<span style="font-family:arial; font-size:12pt;color:000000;">'.$interval->format('%d').'<span style="font-family:arial; font-size:10pt;color:#000000;">'. ' days '.$interval->format('%h').' hours '.$interval->format('%i').' minutes to go....'.'</span>'.'</span><br>';
				echo '<span style="font-family:arial;font-size:12pt;color:#000000;">'.'Date And Time : '.'</span>'.$compDate.'<br/>'.'<span style="font-family:arial;font-size:12pt;color:#000000;">'.'Duration : '.'</span>'.'<br/>'.'<span style="font-family:arial;font-size:12pt;color:#000000;">'.'Total Problems : '.'</span>'.$compProbs.'</span><br/>';
				echo '<br/><br/>';
			}
	
  
    
		}
  

	?>

	<br/>
	<br/>
	<h1 style="font-family:arial;color:#000000">Past Contests</h1><hr>
	<?php

		date_default_timezone_set('Asia/Dhaka');
		$sql = "SELECT * FROM  contestinfo";
		$result = mysql_query($sql);
		$myCounter = 0;
		while($row=mysql_fetch_array($result)) {
    
	
			$compTitle = $row["contestName"];
			$compNotice = $row["descForUsers"];
			$compDate = $row["contestDate"];
			$compDuration = $row["Duration"];
			$compProbs = $row["numberOfProblems"];
			$compCat = $row["contestType"];
			
			$contestID = $row["contestId"];
	
	
			$datetime1 = new DateTime($compDate);
			$datetime2 = new DateTime();
			
			$interval = $datetime1->diff($datetime2);
			
			$h = $datetime1->getTimestamp() - $datetime2->getTimestamp();
	
			if($h < 0){
				$h = -$h;
	 
				if($h > $compDuration){
	      
					 $myCounter++;
					 $hr = $compDuration / 3600 ;
					 $min = ($compDuration - $hr*3600) / 60;
					 //echo '<span style="font-family:arial; font-size:15pt;color:#000000;">'.$myCounter.'. '.$compTitle.'</span><br>';
                    echo "<span style='font-family:arial; font-size:15pt;color:#006600;'>".$myCounter.". <a href='pastContestHistory.php?id="."$contestID' "."><span style='color:#006600;'>$compTitle</span></a><br/><br/>";
				}
			}
	
  
    
		}
  

	?>