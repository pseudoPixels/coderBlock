<?php

    session_start();
    
 
    if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
    }
	
	include('Config.php');
 
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/icb_style_01.css"  media="screen,projection" />
<link rel="stylesheet" type="text/css" href="CSS/styles.css" />
<link rel="stylesheet" type="text/css" href="CSS/finalCss.css" />
<link rel="stylesheet" type="text/css" href="CSS/vertical.css" />
<link href="CSS/menu_assets/styles.css" rel="stylesheet" type="text/css">
<link href="CSS/menu_assets/top_menu_styles.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css" />


<link rel="stylesheet" type="text/css" href="CSS/digitalClock/digitalShadow.css" />
<script src="CSS/yearlyCalendar/calendarJs.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="CSS/yearlyCalendar/calendarCss.css" />

<script type="text/javascript">
function validateForm()
{
var teamName=document.forms["regCon"]["teamID"].value;
var teamPassword = document.forms["regCon"]["teamPassword"].value;
if (teamName==null || teamName=="" || teamPassword==null || teamPassword=="")
  {
  alert("Please make sure you have filled up the required fields before you submit. ");
  return false;
  }
}
</script>


<script type="text/javascript">
dg0=new Image();dg0.src="CSS/digitalClock/digits/dg0.gif";
dg1=new Image();dg1.src="CSS/digitalClock/digits/dg1.gif";
dg2=new Image();dg2.src="CSS/digitalClock/digits/dg2.gif";
dg3=new Image();dg3.src="CSS/digitalClock/digits/dg3.gif";
dg4=new Image();dg4.src="CSS/digitalClock/digits/dg4.gif";
dg5=new Image();dg5.src="CSS/digitalClock/digits/dg5.gif";
dg6=new Image();dg6.src="CSS/digitalClock/digits/dg6.gif";
dg7=new Image();dg7.src="CSS/digitalClock/digits/dg7.gif";
dg8=new Image();dg8.src="CSS/digitalClock/digits/dg8.gif";
dg9=new Image();dg9.src="CSS/digitalClock/digits/dg9.gif";
dgam=new Image();dgam.src="CSS/digitalClock/digits/dgam.gif";
dgpm=new Image();dgpm.src="CSS/digitalClock/digits/dgpm.gif";

function dotime(){ 
theTime=setTimeout('dotime()',1000);
d = new Date();
hr= d.getHours();
mn= d.getMinutes();
se= d.getSeconds();
if(se<10)se="0" + se;
if(mn<10)mn="0" + mn;
if(hr<10)hr="0" + hr;

/*if(hr==100){hr=112;am_pm='am';}
else if(hr<112){am_pm='am';}
else if(hr==112){am_pm='pm';}
else if(hr>112){am_pm='pm';hr=(hr-12);}*/
tot=''+hr+mn+se;
//alert(tot);
document.hr1.src = "CSS/digitalClock/digits/dg"+tot.substring(0,1)+".gif"; 
document.hr2.src = "CSS/digitalClock/digits/dg"+tot.substring(1,2)+".gif"; 
document.mn1.src = "CSS/digitalClock/digits/dg"+tot.substring(2,3)+".gif"; 
document.mn2.src = "CSS/digitalClock/digits/dg"+tot.substring(3,4)+".gif"; 
document.se1.src = "CSS/digitalClock/digits/dg"+tot.substring(4,5)+".gif";
document.se2.src = "CSS/digitalClock/digits/dg"+tot.substring(5,6)+".gif";
//document.ampm.src= 'dg'+am_pm+'.gif';
}
dotime();


</script>


<title>iut coder block</title>
</head>
<body  width="100%">
<div id="wrap">
<h1 ><span style="color:#FFFFFF;">IUT CODER BLOCK</span></h1>
<p class="slogan" ><span style="color:#FFFFFF;">Dare to challange the world...</span></p>
<br>
<div id="cssmenu_top">
		
		<ul>
			<li ><a href="login_success.php"><span style="text-color:#FF0000;">Home</span></a></li>
			<li>
			<a href="#">Algorithms</a>
		    </li>
			<li><a href="contests.php">Contests</a>
				
			</li>
			<li class='has-sub'><a href="#"><span>Problems</span></a>
				<ul>
					<li><a href="problem_by_algorithm.php">By Algorithm</a></li>
					<li><a href="problem_by_volume.php">By Volume</a></li>
					<li><a href="#">By Contest</a></li>
					<li class='last'><a href="problem_by_setters.php">By Problem Setter</a>
						
					</li>
				</ul>
				
			</li>
			
			
			
			
			
			
			
			
			<li><a href="rankList.php">Rank List</a></li>
			<li><a href="#">Learn To Program</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	
</div>

<div id="content">
<div class="my_left_menu">
<div id='cssmenu7'>
<ul>
   <li  ><a href='login_success.php'><span>Quick Submit</span></a></li>
   <li><a href='mySubmission.php'><span>My Submissions</span></a></li>
   <li class='active'><a href='myProfileView.php'><span>My Profile</span></a></li>
   <li><a href='submissionStat.php'><span>Submission Stat</span></a></li>
   <li><a href='createTeam.php'><span>Create New Team</span></a></li>
   <li><a href='joinTeam.php'><span>Join A Team</span></a></li>
</ul>
</div>

 
<br/><br/><br/><br/><br/>
<table class="digitalTimeTable"><td bgcolor="green" >
<img src="CSS/digitalClock/digits/dg8.gif" name="hr1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="hr2"><img 
src="CSS/digitalClock/digits/dgc.gif"><img 
src="CSS/digitalClock/digits/dg8.gif" name="mn1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="mn2"><img 
src="CSS/digitalClock/digits/dgc.gif"><img 
src="CSS/digitalClock/digits/dg8.gif" name="se1"><img 
src="CSS/digitalClock/digits/dg8.gif" name="se2"></td></table>
<br/>
<script type="text/javascript">calendar();</script>	

	
	
</div>



<div class="my_right_content">

<?php
 date_default_timezone_set('Asia/Dhaka');
  $cID =  $_GET['id'];
  $sql = "SELECT * FROM contestinfo WHERE contestId = '$cID'";
  $result = mysql_query($sql);
  $row=mysql_fetch_array($result);
  
  echo '<h1 align="center">'.$row['contestName']."</h1><hr>";
  echo "<br/><br/><span style='font-family:arial; font-size:15pt;color:#906C60;'>Competition was live at : ". $row['contestDate']."</span><br/>";
  
  $d = $row['Duration'];
  //echo gmdate("H:i:s", $d);
  //$myCompDate =  new DateTime($d);
  //echo $myCompDate/3600;
  
  echo "<span style='font-family:arial; font-size:15pt;color:#906C60;'>Competition Duration was : ".gmdate("H:i:s", $d)."</span><br/>";

  
  echo "<br/><br/><br/><span style='font-family:arial; font-size:15pt;color:#000000;'><u>Competition Problems : </u></span><br/><br/>";
  $sql = "SELECT * FROM probleminfo WHERE contestID = '$cID'";
  $result = mysql_query($sql);
  while($row=mysql_fetch_array($result)){
    //echo $row['problemTitle']."<br/>";
	$pID = $row['problemId'];
	echo "<a href='viewProblemGivenID.php?id="."$pID'"."><span style ='font-family:comic sans ms;font-size:15pt;color:#006600;'><strong>icb".$row['problemId']. "</strong>: &nbsp &nbsp ".$row['problemTitle']."</span></a> &nbsp &nbsp";
	  echo "<a href='login_success.php?problemID="."$pID'"."><span style ='font-family:comic sans ms;font-size:10pt;color:#FF0000;'> <strong> Submit </strong></span></a><br/>";
  }
  
  echo "<br/><br/><br/><br/><br/><span style='font-family:arial; font-size:15pt;color:#000000;'><u>Contest Problem Setters : </u></span><br/><br/>";
  
  $distAlg = "SELECT * From probleminfo  GROUP BY problemSetter HAVING COUNT(*) >=1 AND contestID = '$cID'";
  $result = mysql_query($distAlg);
 
 $iC = 1 ; 
 while($row=mysql_fetch_array($result)){
   $ps = $row['problemSetter'];
   
   $psSql = "SELECT * FROM problemsetter WHERE userName = '$ps'";
   $res = mysql_query($psSql);
   $r = mysql_fetch_array($res);
   
   echo "<span style='font-family:arial; font-size:15pt;color:#006600;'> ".$iC.".".$r['fullName'].", </span><span style='font-family:arial; font-size:10pt;color:#000000;'> ".$r['details']."</span><br/>";
   $iC++;
   
 }
 
		$sql="SELECT * FROM contestinfo WHERE contestID='$cID'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$_SESSION['contestDate']=$row['contestDate'];
		
		
		
          echo "<br/><br/><br/><br/>";
            echo "<table class='table table-bordered'><tr>";
			echo "<th>Rank</th><th>TeamID</th><th>TeamName</th>";
			
			
			$teamname=$_GET['t'];
			$contestname=$_GET['c'];
			$sql="SELECT * FROM probleminfo WHERE contestID='$cID'";
			$result=mysql_query($sql);
			$num_of_problems=mysql_num_rows($result);
			$i=0;
			while($row=mysql_fetch_array($result)){
					
					$problemID[$i]=$row['problemId'];
					$problemname[$i]=$row['problemTitle'];
					echo "<th>$problemname[$i]</th>";
					$i++;
					
			}
			echo "<th>Best Runtime</th><th>Points</th></tr>";
			
			
			
			
			
			
			
			
			$teamlistID[$i]=array();
			$teamlistName[$i]=array();
			$sql1="SELECT * FROM contestteamlist WHERE contestID='$cID'";
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
			$totalRejected=array_fill(0, 500, 0);
			
			for($i=0;$i<$num_of_teams;$i++){
				$sqltemp="SELECT * FROM contestproblemssubmission WHERE contestID='$cID' AND teamID='$teamlistID[$i]' AND verdict='Accepted' ORDER BY runtime ASC";
				$resulttemp=mysql_query($sqltemp);
				$rowtemp=mysql_fetch_array($resulttemp);
				if($rowtemp['runtime']==NULL){
					$rowtemp['runtime']=0;
				}
				$teamRuntime[$i]=$rowtemp['runtime'];
				for($j=0;$j<$num_of_problems;$j++){
					$sql2="SELECT * FROM contestproblemssubmission WHERE contestID='$cID' AND teamID='$teamlistID[$i]' AND problemID='$problemID[$j]' AND verdict='Accepted'";
					$result2=mysql_query($sql2);
					$total_accepted=mysql_num_rows($result2);
					$row2=mysql_fetch_array($result2);
					$problemsubtime=$row2['submissionTime'];
					if($total_accepted){
						$dur_time=strtotime($problemsubtime)-strtotime($_SESSION['contestDate']);
						
						$dur_time=intval($dur_time/60);
						$teamPoints[$i]+=$dur_time;
						//$teamPoints[$i]+=strtotime($problemsubtime);
						//$row2=mysql_fetch_array($result2);
						//$teamRuntime[$i]+=$row2['runtime'];
						$Accepted[$i][$j]=1;
						$totalAccepted[$i]+=1;
					}
					$sql3="SELECT * FROM contestproblemssubmission WHERE contestID='$cID' AND problemID='$problemID[$j]' AND teamID='$teamlistID[$i]' AND verdict!='Accepted'";
					$result3=mysql_query($sql3);
					$total_submitted=mysql_num_rows($result3);
					$submitted[$i][$j]=$total_submitted;
					$totalRejected[$i]+=$total_submitted;
					$teamPoints[$i]+=20*$total_submitted;
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
			for($i=$num_of_teams-1;$i>=0;$i--){
				for($j=0;$j<$i;$j++){
					if($totalAccepted[$j]==$totalAccepted[$i] && $teamPoints[$j]==$teamPoints[$i] && $submitted[$j]<$submitted[$i]){
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
				echo "<td>$teamRuntime[$i]</td><td>$teamPoints[$i]</td></tr>";
			}
			echo "</table>";
		
			
		
			
			
?>

</div>


<hr class="clear" />

</div>


</div>
</body>
</html>
