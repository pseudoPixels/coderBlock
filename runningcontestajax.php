<script>
	function confirmjoin(){
		var con=confirm('Are you sure you want to join this competetion?')
		if(con){
			return true;
		}
		else{
			return false;
		}
	}
	
	function confirmCreate(){
		var con=confirm('Are you sure you want to create a team for this competetion?')
		if(con){
			return true;
		}
		else{
			return false;
		}
	}
</script>



<br>
<h2 style="color:#000000;font-family:arial;">Running Contests</h2>

<?php
	include('config.php');
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
	
	
	
	    //this date1 contains the current date and time
	    $date1 = date("Y-m-d H:i:s", time()-3600); 
	    $secVal = strtotime($date1) - strtotime($compDate);
	
        

	
	    //if $secVal is NEGATIVE then it is coming contest
		//if $secVal is POSITIVE (>=0)
		     //then if $secVal is BIGGER than duration , it is PAST constest
		     // and if $secVal is LESSER than duration , it is RUNNING constest
			 
			 
			 
		
	    if($secVal >= 0 && $secVal < $compDuration){
	
			$myCounter += 1;
			echo '<span style="font-family:arial; font-size:13pt;color:#00CC00;"><b>'.$myCounter.'. '.$compTitle.'</b></span>';
			echo '<a href="teamlogin.php?contestName='.$compTitle.'" onclick="return confirmjoin();">  join</a><br/>'; 
	    }
	
	}
	
  if($myCounter==0)echo '<span style="font-family:arial; font-size:14pt;color:#000000;">'.'No Competition is Running Currently.'.'</span><br/><br/><br/><br/>';
  

?>
<br>
</br>
<h2 style="color:#000000;font-family:arial;">Coming Competitions </h2>

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
	
	
	
	    //this date1 contains the current date and time
	    $date1 = date("Y-m-d H:i:s",time()-3600); 
	    $secVal = strtotime($date1) - strtotime($compDate);
	     
		 


	
	    //if $secVal is NEGATIVE then it is coming contest
		//if $secVal is POSITIVE (>=0)
		     //then if $secVal is BIGGER than duration , it is PAST constest
		     // and if $secVal is LESSER than duration , it is RUNNING constest
			 
			 
			 
		
	    if($secVal < 0){
		  $myCompDate =  new DateTime($compDate);
		  $myCurrentDate = new DateTime($date1);
		  
	      $interval = $myCurrentDate->diff($myCompDate);
		  
	      $myCounter += 1;
	      echo '<span style="font-family:arial; font-size:13pt;color:#00CC00;"><b>'.$myCounter.'. '.$compTitle.'</b></span>';
		  echo '<a href="createTeamFromMain.php?contestName='.$compTitle.'" onclick="return confirmCreate();">  (Create/Join A Team)</a>'; 
		  echo '<a href="registerTeamFromMain.php?contestName='.$compTitle.'" onclick="return confirmCreate();">  Register</a></br>'; 
	      echo '<span style="font-family:arial; font-size:12pt;color:#000000;">'.'Only '.$interval->d.' day(s) , '.$interval->h.' hours and '.$interval->i.' minutes to go...'.'</span><br/>';
		  echo '<span style="font-family:arial; font-size:12pt;color:#000000;">'.'Contest Time : ' .$compDate.'</span><br/>';
	      echo '<span style="font-family:arial; font-size:12pt;color:#000000;">'.'Contest Duration : ' .gmdate("H:i:s", $compDuration).'</span><br/>';
		  echo '<span style="font-family:arial; font-size:12pt;color:#000000;">'.'Contest problems : ' .$compProbs.'</span><br/>';
		  echo '<span style="font-family:arial; font-size:12pt;color:#0000FF;">'.'<u>From Admin : </u>'.'</span><br/>';
		  echo '<span style="font-family:arial; font-size:12pt;color:#000000;">'.'<p><i>' .$compNotice.'</i></p></span><br/>';
		}
	
	}
	
  if($myCounter==0)echo '<span style="font-family:comic sans ms; font-size:15pt;color:33CC00;">'.'No Coming Contest.'.'</span><br>';
  

?>

	
	
	