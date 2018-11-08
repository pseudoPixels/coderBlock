<?php
 
session_start();
include("config.php");

?>

<html>
<head>
<!-- For select menus-->



<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />

<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" />

<title>iut coder block</title>
</head>
<body  width="100%">
<div id="wrap">
<h1 ><span style="font-family:arial;color:#000000;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="font-family:arial;color:#000000;">Dare to challange the world...</span></p>
<br>





<div id="cssmenu_top">
		
		<ul>
			<li><a href="index.php"><span style="text-color:#FF0000;">Home</span></a></li>
			
			</li>
			<li class='has-sub'><a href="#">Contests</a>
			<ul>
					<li><a  href="#">Running Contests</a></li>
					<li><a href="homepageComingContestDetails.php">Coming Contests</a></li>
					<li><a href="#">Past Contests</a></li>
					<li><a href="#">Contest ranking</a></li>
					</li>
				</ul>
				<li><a href="#">Additional Info</a>
				<ul>
					<li><a href="verdict_info.html">Verdict information</a></li>
					<li><a href="submission_specification.html">Submission Specification</a></li>
					</li>
				</ul>
				
			</li>
			<li><a href="#">Problems Setteres' Credit</a>
		</ul>
	
</div>


<div id="content">
<h2 style="color:#000000;font-family:arial;">Coming Contests Details </h2>

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
	
	$compIDT  = $row["contestId"];
	
	
	
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
		  //echo '<span style="font-family:arial; font-size:12pt;color:#0000FF;">'.'<u>From Admin : </u>'.'</span><br/>';
		  //echo '<span style="font-family:arial; font-size:12pt;color:#000000;">'.'<p><i>' .$compNotice.'</i></p></span><br/>';
		
		echo '<br/><br/><span style="font-family:arial; font-size:15pt;color:#658645;">'.'Following team(s) have already registered for the competition : </span><br/><br/>';
		 echo '<table class="table table-striped"  border="2" align="center" cellpadding="10px">';
         echo '<th >Serial No.</th><th >Team ID </th><th >Team Name </th><th >Team Member 1</th><th >Team Member 2</th><th >Team Member 3</th>';
		
		  $sqlT  = "SELECT * FROM contestteamlist WHERE contestID='$compIDT'";
		  $resultT = mysql_query($sqlT);
		  $count = 1;
		  while($rowT=mysql_fetch_array($resultT)){
		    $teamID = $rowT['teamID'];
			$sqlInside = "SELECT * FROM teaminfo WHERE teamID='$teamID'";
			$re = mysql_query($sqlInside);
			
			$r=mysql_fetch_array($re);
			
			echo "<tr>";
			echo "<td>$count</td>";
			echo "<td>".$teamID."</td>";
			echo "<td>".$r['teamName']."</td>";
			echo "<td>".$r['memberId01']."</td>";
			echo "<td>".$r['memberId02']."</td>";
			echo "<td>".$r['memberId03']."</td>";
			echo "</tr>";
			
		    
		  }
		   echo '</table>';
		  //echo $compIDT;
		echo "<br/><br/><br/>";
		}
	
	}
	
  if($myCounter==0)echo '<span style="font-family:comic sans ms; font-size:15pt;color:33CC00;">'.'No Coming Contest.'.'</span><br>';
  

?>




	






<hr class="clear" />

</div>


</div>
</body>
</html>
